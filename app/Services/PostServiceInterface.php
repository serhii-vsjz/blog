<?php


namespace App\Services;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface PostServiceInterface
{
    public function getPosts(int $page, int $perPage = 2): LengthAwarePaginator;

    public function createPost(array $attributes): int;

    public function getPostById(int $post): ?Post;

    public function getPostsByCategory(Category $category, int $page, int $perPage = 2): LengthAwarePaginator;

    public function getFeaturedPosts(): ?Collection;

    public function updatePost(array $attributes, int $postId): int;

    public function getCategories(): ?Collection;

    public function createCategory(array  $attributes): int;

    public function getCategory(int $categoryId): ?Category;

    public function updateCategory(array $attributes, int $categoryId): int;
}