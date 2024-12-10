@extends('partials.layout')
@section('title', 'Tag Details')

@section('content')
<div class="container mx-auto py-16 px-6"
    style="background: radial-gradient(circle, #6a0dad, #9b4dca, #b65fd1, #e0a9f9);">
    <div
        class="bg-gradient-to-r from-purple-600 via-purple-700 to-indigo-500 shadow-[0_0_60px_#9b4dca] border-8 border-dashed border-lime-400 rounded-[50px] max-w-3xl mx-auto transform hover:skew-y-6 hover:rotate-3 transition-all duration-700">
        <div class="p-12"
            style="background: repeating-linear-gradient(135deg, #9b4dca, #6a0dad 10%, #b65fd1 20%, #9b4dca 30%);">
            <h1 class="text-5xl font-extrabold text-center text-white uppercase tracking-widest mb-6 animate-pulse"
                style="text-shadow: 0px 0px 15px #ff00ff, 0px 0px 30px #b65fd1;">
                {{ $tag->name }}
            </h1>

            <p class="text-xl text-white mb-4" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);">
                Tag ID: <span class="text-yellow-300">{{ $tag->id }}</span>
            </p>
            <p class="text-xl text-white mb-4" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);">
                Created At: <span class="text-yellow-300">{{ $tag->created_at->format('M d, Y') }}</span>
            </p>
            <p class="text-xl text-white mb-4" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);">
                Updated At: <span class="text-yellow-300">{{ $tag->updated_at->format('M d, Y') }}</span>
            </p>

            <div class="mb-6">
                <h2 class="text-3xl font-semibold text-white mb-4" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">
                    Associated Posts:
                </h2>
                <ul>
                    @foreach ($tag->posts as $post)
                        <li class="mb-2">
                            <a href="{{ route('post', $post) }}"
                                class="text-blue-500 hover:text-purple-300 hover:underline text-lg font-semibold"
                                style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);">
                                {{ $post->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-8 flex space-x-6 justify-center">
                <a href="{{ route('tags.edit', $tag) }}"
                    class="bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-700 text-white text-xl font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 hover:rotate-2 transition-all duration-500">
                    Edit
                </a>

                <form action="{{ route('tags.destroy', $tag) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-gradient-to-r from-red-500 via-red-600 to-red-700 text-white text-xl font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 hover:rotate-2 transition-all duration-500">
                        Delete
                    </button>
                </form>

                <a href="{{ route('tags.index') }}"
                    class="bg-gradient-to-r from-yellow-500 via-pink-500 to-purple-600 text-white text-xl font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-110 hover:rotate-2 transition-all duration-500">
                    Back to Tags List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection