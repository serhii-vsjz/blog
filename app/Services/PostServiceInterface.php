<?php


namespace App\Services;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

interface PostServiceInterface
{
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
     * Create category
     *
     * @param array $attributes
     * @param Category $category
     * @return int
     */
    public function createCategory(array  $attributes, Category $category): int;

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
     * Remove category
     *
     * @param Post $post
     */
    public function removeCategory(Post $post): void;
}