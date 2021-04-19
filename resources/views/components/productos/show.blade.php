@extends('layaouts.default')
@section('content')

<section class="py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6">
        <!-- PRODUCT SLIDER-->
        <div class="row m-sm-0">
          <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
            <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
              @if ($productos->imagene != null && count($productos->imagene) > 0)
              @foreach ($productos->imagene as $imagen)
              <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="{{ $imagen->url }}"
                  alt="..."></div>
              @endforeach
              @else
              https://via.placeholder.com/300
              @endif
            </div>
          </div>
          <div class="col-sm-10 order-1 order-sm-2">
            <div class="owl-carousel product-slider" data-slider-id="1">
              @if ($productos->imagene != null && count($productos->imagene) > 0)
              @foreach ($productos->imagene as $imagen)
              <a class="d-block" href="{{ $imagen->url }}" data-lightbox="product" title="Product item 1">
                <img class="img-fluid" src="{{ $imagen->url }}" alt="..."></a>
              @endforeach
              @else
              https://via.placeholder.com/300
              @endif
            </div>
          </div>
        </div>
      </div>
      <!-- PRODUCT DETAILS-->
      <div class="col-lg-6">
        <h1>{{$productos->nombre}}</h1>
        <p class="text-muted lead">${{$productos->precio}}</p>
        <p class="text-small mb-4">{{$productos->descripcion}}</p>
        <form method="POST" action="{{ route('carrito.store') }}">
          @csrf
          <div class="row align-items-stretch mb-4">
            <div class="col-sm-5 pr-sm-0">
              <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                <span class="small text-uppercase text-gray mr-4 no-select">Cantidad</span>
                <div class="quantity">
                  <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                  <input name='cantidad' class="form-control border-0 shadow-0 p-0" type="text" value="1">
                  <input name='producto' class="form-control border-0 shadow-0 p-0" type="hidden" value="{{$productos->id}}">
                  <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                </div>
              </div>
            </div>
            <div class="col-sm-3 pl-sm-0"><input value="Agregar al carrito" type="submit"
                class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" />
            </div>
        </form>
      </div><a class="btn btn-link text-dark p-0 mb-4" href=""><i class="far fa-heart mr-2"></i>Agregar a la lista de
        deseos</a><br>
      <ul class="list-unstyled small d-inline-block">
        <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span
            class="ml-2 text-muted">{{$productos->codigo}}</span></li>
        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a
            class="reset-anchor ml-2" href="#">{{$productos->categoria_id}}</a></li>
        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong><a
            class="reset-anchor ml-2" href="#">{{$productos->Tag}}</a></li>
      </ul>
    </div>
  </div>
  </div>
</section>

@stop