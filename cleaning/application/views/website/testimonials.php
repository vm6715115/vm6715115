<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/cleanex/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:22:03 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Cleanex - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="<?= base_url('assets/website/images/favicon.ico')?>" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="<?= base_url('assets/website/css/font-awesome-all.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/flaticon.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/owl.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/jquery.fancybox.min.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/animate.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/timePicker.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/color.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/style.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/website/css/responsive.css')?>" rel="stylesheet">

</head>


<body>


        <!-- page-title -->
        <section class="page-title">
            <div class="pattern-layer" style="background-image: url(<?= base_url('assets/website/images/shape/shape-45.png')?>);"></div>
            <figure class="image-layer"><img src="<?= base_url('assets/website/images/resource/page-title-1.png')?>" alt=""></figure>
            <div class="shape">
                <div class="shape-1" style="background-image: url(<?= base_url('assets/website/images/shape/shape-46.png')?>);"></div>
                <div class="shape-2" style="background-image: url(<?= base_url('assets/website/images/shape/shape-47.png')?>);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Testimonials</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url('Home/index')?>">Home</a></li>
                        <li>Testimonials</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- testimonial-page-section -->
        <section class="testimonial-page-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h6>testimonials</h6>
                    <h2>What They Say About Our Service</h2>
                </div>
                <div class="row clearfix">
                <?php $i=1; foreach($data as $value): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="text-inner">
                                    <div class="quote"><i class="flaticon-quotation"></i></div>
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p><?= $value->t_description ; ?></p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="<?= base_url($value->t_image_name); ?>" alt=""></figure>
                                    <h5><?= $value->t_name ; ?></h5>
                                    <span class="designation"><?= $value->t_designation ; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
                </div>
            </div>
        </section>
        <!-- testimonial-page-section end -->


        <!-- company-section -->
        <section class="company-section">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <h6>about our service</h6>
                                <h2>Cleanex Cleaning Company</h2>
                            </div>
                            <div class="text">
                                <p>At Airtronix, we provide a comprehensive range of air conditioner services including Air conditioner repair, AC installation/removal, AC servicing, aircon servicing, AC gas filling charges, leakage repair, advanced piping, and more- all available at affordable and transparent prices.</p>
                                <p>Besides, you can book our AC services from the comfort of your home.You just need to give us a call or send us your query to book our professional AC repair services within minutes whether the issue is big or small, our professionals will come to provide doorstep repair solutions at the promised time. Our 30 days service warranty further assures you that you’ll get the best value for your money.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                        <div class="list-inner">
                            <ul class="list clearfix">
                                <li>High-Quality AC Repairs</li>
                                <li>Experienced AC Service Engineers</li>
                                <li>90-day warranty on spare parts</li>
                                <li>AC AMC (Annual Maintenance) Available</li>
                                <li>30-day warranty on service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- company-section end -->

        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa fa-arrow-up"></i>
        </button>
        
    </div>


    <!-- jequery plugins -->
    <script src="<?= base_url('assets/website/js/jquery.js')?>"></script>
    <script src="<?= base_url('assets/website/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/website/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/website/js/owl.js')?>"></script>
    <script src="<?= base_url('assets/website/js/wow.js')?>"></script>
    <script src="<?= base_url('assets/website/js/validation.js')?>"></script>
    <script src="<?= base_url('assets/website/js/jquery.fancybox.js')?>"></script>
    <script src="<?= base_url('assets/website/js/appear.js')?>"></script>
    <script src="<?= base_url('assets/website/js/scrollbar.js')?>"></script>
    <script src="<?= base_url('assets/website/js/isotope.js')?>"></script>
    <script src="<?= base_url('assets/website/js/nav-tool.js')?>"></script>
    <script src="<?= base_url('assets/website/js/timePicker.js')?>"></script> 
    <script src="<?= base_url('assets/website/js/dobpicker_script.js')?>"></script>
    <script src="<?= base_url('assets/website/js/dobpicker.js')?>"></script>

    <!-- main-js -->
    <script src="<?= base_url('assets/website/js/script.js')?>"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from designarc.biz/demos/cleanex/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 18:22:03 GMT -->
</html>
