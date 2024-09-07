
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    
    <script>
      const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
      );
      const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
      );
    </script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="./chedzee.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./home.css" />
  </head>
  <body>
    <section class="nav-navbar bg-color">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#">TAS Techonolgies </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse d-flex flex-column align-items-center justify-content-center fw-bold"
            id="navbarSupportedContent "
          >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >About Tas</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Services</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Pricing</a
                >
              </li>
              <li class="nav-item dropdown fw-bold">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  MegaMenue
                </a>
                <ul
                  class="dropdown-menu fw-bold"
                  aria-labelledby="navbarDropdown"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Blog
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Contact Us</a
                >
              </li>

              <button type="btn-sign" class="btn btn-primary rounded-5" name= "btn-sign">
                Sign In
              </button>
              
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section class="hero-section bg-color mb-4">
      <div class="container" style="background-color: bg-color; height: 90vh">
        <div class="row">
          <div
            class="col-12 col-md-12 col-lg-6 d-flex flex-column align-items-center justify-content-center my-5"
          >
            <h1>Sign Up To TAS Account !</h1>
            <div
              class="text-center p-5 border fw-bold my-4 rounded-5"
              style="background-color: white"
            >
              <div class="text-center">
                <div class="form my-4">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                      >Name:</label
                    >
                    <input type="email" class="form-control" />
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                      >Email address</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp"
                    />
                    <div id="emailHelp" class="form-text">
                      We'll never share your email with anyone else.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="exampleInputPassword1"
                    />
                  </div>

                  <button
                    data-bs-toggle="tooltip"
                    data-bs-title="JOIN US TODAY!"
                    class="btn btn-primary"
                  >
                    Register
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-6">
            <div class="text-center">
              <img src="./images/business-looking.png" style="width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="my-5 d-flex flex-column align-items-center"
      style="background-color: white"
    >
      <div class="text-center">
        <h1>We Are Build Awesome car template</h1>
        <hr class="fw-bold mb-3" width="20%" />
        <p>
          Et odio honestatis ius. Exerci numquam consequuntur no mei. Ut sed
          <br />
          ornatus tibique, fabellas pertinax est cu. Te odio omittam mea, ea
          tractatos dissentiunt complectitur nec. Liber voluptatum ad vis.
        </p>
        <br /><br />
        <div class="container my-2">
          <iframe
            width="400"
            height="315"
            src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"
          >
          </iframe>
        </div>
      </div>

      <section class="cards-products">
        <div class="container my-4">
          <div class="row d-flex flex-row">
            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>

              <hr class="fw-bold" />
            </div>

            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>

              <hr class="fw-bold" />
            </div>
            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>

              <hr class="fw-bold" />
            </div>
            <div class="col-lg-3 col-md-12 my-2">
              <div class="card" style="width: 18rem">
                <img
                  style="width: 40%"
                  src="https://99webpage.com/theme-review/landingpage/smooth/assets/icons/svg/cogs.svg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">All in one package</h5>
                  <p class="card-text">
                    Unum liber commune in mel, ut pri tritani propriae menandri.
                    Cum et magna porro intellegat.
                  </p>
                </div>
                <div class="card-body">
                  <a href="#" class="card-link">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-primary rounded-5">
              View More Features
            </button>
          </div>
        </div>
      </section>
    </section>

    <section class="testinomal-product" style="background-color: #edf3ff">
      <div class="container text-center my-4">
        <h1 class="fw-bold my-4">Product screenshot</h1>
        <div class="my-4" wid>
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" class="active"></li>
              <li data-target="#carouselExampleIndicators"></li>
              <li data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  class="d-block w-100"
                  src="./images/t1.jpeg"
                  alt="First slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="./images/t2.jpeg"
                  alt="Second slide"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="d-block w-100"
                  src="./images/t1.jpeg"
                  alt="Third slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="landingpage">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center"
          >
            <h1>Customizable Landing page</h1>

            <p>
              Hinc intellegebat ex eos, pro duis vidit graecis at, adhuc dolor
              consectetuer has at. Libris laboramus an eos, invidunt temporibus
              ut mel, illud urbanitas in eos. Eos no illud atqui, pri dicunt
              explicari interpretaris ne, no sit harum meliore. Esse cibo
              officiis ea nec.
            </p>
            <button class="btn btn-primary" ; style="width: 30%">
              learn more
            </button>
          </div>

          <div class="col-12 col-md-12 col-lg-6">
            <div class="text-center">
              <img src="./images/LP1.jpeg" style="width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <br /><br /><br />
    <section class="landingpage2">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <div class="text-center">
              <img src="./images/l2.jpeg" style="width: 100%" />
            </div>
          </div>
          <div
            class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center"
          >
            <h1>Save your money and time</h1>

            <p>
              At sit veniam evertitur democritum, ex modo tacimates nec, et
              inani regione abhorreant mel. Mei denique atomorum argumentum in,
              dicant recteque maiestatis ei mea. Vix dolorem dissentiet ex, ut
              ullum viderer pri. Principes complectitur et vim, quo ad quod
              tractatos mnesarchum.
            </p>
            <button class="btn btn-primary" ; style="width: 30%">
              learn more
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="package-selection text-center">
      <div class="container ">
          <h1 class="text-center fw-bold">Choose our package & <br>Acteved to premium
          </h1>
      <br><br>
      <div class="row">
          <div class="col-md-6 col-lg-4 item">
              <div class="box"><img class="rounded-circle" src="./images/1B3269A9-0D17-4520-91F8-9E0E80D1AED3_4_5005_c.jpeg">
                  <h3 class="name">Basic</h3>
                  <p class="title">From %59/ mo</p>
                  <p class="description"> <i class="bi bi-check text-success fw-bold "></i>5 html template</p>

                  <p class="description"><i class="bi bi-check text-success fw-bold "></i> 2 Free Vector
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> PSD File
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> Support
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> Documentation
                  </p>
              </div>
              <button class="btn btn-dark">Choose Plan</button>
          </div>
          <div class="col-md-6 col-lg-4 item">
             <div class="box"><img class="rounded-circle" src="./images/1B3269A9-0D17-4520-91F8-9E0E80D1AED3_4_5005_c.jpeg">
                  <h3 class="name">Basic</h3>
                  <p class="title">From %59/ mo</p>
                  <p class="description"> <i class="bi bi-check text-success fw-bold "></i>5 html template</p>

                  <p class="description"><i class="bi bi-check text-success fw-bold "></i> 2 Free Vector
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> PSD File
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> Support
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> Documentation
                  </p>
              </div>
              <button class="btn btn-primary">Choose Plan</button>

          </div>
          <div class="col-md-6 col-lg-4 item">
              <div class="box"><img class="rounded-circle" src="./images/1B3269A9-0D17-4520-91F8-9E0E80D1AED3_4_5005_c.jpeg">
                  <h3 class="name">Basic</h3>
                  <p class="title">From %59/ mo</p>
                  <p class="description"> <i class="bi bi-check text-success fw-bold "></i>5 html template</p>

                  <p class="description"><i class="bi bi-check text-success fw-bold "></i> 2 Free Vector
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> PSD File
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> Support
                  </p>
                  <p class="description"><i class="bi bi-x text-danger fw-bold "></i> Documentation
                  </p>
              </div>
              <button class="btn btn-warning">Choose Plan</button>

          </div>
      </div>
  </div>
