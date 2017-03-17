<?php
  session_start();

  include'conex/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Steps es una empresa de servicios informáticos que comenzó su camino como Vértigo Consultores Asociados en el año 2004"/>
    <meta name="keywords" content="Steps,Sistema,Software,Aplicaciones"/>
    <title>Step Solutions C.A</title>
    <link rel="icon" type="img/png" href="img/logos_divisiones/logo_1.png">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="dist/wow.min.js"></script>

      <script>
      new WOW().init();
            </script>
  </head>
<!--CUERPO-->
  <body>
  <!--DROPDOWNS-->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Misi&oacute;n</a></li>
        <li><a href="#!">Visi&oacute;n</a></li>
        <li><a href="#!">Objetivos</a></li>
        <li><a href="#!">Sedes</a></li>
  </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">Aplicaciones Web</a></li>
        <li><a href="#!">Aplicaciones Desktop</a></li>
        <li><a href="#!">Aplicaciones Dispositivos Android</a></li>
        <li><a href="#!">Aplicaciones Dispositivos IOS</a></li>
        <li><a href="#!">Aplicaciones Empresariales</a></li>
        <li><a href="#!">Manuales de <br>Procesos Empresariales</a></li>        
  </ul>
    <ul id="dropdown3" class="dropdown-content">
        <li><a href="#!">Éducatif CTRL+</a></li>
        <li><a href="#!">Éducatif Admin</a></li>
        <li><a href="#!">Éducatif Cloud</a></li>
        <li><a href="#!">Éducatif Mobile</a></li>
        <li><a href="#!">Steps SMS</a></li>
        <li><a href="#!">Sicoco Web</a></li>
        <li><a href="#!">Sicoco Desk</a></li>
  </ul>
   <ul id="dropdown4" class="dropdown-content">
        <li><a href="#!">Nuestro Personal</a></li>
        <li><a href="#!">Colaboradores</a></li>
        <li><a href="#!">Trabaja con Nosotros</a></li>
  </ul> 
    <ul id="dropdown5" class="dropdown-content">
        <li><a href="#!">Educatif</a></li>
        <li><a href="#!">Novigo</a></li>
        <li><a href="#!">Salut</a></li>
        <li><a href="#!">Bauen</a></li>
        <li><a href="#!">Solutions</a></li>
  </ul>
     <ul id="dropdown6" class="dropdown-content">
        <li><a href="#!">Educatif</a></li>
        <li><a href="#!">Novigo</a></li>
        <li><a href="#!">Salut</a></li>
        <li><a href="#!">Bauen</a></li>
        <li><a href="#!">Solutions</a></li>
  </ul>

  <!--MOVIL-->
    <ul id="dropdownp1" class="dropdown-content">
          <li><a href="#!">Misi&oacute;n</a></li>
          <li><a href="#!">Visi&oacute;n</a></li>
          <li><a href="#!">Objetivos</a></li>
          <li class="divider"></li>
          <li><a href="#!">Sedes</a></li>
  </ul>
    <ul id="dropdownp2" class="dropdown-content">
          <li><a href="#!">Aplicaciones Web</a></li>
          <li><a href="#!">Aplicaciones Desktop</a></li>
          <li><a href="#!">Aplicaciones Dispositivos Android</a></li>
          <li><a href="#!">Aplicaciones Dispositivos IOS</a></li>
          <li><a href="#!">Aplicaciones Empresariales</a></li>
          <li><a href="#!">Manuales de <br>Procesos Empresariales</a></li>        
  </ul>
    <ul id="dropdownp3" class="dropdown-content">
        <li><a href="#!">Éducatif CTRL+</a></li>
        <li><a href="#!">Éducatif Admin</a></li>
        <li><a href="#!">Éducatif Cloud</a></li>
        <li><a href="#!">Éducatif Mobile</a></li>
        <li><a href="#!">Steps SMS</a></li>
        <li><a href="#!">Sicoco Web</a></li>
        <li><a href="#!">Sicoco Desk</a></li>
  </ul>
    <ul id="dropdownp4" class="dropdown-content">
        <li><a href="#!">Nuestro Personal</a></li>
        <li><a href="#!">Colaboradores</a></li>
        <li><a href="#!">Trabaja con Nosotros</a></li>
  </ul>
    <ul id="dropdownp5" class="dropdown-content">
          <li><a href="#!">Educatif</a></li>
          <li><a href="#!">Novigo</a></li>
          <li><a href="#!">Salut</a></li>
          <li><a href="#!">Bauen</a></li>
          <li><a href="#!">Solutions</a></li>
   </ul>
   <ul id="dropdownp6" class="dropdown-content">
   
   </ul>
