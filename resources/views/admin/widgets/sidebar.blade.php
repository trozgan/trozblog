<ul class="navbar-nav navbar-sidenav">
  <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="@lang('dashboard.dashboard')">
    <a class="nav-link {{ request()->route()->named('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
      <i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;
      <span class="nav-link-text">@lang('dashboard.dashboard')</span>
    </a>
  </li>
  <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="@lang('dashboard.users')">
    <a class="nav-link {{ request()->route()->named('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
      <i class="fa fa-users" aria-hidden="true"></i>&nbsp;
        <span class="nav-link-text">@lang('dashboard.users')</span>
    </a>
  </li>
</ul>

<ul class="navbar-nav sidenav-toggler">
  <li class="nav-item">
    <a class="nav-link text-center" id="sidenavToggler">
      <i class="fa fa-fw fa-angle-left"></i>
    </a>
  </li>
</ul>
