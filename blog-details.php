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
    <title>Rishabh Radius | Blog Details</title>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="breadcrumbs"
            style="background: url(assets/media/breadcrumbs/blog-details.jpg) no-repeat center/cover">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbContent">
                        <h2>Blog Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item"><a href="blogs">Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Complete Guide to Solar Panel
                                    Installation in 2025</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogDetails">
            <div class="container">
                <div class="row flex-lg-row-reverse">
                    <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-8 offset-lg-1 offset-xl-1 offset-xl-1 mb-3">
                        <article class="blogContent">
                            <h1>Complete Guide to Solar Panel Installation in 2025</h1>
                            <figure class="blogHero">
                                <img src="assets/media/blogs/blog1.jpg" alt="Blog 1" />
                            </figure>
                            <p>Thinking about making the switch to solar? 2025 is the perfect time, with advanced
                                technology and attractive government incentives making it easier than ever. Here’s a
                                quick guide to kickstart your journey to energy independence.
                            </p>
                            <h5>Step 1: Consultation & Assessment</h5>
                            <p>It all begins with a professional site assessment. A solar expert will evaluate your
                                roof’s structure, sunlight exposure, and your home’s energy needs to recommend the
                                perfect system size for you.</p>
                            <h5>Step 2: Design & Documentation</h5>
                            <p>Based on the assessment, a custom solar plan is designed, detailing the placement of
                                panels, wiring, and the inverter. The company will handle all necessary paperwork and
                                permits, including applications for government subsidies under schemes like PM Surya
                                Ghar.</p>
                            <h5>Step 3: Installation Day</h5>
                            <p>Once approvals are in place, the installation team gets to work. This typically takes
                                just a few days. They’ll securely mount the solar panels, install the inverter, and
                                connect the system to your home’s electrical panel.</p>
                        </article>
                        <div class="pagination">
                            <div class="previous">
                                <a href="#" class="paginationLink">
                                    <i class="fi fi-arrow-left-l"></i>
                                    <span class="paginationText">
                                        Previous Post<br>
                                        <span class="titleLink">But I must explain to you how all this mistaken
                                            idea of denouncing</span>
                                    </span>
                                </a>
                            </div>
                            <div class="next">
                                <a href="#" class="paginationLink">
                                    <span class="paginationText">
                                        Next Post <i class="fi fi-arrow-right-l"></i><br>
                                        <span class="titleLink">Sed ut perspiciatis unde omnis iste natus
                                            error.</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="blogSidebar">
                            <div class="sidebarContent">
                                <div class="sidebarHeader">
                                    <h3>Recent posts</h3>
                                </div>
                                <a href="blogs.php" class="recentPost" title="Find the Right Learning Path for your">
                                    <figure href="blogs.php" class="postThumb">
                                        <img src="assets/media/blogs/blog1.jpg"
                                            alt="Find the Right Learning Path for your">
                                    </figure>
                                    <div class="postContent">
                                        <h5 class="postTitle">Find the Right Learning Path for your</h5>
                                        <p>lorem ipsum doler sit amet</p>
                                    </div>
                                </a>
                                <a href="blogs.php" class="recentPost" title="Find the Right Learning Path for your">
                                    <figure href="blogs.php" class="postThumb">
                                        <img src="assets/media/blogs/blog2.jpg"
                                            alt="Find the Right Learning Path for your">
                                    </figure>
                                    <div class="postContent">
                                        <h5 class="postTitle">Find the Right Learning Path for your</h5>
                                        <p>lorem ipsum doler sit amet</p>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebarContent">
                                <div class="sidebarHeader">
                                    <h3>Keywords</h3>
                                </div>
                                <ul class="blogCategories">
                                    <li><a href="blog-details?categoryType">Rooftop Solar (3)</a></li>
                                    <li><a href="blog-details?categoryType">Solar Panel Installation (8)</a></li>
                                    <li><a href="blog-details?categoryType">PM Surya Ghar Yojana (12)</a></li>
                                    <li><a href="blog-details?categoryType">Solar Energy Benefits (6)</a></li>
                                    <li><a href="blog-details?categoryType">Solar Subsidy (16)</a></li>
                                    <li><a href="blog-details?categoryType">Net Metering (2)</a></li>
                                    <li><a href="blog-details?categoryType">Residential Solar(7)</a></li>
                                </ul>
                            </div>
                            <div class="sidebarContent">
                                <div class="sidebarHeader">
                                    <h3>Archives</h3>
                                </div>
                                <ul class="archives">
                                    <li class="year "><a href="blog-details">2021</a></li>
                                    <li class="year "><a href="blog-details">2020</a></li>
                                    <li class="year "><a href="blog-details">2019</a></li>
                                </ul>
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