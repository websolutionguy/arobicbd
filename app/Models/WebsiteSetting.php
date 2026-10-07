<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = ['header_logo_image_path', 'footer_logo_image_path', 'about_description', 'copyright', 'play_store_link', 'app_store_link', 'facebook', 'twitter', 'youtube', 'instagrame', 'linkedin', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function getSettingsData($id){
        return WebsiteSetting::where('id', $id)->first();
    }

    
}
