@extends('layouts.app')

@section('content')
    <section class="apply-hero">
        <div class="section-inner"><a href="{{ url('/karier/' . $slug) }}" class="post-back-link">← Kembali ke detail
                lowongan</a>
            <p class="section-kicker section-kicker--light">Lamaran pekerjaan</p>
            <h1>Mulai perjalanan<br><span>bersama kami</span></h1>
            <p>Lengkapi data berikut untuk melamar posisi {{ $job['display_title'] }} di Cipta Progresa</p>
        </div>
    </section>
    <section class="apply-section">
        <div class="section-inner">
            <div class="apply-layout">
                <aside class="apply-summary"><span class="blog-category">{{ $job['department'] }} · {{ $job['type'] }}</span>
                    <h2>{{ $job['display_title'] }}</h2>
                    <p>{{ $job['short_description'] }}</p>
                    <div class="apply-summary-item"><span>Lokasi</span><strong>{{ $job['location'] }}</strong></div>
                    <div class="apply-summary-item"><span>Deadline</span><strong>{{ $job['deadline'] }}</strong></div>
                    <div class="apply-summary-note">Pastikan data dan CV yang Anda kirim sudah terbaru</div>
                </aside>
                <div class="apply-form-wrap">
                    <div class="apply-form-heading">
                        <p class="profile-overline">Data kandidat</p>
                        <h2>Form lamaran</h2>
                        <p>Cipta Progresa Training & Consulting dengan brand Progress+ adalah perusahaan yang bergerak di
                            bidang jasa pelatihan dan konsultasi.</p>
                    </div>
                    <form class="career-application-form" action="#application-success" method="post"
                        enctype="multipart/form-data">
                        <div class="apply-form-grid"><label>Nama lengkap<input type="text" name="name"
                                    placeholder="Nama lengkap" required></label><label>Email aktif<input type="email"
                                    name="email" placeholder="nama@email.com" required></label><label>Nomor WhatsApp<input
                                    type="tel" name="phone" placeholder="08xxxxxxxxxx"
                                    required></label><label>Domisili<input type="text" name="city"
                                    placeholder="Kota domisili" required></label><label>Pendidikan terakhir<select
                                    name="education" required>
                                    <option value="">Pilih pendidikan</option>
                                    <option>SMA / sederajat</option>
                                    <option>Diploma</option>
                                    <option>Sarjana</option>
                                    <option>Pascasarjana</option>
                                </select></label><label>Pengalaman kerja<select name="experience" required>
                                    <option value="">Pilih pengalaman</option>
                                    <option>Fresh graduate</option>
                                    <option>1–2 tahun</option>
                                    <option>3–5 tahun</option>
                                    <option>Lebih dari 5 tahun</option>
                                </select></label><label class="apply-full">LinkedIn / Portfolio<input type="url"
                                    name="portfolio" placeholder="https://"></label><label
                                class="apply-full apply-file-label">Upload CV <small>(PDF, maksimal 5 MB)</small><input
                                    type="file" name="cv" accept=".pdf,.doc,.docx" required></label><label
                                class="apply-full">Pesan untuk kami
                                <textarea name="message" rows="5" placeholder="Ceritakan secara singkat tentang diri Anda dan alasan melamar"></textarea>
                            </label></div><label class="apply-consent"><input type="checkbox" name="consent"
                                required><span>Saya menyetujui data ini digunakan untuk proses rekrutmen
                                CiptaProgresa.</span></label><button type="submit" class="cp-hero-button">Kirim lamaran
                            <span>→</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
