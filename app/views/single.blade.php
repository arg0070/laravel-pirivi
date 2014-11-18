<article class="post">
    <header class="post-header">
        <h1 class="post-title">
            {{$item->name}}
        </h1>
        <div class="clearfix">
            <span class="left date">{{explode(' ',$item->created_at)[0]}}</span>
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

        <p>{{ $item->description }}</p>
    </div>
    <footer class="post-footer">
        <hr>
    </footer>
</article>
