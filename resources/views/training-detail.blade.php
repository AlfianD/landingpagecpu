@extends('layouts.app')

@section('content')
    <section class="training-detail-hero">
        <div class="section-inner"><a href="{{ url('/training') }}" class="post-back-link">← Kembali ke Training</a>
            <div class="training-detail-hero-grid">
                <div><span class="training-category-pill">{{ $training['category'] }} ·
                        {{ $training['category_group'] }}</span>
                    <h1>{{ $training['title'] }}</h1>
                    <p>{{ $training['description'] }}</p><a href="https://client.progressplus.co.id/" target="_blank"
                        rel="noopener" class="cp-hero-button">Daftar training <span>↗</span></a>
                </div>
                <div class="training-detail-image"><img src="{{ $training['image'] }}"
                        alt="{{ $training['title'] }}"><span>Training<br><strong>Ready.</strong></span></div>
            </div>
        </div>
    </section>
    <section class="training-detail-section">
        <div class="section-inner">
            <div class="training-fact-grid">
                <div><small>Tanggal Pelaksanaan</small><strong>{{ $training['date'] }}</strong></div>
                <div><small>Metode</small><strong>{{ $training['method'] }}</strong></div>
                <div><small>Venue</small><strong>{{ $training['venue'] }}</strong></div>
                <div><small>Kategori</small><strong>{{ $training['category'] }}</strong></div>
            </div>
            <div class="training-content-grid">
                <div>
                    <p class="profile-overline">Tentang program</p>
                    <h2>Bangun kompetensi,<br><span>kerja lebih aman.</span></h2>
                    <p class="training-content-copy">{{ $training['description'] }} Program ini dirancang untuk memastikan
                        peserta memahami aspek teknis, keselamatan, dan tanggung jawab seorang operator dalam aktivitas
                        material handling.</p>
                    <p class="training-content-copy"><strong>Peserta yang disarankan:</strong> {{ $training['audience'] }}
                    </p>
                </div>
                <aside class="training-register-card">
                    <div class="training-register-badge">Investasi program</div>
                    <p class="profile-overline">Mulai langkah berikutnya</p>
                    <div class="training-price">{{ $training['investment'] }}</div>
                    <p class="training-price-note">{{ $training['investment_note'] }}</p>
                    <div class="training-register-divider"></div>
                    <h3>Siap meningkatkan kompetensi?</h3>
                    <p>Amankan tempat Anda dan dapatkan akses ke program yang dirancang untuk kebutuhan kerja nyata.</p>
                    <ul class="training-register-benefits">
                        <li><span>✓</span> Jadwal dan detail program terarah</li>
                        <li><span>✓</span> Pendampingan melalui client portal</li>
                        <li><span>✓</span> Program berbasis kompetensi</li>
                    </ul><a href="https://client.progressplus.co.id/" target="_blank" rel="noopener"
                        class="training-register-button">Daftar sekarang <span>↗</span></a>
                </aside>
            </div>
            <div class="training-detail-columns">
                <div>
                    <p class="profile-overline">Materi pembelajaran</p>
                    <h2>File Syllabus PDF</h2>
                    <p class="training-content-copy">Lihat atau unduh syllabus resmi training. File ini dapat diganti oleh
                        admin melalui field <code>syllabus_file</code> pada data training.</p>
                    <div class="syllabus-pdf-card">
                        <div class="syllabus-pdf-head"><span class="pdf-file-icon">PDF</span>
                            <div><strong>Syllabus Operator Forklift Kelas 2</strong><small>Dokumen program pelatihan</small>
                            </div>
                        </div><iframe src="{{ asset($training['syllabus_file']) }}#toolbar=0"
                            title="Preview syllabus PDF"></iframe>
                        <div class="syllabus-pdf-actions"><a href="{{ asset($training['syllabus_file']) }}" target="_blank"
                                rel="noopener" class="syllabus-pdf-button">Buka PDF ↗</a><a
                                href="{{ asset($training['syllabus_file']) }}" download class="syllabus-pdf-download">Unduh
                                file ↓</a></div>
                    </div>
                </div>
                <div>
                    <p class="profile-overline">Sebelum mendaftar</p>
                    <h2>Persyaratan dokumen</h2>
                    <ul class="training-list training-list--check">
                        @foreach ($training['documents'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="training-detail-cta">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Mulai sekarang</p>
                <h2>Siap jadi operator<br><span>yang lebih kompeten?</span></h2>
            </div><a href="https://client.progressplus.co.id/" target="_blank" rel="noopener" class="cp-hero-button">Daftar
                melalui client <span>↗</span></a>
        </div>
    </section>
    @php
        $testimonials = [
            [
                'quote' =>
                    'Materinya sangat relevan dengan kebutuhan kerja sehari-hari. Tim trainer mampu menjelaskan hal teknis dengan cara yang mudah dipahami.',
                'initials' => 'AS',
                'name' => 'Andi Saputra',
                'role' => 'Peserta Training · Manufaktur',
            ],
            [
                'quote' =>
                    'Programnya terstruktur dan aplikatif. Setelah training, tim kami lebih percaya diri menerapkan standar keselamatan di lapangan.',
                'initials' => 'DR',
                'name' => 'Dewi Rahmawati',
                'role' => 'Client Partner · Oil & Gas',
            ],
            [
                'quote' =>
                    'Pendampingannya tidak berhenti di kelas. Kami mendapatkan perspektif baru untuk membangun kompetensi dan perbaikan yang berkelanjutan.',
                'initials' => 'BM',
                'name' => 'Bima Mahendra',
                'role' => 'Learning Team · Corporate',
            ],
        ];
    @endphp
    <section class="training-testimonial-section">
        <div class="section-inner">
            <div class="training-testimonial-heading">
                <div>
                    <p class="profile-overline">Cerita dari mereka</p>
                    <h2>Belajar bersama,<br><span>bertumbuh bersama.</span></h2>
                </div>
                <p>Pengalaman peserta dan client yang telah bertumbuh melalui program CiptaProgresa.</p>
            </div>
            <div class="training-testimonial-slider" data-testimonial-slider>
                <div class="training-testimonial-track">
                    @foreach ($testimonials as $testimonial)
                        <article class="training-testimonial-card">
                            <div class="training-testimonial-quote">“</div>
                            <p>{{ $testimonial['quote'] }}</p>
                            <div class="training-testimonial-person"><span
                                    class="training-testimonial-avatar">{{ $testimonial['initials'] }}</span>
                                <div><strong>{{ $testimonial['name'] }}</strong><small>{{ $testimonial['role'] }}</small>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="training-testimonial-controls"><button type="button"
                        class="training-testimonial-button js-testimonial-prev" data-testimonial-prev
                        aria-label="Testimonial sebelumnya">←</button>
                    <div class="training-testimonial-dots" role="tablist" aria-label="Pilih testimonial">
                        @foreach ($testimonials as $index => $testimonial)
                            <button type="button" class="js-testimonial-dot" data-testimonial-slide="{{ $index }}"
                                aria-label="Testimonial {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <button type="button" class="training-testimonial-button js-testimonial-next" data-testimonial-next
                        aria-label="Testimonial berikutnya">→</button>
                </div>
            </div>
        </div>
    </section>
@endsection
