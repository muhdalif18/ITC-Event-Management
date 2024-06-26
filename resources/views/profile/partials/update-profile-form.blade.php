<div class="grid grid-cols-1 px-4 pt-6 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
  <div class="mb-4 col-span-full xl:mb-2">
    <h1 class="text-xl font-semibold text-white sm:text-2xl dark:text-white">User settings</h1>
  </div>
  <!-- Right Content -->
  <div class="col-span-full xl:col-auto">
    <div
      class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4">
        <img class="mb-4 rounded-lg w-28 h-28 sm:mb-0 xl:mb-4 2xl:mb-0"
          src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('img/user.png') }}"
          alt="Profile picture">
        <div>
          <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Profile picture</h3>
          <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
            JPG, GIF or PNG. Max size of 800K
          </div>
          <div class="flex items-center space-x-4">
            <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="file" name="profile_image" accept="image/*" class="mb-2">
              <button type="submit"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                  </path>
                  <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                </svg>
                Upload picture
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Change Password-->
    <div
      class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <h3 class="mb-4 text-xl font-semibold dark:text-white">Password information</h3>
      <form action="/profile/change-password" method="POST">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        @csrf <!-- Include the CSRF token here -->
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
              password</label>
            <input type="password" name="current-password" id="current-password"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="••••••••" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
              password</label>
            <input data-popover-target="popover-password" data-popover-placement="bottom" type="password"
              name="new-password" id="new-password"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="••••••••" required>
            <div data-popover id="popover-password" role="tooltip"
              class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
              <div class="p-3 space-y-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Must have at least 6 characters</h3>
                <div class="grid grid-cols-4 gap-2">
                  <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                  <div class="h-1 bg-orange-300 dark:bg-orange-400"></div>
                  <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                  <div class="h-1 bg-gray-200 dark:bg-gray-600"></div>
                </div>
                <p>It’s better to have:</p>
                <ul>
                  <li class="flex items-center mb-1">
                    <svg class="w-4 h-4 mr-2 text-green-400 dark:text-green-500" aria-hidden="true" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                    Upper & lower case letters
                  </li>
                  <li class="flex items-center mb-1">
                    <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 111.414 1.414L11.414 10l4.293 4.293a1 1 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 01-1.414-1.414L8.586 10 4.293 5.707a1 1 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                    A symbol (#$&)
                  </li>
                  <li class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-300 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 111.414 1.414L11.414 10l4.293 4.293a1 1 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 01-1.414-1.414L8.586 10 4.293 5.707a1 1 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                    A longer password (min. 12 chars.)
                  </li>
                </ul>
              </div>
              <div data-popper-arrow></div>
            </div>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
              password</label>
            <input type="password" name="confirm-password" id="confirm-password"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="••••••••" required>
          </div>
          <div class="col-span-6 sm:col-full">
            <button
              class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
              type="submit">Save all</button>
          </div>
        </div>
      </form>
    </div>

    <!--End Change Password-->



  </div>
  <div class="col-span-2">
    {{--     <div
      class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
      <form action="{{ route('profile.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="grid grid-cols-1 gap-6">
          <div class="col-span-1">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->name }}" required>
          </div>
          <div class="col-span-1">
            <label for="matric_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric
              Number</label>
            <input type="text" name="matric_number" id="matric_number"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->matric_number }}" required>
          </div>
          <div class="col-span-1">
            <label for="exco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exco</label>
            <input type="text" name="exco" id="exco"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->exco }}" required>
          </div>
          <div class="col-span-1">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="text" name="email" id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->email }}" required>
          </div>
          <div class="col-span-1">
            <button
              class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
              type="submit">Save all</button>
          </div>
        </div>
      </form>
    </div> --}}

    <div
      class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
      <form action="{{ route('profile.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->name }}" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="matric_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matric
              Number</label>
            <input type="text" name="matric_number" id="matric_number"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->matric_number }}" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="exco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exco</label>
            <input type="text" name="exco" id="exco"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->exco }}" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="text" name="email" id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="" value="{{ $user->email }}"required>
          </div>

          <div class="col-span-6 sm:col-full">
            <button
              class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
              type="submit">Save all</button>
          </div>
        </div>
      </form>
    </div>


    {{-- session --}}
    {{-- <div
      class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <div class="flow-root">
        <h3 class="text-xl font-semibold dark:text-white">Sessions</h3>
        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
          <li class="py-4">
            <div class="flex items-center space-x-4">
              <div class="flex-shrink-0">
                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                  California 123.123.123.123
                </p>
                <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                  Chrome on macOS
                </p>
              </div>
              <div class="inline-flex items-center">
                <a href="#"
                  class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Revoke</a>
              </div>
            </div>
          </li>
          <li class="pt-4 pb-6">
            <div class="flex items-center space-x-4">
              <div class="flex-shrink-0">
                <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                  Rome 24.456.355.98
                </p>
                <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                  Safari on iPhone
                </p>
              </div>
              <div class="inline-flex items-center">
                <a href="#"
                  class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Revoke</a>
              </div>
            </div>
          </li>
        </ul>
        <div>
          <button
            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">See
            more</button>
        </div>
      </div>
    </div> --}}
  </div>

</div>
