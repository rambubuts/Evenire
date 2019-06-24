<div class="row">
    <div class="col-md-12">
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
                                <th>Type</th>
                                <th>Category</th>
                                <th>status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($events as $event): ?>
                                <tr>
                                    <td>
                                        <?= $event['event_title']; ?>
                                    </td>
                                    <td>
                                        <?= $event['event_type']; ?>
                                    </td>
                                    <td>
                                        <?= $event['event_category']; ?>
                                    </td>
                                    <?php if($event['status']==0){?>
                                        <td>Deactivated</td>
                                        <?php } if($event['status']==1){?>
                                            <td>Activated</td>
                                            <?php } if($event['status']==2){?>
                                                <td>Approved</td>
                                                <?php }?>
                                                    <td>
                                                        <button type="btn" class="btn btn-info btn-fill pull-right" data-toggle="modal" data-target="#modal-<?= $event['event_id']; ?>"><span><i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;View</button>

                                                        <?php if($event['status']==0){?>
                                                            <a href="<?= base_url() . "events/approve/".$event['event_id'] ?>">
                                                                <button type="submit" class="btn btn-primary btn-fill pull-right"><span><i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;Approved</button>
                                                            </a>
                                                            <?php } elseif($event['status']==1){?>
                                                                <a href="<?= base_url() . "events/deactivate/".$event['event_id'] ?>">
                                                                    <button type="submit" class="btn btn-danger btn-fill pull-right"><span><i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;Deavtivate</button>
                                                                </a>
                                                                <?php } elseif($event['status']==2){?>
                                                                    <a href="<?= base_url() . "events/activate/".$event['event_id'] ?>">
                                                                        <button type="submit" class="btn btn-success btn-fill pull-right"><span><i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;Activate</button>
                                                                    </a>
                                                                    <?php }?>

                                                    </td>
                                                    <!--                                 <td>
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
								</td> -->
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- <?php foreach($events as $event): ?> -->
                    <div class="modal fade" id="modal-<?= $event['event_id']; ?>" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <?= $event['event_title']; ?>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <?= $event['event_type']; ?>
                                        <?= $event['event_category']; ?>
                                            <?php if ($event["info"]!= NULL): ?>

                                                <?= $event['info']->event_location; ?>
                                                    <?= $event['info']->event_started_date; ?>
                                                        <?= $event['info']->event_start_time; ?>
                                                            <?= $event['info']->event_end_date; ?>
                                                                <?= $event['info']->event_end_time; ?>
                                                                    <?= $event['info']->event_setting; ?>
                                                                        <?= $event['info']->event_description; ?>
                                                                            <?php endif; ?>

                                                                                <hr>
                                                                                <?php if ($event["account"]!= NULL): ?>
                                                                                    <?= $event['account']->account_name; ?>
                                                                                        <?= $event['account']->account_address; ?>
                                                                                            <?= $event['account']->account_contact; ?>
                                                                                                <?= $event['account']->account_email; ?>
                                                                                                    <?= $event['account']->account_type; ?>
                                                                                                        <?php endif; ?>
                                                                                                            <hr>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <?php endforeach; ?> -->
                </div>
            </div>
        </div>
    </div>
</div>
