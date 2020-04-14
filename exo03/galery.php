<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php
        $dirname = "img/";
        $images = glob($dirname . "*.jpg");

        foreach ($images as $image) {
            echo '<img src="' . $image . '" /><br />';
        }
        ?>
    </section>
</body>

</html>