<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','des','detail','public','data_pubblic','thumb','category','position'];

    protected $casts = [
        'position' => 'array',
    ];
    public function searchBlog($title){
        // dd($title);
        $data = Blog::where('title', 'like', "%{$title}%")->get();
        return $data;
    }
}
