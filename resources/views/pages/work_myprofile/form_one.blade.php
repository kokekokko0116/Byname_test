<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Myprofile Edit 1') }}
    </h2>
  </x-slot>

    

    <form action="{{ route('work_myprofile.form_two') }}" method="POST">
    @csrf
    <input type="hidden" name="profile_id" value="{{ $profile->id ?? ''}}">
    <input type="hidden" name="association_id" value="{{ $association->id ?? ''}}">
    <div>
        <label for="japanese_name">Japanese Name</label>
        <input type="text" id="japanese_name" name="japanese_name" value="{{ old('japanese_name', $data['japanese_name'] ?? $profile->japanese_name ?? '') }}" required>
    </div>
    <div>
        <label for="roman_name">Roman Name</label>
        <input type="text" id="roman_name" name="roman_name" value="{{ old('roman_name', $data['roman_name'] ?? $profile->roman_name ?? '') }}" required>
    </div>
    <div>
        <label for="birthday">Birthday</label>
        <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $data['birthday'] ?? $profile->birthday ?? '') }}">
    </div>
    <div>
        <label for="birthplace">Birthplace</label>
        <input type="text" id="birthplace" name="birthplace" value="{{ old('birthplace', $data['birthplace'] ?? $profile->birthplace ??'') }}">
    </div>

    <div>
    <label for="profession">Profession</label>
    <input type="text" id="profession" name="profession" value="{{ old('profession', $data['profession'] ?? $association->profession ?? '') }}">
</div>

<div>
    <label for="company">Company</label>
    <input type="text" id="company" name="company" value="{{ old('company', $data['company'] ?? $association->company_name ?? '') }}">
</div>

<div>
    <label for="company_postcode">Company Postcode</label>
    <input type="text" id="company_postcode" name="company_postcode" value="{{ old('company_postcode', $data['company_postcode'] ?? $association->company_postcode ?? '') }}">
</div>

<div>
    <label for="company_address">Company Address</label>
    <input type="text" id="company_address" name="company_address" value="{{ old('company_address', $data['company_address'] ?? $association->company_address ?? '') }}">
</div>

<div>
    <label for="company_telephonenumber">Company Telephone Number</label>
    <input type="text" id="company_telephonenumber" name="company_telephonenumber" value="{{ old('company_telephonenumber', $data['company_telephonenumber'] ?? $association->company_telephonenumber ?? '') }}">
</div>

<div>
    <label for="company_faxnumber">Company Fax Number</label>
    <input type="text" id="company_faxnumber" name="company_faxnumber" value="{{ old('company_faxnumber', $data['company_faxnumber'] ?? $association->company_faxnumber ?? '') }}">
</div>

<div>
    <label for="company_homepage">Company Homepage</label>
    <input type="text" id="company_homepage" name="company_homepage" value="{{ old('company_homepage', $data['company_homepage'] ?? $association->company_homepage ?? '') }}">
</div>

<div>
    <label for="company_email">Company Email</label>
    <input type="email" id="company_email" name="company_email" value="{{ old('company_email', $data['company_email'] ?? $association->company_email ?? '') }}">
</div>

<div>
    <label for="company_phone_number">Company Phone Number</label>
    <input type="text" id="company_phone_number" name="company_phone_number" value="{{ old('company_phone_number', $data['company_phone_number'] ?? $association->company_phone_number ?? '') }}">
</div>


    <div>
        <a href="{{ route('work_myprofile.index') }}">
                Back
        </a>
        <button type="submit">Next</button>
    </div>
</form>

</x-app-layout>
