@extends('layouts.app')

@section('content')
    <section class="schedule-hero">
        <div class="section-inner">
            <div class="schedule-hero-grid">
                <div>
                    <p class="section-kicker section-kicker--light">Program Pelatihan</p>
                    <h1>Dapatkan jadwal untuk <span>langkah berikutnya</span></h1>
                    <p>Dapatkan akses eksklusif ke jadwal pelatihan Cipta Progresa Usaha. Sertifikasi resmi, instruktur
                        ahli, dan materi terupdate untuk karir yang lebih cemerlang</p><a href="#download"
                        class="cp-hero-button">Download jadwal 2026 <span>↓</span></a>
                </div>
                <div class="schedule-hero-visual">
                    <div class="schedule-calendar-card">
                        <div class="schedule-calendar-top"><span>TRAINING<br>CALENDAR</span><strong>2026</strong></div>
                        <div class="schedule-calendar-grid">
                            <span>MON</span><span>TUE</span><span>WED</span><span>THU</span><span>FRI</span><b>01</b><b>02</b><b>03</b><b
                                class="is-marked">04</b><b>05</b><b>06</b><b>07</b><b>08</b><b>09</b><b>10</b><b>11</b><b>12</b><b>13</b><b
                                class="is-marked">14</b><b>15</b>
                        </div>
                    </div><span class="schedule-visual-note">Plan your<br><strong>next chapter</strong></span>
                </div>
            </div>
        </div>
    </section>
    <section id="download" class="schedule-download-section">
        <div class="section-inner">
            <div class="schedule-download-card">
                <div class="schedule-download-copy">
                    <p class="profile-overline">Jadwal Pelatihan 2026</p>
                    <h2>Lengkapi data untuk mendapatkan file <span>PDF</span></h2>
                    <p>Isi data singkat di bawah ini. Setelah berhasil, Anda dapat mengunduh jadwal pelatihan CiptaProgresa
                        secara langsung</p>
                    <div class="schedule-help"><span>Butuh bantuan cepat?</span><a href="{{ url('/') }}#footer">Hubungi
                            Kami →</a></div>
                </div>
                <div class="schedule-form-wrap">
                    <form class="schedule-download-form" action="{{ asset('assets/files/jadwal-pelatihan-2026.pdf') }}"
                        method="get"><label>Nama lengkap<input type="text" name="name" placeholder="Nama lengkap"
                                required></label><label>Email aktif<input type="email" name="email"
                                placeholder="nama@email.com" required></label><label>Nomor WhatsApp<input type="tel"
                                name="phone" placeholder="08xxxxxxxxxx" required></label><label>Perusahaan /
                            institusi<input type="text" name="company"
                                placeholder="Nama perusahaan atau institusi"></label><label class="schedule-consent"><input
                                type="checkbox" name="consent" required><span>Saya bersedia menerima informasi terkait
                                program CiptaProgresa.</span></label><button type="submit" class="cp-hero-button">Download
                            PDF <span>↓</span></button>
                        <p class="schedule-form-note">Data Anda digunakan untuk kebutuhan informasi program dan tindak
                            lanjut pelatihan.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
