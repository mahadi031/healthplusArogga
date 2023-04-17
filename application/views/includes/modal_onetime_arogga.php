<div class="modal fade" id="modal_onetime_arogga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><img class="modal_health_logo" src="<?php echo base_url("assets/images/mainLogo.svg") ?>" alt=""></h5>
                <h4 class="modal-title text-center" style="width: 100%;">
                    One Time Package
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="p-5" style="background-color: #F2F7FF;">
                    <div class="mb-4">
                        <h4 class="mb-4">Health Coverage</h4>
                        <p class="text-muted"><i class="bi bi-check-circle-fill" style="color: #2F80ED"></i>
                            Number of Insured: 01 Person</p>
                        <p class="text-muted"><i class="bi bi-check-circle-fill" style="color: #2F80ED"></i>
                            Policy validity: </p>
                        <p class="text-muted"><i class="bi bi-check-circle-fill" style="color: #2F80ED"></i> Any
                            Bangladeshi national</p>
                        <p class="text-muted"><i class="bi bi-check-circle-fill" style="color: #2F80ED"></i> Age
                            between 18-60 years</p>
                        <p class="text-muted"><i class="bi bi-check-circle-fill" style="color: #2F80ED"></i>
                            Natural Death</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-3">Natural Death</h4>
                        <ul class="text-muted">
                            <li>Death at any cause except Suicide/HIV-AIDS/ STD and incurable
                                disease</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-3">Accidental Death</h4>
                        <ul class="text-muted">
                            <li>Any death strictly due to an accident excluding acts of war and
                                death caused by illegal activities, Murder/Homicide. etc. Any
                                hazardous hobbies that the insured regularly engages in are
                                generally specifically excluded as well.</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-3">Accidental Death</h4>
                        <ul class="text-muted">
                            <li>Any death strictly due to an accident excluding acts of war and
                                death caused by illegal activities, Murder/Homicide. etc. Any
                                hazardous hobbies that the insured regularly engages in are
                                generally specifically excluded as well.</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-3">Accidental Death</h4>
                        <ul class="text-muted">
                            <li>Any death strictly due to an accident excluding acts of war and
                                death caused by illegal activities, Murder/Homicide. etc. Any
                                hazardous hobbies that the insured regularly engages in are
                                generally specifically excluded as well.</li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="modal-footer ">

                <div class="mx-5">
                    <h4 style="color: #2F80ED">Choose Your Operator</h4>
                </div>

                <div class="card mx-5 " style="max-width: 100%;">

                    <div class="card-body py-2 px-4">

                        <div class="d-flex justify-content-between">

                            <div>

                                <div class="mb-2">
                                    <h6 style="font-size: 18px; font-weight: 500;" class="card-title">
                                        Pay
                                        with Operator</h6>
                                    <p style="font-size: 12px;" class="card-subtitle mb-2 text-muted">
                                        Only
                                        Robi & Airtel User</p>
                                    <p style="font-size: 12px;" class="card-subtitle mb-2 text-muted">It
                                        will be renewed automatically every
                                        month.</p>
                                </div>

                                <div>
                                    <h6 style="font-size: 20px; font-weight: 500;" class="card-title">
                                        ৳300 </h6>
                                    <p style="font-size: 12px;" class="card-subtitle text-muted">(
                                        Including VAT, SD,SC )</p>
                                </div>

                            </div>

                            <div>
                                <input type="radio" aria-label="Radio button for following text input">
                            </div>

                        </div>

                    </div>
                </div>

                <div class="text-center mt-2">
                    <a class="btn btn-primary <?php if ($is_sebscribe) { ?>
                        disabled
                   <?php } ?>" href="<?php echo base_url("AroggaPackCheck/subscirbe_request?package_type=onetime_arogga") ?>" style="border-radius: 5px; padding: 8px 24px;">Purchase Now</a>
                </div>

            </div>
        </div>
    </div>
</div>