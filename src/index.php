<?php require_once 'nucleo/nco.php'; ?>

<?php if ( isset ( $_GET['ver'] ) ) {


      if ( $_GET['ver'] == 'documentacion' ) {
         echo ico();
         echo ebo();
         echo cfin();
         echo vpt();
         echo tuab('SyntaxSanctuary');
         echo arta();
         echo 'Area de trabajo 2 Acceso concedido';
         echo cere();
      } else {
         echo ico();
         echo ebo();
         echo cfin();
         echo vpt();
         echo tuab('SyntaxSanctuary');
         echo arta();
         echo 'Area de trabajo 3 Error 404';
         echo cere(); 
      }


} else {


      echo ico();
      echo ebo();
      echo cfin();
      echo vpt();
      echo tuab('Syntax Sanctuary');
      echo arta();
      echo 'Area de Trabajo 1 default<br>';
      echo '<a href="index.php?ver=documentacion">Acceder a el area de trabajo 2</a>';
      echo cere();


} ?>
