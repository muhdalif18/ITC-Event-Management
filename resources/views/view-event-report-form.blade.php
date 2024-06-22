<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('View Event Report') }}
    </h2>
  </x-slot>

  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
      <!-- Stepper -->
      <div data-hs-stepper>
        <!-- Stepper Nav -->
        <ul class="relative flex flex-row gap-x-2">
          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group active"
            data-hs-stepper-nav-item='{"index": 1, "isOptional": true}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{ "index": 2, "isOptional": true}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 3}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 4}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 5}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 6}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 7}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 8}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 9}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 10}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 11}'>
          </li>
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 12}'>
          </li>

        </ul>
        <!-- End Stepper Nav -->
        <!-- Stepper Content -->
        <div class="mt-5 sm:mt-8 ">
          <form id="event-report-form" method='post'
            action={{ route('event.patch-event-report', $eventReportData->id) }}>
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $eventReportData->id ?? '' }}">
            <!-- 1 Content Tujuan-->
            <div data-hs-stepper-content-item='{"index": 1}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">

                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Penerangan
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="purpose" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Tujuan
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="purpose" name="purpose"
                        value="{{ old('purpose', $eventReportData->purpose) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>

                      <x-input-error class="mt-2" :messages="$errors->get('purpose')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Latar Belakang
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="background" name="background"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('background', $eventReportData->background) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('background')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="description_Comment" name="description_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('description_Comment', $eventReportData->description_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('description_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>
            <!-- End 1 Content Tujuan-->

            <!--2 Content nama aktiviti dan penganjur-->
            <div data-hs-stepper-content-item='{"index": 2}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Nama Aktiti & Penganjur
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="eventName" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Name Aktiviti
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="eventName" name="eventName"
                        value="{{ old('eventName', $eventReportData->eventName) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('eventName')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="organizer" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Penganjur
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="organizer" name="organizer"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('organizer', $eventReportData->organizer) }}
                          </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('organizer')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="organizer_exco" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Exco yang Terlibat
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="organizer_exco" name="organizer_exco"
                        value="{{ old('organizer_exco', $eventReportData->organizer_exco) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('organizer_exco')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="event_director" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Pengarah Program
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="event_director" name="event_director"
                        value="{{ old('event_director', $eventReportData->event_director) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('event_director')" />

                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="organizer_Comment" name="organizer_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('organizer_Comment', $eventReportData->organizer_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('organizer_Comment')" />
                    </div>
                  </div>
                  <!-- End Col -->

                </div>
              </div>
            </div>
            <!-- End 2 Content nama aktiviti dan penganjur -->

            <!-- 3 Content butiran aktiviti -->
            <div data-hs-stepper-content-item='{"index": 3}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">

                <!-- Section -->
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Butiran Program
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="date" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Tarikh
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="date" type="text" name="date"
                        value="{{ old('date', $eventReportData->date) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('date')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="day" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Hari
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="day" type="text" name="day"
                        value="{{ old('day', $eventReportData->day) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('day')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="time" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Masa
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="time" type="text" name="time"
                        value="{{ old('time', $eventReportData->time) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('time')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="location" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Lokasi
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="location" type="text" name="location"
                        value="{{ old('location', $eventReportData->location) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('location')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="eventDetails_Comment" name="eventDetails_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('eventDetails_Comment', $eventReportData->eventDetails_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('eventDetails_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->



                </div>
              </div>
            </div>
            <!-- End 3 Content butiran aktiviti -->

            <!-- 4 Content objektif dan pernyataan masalah -->
            <div data-hs-stepper-content-item='{"index": 4}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Objektif & Pernyataan Masalah
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="objective1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Objektif
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="objective1" name="objective1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('objective1', $eventReportData->objective1) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective1')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="objective2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      {{-- Dummy --}}
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    {{--  <input id="af-submit-application-phone" type="text"
                          class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                    <div class="sm:col-span-9">
                      <textarea id="objective2" name="objective2"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('objective2', $eventReportData->objective2) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective2')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="objective3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      {{-- Dummy --}}
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    {{--  <input id="af-submit-application-phone" type="text"
                          class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                    <div class="sm:col-span-9">
                      <textarea id="objective3" name="objective3"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('objective3', $eventReportData->objective3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective3')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="per_Masalah1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Pernyataan Masalah
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    {{--  <input id="af-submit-application-phone" type="text"
                          class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah1" name="per_Masalah1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('per_Masalah1', $eventReportData->per_Masalah1) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah1')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="per_Masalah2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      {{-- Problem Statement --}}
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    {{--  <input id="af-submit-application-phone" type="text"
                          class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah2" name="per_Masalah2"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('per_Masalah2', $eventReportData->per_Masalah2) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah2')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="per_Masalah3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      {{-- Problem Statement --}}
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    {{--  <input id="af-submit-application-phone" type="text"
                          class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah3" name="per_Masalah3"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('per_Masalah3', $eventReportData->per_Masalah3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah3')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="obj_Comment" name="obj_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('obj_Comment', $eventReportData->obj_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('obj_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->

                </div>
              </div>
            </div>
            <!-- End 4 Content objektif dan pernyataan masalah -->

            <!-- 5 Content senarai peserta dan pengiring-->
            <div data-hs-stepper-content-item='{"index": 5}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Peserta dan Pengiring
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="participant_escorts" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Peserta dan Pengiring
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="participant_escorts" name="participant_escorts"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('participant_escorts', $eventReportData->participant_escorts) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('participant_escorts')" />
                    </div>
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="participant_escorts_Comment" name="participant_escorts_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('participant_escorts_Comment', $eventReportData->participant_escorts_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('participant_escorts_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>
            <!-- End 5 Content -->

            <!-- 6 Content Penglibatan industri -->
            <div data-hs-stepper-content-item='{"index": 6}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Penglibatan Industri/ Persatuan/ Agensi/ Badan Organisasi Luar Sebagai Mentor
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="name_of_mentor" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Nama Mentor / Penasihat
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <input type="text" id="name_of_mentor" name="name_of_mentor"
                        value="{{ old('name_of_mentor', $eventReportData->name_of_mentor) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('name_of_mentor')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="position_of_mentor" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Jawatan Mentor/ Penasihat
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <input type="text" id="position_of_mentor" name="position_of_mentor"
                        value="{{ old('position_of_mentor', $eventReportData->position_of_mentor) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('position_of_mentor')" />
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="company_address" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Alamat Syarikat
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="company_address" name="company_address"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('company_address', $eventReportData->company_address) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('company_address')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="suggested_role" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Cadangan Peranan & Sumbangan Mentor/ Penasihat
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="suggested_role" name="suggested_role"
                        value="{{ old('suggested_role', $eventReportData->suggested_role) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('suggested_role')" />
                    </div>
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="suggested_role_Comment" name="suggested_role_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('suggested_role_Comment', $eventReportData->suggested_role_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('suggested_role_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->

                </div>
              </div>
            </div>
            <!-- End 6 Content Penglibatan industri -->

            <!-- 7 Content Impact-->
            <div data-hs-stepper-content-item='{"index": 7}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Keberhasilan Aktiviti / Impak
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="impact_student" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Kepada Pelajar/ Peserta
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="impact_student_1" name="impact_student_1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('impact_student_1', $eventReportData->impact_student_1) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('impact_student_1')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="impact_student_2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    </label>
                  </div>

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="impact_student_2" name="impact_student_2"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('impact_student_2', $eventReportData->impact_student_2) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('impact_student_2')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="impact_student_3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    </label>
                  </div>

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="impact_student_3" name="impact_student_3"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('impact_student_3', $eventReportData->impact_student_3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('impact_student_3')" />
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="toward_club" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Kepada Kelab/ Universiti/ Komuniti </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="toward_club_1" name="toward_club_1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('toward_club_1', $eventReportData->toward_club_1) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('toward_club_1')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="toward_club_2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    </label>
                  </div>

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="toward_club_2" name="toward_club_2"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('toward_club_2', $eventReportData->toward_club_2) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('toward_club_2')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="toward_club_3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="toward_club_3" name="toward_club_3"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('toward_club_3', $eventReportData->toward_club_3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('toward_club_3')" />
                    </div>
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="impact_student_Comment" name="impact_student_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('impact_student_Comment', $eventReportData->impact_student_Comment) }}
                      </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('impact_student_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>
            <!-- End 7 Content Impact-->

            <!-- 8 Content Aturcara-->
            <div data-hs-stepper-content-item='{"index": 8}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Aturcara Aktiviti
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="activity_commitee" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Aturcara
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <table id="tentative-table" class="w-full">
                      <thead>
                        <tr>
                          <th class="text-left py-2">Masa</th>
                          <th class="text-left py-2">Pengisian</th>
                          @if (auth()->user()->role != 'admin')
                            <th class="text-left py-2">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (json_decode($eventReportData->tentative_activity, true) as $index => $tentative)
                          <tr>
                            <td><input type="text" name="tentative[{{ $index }}][time]"
                                value="{{ $tentative['time'] }}"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm" {{-- required --}}>
                            </td>
                            <td><input type="text" name="tentative[{{ $index }}][content]"
                                value="{{ $tentative['content'] }}"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            @if (auth()->user()->role != 'admin')
                              <td><button type="button"
                                  class="remove-row py-1 px-2 bg-red-500 text-white rounded">Remove</button></td>
                            @endif
                          </tr>
                        @endforeach
                        @if (auth()->user()->role != 'admin')
                          <tr>
                            <td><input type="text" name="tentative[0][time]"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="tentative[0][content]"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><button type="button"
                                class="add-row py-1 px-2 bg-green-500 text-white rounded">Add</button></td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="tentative_activity_Comment" name="tentative_activity_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('tentative_activity_Comment', $eventReportData->tentative_activity_Comment) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('tentative_activity_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                  let rowIndex = 1;
                  document.querySelector('#tentative-table').addEventListener('click', function(event) {
                    if (event.target.classList.contains('add-row')) {
                      event.preventDefault();
                      const table = document.querySelector('#tentative-table tbody');
                      const newRow = document.createElement('tr');
                      newRow.innerHTML = `
                                  <td><input type="text" name="tentative[${rowIndex}][time]" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                  ></td>
                                  <td><input type="text" name="tentative[${rowIndex}][content]" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                  ></td>
                                  <td><button type="button" class="remove-row text-red-500 hover:underline py-1 px-2 bg-red-500 text-red rounded" style="background: none; border: none; padding: 0;">Remove</button></td>
                              `;
                      table.appendChild(newRow);
                      rowIndex++;
                    }
                    if (event.target.classList.contains('remove-row')) {
                      event.preventDefault();
                      event.target.closest('tr').remove();
                    }
                  });
                });
              </script>
            </div>
            <!-- ENd 8 Content Aturcara-->

            <!-- 9 Committee Members -->
            <div data-hs-stepper-content-item='{"index": 9}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50 items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Jawatankuasa Aktiviti
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="activity_commitee" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Jawatankuasa
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <table id="committee-table" class="w-full">
                      <thead>
                        <tr>
                          <th class="text-left py-2">Nama</th>
                          <th class="text-left py-2">No. Matrik</th>
                          <th class="text-left py-2">Fakulti</th>
                          <th class="text-left py-2">Jawatan / Peranan</th>
                          @if (auth()->user()->role != 'admin')
                            <th class="text-left py-2">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (json_decode($eventReportData->committee_members, true) as $index => $member)
                          <tr>
                            <td><input type="text" name="committee[{{ $index }}][name]"
                                value="{{ $member['name'] }}"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="committee[{{ $index }}][matric]"
                                value="{{ $member['matric'] }}"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="committee[{{ $index }}][faculty]"
                                value="{{ $member['faculty'] }}"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="committee[{{ $index }}][role]"
                                value="{{ $member['role'] }}"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            @if (auth()->user()->role != 'admin')
                              <td><button type="button"
                                  class="remove-row py-1 px-2 bg-red-500 text-white rounded">Remove</button></td>
                            @endif
                          </tr>
                        @endforeach
                        @if (auth()->user()->role != 'admin')
                          <tr>
                            <td><input type="text" name="committee[0][name]"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="committee[0][matric]"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="committee[0][faculty]"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><input type="text" name="committee[0][role]"
                                class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"
                                {{-- required --}}></td>
                            <td><button type="button"
                                class="add-row py-1 px-2 bg-green-500 text-white rounded">Add</button></td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="committee_Comment" name="committee_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('committee_Comment', $eventReportData->committee_Comment) }}
                      </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('committee_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>

            <script>
              document.addEventListener('DOMContentLoaded', function() {
                let rowIndex = {{ count(json_decode($eventReportData->committee_members, true)) }};
                document.querySelector('#committee-table').addEventListener('click', function(event) {
                  if (event.target.classList.contains('add-row')) {
                    event.preventDefault();
                    const table = document.querySelector('#committee-table tbody');
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                                        <td><input type="text" name="committee[${rowIndex}][role]" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"></td>
                                        <td><input type="text" name="committee[${rowIndex}][name]" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm"></td>
                                        <td><button type="button" class="remove-row py-1 px-2 bg-red-500 text-white rounded">Remove</button></td>
                                    `;
                    table.appendChild(newRow);
                    rowIndex++;
                  }
                  if (event.target.classList.contains('remove-row')) {
                    event.preventDefault();
                    event.target.closest('tr').remove();
                  }
                });
              });
            </script>
            <!-- 9 end Committee Members -->

            <!-- 10 Content other-->
            <div data-hs-stepper-content-item='{"index": 10}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50 items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Gambar Aktiviti
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="others" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Gambar Aktiviti
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    @if ($eventReportData->others)
                      @php
                        $others = json_decode($eventReportData->others, true);
                      @endphp
                      @foreach ($others as $index => $other)
                        <div class="sm:col-span-9">
                          <div class="mr-2">
                            <img src="{{ asset('storage/' . $other['image_path']) }}" alt="Image"
                              class="max-w-72 max-h-72 object-contain rounded-lg">
                          </div>
                          <div class="sm:col-span-3">
                            <div class="text-sm text-gray-600">{{ $other['caption'] }}</div>
                            <label class="inline-block text-sm font-medium text-gray-500 mt-2.5">

                            </label>
                          </div>

                        </div>
                      @endforeach
                    @endif
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="others_Comment" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="others_Comment" name="others_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('others_Comment', $eventReportData->others_Comment) }}
                  </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('others_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>
            <!-- End 10 Content other -->




            <!-- 11 Content implication-->
            <div data-hs-stepper-content-item='{"index": 11}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Implikasi Sekiranya Tidak Diluluskan </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="implication" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Implikasi
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="implication" name="implication"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('implication', $eventReportData->implication) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('implication')" />
                    </div>
                  </div>
                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="implication_Comment" name="implication_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('implication_Comment', $eventReportData->implication_Comment) }}
                                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('implication_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>
            <!-- End 11 Content implication -->

            <!-- 12 Content decision-->
            <div data-hs-stepper-content-item='{"index": 12}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Keputusan
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="decision" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Keputusan
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="decision" name="decision"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('decision', $eventReportData->decision) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('decision')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="club_president" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Nama Pengerusi Kelab
                    </label>
                  </div>


                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="club_president" name="club_president"
                        value="{{ old('club_president', $eventReportData->club_president) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('club_president')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="club_advisor" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Nama Penasihat Kelab
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="club_advisor" name="club_president"
                        value="{{ old('club_advisor', $eventReportData->club_advisor) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('club_advisor')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="mpp" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Nama Yang Dipertua MPP UTHM
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="mpp" name="mpp"
                        value="{{ old('mpp', $eventReportData->mpp) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('mpp')" />
                    </div>
                  </div>

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Komen
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="decision_Comment" name="decision_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('decision_Comment', $eventReportData->decision_Comment) }}
                                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('decision_Comment')" />
                    </div>
                  </div>
                  <!-- End admin review -->
                </div>
              </div>
            </div>
            <!-- End 12 Content decision -->


            <!-- Button -->
            <div class="mt-5 flex justify-between items-center gap-x-2">
              <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-back-btn>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m15 18-6-6 6-6" />
                </svg>
                Back
              </button>
              <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-next-btn>
                Next
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </button>

              {{-- <button type="generate"
                  class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                  data-hs-stepper-next-btn>
                  Download Word
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </button> --}}

              {{-- <button type="button"
                  class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                  data-hs-stepper-next-btn id="downloadWordBtn">
                  Download Word
  
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </button>
  
                <script>
                  document.getElementById('downloadWordBtn').addEventListener('click', function() {
                    // Redirect to the export-to-word page
                    window.location.href = '/export-to-word';
                  });
                </script> --}}


              <!-- Render event report details here -->

              {{-- <button type="button"
                  class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                  data-hs-stepper-next-btn data-id="{{ $eventReportData->id }}" class="downloadWordBtn">
                  Download Word
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </button> --}}
              <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none downloadWordBtn"
                data-hs-stepper-next-btn data-id="{{ $eventReportData->id }}">
                Download Word
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </button>


              {{-- <script>
                  document.querySelectorAll('.downloadWordBtn').forEach(button => {
                    button.addEventListener('click', function() {
                      // Get the selected event report ID
                      const reportId = this.getAttribute('data-id');
  
                      // Redirect to the export-to-word page with the selected ID
                      window.location.href = `/export-to-word/${reportId}`;
                    });
                  });
                </script> --}}
              <script>
                document.querySelectorAll('.downloadWordBtn').forEach(button => {
                  button.addEventListener('click', function() {
                    // Get the selected event report ID
                    const reportId = this.getAttribute('data-id');

                    // Redirect to the export-to-word page with the selected ID
                    window.location.href = `/export-to-word/${reportId}`;
                  });
                });
              </script>






              <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-next-btn>
                Submit
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </button>
              <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-finish-btn style="display: none;">
                Finish
              </button>
              <button type="reset"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-reset-btn style="display: none;">
                Reset
              </button>



            </div>
            <!-- End Button -->

          </form>
        </div>
        <!-- End Stepper Content -->

        {{-- <button type="generate" id="generate-button"
            class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
            data-hs-stepper-next-btn>
            Generate
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </button> --}}




      </div>
      <!-- Stepper -->
      <script>
        document.getElementById('generate-button').addEventListener('click', function() {
          window.location.href = '/export-to-word'; // Replace with your actual URL
        });
      </script>

    </div>
  </div>
</x-app-layout>
