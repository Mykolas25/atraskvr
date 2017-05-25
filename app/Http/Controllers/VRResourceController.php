<?php

namespace App\Http\Controllers;

use App\Models\VRResources;
use Illuminate\Http\Request;

class VRResourceController extends Controller
{

    public function uploadShow()
    {
//        $config["resources"] = DTResources::get()->toArray();
        return view('admin.uploadBlade');
    }


    protected function store(array $data = null )
    {
        $resource = request()->file('image');

        $uploadController = new VRUploadController();
        $uploadController->upload($resource);

//        DTUsersResourcesConnections::create([
//            "users_id"=>auth()->user()->id,
//            "resources_id"=> $record->id
//        ]);


    }


    protected function showResource()
    {


    }

}
