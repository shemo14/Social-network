<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Files;

class FileUploader extends Controller
{
    public static function Upload($file,$path,$id,$type){


        if (!file_exists($path)) {
            mkdir($path,0777, true);
        }

        if (!file_exists($path.'/index.html')) {
            $index = fopen($path.'index.html', 'w');
            fwrite($index,'Page Not Found');
            fclose($index);
        }

        $namefile   = rand(0000,9999).time();
        $ext        = $file->getClientOriginalExtension();
        $mastername = $namefile .'.'.$ext;
        $size       = FileUploader::GetSize($file->getSize());
        $mimtype    = $file->getMimeType();

        $file->move($path,$mastername);

        $Upload = new Files;
        $Upload->filename = $mastername;
        $Upload->path     = $path;
        $Upload->ext      = $ext;
        $Upload->name     = $file->getClientOriginalName();
        $Upload->type     = $type;
        $Upload->linkedid = $id;

        if ($Upload->save()) {
            return true;
        }else{
            return false;
        }
    }


    public static function GetSize($bytes){

        if ($bytes >= 1073741824) {

            $bytes = number_format($bytes / 1073741824, 2).'GB';

        }elseif ($bytes >= 1048576){

            $bytes = number_format($bytes / 1048576, 2).'MB';

        }elseif ($bytes >= 1024){

            $bytes = number_format($bytes / 1024, 2).'KB';

        }elseif ($bytes > 1){

            $bytes = $bytes .'bytes';

        }elseif ($bytes == 1){

            $bytes = $bytes .'byte';

        }else{

            $bytes = '0 bytes';
        }

        return $bytes;

    }
}
