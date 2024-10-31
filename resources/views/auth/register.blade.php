@extends('partials.layout')
@section('title', 'Register')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-base-200">
    <div class="card bg-base-300 shadow-2xl w-full max-w-md rounded-lg p-6">
        <div class="card-body">
            <h2 class="text-center text-2xl font-bold text-primary mb-6">Create an Account</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-semibold">Name</span>
                    </label>
                    <input name="name" type="text" placeholder="Enter your name"
                        class="input input-bordered w-full @error('name') input-error @enderror" required autofocus
                        autocomplete="name" />
                    @error('name')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-semibold">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Enter your email"
                        class="input input-bordered w-full @error('email') input-error @enderror" required
                        autocomplete="username" />
                    @error('email')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text font-semibold">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Create a password"
                        class="input input-bordered w-full @error('password') input-error @enderror" required
                        autocomplete="new-password" />
                    @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control w-full mb-6">
                    <label class="label">
                        <span class="label-text font-semibold">Confirm Password</span>
                    </label>
                    <input name="password_confirmation" type="password" placeholder="Confirm your password"
                        class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                        required autocomplete="new-password" />
                    @error('password_confirmation')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <a class="underline text-sm text-base-content" href="{{ route('login') }}">
                        Already registered?
                    </a>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection