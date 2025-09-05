<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<!-- Loader -->
<script>
    (function () {
        'use strict';

        document.addEventListener('DOMContentLoaded', function () {

            /* Progress loader using imagesLoaded when available, fallback incremental progress */
            (function () {
                const progressBar = document.querySelector('.progress-bar');
                const loader = document.querySelector('.progressLoader');

                if (!progressBar || !loader) return;

                const setProgress = (p) => {
                    const pct = Math.min(100, Math.max(0, Math.round(p)));
                    progressBar.style.width = pct + '%';
                    if (progressBar.parentElement) {
                        progressBar.parentElement.setAttribute('aria-valuenow', pct);
                    }
                };

                const hideLoader = () => {
                    loader.style.transition = 'opacity 300ms ease';
                    loader.style.opacity = '0';
                    setTimeout(() => { loader.style.display = 'none'; }, 350);
                };

                // If imagesLoaded is available, use it to compute real progress
                if (typeof imagesLoaded === 'function') {
                    const imgLoad = imagesLoaded(document, { background: true });
                    // initialize fallback progress up to 90%
                    let fallback = 0;
                    const fallbackInterval = setInterval(() => {
                        if (fallback < 90) setProgress(++fallback);
                        else clearInterval(fallbackInterval);
                    }, 20);

                    imgLoad.on('progress', function (instance) {
                        const loadedCount = instance.images.filter(i => i.isLoaded).length;
                        const percent = Math.round((loadedCount / instance.images.length) * 100);
                        setProgress(percent);
                    });

                    imgLoad.on('done', function () {
                        setProgress(100);
                        clearInterval(fallbackInterval);
                        setTimeout(hideLoader, 100);
                    });

                } else {
                    // no imagesLoaded: simple animated progress to completion on window load or timeout
                    let p = 0;
                    const interval = setInterval(() => {
                        p += 1;
                        setProgress(p);
                        if (p >= 100) {
                            clearInterval(interval);
                            hideLoader();
                        }
                    }, 20);

                    window.addEventListener('load', () => {
                        setProgress(100);
                        clearInterval(interval);
                        setTimeout(hideLoader, 100);
                    });
                }
            })();

            /* Swiper initialization (responsive) */
            (function () {
                if (typeof Swiper === 'undefined') return;
                if (!document.querySelector('.mySwiper')) return;

                new Swiper('.mySwiper', {
                    slidesPerView: 4,
                    spaceBetween: 0,
                    pagination: { el: '.swiper-pagination', clickable: true },
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        576: { slidesPerView: 2 },
                        768: { slidesPerView: 3 },
                        992: { slidesPerView: 4 }
                    }
                });
            })();
            (function () {
                if (typeof Swiper === 'undefined') return;
                if (!document.querySelector('.studentSwiper')) return;

                new Swiper('.studentSwiper', {
                    slidesPerView: "auto",
                    spaceBetween: 24,
                    pagination: { el: '.swiper-pagination', clickable: true },
                    breakpoints: {
                        0: { slidesPerView: 1.5 },
                        576: { slidesPerView: 2.5 },
                        768: { slidesPerView: 3.5 },
                        992: { slidesPerView: 4.5 }
                    }
                });
            })();
            (function () {
                if (typeof Swiper === 'undefined') return;
                if (!document.querySelector('.collaborationSwiper')) return;

                new Swiper('.collaborationSwiper', {
                    slidesPerView: 6,
                    spaceBetween: 30,
                    autoplay: { delay: 3000, disableOnInteraction: false },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        0: { slidesPerView: 2 },
                        576: { slidesPerView: 3 },
                        768: { slidesPerView: 5 },
                        992: { slidesPerView: 7 }
                    }
                });
            })();
            /* Accordion: single active card */
            (function () {
                const cards = document.querySelectorAll('.accordionCard');
                if (!cards.length) return;
                cards.forEach(card => {
                    card.addEventListener('click', () => {
                        cards.forEach(c => c.classList.remove('active'));
                        card.classList.add('active');
                    });
                });
            })();

            /* Popup Gallery (keeps Magnific Popup jQuery plugin usage) */
            (function () {
                if (window.jQuery && $.fn && $.fn.magnificPopup) {
                    $(function () {
                        $('.popupGallery').magnificPopup({
                            delegate: 'a',
                            type: 'image',
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0, 1]
                            },
                            keyboard: {
                                enabled: true,
                                left: true,
                                right: true,
                                escKey: true
                            },
                            mainClass: 'mfp-fade',
                            removalDelay: 300
                        });
                    });
                }
            })();

            /* Grid gallery auto-row sizing with debounce and imagesLoaded support */
            (function () {
                const grid = document.querySelector('.gridGallery');
                if (!grid) return;

                const resizeGridItem = (item) => {
                    if (!item) return;
                    const rowHeight = parseInt(getComputedStyle(grid).getPropertyValue('grid-auto-rows')) || 10;
                    const rowGap = parseInt(getComputedStyle(grid).getPropertyValue('grid-row-gap')) || 0;
                    const figure = item.querySelector('figure') || item;
                    const height = figure.getBoundingClientRect().height;
                    const rowSpan = Math.ceil((height + rowGap) / (rowHeight + rowGap));
                    item.style.gridRowEnd = 'span ' + rowSpan;
                };

                const resizeAllGridItems = () => {
                    const items = Array.from(grid.getElementsByClassName('item'));
                    items.forEach(resizeGridItem);
                };

                const debounce = (fn, wait = 100) => {
                    let t;
                    return (...args) => { clearTimeout(t); t = setTimeout(() => fn(...args), wait); };
                };

                if (typeof imagesLoaded === 'function') {
                    imagesLoaded(grid, { background: true }, function () {
                        resizeAllGridItems();
                    });
                } else {
                    window.addEventListener('load', resizeAllGridItems);
                }

                window.addEventListener('resize', debounce(resizeAllGridItems, 150));

                // ensure each item recalculates when its images load
                Array.from(grid.getElementsByClassName('item')).forEach(item => {
                    if (typeof imagesLoaded === 'function') {
                        imagesLoaded(item, () => resizeGridItem(item));
                    }
                });
            })();

            /* Lazy load images via IntersectionObserver with fallback */
            (function () {
                const lazyImages = Array.from(document.querySelectorAll('img[data-src]'));
                if (!lazyImages.length) return;

                const loadImage = (img) => {
                    const src = img.getAttribute('data-src');
                    if (!src) return;
                    img.src = src;
                    img.removeAttribute('data-src');
                };

                if ('IntersectionObserver' in window) {
                    const io = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                loadImage(entry.target);
                                observer.unobserve(entry.target);
                            }
                        });
                    }, { rootMargin: '200px 0px' });

                    lazyImages.forEach(img => io.observe(img));
                } else {
                    // fallback: throttled scroll check
                    const throttle = (fn, wait = 200) => {
                        let last = 0;
                        return function (...args) {
                            const now = Date.now();
                            if (now - last >= wait) {
                                last = now;
                                fn.apply(this, args);
                            }
                        };
                    };

                    const onScroll = throttle(() => {
                        lazyImages.forEach(img => {
                            if (img.getAttribute('data-src') && (window.scrollY + window.innerHeight + 200) > img.offsetTop) {
                                loadImage(img);
                            }
                        });
                    }, 200);

                    window.addEventListener('scroll', onScroll);
                    window.addEventListener('resize', onScroll);
                    onScroll();
                }
            })();

        }); // DOMContentLoaded

    })();

    var currentYear = new Date().getFullYear();
    document.getElementById("year").textContent = currentYear;
</script>