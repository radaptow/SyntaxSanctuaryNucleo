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
}

class Atributos {
   public function __construct () {}
   public function html () { return 'html'; }
   public function clase () { return 'class'; }
   public function id () { return 'id'; }
   public function lang () { return 'lang'; }
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
function ebo () {
  #complemento
  $ncaezad = new Simbolos;
  $ncaezad_etiquetas = new Etiquetas;
  $ncaezad_atributos = new Atributos;
  $menor_que = $ncaezad->menor_que ();
  $apertura_html = $ncaezad_etiquetas->html ();
  $idioma = $ncaezad_atributos->lang ();
  $igual_que = $ncaezad->igual_que ();
  return "$menor_que$apertura_html $idioma$igual_que'es'><head>";
}
#codificacion
function cfin () {
  #complemento
  $__x__ = new Simbolos;
  $__x__ = new Etiquetas;
  $__x__ = new Atributos;
  return '<meta charset="UTF-8">';
}
#viewport
function vpt () {
  #complemento
  $__x__ = new Simbolos;
  $__x__ = new Etiquetas;
  $__x__ = new Atributos;
  return '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}
#titulo tab
function tuab ($t) {
  #complemento
  $__x__ = new Simbolos;
  $__x__ = new Etiquetas;
  $__x__ = new Atributos;
  return "<title>$t</title>";
}
#apertura
function arta () {
  #complemento
  $__x__ = new Simbolos;
  $__x__ = new Etiquetas;
  $__x__ = new Atributos;
  return "</head><body id='ContenedorPrincipal'>";
}
#cierre
function cere () {
  #complemento
  $__x__ = new Simbolos;
  $__x__ = new Etiquetas;
  $__x__ = new Atributos;
  return "</body></html>";
}
#INICIO
function inicio () {
  echo ico();
  echo ebo();
  echo cfin();
  echo vpt();
  echo tuab('Syntax Sanctuary');
  echo arta();
}
#FIN
function fin () {
  echo cere();
}