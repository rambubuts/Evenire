<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"><button class="btn btn-primary">Create Event</button></div>
                <div class="table-responsive">
                    <table id="pending_table" class="table">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 15; $i++) { ?>
                            <tr>
                                <td>PSITE: NUEVE</td>
                                <td><?= date("Y-m-d H:i:s"); ?></td>
                                <td>
                                    <button class="btn btn-primary">View</button>
                                    <button class="btn btn-primary">Edit</button>
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