<!--FIN DROPDOWNS-->
  
  <!-- VENTANAS MODALES -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4 class="header blue-text">¿Qui&eacute;nes Somos?</h4>
       <img id="mod-img" src="img/logos_divisiones/logo.png" class="responsive-img"><br>
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="material-icons orange-text">done</i>Misi&oacute;n</div>
              <div class="collapsible-body"><p> Ofrecer a nuestros clientes la más amplia gama de servicios y soluciones tecnológicas,innovadoras y de calidad, en los sectores: Educativo, Empresarial y Institucional, Salud, Construcción e Innovación y Tecnología, con la mayor calidad y responsabilidad, que les permitan optimizar sus procesos y cumplir sus objetivos, para aumentar su rentabilidad, y la de nuestros colaboradores y de  nuestra empresa, en pro de financiar el crecimiento e investigación de nuevas tecnologías innovadoras del personal.</p></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons orange-text">visibility</i>Visi&oacute;n</div>
              <div class="collapsible-body"><p>Ser una empresa líder en el sector de Tecnología de información, con proyección nacional, e internacional, reconocida por brindar soluciones y servicios de excelente calidad. Una empresa humana, con valores fortalecidos donde su personal sea productivo y no dependiente, ofreciendo productos y soluciones de calidad, manteniendo una línea de visión ecológica.</p></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons orange-text">grade</i>Objetivos</div>
              <div class="collapsible-body"><p>Ofrecer una gama de Soluciones Tecnológicas Integrales de punta, basadas en innovación, estándares y metodologías probadas de éxito, compuesta por los Productos y Servicios de más alta calidad del mercado Nacional e Internacional, que permitan cubrir las necesidades y expectativas de  nuestros Clientes, operando en altos rangos de rentabilidad, garantizando utilidades a los accionistas  y empleados.</p></div>
            </li>
         </ul>     
  </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close btn waves-effect orange darken-1 ">Cerrar</a>
    </div>
</div>
  <!---->

<!--INICIAR SESION-->
  <div id="modal2" class="modal">
    <nav class="nav-wrapper">
      <div class="top-navbar-content">
        <ul class="center">
          <li><span style="font-size:2rem;">&nbsp;INICIAR SESI&Oacute;N</span></li>
           <img class="responsive-img face" src="img/logos_divisiones/logo_1.png"/>     
        </ul>
      </div>
    </nav>
  <div class="modal-content">
    <div class="top-navbar-content" style="overflow-x:hidden;">
     <fieldset>
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix grey-text">perm_identity</i>
              <input id="name_u"  name ="nom1"  type="email" class="validate">
              <label for="name">Nombre de usuario</label>
          </div>
      <div class="input-field col s12">
            <i class="material-icons prefix grey-text">lock_outline</i>
              <input id="con_u"  name ="pass1"  type="password" class="validate">
              <label >Contrase&ntilde;a</label>
          </div>

      </fieldset>
      
    <div class="row center">
      <div class="col s6">
        <a href="">&#191;Olvidaste la contrase&ntilde;a?</a>
    </div>
      <div class="col s6">&#191;A&uacute;n no tienes una cuenta? <a href="">Registrate</a>
      </div>
    </div>
  </div>
