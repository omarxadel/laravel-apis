<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    public function show($id)
    {
        return Comment::where('article_id', $id)->get();
    }

    public function store(Request $request, $id)
    {
        $request['article_id'] = $id;
        return Comment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        return $comment;
    }

    public function delete(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return 204;
    }
}
