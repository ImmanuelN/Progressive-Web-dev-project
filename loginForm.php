<?php  
session_start(); 
if(isset($_SESSION['id']))
{
	header("location:landing_page.php");
}
else{
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namibian Discussion Forum Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <h1>Namibian GBV Discussion Forum</h1>
        <nav>
        <ul>
            <li><a href="./landing_page.php">Home</a></li>
        </ul>
    </nav>
    <br>
    </header>

    <main>
        <br><br>
    <div class="card2">
    <section id="login">
        <br>
        <form id="loginForm" action="loginProcess.php" method="post">
            
                <h3>LOGIN</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <table>
                <tr>
                    <td>
                        <label>User Name</label>
                    </td>
                    <td>
                        <input type="text" name="uname" placeholder="User Name">
                    </td>               
                </tr> 
                <tr>   
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" placeholder="Password">
                </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="animated-button" type="submit">Login</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <a href="registerForm.php" class ="link">Create an account?</a>
                            </td>
                </tr>
                </table>
        </form>
        </section>
        </div>
        <br><br>
    </main>
        <footer>
        <h4>&copy; Immanuel Nakale 2023</h4>
        </footer>
</body>
</html>
<?php    } ?>