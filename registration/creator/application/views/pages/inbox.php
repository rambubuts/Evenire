<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Inbox</h5>
                <hr>
                <div class="table-responsive">
                    <table id="inbox_table" class="table">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Content</th>
                                <th>Recieved</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 5; $i++) { ?>
                            <tr>
                                <td>Lorem ipsum</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo laborum, nisi quod quas tenetur ...</td>
                                <td><?= date("Y-m-d"); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
