@extends('layouts.app')

@section('content')
    <section class="career-hero">
        <div class="section-inner">
            <div class="career-hero-grid">
                <div>
                    <p class="section-kicker section-kicker--light">Karier di CiptaProgresa</p>
                    <h1>Temukan pekerjaan <span>impianmu</span></h1>
                    <p>Pilihan lowongan pekerjaan dari perusahaan yang percaya pada pertumbuhan manusia, kolaborasi, dan
                        dampak yang berarti</p><a href="#lowongan" class="cp-hero-button">Lihat lowongan <span>↓</span></a>
                </div>
                <div class="career-hero-art">
                    <div class="career-art-main"><img
                            src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=85"
                            alt="Tim CiptaProgresa berkolaborasi">
                        <div class="career-art-overlay"><strong>Grow<br>with us.</strong><span>People · Progress ·
                                Purpose</span></div>
                    </div>
                    <div class="career-art-card"><img src="{{ asset('assets/images/ciptaprogresa-mark-white.png') }}"
                            class="career-art-logo" alt="CiptaProgresa"><small>Join the<br>movement</small></div>
                </div>
            </div>
        </div>
    </section>
    <section id="lowongan" class="career-list-section">
        <div class="section-inner">
            <div class="career-section-heading">
                <div>
                    <p class="profile-overline">Peluang yang tersedia</p>
                    <h2>Mulai chapter baru <span>bersama kami</span></h2>
                </div>
                <p>Kami mencari individu yang ingin membawa energi, ide, dan keahlian untuk membantu lebih banyak organisasi
                    bertumbuh</p>
            </div>
            <div class="career-job-list">
                @foreach ($jobs as $slug => $job)
                    <article class="career-job-card">
                        <div class="career-job-index">0{{ $loop->iteration }}</div>
                        <div class="career-job-main">
                            <div class="career-job-label">{{ $job['department'] }} · {{ $job['type'] }}</div>
                            <h3>{{ $job['display_title'] }}</h3>
                            <p>{{ $job['short_description'] }}</p>
                            <div class="career-job-meta"><span>⌖ {{ $job['location'] }}</span><span>◷ Deadline:
                                    {{ $job['deadline'] }}</span></div>
                        </div><a href="{{ url('/karier/' . $slug) }}" class="career-job-arrow"
                            aria-label="Lihat detail {{ $job['display_title'] }}">↗</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="career-values-section">
        <div class="section-inner">
            <div class="career-values-heading">
                <p class="profile-overline profile-overline--light">Cara kami bekerja</p>
                <h2>Kerja yang punya <span>arti</span></h2>
            </div>
            <div class="career-values-grid">
                <div><strong>01</strong>
                    <h3>Learn</h3>
                    <p>Kami terus belajar dari pengalaman, data, dan satu sama lain.</p>
                </div>
                <div><strong>02</strong>
                    <h3>Connect</h3>
                    <p>Kami membangun relasi yang hangat, terbuka, dan saling menguatkan.</p>
                </div>
                <div><strong>03</strong>
                    <h3>Create</h3>
                    <p>Kami mengubah ide menjadi solusi yang memberi dampak nyata.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="career-contact-section">
        <div class="section-inner">
            <div class="career-contact-box">
                <div>
                    <p class="profile-overline">Belum menemukan posisi yang sesuai?</p>
                    <h2>Tetap kenalkan dirimu<br><span>kepada kami</span></h2>
                </div><a href="{{ url('/') }}#footer" class="cp-hero-button">Hubungi kami <span>→</span></a>
            </div>
        </div>
    </section>
@endsection
