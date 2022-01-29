<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $articles = Article::latest()->paginate(10);
        return view('index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('articles.create');
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
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/images"), $imageName);
        }
        else
            $imageName = '';

        $tags = explode(",", $request->tags);

        $article = $request->user()->articles()->create([
            'title' => $request->title,
            'description' => $request->body,
            'cover' => $imageName
        ]);

        $article->tag($tags);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['article_id'] = $article->id;
                $request['photo'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Photo::create($request->all());
            }
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $photos = Photo::where('article_id', '=', $article->id)->get();
        return view('articles.show', [
            'article' => $article,
            'photos' => $photos
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
