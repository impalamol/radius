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
                                <a href="product-details" class="btn btn-link">View details <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                                <a href="" class="btn btn-outline-dark">Quick Enquiry <i
                                        class="ph-duotone ph-keyboard"></i></a>
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
                                <a href="product-details" class="btn btn-link">View details <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                                <a href="" class="btn btn-outline-dark">Quick Enquiry <i
                                        class="ph-duotone ph-keyboard"></i></a>
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
                                <a href="product-details" class="btn btn-link">View details <i
                                        class="ph-duotone ph-arrow-bend-right-up"></i></a>
                                <a href="" class="btn btn-outline-dark">Quick Enquiry <i
                                        class="ph-duotone ph-keyboard"></i></a>
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