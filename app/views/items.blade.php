<h3>Últimas novedades</h3>
@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
<dl class="sub-nav">
    <dt>Filter:</dt>
    <dd class="active"><a href="#">All</a></dd>
    <dd><a href="#">Active</a></dd>
    <dd><a href="#">Pending</a></dd>
    <dd><a href="#">Suspended</a></dd>
</dl>

@foreach($items as $item)
<div class="large-4 column">
    <p>{{$item->name}}</p>
    <a class="th" role="button" aria-label="Thumbnail" href="#"> <img aria-hidden=true src="http://placehold.it/300x300"/> </a>
    </div>
@endforeach
<div class="clearfix"></div>
{{$items->links()}}
@endif