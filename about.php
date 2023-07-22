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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">NeverSettle</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>



    <div class="jumbotron">
  <h1>NEVER SETTLE</h1>
  <p>I am a Full stack web developer</p>
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

    <footer>
        <p class="p-3 bg-dark text-white text-center">@NeverSettleProductons COPYRIGHT 2023</p>
    </footer>

</body>
</html>