<?php namespace

    App\Http\Controllers;
use App\Models\VRLanguages;
use App\Models\VRPages;
use App\Models\VRPagesCategories;
use App\Models\VRPagesTranslations;
use App\Models\VRResources;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;
class VRPagesController extends Controller {
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
        return view ('admin.pageform');
    }

    public function adminIndex()
    {
        return view ('admin.index');
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
        array_push ($configuration['fields'],'title') ;
        array_push ($configuration['fields'],'slug') ;
        $configuration['dropdown']['languages_id'] = VRLanguages::all()->pluck( 'name', 'id')->toArray();
        array_push ($configuration['fields'],'languages_id');
        array_push ($configuration['fields'],'description_short') ;
        array_push ($configuration['fields'],'description_long') ;
        return view ('admin.pageform', $configuration);
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
        $record = VRPages::create($data);

//      create pages translations data using pages_id form prev create pages data
        $data['pages_id']=$record['id'];
        VRPagesTranslations::create($data);
        $configuration['comment'] = ['message' => trans(substr($configuration['tableName'], 0, -1) . ' added successfully')];

//        store img data



        $resourceStore = new VRResourceController();
        $resourceStore->getResourceStore($data);

        return redirect()->route('app.pages.create', $configuration);
    }
    /**
     * Display the specified resource.
     * GET /vrpages/{id}
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     * PUT /vrpages/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
        //TODO find from VRPagesTranslations find record by $record->id && $data->languages_id
        //TODO if exists -> update
        //TODO if not exists -> create translation
    }
    /**
     * Remove the specified resource from storage.
     * DELETE /vrpages/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
