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
    <title>Namibian Discussion Forum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Namibian GBV Discussion Forum</h1>
    
    <nav>
        <ul>
            <li><a href="landing_page.php">Home</a></li>
        </ul>
    </nav>
    </header>

    <main>
        <br><br>
        <div class="card2">
            <table>
                <form action="register.php" method="post">
                    <h3>SIGN UP</h3>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <tr>
                    <td><label>Name</label></td>
                    <td>
                        <?php if (isset($_GET['name'])) { ?>
                            <input type="text" 
                                name="name" 
                                placeholder="Name"
                                value="<?php echo $_GET['name']; ?>"><br>
                        <?php }else{ ?>
                            <input type="text" 
                                name="name" 
                                placeholder="Name"><br>
                        <?php }?>
                    </td>
                    
                    <tr>
                        <td>
                            <label>User Name</label>
                        </td>
                        <td>
                            <?php if (isset($_GET['uname'])) { ?>
                            <input type="text" 
                                name="uname" 
                                placeholder="User Name"
                                value="<?php echo $_GET['uname']; ?>"><br>
                            <?php }else{ ?>
                                <input type="text" 
                                name="uname" 
                                placeholder="User Name">
                            <?php }?>
                        </td>

                    <tr>
                        <td>
                    <label>Password</label>
                            </td>
                    <td>
                    <input type="password" 
                            name="password" 
                            placeholder="Password">
                            </td>
                            </tr>
                    <td>
                    <label>Re Password</label>
                    </td>
                            
                    <td>
                        <input type="password" 
                            name="re_password" 
                            placeholder="Re_Password">
                    </td>
                    <tr>
                        <td colspan="2">
                            <button class="animated-button" type="submit">Sign Up</button>
                        </td>
                            </tr>

                    <tr>
                        <td colspan="2">
                    <a href="loginForm.php" class ="link">Already have an account?</a>
                            </td>
                    </tr>
                </form>
            </table>
                            </div>
                            <br><br>
            <footer>
                <br>
                <h4>&copy; Immanuel Nakale 2023</h4>
    </footer>
</body>
</html>
<?php    } ?>