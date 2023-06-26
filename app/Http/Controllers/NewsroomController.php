<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Newsroom;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NewsroomRequest;
use App\Http\Requests\StoreNewsroomRequest;

class NewsroomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsroom = Newsroom::with('author')->orderBy('created_at', 'DESC')->paginate(8);

        return view('admin.newsroom.index', compact('newsroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.newsroom.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsroomRequest $request): RedirectResponse
    {
        $request->validated();

        $newsroom = Newsroom::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'overview' => $request->input('overview'),
            'body' => $request->input('body'),
            'active' => $request->input('active'),
            'user_id' => Auth::user()->id
        ]);
        if (!is_null($request->input('category_id'))) {
            $newsroom->forceFill([
                'category_id' => $request->input('category_id')
            ])->save();
        }

        if ($request->hasfile('featured_image')) {
            $newsroom->addMediaFromRequest('featured_image')->toMediaCollection('featured_image');
        }
        return redirect(route('newsroom.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function show($slug) : View
    {
        $news = Newsroom::where('slug', $slug)->firstOrFail();
        $latestNews = Newsroom::with('author')->with('media')->orderBy('created_at', 'DESC')->where('id', '!=', $news->id)->take(3)->get();
        return view('news.show', compact('news', 'latestNews'));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsroom $newsroom)
    {
        $categories = Category::all();
        return view('admin.newsroom.edit', compact('newsroom', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsroomRequest  $request
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function update(NewsroomRequest $request, Newsroom $newsroom)
    {
        $request->validated();

        $newsroom->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'overview' => $request->input('overview'),
            'body' => $request->input('body'),
            'active' => $request->input('active'),
        ]);
        if (!is_null($request->input('category_id'))) {
            $newsroom->forceFill([
                'category_id' => $request->input('category_id')
            ])->save();
        }

        if ($request->hasfile('featured_image')) {
            $newsroom->clearMediaCollection('featured_image');
            $newsroom->addMediaFromRequest('featured_image')->toMediaCollection('featured_image');
        }

        return redirect()->route('newsroom.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsroom $newsroom)
    {
        //
    }
}
