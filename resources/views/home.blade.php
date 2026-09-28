@extends('layouts.app')

@section('content')
    <section id="beranda" class="relative overflow-hidden bg-[#F1F4F5] px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2 lg:gap-16">
            <div class="max-w-2xl">
                {{-- <span class="eyebrow">Mitra HR Indonesia</span> --}}
                <h1 class="cp-hero-title mt-6">Developing People <span>&amp; Business</span></h1>
                <p class="mt-6 max-w-xl text-base leading-7 text-[#002550]/65 sm:text-lg">Mendukung organisasi dalam menjaga
                    keberlangsungan bisnis, meningkatkan kinerja, dan membangun kapabilitas SDM yang berkelanjutan.</p>
                <div class="mt-8 flex flex-wrap items-center gap-3"><a href="#layanan" class="cp-hero-button">Mulai sekarang
                        <span>→</span></a><a href="#tentang" class="cp-hero-secondary">Pelajari lebih lanjut</a></div>
                <div
                    class="mt-10 grid grid-cols-2 gap-x-6 gap-y-5 border-t border-[#002550]/10 pt-6 sm:flex sm:flex-wrap sm:gap-8">
                    <div><strong class="font-display text-2xl">10<span class="text-[#f41e0e]">+</span></strong><small
                            class="mt-1 block text-[10px] font-extrabold uppercase tracking-[.16em] text-[#002550]/45">Tahun
                            pengalaman</small></div>
                    <div><strong class="font-display text-2xl">14K<span class="text-[#009b4c]">+</span></strong><small
                            class="mt-1 block text-[10px] font-extrabold uppercase tracking-[.16em] text-[#002550]/45">Total
                            peserta</small></div>
                    <div><strong class="font-display text-2xl">—</strong><small
                            class="mt-1 block text-[10px] font-extrabold uppercase tracking-[.16em] text-[#002550]/45">Total
                            konsultasi</small></div>
                    <div><strong class="font-display text-2xl">—</strong><small
                            class="mt-1 block text-[10px] font-extrabold uppercase tracking-[.16em] text-[#002550]/45">Total
                            sertifikasi</small></div>
                </div>
            </div>
            <div class="relative">
                <div
                    class="absolute -left-5 top-8 z-10 hidden rounded-2xl bg-[#f41e0e] px-4 py-3 text-white shadow-[5px_5px_0_#002550] sm:block">
                    <small
                        class="block text-[9px] font-extrabold uppercase tracking-[.2em] text-white/65">Since</small><strong
                        class="font-display text-2xl">2010</strong>
                </div>
                <div class="cp-flyer-slider" role="region" aria-label="Flyer CiptaProgresa">
                    <div class="absolute inset-0"><img class="js-flyer-slide slide-image is-active"
                            data-caption="Training & Consulting" src="{{ asset('assets/heroo.png') }}"
                            alt="Flyer CiptaProgresa Training and Consulting"><img class="js-flyer-slide slide-image"
                            data-caption="Sertifikasi resmi dan instruktur ahli"
                            src="{{ asset('assets/flyer-sertifikasi.jpg') }}" alt="Flyer sertifikasi CiptaProgresa"><img
                            class="js-flyer-slide slide-image" data-caption="Program pelatihan terbaru"
                            src="{{ asset('assets/flyer-pelatihan.jpg') }}" alt="Flyer pelatihan CiptaProgresa"></div>
                    <div class="slider-controls"><span class="slider-caption js-slide-caption">Training &
                            Consulting</span><span class="js-slide-count text-[10px] font-extrabold text-white/70">01 /
                            03</span><button type="button" class="slider-button js-slide-prev"
                            aria-label="Slide sebelumnya">←</button><button type="button"
                            class="slider-button next js-slide-next" aria-label="Slide berikutnya">→</button></div>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee-wrap">
        <div class="marquee">
            @foreach (['LEADERSHIP', 'TEAM EFFECTIVENESS', 'LEARNING CULTURE', 'STRATEGIC THINKING', 'PEOPLE & ORGANIZATION', 'LEADERSHIP', 'TEAM EFFECTIVENESS'] as $item)
                <span class="marquee-item">{{ $item }}</span>
            @endforeach
        </div>
    </div>

    <section id="tentang" class="section home-positioning-section">
        <div class="section-inner">
            <div class="section-intro">
                <div>
                    <p class="section-kicker">Tentang kami</p>
                    <h2 class="section-title">Progress+ by Cipta <span>Progresa</span></h2>
                </div>
                <div>
                    <p class="lead"> <img src="{{ asset('assets/images/progress-logo.png') }}"
                            class="home-positioning-logo" alt="Progress+ by Cipta Progresa"> hadir sebagai mitra strategis
                        untuk perusahan-perusahaan di Indonesia dalam pengembangan SDM dan Bisnis secara terintegrasi.</p>
                    <p class="body-copy">Kami membantu organisasi memahami kebutuhan, mengembangkan people, memperkuat
                        sistem dan operasional, hingga membangun bisnis yang lebih siap bertumbuh.</p>
                </div>
            </div>
            <div class="positioning-panel justify-center">
                {{-- <div class="positioning-label">Brand Positioning</div> --}}
                <div class="positioning-copy">People &amp; Business Development Partner</div>
            </div>

            <div id="galeri" class="gallery">
                @foreach (['1524178232363-1fb2b075b655', '1556761175-4b46a572b786', '1542744173-8e7e53415bb0'] as $image)
                    <div class="gallery-card"><img
                            src="https://images.unsplash.com/photo-{{ $image }}?auto=format&fit=crop&w=900&q=85"
                            alt="CiptaProgresa learning experience" class="gallery-image"><span
                            class="gallery-label">Learning experience</span></div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="layanan" class="section section--navy">
        <div class="section-inner">
            <p class="section-kicker">Bagaimana kami membantu</p>
            <h2 class="section-title">Bagaimana Kami Membantu <span>Bisnis Anda</span></h2>
            <div class="service-grid">
                @foreach ([['Protect the Business', 'Perkuat operasional, kelola risiko, tingkatkan kepatuhan, dan bangun ketahanan organisasi.', '⌕', url('/clinic')], ['Improve the Business', 'Optimalkan proses, manfaatkan teknologi dan data, serta tingkatkan efektivitas dan kinerja bisnis.', '✦', url('/training')], ['Develop the People', 'Bangun kompetensi, tingkatkan kinerja, dan kembangkan kapabilitas SDM yang selaras dengan strategi bisnis.', '◎', url('/') . '#tentang']] as $service)
                    <a href="{{ $service[3] }}" class="service-card"><span class="service-icon">{{ $service[2] }}</span>
                        <div class="service-content">
                            <h3 class="service-title">{{ $service[0] }}</h3>
                            <p class="service-text">{{ $service[1] }}</p><span class="service-link">Pelajari selengkapnya
                                ↗</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section id="industri" class="section section--mist">
        <div class="section-inner">
            <div class="section-intro">
                <div>
                    <p class="section-kicker">Perspektif industri</p>
                    <h2 class="section-title">Jelajahi Berdasarkan <span>Industri</span></h2>
                </div>
                <div>
                    <p class="lead">Temukan pendekatan dan solusi yang relevan dengan tantangan serta kebutuhan bisnis di
                        industri Anda.</p><a href="{{ url('/industri') }}" class="cp-hero-button mt-6">Lihat area
                        industri <span>↗</span></a>
                </div>
            </div>
        </div>
    </section>

    <section id="training-highlight" class="section section--mist">
        <div class="section-inner">
            <div class="section-intro">
                <div>
                    <p class="section-kicker">Training yang sedang tren</p>
                    <h2 class="section-title">Belajar yang relevan untuk <span>langkah berikutnya</span></h2>
                </div>
                <div>
                    <p class="lead">Pilih program training yang sedang menjadi perhatian banyak organisasi dan kembangkan
                        kompetensi yang berdampak langsung pada pekerjaan</p><a href="{{ url('/training') }}"
                        class="cp-hero-button mt-6">Lihat semua training <span>↗</span></a>
                </div>
            </div>
            <div class="home-training-highlight-grid">
                @foreach (collect($trainings)->take(3) as $slug => $training)
                    <a href="{{ url('/training/' . $slug) }}" class="home-training-highlight-card">
                        <div class="home-training-highlight-top"><span>{{ $training['category_group'] }}</span><b>Training
                                populer</b></div>
                        <h3>{{ $training['title'] }}</h3>
                        <p>{{ $training['description'] }}</p>
                        <div class="home-training-highlight-meta">
                            <span>{{ $training['method'] }}</span><span>{{ $training['venue'] }}</span>
                        </div><span class="home-training-highlight-link">Lihat detail training <b>↗</b></span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section id="karier" class="section">
        <div class="section-inner">
            <p class="section-kicker">Kenapa Cipta Progresa</p>
            <h2 class="section-title">Kami percaya pengalaman belajar yang baik dimulai dari <span>rasa ingin tahu</span>
            </h2>
        </div>
    </section>

    <section id="insight" class="section section--mist">
        <div class="section-inner">
            <p class="section-kicker">Artikel & Insight</p>
            <h2 class="section-title">Perspektif untuk <span>melangkah</span></h2>
            <div class="blog-grid">
                @foreach ([['1521737711867-e3b97375f902', 'Pemimpin yang relevan tidak berhenti di ruang rapat'], ['1556761175-b413da4baf72', 'Lima cara membuat learning culture terasa hidup'], ['1552664730-d307ca884978', 'Mengubah percakapan sulit menjadi peluang bertumbuh']] as $post)
                    <a href="{{ url('/blog') }}" class="blog-card">
                        <div class="blog-image-wrap"><img
                                src="https://images.unsplash.com/photo-{{ $post[0] }}?auto=format&fit=crop&w=900&q=85"
                                alt="" class="blog-image"></div>
                        <div class="blog-copy">
                            <p class="blog-date">18 Sep 2026</p>
                            <h3 class="blog-title">{{ $post[1] }}</h3><span class="blog-link">Baca selengkapnya
                                ↗</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
