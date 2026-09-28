@extends('layouts.app')

@section('content')
    <section class="free-course-detail-hero">
        <div class="section-inner"><a href="{{ url('/free-course') }}" class="post-back-link free-course-back">← Kembali ke
                Free-Course</a>
            <div class="free-course-detail-heading">
                <div><span class="free-course-category">{{ $course['category'] }}</span>
                    <h1>{{ $course['title'] }}</h1>
                    <p>{{ $course['summary'] }}</p>
                </div>
                <div class="free-course-source">{{ $course['source'] }}<small>{{ $course['duration'] }}</small></div>
            </div>
        </div>
    </section>
    <section class="free-course-detail-section">
        <div class="section-inner">
            <div class="free-course-detail-grid">
                <div>
                    <div class="free-course-video"><iframe
                            src="https://www.youtube.com/embed/{{ $course['video_id'] }}?rel=0"
                            title="{{ $course['title'] }}"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe></div>
                    <p class="free-course-video-note">Video berasal dari kanal YouTube Cipta Progresa Training And
                        Consulting.</p>
                </div>
                <aside class="free-course-detail-card">
                    <p class="profile-overline">Tentang materi</p>
                    <h2>Belajar dengan konteks yang <span>nyata</span></h2>
                    <p>{{ $course['description'] }}</p>
                    <div class="free-course-topic-label">Yang akan Anda temukan</div>
                    <ul>
                        @foreach ($course['topics'] as $topic)
                            <li><span>✓</span>{{ $topic }}</li>
                        @endforeach
                    </ul><a href="https://www.youtube.com/watch?v={{ $course['video_id'] }}" target="_blank" rel="noopener"
                        class="free-course-youtube-link">Buka di YouTube <span>↗</span></a>
                </aside>
            </div>
        </div>
    </section>
    <section class="free-course-detail-cta">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Butuh pendalaman?</p>
                <h2>Temukan program yang<br><span>sesuai kebutuhan Anda</span></h2>
            </div><a href="{{ url('/training') }}" class="cp-hero-button">Jelajahi training <span>↗</span></a>
        </div>
    </section>
@endsection
