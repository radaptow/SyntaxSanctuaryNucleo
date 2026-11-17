<?php require_once 'nucleo/nco.php'; ?>

<?php if ( isset ( $_GET['ver'] ) ) {


      if ( $_GET['ver'] == 'documentacion' ) {
         echo ico();
         echo ebo();
         echo cfin();
         echo vpt();
         echo tuab('SyntaxSanctuary');
         echo arta();
         echo '<a href="workspace/comproint">Area de trabajo</a>';
         echo cere();
      } else {
         echo ico();
         echo ebo();
         echo cfin();
         echo vpt();
         echo tuab('SyntaxSanctuary');
         echo arta();
         echo '<a href="workspace/comproint">Area de trabajo</a>';
         echo cere(); 
      }


} else {


      echo ico();
      echo ebo();
      echo cfin();
      echo vpt();
      echo tuab('Syntax Sanctuary');
      echo arta();
      echo '<a href="index.php?'
      .'ver=documentacion">'
      .'documentacion</a>';
      echo cere();


} ?>
