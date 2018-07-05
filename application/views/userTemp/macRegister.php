<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            MAC
            <small>Registration and Change Request</small>
        </h1>
        <ol class="breadcrumb">
            <li><span href="#"><i class="fa fa-dashboard"></i> Home</span></li>
            <li><span href="#">Forms</span></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">New MAC Registration</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <div class="callout callout-warning">
                            <h4>Step 1:</h4>
                            <p>
                                Report to CSE office with following documents within 3 days-
                            <ul>
                                <li>KNIT ID Card</li>
                                <li>A copy of approval letter which has been mailed to you </li>
                            </ul>
                            </p>
                        </div>
                        <div class="callout callout-info">
                            <h4>Step 2:</h4>
                            <p>Fill out this form with valid details to make MAC approval request.</p>
                        </div>
                    </div>

                    <!-- form start -->
                    <!--<form role="form" action=base_url('Dashboard/newMAC') method="post">-->
                    <?php echo form_open_multipart('Dashboard/newMAC');?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="mac">Enter MAC Address</label>
                                <input type="text" name="mac" class="form-control" required id="exampleInputEmail1" placeholder="for example: ec8eb5539f36">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Valid KNIT ID Card </label>
                                <input type="file" id="exampleInputFile" required name="user_file">
                                <p class="help-block">Upload current KNIT Identity Card that will be verified physically later with this account's identity. Valid formats are jpeg, jpg, png.</p>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" value="Submit" name="done">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div><!--/.col (left) -->

            <!-- right column -->

            <div class="col-md-6">
                <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">MAC Address Change Request</h3>
                    </div><!-- /.box-header -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Old MAC Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your previous registerd MAC address">
                            </div><div class="form-group">
                                <label for="exampleInputEmail1">New MAC Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="New MAC address to register">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Confirm Request</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
