<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Reader</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-left">Upload your PDF file.</h5>
                    </div>
                    <div class="card-body">
                        <form action="/reader" method="post" enctype="multipart/form-data">
                            <input type="file" name="pdffile" class="form-control" style="height: 45px;" required />
                            <br>
                            <button class="btn btn-primary form-control">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>