
<div class="modal-header">
	<h4 class="modal-title" id="gridSystemModalLabel">{{ $book->title }}</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-4">
            <img class="img-thumbnail" src="/covers/{{$book->cover}}" width="250">
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h4>Descripción</h4>
                    <div id="description">{{ $book->description }}</div>
                </div>
            </div>
            <div id="attributes" class="row">
                @foreach($book->authors as $author)
                    <div id="author" class="col-md-8"><label>Autor:</label> <span>  {{ $author->name }}; </span></div>
                @endforeach
                
                <div id="isbn" class="col-md-4"><label>ISBN:</label> <span>{{ $book->isbn }}</span></div>
            </div>
            <div id="attributes" class="row">
                <div id="price" class="col-md-4"><label>Precio:</label> <span><span class="discount"></span> {{ $book->price }}</span></div>
                <div id="year" class="col-md-4"><label>Año:</label><span>{{ $book->year }}</span></div>
                
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-top: 20px">
                    <h4>Seleccione el libro y especifique la cantidad de ejemplares.</h4>
                </div>
            </div>
            <div id="attributes" class="row">
                <input type="number" value="1" class="quantity" min="1" max="10">
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button onclick="additem('{{ $book->id }}')"  type="button" class="btn btn-primary additem" data-dismiss="modal">Agregar a la cotizacion</button>
</div>
