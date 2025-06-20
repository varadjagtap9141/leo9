 </div>
 <!-- / Content -->

 <!-- Footer -->
 <footer class="content-footer footer bg-footer-theme">
     <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
         <div class="mb-2 mb-md-0">
             ©
             <script>
             document.write(new Date().getFullYear());
             </script>
             , by
             <a href="https://www.angleadvt.com/leo9/" target="_blank" class="footer-link fw-bolder">Leo_9</a>
         </div>

     </div>
 </footer>
 <!-- / Footer -->

 <div class="content-backdrop fade"></div>
 </div>
 <!-- Content wrapper -->
 </div>
 <!-- / Layout page -->
 </div>

 <!-- Overlay -->
 <div class="layout-overlay layout-menu-toggle"></div>
 </div>
 <!-- / Layout wrapper -->

 <!-- Core JS -->
 <!-- build:js assets/vendor/js/core.js -->
 <script src="../admin_assets/vendor/libs/jquery/jquery.js"></script>
 <script src="../admin_assets/vendor/libs/popper/popper.js"></script>
 <script src="../admin_assets/vendor/js/bootstrap.js"></script>
 <script src="../admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

 <script src="../admin_assets/vendor/js/menu.js"></script>
 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="../admin_assets/vendor/libs/apex-charts/apexcharts.js"></script>

 <!-- Main JS -->
 <script src="../admin_assets/js/main.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/45.2.0/ckeditor5.umd.js"></script>
 <script>
const {
    ClassicEditor,
    Essentials,
    Bold,
    Italic,
    Font,
    Paragraph
} = CKEDITOR;

ClassicEditor
    .create(document.querySelector('#ck'), {
        licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NTA3MjMxOTksImp0aSI6IjQ1MzE0YjA2LTA1MzItNDM5Yi1iYzFkLTIzNmFmNDVlYzFjNCIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6ImQxYTdiMmM3In0.ePiQA4dvcmFX5Ifsk9LN5x-Y2SQGjqV_hDMV4J8yxxuk7rZlUfxk2lE1i__9sj8eJgSXIu0Tx0T4tUfTHTTcAg', // Create a free account on https://portal.ckeditor.com/checkout?plan=free
        plugins: [Essentials, Bold, Italic, Font, Paragraph],
        toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
        ]
    })
    .then(ck => {
        window.ck = ck;
    })
    .catch(error => {
        console.error(error);
    });
 </script>

 <!-- Page JS -->
 <script src="../admin_assets/js/dashboards-analytics.js"></script>
 <!-- fontawesome -->

 <script src="https://kit.fontawesome.com/fff7dcb016.js" crossorigin="anonymous"></script>

 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>

 <script>
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
 </script>
 <script>
window.addEventListener("DOMContentLoaded", function() {
    const dateInput = document.getElementById("date");
    if (!dateInput.value) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.value = today;
    }
});

function addRow() {
    const table = document.getElementById("po-items-table").getElementsByTagName('tbody')[0];
    const newRow = table.querySelector(".po-row").cloneNode(true);

    // Clear input values in the cloned row
    newRow.querySelectorAll("input").forEach(input => input.value = "");
    newRow.querySelectorAll("select").forEach(select => select.selectedIndex = 0);

    // Add event to delete button
    newRow.querySelector(".delete-row").addEventListener("click", function() {
        deleteRow(this);
    });

    table.appendChild(newRow);
}

// Function to delete row
function deleteRow(btn) {
    const row = btn.closest("tr");
    const table = document.getElementById("po-items-table").getElementsByTagName('tbody')[0];
    if (table.rows.length > 1) {
        row.remove();
    } else {
        alert("At least one item row is required.");
    }
}
 </script>
 <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.toggle-check').forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                const targetId = checkbox.getAttribute('data-target');
                const textarea = document.getElementById(targetId);

                if (checkbox.checked) {
                    textarea.disabled = false;
                    textarea.required = true;
                } else {
                    textarea.disabled = true;
                    textarea.required = false;
                    textarea.value = '';
                }
            });
        });
    });
</script>

<script>
  document.getElementById("printButton").addEventListener("click", function () {
    window.print();
  });
</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#type').select2({
        placeholder: "Select Type",
        allowClear: true,
        width: 'resolve'
    });
});
</script> -->

 </body>

 </html>