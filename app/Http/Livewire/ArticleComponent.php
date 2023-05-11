<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Image;
use Livewire\Component;

class ArticleComponent extends Component
{
    public function render()
    {

        $articles = Article::orderBy('title','ASC')->get();
        $images = Image::get();
        return view('livewire.article-component',['articles' => $articles , 'images' => $images]);
    }
}
