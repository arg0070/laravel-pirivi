{{-- home page --}}
<div class="breadnav">
    <div class="row">
    <ul class="breadcrumbs"> 
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Categorías</a></li>
        <li class="current"><a href="#">Tecnología</a></li>        
    </ul>
    </div>
</div>
<div class="row">
<div class="small-12 large-8 column">
  <div class="content">
    {{$content}}
  </div>
</div>
<div class="small-12 large-4 column">
  <aside class="sidebar">
    @include('sidebar')
  </aside>
</div>
</div>