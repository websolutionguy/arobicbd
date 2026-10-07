<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Career extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['slug', 'title','vacancy', 'status', 'location', 'salary', 'description', 'apply_email', 'apply_link', 'user_id'];

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
