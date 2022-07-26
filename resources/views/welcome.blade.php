<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Background</title>
    <link rel="stylesheet" href="{{ asset('storage/video/style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

      <div class="home">
        <video autoplay muted loop>
          <source src="{{asset('storage/video/home.mp4')}}" type="video/mp4" />
        </video>
        <div class="overlay"></div>
        <div class="home-content">
          <h1>MEETING app.</h1>
          <h1>booking</h1>

          <div class="middle-line"></div>
          <div>
          <a  href="/login"> <button><span>LOGIN </span></button></a>
          <a  href="/register"> <button><span>REGISTER </span></button></a>
          </div>
        </div>
      </div>

  </body>
</html>