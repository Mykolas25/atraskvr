<?php

namespace App\Http\Controllers;

use App\Models\VRMenuTranslations;
use Illuminate\Http\Request;

class VRfrontEndController extends Controller
{
    public function menuIndex()
    {
        $config['menu'] = VRMenuTranslations::get()->toArray();
        return view('frontEnd.menu', $config);
    }
}
