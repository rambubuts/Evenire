<!-- ============================================================== -->
<!-- Modal Form-->
<!-- ============================================================== -->
<!-- Event Information -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url()?>event/form_validation">
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="card">
                                    <div class="header">
                                        <center>
                                            <label style="font-size: 25px; font-family: Century Gothic; color: black; font-weight: bold;" id="textLabel">Create your own Event</label>
                                        </center>
                                    </div>
                                    <div class="content">
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h3 style="color: black; font-weight: bold; font-family: Century Gothic;">Basic Event Information</h3>
                                                    <h6>Name your event and tell event-goers why they should come. Add details that highlight what makes it unique.</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="color: black;">Event Title* </label>
                                                    <input type="text" class="form-control" placeholder="Be clear and descriptive" name="title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="color: black;">Type</label>
                                                    <select class="form-control" name="type">
                                                        <option>Type</option>
                                                        <option>Conference</option>
                                                        <option>Convention</option>
                                                        <option>Seminar or Talk</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="color: black;">Category</label>
                                                    <select class="form-control" name="category">
                                                        <option>Category</option>
                                                        <option>Goverment & Politics</option>
                                                        <option>Science & Technology</option>
                                                        <option>School Activities</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <label style="font-size: 25px; font-family: Century Gothic; color: black; font-weight: bold;" id="textLabel">Add Event Information</label>
                                            <hr>
                                        </center>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h3 style="color: black; font-weight: bold; font-family: Century Gothic;">Event Location</h3>
                                                    <h6>Help people in the area discover your event and let attendees know where to show up.</h6>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 10px;">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="color: black;">Location* </label>
                                                        <input type="text" class="form-control" placeholder="Enter Location" name="location">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h3 style="color: black; font-weight: bold; font-family: Century Gothic;">Date and Time</h3>
                                                    <h6>Tell event-goers when your event starts and ends so they can make plans to attend.</h6>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 10px;">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: black;">Event Starts*</label>
                                                        <input type="date" name="s_date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: black;">Starts Time*</label>
                                                        <input type="time" name="s_time" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: black;">Event Ends*</label>
                                                        <input type="date" name="e_date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: black;">End Time*</label>
                                                        <input type="time" name="e_time" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h3 style="color: black; font-weight: bold; font-family: Century Gothic;">Set Event Setting</h3>
                                                    <h6>Tell event-goers what type of event your creating.</h6>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 10px;">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="color: black;">Event Setting</label>
                                                        <select class="form-control" name="setting">
                                                            <option>-</option>
                                                            <option>Public Event</option>
                                                            <option>Private Event</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 10px;">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="color: black;">No. of Attendees</label>
                                                        <input type="number" name="attendees" class="form-control" placeholder="# of attendees">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <label style="font-size: 25px; font-family: Century Gothic; color: black; font-weight: bold;" id="textLabel">Event Itinerary</label>
                                            <hr>
                                        </center>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="color: black;">Event Description* </label>
                                                    <textarea class="form-control" placeholder="Be clear and descriptive a" style="height: 200px;" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="color: black;">Event Cover Image*</label>
                                                    <br>
                                                    <input type="file" name="file_image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h3 style="color: black; font-weight: bold; font-family: Century Gothic;">Event Programs</h3>
                                                    <h6>Specify your event programs.</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="color: black;">Programs Topic* </label>
                                                    <input type="text" class="form-control" placeholder="Be clear and descriptive" name="topics">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="color: black;">Event Handle* </label>
                                                    <input type="text" class="form-control" placeholder="Speaker/Activity" name="handle">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="color: black;">Time Schedule* </label>
                                                    <input type="time" class="form-control" name="time_sched">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label style="color: black;">Add Speaker </label>
                                                    <button type="submit" class="btn btn-info btn-fill pull-right" id="addPatient"><span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h3 style="color: black; font-weight: bold; font-family: Century Gothic;">Event Bundles</h3>
                                                    <h6>Event packages</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding: 10px;">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="color: black;">Bundle Type</label>
                                                    <select class="form-control" name="bundle_type">
                                                        <option>-</option>
                                                        <option>Foods</option>
                                                        <option>T-Shirts</option>
                                                        <option>Stickers</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="color: black;">Description </label>
                                                    <input type="text" class="form-control" placeholder="Bundle Description" name="bundle_desc">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="color: black;">Add Event Bundles </label>
                                                    <button type="submit" class="btn btn-info btn-fill pull-right" id="addPatient"><span><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info btn-fill pull-right"><span><i class="fa fa-arrow-circle-right fa-lg"></i></span>&nbsp;&nbsp;Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Event Information  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Itinerary/Program -->
<?php foreach ($info as $key => $val) { ?>
<div class="modal fade" id="itinerary-<?= $val->event_id; ?>" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <center>
                <label style="font-size: 25px; font-family: Century Gothic; color: black; font-weight: bold;" id="textLabel">Event Information</label>
                </center>
                <div class="row" style="padding: 10px;">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="color: black; font-weight: bold;">Event Title: </label>
                            <?php echo $val->event_title ?><br>
                            <label style="color: black; font-weight: bold;">Type of Event: </label>
                            <?php echo $val->event_type ?><br>
                            <label style="color: black; font-weight: bold;">Category: </label>
                            <?php echo $val->event_category ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info btn-fill pull-right" id="addPatient"><span><i class="mdi mdi-check-circle fa-lg"></i></span>&nbsp;&nbsp;Publish</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- ============================================================== -->
<!-- End Itinerary/Program -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">Events</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Events</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <button class="btn float-right hidden-sm-down btn-success" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus-circle"></i> Create</button>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Dashboard Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Events Table -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-12">
        <div class="panel-body">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Events</h4>
                    <h6 class="card-subtitle">List of events created.
                    <div class="table-responsive m-t-40">
                        <div id="myTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="myTable" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Event Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Event Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 106px;">Category</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;">Action</th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 20px;">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $key => $val) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $val->event_title; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->event_type; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $val->event_category; ?>
                                                    </td>
                                                    <td align="center">
                                                        <button type="submit" class="btn btn-info btn-fill pull-right" data-toggle="modal" data-target="#itinerary-<?= $val->event_id; ?>" id="viewEventData" value="<?php echo $val->event_id; ?>"><span><i class="mdi mdi-information"></i></span>&nbsp;&nbsp;View</button>
                                                    </td>
                                                    <td align="center">
                                                        <?php if($val->status==0){?>
                                                                <img src="<?php echo base_url();  ?>/assets/images/pending.png" alt="user" ">
                                                        <?php } elseif($val->status==1){?>
                                                                <img src="<?php echo base_url();  ?>/assets/images/check.png" alt="user" ">
                                                        <?php } elseif($val->status==2){?>
                                                                <img src="<?php echo base_url();  ?>/assets/images/offline.png" alt="user" ">
                                                        <?php }?>
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
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Events Table -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="mt-3">
                <li><b>With Light sidebar</b></li>
                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                <li class="d-block mt-4"><b>With Dark sidebar</b></li>
                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
            </ul>
            <ul class="mt-3 chatonline">
                <li><b>Chat option</b></li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="<?php echo base_url();  ?>/assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
</body>
