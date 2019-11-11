<?php
    $url = 'http://www.jamaicaobserver.com/rss/entertainment/';
    $xml = simplexml_load_file($url) or die("Error connecting to XML");


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
                
            <?php foreach($xml->channel->item as $item){
                echo("
                <div class='col-md-6 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-md-4'>
                                <img src='". $item->description->img ."' height='150px' class='rounded float-left' alt='...'>
                                </div>
                                <div class='col-md-8'>
                                <h4 class='card-title'>". $item->title . "</h4>
                                <h6 class='text-muted card-subtitle mb-2'>". $item->pubdate ."</h6>
                                <p class='card-text'>". substr($item->description,0,150) . ".. img:" . $item->description->img->_src . "</p><a class='card-link' href='" . $item->link . "'>Read More</a></div>
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