</form>
<div class ="msj"id="box"> </div>
      <div class="modal-footer">
        <a href="#!" class="btn btn-waves modal-action modal-close waves-effect red darken-4">Cancelar</a>
        <a href="#!" class="btn btn-waves modal-action btn-flat light-green accent-4 white-text" type="submit" onclick="Validar()">Iniciar</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div>
</div>



<!--REGISTRO-->

  <div id="modal3" class="modal">
      <nav class="nav-wrapper">
        <div class="top-navbar-content">
          <ul class="center">
          <li><span style="font-size:2rem;">&nbsp;REGISTRO DE USUARIO</span></li>
           <img class="responsive-img faces" src="img/logos_divisiones/logo_1.png"/>     
        </ul>
    </div>
  </nav>
  <div class="modal-content">
      <div class="top-navbar-content" style="overflow-x:hidden;">
        <form  action="#" method="POST"  onsubmit ="return Verificar()" >
          <div class="row">
            <fieldset>
              <div class="input-field col s4 l6">
                <i class="material-icons prefix grey-text">tab</i>
                  <input id="campo3" name ="ced_user"type="text" class="validate" >
                    <label for="name" >C&eacute;dula</label>
              </div>
              <div class="input-field col s4 l6">
                <i class="material-icons prefix grey-text">account_circle</i>
                  <input id="campo1" name ="nom_user"type="text" class="validate" >
                  <label for="name" >Nombre de usuario</label>
              </div>
              <div class="input-field col s4 l6">
                <i class="material-icons prefix grey-text">email</i>
                  <input id="campo2" name ="email_user" type="email" class="validate">
                  <label for="email">Correo Electr&oacute;nico</label>
              </div>
              <div class="input-field col s4  l6">
                <i class="material-icons prefix grey-text">phone</i>
                  <input id="campo3" name ="tel_user" type="text" class="validate">
                  <label for="phone" >Tel&eacute;fono</label>
             </div> 
          <div class="row">
              <div class="input-field col s12">
                 <i class="material-icons prefix grey-text">vpn_key</i>
                    <input id="campo4" name ="pass_user" type="password" class="validate">
                    <label >Contrase&ntilde;a</label>
                  </div>
          </div>
          <div class="row">
              <div class="input-field col s12">
                  <i class="material-icons prefix grey-text">location_on</i>
                    <textarea name ="dir_user" class="materialize-textarea validate"></textarea>
                    <label for="textarea1">Direcci&oacute;n</label>
                </div>
          </div>
           <div class="file-field input-field">
                <div class="btn">
                  <span>Subir Avatar</span>
                  <input type="file">
                </div>
          </div>
      </form>
           <div class ="msj"id="mensaje"> </div>
      <div class="modal-footer">
        <a href="#!" class="btn btn-waves modal-action modal-close waves-effect red darken-4">Cancelar</a>
        <a href="#!" class="btn btn-waves modal-action  btn-flat light-green accent-4 white-text" type="submit" onclick="Verificar()">Registrar</a>
            </div>
          </div>
      </div>
