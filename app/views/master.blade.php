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
        <header id="main-menu">
            <div class="row">

                <nav class="top-bar" data-topbar role="navigation">                                    
                    <ul class="title-area">
                        <li class="name">
                            <h1>{{HTML::image('media/logo.jpg')}} {{HTML::link('/','Piriví')}}</h1>
                        </li>
                        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>
                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            @if(Auth::check())
                            <li class="{{ (strpos(URL::current(), URL::to('admin/dash-board'))!== false) ? 'active' : '' }}">
                                {{HTML::link('admin/dash-board','Panel de usuario')}}
                            </li>
                            <li class="{{ (strpos(URL::current(), URL::to('logout'))!== false) ? 'active' : '' }}" >
                                {{HTML::link('logout','Desconectar')}}
                            </li>
                            @else
                            <li class="{{ (strpos(URL::current(), URL::to('login'))!== false) ? 'active' : '' }}">
                                {{HTML::link('login','Acceder')}}
                            </li>
                            <li class="active">
                                {{HTML::link('login','Registrarse')}}
                            </li>
                            @endif
                        </ul>                                                       
                    </section>                
                </nav>

            </div>            
        </header>



        {{$main}}

        <div class="row">
            <div class="small-12 large-12 column">
                <footer class="site-footer"></footer>
            </div>
        </div>
        {{ HTML::script('assets/js/jquery/jquery.js') }}
        {{ HTML::script('assets/js/foundation/foundation.js') }}
        <script>
            $(document).foundation();
        </script>
    </body>
</html>