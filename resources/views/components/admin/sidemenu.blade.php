<div>
    <div style="position: relative; height:100%"
         class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link"
         style="height: 100%">
        <div class="logo-w">
            <a class="logo" href="{{route('productIndex',app()->getLocale())}}">
                <div class="logo-element"></div>
                <div class="logo-label">
                    Clean Lab
                </div>
            </a>
        </div>

        <div class="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text">
        </div>
        <h1 class="menu-page-header">
            Page Header
        </h1>
        <ul class="main-menu">

            <li class="">
                <a href="{{route('productIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.services')}}</span></a>
            </li>
            <li class="">
                <a href="{{route('localizationIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.localizations')}}</span></a>
            </li>

            <li>
                <a href="/{{app()->getLocale()}}/admin/languages">
                    <div class="icon-w">
                        <div class="os-icon os-icon-flag"></div>
                    </div>
                    <span>@lang('admin.language')</span></a>

            </li>
            <li class="">
                <a href="{{route('pageIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.pages')}}</span></a>
            </li>
            <li class="">
                <a href="{{route('settingIndex',app()->getLocale() )}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>{{__('admin.settings')}}</span></a>
            </li>


        </ul>
    </div>
</div>
