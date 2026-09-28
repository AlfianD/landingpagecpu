$(function () {
    function openDropdown($button) {
        var target = $button.data('target');
        $('.js-dropdown-toggle').not($button).removeClass('is-open').attr('aria-expanded', 'false');
        $('.js-dropdown').not(target).stop(true, true).fadeOut(140);
        $button.addClass('is-open').attr('aria-expanded', 'true');
        $(target).stop(true, true).fadeIn(140);
    }

    function closeDropdown($group) {
        var $button = $group.find('.js-dropdown-toggle');
        $button.removeClass('is-open').attr('aria-expanded', 'false');
        $group.find('.js-dropdown').stop(true, true).fadeOut(140);
    }

    $('.js-dropdown-toggle').on('click', function (event) {
        event.preventDefault();
        var $button = $(this);
        var target = $button.data('target');
        $('.js-dropdown-toggle').not($button).removeClass('is-open').attr('aria-expanded', 'false');
        $('.js-dropdown').not(target).stop(true, true).fadeOut(140);
        if ($button.hasClass('is-open')) {
            closeDropdown($button.closest('.nav-group'));
        } else {
            openDropdown($button);
        }
    });

    $('.nav-group').on('mouseenter', function () {
        openDropdown($(this).find('.js-dropdown-toggle'));
    }).on('mouseleave', function () {
        closeDropdown($(this));
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.nav-group').length) {
            $('.js-dropdown-toggle').removeClass('is-open').attr('aria-expanded', 'false');
            $('.js-dropdown').stop(true, true).fadeOut(140);
        }
    });

    $('.js-mobile-toggle').on('click', function () {
        var $menu = $('.js-mobile-menu');
        $menu.stop(true, true).slideToggle(180).toggleClass('is-open');
        $(this).attr('aria-expanded', $menu.hasClass('is-open') ? 'true' : 'false');
    });

    $('.js-mobile-menu a').on('click', function () {
        $('.js-mobile-menu').stop(true, true).slideUp(180).removeClass('is-open');
        $('.js-mobile-toggle').attr('aria-expanded', 'false');
    });

    var $slides = $('.js-flyer-slide');
    var active = 0;
    var timer;

    function showSlide(index) {
        if (!$slides.length) return;
        active = (index + $slides.length) % $slides.length;
        $slides.removeClass('is-active').eq(active).addClass('is-active');
        $('.js-slide-caption').text($slides.eq(active).data('caption'));
        $('.js-slide-count').text(String(active + 1).padStart(2, '0') + ' / ' + String($slides.length).padStart(2, '0'));
    }

    function restartSlider() {
        clearInterval(timer);
        timer = setInterval(function () { showSlide(active + 1); }, 6500);
    }

    $('.js-slide-prev').on('click', function () { showSlide(active - 1); restartSlider(); });
    $('.js-slide-next').on('click', function () { showSlide(active + 1); restartSlider(); });
    showSlide(0);
    restartSlider();
});


$(document).on('click', '.blog-filter', function () {
    var $button = $(this);
    var filter = $button.data('filter');
    $('.blog-filter').removeClass('is-active');
    $button.addClass('is-active');
    $('.blog-article-card').each(function () {
        var match = filter === 'all' || $(this).data('category') === filter;
        $(this).toggleClass('is-hidden', !match);
    });
});


$(document).on('submit', '.event-registration-form', function (event) {
    event.preventDefault();
    var $form = $(this);
    $form.find('.registration-success').remove();
    $form.prepend('<div class="registration-success" role="status"><strong>Data siap dikirim.</strong><span>Hubungkan form ini ke endpoint Laravel untuk menyimpan pendaftaran dan mengirim konfirmasi email.</span></div>');
    $form.find('button[type="submit"]').text('Pendaftaran disiapkan ✓');
});


$(document).on('submit', '.schedule-download-form', function (event) {
    event.preventDefault();
    var form = this;
    var $form = $(form);
    $form.find('.schedule-download-success').remove();
    $form.prepend('<div class="schedule-download-success" role="status"><strong>Terima kasih, data Anda sudah diterima.</strong><span>Download jadwal pelatihan akan dimulai.</span></div>');
    var link = document.createElement('a');
    link.href = form.action;
    link.download = 'jadwal-pelatihan-ciptaprogresa-2026.pdf';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    $form.find('button[type="submit"]').text('PDF berhasil disiapkan ✓');
});


