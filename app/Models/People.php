<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class People extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['slug', 'name', 'designation', 'image_path', 'facebook', 'twitter', 'linkedin', 'printerest', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
