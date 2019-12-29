<?php


namespace App\Services;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Support\Facades\Auth;

class PostService implements PostServiceInterface
{
    public function getPosts(int $page, int $perPage = 2): LengthAwarePaginator
    {
        $posts = Post::paginate($perPage);
        return $posts;
    }

    public function createPost(array $attributes): int
    {
        $user = Auth::user();

        $post = new Post();
        $post->title = $attributes['title'];
        $post->preview = $attributes['preview'];
        $post->content = $attributes['content'];
        $post->is_active = false;
        $post->poster = $attributes['poster'];

        $category = Category::findOrFail($attributes['category_id']);

        $post->user()->associate($user);
        $post->category()->associate($category);
        $post->save();

        return $post->id;
    }

    public function getPostById(int $post): ?Post
    {
        return Post::find($post);
    }

    public function getPostsByCategory(Category $category, int $page, int $perPage = 2): LengthAwarePaginator
    {
        $posts = Post::where('category_id', $category->id)->paginate($perPage);
        return $posts;
    }

    public function getFeaturedPosts(): ?Collection
    {
        $posts = Post::where('posts.is_active', true)
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->limit(3)
            ->get();
        return $posts;
    }

    public function updatePost(array $attributes, int $postId): int
    {
        $post = Post::find($postId);
        $post->title = $attributes['title'];
        $post->preview = $attributes['preview'];
        $post->content = $attributes['content'];
        $post->category->id = $attributes['category'];

        $post->save();

        return $post->id;
    }

    public function getCategories(): ?Collection
    {
        return Category::all();
    }

    public function createCategory(array $attributes): int
    {
        $category = new Category();
        $category->name = $attributes['name'];
        $category->is_active = true;
        $category->save();

        return $category->id;
    }

    public function getCategory(int $categoryId): ?Category
    {
        $category = Category::find($categoryId);
        if (!$category) {
            return null;
        }
        return $category;
    }

    public function updateCategory(array $attributes, int $categoryId): int
    {
        $category = Category::find($categoryId);
        $category->name = $attributes['name'];
        $category->save();

        return $category->id;
    }
}