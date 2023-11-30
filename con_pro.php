 <?php
 /*
$insert= false;
if( isset($_POST['name'])){

// set connection variable

$server="localhost";
$username ="root";
$password="";

//create  a database connection
$con = mysqli_connect($server,$username,$password);

//check for connection sucess
if(!$con){
    die("connection to this database failed due to".
     mysqli_connect_error());

}
echo "success connecting to the db";
 

// collect post variables
$name = $_post['name'];
 $gender= $_POST['gender'];
 $age= $_POST['age'];
 $email= $_POST['email'];
 $phone= $_POST['phone'];
 $desc= $_POST['desc'];
 $sql="INSERT INTO  `trip`.`trip`( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
  VALUES('$name','$age', '$gender', '$email', '$phone', '$desc', 
 current_timestamp());";
 
 //echo  $sql;

 // exexute the query
 if($con->query($sql)==true){
   //echo "sucesssfully inserted";

   //flag for sucessful inseration
   $insert =true;
 }
 else{
    echo " ERROR: $sql <br> $con->error";

 }
 //closed the database connection
 $con->Close();
}
*/

$con = mysqli_connect('localhost','root','','trip');
   if($con)
   {
    echo "success";
   } 
   
$name=$_POST['name'];
 $age= $_POST['age'];
 $gender= $_POST['gender'];
 $email= $_POST['email'];
 $phone= $_POST['phone'];
 $other= $_POST['other'];
 $query="insert into  trip(name,age ,gender,email,phone,other)
 values ('$name','$age', '$gender', '$email', '$phone', '$other')";
  mysqli_query($con,$query);
  //mysqli_query($con,$query);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to Travel place</title>
    <link rel="stylesheet" href="sty_pro.css">
</head>

<body>
    <div class="container">
        <h3> welcome to Cimage jaipur Trip form</h3>

        <p> Enter your details and submit this form to confirm your participation in the trip</p>
         <?php
        /*
        if($insert==true){
         
            echo"<p class='submitMsg>' Thanks for submiting your form. we are happy to see you joining us forJaipur trip</p>";
        }
        */
        ?>
        <form action="con_pro.php" method="post">
            <input type="text" name="name" id=" name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender"> 
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no">
            <textarea name="other" id="desc" cols="30 " row="18" placeholder="Enter any other information">

            </textarea>
            <button class="btr"> Submit </button>

        </form>
    </div>
    <script src="log_pro.js"></script>

</body>

</html>

    

