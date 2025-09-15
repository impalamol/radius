<section class="topbar">
    <div class="container">
        <div class="row">
            <div class="topbarContent">
                <div class="quickLinks">
                    <a href="mailto:inverters@rishabh.co.in"><i class="ph-duotone ph-envelope"></i> inverters@rishabh.co.in</a>
                    <div class="vr"></div>
                    <a href="tel:+91 7888028877"><i class="ph-duotone ph-phone-call"></i> +91 78 8802 8877</a>
                </div>

                <div class="social">
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-linkedin-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-facebook-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-instagram-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-twitter-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-youtube-logo"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/media/radius-logo.png" alt="Rishabh Radius">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto gap-3">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>" aria-current="page" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>" href="about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'products') ? 'active' : ''; ?>" href="products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'blogs') ? 'active' : ''; ?>" href="blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'downloads') ? 'active' : ''; ?>" href="downloads">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($currentPage === 'offices') ? 'active' : ''; ?>" href="offices-directions">Offices & Directions</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn-link" href="contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="aboutVideo" tabindex="-1" aria-labelledby="aboutVideoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="aboutVideoLabel">Video Title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                        allowfullscreen></iframe>
                    <iframe id="youtubeIframe" width="100%" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                        title="YouTube video" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>