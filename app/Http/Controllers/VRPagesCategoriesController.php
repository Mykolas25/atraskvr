<?php

namespace App\Http\Controllers;

use App\Models\VRPagesCategories;
use App\Models\VRResources;
use Illuminate\Http\Request;


class VRPagesCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config['categories'] = VRPagesCategories::with(['CategoriesTranslations','Pages'])->get()->toArray();
        $resources['resource'] = VRResources::get()->toArray();
        return view('pages', $config, $resources);
    }

    public function adminIndex()
    {

        $configuration['tableName'] = 'categories';
        $configuration['list'] = VRPagesCategories::get()->toArray();
        return view('admin.list', $configuration);

//        $config['categories'] = VRPagesCategories::with(['CategoriesTranslations','Pages'])->get()->toArray();
//        $resources['resource'] = VRResources::get()->toArray();
//        return view('pages', $config, $resources);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function adminCreate()
    {
        $modelData = new VRPagesCategories();
        $configuration['tableName'] = 'categories';
        $configuration['fields']    = $modelData->getFillables();
        return view('admin.create', $configuration);
    }


    public function adminStore(Request $request)
    {
        $data = request()->all();

        VRPagesCategories::create([
            'id' => $data['id']
        ]);

        $resourceStore = new VRResourceController();
        $resourceStore->getResourceStore($data);


        return redirect()->route('app.categories.index');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
