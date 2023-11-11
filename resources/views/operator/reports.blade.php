<!DOCTYPE html>
<html>

<head>
    <title>Upload Data Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Upload Data Mahasiswa</h2>

                        <form action="process-upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="file">Pilih File CSV:</label>
                                <input type="file" class="form-control-file" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>