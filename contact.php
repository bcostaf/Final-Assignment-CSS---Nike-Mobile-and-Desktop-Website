<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Nike</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header>
        <?php include("includes/header.php") ?>
    </header>
    <main>
        <div id="panel2" class="panel-container">
            <p id="contact">Need any help? Contact us!</p><br>


            <form class="forms">
                <label for="name">Full Name</label>
                <input class="fields" type="text" name="name" id="name" required size="10" maxlength="50"
                    placeholder="Bernardo Costa">
                <br>
                <label for="E-mail">E-mail</label>
                <input class="fields" type="text" name="E-mail" id="E-mail" required size="10" maxlength="50"
                    placeholder="bernardo.costa@outlook.com">
                <br>
                <label for="Subject">Subject</label>
                <input class="fields" type="text" name="Subject" id="Subject" required size="10" maxlength="50"
                    placeholder="Purchase">
                <br>
                <label for="name">Details</label><br>
                <textarea class="fields" id="details" name="details" rows="4" cols="40"></textarea>
            </form>


            <button class="btn" id="send">Submit</button>

            <p id="ty">Thank you for your message, we will contact you as soon as possible!</p>
        </div>

    </main>
    <footer>
        <?php include("includes/footer.php") ?>
    </footer>
    <script src="script.js"></script>
</body>

</html>