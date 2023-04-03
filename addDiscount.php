<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <img src="prexie-html/assets/images/logo-black.png" alt="prexie" srcset="">
                        <h5 class="modal-title text-primary fs-4" id="exampleModalLabel">Add discount</h5>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#general-part">
                                    <button type="button" class="step-trigger p-0" role="tab" aria-controls="general-part"
                                        id="general-part-trigger">
                                        <span class="bs-stepper-circle border border-2 text-black-50">1</span>
                                        <span class="bs-stepper-label">General</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#conditions-part">
                                    <button type="button" class="step-trigger p-0" role="tab" aria-controls="conditions-part"
                                        id="conditions-part-trigger">
                                        <span class="bs-stepper-circle border border-2 text-black-50">2</span>
                                        <span class="bs-stepper-label">Conditions</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#permission-part">
                                    <button type="button" class="step-trigger p-0" role="tab" aria-controls="permission-part"
                                        id="permission-part-trigger">
                                        <span class="bs-stepper-circle border border-2 text-black-50">3</span>
                                        <span class="bs-stepper-label">Permission</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <!-- your steps content here -->
                                <div id="general-part" class="content" role="tabpanel" aria-labelledby="general-part-trigger">
                                </div>
                                <div id="conditions-part" class="content" role="tabpanel"
                                    aria-labelledby="conditions-part-trigger"></div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-primary my-4">General</h4>
                            <form>
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Discount type</label>
                                    <select class="form-select">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Select date & time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="select-date" placeholder="">
                                        <img class="input-icon" src="prexie-html/assets/svg/calendar.svg" alt="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Allowed percentage</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-check form-switch mb-3 d-flex justify-content-between p-0">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">After tax</label>
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                </div>
                                <button type="button" class="btn btn-primary w-100">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './dateModal.php';?>