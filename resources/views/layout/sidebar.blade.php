        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/Logo.webp" width="150px" height="150px"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                        src="assets/Logo.webp" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="corona/template/assets/images/faces/face15.jpg"
                                    alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">User</h5>
                                <span>Admin</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
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
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                {{-- <li class="nav-item menu-items">
                    <a class="nav-link" href="index.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li> --}}
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Product</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu ">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('preorder') }}">Live Product</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{ route('addproduct') }}">Add Product</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#pre-order" aria-expanded="false"
                        aria-controls="pre-order">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Pre-Order</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="pre-order">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('daftarproduk')}}">Daftar Produk</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{route('waktuproduk')}}">Waktu Pre-Order</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#pesanan" aria-expanded="false"
                        aria-controls="pesanan">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Pesanan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="pesanan">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item my-2 d-flex justify-content-between"> <a class="nav-link" href="pages/ui-features/buttons.html">Perlu DIkirim</a><span class="badge bg-info text-dark">100</span>
                            </li>
                            <li class="nav-item my-2 d-flex justify-content-between"> <a class="nav-link"
                                    href="pages/ui-features/dropdowns.html">Disiapkan</a><span class="badge bg-info text-dark">100</span></li>
                            <li class="nav-item my-2 d-flex justify-content-between"> <a class="nav-link"
                                    href="pages/ui-features/dropdowns.html">Selesai</a><span class="badge bg-info text-dark">100</span></li>
                            <li class="nav-item my-2 d-flex justify-content-between"> <a class="nav-link"
                                    href="pages/ui-features/dropdowns.html">Dikirim</a><span class="badge bg-info text-dark">100</span></li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#Lainnya" aria-expanded="false"
                        aria-controls="Lainnya">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Lainnya</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="Lainnya">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('daftarproduk')}}">Data Pelanggan</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{route('waktuproduk')}}">Banner Website</a></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
