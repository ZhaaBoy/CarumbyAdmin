    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="corona/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="corona/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="corona/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="corona/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="corona/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="corona/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="corona/template/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="corona/template/assets/js/off-canvas.js"></script>
    <script src="corona/template/assets/js/hoverable-collapse.js"></script>
    <script src="corona/template/assets/js/misc.js"></script>
    <script src="corona/template/assets/js/settings.js"></script>
    <script src="corona/template/assets/js/todolist.js"></script>
    <script src="corona/template/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="corona/template/assets/js/dashboard.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.com/libraries/bootstrap-datetimepicker/4.17.37"></script>
    <script>
        $(function() {
          $('input[name="daterange"]').daterangepicker({
            opens: 'left'
          }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          });
        });
        </script>
    <!-- End custom js for this page -->
