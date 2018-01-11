<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Models\ArticleCategories;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategories::all()->pluck('name');
        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255|unique:articles',
            'subtitle' => 'max:255|',
            'preview' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image_name = str_random('7').'.jpg';

        $model = new Article();
        $model->title = $request->get('title');
        $model->subtitle = $request->get('subtitle');
        $model->preview = $request->get('preview');
        $model->body = $request->get('body');
        $model->image = $image_name;
        $model->author = Auth::id();
        $model->category_id = $request->get('category_id');

        $request->image->move(public_path('images'), $image_name);

        $model->save();

        return redirect()->route('article.index')->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.article.show', [
            'article' => Article::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.article.edit', [
            'article' => Article::find($id),
            'categories' => ArticleCategories::pluck('name', 'id'),
        ]);
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
        $this->validate($request, [
            'title' => 'required|max:255',
            'subtitle' => 'max:255|',
            'preview' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $model = Article::find($id);
        $model->title = $request->get('title');
        $model->subtitle = $request->get('subtitle');
        $model->preview = $request->get('preview');
        $model->body = $request->get('body');
        $model->author = Auth::id();
        $model->category_id = $request->get('category_id');

        if($request->get('image')){
            $image_name = str_random('7').'.jpg';
            $request->image->move(public_path('images'), $image_name);
            $model->image = $image_name;
        }

        $model->save();

        return redirect()->route('article.index')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return redirect()->route('article.index');
    }
}
