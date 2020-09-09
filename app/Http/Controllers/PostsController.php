<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController
{
    public function index(): Collection
    {
        return Post::all();
    }

    public function show(Post $post): Post
    {
        return $post;
    }

    public function create(Request $request) {
        return Post::create([
            'title' => $request->title,
            'text' => $request->text,
        ]);
    }

    public function update(Post $post, Request $request): Response
    {
        $post->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        $post->save();

        return response("Publicação \"{$post->title}\" foi atualizado com sucesso!", 201);
    }
}
