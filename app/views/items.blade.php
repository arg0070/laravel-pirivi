@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
@foreach($items as $item)
<article class="item">
  
    <a class="th" role="button" aria-label="Thumbnail" href="#"> <img aria-hidden=true src="http://placehold.it/300x300"/> </a>
</article>
@endforeach
{{$items->links()}}
@endif