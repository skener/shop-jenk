<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $fillable = ['title', 'deskription', 'image', 'deskription_short'];
//$news = News::all();

//$news->toarray();

}
