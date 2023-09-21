<div class="modal fade" id="agentStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agent Modal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="add-agent">
                    <div class="mb-3">
                        <label for="agent-name" class="form-label">Agent Name</label>
                        <input type="text" class="form-control" id="agent-name" name="agent-name" />
                    </div>
                    <div class="mb-3">
                        <label for="agent-email" class="form-label">Agent Email</label>
                        <input type="email" class="form-control" id="agent-email" name="agent-email" />
                    </div>
                    <div class="mb-3">
                        <label for="agent-dob" class="form-label">Agent Date-of-birth</label>
                        <input type="date" class="form-control" id="agent-dob" name="agent-dob" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="agent-phone">Agent Phone</label>
                        <input type="number" class="form-control" id="agent-phone" pattern="[0-9_- ]{10}" name="agent-phone" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="agent-address">Address</label>
                        <textarea name="agent-address" id="agent-address" class="form-control" cols="25" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="agent-images">Images</label>
                        <input type="file" name="agent-image" class="form-control" id="agent-image" accept="image/*" aria-describedby="imageHelp" />
                        <div id="imageHelp" class="form-text">Choose <b>1</b> image only.</div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>