<div class="modal fade" id="upStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Upcoming Project Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-up">
                    <div class="mb-3">
                        <label for="project-name" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="project-name" name="project-name" />
                    </div>
                    <div class="mb-3">
                        <label for="project-location" class="form-label">Project Location</label>
                        <textarea name="project-location" id="project-location" class="form-control" cols="25" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-bhk">Project BHK</label>
                        <input type="number" class="form-control" id="project-bhk" name="project-bhk" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-sqft">Project Sqft</label>
                        <input type="number" class="form-control" id="project-sqft" name="project-sqft" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-floor-level">Project Floor Level</label>
                        <input type="number" class="form-control" id="project-floor-level" name="project-floor-level" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-age-of-construction">Start Date</label>
                        <input type="date" class="form-control" id="project-age-of-construction" name="project-age-of-construction" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-water-availability">End Date</label>
                        <input type="date" class="form-control" id="project-water-availability" name="project-water-availability" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-electricity-status">Project Status</label>
                        <input type="text" class="form-control" id="project-electricity-status" name="project-electricity-status" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-electricity-status">Project Developer</label>
                        <input type="text" class="form-control" id="project-electricity-status" name="project-electricity-status" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project-images">Images</label>
                        <input type="file" name="project-images" class="form-control" id="up-images" multiple accept="image/*" aria-describedby="imageInfo" />
                        <div id="imageInfo" class="form-text">Choose only <b>3</b> Images. No More No Less</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>