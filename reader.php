<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("location: /");
    die();
}

require "vendor/autoload.php";

use Smalot\PdfParser\Parser;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pdffile"]["name"]);
move_uploaded_file($_FILES["pdffile"]["tmp_name"], $target_file);

$pdfFilePath = $target_file;

$PDFParser = new Parser();

$pdf = $PDFParser->parseFile($pdfFilePath);

$text = $pdf->getText();

?>
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
                        <p class="text-left">Upload your PDF file.</p>
                    </div>
                    <div class="card-body">
                        <a href="/" class="btn btn-success form-control">Upload another file.</a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
            <br>
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo basename($_FILES["pdffile"]["name"]); ?></h5>
                    </div>
                    <div class="card-body">
                        <pre>
                            <?php echo $text; ?>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>