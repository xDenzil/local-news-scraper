<?php
$url = 'http://www.jamaicaobserver.com/rss/entertainment/'; // Insert XML source
$xml = simplexml_load_file($url) or die("Error connecting to XML"); // Pass xml source into simpleXML plugin


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SimpleXML Example</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mx-auto text-center mt-5">Jamaica Observer</h1>
                    <h5 class="mx-auto text-center col-6">XML RSS Scraper Using SimpleXML for PHP.<br><a class="btn btn-primary mt-3" role="button" href="http://www.jamaicaobserver.com/">Visit Website</a><br></h5>
                </div>
            </div>
            <div class="row mt-3">


                <?php foreach ($xml->channel->item as $item) { //Loop through items in XML file
                    echo ("
                <div class='col-md-6 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-md-2 p-2'>
                                <img src='https://i.imgur.com/ifZaBFr.jpg' height='80px' class='rounded float-left' alt='...'>
                                </div>
                                <div class='col-md-10'>
                                <h4 class='card-title'>" . $item->title . "</h4>
                                <h6 class='text-muted card-subtitle mb-2'>" . $item->pubDate . "</h6><br>
                                <p class='card-text'>" . substr($item->description, 0, 150) . ".." . "</p><a class='card-link' href='" . $item->link . "'>Read More</a></div>
                                </div>
                            </div>
                            
                        </div>
                </div>
                ");
                }

                ?>

            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>