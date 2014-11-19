<article class="post">
    <header class="post-header">
        <h1 class="post-title">
            {{$item->name}}
        </h1>
        <div class="clearfix">
            Fecha de creación: <span class="date">{{explode(' ',$item->created_at)[0]}}</span>
        </div>
    </header>
    <div class="post-content">

        <div class="carousel slide article-slide" id="article-photo-carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner cont-slider">

                <div class="item active">
                    {{HTML::image('media/'.$item->id.'min.jpg')}}
                </div>

            </div>
            <!-- Indicators -->
            <ul class="carousel-indicators no-bullet">
                <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                    {{HTML::image('media/min4.jpg')}}
                </li>
                <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                    {{HTML::image('media/min3.jpg')}}
                </li>
                <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                    {{HTML::image('media/min2.jpg')}}
                </li>
                <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                   {{HTML::image('media/min1.jpg')}}
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>

        {{ $item->description }}
        <table> 
            <thead> 
                <tr> 
                    <th>Precio por día</th>
                    <th>Precio por semana</th>
                    <th>Precio por fin de semana</th>
                    <th>Precio por mes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$item->price_day}}</td>
                    <td>{{$item->price_week}}</td>
                    <td>{{$item->price_weekend}}</td>
                    v<td>{{$item->price_month}}</td>
                </tr> </tbody> </table>
        <div>
            {{HTML::image('media/mapa.jpg')}}
            <p></p>
         
        </div>
    </div>
    <footer class="post-footer">
        {{HTML::linkRoute('rent.quest', '¡Alquilar!', null,'class="button expand sucess"')}}

    </footer>
</article>
