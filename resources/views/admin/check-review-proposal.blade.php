<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Check and Review Proposal') }}
    </h2>
  </x-slot>

  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div
          class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
          {{-- <div>
            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
              class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
              type="button">
              <span class="sr-only">Action button</span>
              Action
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownAction"
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                <li>
                  <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                </li>
                <li>
                  <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                </li>
                <li>
                  <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                    account</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                  User</a>
              </div>
            </div>
          </div> --}}
          <label for="table-search" class="sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
            </div>
            <input type="text" id="table-search-users"
              class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Search for users">
          </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">
                Event Name
              </th>

              <th scope="col" class="px-6 py-3">
                Exco
              </th>

              <th scope="col" class="px-6 py-3">
                Event Director
              </th>

              @php($user = Auth::user())
              @if ($user->role == 'admin')
                <th scope="col" class="px-6 py-3">
                  Exco
                </th>
              @endif
              <th scope="col" class="px-6 py-3">
                Status
              </th>
              {{--  <th scope="col" class="px-6 py-3">
                Action
              </th> --}}
              @php($user = Auth::user())
              @if ($user->role == 'user')
                <th scope="col" class="px-6 py-3">
                  Secretariat
                </th>
              @endif
            </tr>
          </thead>

          <tbody>
            @foreach ($eventProposal as $eventProposalData)
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                  <!--  <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image"> -->
                  <div class="ps-3">
                    {{-- <div class="text-base font-semibold">Name</div> --}}
                    <div class="text-base font-semibold">
                      <a href="{{ route('event.get-view-event-proposal', $eventProposalData->id) }}"
                        class="text-blue-600 dark:text-blue-400 hover:underline">
                        {{ $eventProposalData->eventName }}
                      </a>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-4">
                  <div class={{ $eventProposalData->organizer_exco }}>
                    {{ $eventProposalData->organizer_exco }}
                  </div>
                </td>

                <td class="px-6 py-4">
                  <div class={{ $eventProposalData->organizer_exco }}>
                    {{ $eventProposalData->event_director }}
                  </div>
                </td>

                <td class="px-6 py-4">
                  @php($user = Auth::user())
                  @if ($user->role == 'admin')
                    <div class="flex items-center">
                      <form method="POST"
                        action="{{ route('event.update-event-proposal-status', $eventProposalData->id) }}">
                        @csrf
                        @method('PATCH')
                        <select name="status" onchange="this.form.submit()"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="Pending" {{ $eventProposalData->status == 'Pending' ? 'selected' : '' }}>
                            Pendssing</option>
                          <option value="Approved" {{ $eventProposalData->status == 'Approved' ? 'selected' : '' }}>
                            Approved</option>
                          <option value="Not Approved"
                            {{ $eventProposalData->status == 'Not Approved' ? 'selected' : '' }}>Not
                            Approved</option>
                        </select>
                      </form>
                    </div>
                  @else
                    <div class="text-sm">
                      Status: {{ $eventProposalData->status }}
                    </div>
                  @endif
                </td>


                @php($user = Auth::user())
                @if ($user->role == 'user')
                  <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal"
                      class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                      data-hs-overlay="#hs-large-modal">Add</a>


                    {{--  <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-large-modal">
                            Large
                          </button> --}}
                    <div id="hs-large-modal"
                      class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                      <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
                        <div
                          class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                          <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                            <h3 class="font-bold text-gray-800 dark:text-white">
                              Add Secretariat
                            </h3>
                            <button type="button"
                              class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                              data-hs-overlay="#hs-large-modal">
                              <span class="sr-only">Close</span>
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                              </svg>
                            </button>
                          </div>
                          <div class="p-4 overflow-y-auto">
                            // check-review-proposal.blade.php
                            <form method="POST" action="{{ route('event.secretariat.store') }}">
                              @csrf
                              <div id="input-container" class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                  <label for="secre_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                  <input type="text" name="secre_name" id="secre_name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                  <label for="secre_matric_number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric
                                    Number</label>
                                  <input type="text" name="secre_matric_number" id="secre_matric_number"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                </div>
                                <div class="col-span-6">
                                  <label for="event_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event</label>
                                  <select name="event_id" id="event_id"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                    @foreach ($eventProposal as $event)
                                      <option value="{{ $event->id }}">{{ $event->eventName }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div
                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button"
                                  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                  data-hs-overlay="#hs-large-modal">Close</button>
                                <button type="submit"
                                  class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Save
                                  changes</button>
                              </div>
                            </form>

                            {{-- <form method="POST" action="{{ route('event.secretariat.store') }}">
                                          @csrf
                                          <div id="input-container" class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                              <label for="secre_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                              <input type="text" name="secre_name" id="secre_name"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="" required>
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                              <label for="secre_matric_number"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric Number</label>
                                              <input type="text" name="secre_matric_number" id="secre_matric_number"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="" required>
                                            </div>
                                          </div>
                                          <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                            <button type="button"
                                              class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                              data-hs-overlay="#hs-large-modal">
                                              Close
                                            </button>
                                            <button type="submit"
                                              class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                              Save changes
                                            </button>
                                          </div>
                                        </form> --}}
                          </div>
                        </div>
                      </div>
                    </div>

                    {{--  <div id="hs-large-modal"
                                                class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                                <div
                                                  class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                  <div
                                                    class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                      <h3 class="font-bold text-gray-800 dark:text-white">
                                                        Modal title
                                                      </h3>
                                                      <button type="button"
                                                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                                                        data-hs-overlay="#hs-large-modal">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round">
                                                          <path d="M18 6 6 18"></path>
                                                          <path d="m6 6 12 12"></path>
                                                        </svg>
                                                      </button>
                                                    </div>
                                                    <div class="p-4 overflow-y-auto">
                                                      <div id="input-container" class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-3">
                                                          <label for="secre_name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                          <input type="text" name="secre_name" id="secre_name"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="" required>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                          <label for="secre_matric_number"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric
                                                            Number</label>
                                                          <input type="text" name="secre_matric_number" id="secre_matric_number"
                                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="" required>
                                                        </div>
                                                      </div>
                                                      <div class="mt-4">
                                                        <button type="button" onclick="addInputField()"
                                                          class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                                                          Add another
                                                        </button>
                                                      </div>
                                                    </div>
                                                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                      <button type="button"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                                        data-hs-overlay="#hs-large-modal">
                                                        Close
                                                      </button>
                                                      <button type="button"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                        Save changes
                                                      </button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div> --}}


                  </td>
                @endif

                @php($user = Auth::user())
                @if ($user->role == 'admin')
                  <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href="#" type="button" data-modal-target="editUserModal"
                      data-modal-show="editUserModal"
                      class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                  </td>
                @endif


              </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Edit user modal -->
        <div id="hs-large-modal"
          class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
          <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
            <div
              class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
              <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                  Add Secretariat
                </h3>
                <button type="button"
                  class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                  data-hs-overlay="#hs-large-modal">
                  <span class="sr-only">Close</span>
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                  </svg>
                </button>
              </div>
              <div class="p-4 overflow-y-auto">
                <form method="POST" action="{{ route('event.secretariat.store') }}">
                  @csrf
                  <div id="input-container" class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="secre_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                      <input type="text" name="secre_name" id="secre_name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="secre_matric_number"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric Number</label>
                      <input type="text" name="secre_matric_number" id="secre_matric_number"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="" required>
                    </div>
                  </div>
                  <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                      class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                      data-hs-overlay="#hs-large-modal">
                      Close
                    </button>
                    <button type="submit"
                      class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                      Save changes
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</x-app-layout>
