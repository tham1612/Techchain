<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('theme/admin/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('theme/admin/assets/images/logo-dark.png')}}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('theme/admin/assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('theme/admin/assets/images/logo-light.png')}}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashbroad')}}">
                        <span data-key="t-dashboards">Dashboards</span>
                    </a>

                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Danh muc san pham</span> <span
                            class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{route('admin.catelogues.create')}}" target="_blank" class="nav-link"
                                   data-key="t-detached">Them moi</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.catelogues.index')}}" target="_blank" class="nav-link"
                                   data-key="t-two-column">Danh sach</a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Prodcuts" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="Prodcuts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts"> san pham</span> <span
                            class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Prodcuts">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{route('admin.products.create')}}" target="_blank" class="nav-link"
                                   data-key="t-detached">Them moi</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.products.index')}}" target="_blank" class="nav-link"
                                   data-key="t-two-column">Danh sach</a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                                    Password Reset
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                    Password Create
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen">
                                    Lock Screen
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message">
                                    Success Message
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover">
                                                Cover </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button"
                                   aria-expanded="false" aria-controls="sidebarTwoStep"
                                   data-key="t-two-step-verification"> Two Step Verification
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
