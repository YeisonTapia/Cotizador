<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="ordernar">
            <button><i class="fa fa-th-list" aria-hidden="true"></i></button>
            <button><i class="fa fa-th" aria-hidden="true"></i></button>
        </div>
        <div class="mostrar-en">
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="cat-libros">
            <p>Libros en Cotización <span id="numero-libros">{{  $quantitytotal }}</span></p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="total">
            <p>Total <span id="total">$ {{ $total }}</span></p>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3">
        <a href="#" onclick="getcotization()">
            <div class="ver-cot getcotization">
                <i class="fa fa-eye" aria-hidden="true"></i>
                <p>Ver cotización</p>
            </div>
        </a>
    </div>      
</div>

