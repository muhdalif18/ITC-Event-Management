<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('View Event Proposal') }}
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
          <form id="event-proposal-form" method='post' action={{ route('event.post-event-proposal') }}>
            @csrf

            <input type="hidden" name="id" value="{{ $eventProposalData->id ?? '' }}">
            <!-- 1 Content Tujuan-->
            <div data-hs-stepper-content-item='{"index": 1}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">

                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Description
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="purpose" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Purpose
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="purpose" name="purpose"
                        value="{{ old('purpose', $eventProposalData->purpose) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>

                      <x-input-error class="mt-2" :messages="$errors->get('purpose')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Background
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="background" name="background"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('background', $eventProposalData->background) }}
                      </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('background')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Comment
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="description_Comment" name="description_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('description_Comment', $eventProposalData->description_Comment) }}
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
                      Event Name & Organizer
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="eventName" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Event Name
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="eventName" name="eventName"
                        value="{{ old('eventName', $eventProposalData->eventName) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('eventName')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="organizer" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Organizer
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="organizer" name="organizer"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('organizer', $eventProposalData->organizer) }}
                        </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('organizer')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="organizer_exco" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Exco In Charge
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="organizer_exco" name="organizer_exco"
                        value="{{ old('organizer_exco', $eventProposalData->organizer_exco) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('organizer_exco')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="event_director" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Event Directorr
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="event_director" name="event_director"
                        value="{{ old('event_director', $eventProposalData->event_director) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px rounded-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('event_director')" />

                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Comment
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="organizer_Comment" name="organizer_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('organizer_Comment', $eventProposalData->organizer_Comment) }}
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
                      Event Details
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="date" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Date
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="date" type="text" name="date"
                        value="{{ old('date', $eventProposalData->date) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('date')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="day" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Day
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="day" type="text" name="day"
                        value="{{ old('day', $eventProposalData->day) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('day')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="time" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Time
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="time" type="text" name="time"
                        value="{{ old('time', $eventProposalData->time) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('time')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="location" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Location
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input id="location" type="text" name="location"
                        value="{{ old('location', $eventProposalData->location) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('location')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Comment
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="eventDetails_Comment" name="eventDetails_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('eventDetails_Comment', $eventProposalData->eventDetails_Comment) }}
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
                      Objective and Problem Statement
                    </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="objective1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Objective
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="objective1" name="objective1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('objective1', $eventProposalData->objective1) }}
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
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('objective2', $eventProposalData->objective2) }}</textarea>
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
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('objective3', $eventProposalData->objective3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective3')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-3">
                    <label for="per_Masalah1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Problem Statement
                    </label>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                    {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah1" name="per_Masalah1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('per_Masalah1', $eventProposalData->per_Masalah1) }}</textarea>
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
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('per_Masalah2', $eventProposalData->per_Masalah2) }}</textarea>
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
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('per_Masalah3', $eventProposalData->per_Masalah3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah3')" />
                    </div>
                  </div>
                  <!-- End Col -->

                  <!-- admin review -->
                  <div class="sm:col-span-3">
                    <label for="background" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Comment
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="obj_Comment" name="obj_Comment"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role != 'admin') readonly @endif>{{ old('obj_Comment', $eventProposalData->obj_Comment) }}
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
                      Participants and Escorts
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="participant_escorts" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Participants and Escorts
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="participant_escorts" name="participant_escorts"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('participant_escorts', $eventProposalData->participant_escorts) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('participant_escorts')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="resume_appendix" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Resume / Cv / Appendix
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <input type="file" id="resume_appendix" name="resume_appendix"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" />
                      <x-input-error class="mt-2" :messages="$errors->get('resume_appendix')" />
                    </div>
                  </div>
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
                      Involvement of Industry/Association/Agencies/External Organization Bodies as Mentor/Advisor
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="name_of_mentor" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Name of Mentor / Advisor
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <input type="text" id="name_of_mentor" name="name_of_mentor"
                        value="{{ old('name_of_mentor', $eventProposalData->name_of_mentor) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('name_of_mentor')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="position_of_mentor" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Position of Mentor/ Advisor
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <input type="text" id="position_of_mentor" name="position_of_mentor"
                        value="{{ old('position_of_mentor', $eventProposalData->position_of_mentor) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('position_of_mentor')" />
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="company_address" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Company address
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="company_address" name="company_address"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('company_address', $eventProposalData->company_address) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('company_address')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="suggested_role" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Suggested Roles and Contributions of Mentors / Advisors
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="suggested_role" name="suggested_role"
                        value="{{ old('suggested_role', $eventProposalData->suggested_role) }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        @if (auth()->user()->role == 'admin') readonly @endif>
                      <x-input-error class="mt-2" :messages="$errors->get('suggested_role')" />
                    </div>
                  </div>

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
                      Activity Success / Impact
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="impact_student" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Towards Student
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="impact_student_1" name="impact_student_1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('impact_student_1', $eventProposalData->impact_student_1) }}</textarea>
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
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('impact_student_2', $eventProposalData->impact_student_2) }}</textarea>
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
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('impact_student_3', $eventProposalData->impact_student_3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('impact_student_3')" />
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="toward_club" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Towards Club / University / Community
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="toward_club_1" name="toward_club_1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('toward_club_1', $eventProposalData->toward_club_1) }}</textarea>
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
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('toward_club_2', $eventProposalData->toward_club_2) }}</textarea>
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
                        rows="2" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('toward_club_3', $eventProposalData->toward_club_3) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('toward_club_3')" />
                    </div>
                  </div>
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
                      Tentative
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="activity_commitee" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Activity Tentative
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <table id="tentative-table" class="w-full">
                      <thead>
                        <tr>
                          <th class="text-left py-2">Time</th>
                          <th class="text-left py-2">Content</th>
                          @if (auth()->user()->role != 'admin')
                            <th class="text-left py-2">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (json_decode($eventProposalData->tentative_activity, true) as $index => $tentative)
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
                      Committee
                    </h2>
                  </div>
                  <div class="sm:col-span-12">
                    <table id="committee-table" class="w-full">
                      <thead>
                        <tr>
                          <th class="text-left py-2">Name</th>
                          <th class="text-left py-2">Matric Number</th>
                          <th class="text-left py-2">Faculty</th>
                          <th class="text-left py-2">Role</th>
                          @if (auth()->user()->role != 'admin')
                            <th class="text-left py-2">Action</th>
                          @endif
                        </tr>
                      </thead>
                      <tbody>
                        @foreach (json_decode($eventProposalData->committee_members, true) as $index => $member)
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
                </div>
              </div>
            </div>

            <script>
              document.addEventListener('DOMContentLoaded', function() {
                let rowIndex = {{ count(json_decode($eventProposalData->committee_members, true)) }};
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
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Others
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="others" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Others
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="others" name="others"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('others', $eventProposalData->others) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('others')" />
                    </div>
                  </div>
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
                      Implication if Not Approved
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="implication" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Implication
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="implication" name="implication"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('implication', $eventProposalData->implication) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('implication')" />
                    </div>
                  </div>
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
                      Decision
                    </h2>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="decision" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Decision
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="decision" name="decision"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" @if (auth()->user()->role == 'admin') readonly @endif>{{ old('decision', $eventProposalData->decision) }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('decision')" />
                    </div>
                  </div>
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


              <!-- Render event proposal details here -->

              {{-- <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-next-btn data-id="{{ $eventProposalData->id }}" class="downloadWordBtn">
                Download Word
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </button> --}}
              <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none downloadWordBtn"
                data-hs-stepper-next-btn data-id="{{ $eventProposalData->id }}">
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
                    // Get the selected event proposal ID
                    const proposalId = this.getAttribute('data-id');

                    // Redirect to the export-to-word page with the selected ID
                    window.location.href = `/export-to-word/${proposalId}`;
                  });
                });
              </script> --}}
              <script>
                document.querySelectorAll('.downloadWordBtn').forEach(button => {
                  button.addEventListener('click', function() {
                    // Get the selected event proposal ID
                    const proposalId = this.getAttribute('data-id');

                    // Redirect to the export-to-word page with the selected ID
                    window.location.href = `/export-to-word/${proposalId}`;
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
