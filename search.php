<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
    <?php 
        $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'world') or die ("could not connect to mysql");

        //$search = mysqli_real_escape_string($connection, isset($_POST['searchterm']));

        if(isset($_POST['searchterm']))
        {
             //echo("Hello, " . $_POST['searchterm']);
             $search = $_POST['searchterm'];
             echo ("YOU SEARCH FOR: ".$search.'<br /><br />');
        }
 
        $find_videos = mysqli_query($connection, "SELECT name FROM country WHERE name LIKE '%$search%'", MYSQLI_STORE_RESULT);
        
        while ($data = $find_videos->fetch_assoc()) {
            //var_dump($data);
            $name = $data['name'];
            echo "$name<br />";
        }

        //$test = mysqli_query($connection, "SELECT name FROM country ORDER BY name", MYSQLI_STORE_RESULT);
        
        
    ?>

</body>
</html>