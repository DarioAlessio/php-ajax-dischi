<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DISCHI</title>
    <?php
        require 'data.php';
    ?>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- header with logo -->
    <header>
      <img src="https://www.scdn.co/i/_global/twitter_card-default.jpg">
    </header>

    <!-- song artist -->
    <main>
      <div class="container">
        <?php
            foreach ($database as $disco => $value){
              ?>
              <div class="card-song">
                <div class="title">
                   <?php   echo $value ['title']; ?>
                </div>
                <div class="author">
                   <?php   echo $value ['author']; ?>
                </div>
                <div class="year">
                   <?php  echo $value ['year']; ?>
                </div>
                <img class= "image" src=" <?php echo $value['poster']; ?>">
              </div>
              <?php
            }
        ?>
      </div>
    </main>
  </body>
</html>
