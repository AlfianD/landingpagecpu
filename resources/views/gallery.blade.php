@extends('layouts.app')

@section('content')
    <section class="gallery-hero">
        <div class="section-inner">
            <div class="gallery-hero-copy">
                <p class="section-kicker section-kicker--light">Cipta Progresa in motion</p>
                <h1>Setiap ruang belajar<br>punya <span>cerita</span></h1>
                <p>Potret perjalanan kami mendampingi individu dan organisasi untuk tumbuh lebih siap, lebih percaya diri,
                    dan lebih berdampak.</p><a href="#gallery-grid" class="cp-hero-button">Jelajahi galeri <span>↓</span></a>
            </div>
            <div class="gallery-hero-stack">
                <div class="gallery-hero-card gallery-hero-card--back"><img
                        src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85"
                        alt="Kolaborasi tim"></div>
                <div class="gallery-hero-card gallery-hero-card--front"><img
                        src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=900&q=85"
                        alt="Workshop CiptaProgresa"><span>Learn · Connect · Progress</span></div>
                <div class="gallery-hero-sticker">CP<br><small>Stories</small></div>
            </div>
        </div>
    </section>
    <section id="gallery-grid" class="gallery-section">
        <div class="section-inner">
            <div class="gallery-heading">
                <div>
                    <p class="profile-overline">Visual stories</p>
                    <h2>Momen yang terus<br><span>menggerakkan</span></h2>
                </div>
                <p>Dari kelas sertifikasi hingga sesi leadership, setiap momen adalah bagian dari progres yang kami bangun
                    bersama</p>
            </div>
            <div class="gallery-filters" role="tablist" aria-label="Filter galeri"><button type="button"
                    class="gallery-filter is-active" data-gallery-filter="all">Semua</button><button type="button"
                    class="gallery-filter" data-gallery-filter="training">Training</button><button type="button"
                    class="gallery-filter" data-gallery-filter="event">Event</button><button type="button"
                    class="gallery-filter" data-gallery-filter="team">Team</button></div>
            <div class="gallery-grid"><button type="button" class="gallery-item gallery-item--wide"
                    data-gallery-category="training"
                    data-gallery-image="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1500&q=85"
                    data-gallery-title="Ruang belajar yang hidup"><img
                        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1200&q=85"
                        alt="Ruang belajar yang hidup"><span class="gallery-item-caption"><small>Training</small>Ruang
                        belajar yang hidup <b>↗</b></span></button><button type="button" class="gallery-item"
                    data-gallery-category="event"
                    data-gallery-image="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1000&q=85"
                    data-gallery-title="Event yang mempertemukan"><img
                        src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=900&q=85"
                        alt="Event yang mempertemukan"><span class="gallery-item-caption"><small>Event</small>Event yang
                        mempertemukan <b>↗</b></span></button><button type="button" class="gallery-item"
                    data-gallery-category="team"
                    data-gallery-image="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1000&q=85"
                    data-gallery-title="Team di balik progres"><img
                        src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=85"
                        alt="Team di balik progres"><span class="gallery-item-caption"><small>Team</small>Team di balik
                        progres <b>↗</b></span></button><button type="button" class="gallery-item"
                    data-gallery-category="training"
                    data-gallery-image="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1000&q=85"
                    data-gallery-title="Kolaborasi jadi kompetensi"><img
                        src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=85"
                        alt="Kolaborasi jadi kompetensi"><span
                        class="gallery-item-caption"><small>Training</small>Kolaborasi jadi kompetensi
                        <b>↗</b></span></button><button type="button" class="gallery-item gallery-item--tall"
                    data-gallery-category="event"
                    data-gallery-image="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1000&q=85"
                    data-gallery-title="Bertemu, berbagi, bertumbuh"><img
                        src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=900&q=85"
                        alt="Bertemu, berbagi, bertumbuh"><span class="gallery-item-caption"><small>Event</small>Bertemu,
                        berbagi, bertumbuh <b>↗</b></span></button><button type="button"
                    class="gallery-item gallery-item--wide" data-gallery-category="team"
                    data-gallery-image="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1400&q=85"
                    data-gallery-title="Satu tim, satu tujuan"><img
                        src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1200&q=85"
                        alt="Satu tim, satu tujuan"><span class="gallery-item-caption"><small>Team</small>Satu tim, satu
                        tujuan <b>↗</b></span></button></div>
        </div>
    </section>
    <section class="client-logos-section">
        <div class="section-inner">
            <div class="client-logos-heading">
                <p class="profile-overline">Trusted by teams</p>
                <h2>Dipercaya oleh organisasi<br><span>yang terus bergerak</span></h2>
                <p>Partner perjalanan belajar kami dari berbagai industri dan skala bisnis</p>
            </div>
        </div>
        <div class="client-logo-layers" aria-label="Logo perusahaan client">
            <div class="client-logo-layer client-logo-layer--one">
                <div class="client-logo-layer-track">
                    <div class="client-logo-slot"><span>Logo Client 01</span></div>
                    <div class="client-logo-slot"><span>Logo Client 02</span></div>
                    <div class="client-logo-slot"><span>Logo Client 03</span></div>
                    <div class="client-logo-slot"><span>Logo Client 04</span></div>
                    <div class="client-logo-slot"><span>Logo Client 05</span></div>
                    <div class="client-logo-slot"><span>Logo Client 06</span></div>
                    <div class="client-logo-slot"><span>Logo Client 07</span></div>
                    <div class="client-logo-slot"><span>Logo Client 08</span></div>
                    <div class="client-logo-slot"><span>Logo Client 01</span></div>
                    <div class="client-logo-slot"><span>Logo Client 02</span></div>
                    <div class="client-logo-slot"><span>Logo Client 03</span></div>
                    <div class="client-logo-slot"><span>Logo Client 04</span></div>
                    <div class="client-logo-slot"><span>Logo Client 05</span></div>
                    <div class="client-logo-slot"><span>Logo Client 06</span></div>
                    <div class="client-logo-slot"><span>Logo Client 07</span></div>
                    <div class="client-logo-slot"><span>Logo Client 08</span></div>
                </div>
            </div>
            <div class="client-logo-layer client-logo-layer--two">
                <div class="client-logo-layer-track">
                    <div class="client-logo-slot"><span>Logo Client 01</span></div>
                    <div class="client-logo-slot"><span>Logo Client 02</span></div>
                    <div class="client-logo-slot"><span>Logo Client 03</span></div>
                    <div class="client-logo-slot"><span>Logo Client 04</span></div>
                    <div class="client-logo-slot"><span>Logo Client 05</span></div>
                    <div class="client-logo-slot"><span>Logo Client 06</span></div>
                    <div class="client-logo-slot"><span>Logo Client 07</span></div>
                    <div class="client-logo-slot"><span>Logo Client 08</span></div>
                    <div class="client-logo-slot"><span>Logo Client 01</span></div>
                    <div class="client-logo-slot"><span>Logo Client 02</span></div>
                    <div class="client-logo-slot"><span>Logo Client 03</span></div>
                    <div class="client-logo-slot"><span>Logo Client 04</span></div>
                    <div class="client-logo-slot"><span>Logo Client 05</span></div>
                    <div class="client-logo-slot"><span>Logo Client 06</span></div>
                    <div class="client-logo-slot"><span>Logo Client 07</span></div>
                    <div class="client-logo-slot"><span>Logo Client 08</span></div>
                </div>
            </div>
            <div class="client-logo-layer client-logo-layer--three">
                <div class="client-logo-layer-track">
                    <div class="client-logo-slot"><span>Logo Client 01</span></div>
                    <div class="client-logo-slot"><span>Logo Client 02</span></div>
                    <div class="client-logo-slot"><span>Logo Client 03</span></div>
                    <div class="client-logo-slot"><span>Logo Client 04</span></div>
                    <div class="client-logo-slot"><span>Logo Client 05</span></div>
                    <div class="client-logo-slot"><span>Logo Client 06</span></div>
                    <div class="client-logo-slot"><span>Logo Client 07</span></div>
                    <div class="client-logo-slot"><span>Logo Client 08</span></div>
                    <div class="client-logo-slot"><span>Logo Client 01</span></div>
                    <div class="client-logo-slot"><span>Logo Client 02</span></div>
                    <div class="client-logo-slot"><span>Logo Client 03</span></div>
                    <div class="client-logo-slot"><span>Logo Client 04</span></div>
                    <div class="client-logo-slot"><span>Logo Client 05</span></div>
                    <div class="client-logo-slot"><span>Logo Client 06</span></div>
                    <div class="client-logo-slot"><span>Logo Client 07</span></div>
                    <div class="client-logo-slot"><span>Logo Client 08</span></div>
                </div>
            </div>
        </div>
    </section>
    <div class="gallery-lightbox" aria-hidden="true"><button type="button" class="gallery-lightbox-close"
            aria-label="Tutup">×</button>
        <div class="gallery-lightbox-content"><img src="" alt="">
            <p></p>
        </div>
    </div>
@endsection
