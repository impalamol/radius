<?php
$currentPage = 'Support';
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
    <title>Rishabh Radius | Support</title>
</head>

<body>
    <!-- <?php include 'includes/loader.php'; ?> -->
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="breadcrumbs"
            style="background: url(assets/media/breadcrumbs/downloads.jpg) no-repeat center/cover">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbContent">
                        <h2>Support</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i
                                            class="ph-duotone ph-house-simple"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Support</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="Support">
            <div class="container">
                <div class="row">
                    <div class="pgHeader centered">
                        <div class="pgTitle">
                            <div class="pgSection">Customer Care</div>
                            <h2>After Sales Service</h2>
                            <p>We provide comprehensive support for your solar system, covering everything from warranty
                                claims and complaints to after-sales care.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 mx-auto">
                        <div class="supportFormContainer">
                            <div class="card p-4 p-md-5">
                                <div class="supportFormHeader">
                                    <small class="requiredStar">*</small> <small class="text-muted">Indicates required
                                        question</small>
                                </div>
                                <form>
                                    <div class="formGroup mb-3">
                                        <label for="name" class="form-label supportFormLabel">Name <span
                                                class="requiredStar">*</span></label>
                                        <input type="text" class="form-control supportFormControl" id="name"
                                            placeholder="Your answer" required>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="company" class="form-label supportFormLabel">Company / Organisation
                                            <span class="requiredStar">*</span></label>
                                        <input type="text" class="form-control supportFormControl" id="company"
                                            placeholder="Your answer" required>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="contactNumber" class="form-label supportFormLabel">Contact Number
                                            <span class="requiredStar">*</span></label>
                                        <input type="tel" class="form-control supportFormControl" id="contactNumber"
                                            placeholder="Your answer" required>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label class="form-label supportFormLabel d-block mb-3">Service request/Enquiry
                                            <span class="requiredStar">*</span></label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="requestType"
                                                id="serviceRequest" value="Service request" required>
                                            <label class="form-check-label" for="serviceRequest">
                                                Service request
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="requestType"
                                                id="newEnquiry" value="New Enquiry">
                                            <label class="form-check-label" for="newEnquiry">
                                                New Enquiry
                                            </label>
                                        </div>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="serviceDetails" class="form-label supportFormLabel">Details of what
                                            Service is required <span class="requiredStar">*</span></label>
                                        <input type="text" class="form-control supportFormControl" id="serviceDetails"
                                            placeholder="Your answer" required>
                                    </div>
                                    <div class="formGroup mb-3">
                                        <label for="enquiryDetails" class="form-label supportFormLabel">Details new
                                            Enquiry <span class="requiredStar">*</span></label>
                                        <input type="text" class="form-control supportFormControl" id="enquiryDetails"
                                            placeholder="Your answer" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </form>
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