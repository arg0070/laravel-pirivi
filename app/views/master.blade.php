<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        @section('title')
            <title>{{{$title}}}</title> <!-- using {{$title}} is bad here eg:</title><script>alert('hello')</script> -->
        @show
        {{ HTML::style('assets/css/foundation/foundation.css') }}
        {{ HTML::style('assets/css/custom.css') }}   
        {{ HTML::style('assets/css/font-awesome/font-awesome.css') }}   
    </head>
    <body>    

        <div class="off-canvas-wrap" data-offcanvas> 
            <div class="inner-wrap">
                <header id="main-menu">
                    <div class="row">
                        <nav class="tab-bar"> 
                            <section class="left-small"> 
                                <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a> 
                            </section> 
                            <section class="middle tab-bar-section"> 

                                <h1>{{HTML::image('media/logo.jpg')}} {{HTML::link('/','Piriví')}}</h1>                        
                            </section>
                            <section class="right">                                                                           
                                <a href="#"><i class="fa fa-search fa-2x"></i></a>
                            </section> 

                        </nav> 
                    </div>
                </header>

                <aside class="left-off-canvas-menu"> 
                    <ul class="off-canvas-list"> 
                        <li><label>Menú</label></li> 
                        <li><a href="#"><i class="fa fa-home fa-fw"></i> Inicio</a></li> 
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Cuenta</a></li>
                        <li><a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Mis anuncios</a></li> 
                        <li><a href="#"><i class="fa fa-bars fa-fw"></i> Mis alquileres</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Lista de deseados</a></li> 
                    </ul> 
                    <ul class="off-canvas-list"> 
                        <li><label>Categorías</label></li> 
                        <li><a href="#">Tecnología <span class="success radius label right">2050</span></a></li>
                        <li><a href="#">Deporte <span class="secondary radius label right">1680</span></a></li>                       
                    </ul>
                    <ul class="off-canvas-list"> 
                        <li><label>Ciudades</label></li> 
                        <li><input type="text" placeholder="Población o CP"></li>
                        <li><a href="#">Burgos </a></li>
                        <li><a href="#">Valladolid </a></li>
                        <li><a href="#">Madrid </a></li> 
                        <li><a href="#"><b>. . .</b> </a></li> 
                    </ul>
                    <ul class="off-canvas-list">
                        <li><label>Información</label></li>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Información legal</a></li>
                        <li><a href="#">Condiciones del servicio</a></li>
                        <li><a href="#">Centro se soporte</a></li>                                                                    
                    </ul>
                </aside> 
                <section class="main-section">
                              

                    {{$main}}


                    <footer class="site-footer">
                        <div class="row">
                            <div class="small-12 large-2 column">
                                <h3>{{HTML::image('media/logo.png')}} {{HTML::link('/','Piriví')}}</h3>
                            </div>
                            <div class="small-12 large-2 column">
                                <ul class="inline-list">
                                    <li><span class="fa fa-twitter-square fa-2x"></span></li>
                                    <li><span class="fa fa-facebook-square fa-2x"></span></li>
                                    <li><span class="fa fa-google-plus-square fa-2x"></span></li>
                                </ul>
                            </div>
                            <div class="small-12 large-8 column end">                
                                <ul class="inline-list">
                                    <li><a href="#">Sobre nosotros</a></li>
                                    <li><a href="#">Información legal</a></li>
                                    <li><a href="#">Condiciones del servicio</a></li>
                                    <li><a href="#">Centro se soporte</a></li>
                                </ul>


                            </div>

                        </div>
                    </footer>
                </section> 
                <a class="exit-off-canvas"></a> </div> </div>

        {{ HTML::script('assets/js/jquery/jquery.js') }}
        {{ HTML::script('assets/js/foundation/foundation.js') }}
        <script>
            $(document).foundation();
        </script>
    </body>
</html>