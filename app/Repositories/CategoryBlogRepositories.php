<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Models\CategoryBlog;
use App\Utils\UploadFile;

class CategoryBlogRepositories
{
    public function __construct(
        protected readonly Blog $blog,
        protected readonly CategoryBlog $categoryBlog,
        protected readonly UploadFile $uploadFile,
    ) {
    }

    public function findAllWithPaginate($request)
    {
        if ($request != null) {
            return $this->categoryBlog->where('name', 'like', "%$request%")->paginate(6);
        } else {
            return $this->categoryBlog->latest()->paginate(6);
        }
    }

    public function findAllWithLimit(int $limit)
    {
        return $this->categoryBlog->take($limit)->latest()->get();
    }

    public function findAll()
    {
        return $this->categoryBlog->latest()->get();
    }

    public function findById(int $id)
    {
        return $this->categoryBlog->where('id', $id)->first();
    }

    public function store($request)
    {
        return $this->categoryBlog->create($request);
    }

    public function update($request, $id)
    {
        $categoryBlog = $this->findById($id);
        return $categoryBlog->update($request);
    }

    public function delete($id)
    {
        $categoryBlog = $this->findById($id);
        return $categoryBlog->delete();
    }
}
