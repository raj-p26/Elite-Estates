<div class="modal fade" id="flatStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Flat Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-flat">
                    <div class="mb-3">
                        <label for="flat-name" class="form-label">Flat Name</label>
                        <input type="text" class="form-control" id="flat-name" name="flat-name" required/>
                    </div>
                    <div class="mb-3">
                        <label for="flat-location" class="form-label">Flat Location</label>
                        <textarea name="flat-location" class="form-control" id="flat-location" cols="28" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-bhk">Flat BHK</label>
                        <input type="number" class="form-control" pattern="[0-9]{1,}" id="flat-bhk" name="flat-bhk" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-sqft">Flat Sqft</label>
                        <input type="number" class="form-control" pattern="[0-9]{3,}" id="flat-sqft" name="flat-sqft" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-floor-level">Floor Level</label>
                        <input type="number" class="form-control" id="flat-floor-level" name="flat-floor-level" pattern="[0-9]{1,}" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-monthly-rent">Monthly Rent</label>
                        <input type="number" class="form-control" id="flat-monthly-rent" pattern="[0-9]{3,}" name="flat-monthly-rent" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-age-of-construction">Age of Construction</label>
                        <input type="number" class="form-control" id="flat-age-of-construction" pattern="[0-9]{1,}" name="flat-age-of-construction" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-water-availability">Water Availability</label>
                        <input type="text" class="form-control" id="flat-water-availability" name="flat-water-availability" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-electricity-status">Electricity status</label>
                        <input type="text" class="form-control" id="flat-electricity-status" name="flat-electricity-status" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flat-images">Images</label>
                        <input type="file" name="flat-images" class="form-control" id="flat-images" multiple accept="image/*" aria-describedby="imageInfo" required/>
                        <div id="imageInfo" class="form-text">Choose only <b>3</b> Images. No More No Less</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>