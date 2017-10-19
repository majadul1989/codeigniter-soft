<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="col-md-2 col-lg-2 menubar">
        <div class="row">
        </div>

    </div><!--menubar-->
    <div class="col-md-10 col-lg-10 main">
<!--        --><?php //print_r($_SESSION);
               ?>
<!--        <img src="--><?php //echo base_url().'barcode/'.$barcode; ?><!--" alt="">-->
        <form class="form-horizontal"  id="contact_form" role="form" method="POST">

            <fieldset>
                <!-- Success message -->
                <h2>New Branch Descriptions</h2><hr>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Branch Name</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input id="branch_name" type="text" class="form-control" name="branch_name" value=""  autofocus required>
                        </div>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Branch E-Mail</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="branch_email" placeholder="E-Mail Address" class="form-control" value="" type="text" autofocus required>
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-3 control-label">Branch Phone #</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="branch_phone" placeholder="01xxxxxxxxx" class="form-control" type="text" autofocus required value="">
                        </div>

                    </div>
                </div>


                <!-- Text area -->

                <div class="form-group">
                    <label class="col-md-3 control-label">Address</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <textarea class="form-control" name="branch_address"  placeholder="Project Description" autofocus required> </textarea>
                        </div>

                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-3 control-label">Branch City</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="branch_city" value="" placeholder="branch_city" class="form-control"  type="text" autofocus required>
                        </div>

                    </div>
                </div>


                <!-- Text area -->

                <div class="form-group ">
                    <label class="col-md-3 control-label">Project Description</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="branch_description" placeholder="Project Description"></textarea>

                        </div>
                    </div>
                </div>
                <hr>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary col-md-4" >Send <span class="glyphicon glyphicon-send"></span></button>
                        <label class="col-md-1 control-label"></label>
                        <button type="reset" class="btn btn-danger col-md-4" >Cancel  <span class="glyphicon glyphicon-remove"></span></button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div><!--main-->

</div>
<?php //include_once('../../dashboard/footer.php'); ?>



