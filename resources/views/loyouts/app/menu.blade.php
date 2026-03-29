<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle">Laravel CMS</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Sayfalar
            </li>

            <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="layout"></i>
                    <span class="align-middle">Panel</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Profil</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('login') }}">
                    <i class="align-middle" data-feather="log-in"></i>
                    <span class="align-middle">Giriş Yap</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i>
                    <span class="align-middle">Kayıt Ol</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="camera"></i>
                    <span class="align-middle">Galeri</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="rss"></i>
                    <span class="align-middle">Blog ve Haberler</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="maximize-2"></i>
                    <span class="align-middle">Pop Up Yönetimi</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('users') }}">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">Kullanıcılar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="settings"></i>
                    <span class="align-middle">Ayarlar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="file-text"></i>
                    <span class="align-middle">Boş Sayfa</span>
                </a>
            </li>

            <li class="sidebar-header">
                Araçlar &amp; Bileşenler
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="mouse-pointer"></i>
                    <span class="align-middle">Butonlar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-forms.html">
                    <i class="align-middle" data-feather="clipboard"></i>
                    <span class="align-middle">Formlar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="grid"></i>
                    <span class="align-middle">Kartlar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-typography.html">
                    <i class="align-middle" data-feather="align-left"></i>
                    <span class="align-middle">Tipografi</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle" data-feather="coffee"></i>
                    <span class="align-middle">İkonlar</span>
                </a>
            </li>

            <li class="sidebar-header">
                Eklentiler &amp; Araçlar
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i>
                    <span class="align-middle">Grafikler</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i>
                    <span class="align-middle">Haritalar</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-cta">
        <div class="sidebar-cta-content">
            <strong class="d-inline-block mb-2">Pro sürüme yükselt</strong>
            <div class="mb-3 text-sm">
                Daha fazla bileşen mi arıyorsun? Premium sürüme göz at.
            </div>
            <div class="d-grid">
                <a href="upgrade-to-pro.html" class="btn btn-primary">Yükselt</a>
            </div>
        </div>
    </div>
</nav>
