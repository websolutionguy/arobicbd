<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['phone', 'email', 'address', 'schedule', 'map_embeded', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
