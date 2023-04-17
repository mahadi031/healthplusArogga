<?php if ($subs_ststus) { ?>

    <div class="text-center">
        <img class="status_img" src="<?php echo base_url("assets/images/Success.svg") ?>" alt="">
        <br>
        <h3 style="color: red;">Congratulation</h3>
        <h5><?php echo $message_success; ?></h5>
    </div>

    <div style="width: 100%; margin-top: 1.5rem;">

        <!-- <div class="d-flex justify-content-center">
            <p class="mx-2">Orin Web</p>
            <a href="#">Click Me!</a>
        </div>

        <div class="d-flex justify-content-center">
            <p class="mx-5">siam</p>
            <a href="#">Click Me!</a>
        </div> -->

        <table class="table table-hover table-borderless" style="width: 23%; margin: 0px auto;">
            <tbody>
                <tr>
                    <td style="width: 60%;">Healthplus Web</td>
                    <td class="text-center"><a href="http://healthplus.life/" target="new"> Click me </a></td>
                </tr>
                <tr>
                    <td style="width: 60%;">Healthplus App</td>
                    <td class="text-center"><a href="https://play.google.com/store/apps/details?id=com.supernova.healthservice" target="new"> Click me </a></td>
                </tr>
            </tbody>
        </table>

    </div>

<?php } else { ?>
    <div class="text-center" style="margin-top:50px;">
        <img class="status_img" src="<?php echo base_url("assets/images/fail.svg") ?>" alt="">
        <br>
        <h3 style="color: red;">Failed</h3>
        <h5><?php echo $message_error; ?></h5>
    </div>
<?php } ?>

<!-- <section class="sec-_4 mt-5">
    <div class="card" style="width: 100%; border: none;">
        <div class="card-body" style="background-color: #F7F7F7;">

            <div class="container ">

                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="">
                            <h4>Health Plus</h4>
                            <p>There nothing more important than our good healthy, cause that's our principal
                                capital asset
                                for our good future</p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">

                        <div class="d-flex justify-content-between">
                            <div class="mx-2">
                                <p style="font-size: 16px; font-weight: 500;">Resources</p>
                                <p>Contact</p>
                                <p>FAQ</p>
                            </div>
                            <div class="">
                                <p style="font-size: 16px; font-weight: 500;">Legal</p>
                                <p>Privacy policy</p>
                                <p>Terms Condition</p>
                            </div>
                            <div class="">
                                <p style="font-size: 16px; font-weight: 500;">Download Health Plus</p>
                                <link rel="stylesheet" href=""><img src="/images/googleplay.svg" alt="">
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="card-footer text-center" style="border: none; color: white; background-color: #EB5757;">
            © 2023 Health Plus All rights reserved.
        </div>
    </div>
</section> -->