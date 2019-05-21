<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="approved_table" class="table">
                        <thead>
                            <tr>
                                <th>Account Name</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($accounts as $acc){ ?>
                            <tr>
                                <td><?= $acc['account_name'] ?></td>
                                <?php
                                if($acc['account_status']==1){?>
                                    <td>Active</td>
                                    <?php $btn_txt = 'Deactivate'; $color = 'danger'; $url = base_url() . "accounts/deactivate/".$acc['account_id'];
                                }
                                if($acc['account_status']==2){ ?>
                                    <td>Inactive</td>
                                    <?php $btn_txt = 'Activate'; $color = 'warning'; $url = base_url() . "accounts/activate/".$acc['account_id'] ; 
                                }
                                if($acc['account_status']==0){ ?>
                                    <td>Inactive / Unapproved</td>
                                    <?php $btn_txt = 'Pending'; $color = ''; $url = "#" ; 
                                }?>
                                <td>
                                    <button type="btn" class="btn btn-info btn-fill pull-right" data-toggle="modal" data-target="#modal-<?= $acc['account_id']; ?>"> <span><i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;View</button>
                                    <?php if($acc['account_status']==0){ ?>
                                        <a href="<?= base_url() . "accounts/deactivate/".$acc['account_id'] ?>">
                                            <button type="submit" class="btn btn-success btn-fill pull-right">
                                            <span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Approve</button>
                                        </a>
                                    <?php } ?>
                                    <?php if($acc['account_status']!=0){ ?>
                                        <a href="<?= $url; ?>">
                                            <button id="btn_deact" type="submit" class="btn btn-<?= $color ?> btn-fill pull-right"><span><i class="fa fa-minus-circle fa-lg"></i></span>&nbsp;&nbsp;<?= $btn_txt; ?>
                                            </button>
                                        </a>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                    <?php foreach ($accounts as $acc){ ?>
                        <div class="modal fade" id="modal-<?= $acc['account_id']; ?>" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <?= $acc['account_name']; ?>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <?= $acc['account_address'] ?><hr>
                                        <?= $acc['account_contact'] ?><hr>
                                        <?= $acc['account_email'] ?><hr>
                                        <?= $acc['account_type']?><hr>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</div>