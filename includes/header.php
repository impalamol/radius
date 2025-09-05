<section class="topbar">
    <div class="container">
        <div class="row">
            <div class="topbarContent">
                <div class="social">
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-linkedin-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-facebook-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-instagram-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-twitter-logo"></i></a>
                    <a href="#" class="socialIcon"><i class="ph-duotone ph-youtube-logo"></i></a>
                </div>
                <div class="quickLinks">
                    <a href="">Quick Enquiry</a>
                    <div class="vr"></div>
                    <a href="">Careers</a>
                </div>
            </div>
        </div>
    </div>
</section>
<header>
    <div class="container d-none d-xl-block">
        <div class="row">
            <div class="headerContent">
                <div class="logo">
                    <img src="assets/media/shanti-instruments-logo.png" alt="Shanti Instruments">
                </div>
                <div class="headerContacts">
                    <div class="contactChip">
                        <span><i class="ph-duotone ph-mailbox"></i> Email</span>
                        <a href="mailto:marketing@shanti-instruments.com">marketing@shanti-instruments.com</a>
                    </div>
                    <div class="vr"></div>
                    <div class="contactChip">
                        <span><i class="ph-duotone ph-phone"></i> Phone</span>
                        <div class="phoneSet">
                            <a href="tel:+919607936627">+91 9607 9366 27</a>
                            <a href="tel:+919607936628">/ 28</a>
                            <a href="tel:+919607936629">/ 29</a>
                            <a href="tel:+919607936630">/ 30</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-block d-xl-none" href="#"><img src="assets/media/shanti-instruments-logo.png"
                    alt="Shanti Instruments"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav gap-3 me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'home') ? 'active' : ''; ?>"" href="index">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'about') ? 'active' : ''; ?>" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'products') ? 'active' : ''; ?>" href="products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage === 'blogs') ? 'active' : ''; ?>"" href="blogs">Blogs</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-primary"  href="contact"><i class="ph-duotone ph-headset"></i> Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

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