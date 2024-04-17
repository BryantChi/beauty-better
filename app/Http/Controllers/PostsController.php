<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\PostsInfo as Posts;
use App\Models\Admin\PostTypeInfo;
use App\Repositories\Admin\PageSettingInfoRepository;

class PostsController extends Controller
{
    //

    public function blog($type = null)
    {
        if ($type == null) {
            $postsInfo = Posts::whereNotIn('post_type', [1])->paginate(10);
        } else {
            $postsInfo = Posts::where('post_type', $type)->paginate(10);
        }

        $pagesInfo = PageSettingInfoRepository::getSubBanner('/blog');

        $postType = PostTypeInfo::all();

        $typeInfo = array();
        foreach ($postType as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('posts_grid')
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postsInfo', $postsInfo);
    }

    public function blogShow($type, $slug)
    {
        $postInfo = Posts::where('post_type', $type)->where('post_slug', $slug)->firstOrFail();
        $pageInfo = PageSettingInfoRepository::getSubBanner('/blog');
        $pagesInfo = new \StdClass();
        $pagesInfo->title = $postInfo->post_title ?? '';
        $pagesInfo->seo_title = $postInfo->post_seo_title ?? '';
        $pagesInfo->meta_title = $postInfo->post_meta_title ?? '';
        $pagesInfo->meta_description = $postInfo->post_meta_description ?? '';
        $pagesInfo->meta_keywords = $postInfo->post_meta_keywords ?? '';
        $pagesInfo->header_anlytics_code = $pageInfo->header_anlytics_code ?? '';
        $pagesInfo->banner = $pageInfo->banner;
        $pagesInfo->banner_mob = $pageInfo->banner_mob;
        $pagesInfo->banner_alt = $pageInfo->banner_alt;
        $pagesInfo->banner_alt_mob = $pageInfo->banner_alt_mob;
        $pagesInfo->banner_link = $pageInfo->banner_link;
        $pagesInfo->banner_link_mob = $pageInfo->banner_link_mob;
        $pagesInfo->meta_google_site_verification = $pageInfo->meta_google_site_verification;

        $postType = PostTypeInfo::all();

        $typeInfo = array();
        foreach ($postType as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('posts_detail')
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postInfo', $postInfo);
    }


    public function case()
    {
        $postsInfo = Posts::where('post_type', 2)->paginate(10);
        $pagesInfo = PageSettingInfoRepository::getSubBanner('/case');

        $postType = PostTypeInfo::all();

        $typeInfo = array();
        foreach ($postType as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('case_grid')
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postsInfo', $postsInfo);
    }

    public function caseShow($slug)
    {
        $postInfo = Posts::where('post_type', 2)->where('post_slug', $slug)->firstOrFail();
        $pageInfo = PageSettingInfoRepository::getSubBanner('/blog');
        $pagesInfo = new \StdClass();
        $pagesInfo->title = $postInfo->post_title ?? '';
        $pagesInfo->seo_title = $postInfo->post_seo_title ?? '';
        $pagesInfo->meta_title = $postInfo->post_meta_title ?? '';
        $pagesInfo->meta_description = $postInfo->post_meta_description ?? '';
        $pagesInfo->meta_keywords = $postInfo->post_meta_keywords ?? '';
        $pagesInfo->header_anlytics_code = $pageInfo->header_anlytics_code ?? '';
        $pagesInfo->banner = $pageInfo->banner;
        $pagesInfo->banner_mob = $pageInfo->banner_mob;
        $pagesInfo->banner_alt = $pageInfo->banner_alt;
        $pagesInfo->banner_alt_mob = $pageInfo->banner_alt_mob;
        $pagesInfo->banner_link = $pageInfo->banner_link;
        $pagesInfo->banner_link_mob = $pageInfo->banner_link_mob;
        $pagesInfo->meta_google_site_verification = $pageInfo->meta_google_site_verification;

        $postType = PostTypeInfo::all();

        $typeInfo = array();
        foreach ($postType as $value) {
            $type = new \StdClass();
            $type->id = $value->id;
            $type->type = $value->type_name;
            $type->count = Posts::where('post_type', $value->id)->count();
            array_push($typeInfo, $type);
        }

        return view('case_detail')
            ->with('pageSettings', $pagesInfo)
            ->with('typeInfo', $typeInfo)
            ->with('postInfo', $postInfo);
    }
}
