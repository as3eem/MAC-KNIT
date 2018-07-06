<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 4/7/18
 * Time: 11:16 AM
 */
?>

<style>
    .zoom:hover{
        transform: scale(8.5);
    }
</style>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            MAC Requests
            <small>Table view of all requests</small>
        </h1>
        <ol class="breadcrumb">
            <li><span href="#"><i class="fa fa-dashboard"></i> Home</span></li>
            <li><span href="#">Tables</span></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pending MAC Requests</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Roll Number</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>MAC Address</th>
                                <th>ID</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php for($i=0;$i<sizeof($k);$i++): ?>
                                <tr>
                                    <form action="<?=base_url('Admin/action_on_request')?>" method="post">
                                    <td><?= $k[$i]->RollNo ?></td><input type="hidden" value="<?= $k[$i]->RollNo?>" name="roll">
                                    <td><?= $k[$i]->Name;?></td><input type="hidden" value="<?= $k[$i]->Name?>" name="name">
                                    <td><?= $k[$i]->date;?></td><input type="hidden" value="" name="date">
                                    <td><?= $k[$i]->Mac ?></td><input type="hidden" value="<?= $k[$i]->Mac?>" name="mac"><input type="hidden" value="<?= $k[$i]->Email?>" name="email">
                                    <td><img src="<?=base_url('Static/IDs/').$k[$i]->post_image?>" alt="<?=$k[$i]->post_image?>" class="zoom" name="<?=$k[$i]->post_image?>" height="34" width="42"></td>
                                    <td><button class="btn btn-success" name="approve" type="submit"> Approve </button>&nbsp&nbsp&nbsp<button class="btn btn-danger" name="deny" type="submit"> Deny </button></td>
                                    </form>
                                </tr>
                            <?php endfor;?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Roll Number</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>MAC</th>
                                <th>IDs</th>
                                <th>Action</th>

                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

</body>
</html>







