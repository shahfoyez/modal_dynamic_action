<!-- Model trigger  -->
<a href="/employee/employeeDelete/{{ $employee->id }}" data-bs-toggle="modal" data-bs-target="#delete_Modal" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cd_modal" id="" data-item="/employee/employeeDelete/{{ $employee->id }}" >
    Modal
</a>
<!--end::Model trigger  -->

<!-- Modal Body-->
<div class="modal fade" id="delete_Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-toped mw-500px">
        <div class="modal-content">
            <div class="modal-footer flex-right" style="padding: 0.6rem 2.2rem 0.6rem 2.5rem;">
                <button type="reset" id="kt_modal_create_api_key_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                <form action="" class="form d-inline" method="post" id="foy_cd_modal">
                    <button type="submit" id="kt_modal_create_api_key_submit" class="btn btn-primary">
                        <span class="indicator-label"> Delete</span>
                    </button>
                </form> 
            </div> 
        </div>
    </div>
</div>
<!--end::Modal Body-->

<!-- Script that assign action value dynamically -->
<script>
    $(document).on("click", ".cd_modal", function () {
        var deleteSlug= $(this).attr('data-item');
        $("#foy_cd_modal").attr("action", deleteSlug)
    });
</script>







