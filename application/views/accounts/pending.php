<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"><button class="btn btn-primary">Create Account</button></div>
                <div class="table-responsive">
                    <table id="pending_table" class="table">
                        <thead>
                            <tr>
                                <th>Account Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 15; $i++) { ?>
                            <tr>
                                <td>Abadue Adawse</td>
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
