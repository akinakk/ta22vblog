@extends('partials.layout')
@section('title', 'Create Tag')
@section('content')
<div class="container mx-auto py-16 px-6"
    style="background: radial-gradient(circle, #6a0dad, #9b4dca, #b65fd1, #e0a9f9);">
    <div
        class="bg-gradient-to-r from-purple-600 via-purple-700 to-indigo-500 shadow-[0_0_60px_#9b4dca] border-8 border-dashed border-lime-400 rounded-[50px] max-w-3xl mx-auto transform hover:skew-y-6 hover:rotate-3 transition-all duration-700">
        <div class="p-12"
            style="background: repeating-linear-gradient(135deg, #9b4dca, #6a0dad 10%, #b65fd1 20%, #9b4dca 30%);">
            <h2 class="text-6xl font-extrabold text-center text-white uppercase tracking-widest mb-8 animate-pulse"
                style="text-shadow: 0px 0px 15px #ff00ff, 0px 0px 30px #b65fd1;">
                Create Your Mind-Blowing Tag
            </h2>
            <form action="{{ route('tags.store') }}" method="POST" class="space-y-10">
                @csrf
                <div class="relative">
                    <label for="name"
                        class="block text-3xl font-bold text-white mb-4 uppercase tracking-widest transform rotate-3"
                        style="text-shadow: 2px 2px 8px #ff00ff;">
                        Tag Name
                    </label>
                    <input id="name" name="name" type="text" placeholder="A Cosmic Name..." value="{{ old('name') }}"
                        class="w-full px-8 py-5 text-xl font-medium text-indigo-900 bg-purple-200 border-4 border-purple-500 rounded-full shadow-lg focus:ring-4 focus:ring-purple-500 focus:outline-none transform hover:scale-110 hover:rotate-2 transition-all duration-500 @error('name') border-red-500 @enderror"
                        required autofocus>
                    @error('name')
                        <p class="text-red-500 text-sm mt-2 animate-pulse">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="relative">
                    <label for="posts"
                        class="block text-3xl font-bold text-white mb-4 uppercase tracking-widest transform -rotate-6"
                        style="text-shadow: 2px 2px 8px #b65fd1;">
                        Attach to Posts
                    </label>
                    <select id="posts" name="posts[]" multiple
                        class="w-full px-6 py-4 text-lg font-semibold text-white bg-indigo-900 border-4 border-purple-500 rounded-3xl shadow-lg focus:ring-4 focus:ring-yellow-500 transform hover:scale-105 hover:rotate-1 transition-all duration-500">
                        @foreach ($posts as $post)
                            <option value="{{ $post->id }}" class="text-lg font-semibold">
                                {{ $post->title }}
                            </option>
                        @endforeach
                    </select>
                    <p class="text-sm text-yellow-300 mt-3 italic">
                        Hold Ctrl or Command to select multiple posts.
                    </p>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-700 text-white text-3xl font-extrabold uppercase py-6 px-12 rounded-full shadow-[0_0_50px_#ff00ff] hover:shadow-[0_0_100px_#b65fd1] transform hover:rotate-12 hover:scale-125 transition-all duration-700">
                        Create This Beauty!
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection