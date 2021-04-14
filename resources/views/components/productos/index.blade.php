@extends('layaouts.default')
@section('content')

<!--  Modal -->
<div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
            <div class="col-lg-6">
              <button class="close p-4" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="p-5 my-md-4">
                <ul class="list-inline mb-2">
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                </ul>
                <h2 class="h4">Red digital smartwatch</h2>
                <p class="text-muted">$250</p>
                <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                <div class="row align-items-stretch mb-4">
                  <div class="col-sm-7 pr-sm-0">
                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                      <div class="quantity">
                        <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                        <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                        <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                </div><a class="btn btn-link text-dark p-0" href="#"><i class="far fa-heart mr-2"></i>Add to wish list</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <section class="py-5">
      <div class="container p-0">
        <div class="row">
          <!-- SHOP SIDEBAR-->
          <div class="col-lg-3 order-2 order-lg-1">
            <h5 class="text-uppercase mb-4">Marca</h5>
            @foreach ($categorias as $categoria)
            <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">{{$categoria->nombre}}</strong></div>
            <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
              <li class="mb-2"><a class="reset-anchor" href="#">{{$categoria->productos}}</a></li>
            </ul>   
            @endforeach
            @foreach ($productos as $producto)
            <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
              <li class="mb-2"><a class="reset-anchor" href="#">{{$producto->nombre}}</a></li>
            </ul>   
            @endforeach
            <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Samsung</strong></div>
            <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
              <li class="mb-2"><a class="reset-anchor" href="#">Shavers</a></li>
            </ul>
            <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Xiaomi</strong></div>
            <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">
              <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
            </ul>
            <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Motorola</strong></div>
            <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">
              <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
            </ul>   
          </div>
          <!-- SHOP LISTING-->
          <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="row">
              <!-- PRODUCT-->
              @foreach ($productos as $producto)
              <div class="col-lg-4 col-sm-6">
                <div class="product text-center">
                  <div class="mb-3 position-relative">
                    <div class="badge text-white badge-"></div><a class="d-block" href="{{route('productos.show',['producto'=>$producto->id])}}"><img class="img-fluid w-100" src="https://via.placeholder.com/300x300.png/007722" alt="..."></a>
                    <div class="product-overlay">
                      <ul class="mb-0 list-inline">
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Agregar al carrito</a></li>
                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <h6> <a class="reset-anchor" href="detail.html">{{$producto->nombre}}</a></h6>
                  <p class="small text-muted">${{$producto->precio}}</p>    
                </div>
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    var range = document.getElementById('range');
    noUiSlider.create(range, {
        range: {
            'min': 0,
            'max': 2000
        },
        step: 5,
        start: [100, 1000],
        margin: 300,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
          to: function ( value ) {
            return '$' + value;
          },
          from: function ( value ) {
            return value.replace('', '');
          }
        }
    });
    
  </script>

@stop