</div>
</div>

  <div id="modal4" class="modal">
      <div class="modal-content">
        <h4 class="header center blue-text">Sistemas y Aplicaciones Inform&aacute;ticas</h4><br>
        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id cursus urna. Aliquam at condimentum quam. Proin vitae leo eget magna vestibulum vulputate vitae at arcu. Vivamus facilisis magna sit amet mauris blandit, tincidunt venenatis erat posuere. Nulla consequat libero nec efficitur lacinia. Vestibulum efficitur odio mauris, non dictum neque dictum quis. Suspendisse vitae elit vitae ante fermentum sagittis nec sit amet leo. Curabitur eu rhoncus tortor. Sed a sem et magna porttitor tempus. Proin fringilla neque sed lacus blandit faucibus.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
  </div> 

  <div id="modal5" class="modal">
      <div class="modal-content ">
        <h4 class="header center blue-text">Tecnolog&iacute;a de Construcci&oacute;n</h4><br>
        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id cursus urna. Aliquam at condimentum quam. Proin vitae leo eget magna vestibulum vulputate vitae at arcu. Vivamus facilisis magna sit amet mauris blandit, tincidunt venenatis erat posuere. Nulla consequat libero nec efficitur lacinia. Vestibulum efficitur odio mauris, non dictum neque dictum quis. Suspendisse vitae elit vitae ante fermentum sagittis nec sit amet leo. Curabitur eu rhoncus tortor. Sed a sem et magna porttitor tempus. Proin fringilla neque sed lacus blandit faucibus.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
    </div> 

    <div id="modal6" class="modal">
      <div class="modal-content ">
        <h4 class="header center blue-text">Asesor&iacute;a de Organizaci&oacute;n de Empresas</h4><br>
        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id cursus urna. Aliquam at condimentum quam. Proin vitae leo eget magna vestibulum vulputate vitae at arcu. Vivamus facilisis magna sit amet mauris blandit, tincidunt venenatis erat posuere. Nulla consequat libero nec efficitur lacinia. Vestibulum efficitur odio mauris, non dictum neque dictum quis. Suspendisse vitae elit vitae ante fermentum sagittis nec sit amet leo. Curabitur eu rhoncus tortor. Sed a sem et magna porttitor tempus. Proin fringilla neque sed lacus blandit faucibus.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
    </div> 
  <!---->
<!--FIN MODALS-->

<!-- ENCABEZADO PRINCIPAL -->
  <nav class="nav wrapper">
      <div class="nav-wrapper bottom-color">
        <div class="top-navbar-content">
        <a href="#!" class="brand-logo" id="font"><img class= "logo" src="img/logos_divisiones/logo_1.png"/></a>

       <ul class="right hide-on-med-and-down menu_normal">
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">¿Qui&eacute;nes Somos?<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown4">Personal<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown5">Divisiones<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown6">Proyectos<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="#contacto">Cont&aacute;ctanos</a></li> <!--<button class="waves-effect waves-light btn orange darken-1" type="submit" name="action">Iniciar</button>--></a></li>
          <li><!--<a> <button class="waves-effect waves-light btn light-blue darken-" type="submit" name="action">Reg&iacute;strese</button>--></a>
          </li>
        </ul>  
      <ul id="nav-mobile" style=" background:#e0f7fa;" class="side-nav menu_small" >
          <center>
            <img class= "logo" src="img/logos_divisiones/logo.png"/>
          </center>
          <li><a href="#">Inicio</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdownp1">¿Qui&eacute;nes Somos?<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdownp2">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdownp3">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdownp4">Personal<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdownp5">Divisiones<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdownp6">Proyectos<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="#!" data-activates="dropdownp7">Cont&aacute;ctanos<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>  

          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </div>
</nav>
  <!--FIN ENCABEZADO-->

 <!--CAROUSEL  -->
  <div class="row">
      <div class="slider" >
          <ul class="slides sls1">
            <li><a href="">
                <img src="img/banners/img_banner.jpg" class="responsive-img" >
            </a></li>
            <li><a href="">
                <img src="img/banners/img_banner2.jpg" class="responsive-img" style="margin-top:4.3rem;">
            </a></li>
            <li><a href="">
                <img src="img/banners/img_banner3.jpg" class="responsive-img"> 
            </a></li>
            <li><a href="">
               <img src="img/banners/img_banner4.jpg" class="responsive-img"> 
            </a></li>
          </ul>
    </div>
</div>
<!--FIN CAROUSEL-->

