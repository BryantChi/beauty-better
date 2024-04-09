<?php

namespace App\Http\Controllers;

use App\Models\Admin\AboutUsInfo;
use App\Repositories\Admin\PageSettingInfoRepository;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $pageInfo = PageSettingInfoRepository::getSubBanner('/about');
        $aboutInfo = AboutUsInfo::first();
        // dd($aboutInfo);
        return view('about')
            ->with('aboutInfo', $aboutInfo)
            ->with('pageSettings', $pageInfo);
    }
}
