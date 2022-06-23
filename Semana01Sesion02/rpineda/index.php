<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php

$arrFiguras = array(
    "EVA02"=> array("Evangelion Production Model-02", "EVA02.avif","2021-06-20","Neon Genesis Evangelion"),
    "YF23"=> array("YF-23 ATF","YF23.avif","2021-06-11","Northrop YF-23"),
    "V22A"=>array("Bell-Boeing V-22A Osprey", "V22A.avif","2021-08.28", "Bell-Boeing V-22 Osprey"),
    "J20"=>array("Chinese J-20 Mighty Dragon (Prototype NO.2011)", "J20.avif","2021-08.28", "Chengdu J-20"),
    "DSB"=>array("Dassault Rafale B", "DSB.avif","2021-08.28", "Dassault Rafale"),
    "SU47"=>array("Su-47 (S-37) Berkut", "SU47.avif","2021-08.28", "Sukhoi Su-47 Berkut"),
    "EFT"=>array("Eurofighter Typhoon", "EFT.jpg","2021-08.28", "Eurofighter Typhoon"),
);


?>


                <?php
                   foreach ($arrFiguras as $key => $value) {
                echo '<div class="col-md-4" >
                <div class="item-box-blog">
                  <div class="item-box-blog-image">
                    <!--Date-->
                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">'.$value[2].'</span> </div>
                    <!--Image-->
                    <figure> <img alt="" width="500px" src="img/'.$value[1].'"> </figure>
                  </div>
                  <div class="item-box-blog-body">
                    <!--Heading-->
                    <div class="item-box-blog-heading">
                      <a href="#" tabindex="0">
                        <h5>'.$value[0]. ' </h5>
                      </a>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                    </div>
                    <!--Text-->
                    <div class="item-box-blog-text">
                      <p>'.$value[3].'</p>
                    </div>
                    <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                    <!--Read More Button-->
                  </div>
                </div>
              </div>';
                   } 
                ?>
</body>
</html>