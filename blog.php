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
            <ul>
                <?
                $sql_query = "select * from blogview";
                $result = $db->query($sql_query);
                while ($row = $result->fetch_array())
                {
                    $entryTitle=$row["entryTitle"];
                    $entrySummary=$row["entrySummary"];
                    $category=$row["category"];
                    $submitter=$row["submitter"];
                    echo "<li>{$entryTitle} by {$submitter} <br> {$category} <br> {$entrySummary} </li>";
                }
                ?>
            </ul>
        </content>
    </section>
    </div>
    <footer>
        Designed by Ioannis Panagiotou, 2016
    </footer>
</main>
</body>
</html>