<?php 

$firstname = $_REQUEST['name'];
$lastname = $_REQUEST['lastname']; 
   


if(isset($_POST['button'])){ 
    $host = "localhost"; 
    $user = "root"; 
    $password =""; 
    $db = "web_project"; 

    @$conn= mysqli_connect($host,$user,$password,$db);
    
    $insert= "insert into booking values('$name','$lastname')";
    
    mysqli_query($conn,$insert);

    if($conn){
       
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed</h1>");
    }
   
}

?>

