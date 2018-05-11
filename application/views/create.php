<?php include_once('header.php');?>
<div class = "container">
    <div class = form-horizontal>
        <form>
            <legend>Legend</legend>
            <div class="form-group">
                <label for="imputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="text" readonly="" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>

            <fieldset class="form-group">
                <div class = "col-lg-10 col-lg-offset-2">
                    <button type = "reset" class="btn btn-default">Cancel</button>
                    <button type = "submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
<?php include_once('footer.php');?>


