<main class="page-main">
      <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url(assets/img/bg/product.jpg)">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title">
                <div class="uk-h1"><?= $product->nombre_producto ?></div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="<?= base_url(); ?>">Inicio</a></li>
                  <li><a href="<?= base_url(); ?>motos">Motos</a></li>
                  <li> <span><?= $product->nombre_producto ?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="page-product">
            <div class="uk-grid uk-flex-middle" data-uk-grid>
              <div class="uk-width-2-3@m">
                <div class="page-product__title">
                  <div class="uk-h1"><?= $product->nombre_producto ?></div>
                </div>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid>
              <div class="uk-width-2-3@m">
                <div class="page-product__gallery">
                  <div data-uk-slideshow="min-height: 300; max-height: 430">
                  <?php
                        if($product->imagen_producto != "" && $product->imagen_producto2 == "" && $product->imagen_producto3 == ""){
                      ?>
                    <ul class="uk-slideshow-items uk-child-width-1-1">
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery" data-uk-cover></li>
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery" data-uk-cover></li>
                      </ul>
                    <div class="uk-margin-top" data-uk-slider>
                      <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-3 uk-child-width-1-4@m uk-child-width-1-5@l">
                      <li data-uk-slideshow-item="0"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery"></a></li>
                        <li data-uk-slideshow-item="1"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery"></a></li>
                       </ul>
                    </div>

                    <?php
                      }elseif ($product->imagen_producto != "" && $product->imagen_producto2 != "" && $product->imagen_producto3 == "") {
                        ?>
                    <ul class="uk-slideshow-items uk-child-width-1-1">
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery" data-uk-cover></li>
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto2 ?>" alt="img-gallery" data-uk-cover></li>
                      </ul>
                    <div class="uk-margin-top" data-uk-slider>
                      <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-3 uk-child-width-1-4@m uk-child-width-1-5@l">
                        <li data-uk-slideshow-item="0"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery"></a></li>
                        <li data-uk-slideshow-item="1"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto2 ?>" alt="img-gallery"></a></li>
                      </ul>
                    </div>

                    <?php    
                      }else{
                    ?>
                    <ul class="uk-slideshow-items uk-child-width-1-1">
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery" data-uk-cover></li>
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto2 ?>" alt="img-gallery" data-uk-cover></li>
                      <li><img class="uk-width-1-1" src="assets/img/productos/<?= $product->imagen_producto3 ?>" alt="img-gallery" data-uk-cover></li>
                    </ul>
                    <div class="uk-margin-top" data-uk-slider>
                      <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-3 uk-child-width-1-4@m uk-child-width-1-5@l">
                        <li data-uk-slideshow-item="0"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto ?>" alt="img-gallery"></a></li>
                        <li data-uk-slideshow-item="1"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto2 ?>" alt="img-gallery"></a></li>
                        <li data-uk-slideshow-item="2"><a href="#"><img src="assets/img/productos/<?= $product->imagen_producto3 ?>" alt="img-gallery"></a></li>
                      </ul>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                </div>
                <div class="page-product__list-info">
                  <div class="product-list-info">
                    <div>
                      <div class="product-list-info-item"><img class="product-list-info-item__img" src="assets/img/icons/list-info-1.png" alt="icon-list-info">
                        <div class="product-list-info-item__title">Año</div>
                        <div class="product-list-info-item__value">2021</div>
                      </div>
                    </div>
                    <div>
                      <div class="product-list-info-item"><img class="product-list-info-item__img" src="assets/img/icons/list-info-2.png" alt="icon-list-info">
                        <div class="product-list-info-item__title">categoria</div>
                        <div class="product-list-info-item__value"><?= $product->name_category ?></div>
                      </div>
                    </div>
                    <div>
                      <div class="product-list-info-item"><img class="product-list-info-item__img" src="assets/img/icons/list-info-3.png" alt="icon-list-info">
                        <div class="product-list-info-item__title">Marca</div>
                        <div class="product-list-info-item__value"><?= $product->name_marca ?></div>
                      </div>
                    </div>
                    <div>
                      <div class="product-list-info-item"><img class="product-list-info-item__img" src="assets/img/icons/list-info-5.png" alt="icon-list-info">
                        <div class="product-list-info-item__title">Cilindraje</div>
                        <div class="product-list-info-item__value"><?= $product->cilindraje_producto ?></div>
                      </div>
                    </div>
                    <div>
                      <div class="product-list-info-item"><img class="product-list-info-item__img" src="assets/img/icons/list-info-4.png" alt="icon-list-info">
                        <div class="product-list-info-item__title">Motor</div>
                        <div class="product-list-info-item__value"><?= $product->Motor ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="uk-margin-medium">
                <h2>Especificaciones Técnicas</h2>
                <div class="page-product__specifications">
                  <!--<ul class="product-specifications">
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-7.png" alt="color"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Color</div>
                        <div class="product-specifications-item__value">Black \ Red </div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Bore/Stroke</div>
                        <div class="product-specifications-item__value">80mm / 49.7mm</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-6.png" alt="Category"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Category</div>
                        <div class="product-specifications-item__value">Super Sports</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-8.png" alt="Top Speed"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Top Speed</div>
                        <div class="product-specifications-item__value">Over 125 mph</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-9.png" alt="Fuel Economy"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Fuel Economy</div>
                        <div class="product-specifications-item__value">37 mpg (WMTC)</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-13.png" alt="Fuel Type"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Fuel Type</div>
                        <div class="product-specifications-item__value">Premium Unleaded</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Engine type</div>
                        <div class="product-specifications-item__value">4-Stroke in-line 4-Cylinder ...</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power / Torque"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Engine Power / Torque</div>
                        <div class="product-specifications-item__value">205hp (151 kW) / 83 lb-ft ...</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Displacement</div>
                        <div class="product-specifications-item__value">999 cc</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-10.png" alt="Elecrtic Alternator"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Elecrtic Alternator</div>
                        <div class="product-specifications-item__value">Full Three-Phase 450 W ...</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-11.png" alt="Payload Capacity"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Payload Capacity</div>
                        <div class="product-specifications-item__value">463 lbs (210 kg)</div>
                      </div>
                    </li>
                    <li class="product-specifications-item">
                      <div class="product-specifications-item__icon"><img src="assets/img/icons/specifications-12.png" alt="Battery"></div>
                      <div class="product-specifications-item__desc">
                        <div class="product-specifications-item__title">Battery</div>
                        <div class="product-specifications-item__value">12 V / 8 Ah</div>
                      </div>
                    </li>
                  </ul>-->
                  <?= utf8_decode($product->caract_producto) ?>
                </div>
                
              </div>
              <div class="uk-width-1-3@m">
                <aside class="sidebar">
                  <div class="widjet widjet--form">
                    <div class="widjet__title">
                      <div class="uk-h4">Enviar Mensaje</div><span>get in touch via message</span>
                    </div>
                    <div class="widjet__content">
                      <form action="#!">
                        <div class="uk-margin-small"><input class="uk-input uk-form-large" type="text" placeholder="Your Name"></div>
                        <div class="uk-margin-small"><input class="uk-input uk-form-large" type="text" placeholder="Email"></div>
                        <div class="uk-margin-small"><input class="uk-input uk-form-large" type="text" placeholder="Phone (Optional)"></div>
                        <div class="uk-margin-small"><textarea class="uk-textarea uk-form-large" placeholder="Message"></textarea></div>
                        <div class="uk-margin-small uk-text-center"><button class="uk-button uk-button-danger uk-button-large" type="submit">Send message</button></div>
                      </form>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
        if($related_products){
      ?>
      <div class="related-products">
        <div class="uk-section uk-container">
          <div class="uk-h2 uk-margin-medium-bottom">También te puede interesar...</div>
          <div class="uk-grid uk-child-width-1-3@m" data-uk-grid>
          <?php
            foreach ($related_products as $key => $product_row) {

              ?>
            <div>
              <div class="product-item uk-transition-toggle">
                <div class="product-item__head">
                  <div>
                    <div class="product-item__name"> <a href="<?php echo base_url();?>producto?n=<?php echo  $product_row->nombre_producto?>"><?= $product_row->nombre_producto?></a></div>
                    <div class="product-item__manufacturer">Energizado por <?= $product_row->name_marca?></div>
                  </div>
                </div>
                <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/productos/<?= $product_row->imagen_producto?>" alt="<?= $product_row->nombre_producto?>" /><a class="uk-transition-fade" href="<?php echo base_url();?>producto?n=<?php echo  $product_row->nombre_producto?>">
                    <div class="uk-overlay-cover uk-overlay-primary"></div>
                     <div class="uk-position-center"><span class="icon-cross"></span></div>
                  </a><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button></div>
                <div class="product-item__info">
                  <ul class="list-info">
                    <li class="list-info-item">
                      <div class="list-info-item__title">Año</div>
                      <div class="list-info-item__value">2021</div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Tipo</div>
                      <div class="list-info-item__value"><?= $product_row->name_category?></div>
                    </li>
                    <li class="list-info-item">
                      <div class="list-info-item__title">Marca</div>
                      <div class="list-info-item__value"><?= $product_row->name_marca?></div>
                    </li>
                  </ul>
                </div>
                <div class="product-item__specifications">
                  <ul class="specifications-list">
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Cilindraje</div>
                        <div class="specifications-list-item__value"><?= $product_row->cilindraje_producto?></div>
                      </div>
                    </li>
                    <li class="specifications-list-item">
                      <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                      <div class="specifications-list-item__desc">
                        <div class="specifications-list-item__title">Potencia del Motor</div>
                        <div class="specifications-list-item__value"><?= $product_row->Motor?></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <?php }
            
            } else{}?>
          </div>
        </div>
      </div>
    </main>