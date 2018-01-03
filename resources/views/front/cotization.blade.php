<div id="info-cot">
    <!-- libros cotizador -->
    <table class="table" id="myTable" cellspacing="0" width="100%">
	<thead><tr><th></th></tr></thead>
	<tbody>
    @foreach($cart as $item)
    <tr>
 	<td>
    <div id="libros-cot">
        <div id="fila-libro" class="row">
            <!-- fila libro -->

            <div class="col-xs-4 col-sm-5 col-md-3">
                <div class="portada">
                    <img src="covers/{{ $item->cover }}" alt="portada libro">
                </div>
            </div>

            <div class="col-xs-8 col-sm-7 col-md-5">
                <div class="info-gnral">
                    <h4 class="tit-libro">{{ $item->title }}</h4>
                    <!--<p class="desc-libro" id="description">{{ $item->description }}</p>-->
                    <div class="datos-libro">
                        <div class="row">
                            <div class="col-md-6">                                         
                                <span class="autor"><b>Autor(es):</b>
                                	@foreach($item->authors as $author)
						 				{{ $author->name }};
						 			@endforeach
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span><b>ISBN:</b><span> {{ $item->isbn }}</span>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="precio">
                    Valor<br/>
                    <p class="precio-libro">${{ $item->price }} </p><br/>
                    <a href="#" onclick="removeitem('{{ $item->id }}')" class="btn btn-danger remover">Remover</a>
                </div>
            </div>

        </div>
        <!-- /final fila libro -->
    </div>
    </td>
 	</tr>
    @endforeach
   	</tbody>
	</table>
    <!-- /fin libros cotizador -->        
</div>  
<!-- /Fin Info-cot -->
{!!Html::script('js/tabla.js')!!}