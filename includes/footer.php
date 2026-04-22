<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }

    .tooltip-inner {
        background-color: #1F7BCC !important;
        color: #fff !important;
        font-size: 16px;
        border-radius: 6px;

    }

    .tooltip.bs-tooltip-top .tooltip-arrow::before {
        border-top-color: #1F7BCC !important;
    }

    .tooltip.bs-tooltip-bottom .tooltip-arrow::before {
        border-bottom-color: #1F7BCC !important;
    }

    .tooltip.bs-tooltip-start .tooltip-arrow::before {
        border-left-color: #1F7BCC !important;
    }

    .tooltip.bs-tooltip-end .tooltip-arrow::before {
        border-right-color: #1F7BCC !important;
    }


    @media (max-width: 768px) {

        footer .row>div:nth-child(2) {
            display: none;
        }

        footer .row>div:nth-child(1) {
            width: 100%;
            text-align: center !important;
        }
    }
</style>

<footer style="background-color: #09479D;" class="py-3 mt-5 text-center text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                <button type="button" class="btn btn-custom text-white"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    title='<i class="bi bi-exclamation-triangle me-1"></i> Report problem'>
                    สงวนสิทธิ์ &copy; 2021 Toyo Seikan(Thailand) Co., Ltd.
                </button>
            </div>

            <div class="col-12 col-md-6 text-center text-md-end">
                <button type="button" class="btn btn-custom text-white"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    title='<i class="bi bi-exclamation-triangle me-1"></i> Report problem'>
                    สงวนสิทธิ์ &copy; 2021 Toyo Seikan(Thailand) Co., Ltd.
                </button>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
    });
</script>


</body>

</html>