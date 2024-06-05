<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
      {{ __('Dashboggard') }}
    </div>
  </div> --}}

  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 m-20 bg-white rounded shadow">
      {!! $chart->container() !!}
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
  </div>

  {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="container px-4 mx-auto">

      <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
      </div>

    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
  </div> --}}



</x-app-layout>
