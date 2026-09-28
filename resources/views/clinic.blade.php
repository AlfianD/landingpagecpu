@extends('layouts.app')

@section('content')
    <section class="clinic-hero">
        <div class="section-inner">
            <div>
                <p class="section-kicker section-kicker--light">Clinic · People & Development</p>
                <h1>Ruang aman untuk<br>membahas <span>Sumber daya manusia dan bisnis</span></h1>
                <p>Diskusikan tantangan HR, TNA, budgeting, budaya kerja, dan pengembangan people bersama konsultan
                    kami—dengan konteks yang nyata dan langkah yang bisa dijalankan</p><a href="#clinic-form"
                    class="cp-hero-button">Mulai diskusi <span>↓</span></a>
            </div>
            <div class="clinic-orbit">
                <div class="clinic-orbit-ring clinic-orbit-ring--one"></div>
                <div class="clinic-orbit-ring clinic-orbit-ring--two"></div>
                <div class="clinic-orbit-core"><img class="clinic-orbit-logo"
                        src="{{ asset('assets/images/ciptaprogresa-mark-white.png') }}"
                        alt="CiptaProgresa"><small>Clinic</small>
                </div><span class="clinic-orbit-chip clinic-orbit-chip--one">HR</span><span
                    class="clinic-orbit-chip clinic-orbit-chip--two">TNA</span><span
                    class="clinic-orbit-chip clinic-orbit-chip--three">Budget</span><span
                    class="clinic-orbit-chip clinic-orbit-chip--four">People</span>
            </div>
        </div>
    </section>
    <section class="clinic-intro">
        <div class="section-inner">
            <div class="clinic-intro-heading">
                <p class="profile-overline">Apa yang bisa dibahas?</p>
                <h2>Datang dengan pertanyaan,<br>pulang dengan <span>arah</span></h2>
            </div>
            <div class="clinic-topic-grid">
                <article><span>01</span>
                    <h3>HR & Organization</h3>
                    <p>Struktur, kebijakan, peran HR, dan tantangan organisasi yang sedang Anda hadapi.</p>
                </article>
                <article><span>02</span>
                    <h3>TNA & Learning</h3>
                    <p>Memetakan kebutuhan kompetensi dan menyusun learning intervention yang tepat.</p>
                </article>
                <article><span>03</span>
                    <h3>Budgeting</h3>
                    <p>Membuat prioritas investasi people development yang selaras dengan bisnis.</p>
                </article>
                <article><span>04</span>
                    <h3>People & Culture</h3>
                    <p>Membangun budaya, leadership, engagement, dan pengalaman kerja yang lebih baik.</p>
                </article>
            </div>
        </div>
    </section>
    <section id="clinic-form" class="clinic-form-section">
        <div class="section-inner">
            <div class="clinic-form-layout">
                <div class="clinic-form-aside">
                    <p class="profile-overline profile-overline--light">Clinic intake</p>
                    <h2>Ceritakan konteks<br><span>perusahaan Anda</span></h2>
                    <p>Isi biodata dan kebutuhan awal agar tim kami dapat memahami situasi Anda sebelum sesi diskusi
                        dijadwalkan.</p>
                    <div class="clinic-private-note"><strong>Data Anda aman</strong><span>Informasi ini digunakan untuk
                            kebutuhan follow-up Clinic dan administrasi internal Cipta Progresa.</span></div>
                </div>
                @if ($clinicActive)
                    <form class="clinic-form" id="clinicClientForm">
                        <div class="clinic-form-status"><span class="clinic-status-dot"></span>Clinic sedang dibuka</div>
                        <div class="clinic-form-row"><label>Nama lengkap<input type="text" name="name" required
                                    placeholder="Nama Anda"></label><label>Jabatan<input type="text" name="position"
                                    required placeholder="Contoh: HR Manager"></label></div>
                        <div class="clinic-form-row"><label>Email kerja<input type="email" name="email" required
                                    placeholder="nama@perusahaan.com"></label><label>Nomor WhatsApp<input type="tel"
                                    name="phone" required placeholder="08xx xxxx xxxx"></label></div>
                        <div class="clinic-form-row"><label>Nama perusahaan<input type="text" name="company" required
                                    placeholder="Nama perusahaan"></label><label>Jumlah karyawan<select
                                    name="employee_count" required>
                                    <option value="">Pilih jumlah</option>
                                    <option>1–50 karyawan</option>
                                    <option>51–200 karyawan</option>
                                    <option>201–500 karyawan</option>
                                    <option>Lebih dari 500 karyawan</option>
                                </select></label></div><label>Topik yang ingin didiskusikan<select name="topic" required>
                                <option value="">Pilih topik</option>
                                <option>Sumber Daya Manusia</option>
                                <option>Leadership</option>
                                <option>Corporate Social Responsibility (CSR)</option>
                                <option>Bisnis & Manajemen</option>
                                <option>Lainnya</option>
                            </select></label><label>Ceritakan Permasalahan awal
                            <textarea name="message" rows="5" required
                                placeholder="Tuliskan pertanyaan atau tantangan yang sedang dihadapi..."></textarea>
                        </label><label class="clinic-consent"><input type="checkbox" required> Saya menyetujui data ini
                            digunakan untuk kebutuhan follow-up Clinic Cipta Progresa.</label><button type="submit"
                            class="clinic-submit">Kirim permintaan diskusi <span>↗</span></button>
                </form>@else<div class="clinic-closed-card"><span class="clinic-closed-icon">—</span>
                        <p class="profile-overline">Clinic sedang ditutup</p>
                        <h3>Pendaftaran sedang tidak aktif.</h3>
                        <p>Tim kami sedang menyiapkan jadwal Clinic berikutnya. Silakan kembali lagi atau hubungi kami untuk
                            kebutuhan mendesak.</p><a href="{{ url('/kontak') }}" class="training-register-button">Hubungi
                            kami ↗</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="clinic-bottom-cta">
        <div class="section-inner">
            <p class="profile-overline profile-overline--light">Butuh perspektif baru?</p>
            <h2>Mulai dari satu<br><span>percakapan.</span></h2><a href="{{ url('/kontak') }}"
                class="cp-hero-button">Hubungi Cipta Progresa <span>↗</span></a>
        </div>
    </section>
@endsection
