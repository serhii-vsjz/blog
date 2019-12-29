<?php


namespace App\Services;


use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentService implements CommentServiceInterface
{
    public function addComment(array $attributes, Post $post)
    {
        $user = Auth::user();
        $comment = new Comment();
        $comment->user()->associate($user);
        $comment->post()->associate($post);
        $comment->comment = $attributes['cMessage'];
        $comment->is_active = true;
        $comment->save();
        return $comment->id;
    }

    public function getCommentById(int $commentId)
    {
        return Comment::find($commentId);
    }

    public function deleteComment(int $commentId)
    {
        // TODO: Implement deleteComment() method.
    }
}