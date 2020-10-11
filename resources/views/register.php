<div class="modal fade bd-example-modal-reg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header justify-content-center f-z-c-r"> ---- Regiter ---- </div>
        <div class='box-h-ze'>
            <div class="box-one row">
                <div class="col-md-12">
                    <div class="circle">
                    <!-- User Profile Image -->
                    <img class="profile-pic" src="img/avatar2.png">

                    <!-- Default Image -->
                    <!-- <i class="fa fa-user fa-5x"></i>  // onclick="qut.click_uploadImg(this);"  onchange="qut.click_uploadImg(this);"-->
                    </div>
                    <div class="p-image">
                    <i class="fa fa-camera upload-button" ></i>
                        <input class="file-upload" type="file" accept="img/*" />
                    </div>
                </div>
            </div>
            <div class="box-one row">
                <div class="box-tow col-md-3">
                    <label for="" >Sername:</label>
                    <input type="text" class="form-control" name="sname">
                </div>
                <div class="box-tow col-md-3">
                    <label for="" >Lastname:</label>
                    <input type="text" class="form-control" name="lname">
                </div>
                <div class="box-tow col-md-3">
                    <label for="" >Pname:</label>
                    <input type="text" class="form-control" name="pname">
                </div>
                <div class="box-tow col-md-3">
                    <label for="" >sex:</label>
                    <select class="form-control" name="sex">
                        <option value="">Select</option>
                        <option value="1" selected>Mail</option>
                        <option value="2">Femail</option>
                    </select>
                </div>
            </div>

            <div class="box-one row">
                <div class="box-tow col-md-4">
                    <label for="" >Username:</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="box-tow col-md-4">
                    <label for="" >Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="box-tow col-md-4">
                    <label for="" >Status:</label>
                    <select class="form-control" name="status">
                        <option value="">Select</option>
                        <option value="QZB" selected>Queltion Zomble</option>
                        <option value="AZB">Answer Zomble</option>
                    </select>
                </div>
            </div>

            <div class="box-one row">
                <div class="box-tow col-md-6">
                    <label for="" >Password:</label>
                    <input type="password" class="form-control" name="password-o">
                </div>
                <div class="box-tow col-md-6">
                    <label for="" >Confirm Password:</label>
                    <input type="password" class="form-control" name="password-t">
                </div>
                <div class="show-ms-error col-md-12 justify-content-center"></div>
            </div>

            <div class="box-one row">
                <div class="box-tow col-md-6 ">
                    <button class="btn btn-warning w-100" data-dismiss="modal" onclick="qut.cancle_clear();">Cancle</button>
                </div>
                <div class="box-tow col-md-6">
                    <button class="btn btn-success w-100 .bd-example-modal-reg2" data-toggle="modal" value="1"   onclick="qut.check_null_input(this);">Next</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-reg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header justify-content-center f-z-c-r"> --- Regiter Address --- </div>
        <div class='box-h-ze2'>
            <div class="box-one row">
                <div class="box-tow col-md-6">
                    <label for="" >House No:</label>
                    <input type="text" class="form-control" name="house">
                </div>
                <div class="box-tow col-md-6">
                    <label for="" >Village No:</label>
                    <input type="text" class="form-control" name="vullage">
                </div>
            </div>
            <div class="box-one row">
                <div class="box-tow col-md-6">
                    <label for="" >Alley:</label>
                    <input type="text" class="form-control"name="alley">
                </div>
                <div class="box-tow col-md-6">
                    <label for="" >Lane:</label>
                    <input type="text" class="form-control" name="lane">
                </div>
            </div>
            <div class="box-one row">
                <div class="box-tow col-md-6">
                    <label for="" >Road:</label>
                    <input type="text" class="form-control"name="road">
                </div>
                <div class="box-tow col-md-6">
                    <label for="" >Sub district/ Sub area:</label>
                    <input type="text" class="form-control" name="subDistrict">
                </div>
            </div>
            <div class="box-one row">
                <div class="box-tow col-md-6">
                    <label for="" >District Area:</label>
                    <input type="text" class="form-control"name="district">
                </div>
                <div class="box-tow col-md-6">
                    <label for="" >Province:</label>
                    <input type="text" class="form-control" name="province">
                </div>
            </div>
            <div class="box-one row">
                <div class="box-tow col-md-6">
                    <label for="" >Postal Code:</label>
                    <input type="text" class="form-control"name="postalCode">
                </div>
                <div class="box-tow col-md-6">
                    <label for="" >Micaddres:</label>
                    <input type="text" class="form-control" name="micaddres">
                </div>
            </div>
        </div>
        <div class="box-one row">
            <div class="box-tow col-md-6 ">
                <button class="btn btn-warning w-100" data-toggle="modal" data-target=".bd-example-modal-reg1" data-dismiss="modal">Block</button>
            </div>
            <div class="box-tow col-md-6">
                <button class="btn btn-success w-100" data-toggle="modal" data-target=".bd-example-modal-reg2" value="2"   onclick="qut.check_null_input(this);">Confirm</button>
            </div>
        </div>
    </div>
  </div>
</div>