<?php
$currentPage = 'products';
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
    <title>Rishabh Radius | Products</title>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="breadcrumbs"
            style="background: url(assets/media/breadcrumbs/products.jpg) no-repeat center/cover">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbContent">
                        <h2>Products</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="products">
            <div class="container">
                <div class="row">
                    <div class="pgHeader">
                        <div class="pgTitle">
                            <h2>Our Products</h2>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Products"
                                aria-label="Search Products" aria-describedby="searchBtn">
                            <button class="btn btn-primary" type="button" id="searchBtn"><i
                                    class="ph-duotone ph-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                        <div class="productCard">
                            <figure>
                                <img src="assets/media/products/product.png" alt="Smart PV Inverter 01">
                            </figure>
                            <div class="productCardBody">
                                <h6>Inverter Type</h6>
                                <h3>Smart PV Inverter 01</h3>
                            </div>
                            <hr>
                            <div class="productCardFooter">
                                <a href="product-details" class="btn btn-primary stretched-link">View details <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                        <div class="productCard">
                            <figure>
                                <img src="assets/media/products/product.png" alt="Smart PV Inverter 01">
                            </figure>
                            <div class="productCardBody">
                                <h6>Inverter Type</h6>
                                <h3>Smart PV Inverter 02</h3>
                            </div>
                            <hr>
                            <div class="productCardFooter">
                                <a href="product-details" class="btn btn-primary stretched-link">View details <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                        <div class="productCard">
                            <figure>
                                <img src="assets/media/products/product.png" alt="Smart PV Inverter 01">
                            </figure>
                            <div class="productCardBody">
                                <h6>Inverter Type</h6>
                                <h3>Smart PV Inverter 03</h3>
                            </div>
                            <hr>
                            <div class="productCardFooter">
                                <a href="product-details" class="btn btn-primary stretched-link">View details <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="enquiryModalLabel">Quick Enquiry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-4 col-xxl-4">
                            <figure>
                                <img src="assets/media/products/product.png" alt="Smart PV Inverter 01">
                            </figure>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-7 col-xxl-7 offset-lg-1 offset-xl-1 offset-xxl-1">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 col-xl-5 col-xxl-5 mb-4">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email contactInfo">
                                            <label for="email">Email </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xl-4 col-xxl-4 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 col-xl-3 col-xxl-3 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="city" placeholder="City">
                                            <label for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-xl-12 col-xxl-12 mb-4">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Message" id="message"
                                                style="height: 120px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 mb-4">
                                        <button type="submit" class="btn btn-primary">
                                            Send Enquiry <i class="ph-duotone ph-paper-plane-tilt"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>

</html>