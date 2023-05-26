<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="A:\DE Project\Unicons-Free-Icon-Font\unicons\css\unicons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    
    <script src="contactJS.js"></script>
    <link rel="stylesheet" href="contactCSS.css">
</head>

<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <section id="contact">
        <div class="contact-box">
            <div class="contact-links">
                <h2>CONTACT</h2>
                <div class="links">
                    <div class="link">
                        <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
                    </div>
                    <div class="link">
                        <a><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
                    </div>
                    <div class="link">
                        <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
                    </div>
                    <div class="link">
                        <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <form name="contactForm" onsubmit="return validateForm()">
                    <div class="form-item">
                        <input type="text" name="sender" required>
                        <label>Name:</label>
                    </div>
                    <div class="form-item">
                        <input type="text" name="email" required>
                        <label>Email:</label>
                    </div>
                    <div class="form-item">
                        <textarea class="" name="message" required></textarea>
                        <label>Message:</label>
                    </div>
                    <button class="submit-btn" onclick="addEventListener()">Send</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>