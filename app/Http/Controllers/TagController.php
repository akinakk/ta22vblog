<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(20);
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        $posts = Post::all();
        return view('tags.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags',
            'posts' => 'array',
            'posts.*' => 'exists:posts,id',
        ]);

        $tag = Tag::create(['name' => $validated['name']]);

        if (!empty($validated['posts'])) {
            $tag->posts()->attach($validated['posts']);
        }

        return redirect()->route('tags.index')->with('success', 'Tag created and attached to posts successfully.');
    }

    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'array|exists:tags,id',
        ]);

        $post->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        $post->tags()->sync($validated['tags'] ?? []);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')
            ->with('success', 'tag deleted successfully');
    }
}
