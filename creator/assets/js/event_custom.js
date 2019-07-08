/*$(function() {
    $(document).on('click', '#viewEventData', function(event){
        var event_id = $(this).prop("value");
        alert($(this).prop("value"));
        $.ajax({
            url: '<?php echo base_url(); ?>Events/viewEvents/',
            method: "POST",
            data: {
                eventID:event_id
            },
            success: function(data)
            {
                $('#itinerary').modal('show');
            }
        });

    });
});
*/
