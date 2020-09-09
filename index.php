<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet" type="text/css">

<style>
@font-face {
  src: url("../assets/ThirdRail.ttf");
  font-family: 'ThirdRail';
}

h1,h2{
  font-weight: 700;
}

  h1 {
     color: #fed136;
       font-size: 8em;
              font-weight: 100;
              line-height: 30px;
              margin-bottom: 50px;
      font-family: 'ThirdRail', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  }

  h2{
   font-size: 3em;
           //font-style: italic;
           line-height: 40px;
           margin-bottom: 120px;
           font-weight: 200;
             font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;

}

  h2{
    font-size: 3em;
  }

  div.container {
    margin-top: 10%
  }

body {
  color: white;
  background-color: rgba(52, 58, 64, 0.9);
}

body:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  background-image: url(../assets/img/gearsbackground.jpg);
  width: 100%;
  height: 100%;
  opacity: 0.1;
  z-index: -1;
}

</style>

<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
  <div class="align-middle text-center">
    <h1>QA Academy</h1>
    <h2>Stránka určená všetkým budúcim testerom</h2>
  </div>
</div>
</body>


</html>