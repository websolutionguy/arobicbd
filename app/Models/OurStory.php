<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'who_we_are', 'our_mission',  'our_vision', 'image_path', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
