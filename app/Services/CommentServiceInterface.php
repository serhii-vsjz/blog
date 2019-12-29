<?php


namespace App\Services;


use App\Models\Post;

interface CommentServiceInterface
{
    public function addComment(array $attributes,Post $post);

    public function getCommentById(int $commentId);

    public function deleteComment(int $commentId);

}