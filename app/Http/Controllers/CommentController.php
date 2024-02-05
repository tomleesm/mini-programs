<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic:,name')->only('destroy');
    }

    public function store($articleId, Request $request)
    {
        $article = Article::find($articleId);
        $comment = new Comment();
        $comment->commenter = $request->input('comment.commenter');
        $comment->body = $request->input('comment.body');
        $comment->status = $request->input('comment.status');

        if ($article->comments()->save($comment)) {
            return redirect()->route('articles.show', ['article' => $article->id]);
        } else {
            throw new \Exception('it can not store a new article');
        }
    }

    public function destroy($articleId, $commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete();

        return redirect()->route('articles.show', ['article' => $articleId]);
    }
}
