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
                            <?php for ($i=0; $i < 15; $i++) { ?>
                            <tr>
                                <td>PSIT: OTCHO</td>
                                <td><?= date("Y-m-d H:i:s"); ?></td>
                                <td>On Going</td>
                                <td>
                                    <button type="submit" class="btn btn-info btn-fill pull-right"><span><i class="fa fa-info-circle fa-lg"></i></span>&nbsp;&nbsp;View</button>
                                    <button type="submit" class="btn btn-danger btn-fill pull-right"><span><i class="fa fa-minus-circle fa-lg"></i></span>&nbsp;&nbsp;Deactivate</button>
                                    <button type="submit" class="btn btn-success btn-fill pull-right">
                                    <span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Approve</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

