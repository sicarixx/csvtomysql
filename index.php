<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>CSV to Mysql</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h4>Upload CSV to Mysql</h4>
                <form action="process_file.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput" class="form-label">Select your file</label>
                        <input type="file" accept=".csv" class="form-control" id="exampleFormControlInput" name="file" placeholder="Select your file" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Upload file</button>
                        <button type="clear" class="btn btn-danger">Clear form</button>
                    </div>
                    <div>
                    <?php
                        if(isset($_GET['success'])) {
                            ?><div class="alert alert-success" role="alert">File upload was successful!</div><?php
                        }
                    ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>