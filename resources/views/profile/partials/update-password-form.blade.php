<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium font-bold mb-6 text-primary">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 bg-base-300 shadow sm:rounded-lg">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" class="ml-3 text-white" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full input input-bordered"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-600" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" class="ml-3 text-white" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full input input-bordered"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-600" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="ml-3 text-white" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full input input-bordered" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-pink-500 hover:bg-pink-600 text-white">{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
