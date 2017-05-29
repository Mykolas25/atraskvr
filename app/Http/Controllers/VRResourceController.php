<?php

namespace App\Http\Controllers;

use App\Models\VRPagesCategories;
use App\Models\VRPagesResourcesConnections;
use App\Models\VRResources;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class VRResourceController extends Controller
{

    public function uploadShow()
    {
        $resources['resource'] = VRResources::get()->toArray();

        $modelData = new VRResources();
        $configuration['tableName'] = 'vr_resources';
        $configuration['id'] = VRResources::get()->pluck('id', 'id');
        $configuration['fields'] = $modelData->getFillables();

        return view('admin.uploadBlade', $configuration, $resources);

    }

    protected function resourceStore(array $data = null)
    {

        $resource = request()->file('image');
        dd(request());
        $uploadController = new VRUploadController();
        $record = $uploadController->upload($resource);

//        VRPagesResourcesConnections::create([
////            "pages_id"=>auth()->user()->id,
////            "resources_id"=> $record->id
//        ]);
//        $config = new VRPagesResourcesConnections();
//        $record = $config->getFillables();


//        if(request()->id != 0) {
//            VRPagesResourcesConnections::create([
//                "pages_id" => request()->id,
//                "resources_id" => $record->id
//            ]);
//        }

        return $record->id;
    }

    public function getResourceStore()
    {
        return $this->resourceStore();
    }

}
