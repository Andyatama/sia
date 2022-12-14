<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="" class="brand-link">
        <img src="" alt=""
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{!empty(Auth()->user()->name) ? Auth()->user()->name : ''}}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                @if(auth()->user()->role == 'admin')
                <li class="nav-header">Master</li>
                <li class="nav-item">
                    <a href="{{ route('guru.index') }}" class="nav-link {{ request()->is('guru*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kelas.index') }}" class="nav-link {{ request()->is('kelas*') ? 'active' : '' }}">
                        <i class="nav-icon fas far fa-place-of-worship"></i>
                        <p>
                            Kelas
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('mapel.index') }}" class="nav-link {{ request()->is('mapel*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-book"></i>
                        <p>
                            Mapel
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('siswa.index') }}" class="nav-link {{ request()->is('siswa*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-solid fa-user-graduate"></i>
                        <p>
                            Siswa
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>

    </div>

</aside>