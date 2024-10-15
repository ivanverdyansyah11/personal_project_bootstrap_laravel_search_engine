<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Utils\UploadFile;
use voku\helper\StopWords;
use Sastrawi\Stemmer\StemmerFactory;
use App\Helpers\TfidfHelper;

class BlogRepositories
{
    public function __construct(
        protected readonly Blog $blog,
        protected readonly UploadFile $uploadFile,
    ) {
    }

    public function findAll($request)
    {
        if ($request->filled('search')) {
            // Step 1: Preprocessing Input
            $search = $request->input('search');
            $search = strtolower($search);
            $search = preg_replace("/[^\w\s]/", '', $search);

            // Step 2: Tokenization
            $tokenization = explode(' ', $search);

            // Step 3: Stopword Removal
            $stopWordsInstance = new StopWords();
            $filtering = $stopWordsInstance->getStopWordsFromLanguage('en');
            $filteredTokens = array_diff($tokenization, $filtering);

            // Step 4: Stemming
            $stemmerFactory = new StemmerFactory();
            $stemmer = $stemmerFactory->createStemmer();
            $stemmedTokens = array_map(function($token) use ($stemmer) {
                return $stemmer->stem($token);
            }, $filteredTokens);

            dd($filteredTokens, $stemmedTokens);

            // Step 5: Retrieve All Blogs
            $allBlogs = $this->blog->with('category_blog')->get();

            // Step 6: Calculate TF-IDF
            $tfIdf = TfidfHelper::calculateTfidf($allBlogs, $stemmedTokens);
            $sortedBlogs = [];
            foreach ($tfIdf as $blogId => $terms) {
                $totalScore = array_sum($terms);
                $sortedBlogs[$blogId] = $totalScore;
            }
            arsort($sortedBlogs); // Sort in descending order
            $topBlogIds = array_keys($sortedBlogs); // Get sorted blog IDs

            // Retrieve top 10 blogs from the database
            $top10BlogIds = array_slice($topBlogIds, 0, 10);
            $blogs = $this->blog->with('category_blog')->whereIn('id', $top10BlogIds)->get()->keyBy('id');

            // Prepare scores in the same order as $top10BlogIds
            $scores = [];
            foreach ($top10BlogIds as $blogId) {
                $scores[] = $sortedBlogs[$blogId] ?? 0;
            }

            // Return top 10 results in order of scores
            return [$blogs->values(), $scores];
        } else {
            return $this->blog->latest()->get();
        }
    }

    public function findAllBySlug(string $slug)
    {
        return $this->blog->whereHas('category', function($query) use($slug) {
            $query->where('slug', $slug);
        })->latest()->get();
    }

    public function findById(int $id)
    {
        return $this->blog->where('id', $id)->first();
    }

    public function findBySlug(string $slug)
    {
        return $this->blog->where('slug', $slug)->first();
    }

    public function store($request)
    {
        $request['blog_image'] = $this->uploadFile->uploadSingleFile($request['blog_image'], "assets/images/blogs");
        return $this->blog->create($request);
    }

    public function update($request, string $slug)
    {
        $blog = $this->findBySlug($slug);
        if (isset($request["blog_image"])) {
            $this->uploadFile->deleteExistFile("assets/images/blogs/" . $blog->blog_image);
            $request['blog_image'] = $this->uploadFile->uploadSingleFile($request['blog_image'], 'assets/images/blogs');
        } else {
            $request['blog_image'] = $blog->blog_image;
        }
        return $blog->update($request);
    }

    public function delete($slug)
    {
        $blog = $this->findBySlug($slug);
        $this->uploadFile->deleteExistFile("assets/images/blogs/" . $blog->blog_image);
        return $blog->delete();
    }
}
