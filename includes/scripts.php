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

<script>
    var swiper = new Swiper(".heroSwiper", {
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    var swiper = new Swiper(".applicationIndustry", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: 1.2,
        spaceBetween: 20,
        breakpoints: {
            640: {
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 2.2,
                spaceBetween: 20,
            },
            1400: {
                slidesPerView: 3.2,
                spaceBetween: 20,
            },
        },
    });
</script>
<script>
    var swiper = new Swiper(".collaborationSwiper", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: 6,
        spaceBetween: 30,
        breakpoints: {
            0: { slidesPerView: 2 },
            576: { slidesPerView: 3 },
            768: { slidesPerView: 5 },
            992: { slidesPerView: 6 }
        }
    });
</script>
<script>
    var testimonialThumbs = new Swiper(".testimonialThumbs", {
        direction: "vertical",
        slidesPerView: 3,
        spaceBetween: 15,
        watchSlidesProgress: true,
    });

    var testimonialContent = new Swiper(".testimonialSwiper", {
        effect: "fade",
        fadeEffect: {
            crossFade: true   // ensures previous slide fades OUT completely
        },
        autoHeight: true,
        thumbs: {
            swiper: testimonialThumbs,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });

</script>
<script>
    // === Thumbs Gallery ===
    const thumbs = new Swiper(".thumbs", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
                breakpoints: {
            0: { slidesPerView: 3 },
            576: { slidesPerView: 4 },
            768: { slidesPerView: 5 },
            992: { slidesPerView: 6 }
        }
    });
    // Swiper Gallery
    new Swiper(".swiperGallery", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        thumbs: { swiper: thumbs },
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const images = document.querySelectorAll('.revealImg');
        const sections = document.querySelectorAll('.revealContent');

        if (!images.length || !sections.length) {
            console.error('No images or sections found!');
            return;
        }

        // Only apply IntersectionObserver for medium and larger screens
        if (window.innerWidth >= 768) {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            const index = entry.target.getAttribute('data-index');
                            console.log(`Section ${index} is intersecting`);
                            images.forEach((img) => {
                                img.classList.toggle('active', img.getAttribute('data-index') === index);
                            });
                            sections.forEach((section) => {
                                section.classList.toggle('active', section.getAttribute('data-index') === index);
                            });
                        }
                    });
                },
                {
                    threshold: 0.3, // Trigger when 30% of section is visible
                    rootMargin: '0px 0px -20% 0px' // Trigger earlier for smoother transitions
                }
            );

            sections.forEach((section) => {
                observer.observe(section);
                console.log(`Observing section ${section.getAttribute('data-index')}`);
            });
        }
    });
</script>
<script>
    var currentYear = new Date().getFullYear();
    document.getElementById("year").textContent = currentYear;
</script>