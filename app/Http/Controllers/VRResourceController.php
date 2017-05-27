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
        $config['categories'] = VRPagesCategories::with(['CategoriesTranslations','Pages'])->get()->toArray();
        $resources['resource'] = VRResources::get()->toArray();
        return view('admin.uploadBlade', $config, $resources);

    }


    protected function resourceStore(array $data = null)
    {

        $resource = request()->file('image');

        $uploadController = new VRUploadController();
        $record = $uploadController->upload($resource);

//        VRPagesResourcesConnections::create([
////            "pages_id"=>auth()->user()->id,
////            "resources_id"=> $record->id
//        ]);
//        $config = new VRPagesResourcesConnections();
//        $record = $config->getFillables();

        VRPagesResourcesConnections::create([
            "pages_id" => request()->id,
            "resources_id"=> $record->id
        ]);
    }

    public function getResourceStore()
    {
        return $this->resourceStore();
    }

    protected function showResource()
    {
    }

}
