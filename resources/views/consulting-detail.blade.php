@extends('layouts.app')
@section('content')
    <section class="consulting-detail-hero">
        <div class="section-inner"><a href="{{ url('/consulting') }}" class="post-back-link consulting-detail-back">← Kembali
                ke Consulting</a>
            <div class="consulting-detail-hero-grid">
                <div><span class="consulting-detail-category">{{ $consulting['category'] }}</span>
                    <h1>{{ $consulting['title'] }}</h1>
                    <p>{{ $consulting['intro'] }}</p>
                </div>
                <div class="consulting-detail-image"><img
                        src="{{ $consulting['image'] ?? 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&amp;fit=crop&amp;w=1400&amp;q=85' }}"
                        alt="{{ $consulting['title'] }}"><span
                        class="consulting-detail-image-label">Consulting<br><strong>Ready.</strong></span></div>
            </div>
        </div>
    </section>
    <section class="consulting-detail-intro">
        <div class="section-inner">
            <div class="consulting-detail-intro-grid">
                <p class="profile-overline">Ringkasan layanan</p>
                <div>
                    <p class="consulting-detail-lead">{{ $consulting['description'] }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="consulting-detail-section consulting-detail-scope-section">
        <div class="section-inner">
            <div class="consulting-detail-section-heading">
                <div>
                    <p class="profile-overline">01 / Ruang lingkup</p>
                    <h2>Apa yang<br><span>kami bantu</span></h2>
                </div>
            </div>
            <div class="consulting-scope-grid">
                @foreach ($consulting['scope'] as $scope)
                    <div class="consulting-scope-item"><span>✓</span>
                        <p>{{ $scope }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="consulting-detail-outcomes">
        <div class="section-inner">
            <div class="consulting-detail-section-heading consulting-detail-section-heading--light">
                <div>
                    <p class="profile-overline profile-overline--light">02 / Hasil yang dituju</p>
                    <h2>Perubahan yang<br><span>terukur</span></h2>
                </div>
            </div>
            <div class="consulting-outcome-grid">
                @foreach ($consulting['outcomes'] as $outcome)
                    <div><strong>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</strong>
                        <p>{{ $outcome }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="consulting-detail-cta">
        <div class="section-inner">
            <div>
                <p class="profile-overline">Mulai percakapan</p>
                <h2>Siap membahas kebutuhan<br><span>{{ $consulting['title'] }}?</span></h2>
                <p>Hubungi tim marketing kami untuk membahas solusi yang sesuai bagi organisasi Anda.</p>
            </div>
            <div class="consulting-cta-actions"><a
                    href="{{ url('/kontak') }}?consulting={{ urlencode($consulting['title']) }}"
                    class="consulting-cta-primary">Diskusikan kebutuhan <span>↗</span></a><a
                    href="https://progressplus.co.id/" target="_blank" rel="noopener"
                    class="consulting-secondary-button">Kunjungi website Progress+ <span>↗</span></a></div>
        </div>
    </section>
@endsection
