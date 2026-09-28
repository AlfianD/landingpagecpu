<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription ?? 'CiptaProgresa — Mitra HR Indonesia untuk pengembangan people dan bisnis.' }}">
    <title>{{ $title ?? 'CiptaProgresa — Mitra HR Indonesia' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v=20260928-consulting-hero-cta">
    <script>tailwind.config={theme:{extend:{fontFamily:{sans:['Manrope','sans-serif'],display:['Sora','sans-serif']}}}};</script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script defer src="{{ asset('assets/js/app.js') }}"></script>
    @stack('head')
</head>
<body>
<div>
<header class="site-header">
    <div class="navbar">
        <a href="{{ url('/') }}" class="brand"><img src="{{ asset('assets/images/progress-plus-logo.webp') }}" class="brand-logo" alt="Progress+ Training & Consulting"></a>
        <nav class="desktop-nav" aria-label="Navigasi utama">
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                <li class="nav-group"><button type="button" data-target="#trainingAboutDropdown" aria-expanded="false" aria-haspopup="true" class="nav-trigger js-dropdown-toggle"><span class="nav-trigger-label">Tentang Kami</span><span class="nav-chevron"></span></button>
                    <ul id="trainingAboutDropdown" class="dropdown js-dropdown">
                        <li><a href="{{ url('/profil') }}" class="dropdown-link"><span class="submenu-icon">◎</span>Profil</a></li>
                        <li><a href="{{ url('/galeri') }}" class="dropdown-link"><span class="submenu-icon submenu-icon--gallery">▦</span>Galeri</a></li>
                        <li><a href="{{ url('/kontak') }}" class="dropdown-link"><span class="submenu-icon">⌖</span>Kontak</a></li>
                    </ul>
                </li>
                <li class="nav-group"><button type="button" data-target="#trainingServiceDropdown" aria-expanded="false" aria-haspopup="true" class="nav-trigger js-dropdown-toggle"><span class="nav-trigger-label">Layanan</span><span class="nav-chevron"></span></button>
                    <ul id="trainingServiceDropdown" class="dropdown js-dropdown">
                        <li><a href="{{ url('/training') }}" class="dropdown-link"><span class="submenu-icon">▣</span>Training</a></li>
                        <li><a href="{{ url('/consulting') }}" class="dropdown-link"><span class="submenu-icon">↗</span>Consulting</a></li>
                        <li><a href="{{ url('/clinic') }}" class="dropdown-link"><span class="submenu-icon submenu-icon--clinic">✦</span>Clinic</a></li><li><a href="{{ url('/layanan-lainnya') }}" class="dropdown-link"><span class="submenu-icon">＋</span>Layanan Lainnya</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/free-course') }}" class="nav-link nav-free-course-link">Free-Course</a></li>
                <li><a href="{{ url('/jadwal-pelatihan') }}" class="nav-link nav-schedule-link"><span class="nav-calendar-icon" aria-hidden="true">▣</span><span>Jadwal Pelatihan</span></a></li>
                <li><a href="{{ url('/industri') }}" class="nav-link">Industri</a></li>
                <li class="nav-group"><button type="button" data-target="#trainingOtherDropdown" aria-expanded="false" aria-haspopup="true" class="nav-trigger js-dropdown-toggle"><span class="nav-trigger-label">Lainnya</span><span class="nav-chevron"></span></button>
                    <ul id="trainingOtherDropdown" class="dropdown js-dropdown">
                        <li><a href="{{ url('/event') }}" class="dropdown-link"><span class="submenu-icon">◷</span>Event</a></li>
                        <li><a href="{{ url('/karier') }}" class="dropdown-link"><span class="submenu-icon">↗</span>Karier</a></li>
                        <li><a href="{{ url('/blog') }}" class="dropdown-link"><span class="submenu-icon">✦</span>Artikel &amp; Insight</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <a href="https://progressplus.co.id/" target="_blank" rel="noopener" class="app-store-link" aria-label="Buka Progress+ di Google Play"><img src="{{ asset('assets/images/Google-Play-Logo.webp') }}" alt="Google Play" class="google-play-logo"><span>Progress+ App</span></a>
        <a href="{{ url('/kontak') }}" class="cta-button desktop-cta">Hubungi Kami <span>↗</span></a>
        <button type="button" class="mobile-toggle js-mobile-toggle" aria-label="Buka menu" aria-expanded="false"><span>☰</span></button>
    </div>
    <nav class="mobile-nav js-mobile-menu" aria-label="Navigasi mobile">
        <ul class="mobile-list">
            <li><a href="{{ url('/') }}" class="mobile-link">Beranda</a></li>
            <li><a href="{{ url('/profil') }}" class="mobile-link">Tentang Kami</a></li>
            <li><a href="{{ url('/training') }}" class="mobile-link">Training</a></li><li><a href="{{ url('/free-course') }}" class="mobile-link">Free-Course</a></li>
            <li><a href="{{ url('/consulting') }}" class="mobile-link">Consulting</a></li>
            <li><a href="{{ url('/clinic') }}" class="mobile-link">Clinic</a></li><li><a href="{{ url('/layanan-lainnya') }}" class="mobile-link">Layanan Lainnya</a></li>
            <li><a href="{{ url('/galeri') }}" class="mobile-link">Galeri</a></li>
            <li><a href="{{ url('/jadwal-pelatihan') }}" class="mobile-link nav-schedule-link"><span class="nav-calendar-icon" aria-hidden="true">▣</span><span>Jadwal Pelatihan</span></a></li><li><a href="{{ url('/industri') }}" class="mobile-link">Industri</a></li>
            <li class="mobile-section-label">Lainnya</li>
            <li><a href="{{ url('/event') }}" class="mobile-link mobile-link--nested">Event</a></li>
            <li><a href="{{ url('/karier') }}" class="mobile-link mobile-link--nested">Karier</a></li>
            <li><a href="{{ url('/blog') }}" class="mobile-link mobile-link--nested">Artikel &amp; Insight</a></li>
            <li><a href="{{ url('/kontak') }}" class="mobile-cta">Hubungi Kami ↗</a></li>
            <li><a href="https://progressplus.co.id/" target="_blank" rel="noopener" class="mobile-app-badge"><span>Download aplikasi</span><img src="{{ asset('assets/images/Google-Play-Logo.webp') }}" alt="Google Play"></a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer id="footer" class="site-footer">
    <div class="footer-inner">
        <div class="footer-grid">
            <div>
                <a href="{{ url('/') }}" class="brand brand--inverse">
                    <img src="{{ asset('assets/images/progress-plus-logo.webp') }}" class="brand-logo" alt="Progress+ Training & Consulting">
                </a>
                <p class="footer-copy">Membangun manusia, menumbuhkan organisasi, menciptakan progres yang berarti.</p>
            </div>
            <div class="footer-links">
                <div>
                    <p class="footer-heading">Navigasi</p>
                    <div class="footer-link-list">
                        <a href="{{ url('/profil') }}">Tentang Kami</a>
                        <a href="{{ url('/training') }}">Layanan</a>
                        <a href="{{ url('/event') }}">Event</a>
                        <a href="{{ url('/blog') }}">Artikel &amp; Insight</a>
                        <a href="{{ url('/kontak') }}">Kontak</a>
                        <a href="https://progressplus.co.id/" target="_blank" rel="noopener" class="footer-progress-link">Progress+ <span>↗</span></a>
                    </div>
                </div>
                <div>
                    <p class="footer-heading">Kontak</p>
                    <p class="footer-copy">hello@ciptaprogresa.id<br>Jakarta, Indonesia</p>
                    <a href="https://progressplus.co.id/" target="_blank" rel="noopener" class="footer-app-badge" aria-label="Buka Progress+ di Google Play">
                        <span>Download aplikasi</span>
                        <img src="{{ asset('assets/images/Google-Play-Logo.webp') }}" alt="Google Play">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">© {{ date('Y') }} CiptaProgresa. All rights reserved.</div>
    </div>
</footer>
</div>
@stack('scripts')
</body>
</html>
