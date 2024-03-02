<?php
  session_start();
  if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $interval = time() - $_SESSION['auth-moment'];
    if($interval > 60) {
      unset($_SESSION['user']);
      unset($_SESSION['auth-moment']);
      $user = null;
    }
    else{
      $user = $_SESSION['user'];
      $_SESSION['auth-moment'] = time();
    }
  }
  else{
    $user = null;
  }

  if(isset($_GET['logout']) && $_GET['logout'] === 'true') {
    // Обнулення сесії
    unset($_SESSION['user']);
    unset($_SESSION['auth-moment']);
    $user = null;

    // Перенаправлення  на головну сторінку 
    header('Location: /');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Compiled and minified CSS -->    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css/">   
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
   <link rel="stylesheet" href="/css/site.css" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HW_PHP</title>
</head>
<body>
     <nav>
       <div class="nav-wrapper  pink darken-4"><!--#aa00ff-->
         <a href="/" class="brand-logo"><img src="/img/php.png"/></a>
           <ul id="nav-mobile" class="right">
               <?php foreach( [
                  'basics' => 'Основи',
                  'layout' => 'Шаблонізація',
                  'regexp' => 'Регулярні вирази',
                  'api'    => 'API', 
                 // 'signup' => 'Реєстрація',
                ] as $href => $name ) : ?>
                  <li <?= $uri==$href ? 'class="active"' : '' ?> ><a href="/<?= $href ?>"><?= $name ?></a></li>
              <?php endforeach ?>


              <?php if($user != null){ ?>           
          <li><a href="/profileupdate">
            <img src="/avatar/<?php echo $user['avatar']; ?>" class="nav-avatar" />
          </a></li>          
          <li><a href="?logout=true"><i class="material-icons">logout</i></a></li>
        <?php } else { ?> 
          <!-- Modal Trigger -->
          <li><a href="#auth-modal" class="modal-trigger"><i class="material-icons">key</i></a></li>
          <li><a href="/signup"><i class="material-icons">person_add</i></a></li>
        <?php } ?>

          </ul>
      </div>
     </nav>
  
 <!-- <?php echo $user['avatar']; ?> -->
<!-- <?=var_export($user, true)?> -->
<!-- Auth in <?= $interval ?> sec -->
<div class="container">
    <?php include $page_body ; ?>   
  </div>  

               <!-- Modal Structure -->
  <div id="auth-modal" class="modal">
  <div class="col s12">
    <div class="modal-content">
      <h4>Введіть e-mail та пароль для входу</h4>
      <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="user-input-email" type="text" class="validate" name="auth-email">
          <label for="user-input-email">Email</label>
      </div>
      <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="user-input-password" type="password" class="validate" name="auth-password">
          <label for="user-input-password">Password</label>
      </div>
    </div>
    <div class="modal-footer">
      <button class="modal-close btn-flat grey">Закрити</a>
      <button class="btn-flat orange" style="margin-left:15px" id="auth-button">Вхід</button>
    </div>
  </div>
</div>

    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
<script src="/js/site.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous">
</script>
    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous">
</script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous">
</script> 

</body>
</html>
