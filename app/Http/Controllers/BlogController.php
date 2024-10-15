<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Repositories\BlogRepositories;
use App\Repositories\CategoryBlogRepositories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function __construct(
        protected readonly BlogRepositories $blogRepositories,
        protected readonly CategoryBlogRepositories $categoryBlogRepositories,
    ) {
    }

    public function index(Request $request): View
    {
        $result = $this->blogRepositories->findAll($request);
        $page = !is_null($request->search) ? 'content.index': 'blog.index';
        return view($page, [
            'title' => 'Main Page',
            'page' => 'Dashboard',
            'blogs' => !is_null($request->search) ? $result[0] : $result,
            'scores' => !is_null($request->search) ? $result[1] : 0,
            'search' => $request->search,
            'category_blogs' => $this->categoryBlogRepositories->findAllWithLimit(12),
        ]);
    }

    public function show(string $slug): View
    {
        return view('blog.detail', [
            'title' => 'Detail Blog Page',
            'page' => 'Dashboard',
            'blog' => $this->blogRepositories->findBySlug($slug),
        ]);
    }

    public function create(): View
    {
        return view('blog.create', [
            'title' => 'Create Blog Page',
            'page' => 'Dashboard',
        ]);
    }

    public function store(BlogStoreRequest $request): RedirectResponse
    {
        try {
            $this->blogRepositories->store($request->validated());
            return redirect(route('blog.index'))->with('success', 'Successfully to add new blog!');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('failed', 'Failed to add new blog!');
        }
    }

    public function edit(string $slug): View
    {
        return view('blog.edit', [
            'title' => 'Edit Blog Page',
            'page' => 'Dashboard',
            'blog' => $this->blogRepositories->findBySlug($slug),
        ]);
    }

    public function update(BlogUpdateRequest $request, string $slug): RedirectResponse
    {
        try {
            $this->blogRepositories->update($request->validated(), $slug);
            return redirect(route('blog.index'))->with('success', 'Successfully to edit blog!');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect()->back()->with('failed', 'Failed to edit blog!');
        }
    }

    public function destroy(string $slug): RedirectResponse
    {
        try {
            $this->blogRepositories->delete($slug);
            return redirect(route('blog.index'))->with('success', 'Successfully to delete blog!');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return redirect(route('blog.index'))->with('failed', 'Failed to delete blog!');
        }
    }
}
