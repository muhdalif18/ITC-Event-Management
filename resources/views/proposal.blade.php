<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Proposal') }}
    </h2>
  </x-slot>


  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @include('event-proposal-overview')
  </div>


</x-app-layout>
