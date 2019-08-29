<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Cinema</title>
    <link rel="icon" href="favicon.ico">

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Sacramento" type="text/css" rel="stylesheet">
    <script src='../wireframe.js'></script>
  </head>

  <body>
    <header class = "header">
      <section class="section-1">
        <h1 class = "title">Lunardo Theatre</h1>
        <p class="slogan">
          Est. 1987</p>
      </section>
    </header>

    <nav class = "navbar">
      <section class="section-2">
        <div class="navbar";>
          <a class="link" href="#about">About Us</a>
          <a class="link" href="#news">News</a>
          <a class="link" href="#prices">Prices</a>
          <a class="link" href="#showing">Now Showing</a>
          <a class="link" href="#synopsis">Synopsis</a>
          <a class="link" href="#contact">Contact Us</a>
        </div>
      </section>
    </nav>

    <main>
      <section class="section-3">
        <div class = "about-us">
          <a class = "anchor" name="about">.</a>
          <div class="about-us-box">
            <h2 class = "section-title">About Us</h2>
            <div class = "about-info">After serving Seymour for many years, we, Lunardo Cinema,
              are proud to present our newly refurbished and improved state-of-the-art
              cinema for all your entertainment needs. A few of our many changes include
              more luxurious standard seats and recliner seats for those who opt for
              the first-class option. Our theatres are now also equipped with 3D Dolby
              Vision projection and Dolby Atmos sound to provide you with the best
              visual and auditory experience possible. <br><br> Come in today to see
              (and hear!) the difference!
            </div>
            <!-- <img src="http://www.profurn.com.au/wp-content/uploads/2016/09/538.jpg" alt="normal seats"  />
            <img src="http://www.profurn.com.au/wp-content/uploads/2016/07/Verona-Twin.png" alt="first-class seats"/> -->
          </div>
        </div>
        <hr>
        <div class = "news">
          <a class = "anchor" name="news">.</a>
          <div class="news-box">
            <h2 class = "section-title">News</h2>
            <div class = "about-info">
              <p>
                We have recently upgraded our seats to all new Profurn luxury seats.
              </p>
              <p>
                Standard viewers can enjoy the all new Profurn 538, which feature leather headrests and multi-angled backrest.
                On the other hand our first class viewers can enjoy the luxurious Profurn Verona seats. Also available as twin seats for those romantic dates!
                They are fully motorized reclining and include large cup holders.
              </p>
            </div>
            <!-- <img src="http://www.profurn.com.au/wp-content/uploads/2016/09/538.jpg" alt="normal seats"  />
            <img src="http://www.profurn.com.au/wp-content/uploads/2016/07/Verona-Twin.png" alt="first-class seats"/> -->
          </div>
        </div>
        <hr>
        <div class="prices" id = "prices">
          <div class="prices-box">
            <h2 class= "section-title">Prices</h2>
            <div class="price-row">
              <p>The Cinema offers discounted pricing weekday afternoons (ie weekday matinée sessions) and all day on Mondays and Wednesdays. </p>
              <table class = "table">
                <thead>
                  <th>Seat Type</th>
                  <th>Seat Code</th>
                  <th>All day Monday and Wednesday <br>AND 12pm on Weekdays</th>
                  <th>All other times</th>
                </thead>
                <tr>
                  <td>Standard Adult</td>
                  <td>STA</td>
                  <td>$14.00</td>
                  <td>$19.80</td>
                </tr>
                <tr>
                  <td>Standard Concession</td>
                  <td>STP</td>
                  <td>$12.50</td>
                  <td>$17.50</td>
                </tr>
                <tr>
                  <td>Standard Child</td>
                  <td>STC</td>
                  <td>$11.00</td>
                  <td>$15.30</td>
                </tr>
                <tr>
                  <td>First Class Adult</td>
                  <td>FCA</td>
                  <td>$24.00</td>
                  <td>$30.80</td>
                </tr>
                <tr>
                  <td>First Class Concession</td>
                  <td>FCP</td>
                  <td>$22.50</td>
                  <td>$27.00</td>
                </tr>
                <tr>
                  <td>Firt Class Child</td>
                  <td>FCC</td>
                  <td>$21.00</td>
                  <td>$24.80</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <hr>
        <div class="now-showing" id = showing>
          <h2 class="section-title">Now Showing</h2>
          <div class ="flexbox">
            <div class="movie 1">
              <img class="poster" src="https://images-na.ssl-images-amazon.com/images/I/71niXI3lxlL._SY606_.jpg" alt="the avengers:endgame poster"/>
              <h3 class="movie-title">The Avengers: Endgame <br> M</h3>
              <p class="description">
                Wednesday - 21:00<br>
                Thursday - 21:00<br>
                Friday - 21:00<br>
                Saturday - 18:00<br>
                Sunday - 18:00<br>
              </p>
            </div>

            <div class="movie 2">
              <img class="poster" src="https://d32qys9a6wm9no.cloudfront.net/images/movies/poster/3e/1057b1941fd7267062a7a6608bd63629_500x735.jpg?t=1556774279" alt="Top End Wedding poster"/>
              <h3 class="movie-title">Top End Wedding <br> M</h3>
              <p class="description">
                Monday - 18:00<br>
                Tuesday - 18:00<br>
                Saturday - 15:00<br>
                Sunday - 15:00<br>
              </p>
            </div>

            <div class="movie 3">
              <img class="poster" src ="https://images-na.ssl-images-amazon.com/images/I/71jOztWX9YL._SL1259_.jpg" alt="Dumbo poster"/>
              <h3 class="movie-title">Dumbo <br> PG</h2>
              <p class="description">
                Monday - 12:00<br>
                Tuesday - 12:00<br>
                Wednesday - 18:00<br>
                Thursday - 18:00<br>
                Friday - 18:00<br>
                Saturday - 12:00<br>
                Sunday - 12:00<br>
              </p>
            </div>

            <div class="movie 4">
              <img class="poster" src="https://m.media-amazon.com/images/M/MV5BODVjZThlMzMtZjQwNy00YjRlLWE5ZTMtMWVlMWUwM2U1NjRkXkEyXkFqcGdeQXVyODcyODY1Mzg@._V1_.jpg" alt="The Happy Prince poster" />
              <h3 class="movie-title">The Happy Prince <br> MA15+</h3>
              <p class="description">
                Wednesday - 12:00<br>
                Thursday - 12:00<br>
                Friday - 12:00<br>
                Saturday - 21:00<br>
                Sunday - 21:00<br>
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section class="synopsis" id = synopsis>
        <h2 class = "section-title">Synopsis</h2>
        <div class="synopsis-display">
          <h3 class="movie-title">The Avengers: Endgame &emsp; &emsp; M</h3>
          <iframe width="30%" height="20%" src="https://www.youtube.com/embed/TcMBFSGVi1c"
          frameborder="0" allowfullscreen></iframe>
          <h3 class="movie-information"><br>Plot Description</h3>
            <p>
              The grave course of events set in motion by Thanos that wiped out half
              the universe and fractured the Avengers ranks compels the remaining Avengers
              to take one final stand in Marvel Studios’ grand conclusion to twenty-two films,
              Avengers: Endgame.
            </p>
          <h3 class="movie-information"><br>Make a Booking</h3>
          <div class="booking">
            <button>Wednesday - 21:00</button>
            <button>Thursday - 21:00</button>
            <button>Friday - 21:00</button>
            <button>Saturday - 18:00</button>
            <button>Sunday - 18:00</button>
          </div>
        </div>
      </section>
      <hr>
    </main>

    <footer>
      <section class="section-5" id = "contact">
        <h3 class ="contact-details">Contact details </h3>
        <img class = "icon" alt = "Link to Lunardo Facebook" src = "images/icons/facebook.png" /></img>
        <img class = "icon" alt = "Link to Lunardo Twitter" src = "images/icons/twitter.png" /></img>
        <img class = "icon" alt = "Link to Lunardo Instagram" src = "images/icons/instagram.png" /></img>
        <address>Email: info@lunardo.com<br>
          Phone: (03) 8675 4672<br>
          56 Moonlight Way, Seymour, VIC, 3660<br><br>
        </address>

        <a href="https://github.com/pmkays/Lunardo" class = "myButton">Github Joint Repo</a>

        <p class = "student-info">
          <div class = "student-info">&copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            Ian Nguyen (S3788210) and Paula Kurniawan (S3782041).
          </div>

          <div class = "student-info">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
          <div class = "student-info">All images used are licensed free images unless indicated.</div>
          <div class = "student-info">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
          <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
        </p>
      </section>
    </footer>
  </body>
</html>