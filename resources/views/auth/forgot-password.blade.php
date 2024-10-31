<x-guest-layout>
    <div class="mb-4 text-sm text-white">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <label class="form-control w-full mb-4">
            <div class="label">
                <span class="label-text text-white">Email</span>
            </div>
            <input id="email" name="email" type="email" placeholder="Enter your email"
                class="input input-bordered @error('email') input-error @enderror w-full text-white" required autofocus
                value="{{ old('email') }}" />
            <div class="label">
                @error('email')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button type="submit" class="btn-primary btn" style="background-color: oklch(75.4611% 0.18307 346.812432 / 1);">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