$(document).on('submit', '.career-application-form', function (event) {
    event.preventDefault();
    var $form = $(this);
    $form.find('.application-success').remove();
    $form.prepend('<div class="application-success" role="status"><strong>Lamaran siap dikirim.</strong><span>Hubungkan form ini ke endpoint Laravel untuk menyimpan data kandidat dan file CV.</span></div>');
    $form.find('button[type="submit"]').text('Lamaran disiapkan ✓');
});


$(function () {
    $('.gallery-filter').on('click', function () {
        var filter = $(this).data('gallery-filter');
        $('.gallery-filter').removeClass('is-active');
        $(this).addClass('is-active');
        $('.gallery-item').each(function () {
            var visible = filter === 'all' || $(this).data('gallery-category') === filter;
            $(this).toggleClass('is-hidden', !visible);
        });
    });

    $('.gallery-item').on('click', function () {
        var $lightbox = $('.gallery-lightbox');
        $lightbox.find('img').attr('src', $(this).data('gallery-image')).attr('alt', $(this).data('gallery-title'));
        $lightbox.find('p').text($(this).data('gallery-title'));
        $lightbox.addClass('is-visible').attr('aria-hidden', 'false');
        $('body').addClass('lightbox-open');
    });

    $('.gallery-lightbox-close, .gallery-lightbox').on('click', function (event) {
        if (event.target !== this && !$(event.target).hasClass('gallery-lightbox-close')) return;
        $('.gallery-lightbox').removeClass('is-visible').attr('aria-hidden', 'true');
        $('body').removeClass('lightbox-open');
    });

    $(document).on('keydown', function (event) {
        if (event.key === 'Escape') {
            $('.gallery-lightbox').removeClass('is-visible').attr('aria-hidden', 'true');
            $('body').removeClass('lightbox-open');
        }
    });
});


$(document).on('submit', '#clinicClientForm', function (event) {
    event.preventDefault();
    var $form = $(this);
    $form.find('.clinic-success').remove();
    $form.prepend('<div class="clinic-success" role="status"><strong>Permintaan diskusi siap diproses.</strong><span>Hubungkan form ini ke endpoint Laravel untuk menyimpan biodata ke data admin dan mengirim notifikasi.</span></div>');
    $form.find('button[type="submit"]').text('Permintaan disiapkan ✓');
});


$(function () {
    var $trainingCards = $('.js-training-card');
    if (!$trainingCards.length) return;

    var $search = $('#trainingSearch');
    var $category = $('#trainingCategoryFilter');
    var $empty = $('#trainingEmpty');
    var $results = $('#trainingResults');

    function filterTrainingCards() {
        var query = ($search.val() || '').toLowerCase().trim();
        var category = $category.val() || 'all';
        var visible = 0;
        $trainingCards.each(function () {
            var $card = $(this);
            var matchesQuery = !query || ($card.data('title') + ' ' + $card.data('method')).indexOf(query) !== -1;
            var matchesCategory = category === 'all' || $card.data('category') === category;
            var show = matchesQuery && matchesCategory;
            $card.toggle(show);
            if (show) visible += 1;
        });
        $empty.prop('hidden', visible !== 0);
        $results.text(visible + ' program tersedia');
    }

    $search.on('input', filterTrainingCards);
    $category.on('change', filterTrainingCards);
    $('#trainingResetFilter').on('click', function () {
        $search.val('');
        $category.val('all');
        filterTrainingCards();
    });
    filterTrainingCards();
});


$(function () {
    var $freeCourseCards = $('.js-free-course-card');
    if (!$freeCourseCards.length) return;

    var $search = $('#freeCourseSearch');
    var $category = $('#freeCourseCategoryFilter');
    var $empty = $('#freeCourseEmpty');
    var $results = $('#freeCourseResults');

    function filterFreeCourses() {
        var query = ($search.val() || '').toLowerCase().trim();
        var category = $category.val() || 'all';
        var visible = 0;
        $freeCourseCards.each(function () {
            var $card = $(this);
            var matchesQuery = !query || String($card.data('title')).indexOf(query) !== -1;
            var matchesCategory = category === 'all' || String($card.data('category')) === category;
            var show = matchesQuery && matchesCategory;
            $card.toggle(show);
            if (show) visible += 1;
        });
        $empty.prop('hidden', visible !== 0);
        $results.text(visible + ' video tersedia');
    }

    $search.on('input', filterFreeCourses);
    $category.on('change', filterFreeCourses);
    $('#freeCourseResetFilter').on('click', function () {
        $search.val('');
        $category.val('all');
        filterFreeCourses();
    });
    filterFreeCourses();
});