<!--SECCIONES-->
<!--QUIENES SOMOS-->
<section class="wrapper">
   <div class="wow bounceInUp">
      <div class="section grey lighten-4">
        <h4 class="header center blue-text">¿Qui&eacute;nes Somos?</h4>
  
        <div class="row" style="text-align: center;">
      
            <div class="col s12 m6">
              <h5 class="light"><p class="text" style="text-align:justify;">Steps es una empresa de servicios informáticos que comenzó su camino como Vértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personas, José Villasmil y Jaime Soto, quienes en su inicio fundaron le empresa, por lo cual ya cuenta con más de 11 años de presencia y trayectoria en el mercado.</p> </h5>
            </div>
          <div class="col s12 m6">
             <img src="img/Vectores/empresa.png" class="responsive-img step" /> 
          </div>
        </div>

        <div class="row">

            <div id="img_pos_normal"></div>
            
            <div class="col s12 m6">
            <h5 class=" light " >
              <p class="text" style="text-align:justify;">
                Steps, cuenta con un excelente grupo humano el cual se capacita en forma permanente a fin de estar actualizado en los cambios e innovaciones tecnológicas que se presentan en nuestro ámbito.
              </p>
            </h5>
            <center> 
  <button data-target="modal1" class="btn waves-effect waves-light orange darken-1" style="font-size: 15px; font-weight:bold;" class="btn">M&aacute;s Informaci&oacute;n</button>
      </center>     
            </div> 
            
            <div id="img_mover"></div>
         
        </div>

      </div>
   </div>
</section>
<!---->

<!--QUE HACEMOS-->
  <div class="wow fadeIn">
      <div class="section">
          <h4 class="header center blue-text title">¿Qu&eacute; hacemos?</h4>
        <div class="row" >
          <div class="col s12 m4 wow fadeInLeft" style="text-align: center;" >

                <img src="img/lg_1.png"/>
          <h5>Sistemas y Aplicaciones Inform&aacute;ticas</h5>                    
                <a data-target="modal4" class="btn-floating btn-large waves-effect waves-light teal accent-4 tooltipped api" data-position="bottom" data-delay="50" data-tooltip="M&aacute;s"><i class="material-icons">add</i></a>
   
            </div>
          <div class="col s12 m4 wow fadeInLeft data-wow-duration="2s" data-wow-delay="1s"" style="text-align: center;""">

                 <img src="img/lg_2.png"/>
              <h5 >Tecnolog&iacute;a de Construcci&oacute;n salud e Innovación </h5><br> 
                <a data-target="modal5" class="btn-floating btn-large waves-effect waves-light cyan darken-3 tooltipped api" data-position="bottom" data-delay="50" data-tooltip="M&aacute;s"><i class="material-icons">add</i></a>
            
          </div>
          <div class="col s12 m4 wow fadeInLeft data-wow-duration="2s" data-wow-delay="2s"" style="text-align: center;""">
          
                  <img src="img/lg_3.png "/>
                <h5   >Asesor&iacute;a de Organizaci&oacute;n de Empresas</h5>
                   <a data-target="modal6" class="btn-floating btn-large waves-effect waves-light light-blue darken-4 tooltipped api" data-position="bottom" data-delay="50" data-tooltip="M&aacute;s"><i class="material-icons">add</i></a>
                 </div>
        </div>
     </div>
  </div>

<!--PRODUCTO QUE OFRECEMOS-->
  <div class="wow fadeIn">
      <div class="section grey lighten-4">
      <h4 class="header center blue-text ">Productos que Ofrecemos</h4>
        <div class="row">
            <div class="col s12 m6 wow bounceInLeft">

                 <div id="img_pos_text"></div>
             <!--   <img src="img/Vectores/educatif.png" width="600px"  class="responsive-img pc"/> -->
            </div>   

            <div class="col s12 m6 wow bounceInRight  data-wow-duration="2s" data-wow-delay="1s"">
                <h4  class="header center orange-text ">Educatif Admin</h4>
                  <h5 class="light"><p class="text productos" style="text-align:justify;">Steps es una empresa de servicios informáticos que comenzó su camino como Vértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personas Vértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personas</p> </h5>           
            </div>
                 <div id="img_mov_text"></div>
        </div>
        <div class="row">
              <div class="col s12 m6 wow fadeInLeft data-wow-duration="2s" data-wow-delay="2s"">
                <h4  class="header center orange-text ">Educatif CTRL+</h4>
                <h5 class="light"><p class="text productos" style="text-align:justify;">Steps es una empresa de servicios informáticos que comenzó su camino como Vértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personasVértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personas</p> </h5>      
               
            </div>           
              <div class="col s12 m6 wow fadeInRight data-wow-duration="2s" data-wow-delay="1s"">
                <img src="img/Vectores/educatif+.png" width="600px"  class="responsive-img pc"/>        
            </div>
        </div>
           <div class="row">

              <div id="img_pos"></div>


            <div class="col s12 m6 wow slideInLeft  data-wow-duration="2s" data-wow-delay="1s"" >

            </div>           
              <div class="col s12 m6 wow slideInRight data-wow-duration="2s" data-wow-delay="2s" ">
                <h4  class="header center orange-text ">Educatif SMS</h4>
                  <h5 class="light"><p class="text productos" style="text-align:justify;">Steps es una empresa de servicios informáticos que comenzó su camino como Vértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personasVértigo Consultores Asociados en el año 2004, como pequeña empresa con una plantilla  inicial de dos personas</p> </h5>          
            </div>

             <div id="img_mov"></div>

        </div>

  </div>

  </div>
