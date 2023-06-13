<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Myprofile Edit 2') }}
    </h2>
  </x-slot>

    <form id="Form" action="" method="POST">
    @csrf
        <div>学歴１</div>
        <input type="hidden" name="school[0][id]" value="{{ $education[0]->id ?? ''}}">
        <div>
            <label for="school_name_0">学校名</label>
            <input type="text" id="school_name_0" name="school[0][name]" value="{{ old('school.0.name', $data['school'][0]['name'] ?? $education[0]->school_name ?? '') }}">
        </div>
        <div>
            <label for="school_department_0">学部</label>
            <input type="text" id="school_department_0" name="school[0][department]" value="{{ old('school.0.department', $data['school'][0]['department'] ?? $education[0]->school_department ?? '') }}">
        </div>
        <div>
            <label for="entrance_year_0">入学年</label>
            <input type="number" min="1900" max="2060" id="entrance_year_0" name="school[0][entrance_year]" value="{{ old('school.0.entrance_year', $data['school'][0]['entrance_year'] ?? $education[0]->entrance_year ?? '') }}">
        </div>
        <div>
            <label for="graduation_year_0">卒業年</label>
            <input type="number" min="1900" max="2060" id="graduation_year_0" name="school[0][graduation_year]" value="{{ old('school.0.graduation_year', $data['school'][0]['graduation_year'] ?? $education[0]->graduation_year ?? '') }}">
        </div>
        <div>
            <label for="school_activity_0">活動</label>
            <input type="text" id="school_activity_0" name="school[0][activity]" value="{{ old('school.0.activity', $data['school'][0]['activity'] ?? $education[0]->school_activity ?? '') }}">
        </div>

        <div>学歴２</div>
        <input type="hidden" name="school[1][id]" value="{{ $education[1]->id ?? ''}}">
        <div>
            <label for="school_name_1">学校名</label>
            <input type="text" id="school_name_1" name="school[1][name]" value="{{ old('school.1.name', $data['school'][1]['name'] ?? $education[1]->school_name ?? '') }}">
        </div>
        <div>
            <label for="school_department_1">学部</label>
            <input type="text" id="school_department_1" name="school[1][department]" value="{{ old('school.1.department', $data['school'][1]['department'] ?? $education[1]->school_department ?? '') }}">
        </div>
        <div>
            <label for="entrance_year_1">入学年</label>
            <input type="number" min="1900" max="2060" id="entrance_year_1" name="school[1][entrance_year]" value="{{ old('school.1.entrance_year', $data['school'][1]['entrance_year'] ?? $education[1]->entrance_year ?? '') }}">
        </div>
        <div>
            <label for="graduation_year_1">卒業年</label>
            <input type="number" min="1900" max="2060" id="graduation_year_1" name="school[1][graduation_year]" value="{{ old('school.1.graduation_year', $data['school'][1]['graduation_year'] ?? $education[1]->graduation_year ?? '') }}">
        </div>
        <div>
            <label for="school_activity_1">活動</label>
            <input type="text" id="school_activity_1" name="school[1][activity]" value="{{ old('school.1.activity', $data['school'][1]['activity'] ?? $education[1]->school_activity ?? '') }}">
        </div>

        <div>学歴３</div>
        <input type="hidden" name="school[2][id]" value="{{ $education[2]->id ?? ''}}">
        <div>
            <label for="school_name_2">学校名</label>
            <input type="text" id="school_name_2" name="school[2][name]" value="{{ old('school.2.name', $data['school'][2]['name'] ?? $education[2]->school_name ?? '') }}">
        </div>
        <div>
            <label for="school_department_2">学部</label>
            <input type="text" id="school_department_2" name="school[2][department]" value="{{ old('school.2.department', $data['school'][2]['department'] ?? $education[2]->school_department ?? '') }}">
        </div>
        <div>
            <label for="entrance_year_2">入学年</label>
            <input type="number" min="1900" max="2060" id="entrance_year_2" name="school[2][entrance_year]" value="{{ old('school.2.entrance_year', $data['school'][2]['entrance_year'] ?? $education[2]->entrance_year ?? '') }}">
        </div>
        <div>
            <label for="graduation_year_2">卒業年</label>
            <input type="number" min="1900" max="2060" id="graduation_year_2" name="school[2][graduation_year]" value="{{ old('school.2.graduation_year', $data['school'][2]['graduation_year'] ?? $education[2]->graduation_year ?? '') }}">
        </div>
        <div>
            <label for="school_activity_2">活動</label>
            <input type="text" id="school_activity_2" name="school[2][activity]" value="{{ old('school.2.activity', $data['school'][2]['activity'] ?? $education[2]->school_activity ?? '') }}">
        </div>

        <div>職歴１</div>
        <input type="hidden" name="career[0][id]" value="{{ $work_experience[0]->id ?? ''}}">
        <div>
            <label for="career_name_0">会社名</label>
            <input type="text" id="career_name_0" name="career[0][name]" value="{{ old('career.0.name', $data['career'][0]['name'] ?? $work_experience[0]->career_name ?? '') }}">
        </div>
        <div>
            <label for="career_department_0">部署</label>
            <input type="text" id="career_department_0" name="career[0][department]" value="{{ old('career.0.department', $data['career'][0]['department'] ?? $work_experience[0]->career_department ?? '') }}">
        </div>
        <div>
            <label for="entering_date_0">入社日</label>
            <input type="month" id="entering_date_0" name="career[0][entering_date]" value="{{ old('career.0.entering_date', $data['career'][0]['entering_date'] ?? $work_experience[0]->entering_date ?? '') }}">
        </div>
        <div>
            <label for="retirement_date_0">退社日</label>
            <input type="month" id="retirement_date_0" name="career[0][retirement_date]" value="{{ old('career.0.retirement_date', $data['career'][0]['retirement_date'] ?? $work_experience[0]->retirement_date ?? '') }}">
        </div>
        <div>
            <label for="career_detail_0">活動</label>
            <input type="text" id="career_detail_0" name="career[0][detail]" value="{{ old('career.0.detail', $data['career'][0]['detail'] ?? $work_experience[0]->career_detail ?? '') }}">
        </div>

        <div>職歴２</div>
        <input type="hidden" name="career[1][id]" value="{{ $work_experience[1]->id ?? ''}}">
        <div>
            <label for="career_name_1">会社名</label>
            <input type="text" id="career_name_1" name="career[1][name]" value="{{ old('career.1.name', $data['career'][1]['name'] ?? $work_experience[1]->career_name ?? '') }}">
        </div>
        <div>
            <label for="career_department_1">部署</label>
            <input type="text" id="career_department_1" name="career[1][department]" value="{{ old('career.1.department', $data['career'][1]['department'] ?? $work_experience[1]->career_department ?? '') }}">
        </div>
        <div>
            <label for="entering_date_1">入社日</label>
            <input type="month" id="entering_date_1" name="career[1][entering_date]" value="{{ old('career.1.entering_date', $data['career'][1]['entering_date'] ?? $work_experience[1]->entering_date ?? '') }}">
        </div>
        <div>
            <label for="retirement_date_1">退社日</label>
            <input type="month" id="retirement_date_1" name="career[1][retirement_date]" value="{{ old('career.1.retirement_date', $data['career'][1]['retirement_date'] ?? $work_experience[1]->retirement_date ?? '') }}">
        </div>
        <div>
            <label for="career_detail_1">活動</label>
            <input type="text" id="career_detail_1" name="career[1][detail]" value="{{ old('career.1.detail', $data['career'][1]['detail'] ?? $work_experience[1]->career_detail ?? '') }}">
        </div>

        <div>職歴３</div>
        <input type="hidden" name="career[2][id]" value="{{ $work_experience[2]->id ?? ''}}">
        <div>
            <label for="career_name_2">会社名</label>
            <input type="text" id="career_name_2" name="career[2][name]" value="{{ old('career.2.name', $data['career'][2]['name'] ?? $work_experience[2]->career_name ?? '') }}">
        </div>
        <div>
            <label for="career_department_2">部署</label>
            <input type="text" id="career_department_2" name="career[2][department]" value="{{ old('career.2.department', $data['career'][2]['department'] ?? $work_experience[2]->career_department ?? '') }}">
        </div>
        <div>
            <label for="entering_date_2">入社日</label>
            <input type="month" id="entering_date_2" name="career[2][entering_date]" value="{{ old('career.2.entering_date', $data['career'][2]['entering_date'] ?? $work_experience[2]->entering_date ?? '') }}">
        </div>
        <div>
            <label for="retirement_date_2">退社日</label>
            <input type="month" id="retirement_date_2" name="career[2][retirement_date]" value="{{ old('career.2.retirement_date', $data['career'][2]['retirement_date'] ?? $work_experience[2]->retirement_date ?? '') }}">
        </div>
        <div>
            <label for="career_detail_2">活動</label>
            <input type="text" id="career_detail_2" name="career[2][detail]" value="{{ old('career.2.detail', $data['career'][2]['detail'] ?? $work_experience[2]->career_detail ?? '') }}">
        </div>
    <div>
        <button type="submit" id="backButton">Back</button>
        <button type="submit" id="nextButton">Next</button>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#backButton").click(function() {
            $("#Form").attr("action", "{{ route('work_myprofile.form_one') }}");
        });

        $("#nextButton").click(function() {
            $("#Form").attr("action", "{{ route('work_myprofile.form_three') }}");
        });
    });


</script>
</x-app-layout>

