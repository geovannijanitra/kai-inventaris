<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i
                        data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        @auth
            <li class="dropdown"><a href="#" data-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                        src="{{ asset('theme') }}/assets/img/user.png" class="user-img-radious-style"> <span
                        class="d-sm-none d-lg-inline-block"></span></a>
                <div class="dropdown-menu dropdown-menu-right pullDown">
                    <div class="dropdown-title">Hello!, {{ auth()->user()->name }}</div>
                    <a data-toggle="modal" data-target="#password" href="javascript:void(0)" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i>
                        Ubah Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <form id="logout" action="/logout" method="post">
                        @csrf
                        <a href="javascript:;" class="dropdown-item has-icon text-danger" onclick="document.getElementById('logout').submit();"> <i class="fas fa-sign-out-alt"></i>
                    Logout
                  </a>
                        {{-- <button type="submit" href="#" class="dropdown-item has-icon text-danger"
                            style="background-color:white!important"> <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button> --}}
                    </form>
                </div>
            </li>
        @else
        @endauth
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"> <img alt="image" src="{{ asset('theme') }}/assets/img/logo.png" class="header-logo" />
                <span class="logo-name">Inventaris</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ request()->is('/') ? 'active' : '' }}">
                <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ request()->is('data') ? 'active' : '' }}">
                <a href="/data" class="nav-link"><i data-feather="mail"></i><span>Inventaris</span></a>
            </li>
            <li class="dropdown {{ request()->is('merk') ? 'active' : '' }}">
                <a href="/jenis" class="nav-link"><i data-feather="command"></i><span>Jenis & Merk</span></a>
            </li>
            {{-- <li class="dropdown  {{ request()->is('merk') ? 'active' : '' }}">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="command"></i><span>Jenis & Merk</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/jenis">Jenis</a></li>
                <li><a class="nav-link" href="/merk">Merk</a></li>
              </ul> --}}
            {{-- </li>
            <li class="dropdown {{ request()->is('merk') ? 'active' : '' }}">
              <a href="/merk" class="nav-link"><i data-feather="command"></i><span>Jenis & Merk</span></a>
            </li> --}}

            {{-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown "><i data-feather="mail"></i><span>Data</span></a>
              <ul class="dropdown">
                <li><a class="nav-link" href="/data">Data Inventaris</a></li>
                <li><a class="nav-link" href="/merk">Daftar Merk</a></li>
              </ul>
            </li> --}}
        </ul>
    </aside>
</div>
<div class="settingSidebar">
    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
            <div class="setting-panel-header">Setting Panel
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
                            checked>
                        <span class="selectgroup-button">Light</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                        <span class="selectgroup-button">Dark</span>
                    </label>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                    <label class="selectgroup-item">
                        <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                            checked>
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                    </label>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                    <ul class="choose-theme list-unstyled mb-0">
                        <li title="white" class="active">
                            <div class="white"></div>
                        </li>
                        <li title="cyan">
                            <div class="cyan"></div>
                        </li>
                        <li title="black">
                            <div class="black"></div>
                        </li>
                        <li title="purple">
                            <div class="purple"></div>
                        </li>
                        <li title="orange">
                            <div class="orange"></div>
                        </li>
                        <li title="green">
                            <div class="green"></div>
                        </li>
                        <li title="red">
                            <div class="red"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                    <label class="m-b-0">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="mini_sidebar_setting">
                        <span class="custom-switch-indicator"></span>
                        <span class="control-label p-l-10">Mini Sidebar</span>
                    </label>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                    <label class="m-b-0">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                            id="sticky_header_setting">
                        <span class="custom-switch-indicator"></span>
                        <span class="control-label p-l-10">Sticky Header</span>
                    </label>
                </div>
            </div>
            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                    <i class="fas fa-undo"></i> Restore Default
                </a>
            </div>
        </div>
    </div>
</div>
<div id="password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ubah Password</h4>
                {{-- <button type="button" class="close" onclick="$('#password').modal('hide');" aria-hidden="true">×</button> --}}
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">

                            <form data-parsley-validate method="POST" action="/change_password/{{ Auth::user()->id }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="password">Password baru</label>
                                    <i class="fa fa-eye" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();"> </i>
                                    <input id="myPassword" name="password" type="password" placeholder="Isi password baru" required class="form-control">
                                </div>


                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary btn-custom btn-rounded waves-effect waves-lightt"
                                        type="submit">
                                        Simpan
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<script>
    function mouseoverPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('myPassword');
  obj.type = "password";
}
</script>
