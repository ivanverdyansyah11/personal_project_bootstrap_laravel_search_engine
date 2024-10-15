<?php
namespace App\Helpers;

use MathPHP\LinearAlgebra\Matrix;

class TfidfHelper
{
    public static function calculateTfidf($allBlogs, $stemmedTokens)
    {
        $docCount = $allBlogs->count();
        $tf = [];
        $idf = [];
        $totalDocuments = [];

        foreach ($allBlogs as $blog) {
            $contentTokens = explode(' ', strtolower($blog->content));
            $totalTokens = count($contentTokens);
            foreach ($contentTokens as $token) {
                if (in_array($token, $stemmedTokens)) {
                    $tf[$blog->id][$token] = isset($tf[$blog->id][$token]) ? $tf[$blog->id][$token] + 1 : 1;
                }
            }
            $totalDocuments[$blog->id] = $totalTokens;
        }

        foreach ($stemmedTokens as $token) {
            $documentFrequency = 0;
            foreach ($allBlogs as $blog) {
                $contentTokens = explode(' ', strtolower($blog->content));
                if (in_array($token, $contentTokens)) {
                    $documentFrequency++;
                }
            }

            if ($documentFrequency > 0) {
                $idf[$token] = log($docCount / $documentFrequency);
            }
        }

        $tfIdf = [];
        foreach ($tf as $blogId => $terms) {
            foreach ($terms as $term => $termCount) {
                $tfIdf[$blogId][$term] = ($termCount / $totalDocuments[$blogId]) * ($idf[$term] ?? 0);
            }
        }

        return $tfIdf;
    }
}
