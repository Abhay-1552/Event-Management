<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="aboutCSS.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <?php require 'partials/nav2.php'?>
    
    <div class="wrapper">
        <section class="hero" id="hero-aboutpage" style="background-image: url(images/about_heading.png);">
            <h1 class="hero-h1 center">MileStone</h1>
            <p class="hero-p">What we are about</p>
        </section>

        <section class="primary-about-content">
            <article class="our-story">
                <h2 class="center">Our Story</h2>
                <p class="center">The story of MileStone Software is the story of a group of underdogs. We’re a small
                    and
                    talented team with diverse backgrounds, based out of Ahmedabad.</p>
                <p class="center"> But we’re not a startup. We’ve specialized in some aspects of software solution,
                    while working we collaborated, overcame challenges, and empowered small businesses to thrive. Our
                    collective efforts made a lasting impact, inspiring others to embrace diversity and support small
                    business growth.</p>
            </article>

            <article class="who-we-are">
                <h2>Who we are:</h2>

                <img src="images/ap.JPG">
                <h3>Abhay Patel</h3>
                <p class="about-us-text center">Kerri's decades of practical business experience and her years spent
                    training users make her an invaluable resource of information and expertise.</p>

                <div class="row">
                    <div class="col-md-6">
                        <img src="images/up.jpg">
                    </div>
                    <div class="col-md-6">
                        <img src="images/dd.jpg">
                    </div>
                </div>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;Urvil Panchal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Darshan Gupta</h3>
                <p class="about-us-text center">Without Carlos's dedicated efforts we would not be able to provide the
                    world-class customer support that our customers recognize us for.</p>

                <div class="row">
                    <div class="col-md-6">
                        <img src="images/vpj.jpg">
                    </div>
                    <div class="col-md-6">
                        <img src="images/vp.jpg">
                    </div>
                </div>
                <h3 class="center">Vivek Panjwani and Vivek Patel</h3>
                <p class="about-us-text center">Terry has been an integral part of LookOut Software for over a decade
                    and has been instrumental in the development and refinement of our software.</p>
            </article>

            <article class="our-priorities">
                <h2 class="center">Our Priorities</h2>
                <ul class="fa-ul">
                    <li>
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-headphones fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3 class="brand-red">Supporting our customers</h3>
                        <p>Training, consulting and application configuration is and always has been our number one
                            priority.</p>
                    </li>
                    <li>
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3 class="brand-red">Improving our software</h3>
                        <p>We're constantly improving our software, releasing new features, and delivering performance
                            enhancements via monthly updates.</p>
                    </li>
                    <li>
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3 class="brand-red">Building custom solutions</h3>
                        <p>Our experience has refined our ability to build practical, flexible, powerful solutions that
                            can support unique business processes. </p>
                    </li>
            </article>
            <article class="about-page-cta">
                <h3>Want to get to know us better?</h3>
                <a href="contact.html">
                    <h4 class="contact-us-button">CONTACT US</h4>
                </a>
            </article>
        </section>
    </div>
</body>

</html>