<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Association;
use App\Models\Education;
use App\Models\Profile;
use App\Models\Work_Experience;
use App\Models\Work_Myprofile_Detail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class WorkMyprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session()->forget('data');
        return response()->view('pages.work_myprofile.index');
    }

    public function form_photo()
    {
        return response()->view('pages.work_myprofile.form_photo');
    }

    public function form_one(Request $request)
    {
        $data = $request->session()->get('data',[]);
        $data = array_merge($data, $request->all());
        $request->session()->put('data', $data);

        return response()->view('pages.work_myprofile.form_one',compact('data'));
    }

    public function form_two(Request $request)
    {
        $data = $request->session()->get('data',[]);
        $data = array_merge($data, $request->all());
        $request->session()->put('data', $data);

        $education = User::query()
        ->find(Auth::user()->id)
        ->usereducations()
        ->get();

        $work_experience = User::query()
        ->find(Auth::user()->id)
        ->userwork_experiences()
        ->get();

        return response()->view('pages.work_myprofile.form_two',compact('data','education','work_experience'));
    }

    public function form_three(Request $request)
    {
        $data = $request->session()->get('data',[]);
        $data = array_merge($data, $request->all());
        $request->session()->put('data', $data);

        $work_myprofile_detail = User::query()
        ->find(Auth::user()->id)
        ->userwork_myprofile_detail()
        ->first();

        return response()->view('pages.work_myprofile.form_three',compact('data','work_myprofile_detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile = User::query()
        ->find(Auth::user()->id)
        ->userprofile()
        ->first();

        $association = User::query()
        ->find(Auth::user()->id)
        ->userassociation()
        ->first();

        return response()->view('pages.work_myprofile.form_one',compact('profile','association'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->session()->get('data');
        $data = array_merge($data, $request->all());

        // データベースにデータが保存されている場合は、更新処理に移動
        if (Auth::user()->work_myprofile_detail) {
        }

        // profileテーブルの登録 or 更新
        if($data['profile_id']){
            $profile = Profile::find($data['profile_id']);
        }else{
            $profile = new Profile;
        }
        $profile->user_id = Auth::user()->id;
        $profile->japanese_name = $data['japanese_name'];
        $profile->roman_name = $data['roman_name'];
        $profile->birthday = $data['birthday'];
        $profile->birthplace = $data['birthplace'];
        $profile->save();

        // associationテーブルの登録 or 更新
        if($data['association_id']){
            $association = Association::find($data['association_id']);
        }else{
            $association = new Association;
        }
        $association->user_id = Auth::user()->id;
        $association->profession = $data['profession'];
        $association->company_name = $data['company'];
        $association->company_postcode = $data['company_postcode'];
        $association->company_address = $data['company_address'];
        $association->company_telephonenumber = $data['company_telephonenumber'];
        $association->company_faxnumber = $data['company_faxnumber'];
        $association->company_homepage = $data['company_homepage'];
        $association->company_email = $data['company_email'];
        $association->company_phone_number = $data['company_phone_number'];
        $association->save();

        // educationテーブルの登録 or 更新
        if($data['school'][0]['id']){
            $education1 = Education::find($data['school'][0]['id']);
        }else{
            $education1 = new Education;
        }
        $education1->user_id = Auth::user()->id;
        $education1->school_name = $data['school'][0]['name'];
        $education1->school_department = $data['school'][0]['department'];
        $education1->entrance_year = $data['school'][0]['entrance_year'];
        $education1->graduation_year = $data['school'][0]['graduation_year'];
        $education1->school_activity = $data['school'][0]['activity'];
        $education1->save();
        
        if($data['school'][1]['id']){
            $education2 = Education::find($data['school'][1]['id']);
        }else{
            $education2 = new Education;
        }
        $education2->user_id = Auth::user()->id;
        $education2->school_name = $data['school'][1]['name'];
        $education2->school_department = $data['school'][1]['department'];
        $education2->entrance_year = $data['school'][1]['entrance_year'];
        $education2->graduation_year = $data['school'][1]['graduation_year'];
        $education2->school_activity = $data['school'][1]['activity'];
        $education2->save();

        if($data['school'][2]['id']){
            $education3 = Education::find($data['school'][2]['id']);
        }else{
            $education3 = new Education;
        }
        $education3->user_id = Auth::user()->id;
        $education3->school_name = $data['school'][2]['name'];
        $education3->school_department = $data['school'][2]['department'];
        $education3->entrance_year = $data['school'][2]['entrance_year'];
        $education3->graduation_year = $data['school'][2]['graduation_year'];
        $education3->school_activity = $data['school'][2]['activity'];
        $education3->save();

        // work_experienceテーブルの登録 or 更新
        if($data['career'][0]['id']){
            $work_experience1 = Work_Experience::find($data['career'][0]['id']);
        }else{
            $work_experience1 = new Work_Experience;
        }
        $work_experience1->user_id = Auth::user()->id;
        $work_experience1->career_name = $data['career'][0]['name'];
        $work_experience1->career_department = $data['career'][0]['department'];
        $work_experience1->entering_date = $data['career'][0]['entering_date'];
        $work_experience1->retirement_date = $data['career'][0]['retirement_date'];
        $work_experience1->career_detail = $data['career'][0]['detail'];
        $work_experience1->save();

        if($data['career'][1]['id']){
            $work_experience2 = Work_Experience::find($data['career'][1]['id']);
        }else{
            $work_experience2 = new Work_Experience;
        }
        $work_experience2->user_id = Auth::user()->id;
        $work_experience2->career_name = $data['career'][1]['name'];
        $work_experience2->career_department = $data['career'][1]['department'];
        $work_experience2->entering_date = $data['career'][1]['entering_date'];
        $work_experience2->retirement_date = $data['career'][1]['retirement_date'];
        $work_experience2->career_detail = $data['career'][1]['detail'];
        $work_experience2->save();

        if($data['career'][2]['id']){
            $work_experience3 = Work_Experience::find($data['career'][2]['id']);
        }else{
            $work_experience3 = new Work_Experience;
        }
        $work_experience3->user_id = Auth::user()->id;
        $work_experience3->career_name = $data['career'][2]['name'];
        $work_experience3->career_department = $data['career'][2]['department'];
        $work_experience3->entering_date = $data['career'][2]['entering_date'];
        $work_experience3->retirement_date = $data['career'][2]['retirement_date'];
        $work_experience3->career_detail = $data['career'][2]['detail'];
        $work_experience3->save();

        // work_myprofile_detailテーブルの登録 or 更新
        if($data['work_myprofile_detail_id']){
            $work_myprofile_detail = Work_Myprofile_Detail::find($data['work_myprofile_detail_id']);
        }else{
            $work_myprofile_detail = new Work_Myprofile_Detail;
        }
        $work_myprofile_detail->user_id = Auth::user()->id;
        $work_myprofile_detail->episode_kinds =  $data['episode_kinds'];
        $work_myprofile_detail->episode = $data['episode'];
        $work_myprofile_detail->catchcopy = $data['catchcopy'];
        // 以下、motivationを選択していた場合のみ保存
        if (isset($data['motivation'][0])) {
            $work_myprofile_detail->motivation_1 = $data['motivation'][0];
        }
        if (isset($data['motivation'][1])) {
            $work_myprofile_detail->motivation_2 = $data['motivation'][1];
        }
        if (isset($data['motivation'][2])) {
            $work_myprofile_detail->motivation_3 = $data['motivation'][2];
        }
        $work_myprofile_detail->save();

        // sessionを削除
        $request->session()->forget('data');
        return response()->view('pages.work_myprofile.index');
    }

    public function photo_store(Request $request)
    {

        return response()->view('pages.work_myprofile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = User::query()
        ->find(Auth::user()->id)
        ->userprofile()
        ->first();

        $association = User::query()
        ->find(Auth::user()->id)
        ->userassociation()
        ->first();

        $education = User::query()
        ->find(Auth::user()->id)
        ->usereducations()
        ->get();

        $work_experience = User::query()
        ->find(Auth::user()->id)
        ->userwork_experiences()
        ->get();

        $work_myprofile_detail = User::query()
        ->find(Auth::user()->id)
        ->userwork_myprofile_detail()
        ->first();

        return response()->view('pages.work_myprofile.show',compact('profile','association','education','work_experience','work_myprofile_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
