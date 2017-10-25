<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="col-md-2 col-lg-2 menubar">
        <div class="row">
        </div>

    </div><!--menubar-->
    <div class="col-md-10 col-lg-10 main">
        <form class="form-horizontal" action="<?php echo base_url('product/addnew/addNewPorduct');?>" enctype="multipart/form-data"  id="contact_form" role="form" method="POST">

            <fieldset>
                <!-- Success message -->
                <h2>Add New Item</h2><hr>

                <div class="form-group">
                    <label class="col-md-3 control-label">Item Id</label>
                    <div class="col-md-7 inputGroupContainer">

                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input id="item" type="text" class="form-control" name="item" value="<?php echo $id; ?>"  disabled autofocus required>
                        </div>
                    </div>
                </div>

                <!-- Dropdown-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Select Item Group</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <select name="gourp" class="form-control selectpicker" data-live-search="true">
                                <option value="">Select Group</option>
                                <option value="1">A</option>
                                <option value="1">B</option>
                                <option value="1">C</option>
                                <option value="1">D</option>
                            </select>
                        </div>
                      </div>
                </div>

                <!-- Dropdown-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Select Item Type</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <select name="type" class="form-control selectpicker" data-live-search="true">
                                <option value="">Select Unit</option>
                                <option value="1">meter</option>
                                <option value="1">Piece</option>
                                <option value="1">KG</option>
                                <option value="1">Others</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-3 control-label">Item Name</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input id="item_name" type="text" class="form-control" name="item_name" value="" PLACEHOLDER="Item Name" autofocus required>
                        </div>
                    </div>
                </div>
                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-3 control-label">Price</label>
                    <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input name="price" id="price" placeholder="Price TK" class="form-control" type="text" autofocus required value="">
                        </div>

                    </div>
                </div>

                <!-- Text area -->

                <div class="form-group ">
                    <label class="col-md-3 control-label">Product Descriptions</label>
                    <div class="col-md-5 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>

                        </div>
                    </div>
                    <div class="col-md-2 inputGroupContainer">
                        <div class="input-group">
                            <input type="file" class="padding" name="itemImage">

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



