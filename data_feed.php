<?php

$con =mysqli_connect('localhost','root');

if($con){
    echo "feedback is taken successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'feedbackpage');
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $comments = $_POST['comments'];

 $query="insert into data_feed (uname,email,comments) 
 values ('$uname','$email','$comments')";

 mysqli_query($con, $query);
 ?>