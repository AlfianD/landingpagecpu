@extends('layouts.app')

@section('content')
    <section class="about-hero">
        <div class="section-inner">
            <div class="about-hero-grid">
                <div class="about-hero-copy">
                    <p class="section-kicker section-kicker--light">Tentang Kami</p>
                    <h1 class="about-title">Membangun Sumber Daya Manusia<br><span>Menumbuhkan bisnis</span></h1>
                    <p class="about-hero-text">Cipta Progresa Training & Consulting dengan brand Progress+ adalah perusahaan
                        yang bergerak di bidang jasa pelatihan dan konsultasi, yang berfokus pada pengembangan sumber daya
                        manusia dan bisnis</p>
                    <div class="about-hero-meta"><span><strong>2010</strong><small>Tahun
                                berdiri</small></span><span><strong>Progress+</strong><small>Our brand</small></span></div>
                </div>
                <div class="about-hero-art">
                    <div class="about-art-frame"><img src="{{ asset('assets/heroo.png') }}"
                            alt="CiptaProgresa training and consulting">
                        <div class="about-art-caption"><span class="about-art-dot"></span><span>Training & Consulting</span>
                        </div>
                    </div>
                    <div class="about-art-sticker">People<br><span>first</span></div>
                </div>
            </div>
        </div>
    </section>

    <section id="profil-perusahaan" class="about-section">
        <div class="section-inner">
            <div class="about-section-head">
                <div>
                    <p class="profile-overline">01 / Profil Perusahaan</p>
                    <h2 class="about-heading">Transformasi bisnis yang <span>terintegrasi</span></h2>
                </div>
                <p class="about-section-note">Kami percaya bahwa kinerja bisnis yang unggul hanya dapat dicapai melalui
                    strategi yang tepat, sistem yang kuat, dan manusia yang terus berkembang.</p>
            </div>
            <div class="about-prose-grid">
                <p>Sejak didirikan pada tahun 2010, kami telah berkomitmen membantu klien untuk mentransformasi bisnisnya
                    melalui pendekatan perencanaan strategis, penguatan sistem manajemen, keunggulan operasional dan
                    keunggulan sumberdaya manusia yang terintegrasi, berbasis data dan berorientasi pada hasil</p>
                <p>Cipta Progresa hadir sebagai mitra yang membantu organisasi bergerak dari tantangan menuju peluang. Kami
                    menghubungkan manusia, sistem, dan teknologi dalam satu ekosistem pembelajaran dan konsultasi yang
                    kolaboratif dan berorientasi hasil.</p>
            </div>
            <div class="about-pillars">
                <div><span>01</span><strong>Strategic planning</strong></div>
                <div><span>02</span><strong>Management system</strong></div>
                <div><span>03</span><strong>Operational excellence</strong></div>
                <div><span>04</span><strong>Human resources</strong></div>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="about-section about-section--mist">
        <div class="section-inner">
            <div class="about-section-head">
                <div>
                    <p class="profile-overline">02 / Visi & Misi</p>
                    <h2 class="about-heading">Menjadi mitra utama bagi <span>pertumbuhan</span></h2>
                </div>
                <p class="about-section-note">Menyampaikan tujuan dan arah perusahaan secara jelas untuk menciptakan
                    transformasi yang terarah, adaptif, dan berbasis data.</p>
            </div>
            <div class="vision-card">
                <div class="vision-label">Visi kami</div>
                <div class="vision-copy">Menjadi mitra utama bagi perusahaan dan organisasi di Indonesia dalam melakukan
                    transformasi bisnis melalui perencanaan strategi bisnis yang tepat, penguatan sistem manajemen,
                    keunggulan operasional dan keunggulan sumberdaya manusia yang terintegrasi, berbasis data dan
                    berorientasi pada hasil.</div>
            </div>
            <div class="mission-grid">
                <div class="mission-heading"><span>Misi kami</span><strong>Langkah nyata<br>menuju dampak.</strong></div>
                <ul class="mission-list">
                    <li>Menjadi mitra strategis bagi klien dalam merancang dan mengeksekusi transformasi bisnis yang
                        terarah, adaptif, dan berbasis data.</li>
                    <li>Mengintegrasikan manusia, sistem, dan teknologi dalam satu ekosistem pembelajaran dan konsultasi
                        yang kolaboratif dan berorientasi hasil.</li>
                    <li>Mengoptimalkan keunggulan operasional klien melalui pendekatan inovatif, analisis kinerja dan
                        penerapan praktik terbaik industri.</li>
                    <li>Mengembangkan sumber daya manusia yang unggul dan berdaya saing melalui proses pembelajaran yang
                        berkelanjutan, terukur, dan relevan dengan kebutuhan bisnis.</li>
                    <li>Menjalankan seluruh proses dengan menjunjung tinggi nilai profesionalisme, integritas, keselamatan
                        kerja, kelestarian lingkungan hidup dan tanggung jawab sosial untuk menciptakan pertumbuhan yang
                        berkelanjutan.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="nilai-inti" class="about-section">
        <div class="section-inner">
            <div class="about-section-head">
                <div>
                    <p class="profile-overline">03 / Nilai-nilai Inti Perusahaan</p>
                    <h2 class="about-heading">Fondasi dalam <span>setiap langkah</span></h2>
                </div>
                <p class="about-section-note">Kami berpegang pada nilai-nilai inti yang menjadi fondasi dalam setiap
                    langkah.</p>
            </div>
            <div class="core-value-grid">
                <article><span>01</span>
                    <div class="core-value-icon">◎</div>
                    <h3>Fokus pada Pelanggan</h3>
                    <p>Memahami kebutuhan pelanggan dan menghadirkan solusi yang memberi manfaat nyata.</p>
                </article>
                <article><span>02</span>
                    <div class="core-value-icon">↗</div>
                    <h3>Fokus pada Proses</h3>
                    <p>Menjalankan proses yang tertata, konsisten, dan terus diperbaiki untuk hasil terbaik.</p>
                </article>
                <article><span>03</span>
                    <div class="core-value-icon">+</div>
                    <h3>Fokus pada Kerjasama</h3>
                    <p>Membangun kolaborasi yang terbuka, saling mendukung, dan menghasilkan dampak bersama.</p>
                </article>
                <article><span>04</span>
                    <div class="core-value-icon">⌁</div>
                    <h3>Fokus pada Fakta &amp; Data</h3>
                    <p>Mengambil keputusan berdasarkan informasi yang jelas, terukur, dan dapat dipertanggungjawabkan.</p>
                </article>
                <article><span>05</span>
                    <div class="core-value-icon">✦</div>
                    <h3>Fokus pada Keunggulan</h3>
                    <p>Berkomitmen untuk terus belajar, berinovasi, dan memberikan kualitas yang lebih baik.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="keunggulan" class="about-section about-section--navy">
        <div class="section-inner">
            <div class="about-section-head">
                <div>
                    <p class="profile-overline profile-overline--light">04 / Keunggulan kami</p>
                    <h2 class="about-heading about-heading--light">Yang membedakan kami <span>dari yang lain</span></h2>
                </div>
                <p class="about-section-note about-section-note--light">Solusi relevan dengan tantangan organisasi dan
                    perubahan menjadi proses bersama.</p>
            </div>
            <div class="advantage-grid">
                <div class="advantage-feature"><span class="advantage-number">01</span>
                    <h3>Pendekatan Terintegrasi: People–System–Technology</h3>
                    <p>Kami membangun ekosistem pembelajaran organisasi yang terintegrasi dengan menghubungkan manusia,
                        sistem, dan teknologi</p>
                </div>
                <ul class="advantage-list">
                    <li><strong>02 / Berbasis Data &amp; Hasil</strong>Setiap solusi berbasis data dan hasil dengan
                        indikator kinerja terukur, sehingga keputusan lebih tepat.</li>
                    <li><strong>03 / Fokus pada Transformasi, Bukan Sekadar Pelatihan</strong>Kami mendorong transformasi
                        nyata dalam kinerja organisasi, bukan hanya transfer ilmu.</li>
                    <li><strong>04 / Penguatan Sistem Manajemen &amp; Keunggulan Operasional</strong>Memperkuat sistem
                        manajemen dan budaya kerja agar lebih efisien, produktif, dan berkelanjutan.</li>
                    <li><strong>05 / Pengembangan SDM yang Adaptif &amp; Kompetitif</strong>Desain pembelajaran adaptif dan
                        relevan agar SDM mampu berpikir strategis dan memiliki sense of ownership.</li>
                    <li><strong>06 / Pendekatan Kolaboratif &amp; Pendampingan Berkelanjutan</strong>Solusi relevan dengan
                        tantangan organisasi dan perubahan menjadi proses bersama.</li>
                    <li><strong>07 / Komitmen terhadap Profesionalisme, K3 &amp; Keberlanjutan</strong>Integritas,
                        keselamatan, dan keberlanjutan menjadi fokus utama sehingga perusahaan lebih dipercaya.</li>
                    <li><strong>08 / Tim Ahli Berpengalaman</strong>Didukung praktisi dan konsultan senior yang
                        berpengalaman dalam berbagai industri dan transformasi organisasi.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="kontak" class="about-cta">
        <div class="section-inner">
            <div class="about-cta-box">
                <div>
                    <p class="profile-overline">05 / Mari bertumbuh bersama</p>
                    <h2>Hubungi kami sekarang untuk konsultasi, penawaran, atau informasi lebih lanjut mengenai layanan
                        kami</h2>
                </div><a href="{{ url('/') }}#footer" class="cp-hero-button">Hubungi Kami <span>→</span></a>
            </div>
        </div>
    </section>
@endsection
