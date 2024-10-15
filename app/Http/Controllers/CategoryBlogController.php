<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepositories;
use Illuminate\View\View;

class CategoryBlogController extends Controller
{
    public function __construct(
        protected readonly BlogRepositories $blogRepositories,
    ) {
    }

    public function show(string $slug): View
    {
        return view('category-blog.detail', [
            'title' => 'Category Blog Page',
            'page' => 'Dashboard',
            'blogs' => $this->blogRepositories->findAllBySlug($slug),
        ]);
    }
}
