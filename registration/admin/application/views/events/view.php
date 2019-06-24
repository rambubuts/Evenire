<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3><?= $event->name; ?></h3>
                <p><?= $event->description; ?></p>
                <hr>
                <div class="row">
                    <div class="col-sm-4">Speaker: </div>
                    <div class="col-sm-8"><?= $event->speaker; ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Venue: </div>
                    <div class="col-sm-8"><?= $event->venue; ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Start date: </div>
                    <div class="col-sm-8"><?= mdate('%F %d, %Y - %h:%i %A', mysql_to_unix($event->start_date)); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">End date: </div>
                    <div class="col-sm-8"><?= mdate('%F %d, %Y - %h:%i %A', mysql_to_unix($event->end_date)); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Paid: </div>
                    <div class="col-sm-8"><?= $event->paid ? 'Yes' : 'No'; ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Status: </div>
                    <div class="col-sm-8">
                        <?php
                            if(mysql_to_unix($event->start_date) > now() 
                                && mysql_to_unix($event->end_date) > now()) {
                                echo 'Upcoming';
                            } else if(mysql_to_unix($event->start_date) < now() 
                                && mysql_to_unix($event->end_date) < now()) {
                                echo 'Done';
                            } else {
                                echo 'On going';
                            }
                        ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <?php if($event->active): ?> 
                        <a class="btn btn-danger btn-fill pull-right"
                            href="<?= base_url() . 'events/deactivate/' . $event->id; ?>">
                            <span><i class="fa fa-minus-circle fa-lg"></i></span>&nbsp;&nbsp;Deactivate</a>
                        <?php else: ?>
                        <a class="btn btn-success btn-fill pull-right"
                            href="<?= base_url() . 'events/activate/' . $event->id; ?>">
                            <span><i class="fa fa-check-circle fa-lg"></i></span>&nbsp;&nbsp;Activate</a>
                        <?php endif ?>
                        <?php if($event->paid == FALSE): ?> 
                        <a class="btn btn-success btn-fill pull-right"
                            href="<?= base_url() . 'events/approve/' . $event->id; ?>">
                            <span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Approve</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

