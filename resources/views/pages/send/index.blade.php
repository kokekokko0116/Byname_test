<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Send') }}
    </h2>
  </x-slot>

  <a href="{{ route('send.show', ['user_id' => 1]) }}">
    <p class="text-left text-gray-dark dark:text-gray-200">ハイパーリンク</p>
  </a>


</x-app-layout>

