<!-- Modal -->

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id ="student_form" action="#" data-toogle ="validator" >
                    @csrf {{ method_field('POST') }}
                    {{-- <input type="hidden" name="id" id="id"> --}}
                    <div class="row form-group">
                            <label class="col-md-3" for="name_id">Name <span class="text-danger font-weight-bold">*</span> : </label>
                            <input type="text" name="name" class="form-control col-8" id="name_id" aria-describedby="emailHelp" placeholder="Your name here" required>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3" for="email_id">Email <span class="text-danger font-weight-bold">*</span> : </label>
                        <input type="email" name="email" class="form-control col-md-8" id="email_id" placeholder="Your Email here" required>
                    </div>
                    
                    <div class="row form-group">
                        <label class="col-md-3" for="phone_id" > Phone <span class="text-danger font-weight-bold">*</span> : </label>
                        <input type="number" name="phone" class="form-control col-md-8" id="phone_id" placeholder="Your phone here" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="insert_button" ></button>
            </div>
            </form>
        </div>
    </div>
</div>

