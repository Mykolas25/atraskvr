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
        $resource = request()->file('images');
//        dd($resource);
        $imgIds = [];
        foreach($resource as $image) {

            $uploadController = new VRUploadController();
            $record = $uploadController->upload($image);
//
            $imgIds[] = $record->id;
        }
        return  $imgIds;
    }

//    public function createResource()
//    {
//        $data = request()->all();
//        dd($data);
//        $this->resourceStore($data);
//
//        return redirect()->route('app.pages.upload');
//    }

    public function getResourceStore()
    {
        return $this->resourceStore();
    }

}
