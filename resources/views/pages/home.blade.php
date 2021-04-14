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
      <!-- HERO SECTION-->
      <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(https://via.placeholder.com/1110x480.png/007722)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">Nuevos equipos</p>
                <h1 class="h2 text-uppercase mb-3">20% de descuento en Iphone</h1><a class="btn btn-dark" href="http://localhost/laravel/ecommerce/public/productos">Mira nuestros equipos</a>
              </div>
            </div>
          </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Nuestros mejores equipos</p>
            <h2 class="h5 text-uppercase mb-4">Explore nuestras categorías</h2>
          </header>
          <div class="row">
            <div class="col-md-4 mb-4 mb-md-0"><a class="category-item" href="shop.html"><img class="img-fluid" src="https://via.placeholder.com/350x490.png/" alt=""><strong class="category-item-title">Iphone</strong></a></div>
            <div class="col-md-4 mb-4 mb-md-0"><a class="category-item mb-4" href="shop.html"><img class="img-fluid" src="https://via.placeholder.com/350x233.png/" alt=""><strong class="category-item-title">Samsung</strong></a><a class="category-item" href="shop.html"><img class="img-fluid" src="https://via.placeholder.com/350x233.png/" alt=""><strong class="category-item-title">Xiaomi</strong></a></div>
            <div class="col-md-4"><a class="category-item" href="shop.html"><img class="img-fluid" src="https://via.placeholder.com/350x490.png/" alt=""><strong class="category-item-title">Motorola</strong></a></div>
          </div>
        </section>

                <!-- SERVICES-->
                <section class="py-5 bg-light">
                  <div class="container">
                    <div class="row text-center">
                      <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="d-inline-block">
                          <div class="media align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                              <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div class="media-body text-left ml-3">
                              <h6 class="text-uppercase mb-1">Envío gratis</h6>
                              <p class="text-small mb-0 text-muted">Envío gratuito a todo el mundo</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="d-inline-block">
                          <div class="media align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                              <use xlink:href="#helpline-24h-1"> </use>
                            </svg>
                            <div class="media-body text-left ml-3">
                              <h6 class="text-uppercase mb-1">Servicio 24 x 7</h6>
                              <p class="text-small mb-0 text-muted">Envío gratuito a todo el mundo</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="d-inline-block">
                          <div class="media align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                              <use xlink:href="#label-tag-1"> </use>
                            </svg>
                            <div class="media-body text-left ml-3">
                              <h6 class="text-uppercase mb-1">Festival de ofertas</h6>
                              <p class="text-small mb-0 text-muted">Envío gratuito a todo el mundo</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

  @stop