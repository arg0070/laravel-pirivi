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
                    <img alt="" title="" src="http://placehold.it/600x400">
                </div>

            </div>
            <!-- Indicators -->
            <ul class="carousel-indicators no-bullet">
                <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                    <img alt="" src="http://placehold.it/250x180">
                </li>
                <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                    <img alt="" src="http://placehold.it/250x180">
                </li>
                <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                    <img alt="" src="http://placehold.it/250x180">
                </li>
                <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                    <img alt="" src="http://placehold.it/250x180">
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>

        <p>{{ $item->description }}</p>
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
    </div>
    <footer class="post-footer">
        <a href="#" class="button expand sucess">¡Alquilar!</a>
    </footer>
</article>
