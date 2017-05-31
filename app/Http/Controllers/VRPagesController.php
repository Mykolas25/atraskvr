<?php namespace

App\Http\Controllers;

use App\Models\VRLanguages;
use App\Models\VRPages;
use App\Models\VRPagesCategories;
use App\Models\VRPagesResourcesConnections;
use App\Models\VRPagesTranslations;
use App\Models\VRResources;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class VRPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /vrpages
     *
     * @return Response
     */
    public function index()
    {
    }

    /**
     * Display a listing of the resource.
     * GET /vrpages
     *
     * @return Response
     */

    public function adminShow()
    {
        $config['pagesShow'] = VRpages::with('resourceImage','pagesConnectedImages')->get()->toArray();
        return view('admin.pageform', $config);
    }

    public function mediaFiles($id)
    {
        $config['mediaFilesShow'] = VRpages::with('resourceImage','pagesConnectedImages')->where('id', '=', $id)->get()->toArray();
        if(isset($config['mediaFilesShow']))
        {
            foreach($config['mediaFilesShow'] as $mediaFiles)
            {
               foreach($mediaFiles['pages_connected_images'] as $mediaFile)
               {
                   if($mediaFile['resources_connected_images']['mime_type'] == "image/jpeg" || "image/png")
                   {
                        $config['image'][] = $mediaFile['resources_connected_images']['path'];
                   }
                   if($mediaFile['resources_connected_images']['mime_type'] == "video/mp4")
                     {
                         $config['video'][] = $mediaFile['resources_connected_images']['path'];

                     }

                }
            }
        }

        return view('admin.pageform', $config);
    }

    public function adminIndex()
    {
        return view('admin.pageform');
    }

    /**
     * Show the form for creating a new resource.
     * GET /vrpages/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /vrpages/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();
        //$configuration['list'] = VRPages::get()->toArray;
        $configuration['dropdown']['pages_categories_id'] = VRPagesCategories::all()->pluck('id', 'id')->toArray();
        $configuration['dropdown']['cover_image_id'] = VRResources::all()->pluck('path', 'id')->toArray();
        array_push($configuration['fields'], 'title');
        array_push($configuration['fields'], 'slug');
        $configuration['dropdown']['languages_id'] = VRLanguages::all()->pluck('name', 'id')->toArray();
        array_push($configuration['fields'], 'languages_id');
        array_push($configuration['fields'], 'description_short');
        array_push($configuration['fields'], 'description_long');
        return view('admin.pageform', $configuration);
    }

    /**
     * Store a newly created resource in storage.
     * POST /vrpages
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /vrpages
     *
     * @return Response
     */
    public function adminStore()
    {
        $data = request()->all();

        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();

//      create pages data
        $record = VRPages::create($data)->toArray();

//      create pages translations data using pages_id form prev create pages data
        $data['pages_id'] = $record['id'];
        VRPagesTranslations::create($data);
        $configuration['comment'] = ['message' => trans(substr($configuration['tableName'], 0, -1) . ' added successfully')];

//      store imagdata when creating page
        $resourceStore = new VRResourceController();
        $resource_id = $resourceStore->getResourceStore($data);

//      conntect pages_id and resources id

        foreach($resource_id as $id) {
            VRPagesResourcesConnections::create([
                'pages_id' => $data['pages_id'],
                'resources_id' => $id
            ]);
        }

        return redirect()->route('app.pages.create', $configuration);
    }


    /**
     * Display the specified resource.
     * GET /vrpages/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /vrpages/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function adminEdit($id)
    {
        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();
        $configuration['dropdown']['pages_categories_id'] = VRPagesCategories::all()->pluck('id', 'id')->toArray();
        $configuration['record'] = VRPages::find($id)->toArray();

        return view('admin.editform', $configuration);
    }

    public function adminUpdate($id)
    {
        $data = request()->all();
        $dataFromModel = new VRPages();
        $configuration['fields'] = $dataFromModel->getFillable();
        $configuration['tableName'] = $dataFromModel->getTableName();
        $missingValues = '';
        foreach ($configuration['fields'] as $key => $value) {
            if ($value == 'parent_id') {
            } elseif (!isset($data[$value])) {
                $missingValues = $missingValues . ' ' . $value . ',';
            }
        }
        if ($missingValues != '') {
            $missingValues = substr($missingValues, 1, -1);
            $configuration['error'] = ['message' => trans('Please enter ' . $missingValues)];
            $configuration['record'] = VRPages::find($id)->toArray();
            return view('admin.editform', $configuration);
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /vrpages/{id}
     *
     * @param  int $id
     * @return Response
     */


    public function adminDestroy($id)
    {
        if (VRPages::destroy($id) and VRPagesTranslations::where('pages_id', '=', $id)->delete()) {
            return json_encode(["success" => true, "id" => $id]);
        }
    }
}
