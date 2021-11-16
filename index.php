<!DOCTYPE html>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.countdown.css">
<script type="text/javascript" src="js/jquery.plugin.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<link rel="icon" href="img\cropped-Max-favicon2-01-01-32x32.png">

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Life Battery</title>
</head>

<style media="screen">
body{
  background: #131722;
  font-family: 'Poppins', sans-serif;
  overflow:hidden;
}

h1{
  color:white;
}

#outer {
  width: 100%;
  height: 85vh;
  display: flex;
}

#inner {
  margin: auto;
  color: white;
  text-align: center;
}

.time{
  color: white;
}

.is-countdown {
  border: none!important;
  background: none!important;
}

hr{
  color: white;
  margin: 50px auto;
}

h6{
  color:white;
}
footer {
  display: flex;
  align-items: center;
  justify-content: center;
  color:white;
}

</style>
<body>

  <div id="outer" class="container">
    <div id="inner">
      <h1>人生很短暂，而我还未到过三亚</h1>
      <!-- <h1>人生很短暂，而我还未玩游世界</h1> -->
      <hr />
      <h2>Life Battery</h2>
      <div class="time"></div>

      <br>
      <hr />
      <h2>Lived</h2>
      <div class="lived"></div>
    </div>
  </div>

  <footer class="footer text">
    <h6>Powered by Max Liow @2021 Oct</h6>
  </footer>

</body>

<script>
//countdown refer to http://keith-wood.name/countdown.html
$('.time').countdown({until: new Date(2078, 08-1, 07)});

$(".lived").countdown({since: new Date(1996, 06-1, 18), format: 'd'});

</script>
</html>