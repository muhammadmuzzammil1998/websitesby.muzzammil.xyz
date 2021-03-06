<!--
<?php include("LICENSE"); ?>
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Muhammad Muzzammil">
    <meta name="keyword" content="Developer, Websites by muzzammil, Muhammad Muzzammil, .net, 1998, Disguise, Reader, swsh, OctoCSS, BingHomepageAPI, bing, image, happyNinja1998, happyNinja, reader 1998, muhammadmuzzammil1998"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A collection of some of the websites I made. :)" />
    <meta name="theme-color" content="#212121">
    <link rel="stylesheet" type="text/css" href="main.css?<?php echo rand(); ?>" />
    <title>Websites by Muzzammil</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js?<?php echo rand(); ?>"></script>
    <script>
        function ready() {
            document.getElementById("lContainer").style.display = "none";
        }
    </script>
</head>

<body onload="ready()">
<div id="cont-wrapper"><div id="switch-wrapper"><div id="switch"><div id="button"></div></div></div></div>
    <div id="lContainer">
        <div id="loader"></div>
    </div>
    <div class="website">
        <center>
            <div id="head">Websites developed, renovated, designed and maintained by Muhammad Muzzammil</div>
            <div id="deck">
<?php
$websites = json_decode(file_get_contents("data.json"));
foreach ($websites as $website) { ?>
                <div class="card<?php if (isset($website->class)) echo " " . $website->class;?>">
<?php if (isset($website->class)) echo '<div class="hidden-star">&#9733;</div>' . "\n" ?>
                    <img src="<?php echo $website->image . ".png"; ?>">
                    <cover><?php if(isset($website->github)) echo "<a href='" . $website->github . "' target='_blank'><github></github></a>";if(isset($website->url)) echo "<a href='" . $website->url . "' target='_blank'><url></url></a>"; if(isset($website->archive)) echo "<a href='" . $website->archive . "' target='_blank'><archive></archive></a>"?></cover>
                </div>
<?php } ?>
            </div>
            <div id="copy">&copy; Muhammad Muzzammil</div>
        </center>
    </div>
</body>

</html>