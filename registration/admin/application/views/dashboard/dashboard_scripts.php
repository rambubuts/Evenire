<script src='<?= base_url() ?>assets/vendor/fullcalendar/core/main.js'></script>
<script src='<?= base_url() ?>assets/vendor/fullcalendar/daygrid/main.js'></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    let event_title = $('#event_title');
    let event_category = $('#event_category');
    let event_info = $('#event_info');
    let event_account = $('#event_account');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid' ],
        events: 'events/calendar',
        eventClick: function(info) {
            getEventData(info.event.id)
        }
    });

    function getEventData(id) {
        $.ajax({
            url: 'event_info/api/' + id,
            success: function(data) {
                data = JSON.parse(data)
                console.log(data)
                event_title.html(data.event_title)
                event_category.html(data.event_category)
                event_info.html(data.info.event_location + "<br>" +
                    data.info.event_started_date + " " + 
                    data.info.event_start_time + "<br>" +
                    data.info.event_end_date + " " +
                    data.info.event_end_time + "<br>" +
                    data.info.event_setting + "<br>" +
                    data.info.event_description)
                event_account.html(data.account.account_name + "<br>" +
                    data.account.account_address + "<br>" + 
                    data.account.account_contact + "<br>" +
                    data.account.account_email + "<br>" +
                    data.account.account_type + "<br>")
                $('#modalEventInfo').modal();
            }
        });
    }

    calendar.render();
});
</script>