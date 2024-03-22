<?php

/**
 * The main template file
 */

get_header();
?>




    <div class="container py-4 py-xl-5">
        <h1 style="text-align: center;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 50px;color: #003d1a;"><i class="la la-angle-double-right"></i>Nosotros<i class="la la-angle-double-left"></i></h1>
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                   <div>
                   <img width="60px" height="60px"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Recurso 5ldpi.png"/>
                
                   </div> 
                   
                    <div class="px-3">
                        <h2 class="fw-bold mb-0"><?php echo  get_theme_mod('custom_text_one','145+');?></h2>
                        <p class="mb-0" style="font-size: 10px;">PROFESORES CON<br>
CATEGORÍA CIENTÍFICA</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                     <div>
                   <img width="65px" height="60px"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Recurso 8ldpi.png"/>
                
                   </div> 
                   
                    <div class="px-3">
                        <h2 class="fw-bold mb-0"><?php echo  get_theme_mod('custom_text_two','145+');?></h2>
                        <p class="mb-0" style="font-size: 10px;">CONVENIOS</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div>
                    <img width="60px" height="60px"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Recurso 6ldpi.png"/>
                 
                    
                    </div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0"><?php echo  get_theme_mod('custom_text_three','145+');?></h2>
                        <p class="mb-0" style="font-size: 10px;">PROYECTOS <br>
DE INVESTIGACIÓN</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div>
                    <img width="55px" height="63px"  src="<?php echo get_template_directory_uri(); ?>/assets/img/Recurso 7ldpi.png"/>
                
                    </div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0"><?php echo  get_theme_mod('custom_text_four','145+');?></h2>
                        <p class="mb-0" style="font-size: 10px;">PREMIOS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 25px;width: 100%;height: 580px;margin-right: 0px;margin-left: 0px;padding-right: 0px;padding-left: 0px;max-width: 100%;margin-bottom: 79px;">
        <div class="row align-items-sm-stretch" style="height: 580px;">
            <div class="col-md-4" style="padding-right: 0px;padding-left: 0px;">
                <div style="height: 100%;width: 100%;">
                    <div class="col d-none d-sm-none d-md-flex justify-content-center justify-content-md-center align-items-md-center" style="height: 65%;overflow-x: hidden;">
                    <img src="<?php
                      $url_img=get_template_directory_uri()."/assets/img/vecteezy_multiethnic-startup-business-team-on-meeting_12130818_324.jpg";
  
                    
                    echo get_theme_mod('image_control',$url_img);?>" width="569" height="380" style="height: 100%;"></div>
                    <div class="col d-md-flex justify-content-md-center align-items-md-center" style="height: 35%;width: 100%;background:#003d1a;min-height: 120px;">
                        <div>
                            <h1 class="text-center d-md-inline-flex justify-content-md-center" style="color: #ffffff;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 26px;width: 100%;">
                            <a style="text-decoration:none ;color: inherit;" href="<?php echo  get_permalink(get_theme_mod('paragraph_link3'));?>"><?php echo  get_theme_mod('paragraph_text3','Nuestras Sedes');?></a>                
                           
                        </h1>
                            <p style="color: #ffffff;width: 100%;text-align: center;margin-bottom: 0px;padding-right: 7%;padding-left: 7%;font-size: 14px;">
                            Estamos presentes en todos 
                            los municipios de la provincia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding-right: 0px;padding-left: 0px;">
                <div style="height: 100%;width: 100%;">
                <div class="col d-md-flex justify-content-md-center align-items-md-center" style="height: 35%;width: 100%;background: rgba(0,61,26,0.57);min-height: 120px;">
                        <div>
                            <h1 class="text-center d-md-inline-flex justify-content-md-center" style="color: #ffffff;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 26px;width: 100%;">
                            <a style="text-decoration:none ;color: inherit;" href="<?php echo  get_permalink(get_theme_mod('paragraph_link2'));?>"><?php echo  get_theme_mod('paragraph_text2','Programas Acreditados');?></a>                
                           
                        </h1>
                            <p style="color: #ffffff;width: 100%;text-align: center;margin-bottom: 0px;padding-right: 7%;padding-left: 7%;font-size: 14px;">
                            Apostamos por la calidad de nuestros procesos
