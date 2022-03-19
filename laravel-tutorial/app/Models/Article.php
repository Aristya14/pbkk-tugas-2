<?php

namespace App\Models;

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //data yang harus diisi
    // protected $fillable=['title','slug','author','excerpt','body'];

    //yang gk bisa diisi id, yang lain bisa diisi bebas
    protected $guarded =['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
