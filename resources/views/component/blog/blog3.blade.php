<!-- Sidebar area -->
<div class="col-md-4 col-sm-5 sidebar">

   <!-- Barre de recherche -->
   <div class="widget-item">
      <form action="#" class="search-form">
         <input type="text" placeholder="Search">
         <button class="search-btn"><i class="flaticon-026-search"></i></button>
      </form>
   </div>

   <!-- Categorie -->
   <div class="widget-item">
      <h2 class="widget-title">Categories</h2>
      <ul>
         <li><a href="#">Vestibulum maximus</a></li>
         <li><a href="#">Nisi eu lobortis pharetra</a></li>
         <li><a href="#">Orci quam accumsan </a></li>
         <li><a href="#">Auguen pharetra massa</a></li>
         <li><a href="#">Tellus ut nulla</a></li>
         <li><a href="#">Etiam egestas viverra </a></li>
      </ul>
   </div>

   <!-- Instagram -->
   <div class="widget-item">
      <h2 class="widget-title">Instagram</h2>
      <ul class="instagram">
         @foreach ($random1 as $item)
            <li><img src="{{Storage::disk('image')->url($item->image)}}"></li>
         @endforeach
      </ul>
   </div>
   
   <!-- Tags -->
   <div class="widget-item">
      <h2 class="widget-title">Tags</h2>
      <ul class="tag">
         <li><a href="">branding</a></li>
         <li><a href="">identity</a></li>
         <li><a href="">video</a></li>
         <li><a href="">design</a></li>
         <li><a href="">inspiration</a></li>
         <li><a href="">web design</a></li>
         <li><a href="">photography</a></li>
      </ul>
   </div>
   
</div>