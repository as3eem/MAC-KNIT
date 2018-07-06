<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 6/7/18
 * Time: 1:31 PM
 */
?>
<style>
    .zoom:hover{
        transform: scale(3.7);
    }
</style>

<aside class="right-side">


    <div class="container">
        <div class="row">
            <br><br><br>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?=$Name?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic" height="300" width="300" src="<?=base_url('Static/IDs/').$id_image?>" class="img-circle img-responsive zoom">
                            </div>


                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Branch | Year:</td>
                                        <td><?=$Branch?> | <?=$Year?></td>
                                    </tr>
                                    <tr>
                                        <td>Registered On:</td>
                                        <td><?=$date?></td>
                                    </tr>
                                    <tr>
                                        <td>Roll Number</td>
                                        <td><?=$RollNo?></td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Email </td>
                                        <td><?=$Email?></td>
                                    </tr>
                                    <tr>
                                        <td>Profile</td>
                                        <td><?=$isFaculty?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td><?=$Contact?> <br>
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-primary">My Sales Performance</a>
                                <a href="#" class="btn btn-primary">Team Sales Performance</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

                </div>
            </div>

</aside>
