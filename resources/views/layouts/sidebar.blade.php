<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ asset('images/logo_bk.png') }}"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light navbar-brand">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
                <li class="nav-item {{ Auth::user()->id == 1 ? '' : 'd-none' }}">
                    <a href="{{ route('io_generator_builder') }}"
                        class="nav-link {{ Request::is('generator_builder*') ? 'active' : '' }}">
                        <p>IO Generator</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
