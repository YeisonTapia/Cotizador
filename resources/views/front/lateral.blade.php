<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">Catálogo</li>
        @foreach($categories as $category)
            <li> <a href="#" onclick="publicationlist('{{ $category->id }}')" class="botoncategory">{{ $category->name }}</a></li>
            <!-- <li><i class="fa fa-globe" aria-hidden="true"></i> <a href="#" onclick="publicationlist('{{ $category->id }}')" >{{ $category->name }}</a></li> -->
        @endforeach

    </ul>
</div>