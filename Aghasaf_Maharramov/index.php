<!DOCTYPE html>
<?php 
    include "db.php";
    $sql = "SELECT * FROM `main`;";
	$run = mysqli_query($con, $sql);
	$bring = mysqli_fetch_assoc($run);
	$namesurname = $bring['nameSurname'];
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $namesurname ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <?php
        include 'navbar.php';
        include 'videoModal.php';
        include 'header.php';
        include 'about.php';
        include 'qualification.php';
        include 'skill.php';
        include 'language.php';
        include 'portfolio.php';
        include 'contact.php';
        include 'footer.php';
    ?>

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <?php
        include 'jsLibraries.php';
    ?>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script>
      (function() {
            emailjs.init('3TdgcyeKBD74y_1FL');
        })();
    </script>
    <script>
        const name = document.querySelector("#name")
        const email = document.querySelector("#email")
        const subject = document.querySelector("#subject")
        const message = document.querySelector("#message")
        const admin = document.querySelector("#admin")
        admin.style.display = "none"
        
        const contactForm = document.querySelector("#contactForm")
        contactForm.addEventListener('submit', (e) => {
            console.log(name.value);
            e.preventDefault();
            if(name.value && email.value && subject.value && message.value){
            emailjs.sendForm('service_0lxo0u2', 'template_gdx41xq', contactForm)
            .then((result) => {
                console.log(result.text);
            }, (error) => {
                console.log(error.text);
            });
             }
        });
    </script>
</body>
</html>