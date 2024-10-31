<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium font-bold mb-6 text-primary">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-pink-500 hover:bg-pink-600 text-white">
        {{ __('Delete Account') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-4 sm:p-8 bg-base-300 shadow sm:rounded-lg">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium font-bold mb-6 text-primary">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="ml-3 text-white" />
                <input name="password" type="password" placeholder="Enter your password"
                    class="input input-bordered @error('password') input-error @enderror w-full" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-600" />
            </div>


            <div class="flex items-center justify-end mt-6">
                <x-secondary-button x-on:click="$dispatch('close')">{{ __('Cancel') }}</x-secondary-button>
                <x-danger-button
                    class="ml-3 bg-pink-500 hover:bg-pink-600 text-white">{{ __('Delete Account') }}</x-danger-button>
            </div>
        </form>
    </x-modal>
</section>