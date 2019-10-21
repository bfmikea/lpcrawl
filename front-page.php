<!-- the header -->
<?php get_header(); ?>

<!-- header-start -->
    
<header>
    
        <?php $imagen_fondo_cabecera = get_field( 'imagen_fondo_cabecera' ); ?>
        <?php if ( $imagen_fondo_cabecera ) { ?>
        <img class="imghp" src="<?php echo $imagen_fondo_cabecera['url']; ?>" alt="<?php echo $imagen_fondo_cabecera['alt']; ?>" />
        <?php } ?>
    
        
    

    <div class="divtexthleft">
        <div class="text1h">PUB</div>
        <div class="text2h">CRAWL</div>
    </div>
    <div class="divformhright">
        <div class="text3h pt-lg-5 px-lg-5   p-4">
            <?php the_field( 'texto_cuadro_flotante' ); ?>
         </div>
        <div class="px-lg-5 px-4 pb-lg-5 pb-4 ppbr1">
            <a href="#" class="btnph btn" data-toggle="modal" data-target="#reservaModal"><span class="text4h"><?php the_field( 'boton_cuadro_flotante' ); ?></span></a>
        </div>
        
    </div>
</header>
<!-- header-end -->


<!-- acerca-de -->
<div class="acerca-de" id="acerca-de">

    <div class="container-fluid pr-lg-0">

        <div class="row">

            <div class="col-lg-6 py-5 pr-lg-5">
                <h2 class="h2sacercade">¡El <span class="text-fondo-rojo">Pub Crawl de Glasgow</span><br> es perfecto para cualquiera que quiera
                    pasar una buena noche en <span class="text-rojo">Glasgow</span>!
                </h2>
                <p class="ps2">
                <?php the_field( 'descripcion_acerca_de' ); ?>
                </p>

            </div>


            <div class="col-lg-6">
                <!-- <img class="imgs2 float-right" src="wp-content/uploads/2018/10/home2.jpg" alt=""> -->
                <?php the_field( 'slider_derecho' ); ?>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-5 icons">

            <div class="col-md-2 col-4 text-center">
                <?php $icon1 = get_field( 'icon1' ); ?>
                <?php if ( $icon1 ) { ?>
                <img src="<?php echo $icon1['url']; ?>" alt="<?php echo $icon1['alt']; ?>" />
                <?php } ?>

                <div><?php the_field( 'texto_icon1' ); ?></div>
            </div>

            <div class="col-md-3 col-4">
                <?php $icon2 = get_field( 'icon2' ); ?>
                <?php if ( $icon2 ) { ?>
                <img class="dbmarginca" src="<?php echo $icon2['url']; ?>" alt="<?php echo $icon2['alt']; ?>" />
                <?php } ?>

                <div class="text-center"><?php the_field( 'texto_icon2' ); ?></div>

            </div>

            <div class="col-md-2 col-4 text-center">
                <?php $icon3 = get_field( 'icon3' ); ?>
                <?php if ( $icon3 ) { ?>
                <img src="<?php echo $icon3['url']; ?>" alt="<?php echo $icon3['alt']; ?>" />
                <?php } ?>
                <div><?php the_field( 'texto_icon3' ); ?></div>
            </div>

            <div class="col-md-3 col-7 pt-md-0 pt-5">
                <?php $icon4 = get_field( 'icon4' ); ?>
                <?php if ( $icon4 ) { ?>
                <img class="dbmarginca" src="<?php echo $icon4['url']; ?>" alt="<?php echo $icon4['alt']; ?>" />
                <?php } ?>
                
                <div class="text-center"><?php the_field( 'texto_icon4' ); ?></div>
            </div>
            <div class="col-md-2 col-4 text-md-center pt-md-0 pt-5">
                <?php $icon5 = get_field( 'icon5' ); ?>
                <?php if ( $icon5 ) { ?>
                <img src="<?php echo $icon5['url']; ?>" alt="<?php echo $icon5['alt']; ?>" />
                <?php } ?>
                <div><?php the_field( 'texto_icon5' ); ?></div>
            </div>

        </div>


    </div>
