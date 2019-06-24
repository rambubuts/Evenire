<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
  <script src="<?= base_url() ?>assets/js/waves.js"></script>
  <script src="<?= base_url() ?>assets/js/sidebarmenu.js"></script>
  <script src="<?= base_url() ?>assets/vendor/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="<?= base_url() ?>assets/js/custom.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/flot/jquery.flot.js"></script>
  <script src="<?= base_url() ?>assets/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/styleswitcher/jQuery.style.switcher.js"></script>
  <script src="<?= base_url() ?>assets/vendor/chartist-js/dist/chartist.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/echarts/echarts-all.js"></script>
  <script src="<?= base_url() ?>assets/vendor/toast-master/js/jquery.toast.js"></script>
  <script src="<?= base_url() ?>assets/js/toastr.js"></script>
  <script src='<?= base_url() ?>assets/vendor/fullcalendar/core/main.js'></script>
    <script src='<?= base_url() ?>assets/vendor/fullcalendar/daygrid/main.js'></script>

    <script src='<?= base_url() ?>assets/js/event_custom.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ]
        });

        calendar.render();
    });
    </script>

<script src="<?= base_url() ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#myTable').DataTable();
});
</script>

</body>

<!--     <script type="text/javascript">
        $(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 10,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
            });
        });
    </script> -->
</html>