(function () {
    function initTestimonialSliders() {
        document.querySelectorAll('[data-testimonial-slider]').forEach(function (slider) {
            var track = slider.querySelector('.training-testimonial-track');
            var cards = Array.from(slider.querySelectorAll('.training-testimonial-card'));
            var dots = Array.from(slider.querySelectorAll('[data-testimonial-slide]'));
            var previous = slider.querySelector('[data-testimonial-prev]');
            var next = slider.querySelector('[data-testimonial-next]');
            var current = 0;
            var timer;
            var startX = 0;
            var deltaX = 0;
            var dragging = false;

            if (!track || cards.length < 1) return;

            function goTo(index, animate) {
                current = (index + cards.length) % cards.length;
                track.style.transition = animate === false ? 'none' : '';
                track.style.transform = 'translate3d(-' + (current * 100) + '%, 0, 0)';
                cards.forEach(function (card, i) { card.classList.toggle('is-active', i === current); });
                dots.forEach(function (dot, i) { dot.classList.toggle('is-active', i === current); });
            }
            function restart() {
                window.clearInterval(timer);
                timer = window.setInterval(function () { goTo(current + 1); }, 6000);
            }
            function stopDrag() {
                if (!dragging) return;
                dragging = false;
                slider.classList.remove('is-dragging');
                track.style.transition = '';
                if (Math.abs(deltaX) > 45) goTo(current + (deltaX < 0 ? 1 : -1)); else goTo(current);
                deltaX = 0;
                restart();
            }
            previous && previous.addEventListener('click', function () { goTo(current - 1); restart(); });
            next && next.addEventListener('click', function () { goTo(current + 1); restart(); });
            dots.forEach(function (dot) { dot.addEventListener('click', function () { goTo(Number(dot.dataset.testimonialSlide)); restart(); }); });
            slider.addEventListener('pointerdown', function (event) {
                if (event.target.closest('button')) return;
                dragging = true;
                startX = event.clientX;
                deltaX = 0;
                slider.classList.add('is-dragging');
                track.style.transition = 'none';
                if (slider.setPointerCapture) slider.setPointerCapture(event.pointerId);
            });
            slider.addEventListener('pointermove', function (event) {
                if (!dragging) return;
                deltaX = event.clientX - startX;
                var width = slider.clientWidth || 1;
                track.style.transform = 'translate3d(' + ((current * -100) + (deltaX / width * 100)) + '%, 0, 0)';
            });
            slider.addEventListener('pointerup', stopDrag);
            slider.addEventListener('pointercancel', stopDrag);
            slider.addEventListener('pointerleave', stopDrag);
            goTo(0, false);
            restart();
        });
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initTestimonialSliders); else initTestimonialSliders();
})();


(function () {
    function initConsultingFilter() {
        var cards = Array.from(document.querySelectorAll('.js-consulting-card'));
        if (!cards.length) return;
        var search = document.getElementById('consultingSearch');
        var category = document.getElementById('consultingCategoryFilter');
        var reset = document.getElementById('consultingResetFilter');
        var empty = document.getElementById('consultingEmpty');
        var results = document.getElementById('consultingResults');
        function filter() {
            var query = (search.value || '').toLowerCase().trim();
            var selected = category.value || 'all';
            var visible = 0;
            cards.forEach(function (card) {
                var matchTitle = !query || card.dataset.title.indexOf(query) !== -1;
                var matchCategory = selected === 'all' || card.dataset.category === selected;
                var show = matchTitle && matchCategory;
                card.hidden = !show;
                if (show) visible += 1;
            });
            empty.hidden = visible !== 0;
            results.textContent = visible + ' layanan tersedia';
        }
        search.addEventListener('input', filter);
        category.addEventListener('change', filter);
        reset.addEventListener('click', function () { search.value = ''; category.value = 'all'; filter(); });
        filter();
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initConsultingFilter); else initConsultingFilter();
})();