<!--Recuadro informativo-->
        
  <div class="parallax-container">
    <div class="parallax"><img src="img/aristoteles.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h3 class="header frase">“Somos lo que hacemos de forma repetida. La excelencia, entonces, no es un acto, sino un hábito”                              <br>  <span> Aristóteles.</span></h3>
      
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/negocio.jpg"></div>
  </div>
   <div class="section white">
    <div class="row container">
      <h3 class="header frase1">Trabaja o colabora con nosotros, más que una empresa somos una familia, en la cual todos trabajamos para alcanzar un mundo mejor.</h3>   
    </div>
  </div>

<!--Ubicacion y Contacto-->
  <div class="section scrollspy section no-pad-bot grey lighten-4 " id="contacto">
         <div class="row center">
         <div class="col s12 m6">
            <h4 class=" blue-text wow bounce">Cont&aacute;ctanos</h4>
        <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix cyan-text">account_circle</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Nombre de Usuario</label>
          </div>
          <br>
          <div class="input-field col s12">
            <i class="material-icons prefix cyan-text">email</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Correo Electr&oacute;nico</label>
          </div>
          <br>
          <div class="input-field col s12">
            <i class="material-icons prefix cyan-text">mode_edit</i>
           <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Mensaje</label>
          </div>
          <a href="#" class="btn waves-effect waves-light orange darken-1" style="font-size: 15px; font-weight:bold;">Enviar</a>
        </div>
      </form>
          </div>
        <div class="col s12 m6">
      <h4 class=" blue-text wow bounce ">Ub&iacute;canos</h4> 
      <div class="card-panel grey lighten-4 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d1960.597574484161!2d-71.6161099!3d10.6419425!3m2!1i1024!2i768!4f13.1!2m1!1s18+de+octubre+av+2!5e0!3m2!1ses-419!2sve!4v1478295855255" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
    </div>
  </div>

  <!-- INICIO Y REGISTRO -->
  <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large waves-effect "><i class="material-icons amber darken-4">add</i></a>
    <ul>
        <li><a href="#modal2" class="btn-floating modal-trigger light-blue accent-3 tooltipped" data-position="top" data-delay="50" data-tooltip="Ingresar"><i class="material-icons">perm_identity</i></a></li>
        <li><a href="#modal3" class="btn-floating teal accent-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Registrarse"><i class="material-icons">library_add</i></a></li>
      </ul>
  </div>
<!---->

<div class="row">
      <div class="col s12 m4 light-blue" >
          <img src="img/tw.png" class="responsive-img " style="height: 80px">
      </div>
      <div class="col s12 m4 light-blue darken-4">
          <img src="img/fc.png" class="responsive-img " style="height: 80px"/>  
      </div>
      <div class="col s12 m4  red darken-3">
          <img src="img/g+.png" class="responsive-img " style="height: 80px"/> 
      </div>
  </div>

