<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
       class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <p>管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.pageSettingInfos.index') }}"
       class="nav-link {{ Request::is('admin/pageSettingInfos*') ? 'active' : '' }}">
        <p>頁面設定</p>
    </a>
</li>

<li class="nav-item">
    <?php
     $about = DB::table('about_us_infos')->get();
     if (count($about) == 0) {
        # code...
        $route_about = route('admin.aboutUsInfos.create');
     }else{
        $route_about = route('admin.aboutUsInfos.edit', 1);
     }
    ?>
    <a href="{{ $route_about }}"
       class="nav-link {{ Request::is('admin/aboutUsInfos*') ? 'active' : '' }}">
        <p>關於我們</p>
    </a>
</li>


<li class="nav-item {{ Auth::user()->id == 1 ? '' : 'd-none' }}">
    <a href="{{ route('admin.postTypeInfos.index') }}"
       class="nav-link {{ Request::is('admin/postTypeInfos*') ? 'active' : '' }}">
        <p>文章類型</p>
    </a>
</li>


