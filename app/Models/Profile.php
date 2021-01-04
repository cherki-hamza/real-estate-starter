<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Str;

class Profile extends Model
{

    protected $fillable = [
        'user_id', 'username' , 'ar_username' , 'email' , 'tel' , 'country','ar_country',
        'city','ar_city','about','ar_about','more_info','ar_more_info',
        'picture','website', 'facebook' , 'twitter'  , 'instagram' , 'pinterest'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ProfileImg(){
        $img = $this->picture;

       return (Str::contains($img, 'gravatar.com'))? $this->picture : url('/').'/'.$this->picture;
    }

    // get photo from site api by email
    public function getGravatar(){
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://gravatar.com/avatar/$hash";
    }

    // check if user Profile has a picture in database ==> true : see the user profile has a picture | and false see the user dont have a picture in database
    public function hasPicture(){
        if ($this->picture != null){
            return true;
        }else{
            return false;
        }
    }

    // get picture from database ==> from profile model
    public function getPicture(){
        return $this->picture;
    }



    // relation profile
    public function profile(){
        return $this->hasOne('App\Models\Profile');
    }

    // function to get the finale image profile
    public function photo(){
        $img = ($this->hasPicture()) ?  $this->getPicture() : $this->getGravatar();
        return $img;
    }

}
