<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?= validation_errors(); ?>
                <?= form_open('events/create'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" 
                                    id="name" placeholder="Enter event name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" 
                                    id="description" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="speaker">Speaker</label>
                                <input name="speaker" type="text" class="form-control" 
                                    id="speaker" placeholder="Enter speaker's name">
                            </div>
                            <div class="form-group">
                                <label for="venue">Venue</label>
                                <input name="venue" type="text" class="form-control" 
                                    id="venue" placeholder="Enter venue">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="start_date">Start date</label>
                                    <input name="start_date" type="text" class="form-control" 
                                        id="start_date" placeholder="Enter event start date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="end_date">End date</label>
                                    <input name="end_date" type="text" class="form-control" 
                                        id="end_date" placeholder="Enter event end date">
                                </div>
                            </div>
                            <input class="btn btn-outline-info float-right" type="submit" value="Create event">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
