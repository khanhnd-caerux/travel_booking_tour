@if(session('success'))
<div class="modal fade in" id="exampleModalCenter" aria-hidden="false"
    style="display: block; background: #00000070">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="display: flex; justify-content: space-between;">
                <h5 class="modal-title" id="exampleModalLongTitle">Hà Giang Tour xin cảm ơn</h5>
                <button type="button" class="close hide-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary hide-modal" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@endif
<script>
    $(".hide-modal").click(function () {
        $("#exampleModalCenter").toggle();
    });
</script>
