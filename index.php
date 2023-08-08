<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Force 1 Website</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <header>
        <?php include("includes/header.php")?>
    </header>
    <main>
        <section class="promo">
        <section class="videosection">
            <video src="https://media.about.nike.com/files/8dea0d2d-7ec4-433c-bc76-91df0b561d7c/Q4-HOMEPG-EDIT-OPT-042523.mp4" 
            autoplay="" muted="" loop="" class="video"></video>  
        </section>
        <section class="header">
            <h1>Air Force 1</h1>
            <div class="purchase">
                <h2>Purchase Now</h2>
            </div>
        </section>
        </section>
        <section class="info">
            <div id="info1">
                <img id="imginfo1" src="img/lifestyle.jpg">
                <p id="pinfo1">Lifestyle</p>
            </div>
            <div id="info2">
                <p id="pinfo2">Minimalist</p>
                <img id="imginfo2" src="img/minimalist.jpg">
            </div>
        </section>
    </main>
    <footer>
        <?php include("includes/footer.php")?>
    </footer>
</body>
</html>