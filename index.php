<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Welcome to Mason&#39;s Deli</title>
  <style>
 
  /* Variables */
  :root {
    --main-color: rgb(216,211,186);
    --secondary-color: rgb(128,119,50);
    --icon-width: 240px;
    --mobile-icon-width: 140px;
    --footer-height: 30px;
    --background-color: rgba(0,0,0,0.7);
    --background-image: url('https://source.unsplash.com/featured/?food');
  }

  /* Resets */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
  }

  /* General */
  body, html {
    height: 100%;
    font-family: 'Montserrat', sans-serif;
    color: var(--main-color);
  }
  a {
    text-decoration: none;
    color: var(--main-color);
  }

  /* Background */
  .bgimg {
    background-image: var(--background-image);
  }
  .bgcover {
    background-color: var(--background-color);
  }
  .bgimg, .bgcover {
    position: fixed;
    height: 100%;
    width: 100%;
    background-position: center;
    Background-size: cover;
    z-index: -1;
  }

  /* Content */
  .container {
    height: 100%;
    padding: 0 10%;
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
    overflow: hidden;
  }
  .bgimg, .bgcover, .container {
    min-height: 450px;
    min-width: 310px;
  }
  img {
    width: var(--icon-width);
    padding-bottom: 40px;
  }
  h1 {
    font-size: 2.4rem;
    text-transform: uppercase;
  }
  p {
    margin: .5rem 0 1rem 0;
  }

  .button {
    border: 2px solid var(--main-color);
    margin: .5rem;
    padding: 12px;
    width: 160px;
    display: inline-block;
    transition: .3s ease-in-out;
  }
  .button:hover {
    background-color: var(--main-color);
    color: var(--secondary-color);
  }
  i {
    margin-right: 1rem;
  }

  /* Footer */
  .footer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    line-height: var(--footer-height);
    font-size: .8rem;
  }

  /* Media Queries */
  @media only screen and (max-width: 768px) {
    img {
      width: var(--mobile-icon-width);
    }
    h1 {
      font-size: 1.6rem;
    }
    p {
      font-size: .8rem;
    }
    .buttons {
      padding: 0 10%;
      max-width: 300px;
      margin: 0 auto;
    }
    .button {
      padding: 6px;
      border-width: 1px;
      font-size: .8rem;
    }
    .footer {
      font-size: .6rem;
    }
  }
  @media only screen and (max-height: 600px) {
    img {
      width: var(--mobile-icon-width);
    }
    h1 {
      font-size: 1.6rem;
    }
    p {
      font-size: .8rem;
    }
    .button {
      padding: 6px;
      border-width: 1px;
      font-size: .8rem;
    }
    .footer {
      font-size: .6rem;
    }
  }

  </style>
</head>
<body>
  <div class="bgimg"></div>
  <div class="bgcover"></div>
  <div class="container">
    <div class="logo animated rollIn">
      <img src="logo.png" alt="logo">
    </div>
    <h1>New Website Coming Soon</h1>
    <p><a href="https://goo.gl/maps/gUoGYinYnMZMiqC37" target="_blank" rel="noopener noreferrer">2 Atherton Street, Manchester M3 3GS</a> ~ <a href="tel:01614960150">T. 0161 496 0150</a></p>
    <div class="buttons animated bounceInUp">
      <a href="tel:01614960150">
        <div class="button"><i class="fas fa-phone"></i>Call Us</div>
      </a>
      <a href="mailto:info@example.com">
        <div class="button"><i class="fas fa-envelope"></i>Email Us</div>
      </a>
      <a href="https://goo.gl/maps/gUoGYinYnMZMiqC37" target="_blank" rel="noopener noreferrer">
        <div class="button"><i class="fas fa-route"></i>Directions</div>
      </a>
    </div>
    <div class="footer">&#169; <?php echo date('Y');?> Mason&#39;s Deli</div>
  </div>
</body>
</html>