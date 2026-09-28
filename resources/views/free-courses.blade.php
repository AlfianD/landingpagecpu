@extends('layouts.app')

@section('content')
    <section class="free-course-hero">
        <div class="section-inner">
            <p class="section-kicker section-kicker--light">Free learning access</p>
            <h1>Belajar gratis,<br><span>bertumbuh lebih siap</span></h1>
            <p>Video training pilihan dari CiptaProgresa untuk membantu Anda memahami keselamatan kerja, kompetensi, dan
                perbaikan bisnis kapan saja.</p>
        </div>
    </section>
    <section class="free-course-list-section">
        <div class="section-inner">
            <div class="free-course-heading">
                <div>
                    <p class="profile-overline">Video pilihan</p>
                    <h2>Mulai dari topik yang<br><span>paling relevan</span></h2>
                </div>
                <p>Akses materi pengantar dan dokumentasi training dari kanal YouTube Cipta Progresa. Klik kartu untuk
                    melihat deskripsi lengkap dan menonton videonya.</p>
            </div>
            <div class="training-browser">
                <div class="training-search-wrap"><span aria-hidden="true">⌕</span><label class="sr-only"
                        for="freeCourseSearch">Cari Free-Course</label><input id="freeCourseSearch" type="search"
                        placeholder="Cari video atau topik..." autocomplete="off"></div><label class="sr-only"
                    for="freeCourseCategoryFilter">Filter kategori Free-Course</label><select id="freeCourseCategoryFilter"
                    class="training-filter">
                    <option value="all">Semua kategori</option>
                    @foreach (collect($freeCourses)->pluck('category')->unique() as $category)
                        <option value="{{ strtolower($category) }}">{{ $category }}</option>
                    @endforeach
                </select>
                <button type="button" id="freeCourseResetFilter" class="training-filter-reset">Reset</button>
            </div>
            <p class="training-results" id="freeCourseResults" aria-live="polite"></p>
            <div class="free-course-grid" id="freeCourseGrid">
                @foreach ($freeCourses as $slug => $course)
                    <a href="{{ url('/free-course/' . $slug) }}" class="free-course-card js-free-course-card"
                        data-title="{{ strtolower($course['title'] . ' ' . $course['summary']) }}"
                        data-category="{{ strtolower($course['category']) }}">
                        <div class="free-course-thumb"><img
                                src="https://i.ytimg.com/vi/{{ $course['video_id'] }}/hqdefault.jpg"
                                alt="{{ $course['title'] }}"><span class="free-course-play">▶</span></div>
                        <div class="free-course-card-body">
                            <div class="free-course-card-meta">
                                <span>{{ $course['category'] }}</span><small>{{ $course['duration'] }}</small>
                            </div>
                            <h3>{{ $course['title'] }}</h3>
                            <p>{{ $course['summary'] }}</p><span class="free-course-card-link">Pelajari &amp; tonton
                                <b>↗</b></span>
                        </div>
                    </a>
                @endforeach
            </div>
            <p class="training-empty" id="freeCourseEmpty" hidden>Free-Course yang Anda cari belum tersedia.</p>
        </div>
        </div>
    </section>
    <section class="free-course-cta">
        <div class="section-inner">
            <div>
                <p class="profile-overline profile-overline--light">Terus belajar</p>
                <h2>Kompetensi tumbuh<br>ketika <span>dipraktikkan.</span></h2>
            </div><a href="{{ url('/training') }}" class="cp-hero-button">Lihat training berbayar <span>↗</span></a>
        </div>
    </section>
@endsection
