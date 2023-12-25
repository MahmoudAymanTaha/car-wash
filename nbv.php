<?php 

$firstname = $_REQUEST['fristname'];
$lastname = $_REQUEST['lastname']; 
$email = $_REQUEST['email'];   
$message = $_REQUEST['message']; 

if(isset($_POST['button1'])){ 
    $host = "localhost"; 
    $user = "root"; 
    $password =""; 
    $db = "web_project"; 

    @$conn= mysqli_connect($host,$user,$password,$db);
    
    $insert= "insert into contact values('$name','$lastname','$email',$message')";
    
    mysqli_query($conn,$insert);

    if($conn){
       
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed</h1>");
    }
   
}

?>

