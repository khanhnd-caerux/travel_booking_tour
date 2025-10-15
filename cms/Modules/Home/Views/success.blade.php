<div class="modal-backdrop" id="modalBackdrop">
    <div class="modal">
        <div class="modal-body">
            <img
                src="/frontend/images/thank-you.png"
                alt="Cảm ơn"
                style="max-width: 100%; height: auto"
            />
        </div>
    </div>
</div>

<style>
    /* Nền mờ */
    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        display: flex; /* Ẩn mặc định */
        align-items: center;
        justify-content: center;
        z-index: 999;
        animation: fadeIn 0.3s ease;
    }

    /* Modal chính */
    .modal {
        background: white;
        border-radius: 8px;
        width: 500px;
        max-width: 90%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        animation: slideDown 0.3s ease;
    }

    .modal-header,
    .modal-footer {
        padding: 16px;
        border-bottom: 1px solid #eee;
    }
    .modal-footer {
        border-top: none;
        text-align: right;
    }
    .modal-body {
        padding: 16px;
    }

    .modal-title {
        margin: 0;
    }

    .modal-close {
        float: right;
        font-size: 24px;
        cursor: pointer;
    }

    /* Hiệu ứng */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideDown {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
<script>
    const backdrop = document.getElementById("modalBackdrop");
    // Đóng khi bấm ra ngoài
    backdrop.addEventListener("click", (e) => {
        if (e.target === backdrop) {
            closeModal();
        }
    });

    function closeModal() {
        backdrop.style.display = "none";
    }
</script>
