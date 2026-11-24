<?php  

# firsthings1st

class Simbolos {
   public function __construct () {}
   public function menor_que () { return '<'; }
   public function mayor_que () { return '>'; }
   public function diagonal_derecha () { return '/'; }
   public function igual_que () { return '='; }
   public function comillas_dobles () { return '"'; }
   public function signo_admiracion () { return '!'; }
}

class Etiquetas {
   public function __construct () {}
   public function documento_html () { return 'DOCTYPE'; }
   public function html () { return 'html'; }
   public function head () { return 'head'; }
   public function meta () { return 'meta'; }
   public function title () { return 'title'; }
   public function body () { return 'body'; }
}

class Atributos {
   public function __construct () {}
   public function html () { return 'html'; }
   public function clase () { return 'class'; }
   public function id () { return 'id'; }
   public function lang () { return 'lang'; }
   public function charset () { return 'charset'; }
   public function name () { return 'name'; }
   public function content () { return 'content'; }
}

// el acento en este caso son las letras
// seleccionadas de la palabra completa
// seleccionada para formar el nombre
// de la funcion php del nucleo ss.

#inicio
function ico () {
  #complemento
  $nii = new Simbolos;
  $menor_que = $nii->menor_que ();
  $signo_admiracion = $nii->signo_admiracion ();
  $mayor_que = $nii->mayor_que ();
  $nii_etiquetas = new Etiquetas;
  $documento_html = $nii_etiquetas->documento_html ();
  $nii_atributos = new Atributos;
  $atributo_html = $nii_atributos->html ();
  return $menor_que.$signo_admiracion.$documento_html.$atributo_html.$mayor_que;
}
#encabezado
function ebo (string $en_que_idioma_esta_el_contenido_de_la_pagina) {
  #complemento
  $ncaezad = new Simbolos;
  $ncaezad_etiquetas = new Etiquetas;
  $ncaezad_atributos = new Atributos;
  $menor_que = $ncaezad->menor_que ();
  $apertura_html = $ncaezad_etiquetas->html ();
  $idioma = $ncaezad_atributos->lang ();
  $igual_que = $ncaezad->igual_que ();
  $mayor_que = $ncaezad->mayor_que ();
  $diagonal_derecha = $ncaezad->diagonal_derecha ();
  $apertura_head = $ncaezad_etiquetas->head ();
  return "$menor_que$apertura_html $idioma$igual_que'$en_que_idioma_esta_el_contenido_de_la_pagina'$mayor_que$menor_que$diagonal_derecha$apertura_head$mayor_que";
}
#codificacion
function cfin () {
  #complemento
  $odicacio = new Simbolos;
  $odiocacio_etiquetas = new Etiquetas;
  $odiocacio_atributos = new Atributos;
  $menor_que = $odicacio->menor_que ();
  $metag = $odiocacio_etiquetas->meta ();
  $charset = $odiocacio_atributos->charset ();
  $igual_que = $odicacio->igual_que ();
  $mayor_que = $odicacio->mayor_que ();
  return $menor_que.$metag.' '.$charset.$igual_que.'"UTF-8"'.$mayor_que;
}
#viewport
function vpt () {
  #complemento
  $iewor = new Simbolos;
  $iewor_etiquetas = new Etiquetas;
  $iewor_atributos = new Atributos;
  $menor_que = $iewor->menor_que ();
  $metag = $iewor_etiquetas->meta ();
  $name = $iewor_atributos->name ();
  $content = $iewor_atributos->content ();
  $mayor_que = $iewor->mayor_que ();
  $igual_que = $iewor->igual_que ();
  return $menor_que.$metag.' '.$name.$igual_que.'"viewport" '.$content.$igual_que.'"width=device-width, initial-scale=1.0"'.$mayor_que;
}
#titulo tab
function tuab ($t) {
  #complemento
  $itulot = new Simbolos;
  $itulot_etiquetas = new Etiquetas;
  $itulot_atributos = new Atributos;
  $menor_que = $itulot->menor_que ();
  $titulo = $itulot_etiquetas->title ();
  $diagonal_derecha = $itulot->diagonal_derecha ();
  $mayor_que = $itulot->mayor_que ();
  return "$menor_que$titulo$mayor_que$t$menor_que$diagonal_derecha$titulo$mayor_que";
}
#apertura
function arta () {
  #complemento
  $peur = new Simbolos;
  $peur_etiquetas = new Etiquetas;
  $peur_atributos = new Atributos;
  $menor_que = $peur->menor_que ();
  $diagonal_derecha = $peur->diagonal_derecha ();
  $headtag = $peur_etiquetas->head ();
  $identificador = $peur_atributos->id ();
  $igual_que = $peur->igual_que ();
  $mayor_que = $peur->mayor_que ();
  $bodytag = $peur_etiquetas->body ();
  return "$menor_que$diagonal_derecha$headtag$mayor_que$menor_que$bodytag $identificador$igual_que'ContenedorPrincipal'$mayor_que";
}
#cierre
function cere () {
  #complemento
  $ir = new Simbolos;
  $ir_etiquetas = new Etiquetas;
  $ir_atributos = new Atributos;
  $menor_que = $ir->menor_que ();
  $diagonal_derecha = $ir->diagonal_derecha ();
  $bodytag = $ir_etiquetas->body ();
  $mayor_que = $ir->mayor_que ();
  $htmltag = $ir_etiquetas->html ();
  return "$menor_que$diagonal_derecha$bodytag$menor_que$diagonal_derecha$htmltag$mayor_que";
}
#INICIO
function inicio (string $lang = 'en' , string $titulotab = 'Syntax Sanctuary') {
  echo ico();
  echo ebo($lang);
  echo cfin();
  echo vpt();
  echo tuab($titulotab);
  echo arta();
}
#FIN
function fin () {
  echo cere();
}
