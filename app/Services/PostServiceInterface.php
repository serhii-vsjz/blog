<?php


namespace App\Services;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface PostServiceInterface
{
    public function getPosts(int $perPage = 10): LengthAwarePaginator;

    /**
     * Get posts by category
     *
     * @param int $categoryId
     * @return Collection
     *
     */
    public function getPostsByCategory(int $categoryId): ?Collection;

    public function getCategories(): ?Collection;

    /**
     * Get post by ID
     *
     * @param int $post
     * @return Post
     */
    public function getPostById(int $post): ?Post;

    /**
     * Get category by ID
     * @param $categoryId
     * @return Category|null
     */
    public function getCategoryById($categoryId): ?Category;

    /**
     * Create category
     *
     * @param array $attributes
     * @param Category $category
     * @return int
     */

    /**
     * Update category by ID
     *
     * @param array $attributes
     * @param int $categoryId
     * @return int
     *
     */
    public function updateCategory(array $attributes, int $categoryId): int;

    public function createCategory(array  $attributes): int;

    /**
     * Create post
     *
     * @param array $attributes
     * @return int
     */
    public function createPost(array $attributes): int;

    /**
     * Publishing method
     *
     * @param Post $post
     */
    public function publish(Post $post): void;

    /**
     * Unpublish method
     *
     * @param Post $post
     */
    public function unPublish(Post $post): void;

    /**
     * Remove post
     *
     * @param Post $post
     */
    public function removePost(Post $post): void;

    /**
     * @param int $categoryId
     */
    public function removeCategory(int $categoryId): void;
}