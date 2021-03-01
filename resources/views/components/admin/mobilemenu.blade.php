<div>
  <div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w">
      <a class="mm-logo" href="{{route('productIndex',app()->getLocale())}}"><img src="/adm/img/logo.png"><span>Clean Lab</span></a>
      <div class="mm-buttons">
        <div class="content-panel-open">
          <div class="os-icon os-icon-grid-circles"></div>
        </div>
        <div class="mobile-menu-trigger">
          <div class="os-icon os-icon-hamburger-menu-1"></div>
        </div>
      </div>
    </div>
    <div class="menu-and-user">
      <div class="logged-user-w">
        <div class="avatar-w">
          <img alt="" src="/no-avatar.png">
        </div>
        <div class="logged-user-info-w">
          <div class="logged-user-name">
            Administrator
          </div>
          <div class="logged-user-role">
            Administrator
          </div>
        </div>
      </div>
      <!--------------------
      START - Mobile Menu List
      -------------------->
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
          <a href="/{{app()->getLocale()}}/admin/languages" >
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
      <!--------------------
      END - Mobile Menu List
      -------------------->
    </div>
  </div>
</div>
