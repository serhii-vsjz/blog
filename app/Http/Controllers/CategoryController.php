<?php

namespace App\Http\Controllers;

use App\Models\Traits\DeletableTrait;
use App\Services\PostServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use DeletableTrait;

    private $postServices;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postServices = $postService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->postServices->getCategories();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $categoryId = $this->postServices->createCategory($attributes);
        return redirect(route('show_category', ['categoryId' => $categoryId]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->postServices->getCategory($id);
        if (!$category) {
            abort(404);
        }

        $allPosts = $this->postServices->getPostsByCategory($category, 10);
        return view('category.show', compact('allPosts', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = $this->postServices->getCategoryById($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $categoryId = $this->postServices->updateCategory(['name' => $request['name']], $id);

        return response(redirect('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->postServices->getCategory($id);
        $this->delete($category);
        $category->save();
        return back();
    }
}
