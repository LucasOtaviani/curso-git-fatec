<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController
{
    public function create(Request $request) {
        return Post::create([
            'title' => $request->title,
            'text' => $request->text,
        ]);
    }

    public function delete(Post $post): Response
    {
        $post->delete();
        return response("Publicação \"{$post->title}\" deletado com sucesso!", 200);
    }
}
