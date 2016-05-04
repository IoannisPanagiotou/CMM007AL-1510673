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
            <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ?>
            <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table>
                    <tr>
                        <td>Entry Title:</td>
                        <td><input type="text" name="name" required/></td>
                    </tr>
                    <tr>
                        <td>Entry Summary:</td>
                        <td><textarea name="summary" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Category:</td>
                        <td><select name="category" required>
                                <option value="work">Work</option>
                                <option value="university">University</option>
                                <option value="family">Family</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Submitted By: </td>
                        <td><input type="text" name="submittedBy"/></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Submit" />
            </form>
                <?
            }
            elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $entryTitle=$_POST["name"];
                $entrySummary=$_POST["summary"];
                $category=$_POST["category"];

                $sql="INSERT INTO blogview (entryTitle, entrySummary, category) VALUES ('$entryTitle','$entrySummary','$category')";
                if (mysqli_query($db, $sql)){
                }else{
                    echo "<br>Error: ".$sql."<br>".mysqli_error($db);
                }
                header("location: blog.php");
            }
            else{
                header("location: index.php");
            }?>
        </content>
        </div>
    </section>
    <footer>
        Designed by Ioannis Panagiotou, 2016
    </footer>
</main>
</body>
</html>
