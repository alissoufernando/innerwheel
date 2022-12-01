<!--sidebar wrapper -->
<div wire:ignore class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/site/assets/img/logo1.jpg') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h5 class="logo-text">INNERWHEEL</h5>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu" wire:ignore>
        <li>
            <a href="{{ route('dashboard') }}" class="{{ Route::currentRouteName()== 'dashboard' ? 'active' : '' }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admininscription') }}" class="{{ Route::currentRouteName()== 'admininscription' ? 'active' : '' }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Inscriptions</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.paiement-index') }}" class="{{ Route::currentRouteName()== 'admin.paiement-index' ? 'active' : '' }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Liste des paiements</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.heberg-index') }}" class="{{ Route::currentRouteName()== 'admin.heberg-index' ? 'active' : '' }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Hébergements</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.activite-index') }}" class="{{ Route::currentRouteName()== 'admin.activite-index' ? 'active' : '' }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Activités</div>
            </a>
        </li>
        <li class="{{request()->route()->getPrefix() == '/administration' ? 'active' : '' }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-folder'></i>
                </div>
                <div class="menu-title">Administration</div>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="{{route('admin.user-index')}}" class="{{ Route::currentRouteName()== 'admin.user-index' ? 'active' : '' }}"><i class="bx bx-right-arrow-alt"></i>Utilisateurs</a></li>
              <li><a href="{{route('admin.role-index')}}" class="{{ Route::currentRouteName()== 'admin.role-index' ? 'active' : '' }}"><i class="bx bx-right-arrow-alt"></i>Rôles</a></li>


            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
