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