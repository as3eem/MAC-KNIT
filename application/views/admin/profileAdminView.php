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
                                <img alt="User Pic" height="90" width="90" src="<?=base_url('Static/IDs/').$id_image?>" class="img-circle img-responsive zoom">
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
                                        <td><?=$Email?></td>
                                    </tr>
                                    <tr>
                                        <td>MAC</td>
                                        <td><?=$Mac?></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td><?=$Contact?> <br>
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-danger">Delete User</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn btn-primary">Delete User MAC</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

</aside>
