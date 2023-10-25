<?php
 	$header = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title><?php echo $title; ?></title>
</head>

<body>

    <header>
    <div class="logo">
        <h1><a href="index.php">APARTMENT</a></h1>
    </div>

    <nav class="navbar">
        <ul class="navlist">
            <li class="navlist-item"><a href="index.php?page=gallery">Gallery</a></li>
            <li class="navlist-item"><a href="index.php?page=form">Contact us</a></li>
        </ul>
    </nav>
    </header>';
 
$footer = '
    <footer class="footer">
        <div class="social-icon">
            <a href="https://www.facebook.com"><img src="Icons/facebook.png" alt="Studio Apartment Facebook account"></a>
            <a href="https://www.instagram.com"><img src="Icons/instagram.png" alt="Studio Apartment Instagram account"></a>
        </div>

        <section class="newsletter-signup">
            <h3>Sign up for newsletter!</h3>
            <form class="newsletter-form" action="form.php" method="POST" id="theForm" autocomplete="on">
                <input type="text" placeholder="Enter your email" name="email" id="email" required>
                <button type="submit" value="Send" id="submit">Sign up</button>
            </form>
        </section>
    </footer>

</body>
</html>';
	
 ?>