</div>

    </section>
<br><br>
    <section class="recommeded reading " style="background-color: #EDF3FF;">
      <div class="container" >
        <br>
      <h1>Recommeded Reading </h1>
        <div class="row my-5">
          <div class="col-lg-6">
          <div class="card" style="width: 25rem;">
          <h5 class="card-title"><a href="#">News & Artical</a></h5>
          <p class="card-text"><a href="#">Some quick example text to build</a> </p>
          <img class="card-img-top" src="./images/banner.jpeg" alt="Card image cap">
          <div class="card-body">
          <div class="row">
          <div class="col-8">
          <img src="./images/robert.jpeg">
          <p class="fw-bold"> Posted by : <a class="#">Ence if</a</p>
          <p><a href="#">29 Dec 2018</a></p>
        </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card" style="width: 25rem;">
        <h5 class="card-title"><a href="#">News & Artical</a></h5>
        <p class="card-text"><a href="#">Some quick example text to build</a> </p>
        <img class="card-img-top" src="./images/banner.jpeg" alt="Card image cap">
        <div class="card-body">
        <div class="row">
        <div class="col-8">
        <img src="./images/robert.jpeg">
        <p class="fw-bold"> Posted by : <a class="#">Ence if</a</p>
        <p><a href="#">29 Dec 2018</a></p>
      </div>
        </div>
        </div>
      </div>
    </div>
      </div>
    </div>
