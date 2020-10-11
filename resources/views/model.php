
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header justify-content-center f-z-c-r"> ---- insert ---- </div>
            <div class='box-h-ze'>
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
                        <label for="" >Penname:</label>
                        <input type="text" class="form-control" name="pname">
                    </div>
                    <div class="box-tow col-md-3">
                        <label for="" >Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                </div>

                <div class="box-one row">
                    <div class="box-tow col-md-6">
                        <label for="" >Username:</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="box-tow col-md-6">
                        <label for="" >Password:</label>
                        <input type="password" class="form-control" name="password-o">
                    </div>
                    
                </div>

                <div class="box-one row">
                    <div class="box-tow col-md-6 ">
                        <button class="btn btn-warning w-100" data-dismiss="modal" onclick="qut.cancle_clear();">Cancle</button>
                    </div>
                    <div class="box-tow col-md-6">
                        <button class="btn btn-success w-100 " data-toggle="modal" value="1"   onclick="qut.insertData(this);">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header justify-content-center f-z-c-r"> ---- insert ---- </div>
            <div class='box-h-ze'>
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
                        <label for="" >Penname:</label>
                        <input type="text" class="form-control" name="pname">
                    </div>
                    <div class="box-tow col-md-3">
                        <label for="" >Email:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                </div>

                <div class="box-one row">
                    <div class="box-tow col-md-6">
                        <label for="" >Username:</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="box-tow col-md-6">
                        <label for="" >Password:</label>
                        <input type="password" class="form-control" name="password-o">
                    </div>
                    
                </div>

                <div class="box-one row">
                    <div class="box-tow col-md-6 ">
                        <button class="btn btn-warning w-100" data-dismiss="modal" onclick="qut.cancle_clear();">Cancle</button>
                    </div>
                    <div class="box-tow col-md-6">
                        <button class="btn btn-success w-100 idupdate" data-toggle="modal" value="1"  data-idupdate onclick="qut.editData(this);">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>