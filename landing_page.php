<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namibian Discussion Forum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Namibia GBV Discussion Forum</h1>
        <nav>
            <div class="item">
                home
            </div>
        <div class="item">
                <?php
                // Check if a session is active
                session_start();
                if (isset($_SESSION['id'])) {
                    // Display a link to the user's profile
                    echo '<a href="index.php">Profile</a>';
                } else {
                    // Display the Login link if no session is active
                    echo '<a href="loginForm.php">Login</a>';
                }
                ?>
            </div> 

            <div class="item">
                <?php
                // Check if a session is active
                if (isset($_SESSION['id'])) {
                    // Display a link to log out if a session is active
                    echo '<a href="logout.php">Logout</a>';
                } else {
                    // Display the Register link if no session is active
                    echo '<a href="registerform.php">Register</a>';
                }
                ?>
            </div>
        </nav>
    </header>

    <main>
    <br> <br>
    <div class="card">
        
        <br>
        <section id="home">
            
            <h2>Welcome to the Namibia GBV Discussion Forum</h2>
            <br>
            <i><p>Welcome to a platform dedicated to addressing a critical issue affecting our nation: Gender-Based Violence (GBV). We are committed to providing a safe and supportive space for Namibians to come together, share their experiences, and work towards a future free from GBV.</p></i>
        
            <h3>Understanding Gender-Based Violence</h3>
            <i><p>Gender-Based Violence (GBV) is a deeply rooted social issue that affects individuals and communities across Namibia. It encompasses a range of abusive behaviors and actions that are primarily directed at individuals because of their gender. GBV can manifest as physical, emotional, sexual, or economic violence and can happen in various settings, including homes, workplaces, and public spaces.</p></i>
        
            <h3>Our Mission</h3>
            <i><p>Our mission is to create awareness, provide support, and foster meaningful discussions about GBV in Namibia. We believe that by raising our voices and standing together, we can make a difference. Our objectives include:</p>
            <br>
            <div class="points">
                <ul>
                    <li>Providing a safe and anonymous platform for survivors and advocates to share their stories and experiences.</li>
                    <li>Raising awareness about the different forms of GBV and their impact on individuals and society.</li>
                    <li>Connecting survivors and supporters with resources, organizations, and professionals dedicated to combating GBV.</li>
                    <li>Advocating for policy changes and societal shifts that promote gender equality and prevent GBV.</li>
                </ul>
            </div> </i>

            <h3>Join the Discussion</h3>
            <i><p>We invite you to become part of the solution by joining our discussions, sharing your insights, and supporting those affected by GBV. Together, we can create a more inclusive and equitable Namibia where everyone can live free from fear and violence. <br> <a href="./loginForm.php"  class ="link">You have to Login to join the discussion.</a></p>
            <br>
            <p>Thank you for visiting the Namibia GBV Discussion Forum. Let's work together to make a positive impact and bring about change.</p>
                </i>
        

        
         
    </section>
    <br><br>
     <!-- #endregion -->
      </div>
</div>
</div>
<br> <br>
    </main>
    <footer>
        <h4>&copy; Immanuel Nakale 2023</h4>
    </footer>
  
</body>
</html>
