<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title></title>

    <link rel="stylesheet" href="css/main.css" />

</head>
<body>
    <div id="page">

        <!-- header -->
        <?php
            include 'header.php';
        ?>
        <div id="content">

            <!-- homepage/layout -->
            <?php
                include $content;
            ?>

        </div>

        <!-- footer -->
        <?php
            include 'footer.php';
        ?>

    </div>

</body>
</html>