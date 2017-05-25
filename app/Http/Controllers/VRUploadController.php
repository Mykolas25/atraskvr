<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\VRResources;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class VRUploadController extends Controller
{
    public function upload (UploadedFile $file)
    {
        $data =
            [
                "size" => $file->getSize(),
                "mime_type" => $file->getMimeType()
            ];

        $path = 'upload/' . date("Y/m/d/");
        $filename =Carbon::now()->timestamp . '_' .$file->getClientOriginalName();

        $file->move(public_path($path),$filename);

        $data['path'] = $path . $filename;

        return VRResources::create($data);
    }
}
