<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alex Gaesser | Programmer</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
   <body>
     <header id="header">
       <a href="index.html" id="logo">
         <h1>Alex Gaesser</h1>
         <h2>Programmer</h2>
       </a>
       <nav id="navbar">
        <ul>
          <li><a href="../index.html">Portfolio</a></li>
          <li><a href="../about.html">About</a></li>
          <li><a href="../contact.html">Contact</a></li>
        </ul>
       </nav>
     </header>
     <div id="wrapper">
       <section>
        Thanks, <?php echo $_POST["fname"]; ?><br>
        I'll get back to you shortly!
        </section>
        <section>
            <a href='../about.html' class='button'>Back to the site</a>
        </section>
         <section>
             <ul id='visitors'>
                 
             </ul>
         </section>
       <footer>
         <a href="http://twitter.com/alexindeed"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
         <a href="http://facebook.com/alex.gaesser"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
         <a href="http://github.com/omegabytes"><img src="../img/gitHubLogo.png" alt="GitHub Logo" class="social-icon"></a>
         <a href="http://linkedin.com/in/alexgaesser"><img src="../img/linkedin_grey.png" alt="LinkedIn Logo" class="social-icon"></a>
         <a href="https://angel.co/agaesser-gmail-com"><img src="../img/angelListLogo.png" alt="AngelList Logo" class="social-icon"></a>
        <p>&copy; 2016 Alex Gaesser.</p>
       </footer>
     </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="../js/scripts.js"></script>
   </body>
</html>

<?php 
    
?>