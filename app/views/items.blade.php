<h3>Últimas novedades</h3>
@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
<dl class="sub-nav">
    <dt>Categorías:</dt>
    <dd class="active"><a href="#">Todas</a></dd>
    <dd><a href="#">Tecnología</a></dd>
    <dd><a href="#">Deporte</a></dd>
</dl>

@foreach($items as $item)
<div class="large-4 column">
    <h4>{{link_to_route('item.show',$item->name,$item->id)}}</h4>
    <a class="th" role="button" aria-label="Thumbnail" href="#"> 
        <img aria-hidden=true src="http://placehold.it/300x300"/> 
    </a>
    <div class="filter">
        <span class="success radius label right">{{$item->price_day}} <i class="fa fa-euro"></i>/día</span>
    </div>
    </div>
@endforeach
<div class="clearfix"></div>
{{$items->links()}}
@endif