<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSections;
use App\Models\Article;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ArticleController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','ASC')->paginate(10);
        return view('Article.article',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSections $request)
    {
        try {
            $article = new Article();
            $article->title = $request->title;
            $article->description = $request->description;
            // dd($article);
            $article->save();
            session()->flash('success_message', ' added in Article');
            return redirect()->route('articles.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSections $request)
    {
        try {
            $article = Article::findorFail($request->id);
            $article->update([
                $article->title = $request->title,
            $article->description = $request->description,
            ]);
            $article->save();
            session()->flash('success_message', ' updated in Article');
            return redirect()->route('articles.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $article = Article::findorFail($request->id)->delete();
        session()->flash('success_message', ' deleted in Article');
        return redirect()->route('articles.index');
    }
}
