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
    public function index()
    {
        $configuration['menu'] = VRMenusTranslations::where('languages_id', app()->getLocale())->get()->toArray();
        $configuration['pages'] = VRPages::with('resourceImage','pagesConnectedImages', 'translations')->get()->toArray();
//        $configuration['experiences'] = VRPages::get()->toArray();


            foreach($configuration['pages'] as $pages)
            {
                foreach($pages['pages_connected_images'] as $mediaFile)
                {
                    $connectedMediaData[] = $mediaFile['resources_connected_images'];
                    $configuration['connectedMediaData'] = $connectedMediaData;
                    if($mediaFile['resources_connected_images']['mime_type'] == "image/jpeg" || "image/png")
                    {
                        $configuration['image'][] = $mediaFile['resources_connected_images']['path'];
                    }
                    if($mediaFile['resources_connected_images']['mime_type'] == "video/mp4")
                    {
                        $configuration['video'][] = $mediaFile['resources_connected_images']['path'];
                    }
                }
            }





        return view('front-end.index', $configuration);
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
                    $connectedMediaData[] = $mediaFile['resources_connected_images'];
                    $config['connectedMediaData'] = $connectedMediaData;
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
