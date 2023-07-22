<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lumanosimo&family=Roboto+Condensed&family=Tektur&display=swap"
      rel="stylesheet"
    />

    <title>Document</title>
  </head>

  <body>
    
  <?php include 'menu.php'; ?>

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./images/Technology (1).png"
            alt="Los Angeles"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./images/Technology (2).jpg"
            alt="Chicago"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./images/Technology (3).jpg"
            alt="New York"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./images/Technology (6).jpg"
            alt="New York"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./images/Technology (9).jpg"
            alt="New York"
            width="1100"
            height="500"
          />
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">About Us</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="./images/Meeting (1).jpg" class="img-fluid aboutimg" />
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">Hiee this is Ujjwal Chourasia</h2>
            <p class="py-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde
              omnis dolor velit natus laboriosam, dignissimos sunt obcaecati?
              Amet adipisci quasi fuga provident quod eligendi explicabo nostrum
              recusandae.
            </p>
            <a href="about.php" class="btn btn-success">More Info</a>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Our Services</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="./images/assets1.png"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="./images/assets2.jpeg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img
                class="card-img-top"
                src="./images/assets3.jpg"
                alt="Card image"
              />
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="my-5">
        <div class="py-5">
          <h2 class="text-center">Our Gallary</h2>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets11.jpeg" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets12.png" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets9.png" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets14.jpeg" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets15.png" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets16.jfif" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets17.png" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets4.jfif" class="img-fluid pb-4 ">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="./images/assets5.jpeg" class="img-fluid pb-4 ">
                </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
          <h2 class="text-center">Join Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@NeverSettleProductons COPYRIGHT 2023</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
