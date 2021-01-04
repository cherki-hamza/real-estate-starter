<?php

namespace App\Traits;
use Illuminate\Support\Facades\File;

trait RemoveImageTrait {

     // function to remove Image
    function RemoveImage($photo){

        if (file_exists($photo)) {

            File::delete([
                public_path($photo),
             ]);

        }
        return ' And The Current Picture Removed with success';
    }

}
