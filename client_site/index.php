<?php

$download_site_url = "REPLACE_ME_WITH_HTTPS_URL";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1>CORS Tester</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img class="w-100" src="<?php echo "$download_site_url/download.php?f=1.jpg"; ?>" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" src="<?php echo "$download_site_url/download.php?f=2.jpg"; ?>" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" src="<?php echo "$download_site_url/download.php?f=3.jpg"; ?>" alt="">
            </div>
        </div>
    </div>
</body>
</html>