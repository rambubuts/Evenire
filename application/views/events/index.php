<div class="row">
    <div class="col-md-12">
    <a class="btn btn-info btn-fill pull-right" href="<?= base_url() ?>events/create">
        <span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Create Event</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="approved_table" class="table">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($events as $event): ?>
                            <tr>
                                <td><?= $event['name']; ?></td>
                                <td><?= mdate('%F %d, %Y - %h:%i %A', mysql_to_unix($event['start_date'])); ?></td>
                                <td><?php
                                    if(mysql_to_unix($event['start_date']) > now('GMT+8') 
                                        && mysql_to_unix($event['end_date']) > now('GMT+8')) {
                                        echo 'Upcoming';
                                    } else if(mysql_to_unix($event['start_date']) < now('GMT+8') 
                                        && mysql_to_unix($event['end_date']) < now('GMT+8')) {
                                        echo 'Done';
                                    } else {
                                        echo 'On going';
                                    }
                                ?></td>
                                <td>
                                    <a class="btn btn-info btn-fill pull-right" 
                                        href="<?= base_url() . 'events/view/' . $event['id'] ?>"><span>
                                        <i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;View</a>
                                    <?php if($event['active']): ?> 
                                    <a class="btn btn-danger btn-fill pull-right"
                                        href="<?= base_url() . 'events/deactivate/' . $event['id'] ?>">
                                        <span><i class="fa fa-minus-circle fa-lg"></i></span>&nbsp;&nbsp;Deactivate</a>
                                    <?php else: ?>
                                    <a class="btn btn-success btn-fill pull-right"
                                        href="<?= base_url() . 'events/activate/' . $event['id'] ?>">
                                        <span><i class="fa fa-check-circle fa-lg"></i></span>&nbsp;&nbsp;Activate</a>
                                    <?php endif ?>
                                    <?php if($event['paid'] == FALSE): ?> 
                                    <a class="btn btn-success btn-fill pull-right"
                                        href="<?= base_url() . 'events/approve/' . $event['id'] ?>">
                                        <span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Approve</a>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

