@extends('layouts.app')

@section('content')
    <section class="event-page-hero">
        <div class="section-inner">
            <div class="event-page-hero-grid">
                <div>
                    <p class="section-kicker section-kicker--light">Public events</p>
                    <h1 class="event-page-title">Belajar bersama,<br><span>bergerak lebih jauh</span></h1>
                    <p class="event-page-lead">Temukan berbagai event terbaru dari PT. Cipta Progresa Usaha yang penuh dengan
                        inovasi, pengetahuan, dan peluang untuk berkembang bersama kami</p>
                </div>
                <div class="event-page-mark"><img src="{{ asset('assets/images/ciptaprogresa-mark-white.png') }}"
                        class="event-page-logo" alt="CiptaProgresa"><small>Events<br>2026</small></div>
            </div>
        </div>
    </section>
    <section class="event-list-section">
        <div class="section-inner">
            <div class="event-list-heading">
                <div>
                    <p class="profile-overline">Agenda terbaru</p>
                    <h2>Temukan event <span>berikutnya</span></h2>
                </div>
                <p>Ikuti sesi pembelajaran yang dirancang untuk memberi insight praktis dan relevan bagi karier serta
                    organisasi</p>
            </div>
            <div class="public-event-grid">
                @foreach ($events as $slug => $event)
                    <article class="public-event-card">
                        <div class="public-event-image"><img src="{{ $event['image'] }}" alt="{{ $event['title'] }}"><span
                                class="public-event-badge">{{ $event['category'] }}</span></div>
                        <div class="public-event-body">
                            <div class="public-event-date"><strong>29</strong><span>SEP 2026</span></div>
                            <div class="public-event-info">
                                <p class="public-event-meta">{{ $event['date'] }} · {{ $event['time'] }}</p>
                                <h3>{{ $event['title'] }}</h3>
                                <p>{{ $event['subtitle'] }}</p>
                                <div class="public-event-facts"><span>💻
                                        {{ $event['location'] }}</span><strong>{{ $event['price_label'] }}</strong></div><a
                                    href="{{ url('/event/' . $slug) }}" class="blog-read-more">Lihat detail event ↗</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
