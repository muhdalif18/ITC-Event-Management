<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Submit Event Proposal') }}
    </h2>
  </x-slot>

  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
      <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
        Event Proposl Form
      </h1>
      <div data-hs-stepper>
        <ul class="relative flex flex-row gap-x-2">
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
        <div class="mt-5 sm:mt-8">
          <form id="event-proposal-form" method='post' action={{ route('event.post-event-proposal') }}>
            @csrf
            <!-- First Content -->
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
                  <div class="sm:col-span-3">
                    <label for="purpose" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Purpose
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="purpose" name="purpose" value="{{ old('purpose') }}" required
                        data-field-name="purpose"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
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
                      <textarea id="background" name="background" required data-field-name="background"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6">{{ old('background') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('background')" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End First Content -->

            <!--Second COntent-->
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
                  <div class="sm:col-span-3">
                    <label for="eventName" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Event Name
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="eventName" name="eventName" value="{{ old('eventName') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('eventName')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="organizer" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Organizer
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="organizer" name="organizer"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" placeholder=""> {{ old('organizer') }}
                      </textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('organizer')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="organizer_exco" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Exco In Charge
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="c" name="organizer_exco" value="{{ old('organizer_exco') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('organizer_exco')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="event_director" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Event Director
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="event_director" name="event_director"
                        value="{{ old('event_director') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('event_director')" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-hs-stepper-content-item='{"index": 3}' style="display: none;">
              <div
                class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
                <div
                  class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                  <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                      Event Details
                    </h2>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="date" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Date
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="date" name="date" value="{{ old('date') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('date')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="day" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Day
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="day" name="day" value="{{ old('day') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('day')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="time" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Time
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="time" name="time" value="{{ old('time') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('time')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="location" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Location
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:flex">
                      <input type="text" id="location" name="location" value="{{ old('location') }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                      <x-input-error class="mt-2" :messages="$errors->get('location')" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fourth Content -->
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
                  <div class="sm:col-span-3">
                    <label for="objective1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Objective
                    </label>
                  </div>
                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="objective1" name="objective1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" placeholder="">{{ old('objective1') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective1')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="objective2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    </label>
                  </div>

                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="objective2" name="objective2"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" placeholder="">{{ old('objective2') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective2')" />
                    </div>
                  </div>
                  <div class="sm:col-span-3">
                    <label for="objective3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">

                    </label>
                  </div>


                  <div class="sm:col-span-9">

                    <div class="sm:col-span-9">
                      <textarea id="objective3" name="objective3"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="2" placeholder="">{{ old('objective3') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('objective3')" />
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="per_Masalah1" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                      Problem Statement
                    </label>
                  </div>


                  <div class="sm:col-span-9">
                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah1" name="per_Masalah1"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" placeholder="">{{ old('per_Masalah1') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah1')" />
                    </div>
                  </div>


                  <div class="sm:col-span-3">
                    <label for="per_Masalah2" class="inline-block text-sm font-medium text-gray-500 mt-2.5">

                    </label>
                  </div>

                  <div class="sm:col-span-9">

                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah2" name="per_Masalah2"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="3" placeholder="">{{ old('per_Masalah2') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah2')" />
                    </div>
                  </div>

                  <div class="sm:col-span-3">
                    <label for="per_Masalah3" class="inline-block text-sm font-medium text-gray-500 mt-2.5">

                    </label>
                  </div>
                  <div class="sm:col-span-9">

                    <div class="sm:col-span-9">
                      <textarea id="per_Masalah3" name="per_Masalah3"
                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        rows="6" placeholder="">{{ old('per_Masalah2') }}</textarea>
                      <x-input-error class="mt-2" :messages="$errors->get('per_Masalah3')" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Fourth Content -->

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

              <button type="submit" id="submit-btn"
                class="py-2 px-3 inline-flex items-center gap-x-1
                text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700
                disabled:opacity-50 disabled:pointer-events-none"
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
          </form>
        </div>

      </div>

      <script>
        document.getElementById('generate-button').addEventListener('click', function() {
          window.location.href = '/export-to-word'; // Replace with your actual URL
        });
      </script>

    </div>
  </div>

  <div id="success-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg p-6">
      <h2 class="text-lg font-semibold text-gray-800 mb-4">Success</h2>
      <p class="text-gray-600 mb-4">Your event proposal has been submitted successfully.</p>
      <button id="close-modal" class="py-2 px-4 bg-blue-600 text-white rounded-lg">Close</button>
    </div>
  </div>
</x-app-layout>

<script>
  document.getElementById('event-proposal-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Here you can add your form validation if needed

    // Show the modal
    document.getElementById('success-modal').classList.remove('hidden');

    // Optionally, you can clear the form or perform other actions here
  });

  document.getElementById('close-modal').addEventListener('click', function() {
    document.getElementById('success-modal').classList.add('hidden');
  });
</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('event-proposal-form');
    form.addEventListener('submit', function(event) {
      let valid = true;
      const requiredFields = document.querySelectorAll('[required]');
      requiredFields.forEach(field => {
        const errorElement = field.nextElementSibling;
        if (!field.value.trim()) {
          valid = false;
          errorElement.textContent = `${field.getAttribute('data-field-name')} is required.`;
          errorElement.style.display = 'block';
        } else {
          errorElement.textContent = '';
          errorElement.style.display = 'none';
        }
      });
      if (!valid) {
        event.preventDefault();
        alert('Please fill in all required fields.');
      }
    });
  });
</script>


<script>
  document.getElementById('event-proposal-form').addEventListener('submit', async function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const form = event.target;
    const formData = new FormData(form);

    // Send form data using fetch
    const response = await fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // Ensure CSRF token is sent
      }
    });

    if (response.ok) {
      // Clear the form
      form.reset();

      // Redirect to step 1 (you might need to adjust this based on your step navigation logic)
      document.querySelector('[data-hs-stepper-nav-item="{\"index\": 1}"]').click();
    } else {
      // Handle error (optional)
      console.error('Form submission failed');
    }
  });
</script>
