<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom-color">
    <div class="container text-white">
    <a class="navbar-brand brand-custom" href="#">All About Vincent</a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse collapse-custom" id="navbarNav">
            <ul class="navbar-nav ms-auto" >
            <li class="nav-item p">
                <a class="nav-link" href="#">General</a>
            </li>
            <li class="nav-item p">
                <a class="nav-link" href="#">Learning</a>
            </li>
            <li class="nav-item p">
                <a class="nav-link" href="#">Project</a>
            </li>
            <li class="nav-item p">
                <a class="nav-link" href="#">Contact Me</a>
            </li>
            <li class="nav-item p">
                <a class="nav-link" href="#">Take a Photo</a>
            </li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="header">
        <div class="text-header">
            <h1>Hi! I'm <span class="auto-input"></span></h1>
            <p>But my friends also know me as Chincent(?). Always enthusiast in learning and trying new things, because as Chitato's motto goes, Life is never flat!</p>
        </div>
        <div class="image-header">
            <img class="rounded glow-border header-item1" src="img/img5.jpg" alt="">
            <img class="rounded glow-border header-item2" src="img/img2.jpg" alt="">
            <img class="rounded glow-border header-item3" src="img/img3.jpg" alt="">
            <img class="rounded glow-border header-item4" src="img/img1.jpg" alt="">
        </div>
    </div>
    <div class="container-card-custom">
        <div class="card" data-tilt>
            <div class="content">
                <h3 class="text-white display-4 ml-3">
                    Fun Fact!
                </h3>
                <div class="container text-white text-right float-end w-75 mt-4 fact-custom">
                    <p>
                        In 2021, Vincent was the 117th most popular boys name. There were 3,180 baby boys named Vincent in 2021. This means that Vincent is a very commonly used name. 
                        <br>Check Definition: "Pasaran"
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container map-custom">
        <div class="map-img">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.65295086644!2d106.68942951200853!3d-6.229386699094592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta!5e0!3m2!1sen!2sid!4v1680348678373!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="map-text">
            <h3 class="display-5">
                I was born in the <br>Capital City of Indonesia, Jakarta <br>on August 8th 2003
            </h3>
        </div>
    </div>

    <div class="container text-light edu-head-custom">
        <h2 display-5>
            Okay, let's move on to my education...
        </h2    >
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
    <script src="js/welcome.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
</body>
</html>