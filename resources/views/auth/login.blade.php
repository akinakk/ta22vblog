@extends('partials.layout')
@section('title', 'Login')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-base-200">
    <div class="card bg-base-300 shadow-2xl w-full max-w-md p-6">
        <div class="card-body">
            <h2 class="text-center text-2xl font-bold mb-6 text-primary">Login to Your Account</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input name="email" type="email" placeholder="Enter your email"
                        class="input input-bordered @error('email') input-error @enderror w-full" required autofocus
                        autocomplete="username" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input name="password" type="password" placeholder="Enter your password"
                        class="input input-bordered @error('password') input-error @enderror w-full" required
                        autocomplete="current-password" />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="form-control w-full mb-6">
                    <label class="label cursor-pointer">
                        <span class="label-text mr-2">Remember me</span>
                        <input name="remember_me" type="checkbox" class="toggle toggle-primary" checked />
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-base-content" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection