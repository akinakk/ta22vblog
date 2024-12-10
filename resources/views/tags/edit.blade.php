@extends('partials.layout')
@section('title', 'Edit Tag')
@section('content')
    <div class="container mx-auto py-16 px-6" style="background: radial-gradient(circle at 50% 50%, #ff00ff, #00ffcc, #ffdd00, #ff0000);">
        <a href="{{ url()->previous() }}" 
           class="bg-gradient-to-r from-lime-500 via-purple-600 to-pink-700 text-white text-lg font-extrabold py-3 px-6 rounded-full shadow-lg hover:shadow-2xl hover:scale-110 transition duration-500 transform rotate-3 hover:rotate-12 animate-pulse mb-8 inline-block">
           ⬅ Back
        </a>
        <div class="bg-gradient-to-r from-purple-800 via-pink-600 to-indigo-700 border-8 border-double border-lime-400 rounded-[50px] shadow-2xl max-w-2xl mx-auto transform hover:skew-y-3 transition duration-700 hover:scale-105 rotate-1 hover:rotate-3">
            <div class="p-10" style="background: repeating-linear-gradient(45deg, #ff00ff, #00ffcc 10%, #ffdd00 20%, #ff0000 30%);">
                <h2 class="text-5xl font-extrabold text-center text-lime-300 mb-8 uppercase tracking-wider animate-bounce"
                    style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.7);">
                    Edit Your Tag, Dude!
                </h2>
                <form action="{{ route('tags.update', $tag) }}" method="POST" class="space-y-10">
                    @csrf
                    @method('PUT')
                    <div class="relative">
                        <label for="name" class="block text-3xl font-bold text-lime-200 mb-3 tracking-wider transform -skew-y-6"
                            style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
                            What's Your Tag Name?
                        </label>
                        <input id="name" name="name" type="text" placeholder="Something Cosmic ✨" 
                            value="{{ old('name', $tag->name) }}"
                            class="w-full px-6 py-4 text-xl font-medium text-purple-800 bg-lime-200 border-4 border-pink-400 rounded-3xl shadow-lg transform hover:scale-110 hover:rotate-2 focus:ring-4 focus:ring-purple-400 transition duration-300 @error('name') border-red-500 @enderror"
                            required>
                        @error('name')
                            <p class="text-sm text-red-500 mt-2 absolute top-full left-0 transform rotate-2 animate-spin">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" 
                            class="bg-gradient-to-br from-purple-400 via-lime-500 to-pink-600 text-white text-3xl font-extrabold uppercase py-5 px-10 rounded-full shadow-2xl hover:shadow-[0_0_50px_#ff00ff] transition duration-700 transform hover:scale-125 hover:rotate-6 animate-pulse">
                            Update Tag Now!
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
