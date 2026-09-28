@extends('layouts.app')

@section('content')
    <section class="career-detail-hero">
        <div class="section-inner"><a href="{{ url('/karier') }}" class="post-back-link">← Kembali ke Karier</a>
            <div class="career-detail-grid">
                <div><span class="blog-category">{{ $job['department'] }} · {{ $job['type'] }}</span>
                    <h1>{{ $job['display_title'] }}</h1>
                    <p>{{ $job['description'] }}</p>
                    <div class="career-detail-meta"><span>⌖ {{ $job['location'] }}</span><span>◷ Deadline:
                            {{ $job['deadline'] }}</span></div><a href="{{ url('/karier/' . $slug . '/lamar') }}"
                        class="cp-hero-button">Lamar pekerjaan <span>→</span></a>
                </div>
                <div class="career-detail-image"><img src="{{ $job['image'] }}" alt="{{ $job['display_title'] }}">
                    <div class="career-detail-sticker">We are<br><strong>hiring</strong></div>
                </div>
            </div>
        </div>
    </section>
    <section class="career-detail-section">
        <div class="section-inner">
            <div class="career-detail-content">
                <div>
                    <p class="profile-overline">Tentang posisi ini</p>
                    <h2 class="career-detail-title">Bawa ide Anda,<br><span>buat dampak nyata</span></h2>
                    <p class="career-detail-paragraph">{{ $job['short_description'] }} Bersama CiptaProgresa, Anda akan
                        bekerja dalam lingkungan yang mendorong pembelajaran, kolaborasi, dan keberanian untuk mencoba hal
                        baru</p>
                </div>
                <aside class="career-quick-card">
                    <p class="profile-overline">Informasi lebih lanjut</p>
                    <div><span>Posisi</span><strong>{{ $job['display_title'] }}</strong></div>
                    <div><span>Departemen</span><strong>{{ $job['department'] }}</strong></div>
                    <div><span>Lokasi</span><strong>{{ $job['location'] }}</strong></div>
                    <div><span>Deadline</span><strong>{{ $job['deadline'] }}</strong></div><a
                        href="{{ url('/karier/' . $slug . '/lamar') }}" class="career-quick-button">Lamar pekerjaan ↗</a>
                </aside>
            </div>
            <div class="career-detail-columns">
                <div>
                    <p class="profile-overline">Yang akan Anda lakukan</p>
                    <h2>Responsibilitas</h2>
                    <ul class="career-detail-list">
                        @foreach ($job['responsibilities'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p class="profile-overline">Yang kami cari</p>
                    <h2>Kualifikasi</h2>
                    <ul class="career-detail-list">
                        @foreach ($job['qualifications'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="career-benefit-strip">
                <div>
                    <p class="profile-overline">Lebih dari sekadar pekerjaan</p>
                    <h2>Temukan ruang<br>untuk bertumbuh</h2>
                </div>
                <div class="career-benefit-list">
                    @foreach ($job['benefits'] as $benefit)
                        <span>✓ {{ $benefit }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="career-apply-banner">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Siap bergabung?</p>
                <h2>Jadilah bagian dari<br><span>progress berikutnya.</span></h2>
            </div><a href="{{ url('/karier/' . $slug . '/lamar') }}" class="cp-hero-button">Lamar sekarang
                <span>→</span></a>
        </div>
    </section>
@endsection
