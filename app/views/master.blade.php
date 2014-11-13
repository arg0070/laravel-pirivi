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
        <header>
            <nav class="top-bar" data-topbar role="navigation">                                    
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">{{HTML::image('media/logo.jpg')}} Piriví</a></h1>
                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li class="active"><a href="#">Right Button Active</a></li>
                        <li class="has-dropdown">
                            <a href="#">Right Button Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="#">First link in dropdown</a></li>
                                <li class="active"><a href="#">Active link in dropdown</a></li>
                            </ul>
                        </li>
                    </ul>                                                       
                </section>                
            </nav>
            {{$subheader}}            
        </header>

        <div class="row">
            {{$main}}
        </div>
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