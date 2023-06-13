<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('My Profile') }}
    </h2>
  </x-slot>

  <a href="{{ route('work_myprofile.show', 3) }}">
    <p class="text-left text-gray-dark dark:text-gray-200">View</p>
  </a>

  <a href="{{ route('work_myprofile.form_photo') }}">
    <p class="text-left text-gray-dark dark:text-gray-200">Photo</p>
  </a>

  <a href="{{ route('work_myprofile.create') }}">
    <p class="text-left text-gray-dark dark:text-gray-200">Edit</p>
  </a>

</x-app-layout>

