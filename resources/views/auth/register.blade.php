<x-guest-layout>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
        autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Matric Number -->
    <div class="mt-4">
      <x-input-label for="matric_number" :value="__('Matric Number')" />
      <x-text-input id="matric_number" class="block mt-1 w-full" type="text" name="matric_number" :value="old('matric_number')"
        required autocomplete="matric_number" />
      <x-input-error :messages="$errors->get('matric_number')" class="mt-2" />
    </div>

    <!-- Exco -->
    <div class="mt-4">
      <x-input-label for="exco" :value="__('Exco')" />
      <x-select id="exco" class="block mt-1 w-full" name="exco" required autocomplete="exco">
        <option value="">Select Exco</option>
        <option value="Exco Media" {{ old('exco') == 'Exco Media' ? 'selected' : '' }}>Exco Media</option>
        <option value="Exco Sukan dan Rekreasi" {{ old('exco') == 'Exco Sukan dan Rekreasi' ? 'selected' : '' }}>Exco
          Sukan dan Rekreasi</option>
        <option value="Exco Pembangunan Pelajar" {{ old('exco') == 'Exco Pembangunan Pelajar' ? 'selected' : '' }}>Exco
          Pembangunan Pelajar</option>
        <option value="Exco Teknokeusahawanan" {{ old('exco') == 'Exco Teknokeusahawanan' ? 'selected' : '' }}>Exco
          Teknokeusahawanan</option>
        <option value="Exco Kebajikan" {{ old('exco') == 'Exco Kebajikan' ? 'selected' : '' }}>Exco Kebajikan</option>
      </x-select>
      <x-input-error :messages="$errors->get('exco')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Password')" />

      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

      <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
      </a>

      <x-primary-button class="ms-4">
        {{ __('Register') }}
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
