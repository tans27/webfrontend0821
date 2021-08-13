<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Music Store</title>
  <?php include("layout/head.html");?>
</head>
<body>
<?php include("layout/header.html");?>

<section class="main">
  <div class="container">
    <section class="main-col">
      <div class="rtl">
        <h3><b>Recently Played</b></h3>
        <div class="col-3">
          <a href="songs.php"><img src="img/r_music1.jpg" alt=""></a>
            <h4><b>Dream Your Moments (Duet)</b></h4>
              <p>Ava Cornish & Brian Hill</p>
        </div>
        <div class="col-3">
          <a href="songs.php"><img src="img/r_music2.jpg" alt=""></a>
          <h4><b>Until I Met You</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
        <div class="col-3">
          <a href="songs.php"><img src="img/r_music3.jpg" alt=""></a>
          <h4><b>Gimme Some Courage</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
        <div class="col-3">
          <a href="songs.php"><img src="img/r_music4.jpg" alt=""></a>
          <h4><b>Dark Alley</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
      </div>
    </section>

    <section class="main-col">
      <div class="album">
        <h3><b>Feature Album</b></h3>
        <div class="col-3">
          <a href="songs.php"><img src="img/song1.jpg" alt="song1"></a>
          <h4><b>One More Of A Stranger</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
        <div class="col-3">
          <a href="songs.php"><img src="img/song2.jpg" alt="song2"></a>
          <h4><b>Endless. Think</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
        <div class="col-3">
          <a href="songs.php"><img src="img/song3.jpg" alt="song3"></a>
          <h4><b>The Heartbeat Stop</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
        <div class="col-3">
          <a href="songs.php"><img src="img/song5.jpg" alt="song5"></a>
          <h4><b>Walking Promises</b></h4>
          <p>Ava Cornish & Brian Hill</p>
        </div>
      </div>
    </section>

    <section class="main-col">
      <div class="center">
        <div class="pagination">
          <a href="#">&laquo;</a>
          <a href="#">1</a>
          <a href="#" class="active">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">6</a>
          <a href="#">&raquo;</a>
        </div>
      </div>
    </section>

    <section class="main-col">
      <div class="trend">
        <h2>Trending Songs</h2>
        <img src="img/banner.png" style="width: 60%" alt="Trending">
        <h4><b>Record Breaking Album !</b></h4>
        <h5><i>With Passion For Real, Good Music</i></h5>
        <p>
          Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley, One More Of A Stranger, Endless. Think, The Heartbeat Stop, Walking Promises, Desires Games and many more
        </p>
      </div>
    </section>
  </div>
</section>

<?php include("layout/footer.html");?>
</body>
</html>