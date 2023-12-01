<?php  
session_start(); 
if(isset($_SESSION['id']))
{
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <link rel="stylesheet" href="./myStyle.css">
</head>
<body>
    <br> <br>
        <div class="card">
            <div class="circle">
                <img src="./images/4b6efefe99da3b1d79d8c50cde6c681a.jpg" >
            </div>
    <h1>Immanuel Nakale</h1>
    <h3><i>Software & Web Developer.</i></h3>
    <h2>  Who Am I ? </h2>
    <p><i> My name is Immanuel Nakale,<br><br> I'm a student at the Namibia University of Science and Technology who is currently doing a bachelors degree in Software Development.<br> <br> I'm also an aspiring Web and Software developer who still has much to learn.</i></p>
    <h2> How Can You Reach Me? </h2>
    <p> 
        <i>
            &#128241; Cell Phone: 0812345678 <br>
            &#128224; Telephone: 0612345678  <br>
            &#128279; Email: fake-email@gmail.com
        </i>
    </p>
    <h2> Additional links </h2>
    <table>
        
    <p>
        <i>
            <td>
            <button class="animated-button">&#128101; <a href="friends.html"> My Friends </a></button>
        </td>
        <td>
            <button class="animated-button">&#128195; <a href="info.html">More About Me</a> </button>
            </td>
            <td>
                <button class="animated-button">&#128195; <a href="landing_page.php">Back to GBV Page</a> </button>
                </td>
                <td>
        </i>
    </p>
    </table>
    <br> <br> <br>
    <button class="animated-button">&#x21b6;  <a href="logout.php">Logout</a> </button> 
</div>
<h4>&copy; Immanuel Nakale 2023</h4>
</body>
</html>
<?php
}
else{
    header("Location:loginForm.php");
}
?>