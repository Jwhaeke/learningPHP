<?php
    
    #   Not secure data is sent through the url
    if(isset($_GET['name'])){
        // print_r($_GET);
        $name = htmlentities($_GET['name']);
        // echo $name;
    }
    
    #   More secure
    // if(isset($_POST['name'])){
    //     print_r($_POST);
    //     $name = htmlentities($_POST['name']);
    //     echo $name;
    // }

    #   Can handle both GET and POST
    // if(isset($_REQUEST['name'])){
    //     // print_r($_REQUEST);
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    // }

    echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="email" id="">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>