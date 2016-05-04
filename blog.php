<?php
include("dbconnect.php");
/**
 * Created by PhpStorm.
 * User: 1510673
 * Date: 04/05/2016
 * Time: 10:47
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
</head>
<body>
<main class="grid-container">
    <section class="grid-33 tablet-grid-50 mobile-grid-100" id="maincontent">
        <header>
            <h1>myBlog</h1>
            <h2>because the internet needs to know what I think</h2>
        </header>
        <nav>
            <ul>
                <li><a href="blog.php">All Blog Items</a></li>
                <li><a href="blog.php">Work Items</a></li>
                <li><a href="blog.php">University Items</a></li>
                <li><a href="blog.php">Family Items</a></li>
                <li><a href="add.php">Insert a Blog Item</a></li>
            </ul>
        </nav>
        <br><br>
        <content>
            <h3>Today at work by Adam</h3><br>
            <h5>Work</h5><br>
            <p>Today I went to work and did lots of very complicated coding things. I was very pleased that I managed to
                finish them all</p><br>
            <h3>University Lecturer by Brian</h3><br>
            <h5>University</h5><br>
            <p>This week in university I had an amazing lecture. I can’t remember the name of the lecturer but he was really
                really good.</p><br>
        </content>
    </section>
    </div>
    <footer>
        Designed by Ioannis Panagiotou, 2016
    </footer>
</main>
</body>
</html>