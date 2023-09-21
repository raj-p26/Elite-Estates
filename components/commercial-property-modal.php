<div class="modal fade" id="cpStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Commercial Property Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-cp">
                    <div class="mb-3">
                        <label for="cp-name" class="form-label">Property Name</label>
                        <input type="text" class="form-control" id="cp-name" name="cp-name" />
                    </div>
                    <div class="mb-3">
                        <label for="cp-location" class="form-label">Property Location</label>
                        <textarea name="cp-location" class="form-control" id="cp-location" cols="25" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cp-bhk">Property BHK</label>
                        <input type="number" class="form-control" id="cp-bhk" name="cp-bhk" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cp-sqft">Property Sqft</label>
                        <input type="number" class="form-control" id="cp-sqft" name="cp-sqft" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cp-floor-level">Floor Level</label>
                        <input type="number" class="form-control" id="cp-floor-level" name="cp-floor-level" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cp-monthly-rent">Monthly Rent</label>
                        <input type="number" class="form-control" id="cp-monthly-rent" name="cp-monthly-rent" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cp-images">Images</label>
                        <input type="file" name="cp-images" class="form-control" id="cp-images" multiple accept="image/*" aria-describedby="imageInfo" />
                        <div id="imageInfo" class="form-text">Choose only <b>3</b> Images. No More No Less</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
