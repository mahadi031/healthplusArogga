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

        <div class="card mx-1 h-100" style=" border-radius: 12px; ">
            <div class="card-header pb-5 text-center" style="background-color: #EB5757; color: white; border-radius: 12px 12px 0px 0px;">
                One Time Package
            </div>
            <div class="p-3 text-center">
                <div class="p-3" style="background-color: #F8F8FA; margin-top: -50px; z-index: 1; border-radius: 7px;">
                    <span class="mb-1 text-muted" style="font-size: 14px;">Total Coverage</span>
                    <h4 class="mb-1">BDT 172,000</h4>
                    <span class="mb-1 text-muted" style="font-size: 14px;">Validity : 3 Months</span>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-column w-100" style="height: calc(100% - 179.8px);">

                <div class="w-100">

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Health Plus
                            Premium
                            Access</p>
                        <p class="card-text">YES</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Natural Death
                        </p>
                        <p class="card-text">75,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Accidental
                            Death
                        </p>
                        <p class="card-text">75,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> IPD</p>
                        <p class="card-text">20,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> OPD</p>
                        <p class="card-text">2,000 BDT</p>
                    </div>

                </div>

                <div class="mt-5 mb-4 w-100">
                    <div class="card-body d-flex justify-content-between align-items-center mx-3 py-2 px-2" style=" background-color: #F3F7FD; border-radius: 7px; border: solid 1px #D1D0D6;">

                        <span class="mx-2"><input type="radio" checked aria-label="Radio button for following text input">
                        </span>

                        <div>
                            <p class="mb-0" style="font-size: 16px; font-weight: 500;">Price (Excluding Taxes)</p>
                            <p style="font-size: 10px;" class="card-text text-muted">Only For Robi & Airtel Users
                            </p>
                        </div>

                        <span class="card-text" style="font-weight: 400;">299 BDT</span>
                    </div>

                    <div class="d-flex justify-content-between mx-3 my-2" style="font-size: 16px;">
                        <a class="btn package_btn mx-1 py-2 <?php if ($is_sebscribe) { ?>
                        disabled
                   <?php } ?>" href="<?php echo base_url("AroggaPackCheck/subscirbe_request?package_type=onetime_arogga") ?>">Purchase</a>
                        <a class="btn package_btn mx-1 py-2 open-packageModal" data-toggle="modal" data-target="#modal_onetime_arogga" data-id="onetime_arogga">Details</a>
                    </div>

                </div>

            </div>

        </div>

        <div class="card mx-1 h-100" style=" border-radius: 12px; ">
            <div class="card-header pb-5 text-center" style="background-color: #EB5757; color: white; border-radius: 12px 12px 0px 0px;">
                Family Package (Renewal)
            </div>
            <div class="p-3 text-center">
                <div class="p-3" style="background-color: #F8F8FA; margin-top: -50px; z-index: 1; border-radius: 7px;">
                    <span class="mb-1 text-muted" style="font-size: 14px;">Total Coverage</span>
                    <h4 class="mb-1">BDT 172,000</h4>
                    <span class="mb-1 text-muted" style="font-size: 14px;">Validity : 3 Months</span>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-column w-100" style="height: calc(100% - 179.8px);">

                <div class="w-100">

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Health Plus
                            Premium
                            Access</p>
                        <p class="card-text">YES</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Natural Death
                        </p>
                        <p class="card-text">75,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Accidental
                            Death
                        </p>
                        <p class="card-text">75,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> IPD</p>
                        <p class="card-text">20,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> OPD</p>
                        <p class="card-text">2,000 BDT</p>
                    </div>

                </div>

                <div class="mt-5 mb-4 w-100">
                    <div class="card-body d-flex justify-content-between align-items-center mx-3 py-2 px-2" style=" background-color: #F3F7FD; border-radius: 7px; border: solid 1px #D1D0D6;">

                        <span class="mx-2"><input type="radio" checked aria-label="Radio button for following text input">
                        </span>

                        <div>
                            <p class="mb-0" style="font-size: 16px; font-weight: 500;">Price (Excluding Taxes)</p>
                            <p style="font-size: 10px;" class="card-text text-muted">Only For Robi & Airtel Users
                            </p>
                        </div>

                        <span class="card-text" style="font-weight: 400;">299 BDT</span>
                    </div>

                    <div class="d-flex justify-content-between mx-3 my-2" style="font-size: 16px;">
                        <a class="btn package_btn mx-1 py-2 <?php if ($is_sebscribe) { ?>
                        disabled
                   <?php } ?>" href="<?php echo base_url("AroggaPackCheck/subscirbe_request?package_type=family_arogga") ?>">Purchase</a>
                        <a class="btn package_btn mx-1 py-2 open-packageModal" data-toggle="modal" data-target="#modal_family_arogga" data-id="family_arogga">Details</a>
                    </div>

                </div>

            </div>

        </div>

        <div class="card mx-1 h-100" style=" border-radius: 12px; ">
            <div class="card-header pb-5 text-center" style="background-color: #EB5757; color: white; border-radius: 12px 12px 0px 0px;">
                Student Package (Renewal)
            </div>
            <div class="p-3 text-center">
                <div class="p-3" style="background-color: #F8F8FA; margin-top: -50px; z-index: 1; border-radius: 7px;">
                    <span class="mb-1 text-muted" style="font-size: 14px;">Total Coverage</span>
                    <h4 class="mb-1">BDT 172,000</h4>
                    <span class="mb-1 text-muted" style="font-size: 14px;">Validity : 3 Months</span>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-column w-100" style="height: calc(100% - 179.8px);">

                <div class="w-100">

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Health Plus
                            Premium
                            Access</p>
                        <p class="card-text">YES</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Natural Death
                        </p>
                        <p class="card-text">75,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> Accidental
                            Death
                        </p>
                        <p class="card-text">75,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> IPD</p>
                        <p class="card-text">20,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> OPD</p>
                        <p class="card-text">2,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> OPD</p>
                        <p class="card-text">2,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> OPD</p>
                        <p class="card-text">2,000 BDT</p>
                    </div>

                    <div class="d-flex justify-content-between mx-3" style="font-size: 16px;">
                        <p class="card-text"><i class="bi bi-check-lg" style="color: #4EBB87; "></i> OPD</p>
                        <p class="card-text">2,000 BDT</p>
                    </div>

                </div>

                <div class="mt-5 mb-4 w-100">
                    <div class="card-body d-flex justify-content-between align-items-center mx-3 py-2 px-2" style=" background-color: #F3F7FD; border-radius: 7px; border: solid 1px #D1D0D6;">

                        <span class="mx-2"><input type="radio" checked aria-label="Radio button for following text input">
                        </span>

                        <div>
                            <p class="mb-0" style="font-size: 16px; font-weight: 500;">Price (Excluding Taxes)</p>
                            <p style="font-size: 10px;" class="card-text text-muted">Only For Robi & Airtel Users
                            </p>
                        </div>

                        <span class="card-text" style="font-weight: 400;">299 BDT</span>
                    </div>

                    <div class="d-flex justify-content-between mx-3 my-2" style="font-size: 16px;">
                        <a class="btn package_btn mx-1 py-2 <?php if ($is_sebscribe) { ?>
                        disabled
                   <?php } ?>" href="<?php echo base_url("AroggaPackCheck/subscirbe_request?package_type=student_arogga") ?>">Purchase</a>
                        <a class="btn package_btn mx-1 py-2 open-packageModal" data-toggle="modal" data-target="#modal_student_arogga" data-id="student_arogga">Details</a>
                    </div>

                </div>

            </div>

        </div>

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