para formar profesionales competentes.
                            </p>
                        </div>
                    </div>
                    <div class="col d-md-flex justify-content-md-center align-items-md-center" style="height: 30%;width: 100%;background: #ffffff;min-height: 120px;">
                        <div>
						<h1 class="text-center d-md-inline-flex justify-content-md-center" style="color: #003d1a;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 30px;width: 100%;">
                            <a style="text-decoration:none ;color: inherit;" href="<?php echo  get_permalink(get_theme_mod('paragraph_link4'));?>"><?php echo  get_theme_mod('paragraph_text4','UNIVERSIDAD ACREDITADA');?></a>                
                
                        </h1>
                            <p style="width: 100%;text-align: center;margin-bottom: 0px;padding-right: 7%;padding-left: 7%;font-size: 14px;">
                            por la Junta de Acreditación Nacional
                            </p>
                        </div>
                    </div>
                 

                    <div class="col d-md-flex justify-content-md-center align-items-md-center" style="height: 35%;width: 100%;background: rgba(0,61,26,0.57);min-height: 120px;">
                        <div>
                            <h1 class="text-center d-md-inline-flex justify-content-md-center" style="color: #003d1a;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 32px;width: 100%;">
                            <a style="text-decoration:none ;color: inherit;" href="<?php echo  get_permalink(get_theme_mod('paragraph_link4'));?>"><?php echo  get_theme_mod('paragraph_text4','Modelo Educativo Innovador');?></a>     
                        </h1>
                            <p style="color: #ffffff;width: 100%;text-align: center;margin-bottom: 0px;padding-right: 7%;padding-left: 7%;font-size: 14px;">
                            El estudiante es protagonista de su propia formación. 
                            Se exige e innova para ser un profesional exitoso.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding-right: 0px;padding-left: 0px;">
                <div style="height: 100%;width: 100%;">
                <div class="col d-md-flex justify-content-md-center align-items-md-center" style="height: 35%;width: 100%;background:#003d1a;min-height: 120px;">
                        <div>
                            <h1 class="text-center d-md-inline-flex justify-content-md-center" style="color: #ffffff;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 26px;width: 100%;">
                            <a style="text-decoration:none ;color: inherit;" href="<?php echo  get_permalink(get_theme_mod('paragraph_link'));?>"><?php echo  get_theme_mod('paragraph_text','Experiencia Internacional');?></a>
                  
                           
                        </h1>
                            <p style="color: #ffffff;width: 100%;text-align: center;margin-bottom: 0px;padding-right: 7%;padding-left: 7%;font-size: 14px;">
                            Enriquecemos nuestros conocimientos y habilidades 
                            para seguir creciendo en el entorno global.
                            </p>
                        </div>
                    </div>

                    <div class="col d-none d-sm-none d-md-flex justify-content-center" style="height: 65%;overflow-x: hidden;">
						                    <img src="<?php
                      $url_img=get_template_directory_uri()."/assets/img/imagen2023.png";
  
                    
                    echo get_theme_mod('image_control2',$url_img);?>" width="569" height="380" style="height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <?php if ( is_active_sidebar( 'home-posts' ) ) : ?>
                          <?php dynamic_sidebar( 'home-posts' ); ?>
                      <?php endif; ?>






    <div class="container py-4 py-xl-5">
        <h1 style="text-align: center;font-family: 'GFS Didot', serif;font-weight: bold;font-size: 45px;color: #003d1a;margin-top: 33px;">
            <i class="la la-angle-double-right"></i>De interés<i class="la la-angle-double-left"></i>
        </h1>
        <div class="text-center border rounded p-3" style="background: #003d1a;margin-top: 20px;">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col" style="width: 33%;">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Iconos 2-04.png" width="38px" height="38px">
                        </h4>
                          <p class="mb-0" <li><a class="link-light" href="http://10.22.0.88/" style="font-size: 14px;">Biblioteca</a></li></p>
                    </div>
                </div>
                <div class="col" style="width: 33%;">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Iconos 2-07.png" width="38px" height="38px">
                     
                        </h4>
                        <p class="mb-0" <li><a class="link-light" href="http://www.ult.edu.cu/moodle/" style="font-size: 14px;">Moodle</a></li></p>
                    </div>
                </div>
                <div class="col" style="width: 33%;">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Iconos 2-05.png" width="38px" height="38px">
                     
                        </h4>
                          <p class="mb-0" <li><a class="link-light" href="http://edacunob.ult.edu.cu/" style="font-size: 14px;">Editorial</a></li></p>
                    </div>
                </div>
                <div class="col" style="width: 33%;">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Iconos 2-08.png" width="38px" height="38px">
                     
                        </h4>
                        <p class="mb-0" <li><a class="link-light" href="#" style="font-size: 14px;">Centro de idioma</a></li></p>
                    </div>
                </div>
                <div class="col" style="width: 33%;">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Iconos 2-06.png" width="38px" height="38px">
                     
                        </h4>
						 <p class="mb-0" <li><a class="link-light" href="#" style="font-size: 14px;">Cursos masivos, abiertos y en línea</a></li></p>
                    </div>
                </div>
                <div class="col" style="width: 33%;">
                    <div class="p-3">
                        <h4 class="display-5 fw-bold text-white mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Iconos 2-09.png" width="38px" height="38px">
                     
                        </h4>
						 <p class="mb-0" <li><a class="link-light" href="https://ceeprot.odoo.com/" style="font-size: 14px;">Unidad de Desarrollo e Innovación CEEPROT</a></li></p>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php
get_footer();
?>