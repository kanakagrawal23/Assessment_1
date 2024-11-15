<html data-theme="dark">

<head>
    <title>
        <center>Honours Assessment 1</center>
    </title>
    <link rel="stylesheet" href="/css/pico.min.css">
</head>

<body>
    <main class="container">
        <center>
            <form method="post" action="Assessment.php">
                <label>
                    <h3>Enter Your Name: </h3>
                </label>
                <input type="text" name="name" required>

                <label>
                    <h3>Favorite Food: </h3>
                </label><br>
                <input type="radio" name="food" value="Lasagna" required>
                <label for="Lasagna">
                    Lasagna
                </label><br>
                <input type="radio" name="food" value="Manchurian">
                <label for="Manchurian">
                    Manchurian
                </label><br>
                <input type="radio" name="food" value="Burger">
                <label for="Burger">
                    Burger
                </label><br><br>
                <input type="submit" value="Submit">
            </form>
            <?php
            if (empty($details)) {
                echo "<h1><center>Good $greeting $name. Your favorite food is $food.<center><h1>";
            }
            ?>
        </center>
    </main>
</body>

</html>