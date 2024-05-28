<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Generate Event Report') }}
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
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-blue-500 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
            data-hs-stepper-nav-item='{ "index": 2, "isOptional": true}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 3}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 4}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">4</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 5}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">5</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 6}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">6</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 7}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">7</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 8}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">8</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 9}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">8</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 10}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">8</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 11}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">8</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->

          <!-- Item -->
          <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 12}'>
            <span
              class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
              <span
                class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-gray-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600">
                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">8</span>
                <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
              </span>
              <span
                class="ms-2 text-sm font-medium text-gray-800 group-focus:text-gray-500 dark:text-white dark:group-focus:text-gray-400">
                Step
              </span>
            </span>
            <div
              class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600">
            </div>
          </li>
          <!-- End Item -->




        </ul>
        <!-- End Stepper Nav -->

        <!-- Stepper Content -->
        <div class="mt-5 sm:mt-8">

          <!-- First Content -->
          <div data-hs-stepper-content-item='{"index": 1}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                      First content
                    </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Description
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Purpose
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="sm:flex">
                    <input id="af-submit-application-full-name" type="text"
                      class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    {{-- <input type="text"
                  class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Background
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                          class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}


                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="6" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End First Content -->

          <!-- Second Content -->
          <div data-hs-stepper-content-item='{"index": 2}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Event Name & Organizer
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Event Name
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="sm:flex">
                    <input id="af-submit-application-full-name" type="text"
                      class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    {{-- <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Organizer
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}


                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="6" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Second Content -->

          <!-- Third Content -->
          <div data-hs-stepper-content-item='{"index": 3}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

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
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Date
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="sm:flex">
                    <input id="af-submit-application-full-name" type="text"
                      class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    {{-- <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Day
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="sm:flex">
                    <input id="af-submit-application-full-name" type="text"
                      class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    {{-- <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Time
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="sm:flex">
                    <input id="af-submit-application-full-name" type="text"
                      class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    {{-- <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Location
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="sm:flex">
                    <input id="af-submit-application-full-name" type="text"
                      class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    {{-- <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  </div>
                </div>
                <!-- End Col -->



              </div>
            </div>
          </div>
          <!-- End Third Content -->

          <!-- Fourth Content -->
          <div data-hs-stepper-content-item='{"index": 4}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Objective and Problem Statement
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Objective
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Dummy --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Dummy --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Problem Statement
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="3" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Problem Statement --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="3" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Problem Statement --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="3" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Fourth Content -->

          <!-- Fifth Content -->
          <div data-hs-stepper-content-item='{"index": 5}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    List Of Participant And Attendants
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Participant and Attendants
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Fifth Content -->

          <!-- Six Content -->
          <div data-hs-stepper-content-item='{"index": 6}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Involvement of Industry/Association/Agencies/External Organization Bodues as a Mentor/Advisor
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Name and Position of Mentor/ Advisor
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Company address
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Suggested Roles and Contributions of Mentors / Advisors
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->
              </div>
            </div>
          </div>
          <!-- End Six Content -->

          <!-- Seven Content -->
          <div data-hs-stepper-content-item='{"index": 7}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Success of Activity/Impact
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    To Students / Participants
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Dummy --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Dummy --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    To the Club / University / Community
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Problem Statement --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Problem Statement --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    To Sustainability
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Problem Statement --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-email"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    {{-- Problem Statement --}}
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="2" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Seven Content -->

          <!-- Eight Content -->
          <div data-hs-stepper-content-item='{"index": 8}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Event Tentative
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Tentative
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                              <tr>
                                <th scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Name</th>
                                <th scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Address</th>
                                <th scope="col"
                                  class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  John Brown</td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">New
                                  York No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>

                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  Jim Green</td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                  London No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>

                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  Joe Black</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                  Sidney No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Eight Content -->

          <!-- Nine Content -->
          <div data-hs-stepper-content-item='{"index": 9}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Activity Committee
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Committee
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                              <tr>
                                <th scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Name</th>
                                <th scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Address</th>
                                <th scope="col"
                                  class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  John Brown</td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">New
                                  York No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>

                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  Jim Green</td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                  London No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>

                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  Joe Black</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                  Sidney No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Nine Content -->

          <!-- Ten Content -->
          <div data-hs-stepper-content-item='{"index": 10}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    BUDGET ESTIMATES
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    BUDGET
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                              <tr>
                                <th scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Name</th>
                                <th scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Address</th>
                                <th scope="col"
                                  class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                  Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  John Brown</td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">New
                                  York No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>

                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  Jim Green</td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                  London No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>

                              <tr>
                                <td
                                  class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                  Joe Black</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                  Sidney No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Ten Content -->

          <!-- Eleven Content -->
          <div data-hs-stepper-content-item='{"index": 11}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Others
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Others
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="4" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Eleven Content -->

          <!-- Twelve Content -->
          <div data-hs-stepper-content-item='{"index": 12}' style="display: none;">
            <div
              class="p-4 h-max bg-gray-50  items-center border border-dashed border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700">
              {{-- <h3 class="text-gray-500">
                    First content
                  </h3> --}}

              <!-- Section -->
              <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                  <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Implications if Not Approved
                  </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                  <label for="af-submit-application-full-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Implications
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  {{--  <input id="af-submit-application-phone" type="text"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"> --}}
                  <div class="sm:col-span-9">
                    <textarea id="af-submit-application-bio"
                      class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                      rows="4" placeholder=""></textarea>
                  </div>
                </div>
                <!-- End Col -->

              </div>
            </div>
          </div>
          <!-- End Twelve Content -->





          <!-- Final Content -->
          <div data-hs-stepper-content-item='{
        "isFinal": true
      }'>
            <div
              class="p-4 h-48 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl">
              <h3 class="text-gray-500">
                Final content
              </h3>
            </div>
          </div>
          <!-- End Final Content -->

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
              data-hs-stepper-skip-btn style="display: none;">
              Skip
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
        </div>
        <!-- End Stepper Content -->
      </div>
      <!-- Stepper -->
    </div>
  </div>
</x-app-layout>
