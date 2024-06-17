<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $recentPost = Blog::latest()->take(3)->get();
        $recent = Blog::latest()->first();
        return view('index', compact('recentPost', 'recent'));
    }
    public function blog(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $blogs = Blog::where('title', 'LIKE', "%{$query}%")
                ->orderBy('id', 'desc')
                ->paginate(3);
        } else {
            $blogs = Blog::orderBy('id', 'desc')->paginate(3);
        }

        if ($blogs->isEmpty()) {
            $blogs = collect(); // Return an empty collection
        }

        $blog = Blog::all();
        $recentPosts = Blog::latest()->take(4)->get();

        return view('blog.blog', compact('blogs', 'recentPosts', 'query', 'blog'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $recentPosts = Blog::latest()->take(4)->get();
        return view('blog.show', compact('blog', 'recentPosts'));
    }

    public function showByCategory($category)
    {
        $blog = Blog::all();
        $blogs = Blog::where('category', $category)->orderBy('id', 'desc')->paginate(3);
        $recentPosts = Blog::latest()->take(4)->get();

        return view('blog.showByCategory', compact('blog', 'blogs', 'recentPosts'));
    }
}
