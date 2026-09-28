@extends('layouts.app')

@section('content')
    <section class="other-services-hero">
        <div class="section-inner">
            <p class="section-kicker section-kicker--light">Layanan lainnya</p>
            <h1>Urusan lisensi, <span>lebih mudah</span></h1>
            <p>Butuh bantuan untuk memperpanjang, menerbitkan, atau memutasi lisensi? Kami membantu Anda menyiapkan proses
                dengan lebih terarah</p>
        </div>
    </section>
    <section class="other-services-section">
        <div class="section-inner">
            <div class="other-services-heading">
                <div>
                    <p class="profile-overline">Dukungan administrasi</p>
                    <h2>Pilih layanan yang <span>Anda butuhkan</span></h2>
                </div>
                <p>Mulai proses melalui client portal Progress+. Jika masih bingung atau ingin bertanya terlebih dahulu,
                    hubungi admin kami</p>
            </div>
            <div class="other-services-grid">
                @foreach ($services as $service)
                    <article class="other-service-card"><span class="other-service-icon">{{ $service['icon'] }}</span>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p><a href="https://client.progressplus.co.id/" target="_blank"
                            rel="noopener" class="other-service-link">Mulai di client portal <span>↗</span></a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="other-services-contact">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Butuh arahan?</p>
                <h2>Tanya admin sebelum <span>memulai</span></h2>
                <p>Tim kami siap membantu menjelaskan dokumen, tahapan, dan pilihan layanan yang paling sesuai</p>
            </div>
            <div class="industry-cta-actions"><a href="{{ url('/kontak') }}" class="industry-contact-button">Hubungi / Chat
                    Admin <span>↗</span></a><a href="https://client.progressplus.co.id/" target="_blank" rel="noopener"
                    class="cp-hero-button">Buka client portal <span>↗</span></a></div>
        </div>
    </section>
@endsection