</div>
<!-- end acerca-de -->

<!-- nuestros guías -->
<div class="guias" id="guias">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12 pt-5">
                <h2 class="titlesguias pt-5 pb-4">Nuestros <span>guías</span></h2>
                <p><?php the_field( 'descripcion_guias' ); ?></p>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-center mimgredonda">
                <div class="imgredonda">
                    <?php $imagen_con_guias = get_field( 'imagen_con_guias' ); ?>
                    <?php if ( $imagen_con_guias ) { ?>
                    <img src="<?php echo $imagen_con_guias['url']; ?>" alt="<?php echo $imagen_con_guias['alt']; ?>" />
                    <?php } ?>
                </div>

            </div>

        </div>
    </div>
</div>
<!--end nuestros guías -->

<!--punto de encuentro -->
<div class="puntoencuentro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-12 pecuadro">
                <h2>Punto de <span>encuentro</span></h2>
                <p class="pt-3 p1"><?php the_field( 'descripcion_seccion_3' ); ?></p>

                <div class="p2"> <?php the_field( 'texto_rojo_seccion_3' ); ?> </div>

            </div>
        </div>
    </div>
</div>
<!--end punto de encuentro -->

<!-- faqs -->
<div class="faqs py-5 px-3" id="faqs">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-4 pt-5">
                <h3 class="faqstitle">FAQS</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="welcome-faq">
                    <div class="accordion mb-0" id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><?php the_field( 'pregunta1' ); ?></button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body"><?php the_field( 'respuesta1' ); ?>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php the_field( 'pregunta2' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-body"><?php the_field( 'respuesta2' ); ?>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php the_field( 'pregunta3' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body"><?php the_field( 'respuesta3' ); ?>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><?php the_field( 'pregunta4' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body"><?php the_field( 'respuesta4' ); ?>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="welcome-faq">
                    <div class="accordion mb-0">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne"><?php the_field( 'pregunta5' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body"><?php the_field( 'respuesta5' ); ?>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo"><?php the_field( 'pregunta6' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion" style="">
                                <div class="card-body"><?php the_field( 'respuesta6' ); ?>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree"><?php the_field( 'pregunta7' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion">
                                <div class="card-body"><?php the_field( 'respuesta7' ); ?>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour"><?php the_field( 'pregunta8' ); ?>
</button>
                                </h5>
                            </div>
                            <div id="collapseFour2" class="collapse" aria-labelledby="headngFour2" data-parent="#accordion">
                                 <div class="card-body"><?php the_field( 'respuesta8' ); ?>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>


    </div>

</div>


<div class="franja-roja">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-md-end justify-content-center px-0 px-md-5">
                <h4><?php the_field( 'texto_cinta_izquierda' ); ?></h4>
            </div>
            <div class="col-md-6 d-flex justify-content-center justify-content-md-start mb-4 mb-md-0 px-0 px-md-5">
                <a href="#" class="btnpfr btn" data-toggle="modal" data-target="#reservaModal"><span class="textbtnpfr"><?php the_field( 'texto_boton_cintaroja' ); ?></span></a>
            </div>
        </div>
    </div>
</div>
<!-- faqs-end -->


<!-- contact -->
<div class="contact py-5 px-3" id="contact">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-6">
                <h3 class="contactcng pt-5"><span class="contactacr">Contacta</span> con nosotros</h3>
                <div class="pccn"><?php the_field( 'descripcion_seccion_5' ); ?></div>
            </div>
            <div class="col-md-6">
                <?php the_field( 'formulario_de_contacto' ); ?>         
            </div>
        </div>
    </div>

</div>

<!-- contact -->


<!-- the footer -->
<?php get_footer(); ?>
