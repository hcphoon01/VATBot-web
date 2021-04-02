
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VATBot</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="css/welcome/animate.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" integrity="sha256-CuUPKpitgFmSNQuPDL5cEfPOOJT/+bwUlhfumDJ9CI4=" crossorigin="anonymous" /> --}}
  <link href="css/welcome/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/app.css" rel="stylesheet">
  <link href="css/welcome.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js" integrity="sha256-7OVlofZqMjR9/tg1YsQo/3c2ZI3nKwAn3Y8ODyfgwyc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.1/jquery.hoverIntent.min.js" integrity="sha256-CrEMvWblN4WeSnWiL9jjrFR+7JtCduEucOE3AIF3Y+k=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.js" integrity="sha256-vRcA6HQ42C3q7wQlOYINRAMuAPpjAmdORTQ1wv/jwtk=" crossorigin="anonymous"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/vatbot-logo.png" alt=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#stats">Stats</a></li>
          <li><a href="#call-to-action">Invite</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="{{ route('login.discord') }}">Login</a></li>
          {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to VATBot</h1>
      <h2>VATBot is a Discord bot designed to integrate with the VATSIM Network</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col content">
            <h2 class="title">About VATBot</h2>
            <p>
              VATBot is a Discord bot designed to integrate with the VATSIM Network. Some of its features include:
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-cloud-rain"></i></div>
              <h4 class="title"><a href="">Weather Request</a></h4>
              <p class="description">Get the METAR or TAF for any airport, it can also provide a decoded version of the METAR or TAF.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-plane-departure"></i></div>
              <h4 class="title"><a href="">En-route ATC</a></h4>
              <p class="description">Get an estimate of the ATC that will be encountered between 2 airports.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fas fa-headset"></i></i></div>
              <h4 class="title"><a href="">Active ATC</a></h4>
              <p class="description">Get a list of all the controllers active at a specific airport, along with all the departing/arriving traffic</p>
            </div>

          </div>

          {{-- <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div> --}}
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Stats Section ======= -->
    <section id="stats">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Stats</h3>
          <p class="section-description">Here are some miscellaneous stats about VATBot</p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" id="guildCount"></span>
            <p>Servers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" id="userCount"></span>
            <p>Users</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span id="uptime"></span> <span id="timeIdentifier"></span>
            <p>Uptime</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" id="latency"></span> <span>ms</span>
            <p>Latency</p>
          </div>

        </div>

      </div>
    </section><!-- End Stats Section -->

    <!-- ======= Invite ======= -->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Invite</h3>
            <p class="cta-text">Click the button to invite the bot to your Discord server, this requires you to have the 'Manage Server' permission on your server.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://discordapp.com/oauth2/authorize?client_id=630862807897997341&scope=bot&permissions=76864">Invite</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:&#105;&#110;&#102;&#111;&#64;&#118;&#97;&#116;&#98;&#111;&#116;&#46;&#110;&#101;&#116;">&#105;&#110;&#102;&#111;&#64;&#118;&#97;&#116;&#98;&#111;&#116;&#46;&#110;&#101;&#116;</a></p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://www.facebook.com/vatbotdiscord/" class="facebook"><i class="fab fa-facebook"></i></a>
              <a href="https://github.com/hcphoon01/VATBot" class="github"><i class="fab fa-github"></i></a>
              <a href="https://discord.gg/Htzybqa" class="discord"><i class="fab fa-discord"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="{{route('contact')}}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>VATBot</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Picture credits to Arvid Hansson
      </div>
      <div class="credits">
        <a href="{{route('policy')}}">VATBot Terms and Conditions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="js/welcome.js"></script>

</body>

</html>