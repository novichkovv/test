<!DOCTYPE html>
<html>
<head>
    <title>
        Excel Parser
    </title>
    <link type="text/css" rel="stylesheet" href="<?php echo SITE_DIR; ?>css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="" method="post">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Upload an Excel file</label>
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" name="submit">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>