<div class="modal fade" id="rtmiStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ready to move in Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-rtmi">
                    <div class="mb-3">
                        <label for="rtmi-name" class="form-label">Flat Name</label>
                        <input type="text" class="form-control" id="rtmi-name" name="rtmi-name" />
                    </div>
                    <div class="mb-3">
                        <label for="rtmi-location" class="form-label">Flat Location</label>
                        <textarea name="rtmi-location" class="form-control" id="rtmi-location" cols="25" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rtmi-bhk">Flat BHK</label>
                        <input type="number" class="form-control" id="rtmi-bhk" name="rtmi-bhk" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rtmi-sqft">Flat Sqft</label>
                        <input type="number" class="form-control" id="rtmi-sqft" name="rtmi-sqft" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rtmi-floor-level">Floor Level</label>
                        <input type="number" class="form-control" id="rtmi-floor-level" name="rtmi-floor-level" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rtmi-monthly-rent">Monthly Rent</label>
                        <input type="number" class="form-control" id="rtmi-monthly-rent" name="rtmi-monthly-rent" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="rtmi-images">Images</label>
                        <input type="file" name="rtmi-images" class="form-control" id="rtmi-images" multiple accept="image/*" aria-describedby="imageInfo" />
                        <div id="imageInfo" class="form-text">Choose only <b>3</b> Images. No More No Less</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>