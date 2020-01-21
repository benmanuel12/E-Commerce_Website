<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product Entry</title>
    <link rel="stylesheet" type="text/css" href="cmsstyle.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1>Delete Product Entry</h1>
    <?php include 'cmsnavbar.php'; ?>
    <p>Enter the ID of an existing product here and click Submit to remove it from the database</p>
    <form class="form-horizontal" action="landing.php">
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" placeholder="ID">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>