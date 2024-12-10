@extends('partials.layout')
@section('title', 'Add User')
@section('content')
<div class="container mx-auto py-16 px-6"
    style="background: radial-gradient(circle, #6a0dad, #9b4dca, #b65fd1, #e0a9f9);">
    <div
        class="bg-gradient-to-r from-purple-600 via-purple-700 to-indigo-500 shadow-[0_0_40px_#9b4dca] border-8 border-dashed border-lime-400 rounded-[50px] max-w-3xl mx-auto transform hover:skew-y-3 hover:rotate-6 transition-all duration-700">
        <div class="p-10"
            style="background: repeating-linear-gradient(135deg, #9b4dca, #6a0dad 10%, #b65fd1 20%, #9b4dca 30%);">
            <h2 class="text-5xl font-extrabold text-center text-white uppercase tracking-widest mb-8 animate-bounce"
                style="text-shadow: 0px 0px 10px #ff00ff, 0px 0px 20px #b65fd1;">
                Add New User
            </h2>

            <form action="{{ route('users.store') }}" method="POST" class="space-y-8">
                @csrf

                <label class="form-control w-full">
                    <span class="label-text text-xl text-white" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">
                        Name
                    </span>
                    <input type="text" name="name"
                        class="input input-bordered w-full text-lg py-4 px-6 bg-yellow-200 text-pink-900 border-4 border-indigo-500 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 @error('name') input-error @enderror"
                        value="{{ old('name') }}" required />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control w-full">
                    <span class="label-text text-xl text-white" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">
                        Email Address
                    </span>
                    <input type="email" name="email"
                        class="input input-bordered w-full text-lg py-4 px-6 bg-yellow-200 text-pink-900 border-4 border-indigo-500 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 @error('email') input-error @enderror"
                        value="{{ old('email') }}" required />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control w-full">
                    <span class="label-text text-xl text-white" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">
                        Password
                    </span>
                    <input type="password" name="password"
                        class="input input-bordered w-full text-lg py-4 px-6 bg-yellow-200 text-pink-900 border-4 border-indigo-500 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 @error('password') input-error @enderror"
                        required />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <label class="form-control w-full">
                    <span class="label-text text-xl text-white" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">
                        Confirm Password
                    </span>
                    <input type="password" name="password_confirmation"
                        class="input input-bordered w-full text-lg py-4 px-6 bg-yellow-200 text-pink-900 border-4 border-indigo-500 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300"
                        required />
                </label>

                <div class="text-center">
                    <button type="submit"
                        class="bg-gradient-to-r from-yellow-500 via-pink-500 to-purple-600 text-white text-xl font-extrabold uppercase py-6 px-12 rounded-full shadow-lg transform hover:scale-110 hover:rotate-2 transition-all duration-500">
                        Create User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection