<?php

namespace App\Http\Controllers;

use App\Models\VRLanguages;
use App\Models\VRMenusTranslations;
use App\Models\VRPages;
use App\Models\VRPagesTranslations;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function pageData()
    {
        $configuration['menu'] = VRMenusTranslations::where('languages_id', app()->getLocale())->get()->toArray();
        $configuration['pagesLang'] = VRPagesTranslations::where('languages_id', app()->getLocale())->get()->toArray();

        $configuration['pages'] = VRPages::with('resourceImage','pagesConnectedImages', 'translations')->where('deleted_at','=', null)->get()->toArray();
        $configuration['aboutMedia'] =  $this->mediaFiles($configuration['pages']);

        return $configuration;
    }

    public function index()
    {
        return view('front-end.index', $this-> pageData());
    }

    public function mediaFiles($data)
    {
        $imgArray = [];
        $vidArray = [];

        $imgArray = ["image/jpeg","image/png"];
        $vidArray = ["video/mp4"];
        if(isset($data))
        {
            foreach($data as $mediaFiles)
            {
                foreach($mediaFiles['pages_connected_images'] as $mediaFile)
                {
                    $connectedMediaData[] = $mediaFile['resources_connected_images'];
                    $config['connectedMediaData'] = $connectedMediaData;
                    if(in_array($mediaFile['resources_connected_images']['mime_type'], $imgArray))
                    {
                        $config['image'][] = $mediaFile['resources_connected_images']['path'];
                    }
                    if(in_array($mediaFile['resources_connected_images']['mime_type'],$vidArray))
                    {
                        $config['video'][] = $mediaFile['resources_connected_images']['path'];
                    }
                }
            }
        }
        return $config;
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
        $experienceId['id'] = $id;
        return view('front-end.experience', $this-> pageData(), $experienceId);
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
