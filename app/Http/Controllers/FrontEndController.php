<?php

namespace App\Http\Controllers;

use App\Models\VRLanguages;
use App\Models\VRMenusTranslations;
use App\Models\VRPages;
use App\Models\VRPagesTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param $url
     * @internal param $lang
     * @internal param $lang
     */

    public function change(Request $request)
    {
        $data = $request->toArray();
        $langArray = ['en','lt'];

        $array = ( explode( '/', $data['url']) );

        if(in_array('en' || 'lt', $array))
        {   $getLanguegeValue = array_intersect($langArray, $array);
//            dd($getLanguegeValue);
            $key = array_search($getLanguegeValue['1'], $array);

            $array[$key] = $data['lang'];
        }
        $newUrl = implode('/', $array);

        app()->setLocale($data['lang']);
//        dd(app()->getLocale());
//    dd($newUrl);
       return redirect($newUrl);
    }


    public function pageData()
    {

        $configuration['menu'] = VRMenusTranslations::where('languages_id', app()->getLocale())->get()->toArray();
        $configuration['pagesLang'] = VRPagesTranslations::where('languages_id', app()->getLocale())->get()->toArray();
        $configuration['pages'] = VRPages::with('resourceImage','pagesConnectedImages', 'translations')->where('deleted_at','=', null)->get()->toArray();
        $configuration['aboutMedia'] =  $this->mediaFiles($configuration['pages']);
        $configuration['locale'] = app()->getLocale();


        return $configuration;
    }

    public function rooms()
    {
        $configuration = $this->pageData();

        foreach ($configuration['pages'] as $page)
        {
            if($page['pages_categories_id'] == "vr_categories_id")
            {
                $configuration['rooms'][] = $page;
                //$rooms - provides room pages and their translation data
            }
        }
        foreach($configuration['pagesLang'] as $pagesLanguages)
        {
            $configuration['pagesLanguages'][] = $pagesLanguages;
        }

//dd($pagesLangueges);

        return $configuration;
    }

    public function index()
    {
        return view('front-end.index', $this-> pageData(),$this->rooms());
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
     * @param $language
     * @param $slug
     * @return \Illuminate\Http\Response
     * @internal param $language
     * @internal param int $slug
     */
    public function show($language, $slug)
    {
        $experienceId['slug'] = $slug;
        return view('front-end.experience', $this->rooms(),  $experienceId, $this-> pageData());
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
