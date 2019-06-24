<div class="row">
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-inverse card-success">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><?= count($accounts['approved']) ?></h1>
                <h6 class="text-white">Approved Accounts</h6>
            </div>
        </div>
    </div>
<div class="col-md-6 col-lg-3 col-xlg-3">
    <div class="card card-inverse card-warning">
        <div class="box text-center">
            <h1 class="font-light text-white"><?= count($accounts['pending']) ?></h1>
            <h6 class="text-white">Pending Accounts</h6>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3 col-xlg-3">
    <div class="card card-success card-danger">
        <div class="box text-center">
            <h1 class="font-light text-white"><?= count($events['reported']) ?></h1>
            <h6 class="text-white">Reported Events</h6>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEventInfo" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span id="event_title"></span>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <span id="event_type"></span>
                <span id="event_category"></span>
                <span id="event_info"></span>
                <hr>
                <span id="event_account"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>