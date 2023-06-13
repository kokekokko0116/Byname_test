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

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->view('pages.send.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        $profile = User::query()
        ->find(Auth::user()->id)
        ->userprofile()
        ->first();

        return response()->view('pages.send.accept', compact('profile'));
    }

    public function accept($user_id)
    {
        $profile = User::query()
        ->find($user_id)
        ->userprofile()
        ->first();

        return response()->view('pages.send.accept', compact('profile'));
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
