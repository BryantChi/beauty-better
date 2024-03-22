
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




