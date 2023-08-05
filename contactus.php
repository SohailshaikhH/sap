<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php'
  ?>

<body>
    <header>
        <?php
    include 'header.php';
    ?>
    </header>
    <section class="form-sectiontwo mb-5  ">
        <div class="container">
            <div class="underline-effect"></div>
            <h1 class="monospace display-5 headind-color py-5 m-0">GET IN TOUCH</h1>
            <div class="row ">
                <div class="col-lg-6 position-relative ">
                    <div class="vertical-linethree"></div>

                    <form class=" rounded-5 pad-zero" method="POST" action="contact.php"
                        onsubmit="return validateForm()" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"
                        data-aos-easing="ease-in-out">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 pb-1">
                                    <input type="text" style="width: 100%"
                                        class="form-control rounded-0 input-col form-feild py-3" id="nameInput"
                                        placeholder="Your Name*" name="name" />
                                    <div id="nameError" class="error-message "></div>
                                </div>
                                <div class="mb- pb-1">
                                    <input style="width: 100%" type="email"
                                        class="form-control input-col rounded-0 form-feild py-3" id="emailInput"
                                        placeholder="Email*" name="email" />
                                    <div id="emailError" class="error-message"></div>

                                </div>
                                <div class="py-3">
                                    <input style="width: 100%; height: 100%" type="tel"
                                        class="form-control input-col rounded-0 form-feild py-3" id="numberInput"
                                        placeholder="Mobile" name="number" />
                                    <div id="numberError" class="error-message"></div>

                                </div>
                            </div>
                            <div class="col-lg-12 underline-effectformtwo">
                                <div class=""></div>
                                <div class="mb- pb-1">
                                    <textarea style="width: 100%"
                                        class="form-control input-col rounded-0 form-feild py-3" id="textareaInput"
                                        placeholder="Your Message" rows="3 " name="textarea"></textarea>

                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btns orange headind-color p-0 roundede" style="margin-bottom:12px">
                                        SEND MESSAGE
                                    </button>
                                </div>
                                <div id="recaptcha" class="g-recaptcha"
                                    data-sitekey="6LexNu8mAAAAALsvbFA-piMG_E1Xz7vUbFqjIi7M" data-callback="onSubmit"
                                    data-size="invisible"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="bacgbgform" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800"
                        data-aos-easing="ease-in-out">
                        <div class="row infoshot">
                            <div class="col-lg-12 infoshotchild ps-5">
                                <h1 class="monospace fw-bold display-5 font-colors mt-4">
                                    Info
                                </h1>
                                <ul class="navbar-nav">
                                    <li class="nav-item py-4">
                                        <div class="d-flex align-items-baseline">
                                            <i class="bi bi-telephone font-colors pe-5"></i>

                                            <a class="text-white fw-lighter fs-4 d-block text-decoration-none py-2"
                                                aria-current="page" href="tel:022-22222222">
                                                022-2222 2222
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <i class="bi bi-envelope font-colors pe-5"></i>

                                            <a class="text-white fs-4 fw-lighter d-block pt-4 text-decoration-none py-2"
                                                style="word-break: break-all;" aria-current="page"
                                                href="mailto:contact@sceintificangle.com">
                                                contact@sceintificangle.com</a>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <i class="bi bi-geo-alt font-colors pe-5 fs-4"></i>

                                            <a class="text-white fs-4 fw-lighter pt-4 text-decoration-none py-2"
                                                href="">
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


        </div>
    </section>
    <?php
  include 'footer.php';
  ?>

    <?php

  include 'script.php'
    ?>
</body>

</html>