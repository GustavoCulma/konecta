<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //status
    public const BORRADOR =1;
    public const PUBLICADO =2;

    //asignacion masiva inversa
    protected $guarded = ['id', 'created_at', 'updated_at', 'status'];


    //relación uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relacion uno a muchos polimorfica

    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }

    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
