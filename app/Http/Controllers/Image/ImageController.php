<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;


class ImageController extends Controller
{
    use WithFileUploads;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $image;
    public function index()
    {
        $images = Image::all();
        $articles = Article::all();
        return view('image.index',compact('articles','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->all();
//        $this->validate($request, [
//
//            'image' => 'mimes:pdf,jpeg,png,jpg',
//
//        ], [
//            'image.mimes' => 'صيغة المرفق يجب ان تكون   pdf, jpeg , png , jpg',
//        ]);
//
            $image = new Image();
//        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
//        $this->image->storeAs('articles',$imageName);
//        $image->image = $imageName;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('assets/uploads/articles/', $filename);
            $image->image = $filename;
        }
//        dd($image);
            $image->article_id = $request->article_id;


            $image->save();
            session()->flash('success_message', ' added in Article');
            return redirect()->route('images.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function update(Request $request)
    {
//        try {

            $book = Image::findorFail($request->id);

            if ($request->hasFile('image')){
                $nn = 'assets/uploads/articles/'.$book->image;
                if (File::exists($nn)){
                    File::delete($nn);
                }
                $file = $request->file('image');
                $extention = $file->getClientOriginalName();
                $filename = time().'.'.$extention;
                $file->move('assets/uploads/articles/',$filename);
                $book->image =  $filename;
            }
            $book->article_id = $request->article_id;
            $book->save();
            session()->flash('success_message', ' updated in Article');
            return redirect()->route('images.index');
//        } catch (\Exception $e) {
//            return redirect()->back()->with(['error' => $e->getMessage()]);
//        }
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
