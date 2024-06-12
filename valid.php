<?php
if(isset($_POST['fet'])){
    header('Location:fet.php');
}
else{
if(isset($_POST['submit'])) {
    session_start();
    $table=$_SESSION['table'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    
    
    $conn=mysqli_connect('localhost','root','','login');
    $query="SELECT * FROM $table";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_array($result);
    $use=$rows['name'];
    $passwor=$rows['password'];
    if($user==$use && $pass==$passwor){
        echo "<form action='fet.php' method='post'><button type='submit' name='fet' value=$table>Display data</button></form>";
    }
    else{
        echo '<script>alert("check the user name or password")</script>';
        
    }
}
}
    ?>