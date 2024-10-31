<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium font-bold mb-6 text-primary">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}"
        class="mt-6 space-y-6 bg-base-300 shadow sm:rounded-lg">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="ml-3 text-white" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full input input-bordered"
                :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-red-600" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="ml-3 text-white" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full input input-bordered"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-red-600" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-pink-500 hover:bg-pink-600 text-white">{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>