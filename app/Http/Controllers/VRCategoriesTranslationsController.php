<?php

namespace App\Http\Controllers;
use App\Models\VRCategoriesTranslations;
use App\Models\VRLanguages;
use App\Models\VRPagesCategories;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
class VRCategoriesTranslationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminIndex()
    {
        $configuration['tableName'] = 'categories_translations';
        $configuration['list'] = VRCategoriesTranslations::get()->toArray();
        return view('admin.list', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function adminCreate()
    {
        $modelData = new VRCategoriesTranslations();
        $configuration['tableName'] = 'categories_translations';
        $configuration['categories'] = VRPagesCategories::get()->pluck('id', 'id');
        $configuration['languages'] = VRLanguages::get()->pluck('name', 'id');
        $configuration['fields'] = $modelData->getFillables();
        return view('admin.create', $configuration);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    public function adminStore()
    {
        $data = request()->all();
        VRCategoriesTranslations::create([
            'name' => $data['name'],
            'languages_id' => $data['languages_id'],
            'categories_id' => $data['categories_id'],
            'slug' => $data['slug']
        ]);
        return redirect()->route('app.categories_translations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
