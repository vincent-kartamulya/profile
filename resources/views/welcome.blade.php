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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    @include("layouts.navbar")
    <div id="progress-bar"></div>

    <div class="header">
        <div class="text-header">
            <h1>Hi! I'm <span class="auto-input"></span></h1>
            <p>But my friends also know me as Chincent(?). Always enthusiast in learning and trying new things, because as Chitato's motto goes, Life is never flat!</p>
        </div>
        <div class="image-header">
            <img class="rounded glow-border header-item1" src="/img/home/img5.jpg" alt="">
            <img class="rounded glow-border header-item2" src="/img/home/img2.jpg" alt="">
            <img class="rounded glow-border header-item3" src="/img/home/img3.jpg" alt="">
            <img class="rounded glow-border header-item4" src="/img/home/img1.jpg" alt="">
        </div>
    </div>
    <div class="container-card-custom">
        <div class="card" data-tilt>
            <div class="content">
                <h3 class="text-white display-4 ml-3 fun-fact">
                    Fun Fact!
                </h3>
                <div class="container text-white text-right float-end w-75 mt-4 fact-custom">
                    <p>
                        In 2021, Vincent was the 117th most popular boys name. There were 3,180 baby boys named Vincent in 2021. This means that Vincent is a very commonly used name. In other words, if an individual with the name Vincent meet 10,000 individuals over the course of his or her lifetime, he or she would have a 99.984% probability of meeting at least one boy with the same given name.
                        <br>
                        <p class="fw-bold fst-italic">Check Definition: "Pasaran"</p>
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
            <h3 class="display-6">
                I was born in the <br>Capital City of Indonesia, Jakarta <br>on August 8th, 2003
            </h3>
        </div>
    </div>
    <div  id="learning">>

    </div>
    <div class="container text-light edu-head-custom">
        <h2 display-5>
            Okay, let's move on to my education journey...
        </h2>
    </div>

    <section id="timeline">

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url(/img/home/sd.jpg)"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">2009</p>
          </div>

          <div class="tl-content">
            <h1>SD SAN MARINO</h1>
            <p>Yes, this is my elementary school. For 6 years, I study, play and suffer in this school. This building holds many childhood memories for me</p>
          </div>

        </div>

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url(/img/home/smp.jpg)"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">2015</p>
          </div>

          <div class="tl-content">
            <h1 class="f3 text--accent ttu">SMP SAN MARINO</h1>
            <p>After 6 years of elementary school, it turns out that I actually went back to the same school for junior high. But fortunately I was able to pass it</p>
          </div>

        </div>

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url(/img/home/sma.jpg)"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">2018</p>
          </div>

          <div class="tl-content">
            <h1 class="f3 text--accent ttu">SMA SAN MARINO</h1>
            <p>The image feel similar from before? Yeah, because it's the same school. In this high school I majored in Science. Why? Because I want to.</p>
          </div>

        </div>

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url(/img/home/bli.jpg)"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">2021</p>
          </div>

          <div class="tl-content">
            <h1 class="f3 text--accent ttu">PPTI BCA</h1>
            <p>PPTI BCA is a scholarship program from BCA in the field of computer science. I'm currently in my 5th semester and will soon be taking part in On Job Training</p>
          </div>

        </div>
      </section>

    <div class="container text-light tired-ask-custom">
        <h3 display-5>
            You may ask, have you ever feel exhausted in PPTI?
        </h3>
    </div>



    <div class="container text-light tired-answer-custom">
        <h2 display-5>
            Of course, but..
        </h2>
    </div>

    <div class="container container-carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner carousel-inner-custom">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="/img/home/f1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/home/f2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="3000"    >
                <img src="/img/home/f3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
        </div>

        <div class="container map-text">
            <h3>
                I always got my friends who encourages me all the time. And of course we don't always study, of course there are some kind of hangout or "healing" too.
            </h3>
        </div>
    </div>

    <div class="container text-light edu-head-custom">
        <h2 display-5>
            What I've learned so far...
        </h2>
    </div>

    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="/img/home/cpp.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/java.png" height="100" width="150" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/python.png" height="100" width="175" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/html.png" height="130" width="140" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/css.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/js.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/mysql.png" height="150" width="150" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/R.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/cpp.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/java.png" height="100" width="150" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/python.png" height="100" width="175" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/html.png" height="130" width="140" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/css.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/js.png" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/mysql.png" height="150" width="150" alt="" />
            </div>
            <div class="slide">
                <img src="/img/home/R.png" height="100" width="100" alt="" />
            </div>
        </div>
    </div>

    <div id="project"></div>
    <div class="project-custom" >
        <div class="project-card">
            <div class="project-card-sec1">
                <div class="card card-1" style="width: 35rem;">
                    <img src="/img/home/zinfo.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title fw-bold display-6">Zinfo</h3>
                      <p class="card-text"><br>Zinfo is a website providing event information. Our team called "SEMANGAT 45" made this in the 4th semester Software Engineering course project. The dominant technologies used in this project are php, html, css, javascript</p>
                      <a href="https://github.com/vincent-kartamulya/zinfo" class="btn btn-primary btn-lg btn-custom button-hover color-9">View Zinfo</a>
                    </div>
                </div>
                <div class="card card-2" style="width: 35rem;">
                    <img src="/img/home/foundly.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title fw-bold display-6">Foundly</h3>
                      <p class="card-text"><br>Foundly is a web-based learning platform for children that uses object detection to display the names of objects around them in English. Our team called "PomfPomf V.3") made this in the 3rd semester Artificial Intelligence course project. The dominant technologies used in this project are python and react</p>
                      <a href="https://foundly.netlify.app/" class="btn btn-primary btn-lg btn-custom button-hover color-3">View Foundly</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-light project-name">
            <h3 class="display-3">
                My Project
            </h3>
            <p>In PPTI itself, of course, there are several projects. Projects that I have worked on are in Artificial Intelligence and Software Engineering courses. As time goes by, of course there will be more and more projects that I will work on. To see more click the button beside</p>
        </div>
    </div>

    <div class="container text-light contact-me" id="contactme">
        <h3 class="display-7">
            Got interested in me? Or just want to have a chat? Feel free to contact me!
        </h3>
    </div>
    <div class="flex-center">
        <a href="https://github.com/vincent-kartamulya/">
            <i class="fa fa-github fa-4x icon-3d " style="margin-left: 42%; margin-top: 1%"></i>
        </a>
        <a href="https://instagram.com/vincent_kart?igshid=ZDdkNTZiNTM=">
            <i class="fa fa-instagram fa-4x icon-3d"></i>
        </a>
        <a href="https://wa.me/081287966089">
            <i class="fa fa-whatsapp fa-4x icon-3d"></i>
        </a>
    </div>

    @include("layouts.footer")

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".auto-input",{
            strings: ["Vincent", "Student", "Human", "Sneakys"],
            typeSpeed: 100,
            backSpeed: 70,
            loop: true
        })
    </script>
    <script src="js/welcome.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
</body>
</html>
