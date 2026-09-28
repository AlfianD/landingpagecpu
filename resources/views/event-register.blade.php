@extends('layouts.app')

@section('content')
    <section class="register-hero">
        <div class="section-inner"><a href="{{ url('/event/' . $slug) }}" class="post-back-link event-hero-breadcrumb">←
                Kembali
                ke detail event</a>
            <p class="section-kicker section-kicker--light">Pendaftaran event</p>
            <h1>Amankan tempat Anda<br><span>hari ini</span></h1>
            <p>Silakan lengkapi formulir di bawah ini untuk mengikuti event yang diselenggarakan oleh PT. Cipta Progresa
                Usaha</p>
        </div>
    </section>
    <section class="register-section">
        <div class="section-inner">
            <div class="register-layout">
                <aside class="register-summary"><span class="blog-category">{{ $event['category'] }}</span>
                    <h2>{{ $event['title'] }}</h2>
                    <p>{{ $event['subtitle'] }}</p>
                    <div class="register-summary-row"><span>📅
                            {{ $event['date'] }}</span><strong>{{ $event['price'] }}</strong></div>
                    <div class="register-summary-row"><span>💻
                            {{ $event['location'] }}</span><strong>{{ $event['free_quota'] }}</strong></div>
                    <div class="register-free">GRATIS UNTUK 80 PENDAFTAR TERCEPAT</div>
                </aside>
                <div class="register-form-wrap">
                    <div class="register-form-heading">
                        <p class="profile-overline">Data peserta</p>
                        <h2>Lengkapi data Anda</h2>
                        <p>Konfirmasi pendaftaran akan dikirim melalui email yang Anda cantumkan pada formulir pendaftaran
                        </p>
                    </div>
                    <form class="event-registration-form" action="#success" method="post">
                        <div class="register-form-grid"><label>Nama lengkap<input type="text" name="name"
                                    placeholder="Nama lengkap" required></label><label>Email aktif<input type="email"
                                    name="email" placeholder="nama@email.com" required></label><label>Nomor WhatsApp<input
                                    type="tel" name="phone" placeholder="08xxxxxxxxxx" required></label><label>Nama
                                perusahaan / institusi<input type="text" name="company"
                                    placeholder="Nama perusahaan atau institusi"></label><label
                                class="register-full">Jabatan<input type="text" name="position"
                                    placeholder="Jabatan Anda"></label><label class="register-full">Catatan tambahan
                                <textarea name="notes" rows="4" placeholder="Tulis kebutuhan atau pertanyaan Anda (opsional)"></textarea>
                            </label></div><label class="register-check"><input type="checkbox" name="consent"
                                required><span>Saya menyetujui data ini digunakan untuk kebutuhan pendaftaran event dan
                                informasi CiptaProgresa.</span></label><button type="submit" class="cp-hero-button">Kirim
                            pendaftaran <span>→</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
