
<?php 




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $_POST ['name']; 
    echo "<br>";
    echo $_POST ['emali'];
    echo "<br>";
    echo $_POST ['phone'];
    echo "<br>";
    echo $_POST ['age'];
} else {
    echo "Your Data is Empty";
}



// if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {
//     echo $_POST ['name'];
//     echo $_POST ['emali'];
//     echo $_POST ['phone'];
//     echo $_POST ['age'];
    
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for submit data</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
        <h2>This is form</h2>
        <input  type="text" name="name" placeholder="Your Name">
        <input type="email" name="emali" placeholder="Your Email address">
        <input type="text" name="phone" placeholder ="Your Phone Number">
        <input type="text" name="age" placeholder ="Your age">
        <input type="submit" name="Submit">
    </form>
</body>
</html>