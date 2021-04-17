@extends('layaouts.default')
@section('content')

<!--  Modal -->
<div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
  @foreach ($productos as $producto)  
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="row align-items-stretch">
            <div class="col-lg-6 p-lg-0"><a class="product-view d-block h-100 bg-cover bg-center" style="background: url({{$producto->imagene[0]->url}})" href="{{$producto->imagene[0]->url}}" data-lightbox="productview" title="Red digital smartwatch"></a><a class="d-none" href="img/product-5-alt-1.jpg" title="Red digital smartwatch" data-lightbox="productview"></a><a class="d-none" href="img/product-5-alt-2.jpg" title="Red digital smartwatch" data-lightbox="productview"></a></div>
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
                <h2 class="h4">{{$producto->nombre}}</h2>
                <p class="text-muted">{{$producto->precio}}</p>
                <p class="text-small mb-4">{{$producto->descripcion}}</p>
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
    @endforeach
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
            
            @foreach ($categoria->producto as $item)
            
              <li class="mb-2"><a class="reset-anchor" href="">
                @if ($categoria->producto != null && count($categoria->producto) > 0 )
                <p>{{$item->nombre}}</p>                
            @endif  
              </a></li>
            @endforeach
          </ul> 
            @endforeach
          </div>
          <!-- SHOP LISTING-->
          <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="row">
              <!-- PRODUCT-->
              @foreach ($productos as $producto)
              <div class="col-lg-4 col-sm-6">
                <div class="product text-center">
                  <div class="mb-3 position-relative">
                    <div class="badge text-white badge-"></div><a class="d-block" href="{{route('productos.show',['producto'=>$producto->id])}}"><img class="img-fluid w-100" src="
                    @if ($producto->imagene != null && count($producto->imagene) > 0 )
                        {{$producto->imagene[0]->url}}
                    @else
                         https://via.placeholder.com/300
                    @endif
                    " alt="..."></a>
                    <div class="product-overlay">
                      <ul class="mb-0 list-inline">
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{route('productos.show',$producto->id)}}">Agregar al carrito</a></li>
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
  

@stop