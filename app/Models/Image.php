<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    use HasFactory;
protected $fillable = ['image','article_id'];

    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }

}
