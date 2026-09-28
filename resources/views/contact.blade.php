@extends('layouts.app')

@section('content')
    <section class="contact-hero">
        <div class="section-inner">
            <div class="contact-hero-grid">
                <div>
                    <p class="section-kicker section-kicker--light">Kontak CiptaProgresa</p>
                    <h1>Terhubung dengan <span>kami</span></h1>
                    <p>Kami memiliki tiga titik kontak strategis di beberapa daerah untuk mendukung kebutuhan training,
                        consulting, dan pengembangan organisasi Anda</p>
                    <div class="contact-hero-actions"><a href="#lokasi" class="cp-hero-button">Lihat lokasi
                            <span>↓</span></a><a href="https://wa.me/628131888879" target="_blank" rel="noopener"
                            class="contact-text-link">Chat via WhatsApp ↗</a></div>
                </div>
                <div class="contact-hero-orbit">
                    <div class="contact-orbit-center"><img src="{{ asset('assets/images/ciptaprogresa-mark-white.png') }}"
                            class="contact-orbit-logo" alt="CiptaProgresa"><small>Let's<br>connect</small></div><span
                        class="contact-orbit-dot dot-jakarta">Jakarta</span><span
                        class="contact-orbit-dot dot-bogor">Bogor</span><span
                        class="contact-orbit-dot dot-cikarang">Cikarang</span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info-section">
        <div class="section-inner">
            <div class="contact-info-heading">
                <div>
                    <p class="profile-overline">Mari berbicara</p>
                    <h2>Ruang untuk <span>kolaborasi</span></h2>
                </div>
                <p>Baik Anda ingin berdiskusi tentang program pelatihan, konsultasi, event, atau peluang kerja sama, tim
                    kami siap membantu</p>
            </div>
            <div class="contact-info-grid"><a href="mailto:digital.marketing@ciptaprogresa.com"
                    class="contact-info-card"><span
                        class="contact-info-icon">@</span><small>Email</small><strong>digital.marketing@ciptaprogresa.com</strong><em>Kirimi
                        kami email ↗</em></a><a href="https://wa.me/628131888879" target="_blank" rel="noopener"
                    class="contact-info-card"><span class="contact-info-icon">⌕</span><small>WhatsApp</small><strong>+62
                        813-1888-879</strong><em>Chat dengan tim kami ↗</em></a>
                <div class="contact-info-card"><span class="contact-info-icon">◷</span><small>Jam
                        layanan</small><strong>Senin – Jumat & Sabtu</strong><em>09.00 – 17.00 WIB & 08.00 – 12.00 WIB</em>
                </div>
            </div>
        </div>
    </section>
    <section id="lokasi" class="contact-location-section">
        <div class="section-inner">
            <div class="contact-location-heading">
                <div>
                    <p class="profile-overline">Tiga titik strategis</p>
                    <h2>Temukan kami<br><span>di dekat Anda</span></h2>
                </div>
                <p>Office Center dan kantor cabang kami hadir di lokasi strategis untuk memudahkan kolaborasi dan
                    konsultasi</p>
            </div>
            <div class="contact-location-layout">
                <div class="contact-map">
                    <div class="contact-map-grid"></div>
                    <div class="contact-map-route route-one"></div>
                    <div class="contact-map-route route-two"></div><a class="contact-map-pin pin-jakarta"
                        href="https://www.google.com/maps/search/?api=1&query=18+Parc+Place+SCBD+Jakarta" target="_blank"
                        rel="noopener"><i></i><span>01 · Jakarta</span></a><a class="contact-map-pin pin-bogor"
                        href="https://www.google.com/maps/search/?api=1&query=Jl.+Karadenan+No.21b+Bogor" target="_blank"
                        rel="noopener"><i></i><span>02 · Bogor</span></a><a class="contact-map-pin pin-cikarang"
                        href="https://www.google.com/maps/search/?api=1&query=Cikarang+Technopark+Building+A"
                        target="_blank" rel="noopener"><i></i><span>03 · Cikarang</span></a>
                    <div class="contact-map-label"><img src="{{ asset('assets/images/ciptaprogresa-mark-white.png') }}"
                            class="contact-map-logo" alt="CiptaProgresa"><small>Office network</small></div>
                </div>
                <div class="contact-branch-list">
                    <article class="contact-branch is-active"><span>01</span>
                        <div><small>Office Center</small>
                            <h3>Jakarta Selatan</h3>
                            <p>18 Parc Place SCBD, Tower B Lt.2<br>Jl. Jend. Sudirman Kav.52-53<br>Jakarta Selatan 12190</p>
                            <a href="https://www.google.com/maps/search/?api=1&query=18+Parc+Place+SCBD+Jakarta"
                                target="_blank" rel="noopener">Buka di Google Maps ↗</a>
                        </div>
                    </article>
                    <article class="contact-branch"><span>02</span>
                        <div><small>Branch Office</small>
                            <h3>Bogor</h3>
                            <p>Jl. Karadenan No.21b, Pasir Jambu<br>Kec. Sukaraja, Kabupaten Bogor<br>Jawa Barat 16158</p><a
                                href="https://www.google.com/maps/search/?api=1&query=Jl.+Karadenan+No.21b+Bogor"
                                target="_blank" rel="noopener">Buka di Google Maps ↗</a>
                        </div>
                    </article>
                    <article class="contact-branch"><span>03</span>
                        <div><small>Branch Office</small>
                            <h3>Cikarang</h3>
                            <p>Cikarang Technopark Building A Lt.2<br>Jl. Inti C1 No.7, Lippo Cikarang<br>Bekasi 17530</p><a
                                href="https://www.google.com/maps/search/?api=1&query=Cikarang+Technopark+Building+A"
                                target="_blank" rel="noopener">Buka di Google Maps ↗</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-cta-section">
        <div class="section-inner">
            <div class="contact-cta-box">
                <div>
                    <p class="profile-overline">Siap memulai percakapan?</p>
                    <h2>Hubungi kami dan<br><span>tumbuh bersama</span></h2>
                </div><a href="mailto:hello@ciptaprogresa.id" class="cp-hero-button">Kirim email <span>→</span></a>
            </div>
        </div>
    </section>
@endsection
