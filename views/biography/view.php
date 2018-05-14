<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/main2.css">


    <title>Heroes</title>
  </head>

  <body>
    <!-- Navbar -->   
   <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark col-lg-12">
  <a class="navbar-brand" href="#">
    <img src="/template/img/orden_otechestvennoy_voyny.png" width="50" height="50" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="nav ml-auto">
  <li class="nav-item">
    <a class="nav-link mx-5" href="/">Назад</a>
  </li>
</ul>
</div>
</nav>





<!-- Biography -->
<div class="md-slide">
   <div class="container-fluid">
      <div class="container">
        <div class="row">
          <!-- Person -->
          <div class="col-lg-4">
            <div><img src="<?=Biography::getImage($biography['id']);?>" class="photo" alt=""></div>
            <p class="fio"> <?=$biography['name'];?> </p>
            <div>
                <?=Biography::getRewardById($biography['id']);?>
            </div>
          </div>
           <!-- Description --> 
        <div class="col">
          <h1>Биография</h1>
          <p class="bio"> <?=$biography['bio1'];?> </p>
            <br><hr><br>
            <p class="bio2"> <?=$biography['bio2'];?> </p>
          </div>
        </div>
      </div>
    </div>
  


          <!-- Literature --> 
          <div class="container-fluid">
          <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="art">В литературе:</p>
            
              <?=$biography['literature'];?> 
           
          </div>
        </div>
      </div>
    </div>
          <!-- Movie --> 
          <div class="container-fluid">
          <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="art">В кинофильмах:</p>
      </div>
    </div>
  </div>
</div>
          <div class="container p-5">
              <div class="row">
              <div class="col"><div class="embed-responsive embed-responsive-16by9">
                <iframe src="<?=$biography['cinema'];?>" class="embed-responsive-item" allowfullscreen></iframe></div></div>
              <div class="col"><div class="embed-responsive embed-responsive-16by9">
                <iframe src="<?=$biography['cinema2'];?>" class="embed-responsive-item" allowfullscreen></iframe></div></div>
              <div class="col"><div class="embed-responsive embed-responsive-16by9">
                <iframe src="<?=$biography['cinema3'];?>" class="embed-responsive-item" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>

          
        



<hr>

</div>







<?php include ROOT.'/views/layouts/footer.php'; ?>