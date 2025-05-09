<!-- Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
            <div class="modal-body">
                <img src="/frontend/images/thank-you.png" alt="Cảm ơn" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
        myModal.show();
    });
</script>
