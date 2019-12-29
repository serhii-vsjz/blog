<?php

namespace App\Http\Controllers;

use App\Models\Traits\DeletableTrait;
use App\Services\CommentServiceInterface;
use App\Services\PostServiceInterface;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use DeletableTrait;
    private $commentService;
    private $postService;

    public function __construct(CommentServiceInterface $commentService, PostServiceInterface $postService)
    {
        $this->commentService = $commentService;
        $this->postService = $postService;
    }

    public function create(int $postId, Request $request)
    {
        $this->validate($request, [
            'cMessage' => 'required',
        ]);

        $attributes = $request->toArray();
        $post = $this->postService->getPostById($postId);
        $this->commentService->addComment($attributes, $post);
    }

    public function destroy($id)
    {
        $comment = $this->commentService->getCommentById($id);
        $this->delete($comment);
        $comment->save();

        $postId = $comment->post_id;
        return response(redirect('/post/' .  $postId));
    }
}
