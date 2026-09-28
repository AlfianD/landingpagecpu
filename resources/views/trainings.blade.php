@extends('layouts.app')

@section('content')
    <section class="training-hero">
        <div class="section-inner">
            <div>
                <p class="section-kicker section-kicker--light">Training & Certification</p>
                <h1>Program yang mengubah <span>kompetensi</span></h1>
                <p>Produk berkualitas untuk mendukung kesuksesan bisnis Anda. Pilih program training yang relevan, praktis,
                    dan dirancang untuk kebutuhan dunia kerja</p><a href="#program" class="cp-hero-button">Jelajahi program
                    <span>↓</span></a>
            </div>
            <div class="training-hero-badge"><strong>14K<span>+</span></strong><small>Learners<br>terlayani</small></div>
        </div>
    </section>
    <section id="program" class="training-list-section">
        <div class="section-inner">
            <div class="training-heading">
                <div>
                    <p class="profile-overline">Program tersedia</p>
                    <h2>Belajar lebih siap,<br><span>berkarya lebih aman</span></h2>
                </div>
                <p>Temukan program pelatihan dan sertifikasi yang membantu tim Anda bekerja lebih kompeten, aman, dan
                    produktif.</p>
            </div>
            <div class="training-browser">
                <div class="training-search-wrap"><span aria-hidden="true">⌕</span><label class="sr-only"
                        for="trainingSearch">Cari program training</label><input id="trainingSearch" type="search"
                        placeholder="Cari program training..." autocomplete="off"></div><label class="sr-only"
                    for="trainingCategoryFilter">Filter kategori training</label><select id="trainingCategoryFilter"
                    class="training-filter">
                    <option value="all">Semua kategori</option>
                    @foreach (collect($trainings)->pluck('category_group')->unique() as $category)
                        <option value="{{ strtolower($category) }}">{{ $category }}</option>
                    @endforeach
                </select>
                <button type="button" id="trainingResetFilter" class="training-filter-reset">Reset</button>
            </div>
            <p class="training-results" id="trainingResults" aria-live="polite"></p>
            <div class="training-grid" id="trainingGrid">
                @foreach ($trainings as $slug => $training)
                    <article class="training-card js-training-card" data-title="{{ strtolower($training['title']) }}"
                        data-category="{{ strtolower($training['category_group']) }}"
                        data-method="{{ strtolower($training['method']) }}">
                        <div class="training-card-body">
                            <div class="training-card-meta">
                                <span>{{ $training['category_group'] }}</span><span>{{ $training['method'] }}</span>
                            </div>
                            <h3>{{ $training['title'] }}</h3>
                            <p>{{ $training['description'] }}</p>
                            <div class="training-card-facts">
                                <span><small>Investasi</small><strong>{{ $training['investment'] }}</strong></span><span><small>Venue</small><strong>{{ $training['venue'] }}</strong></span><span><small>Metode</small><strong>{{ $training['method'] }}</strong></span>
                            </div>
                            <div class="training-card-date">◷ {{ $training['date'] }}</div><a
                                href="{{ url('/training/' . $slug) }}" class="training-detail-link">Lihat detail training
                                <span>↗</span></a>
                        </div>
                    </article>
                @endforeach
            </div>
            <p class="training-empty" id="trainingEmpty" hidden>Program training yang Anda cari belum tersedia.</p>
        </div>
    </section>
    <section class="training-pillars">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Mengapa Progress+</p>
                <h2>Training yang dekat<br>dengan <span>realita</span></h2>
            </div>
            <div class="training-pillar-grid">
                <div><b>01</b>
                    <h3>Praktis</h3>
                    <p>Materi dan praktik disusun agar dapat langsung diterapkan di tempat kerja</p>
                </div>
                <div><b>02</b>
                    <h3>Terukur</h3>
                    <p>Evaluasi kompetensi membantu memastikan hasil belajar dapat dibuktikan</p>
                </div>
                <div><b>03</b>
                    <h3>Terpercaya</h3>
                    <p>Program bersama instruktur ahli dengan standar industri dan kementerian</p>
                </div>
            </div>
        </div>
    </section>
@endsection
