@php
    $data_user=DB::table('users')->where('id',Auth::user()->id)->get()->first();
@endphp
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{route('home')}}"><img src="{{asset('assets')}}/admin/assets/images/logo.svg" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets')}}/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{asset('')}}storage/{{$data_user->image}}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal"> @php echo Auth::user()->name @endphp </h5>
                            <span>Admin</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item menu-items">
              <!--  <a class="nav-link" href="index.html"> -->
                <a href="{{route('home')}}" class="nav-link">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Home</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin_film')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Filmler</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Dizilerim</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a href="{{route('admin_category')}}" class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
                    <span class="menu-title">Kategoriler</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin_message')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
                    <span class="menu-title">İletişim Mesajları</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a  class="nav-link" href="{{route('admin_setting')}}"aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                    <span class="menu-title">Ayarlar</span>
                </a>
            </li>

        </ul>
    </nav>