</section>

  
<section class="banner " style="background-color: darkblue; height: 40vh;">
  <div class="text-center d-flex flex-column align-items-center justify-content-center">
  <h2 class="text-light fw-bold  my-5">Let's try it's free trail for 30 days
  </h2>
  <button class="btn btn-light rounded-5 fw-bold " style="font-size: 190%;">Get Started </button>

</div>

  
</section>


<!-- FOOTER SECTION START --> 
<footer class="main-footer-section ">
  

      <div class="footer-section py-5 text-dark">
          <div class="container">
              <div class="row">
                <div class="col-lg-2 col-md-6 col-6 mx-4">
                  <div class="footer-links">
                      <h4 class="text-dark mt-5 mb-3">TAS</h4>
                      <ul class="text-dark list-unstyled d-flex flex-column gap-2">
                          <li>St.Kemacetan timur No.13 Block Q2 Jakarta - Indonesia

                          </li>
                          <li>(021) 111-222-333-44

                          </li>
                          <li>info@yourdomain.com

                          </li>

                      </ul>
                  </div>
              </div>
                  <div class="col-lg-2 col-md-6 col-6">
                      <div class="footer-links">
                          <h4 class="text-dark mt-5 mb-3">Home</h4>
                          <ul class="text-dark list-unstyled d-flex flex-column gap-2">
                              <li>Our Story</li>
                              <li>Our blog</li>
                              <li>Our About</li>
                              <li>Our Details</li>

                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-6 col-6">
                      <div class="footer-links">
                          <h4 class="text-dark mt-5 mb-3">About</h4>
                          <ul class="text-dark list-unstyled d-flex flex-column gap-2">
                              <li>Our Events</li>
                              <li>Our people</li>
                              <li>Our office Tour</li>
                              <li>Our Missions</li>

                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-6 col-6">
                      <div class="footer-links">
                          <h4 class="text-dark mt-5 mb-3">Menue</h4>
                          <ul class="text-dark list-unstyled d-flex flex-column gap-2">
                              <li>Our Helpline</li>
                              <li>Our Guildlies</li>
                              <li>Our Associated</li>
                              <li>Our Branches</li>

                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12">
                      <div class="footer-links">
                          <h4 class="mt-5 mb-3 text-dark">Follow Us </h4>
                          <div class="icon-group mb-3 w-75">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-snapchat"></i>
                            <i class="bi bi-linkedin"></i>
                            <i class="bi bi-youtube"></i>
                             </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <div class="container">
          <hr class="container mx-auto">

          <div class="row">
              <div class="col-lg-8 col-12 ">
                  Copyright ©2023 All rights reserved. by TAS Solutions | Devloped By  <span class="bg-theme"> Syed Mohiuddin</span>
              </div>
              <div class="col-md-4 col-12  ">
                  <div class="d-flex justify-content-center justify-content-lg-end gap-5 mt-lg-0 mt-3">
                      <a href="https://www.instagram.com/mohid_here/" target="_blank">
                          <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                              <i class="fa-brands fa-instagram"></i>
                          </div>
                      </a>
                      <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                          <i class="fa-brands fa-whatsapp"></i>
                      </div>
                      <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
<!--                            <i class="fa-brands fa-whatsapp"></i>-->
                          <i class="fa-brands fa-twitter"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>
<!-- FORM SECTION ENDS -->
</body>



 
</html>





