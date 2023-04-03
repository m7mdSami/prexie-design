<div class="modal fade" id="select-date-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-date">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="text-primary">Select date & time</h5>
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="mb-3">
                <label for="" class="form-label">Select start date</label>
                <div class="position-relative">
                    <input type="text" class="form-control" id="select-date" placeholder="10 January 2023">
                    <img class="input-icon" src="prexie-html/assets/svg/calendar.svg" alt="">
                </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="mb-3">
                <label for="" class="form-label">Select end date</label>
                <div class="position-relative">
                    <input type="text" class="form-control" id="select-date" placeholder="10 January 2023">
                    <img class="input-icon" src="prexie-html/assets/svg/calendar.svg" alt="">
                </div>            
              </div>
          </div>
          <div class="col-12">
            <div class="form-check form-switch mb-3 d-flex justify-content-between p-0">
                  <label class="form-check-label" for="flexSwitchCheckChecked">Repeat</label>
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            </div>
          </div>
          <div class="col-12">
              <div class="mb-3">
                  <label for="" class="form-label">Repeat</label>
                  <select class="form-select">
                      <option selected>Every day</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
              </div>
          </div>
          <br>
          <div class="col-12">
            <div class="form-check form-switch mb-3 d-flex justify-content-between p-0">
                  <label class="form-check-label" for="flexSwitchCheckChecked">Set a specific time for each day</label>
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Select day to set time</label>
                <div class="position-relative">
                    <input type="text" class="form-control" id="select-date" placeholder="10 January 2023">
                    <img class="input-icon" src="prexie-html/assets/svg/calendar.svg" alt="">
                </div>
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
                <label for="" class="form-label">Select time for this day</label>
                <div class="position-relative">
                    <input type="text" class="form-control" id="select-date" placeholder="From 16:00 to 21:00">
                    <img class="input-icon" src="prexie-html/assets/svg/clock.svg" alt="">
                </div>
            </div>
          </div>
          <div class="mt-5 d-flex">
              <button type="button" class="btn btn-primary w-100">Save</button>
              <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Clear</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>