<!--FOOTER-->
  <footer class="page-footer  blue-grey darken-4">
       <div class="container">
        <div class="row">
          <div class="col s6">
            <h5 class="white-text">Step Solutions C.A</h5>
            <p class="grey-text text-lighten-4">Direcci&oacute;n</p>
                <p class="grey-text text-lighten-4" style="text-align: :justify;">Sector 18 de Octubre, Av.2 con Calle I, <br>Local 3-76, Maracaibo, Venezuela.</p>
          </div> 
         
          <div class="col s6">
            <h5 class="white-text">Tel&eacute;fono:</h5>
            <ul>
              <li><a><span class="freepikicon-twitter social-icon"></span></a></li>
              <li><a class="white-text">0414-6400001</a></li>
              <li><a class="white-text" href="#!">Email:</a></li>
              <li><a class="white-text" href="#!">stepsoluciones@gmail.com</a></li>
              <li><a class="white-text" href="#!">R.I.F: J-407237314</a></li>
            </ul>
          </div>
      </div>   
    </div>
        <div class="footer-copyright">
          <div class="container">
          <a class="orange-text lighten-3 copy">Copyright &copy; Step Solutions C.A</a>
          </div>
      </div>
  </footer>


  <!--  Scripts-->
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>

      $(document).ready(function() { 
        $('.parallax').parallax();
        $('.slider').slider({full_width: true});
        $(".button-collapse").sideNav();
        $('.modal').modal();
        $('.collapsible').collapsible();
        $('.scrollspy').scrollSpy();
  
        var ancho = $(window).width();
        pos_imagen_art(ancho);
        $(window).resize(function() {
            pos_imagen_art($(window).width());
        })

        var sec = $(window).width();
        pos(sec);
        $(window).resize(function() {
            pos($(window).width());
        })

        var text = $(window).width();
        pos_text(text);
        $(window).resize(function() {
            pos_text($(window).width());
        })
     });


    /*$(window).on("load",function(){
        $(window).resize(function() {
            pos_imagen_art($(window).width());
        })
    });*/

    function pos_imagen_art(ancho){
      if(ancho > 580){
            $("#img_pos_normal").html('<div class="col s12 m6" style="text-align:center;"><img src="img/Vectores/2.png" class="responsive-img" width="400px" /></div>');
            $("#img_mover").html("");

          }else{
             $("#img_mover").html('<div class="col s12 m6" style="text-align:center; margin-top:2rem;"><img src="img/Vectores/2.png" class="responsive-img" width="400px" /></div>');
             $("#img_pos_normal").html("");
          }
    }

    function pos(sec){
      if(sec > 560){
            $("#img_pos").html('<div class="col s12 m6  wow slideInLeft " style="text-align:center;"><img src="img/Vectores/sms.png" class="responsive-img" width="600px" /></div>');
            $("#img_mov").html("");

          }else{
             $("#img_mov").html('<div class="col s12 m6  wow slideInLeft " style="text-align:center; margin-top:2rem;"><img src="img/Vectores/sms.png" class="responsive-img" width="600px" /></div>');
             $("#img_pos").html("");
          }
    }

    function pos_text(text){
      if(text > 560){
            $("#img_pos_text").html('<div class="col s12   wow bounceInLeft " style="text-align:center;  margin-top:-2rem;"><img src="img/Vectores/educatif.png" class="responsive-img" width="600px" /></div>');
            $("#img_mov_text").html("");

          }else{
             $("#img_mov_text").html('<div class="col s12  wow bounceInLeft " style="text-align:center; margin-top:2rem;"><img src="img/Vectores/educatif.png" class="responsive-img" width="600px" /></div>');
             $("#img_pos_text").html("");
          }
    }
    
 function Verificar(){
        ver    = document.getElementById("mensaje");
        campo1 = document.getElementById("campo1").value;
        campo2 = document.getElementById("campo2").value;
        campo3 = document.getElementById("campo3").value;
        campo4 = document.getElementById("campo4").value;
        campo5 = document.getElementById("campo4").value;
        

          if(campo1 == ""){
              ver.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Nombre **</button>";
              return false;

          }if(!isNaN(campo1)){  
              ver.innerHTML = "<button class='btn waves-effect   amber darken-3 '>** Solo se permite letras**</button>";
              return false;   
          }else if (campo1 == "a"){
              return true;
          }
        if(campo2 == ""){
              ver.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Correo **</button>";
              return false;

          }if(!isNaN(campo2)){  
              ver.innerHTML = "<button class='btn waves-effect  amber darken-3 '>** Solo se permite letras**</button>";
              return false;
          }else if (campo2 == "a"){
             return true;
          }

          if(campo3 == ""){
              ver.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Tel&eacute;fono **</button>";
              return false;
          }if(isNaN(campo3)){  
              ver.innerHTML = "<button class='btn waves-effect  amber darken-3 '>** Solo se permite n&uacute;meros **</button>";
              return false;

          }else if (campo3 == "a"){
              return true;
          }

          if(campo4 == ""){
            ver.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Contraseña **</button>";
            return false;
          }if(isNaN(campo4)){  
              ver.innerHTML = "<button class='btn waves-effect  amber darken-3 '>** Solo se permite n&uacute;meros **</button>";
              return false;  
          }else if (campo4 == "a"){

            return true;
          }
           if(campo5 == ""){
            ver.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Direcci&oacute;n **</button>";
            return false;
          }if(isNaN(campo4)){  
              ver.innerHTML = "<button class='btn waves-effect  amber darken-3 '>** Solo se permite n&uacute;meros **</button>";
              return false;  
          
          }else if (campo5 == "a"){

            return true;
          }

      }
      function Validar(){

        men     = document.getElementById("box");
        nom     = document.getElementById("name_u").value;
        contrase = document.getElementById("con_u").value;

        if(nom == ""){
              men.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Nombre **</button>";
              return false;

          }if(!isNaN(nom)){  
              men.innerHTML = "<button class='btn waves-effect   amber darken-3 '>** Solo se permite letras**</button>";
              return false;   
          }else if (nom == "a"){
              return true;
          }

        if(contrase == ""){
              men.innerHTML = "<button class='btn waves-effect  red darken-4 '>** Debe llenar el campo Contraseña **</button>";
              return false;

          }if(isNaN(contrase)){  
              men.innerHTML = "<button class='btn waves-effect  amber darken-3 '>** Solo se permite N&uacute;meros**</button>";
              return false;
          }else if (contrase == "a"){
             return true;
          }
        }
         
  </script>
