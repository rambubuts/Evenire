<script src='<?= base_url() ?>assets/vendor/fullcalendar/core/main.js'></script>
<script src='<?= base_url() ?>assets/vendor/fullcalendar/daygrid/main.js'></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid' ],
        events: 'events/calendar',
        eventClick: function(info) {
            window.location.href = "events/view/" + info.event.id;
        }
    });

    calendar.render();
});
</script>