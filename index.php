
<?php 



 
// $connection = new mysqli("localhost","root","","first_website");
// if ($connection -> connect_error) {
//    echo "Failed to connect to MySQL: " . $connection -> connect_error;
//    exit();
//  }else {
//    echo "your connection is ready to use";
// }



// if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {
//     echo $_POST ['name'];
//     echo $_POST ['emali'];
//     echo $_POST ['phone'];
//     echo $_POST ['age'];
    
// }



$conn  = new mysqli("localhost","root","","first_website");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST ['name']; 
    
    $email = $_POST ['emali'];
   
    $phone = $_POST ['phone'];
  
    $area = $_POST ['area'];
}

$sql = "INSERT INTO Student_info (Student_Name,Email,Phone,Area) VALUES (?,?,?,?)";
$data = $conn->prepare($sql);
$data -> bind_param("ssss",$name, $email, $phone, $area);
$data-> execute() ;



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
        <input type="text" name="area" placeholder ="Your Location">
        <input type="submit" name="Submit">
    </form>
</body>
</html>