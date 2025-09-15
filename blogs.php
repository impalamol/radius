<?php
$currentPage = 'blogs';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/styles.php'; ?>
    <title>Rishabh Radius | Blogs</title>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="breadcrumbs"
            style="background: url(assets/media/breadcrumbs/blogs.jpg) no-repeat center/cover">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbContent">
                        <h2>Our Blogs</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs">
            <div class="container">
                <div class="row">
                    <div class="pgHeader centered">
                        <div class="pgTitle">
                            <div class="pgSection">Our Blogs</div>
                            <h2>Solar Energy Insights & Updates</h2>
                            <p>Stay updated with the latest solar energy trends, government policies, installation
                                guides, and industry insights from our team of experts.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                        <div class="blogCard">
                            <figure>
                                <img src="assets/media/blogs/blog1.jpg"
                                    alt="Complete Guide to Solar Panel Installation in 2025"
                                    title="Complete Guide to Solar Panel Installation in 2025">
                            </figure>
                            <div class="blogContent">
                                <h3>Complete Guide to Solar Panel Installation in 2025</h3>
                                <p>Everything you need to know about installing solar panels in your home, from planning
                                    to maintenance.</p>
                                <a href="blog-details" class="btn-link stretched-link">Read More <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                        <div class="blogCard">
                            <figure>
                                <img src="assets/media/blogs/blog2.jpg"
                                    alt="PM Suryaghar Yojana: New Updates and Benefits"
                                    title="PM Suryaghar Yojana: New Updates and Benefits">
                            </figure>
                            <div class="blogContent">
                                <h3>PM Suryaghar Yojana: New Updates and Benefits</h3>
                                <p>Latest updates on the government solar scheme and how to maximize your benefits under
                                    the new guidelines.</p>
                                <a href="blog-details" class="btn-link stretched-link">Read More <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>