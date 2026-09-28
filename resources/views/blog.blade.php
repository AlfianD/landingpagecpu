@extends('layouts.app')

@section('content')
    <section class="blog-hero">
        <div class="section-inner">
            <div class="blog-hero-grid">
                <div>
                    <p class="section-kicker section-kicker--light">Wawasan & artikel</p>
                    <h1 class="blog-page-title">Ruang untuk <span>berpikir</span></h1>
                    <p class="blog-page-lead">Temukan informasi terkini dan artikel menarik dari dunia teknologi, bisnis, K3,
                        SDM, dan pengembangan organisasi</p>
                </div>
                <div class="blog-hero-note"><span>Insight</span><strong>Ideas that<br>move people</strong><small>Catatan
                        dari ruang pikir CiptaProgresa</small></div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="section-inner">
            <div class="blog-featured">
                <div class="blog-featured-image"><img
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=85"
                        alt="Tim berdiskusi tentang strategi organisasi"></div>
                <div class="blog-featured-copy"><span class="blog-category">FEATURED · ORGANIZATION</span>
                    <p class="blog-card-date">11 September 2026 · 1 minggu yang lalu</p>
                    <h2>Bingung berapa Damkar D, C, B, A yang perusahaan Anda butuhkan?</h2>
                    <p>Kenali klasifikasi risiko kebakaran dan cara menghitungnya lewat tabel dan contoh nyata untuk
                        kebutuhan perusahaan Anda.</p><a href="{{ url('/blog/damkar-d-c-b-a') }}"
                        class="blog-read-link">Baca selengkapnya <span>↗</span></a>
                </div>
            </div>
        </div>
    </section>

    <section id="artikel" class="blog-section blog-section--mist">
        <div class="section-inner">
            <div class="blog-list-header">
                <div>
                    <p class="profile-overline">Artikel terbaru</p>
                    <h2 class="blog-section-title">Pilih topik yang ingin <span>Anda jelajahi.</span></h2>
                </div>
                <div class="blog-filters" role="group" aria-label="Filter artikel"><button type="button"
                        class="blog-filter is-active" data-filter="all">Semua</button><button type="button"
                        class="blog-filter" data-filter="k3">K3 & Sertifikasi</button><button type="button"
                        class="blog-filter" data-filter="bisnis">Bisnis</button></div>
            </div>
            <div class="blog-article-grid">
                <article class="blog-article-card" data-category="k3"><a href="{{ url('/blog/damkar-d-c-b-a') }}">
                        <div class="blog-article-image"><img
                                src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=85"
                                alt="Keselamatan kerja dan klasifikasi kebakaran"></div>
                        <div class="blog-article-copy"><span class="blog-category">K3 & SERTIFIKASI</span>
                            <p class="blog-card-date">11 September 2026</p>
                            <h3>Damkar A bukan cuma sertifikat pelatihan, ada surat penunjukan resmi dari Kemnaker.</h3>
                            <p>Kenali syarat, materi, dan siapa yang cocok mengisi peran ini.</p><span
                                class="blog-read-more">Baca selengkapnya ↗</span>
                        </div>
                    </a></article>
                <article class="blog-article-card" data-category="k3"><a
                        href="{{ url('/blog/damkar-a-surat-penunjukan') }}">
                        <div class="blog-article-image"><img
                                src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=900&q=85"
                                alt="Pelatihan keselamatan dan pemadam kebakaran"></div>
                        <div class="blog-article-copy"><span class="blog-category">K3 & SERTIFIKASI</span>
                            <p class="blog-card-date">07 September 2026</p>
                            <h3>Damkar B bukan cuma “atasan” D dan C.</h3>
                            <p>Kenali peran koordinator unit penanggulangan kebakaran dan siapa kandidat yang tepat.</p>
                            <span class="blog-read-more">Baca selengkapnya ↗</span>
                        </div>
                    </a></article>
                <article class="blog-article-card" data-category="k3"><a
                        href="{{ url('/blog/damkar-b-koordinator-unit') }}">
                        <div class="blog-article-image"><img
                                src="https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&w=900&q=85"
                                alt="Pekerja menggunakan perlengkapan keselamatan"></div>
                        <div class="blog-article-copy"><span class="blog-category">K3 & SERTIFIKASI</span>
                            <p class="blog-card-date">07 September 2026</p>
                            <h3>Damkar C tidak wajib untuk semua perusahaan.</h3>
                            <p>Kenali ambang jumlah pekerja dan klasifikasi risiko yang mewajibkannya.</p><span
                                class="blog-read-more">Baca selengkapnya ↗</span>
                        </div>
                    </a></article>
                <article class="blog-article-card" data-category="bisnis"><a
                        href="{{ url('/blog/damkar-c-klasifikasi-risiko') }}">
                        <div class="blog-article-image"><img
                                src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85"
                                alt="Tim membahas perilaku konsumen dan strategi bisnis"></div>
                        <div class="blog-article-copy"><span class="blog-category">BISNIS & STRATEGI</span>
                            <p class="blog-card-date">04 September 2026</p>
                            <h3>Mengapa AQUA identik dengan air minum dan Indomie begitu mudah muncul ketika ingin makan mi
                                instan?</h3>
                            <p>Pelajari insight dari buku The Power of Instinct tentang perilaku konsumen dan strategi
                                bisnis.</p><span class="blog-read-more">Baca selengkapnya ↗</span>
                        </div>
                    </a></article>
                <article class="blog-article-card" data-category="k3"><a
                        href="{{ url('/blog/power-of-instinct-branding') }}">
                        <div class="blog-article-image"><img
                                src="https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?auto=format&fit=crop&w=900&q=85"
                                alt="Operator menggunakan perlengkapan kerja"></div>
                        <div class="blog-article-copy"><span class="blog-category">K3 & SERTIFIKASI</span>
                            <p class="blog-card-date">20 August 2026</p>
                            <h3>Damkar D bukan cuma untuk satpam.</h3>
                            <p>Kenali siapa yang cocok mengikuti sertifikasi ini, apa yang dipelajari, dan manfaatnya bagi
                                perusahaan.</p><span class="blog-read-more">Baca selengkapnya ↗</span>
                        </div>
                    </a></article>
                <article class="blog-article-card" data-category="bisnis"><a
                        href="{{ url('/blog/damkar-d-bukan-cuma-satpam') }}">
                        <div class="blog-article-image"><img
                                src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=900&q=85"
                                alt="Kolaborasi tim dan pengembangan bisnis"></div>
                        <div class="blog-article-copy"><span class="blog-category">PEOPLE & ORGANIZATION</span>
                            <p class="blog-card-date">14 August 2026</p>
                            <h3>Learning culture dimulai dari percakapan yang berani.</h3>
                            <p>Bagaimana organisasi dapat membangun kebiasaan belajar yang relevan dan berkelanjutan.</p>
                            <span class="blog-read-more">Baca selengkapnya ↗</span>
                        </div>
                    </a></article>
            </div>
        </div>
    </section>

    <section class="blog-cta">
        <div class="section-inner">
            <div class="blog-cta-box">
                <div>
                    <p class="profile-overline">Belajar bersama kami</p>
                    <h2>Siap mengubah insight menjadi langkah berikutnya?</h2>
                </div><a href="{{ url('/jadwal-pelatihan') }}" class="cp-hero-button">Lihat jadwal pelatihan
                    <span>→</span></a>
            </div>
        </div>
    </section>
@endsection
