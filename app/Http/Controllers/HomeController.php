<?php

namespace App\Http\Controllers;

use App\Category;
use App\Job;
use App\Page;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $request;
    protected $post;
    protected $page;
    protected $category;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, Post $post, Page $page, Category $category)
    {
        $this->post     = $post;
        $this->page     = $page;
        $this->request  = $request;
        $this->category = $category;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            // 'posts'      => $this->post->published()
            //     ->orderBy('id', 'dec')
            //     ->paginate(5),
            'categories' => $this->category->all(),
        ]);
    }

    public function showAbout()
    {
        $post = $this->page->where('slug', '=', 'about')
            ->first();
        return view('post', [
            'post'       => $post,
            'categories' => $this->category->all(),
        ]);
    }

    public function showJobs()
    {
        $post = $this->page->where('slug', '=', 'jobs')
            ->first();
        return view('jobs', [
            'post'        => $post,
            'categories'  => $this->category->all(),
            'jobs'        => Job::getJobs(),
            'authorities' => Job::getAuthorities(),
        ]);
    }

    public function show($url)
    {
        $post = $this->post->where('slug', '=', $url)
            ->published()
            ->first();

        if (empty($post)) {
            abort(404);
        }

        $prev = $this->post->where('id', '<', $post->id)
            ->published()
            ->orderBy('id', 'dec')
            ->first();
        $next = $this->post->where('id', '>', $post->id)
            ->published()
            ->orderBy('id', 'dec')
            ->first();

        return view('post', [
            'post'       => $post,
            'prev'       => $prev,
            'next'       => $next,
            'categories' => $this->category->all(),
        ]);
    }

    public function searchWithCategory($id)
    {
        return view('index', [
            'posts'      => $this->post->published()
                ->orderBy('id', 'dec')
                ->where('category_id', '=', $id)
                ->paginate(5),
            'categories' => $this->category->all(),
        ]);
    }
}
