<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>sap</title>
  <!-- Add Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="images/fevicon.jpg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="media.css  " />
  <!-- Add custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="py-2">
    <div class="container text-end">
      <a href="mailto:contact@bicxo.co" class="text-end text-decoration-none font-color">
        <i class="bi bi-envelope-fill px-2 font-color"></i>contact@scientificangle.in</a>
    </div>
  </div>
  <div class="container-fluid sticky-top" id="black">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="container p-0">
        <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" loading="lazy" style="width: 180px"
            alt="SAP" /></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
          <div class="wrapper justify-content-end">
            <div>
              <ul class="navbar-nav align-items-center gap-4">
                <li class="nav-item position-relative">
                  <a class="nav-link strline font-color" aria-current="page" href="">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="font-color nav-link dropdown-toggle text-center" aria-expanded="false">
                    Our Work
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="">Medico-marketing communication
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="">Continued Medical Education & Power point
                        presentations</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="">Patient education content
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="">KOL Management </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="">Manuscript writing</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-color" href="https://stage112.webdakaar.in/sap/blog/">Blog
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-color active" href="contactus.html">Contact us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <section class="form-sectiontwo mb-5 pb-4">
    <div class="container">
      <div class="underline-effect"></div>
      <h1 class="monospace display-6 headind-color py-5 m-0">GET IN TOUCH</h1>
      <div class="row ">
        <div class="col-lg-6 ">
          <div class="vertical-linethree"></div>

          <form class="form bg-white rounded-5 pad-zero" method="POST" action="contact.php"
            onsubmit="return validateForm()" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
            data-aos-easing="ease-in-out">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3 pb-1">
                  <input type="text" style="width: 100%" class="form-control rounded-0 input-col form-feild py-3"
                    id="nameInput" placeholder="Your Name*" />

                </div>
                <div class="mb- pb-1">
                  <input style="width: 100%" type="email" class="form-control input-col rounded-0 form-feild py-3"
                    id="emailInput" placeholder="Email*" />

                </div>
                <div class="py-3">
                  <input style="width: 100%; height: 100%" type="tel"
                    class="form-control input-col rounded-0 form-feild py-3" id="numberInput" placeholder="Mobile" />

                </div>
              </div>
              <div class="col-lg-12 underline-effectformtwo">
                <div class=""></div>
                <div class="mb- pb-1">
                  <textarea style="width: 100%" class="form-control input-col rounded-0 form-feild py-3"
                    id="messageInput" placeholder="Your Message" rows="3"></textarea>

                </div>
                <div class="d-flex justify-content-end mt-2">
                  <button class="btns orange headind-color p-0 roundede">
                    SEND MESSAGE
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 position-relative">
          <div class="bacgbgform">
            <div class="row infoshot">
              <div class="col-lg-12 infoshotchild ps-5">
                <h1 class="monospace fw-bold display-5 font-colors mt-4">
                  Info
                </h1>
                <ul class="navbar-nav">
                  <li class="nav-item py-4">
                    <div class="d-flex align-items-baseline">
                      <i class="bi bi-telephone font-colors pe-5"></i>

                      <a class="text-white fw-lighter fs-4 d-block text-decoration-none py-2" aria-current="page"
                        href="tel:022-22222222">
                        022-2222 2222
                      </a>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <i class="bi bi-envelope font-colors pe-5"></i>

                      <a class="text-white fs-4 fw-lighter d-block pt-4 text-decoration-none py-2" aria-current="page"
                        href="mailto:contact@sceintificangle.com">
                        contact@sceintificangle.com</a>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <i class="bi bi-geo-alt font-colors pe-5 fs-4"></i>

                      <a class="text-white fs-4 fw-lighter pt-4 text-decoration-none py-2" href="">
                        elit. Minima quae temporibus rem corrupti fugit ipsa
                        ullam.
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="nameError" class="error-message mt-5"></div>
      <div id="emailError" class="error-message"></div>
      <div id="numberError" class="error-message"></div>
      <div id="messageError" class="error-message"></div>
    </div>
  </section>
  <footer class="footerbg p-5 pb-1 pad-zero">
    <div class="container">
      <div class="footer-top">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <p class="footer-logo" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
              data-aos-easing="ease-in-out">
              <img alt="best-bi-tool-BiCXO_logo" src="images/logos/white logo.png" loading="lazy" width="160px" />
            </p>
            <p class="footer-logo text-justify text-white fs-6" data-aos="fade-up" data-aos-delay="100"
              data-aos-duration="800" data-aos-easing="ease-in-out">
              Welcome to Scientific Angle, where the language of medicine
              converges with the art of communication. We meticulously gather
              the strands of biomedical information and weave them into a
              tapestry of medically relevant and captivating communication.
            </p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0">
            <h3 class="text-white" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
              data-aos-easing="ease-in-out">
              OUR WORK
            </h3>
            <div class="menu-footer-menu-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
              data-aos-easing="ease-in-out">
              <ul class="list-group">
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#" aria-current="page">Medico-marketing</a>
                </li>

                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#">Countinued Medical</a>
                </li>
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#">pateint education</a>
                </li>
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#"> </a>
                </li>
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#">kol management</a>
                </li>
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="">Menuscript</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
            <h3 class="text-white" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
              data-aos-easing="ease-in-out">
              LINKS
            </h3>
            <div class="menu-footer-menu-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
              data-aos-easing="ease-in-out">
              <ul class="list-group">
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#">About us</a>
                </li>
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#">Blogs
                  </a>
                </li>
                <li class="nav-link p-1">
                  <a class="text-decoration-none text-white" href="#">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
            <script type="IN/FollowCompany" data-id="69413451" data-counter="right"></script>
            <div class="contaienr" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
              data-aos-easing="ease-in-out">
              <h3 class="fw-Bold text-white">CONTACT US</h3>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <div class="d-flex align-items-baseline">
                    <i class="bi bi-telephone-fill font-colors pe-4"></i>

                    <a class="text-white d-block text-decoration-none py-2" aria-current="page" href="tel:022-46055380">
                      022-4605 53 80
                    </a>
                  </div>
                  <div class="d-flex align-items-baseline">
                    <i class="bi bi-envelope-fill font-colors pe-4"></i>

                    <a class="text-white d-block text-decoration-none py-2" aria-current="page"
                      href="mailto:contact@bicxo.co">
                      contact@bicxo.co</a>
                  </div>
                </li>
              </ul>
              <ul class="info-share d-flex justify-content-start gap-4 pt-3 list-inline">
                <li class="list-inline-item font-colors">
                  <a target="_blank" href="#" rel="nofollow"><i class="bi bi-linkedin font-colors fs-5"></i></a>
                </li>
                <li class="list-inline-item font-colors">
                  <a target="_blank" href="#" rel="nofollow"><i class="bi bi-google font-colors fs-5"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="container-fluid footercolor">
    <div class="container px-5 py-3 pad-zero">
      <div class="row justify-content-between">
        <div class="col-lg-8 col-md-8 text-white">
          <span class="fs-6">All rights reserved
            <span class="text-decoration-none fs-6">ScientificAngle Publications
            </span>
            2023 |
            <a class="text-decoration-none fs-6 text-white" href="#">Privacy Policy</a>
          </span>
        </div>
        <div class="col-lg-4 col-md-4 text-white">
          <span class="fs-6">Designed and Developed by
            <a class="fs-6 text-decoration-none text-white footer" href="https://webdakaar.com/">WDDC</a></span>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="script.js" defer></script>
</body>

</html>