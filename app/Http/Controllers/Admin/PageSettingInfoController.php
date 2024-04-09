<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePageSettingInfoRequest;
use App\Http\Requests\Admin\UpdatePageSettingInfoRequest;
use App\Repositories\Admin\PageSettingInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Flash;
use Illuminate\Support\Facades\File;
use Response;

class PageSettingInfoController extends AppBaseController
{
    /** @var PageSettingInfoRepository $pageSettingInfoRepository*/
    private $pageSettingInfoRepository;

    public function __construct(PageSettingInfoRepository $pageSettingInfoRepo)
    {
        $this->pageSettingInfoRepository = $pageSettingInfoRepo;
    }

    /**
     * Display a listing of the PageSettingInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pageSettingInfos = $this->pageSettingInfoRepository->paginate(10);

        return view('admin.page_setting_infos.index')
            ->with('pageSettingInfos', $pageSettingInfos);
    }

    /**
     * Show the form for creating a new PageSettingInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.page_setting_infos.create');
    }

    /**
     * Store a newly created PageSettingInfo in storage.
     *
     * @param CreatePageSettingInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePageSettingInfoRequest $request)
    {
        $input = $request->all();

        $image_banners = $request->file('banner');

        $banner = [];

        if ($image_banners) {
            foreach ($image_banners as $index => $image) {
                if ($image) {
                    $path = public_path('uploads/images/banner/');
                    $filename = time() . '_' . $index . '_' . $image->getClientOriginalName();
                    if (!file_exists($path)) {
                        mkdir($path, 0755, true);
                    }

                    // 壓縮圖片
                    $image_banner = Image::make($image)->orientate()->encode('jpg', 75);
                    // ->resize(function ($constraint) {
                    //     $constraint->aspectRatio();
                    //     $constraint->upsize();
                    // })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
                    $image_banner->save($path.$filename);

                    $banner[$index] = 'images/banner/' . $filename;
                } else {
                    $banner[$index] = '';
                }

                // 在這裡，您可以保存圖片資訊到資料庫，包括alt標籤、排序和點擊網址
            }
        }

        $input['banner'] = $banner;

        $pageSettingInfo = $this->pageSettingInfoRepository->create($input);

        Flash::success('Page Setting Info saved successfully.');

        return redirect(route('admin.pageSettingInfos.index'));
    }

    /**
     * Display the specified PageSettingInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        return view('admin.page_setting_infos.show')->with('pageSettingInfo', $pageSettingInfo);
    }

    /**
     * Show the form for editing the specified PageSettingInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        return view('admin.page_setting_infos.edit')->with('pageSettingInfo', $pageSettingInfo);
    }

    /**
     * Update the specified PageSettingInfo in storage.
     *
     * @param int $id
     * @param UpdatePageSettingInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePageSettingInfoRequest $request)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        $input = $request->all();

        $bc = $input['banner_input'];
        $image_banners = $request->file('banner');
        // dd(count($bc), count($pageSettingInfo['banner']));
        $banner = $pageSettingInfo['banner'];
        if ($image_banners) {
            foreach ($image_banners as $index => $image) {
                if ($image) {
                    $path = public_path('uploads/images/banner/');
                    $filename = time() . '_' . $index . '_' . $image->getClientOriginalName();
                    if (!file_exists($path)) {
                        mkdir($path, 0755, true);
                    }

                    if ($pageSettingInfo['banner'][$index] ?? null != null) {
                        // 若已存在，則覆蓋原有圖片
                        if (File::exists(public_path('uploads/' . $pageSettingInfo['banner'][$index]))) {
                            File::delete(public_path('uploads/' . $pageSettingInfo['banner'][$index]));
                        }
                    }

                    // 壓縮圖片
                    $image_banner = Image::make($image)->orientate()->encode('jpg', 75);
                    // ->resize(function ($constraint) {
                    //     $constraint->aspectRatio();
                    //     $constraint->upsize();
                    // })->encode('jpg', 75); // 設定 JPG 格式和 75% 品質
                    $image_banner->save($path.$filename);

                    $banner[$index] = 'images/banner/' . $filename;
                } else {
                    $banner[$index] = $pageSettingInfo['banner'][$index];
                }

                // 在這裡，您可以保存圖片資訊到資料庫，包括alt標籤、排序和點擊網址
            }

        } else {
            $banner = $pageSettingInfo['banner'];
        }

        // 刪除多餘的圖片
        if (count($banner) > count($bc)) {
            $tempBanner = $banner;
            foreach ($tempBanner as $i => $image) {
                if (!in_array($image, $bc)) {
                    if ($image != null) {
                        if (File::exists(public_path('uploads/' . $image))) {
                            File::delete(public_path('uploads/' . $image));
                        }
                    }
                    array_splice($banner, array_search($image, $banner), 1);
                }
            }
        }

        $input['banner'] = $banner;

        $pageSettingInfo = $this->pageSettingInfoRepository->update($input, $id);

        Flash::success('Page Setting Info updated successfully.');

        return redirect(route('admin.pageSettingInfos.index'));
    }

    /**
     * Remove the specified PageSettingInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pageSettingInfo = $this->pageSettingInfoRepository->find($id);

        if (empty($pageSettingInfo)) {
            Flash::error('Page Setting Info not found');

            return redirect(route('admin.pageSettingInfos.index'));
        }

        $this->pageSettingInfoRepository->delete($id);

        Flash::success('Page Setting Info deleted successfully.');

        return redirect(route('admin.pageSettingInfos.index'));
    }
}
