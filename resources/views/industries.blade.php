@extends('layouts.app')

@section('content')
    <section class="industry-page-hero">
        <div class="section-inner">
            <p class="section-kicker section-kicker--light">Industri yang kami layani</p>
            <h1>Kenali tantangan bisnis,<br><span>temukan jalan keluarnya</span></h1>
            <p>Setiap industri punya tantangan yang berbeda. Kami membantu Anda menemukan solusi yang tepat untuk membuat
                bisnis lebih aman, patuh, produktif, dan siap berkembang</p>
        </div>
    </section>
    <section class="industry-market-section">
        <div class="section-inner">
            <div class="industry-list-heading">
                <div>
                    <p class="profile-overline">Industri yang kami pahami</p>
                    <h2>Solusi yang dekat dengan <span>kebutuhan bisnis</span></h2>
                </div>
                <p>Pilih industri Anda dan lihat bagaimana kami dapat membantu menjawab tantangan operasional, people,
                    kepatuhan, hingga pengembangan bisnis</p>
            </div>
            <div class="industry-market-grid">
                @foreach ($industries as $industry)
                    <article class="industry-market-card"><span
                            class="industry-market-number">{{ $loop->iteration < 10 ? '0' . $loop->iteration : $loop->iteration }}</span><span
                            class="industry-icon">{{ $industry['icon'] }}</span>
                        <h3>{{ $industry['name'] }}</h3><span class="industry-market-link">Lihat area solusi
                            <span>↗</span></span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="business-problem-section">
        <div class="section-inner">
            <div class="industry-list-heading">
                <div>
                    <p class="profile-overline profile-overline--light">Tantangan yang sering dihadapi bisnis</p>
                    <h2>Dari tantangan menjadi <span>solusi</span></h2>
                </div>
                <p>Pilih tantangan yang paling dekat dengan kondisi organisasi Anda. Kami siap membantu memetakan langkah
                    yang realistis dan bisa dijalankan</p>
            </div>
            <div class="business-problem-grid">
                @foreach ($businessProblems as $problem)
                    <article class="business-problem-card">
                        <div class="business-problem-top"><span
                                class="business-problem-number">{{ $loop->iteration < 10 ? '0' . $loop->iteration : $loop->iteration }}</span><span
                                class="business-problem-icon">{{ $problem['icon'] }}</span></div>
                        <h3>{{ $problem['title'] }}</h3>
                        <div class="business-problem-row"><small>Yang ingin dibantu</small>
                            <p>{{ $problem['need'] }}</p>
                        </div>
                        <div class="business-problem-row"><small>Cocok untuk</small>
                            <p>{{ $problem['market'] }}</p>
                        </div>
                        <div class="business-problem-products"><small>Pilihan solusi untuk Anda</small>
                            <div>
                                @foreach ($problem['products'] as $product)
                                    <span>{{ $product }}</span>
                                @endforeach
                            </div>
                        </div><a href="https://client.progressplus.co.id/" target="_blank" rel="noopener"
                            class="business-problem-link">Temukan solusi yang sesuai <span>↗</span></a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="industry-contact-cta">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Punya tantangan yang ingin dibahas?</p>
                <h2>Mari cari solusi untuk <span>bisnis Anda</span></h2>
                <p>Ceritakan kebutuhan Anda. Tim kami siap membantu menghubungkan tantangan bisnis dengan solusi yang paling
                    relevan</p>
            </div>
            <div class="industry-cta-actions"><a href="https://client.progressplus.co.id/" target="_blank" rel="noopener"
                    class="cp-hero-button">Ke client portal <span>↗</span></a><a href="{{ url('/kontak') }}"
                    class="industry-contact-button">Hubungi / Chat Admin <span>↗</span></a></div>
        </div>
    </section>
@endsection