<?php

      
      $cedula     = $_POST['ced_user'];
      $nombre     = $_POST['nom_user'];
      $correo     = $_POST['email_user'];
      $telefono   = $_POST['tel_user'];
      $pass       = $_POST['pass_user'];
      $direc      = $_POST['dir_user'];
      $estado     = true; 


        $consultar = "select * from usuarios where cedula_user = '$cedula'";
        $conv_consultar = mysqli_query($cnx,$consultar);
        $m = mysqli_num_rows($conv_consultar);
        if($m > 0){
  
          /*echo "<button class='btn waves-effect green accent-4 center-align'>Ya existe un registro con la C&eacute;dula: '$cedula'!</button>";*/
    
        }else{
          if ($estado == true) {

            $sql = "insert into usuarios (`cedula_user`,`nombre_user`,`email_user`,`tel_user`,`pass_user`,`dir_user`) values ('".$cedula."','".$nombre."','".$correo."','".$telefono."','".$pass."','".$direc."')";
            $conv_sql = mysqli_query($cnx,$sql);
              if($conv_sql){

               echo "<button class='btn waves-effect  orange darken-3> Registrado</button>";
              }
              else{
                echo "<button class='btn waves-effect  orange darken-3>No est&aacute; Registrado</button>";
              }
            
          }else{  
            echo "<button class='btn waves-effect  red darken-4 '><h3>No se puede Registrar</h3></button>";
          }
          
        }

?>
  </body>
</html>
