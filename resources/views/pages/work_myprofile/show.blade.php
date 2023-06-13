<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('View') }}
    </h2>
    <a href="{{ url()->previous() }}">
        <x-secondary-button class="ml-3">
        {{ __('Back') }}
        </x-primary-button>
    </a>
  </x-slot>

  <div>{{ $profile->japanese_name }}</div>
  <div>{{ $profile->roman_name }}</div>
  <div>{{ $profile->birthday }}</div>
  <div>{{ $profile->birthplace }}</div>
  <div>{{ $association->profession  }}</div>
  <div>{{ $association->company_name }}</div>
  <div>{{ $association->companay_postcode }}</div>
  <div>{{ $association->company_address }}</div>
  <div>{{ $association->company_telephonenumber }}</div>
  <div>{{ $association->company_faxnumber }}</div>
  <div>{{ $association->company_homepage }}</div>
  <div>{{ $association->company_email }}</div>
  <div>{{ $association->company_phone_number }}</div>
  <div>{{ $education[0]->school_name }}</div>
  <div>{{ $education[0]->school_department }}</div>
  <div>{{ $education[0]->entrance_year }}</div>
  <div>{{ $education[0]->graduation_year }}</div>
  <div>{{ $education[0]->school_activity }}</div>

  <div>{{ $education[1]->school_name }}</div>
  <div>{{ $education[1]->school_department }}</div>
  <div>{{ $education[1]->entrance_year }}</div>
  <div>{{ $education[1]->graduation_year }}</div>
  <div>{{ $education[1]->school_activity }}</div>

  <div>{{ $education[2]->school_name }}</div>
  <div>{{ $education[2]->school_department }}</div>
  <div>{{ $education[2]->entrance_year }}</div>
  <div>{{ $education[2]->graduation_year }}</div>
  <div>{{ $education[2]->school_activity }}</div>

  <div>{{ $work_experience[0]->career_name }}</div>
  <div>{{ $work_experience[0]->career_department }}</div>
  <div>{{ $work_experience[0]->entering_date }}</div>
  <div>{{ $work_experience[0]->retirement_date }}</div>
  <div>{{ $work_experience[0]->career_detail }}</div>

  <div>{{ $work_experience[1]->career_name }}</div>
  <div>{{ $work_experience[1]->career_department }}</div>
  <div>{{ $work_experience[1]->entering_date }}</div>
  <div>{{ $work_experience[1]->retirement_date }}</div>
  <div>{{ $work_experience[1]->career_detail }}</div>

  <div>{{ $work_experience[2]->career_name }}</div>
  <div>{{ $work_experience[2]->career_department }}</div>
  <div>{{ $work_experience[2]->entering_date }}</div>
  <div>{{ $work_experience[2]->retirement_date }}</div>
  <div>{{ $work_experience[2]->career_detail }}</div>

  <div>{{ $work_myprofile_detail->episode_kinds }}</div>
  <div>{{ $work_myprofile_detail->episode }}</div>
  <div>{{ $work_myprofile_detail->motivation_1 }}</div>
  <div>{{ $work_myprofile_detail->motivation_2 }}</div>
  <div>{{ $work_myprofile_detail->motivation_3 }}</div>
  <div>{{ $work_myprofile_detail->catchcopy }}</div>

</x-app-layout>
