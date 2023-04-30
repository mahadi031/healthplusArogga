<!-- Flash Message -->

<!-- Page Slider -->
<section class="sec_1" style="margin-top: 76px;">
    <?php if (!empty($message_error)) { ?>
        <div class="alert alert-block alert-danger" style="margin-bottom: 0px!important"><a class="close" data-dismiss="alert" href="#">×</a>
            <p><?php echo $message_error; ?></p>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('message_success')) { ?>
        <div class="alert alert-block alert-success"><a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Notification Message!
            </h4>
            <p>
            <p><?php echo $this->session->flashdata('message_success'); ?></p>
            </p>
        </div>
    <?php } ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?php echo base_url("assets/images/topBanner.png") ?>" class="top-body d-block w-100" alt="...">
                <div class="carousel-caption d-block d-md-block">
                    <p class="top_banner_bgtext ">Health Insurance Protection From Health Plus</p>
                    <p class="top_banner_smtext">
                        There nothing more important than our good healthy, cause that’s our principal capital asset for our good future
                    </p>
                    <button type="button" class="pack-btn btn btn-danger">Packages</button>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?php echo base_url("assets/images/topBanner.png") ?>" class="top-body d-block w-100" alt="...">
                <div class="carousel-caption d-block d-md-block">
                    <p class="top_banner_bgtext ">Health Insurance Protection From Health Plus</p>
                    <p class="top_banner_smtext">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia delectus sit
                        perspiciatis?
                    </p>
                    <button type="button" class="pack-btn btn btn-danger">Packages</button>
                </div>
            </div>

            <div class="relative carousel-item">
                <img src="<?php echo base_url("assets/images/topBanner.png") ?>" class="top-body d-block w-100" alt="...">
                <div class="carousel-caption d-block d-md-block">
                    <p class="top_banner_bgtext ">Health Insurance Protection From Health Plus</p>
                    <p class="top_banner_smtext">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia delectus sit
                        perspiciatis?
                    </p>
                    <button type="button" class="pack-btn btn btn-danger">Packages</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<!-- Page Slick -->
<section class="sec_2" style="margin: 50px 0px">

    <div class="container">

        <div class="row d-flex align-items-center">

            <div class="col-12 col-sm-4 col-md-4">

                <div class="d-flex align-items-center">

                    <h4 class="px-2">Health Plus Premium Features</h4>

                </div>

            </div>

            <div class="col-12 col-sm-8 col-md-8">

                <div class="slick_slide">

                    <div class="zoom text-center p-2" style="width: 10rem;">
                        <div class="reltive text-center card " style="width: 100%; height: 150px; border-radius: 24px;">
                            <img src="<?php echo base_url("assets/images/medicineDelivary.svg") ?>" class="premium_image card-img-top rounded" style="height: 70px; width: 70px; display: block;" alt="...">
                        </div>
                        <div class="card-body text-center justify-content">
                            <p class="premium_title card-text">Live Doctor Audio & Video Call</p>
                        </div>
                    </div>

                    <div class="zoom text-center p-2" style="width: 18rem;">
                        <div class="reltive text-center card " style="width: 100%; height: 150px; border-radius: 24px;">
                            <img src="<?php echo base_url("assets/images/specialistDoctor.svg") ?>" class="premium_image card-img-top rounded" style="height: 70px; width: 70px; display: block;" alt="...">
                        </div>
                        <div class="card-body text-center justify-content">
                            <p class="premium_title card-text">Live Doctor Audio & Video Call</p>
                        </div>
                    </div>

                    <div class="zoom text-center p-2" style="width: 18rem;">
                        <div class="reltive text-center card " style="width: 100%; height: 150px; border-radius: 24px;">
                            <img src="<?php echo base_url("assets/images/bloodBank.svg") ?>" class="premium_image card-img-top rounded" style="height: 70px; width: 70px; display: block;" alt="...">
                        </div>
                        <div class="card-body text-center justify-content">
                            <p class="premium_title card-text">Live Doctor Audio & Video Call</p>
                        </div>
                    </div>

                    <div class="zoom text-center p-2" style="width: 18rem;">
                        <div class="reltive text-center card " style="width: 100%; height: 150px; border-radius: 24px;">
                            <img src="<?php echo base_url("assets/images/medicineDelivary.svg") ?>" class="premium_image card-img-top rounded" style="height: 70px; width: 70px; display: block;" alt="...">
                        </div>
                        <div class="card-body text-center justify-content">
                            <p class="premium_title card-text">Live Doctor Audio & Video Call</p>
                        </div>
                    </div>

                    <div class="zoom text-center p-2" style="width: 18rem;">
                        <div class="reltive text-center card " style="width: 100%; height: 150px; border-radius: 24px;">
                            <img src="<?php echo base_url("assets/images/specialistDoctor.svg") ?>" class="premium_image card-img-top rounded" style="height: 70px; width: 70px; display: block;" alt="...">
                        </div>
                        <div class="card-body text-center justify-content">
                            <p class="premium_title card-text">Live Doctor Audio & Video Call</p>
                        </div>
                    </div>

                    <div class="zoom text-center p-2" style="width: 18rem;">
                        <div class="reltive text-center card " style="width: 100%; height: 150px; border-radius: 24px;">
                            <img src="<?php echo base_url("assets/images/bloodBank.svg") ?>" class="premium_image card-img-top rounded" style="height: 70px; width: 70px; display: block;" alt="...">
                        </div>
                        <div class="card-body text-center justify-content">
                            <p class="premium_title card-text">Live Doctor Audio & Video Call</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Page Packages -->
<div class="sec_3 container py-4">

    <div class="p-2 text-center py-3">
        <h3>Packages</h3>
    </div>

    <div class="center_slide">
        <?php $this->load->view('includes/oneTimePackage'); ?>
        <?php $this->load->view('includes/familyPackage'); ?>
        <?php $this->load->view('includes/studentPackage'); ?>
    </div>

    <!-- Modal -->
    <?php $this->load->view('includes/modal_onetime_arogga'); ?>
    <?php $this->load->view('includes/modal_family_arogga'); ?>
    <?php $this->load->view('includes/modal_student_arogga'); ?>

</div>

<script>
    $(document).ready(function() {
        console.log('okay')
    });
</script>