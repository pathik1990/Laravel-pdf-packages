<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                    <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                    <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                    <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
            <img src="{{ asset('vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>

                @if (Auth::user()->role == 'developer')
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Projects</div>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-bar-chart"></span><span class="mtext">Console</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('api-keys') }}" class="dropdown-toggle no-arrow {{ Route::is('api-keys') ? 'active' : '' }}">
                            <span class="micon dw dw-key"></span><span class="mtext">API Keys</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Profile</div>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('profile') }}" class="dropdown-toggle no-arrow {{ Route::is('profile') ? 'active' : '' }}">
                            <span class="micon dw dw-user3"></span><span class="mtext">My Account</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-lock"></span><span class="mtext">Security</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Billing</div>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('business-details') }}" class="dropdown-toggle no-arrow {{ Route::is('business-details') ? 'active' : '' }}">
                            <span class="micon dw dw-suitcase"></span><span class="mtext">Business Details</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('plans') }}" class="dropdown-toggle no-arrow {{ Route::is('plans') ? 'active' : '' }}">
                            <span class="micon dw dw-package"></span><span class="mtext">Plan & Packages</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('orders') }}" class="dropdown-toggle no-arrow {{ Route::is('orders') ? 'active' : '' }}">
                            <span class="micon icon-copy dw dw-browser2"></span><span class="mtext">Orders</span>
                        </a>
                    </li>

                @endif
                @if (Auth::user()->role == 'admin')

                    <!-- Manage users -->
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Manage Users</div>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-user-3"></span><span class="mtext">Users</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('all-users') }}" class="{{ Route::is('all-users') ? 'active' : '' }}">All Users</a></li>
                            <li><a href="{{ route('all-business-details') }}" class="{{ Route::is('all-business-details') ? 'active' : '' }}">Business Details</a></li>
                        </ul>
                    </li>

                    <!-- Manage billing -->
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Manage Billing</div>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon icon-copy dw dw-browser2"></span><span class="mtext">Orders</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('all-orders') }}" class="{{ Route::is('all-orders') ? 'active' : '' }}">All Orders</a></li>
                            <li><a href="{{ route('all-plans-packages') }}" class="{{ Route::is('all-plans-packages') ? 'active' : '' }}">All Plans / Packages</a></li>
                        </ul>
                    </li>


                    <!-- Extra options -->
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Extra</div>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-settings2"></span><span class="mtext">Settings</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('paypal-details') }}" class="{{ Route::is('paypal-details') ? 'active' : '' }}">PayPal Details</a></li>
                        </ul>
                    </li>
                @endif
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Support</div>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-book"></span><span class="mtext">Documentation</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-chat-1"></span><span class="mtext">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>