<main class="page-main">
      <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url(assets/img/bg/shop.jpg)">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title"> <span>Taking rides to a newer level</span>
                <div class="uk-h1">Inventory</div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><span>Inventory</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
          <div class="uk-grid" data-uk-grid>
            <div class="uk-width-1-3@m">
              <div class="js-filter-more filter-more">
                <div class="filter-more__desc">
                  <div class="uk-h4">Search options</div><span>Find your motorcycle</span>
                </div>
                <div class="filter-more__icon"><img src="assets/img/logo.svg" alt="logo"></div>
              </div>
              <aside class="sidebar js-filter-content">
                <div class="widjet widjet--filters">
                  <div class="widjet__content">
                    <div class="uk-grid uk-grid-small uk-child-width-1-2" data-uk-grid>
                      <div class="uk-width-1-1"><select class="uk-select uk-form-large" name="make">
                          <option value="">Select Make</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div class="uk-width-1-1"><select class="uk-select uk-form-large" name="model">
                          <option value="">Select Model</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div class="uk-width-1-1"><select class="uk-select uk-form-large" name="type">
                          <option value="">Select type</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div><select class="uk-select uk-form-large" name="min">
                          <option value="">Min CC</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                      <div><select class="uk-select uk-form-large" name="max">
                          <option value="">Max CC</option>
                          <option value="option-1">option-1</option>
                          <option value="option-2">option-2</option>
                        </select></div>
                    </div>
                  </div>
                </div>
                <div class="widjet widjet--price">
                  <div class="widjet__title">
                    <div class="uk-h4">Price range</div><span>Choose your price</span>
                  </div>
                  <div class="widjet__content">
                    <div class="range-box"><input class="js-range-slider" id="range-price" type="text" name="price" value="">
                      <div class="range-box__desc"> <span>KM Range Selected: $</span><input id="range-price-from" type="text"><span>-</span><input id="range-price-to" type="text"></div>
                    </div>
                  </div>
                </div>
                <div class="widjet widjet--mileage">
                  <div class="widjet__title">
                    <div class="uk-h4">mileage range</div><span>Choose required mileage</span>
                  </div>
                  <div class="widjet__content">
                    <div class="range-box"><input class="js-range-slider" id="range-mileage" type="text" name="mileage" value="">
                      <div class="range-box__desc"> <span>KM Range Selected: </span><input id="range-mileage-from" type="text"><span>- </span><input id="range-mileage-to" type="text"></div>
                    </div>
                  </div>
                </div>
                <div class="widjet">
                  <div class="widjet__content">
                    <div class="uk-text-center"><button class="uk-button uk-button-danger" type="button">Apply filter</button><br><a class="uk-text-meta uk-margin-top" href="#!">Clear All Filters</a></div>
                  </div>
                </div>
              </aside>
            </div>
            <div class="uk-width-2-3@m">
              <div class="sorting">
                <div class="sorting-left">
                  <div class="result-count">   <p><?=$show_result;?></p>
</div>
                </div>
                <div class="sorting-right"> 
                  <select class="uk-select" name="orderby">
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date" selected>Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                  </select>
                  <button class="sorting-btn btn-list" type="button"> <img src="assets/img/icons/list.svg" alt="list" data-uk-svg></button><button class="sorting-btn btn-grid is-active" type="button"> <img src="assets/img/icons/grid.svg" alt="grid" data-uk-svg></button></div>
              </div>
              <div class="products-items uk-grid uk-child-width-1-2@s" data-uk-grid>
                <div>
                  <div class="product-item uk-transition-toggle">
                    <div class="product-item__head">
                      <div>
                        <div class="product-item__name"> <a href="page-shop-product-1.html">BMW S1000 RX</a></div>
                        <div class="product-item__manufacturer">Powered by BMW</div>
                        <div class="product-item__category">category: <a href="#!">Sports</a></div>
                      </div>
                      <div>
                        <div class="product-item__price">$4,500</div>
                      </div>
                    </div>
                    <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-1.jpg" alt="BMW S1000 RX" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                        <div class="uk-overlay-cover uk-overlay-primary"></div>
                        <div class="uk-position-center"><span class="icon-cross"></span></div>
                      </a>
                      <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-item__info">
                      <ul class="list-info">
                        <li class="list-info-item">
                          <div class="list-info-item__title">Year</div>
                          <div class="list-info-item__value">2021</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Type</div>
                          <div class="list-info-item__value">Sports</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Make</div>
                          <div class="list-info-item__value">BMW</div>
                        </li>
                      </ul>
                    </div>
                    <div class="product-item__specifications">
                      <ul class="specifications-list">
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine type</div>
                            <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine Power</div>
                            <div class="specifications-list-item__value">205hp (151 kW)</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Displacement</div>
                            <div class="specifications-list-item__value">999 cc</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Bore/Stroke</div>
                            <div class="specifications-list-item__value">80mm / 49.7mm</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="product-item uk-transition-toggle">
                    <div class="product-item__head">
                      <div>
                        <div class="product-item__name"> <a href="page-shop-product-1.html">YAMAHA MT09</a></div>
                        <div class="product-item__manufacturer">Powered by Yamaha</div>
                        <div class="product-item__category">category: <a href="#!">supersport</a></div>
                      </div>
                      <div>
                        <div class="product-item__price">$4,500</div>
                      </div>
                    </div>
                    <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-2.jpg" alt="YAMAHA MT09 BASE" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                        <div class="uk-overlay-cover uk-overlay-primary"></div>
                        <div class="uk-position-center"><span class="icon-cross"></span></div>
                      </a>
                      <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-item__info">
                      <ul class="list-info">
                        <li class="list-info-item">
                          <div class="list-info-item__title">Year</div>
                          <div class="list-info-item__value">2021</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Type</div>
                          <div class="list-info-item__value">Sports</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Make</div>
                          <div class="list-info-item__value">Yamaha</div>
                        </li>
                      </ul>
                    </div>
                    <div class="product-item__specifications">
                      <ul class="specifications-list">
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine type</div>
                            <div class="specifications-list-item__value">Desmosedici 90 V4</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine Power</div>
                            <div class="specifications-list-item__value">208hp (153 kW)</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Displacement</div>
                            <div class="specifications-list-item__value">1,103 cc</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Bore/Stroke</div>
                            <div class="specifications-list-item__value">80mm / 49.7mm</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="product-item uk-transition-toggle">
                    <div class="product-item__head">
                      <div>
                        <div class="product-item__name"> <a href="page-shop-product-1.html">KTM RC 390 </a></div>
                        <div class="product-item__manufacturer">Powered by KTM</div>
                        <div class="product-item__category">category: <a href="#!">MT 09</a></div>
                      </div>
                      <div>
                        <div class="product-item__price">$6,200</div>
                      </div>
                    </div>
                    <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-3.jpg" alt="KTM RC 390 BASE" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                        <div class="uk-overlay-cover uk-overlay-primary"></div>
                       <div class="uk-position-center"><span class="icon-cross"></span></div>
                      </a><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button></div>
                    <div class="product-item__info">
                      <ul class="list-info">
                        <li class="list-info-item">
                          <div class="list-info-item__title">Year</div>
                          <div class="list-info-item__value">2021</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Type</div>
                          <div class="list-info-item__value">Adventure</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Make</div>
                          <div class="list-info-item__value">KTM</div>
                        </li>
                      </ul>
                    </div>
                    <div class="product-item__specifications">
                      <ul class="specifications-list">
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine type</div>
                            <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine Power</div>
                            <div class="specifications-list-item__value">190hp (137 kW)</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Displacement</div>
                            <div class="specifications-list-item__value">537 cc</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Bore/Stroke</div>
                            <div class="specifications-list-item__value">80mm / 49.7mm</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="product-item uk-transition-toggle">
                    <div class="product-item__head">
                      <div>
                        <div class="product-item__name"> <a href="page-shop-product-1.html">DUCATI 950</a></div>
                        <div class="product-item__manufacturer">Powered by Ducati</div>
                        <div class="product-item__category">category: <a href="#!">Sports</a></div>
                      </div>
                      <div>
                        <div class="product-item__price">$4,500</div>
                      </div>
                    </div>
                    <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-4.jpg" alt="DUCATI HYPER 950" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                        <div class="uk-overlay-cover uk-overlay-primary"></div>
                        <div class="uk-position-center"><span class="icon-cross"></span></div>
                      </a>
                      <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-item__info">
                      <ul class="list-info">
                        <li class="list-info-item">
                          <div class="list-info-item__title">Year</div>
                          <div class="list-info-item__value">2021</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Type</div>
                          <div class="list-info-item__value">Sports</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Make</div>
                          <div class="list-info-item__value">Ducati</div>
                        </li>
                      </ul>
                    </div>
                    <div class="product-item__specifications">
                      <ul class="specifications-list">
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine type</div>
                            <div class="specifications-list-item__value">Desmosedici 90 V4</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine Power</div>
                            <div class="specifications-list-item__value">208hp (153 kW)</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Displacement</div>
                            <div class="specifications-list-item__value">1,103 cc</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Bore/Stroke</div>
                            <div class="specifications-list-item__value">80mm / 49.7mm</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="product-item uk-transition-toggle">
                    <div class="product-item__head">
                      <div>
                        <div class="product-item__name"> <a href="page-shop-product-1.html">KAWASAKI</a></div>
                        <div class="product-item__manufacturer">Powered by Kawasaki</div>
                        <div class="product-item__category">category: <a href="#!">Sports</a></div>
                      </div>
                      <div>
                        <div class="product-item__price">$6,200</div>
                      </div>
                    </div>
                    <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-5.jpg" alt="KAWASAKI VULCAN" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                        <div class="uk-overlay-cover uk-overlay-primary"></div>
                        <div class="uk-position-center"><span class="icon-cross"></span></div>
                      </a><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button></div>
                    <div class="product-item__info">
                      <ul class="list-info">
                        <li class="list-info-item">
                          <div class="list-info-item__title">Year</div>
                          <div class="list-info-item__value">2021</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Type</div>
                          <div class="list-info-item__value">Sports</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Make</div>
                          <div class="list-info-item__value">Kawasaki</div>
                        </li>
                      </ul>
                    </div>
                    <div class="product-item__specifications">
                      <ul class="specifications-list">
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine type</div>
                            <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine Power</div>
                            <div class="specifications-list-item__value">190hp (137 kW)</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Displacement</div>
                            <div class="specifications-list-item__value">537 cc</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Bore/Stroke</div>
                            <div class="specifications-list-item__value">80mm / 49.7mm</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="product-item uk-transition-toggle">
                    <div class="product-item__head">
                      <div>
                        <div class="product-item__name"> <a href="page-shop-product-1.html">HONDA ABS</a></div>
                        <div class="product-item__manufacturer">Powered by Honda</div>
                        <div class="product-item__category">category: <a href="#!">Adventure</a></div>
                      </div>
                      <div>
                        <div class="product-item__price">$4,500</div>
                      </div>
                    </div>
                    <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/product-6.jpg" alt="HONDA CB500X ABS" /><a class="uk-transition-fade" href="page-shop-product-1.html">
                        <div class="uk-overlay-cover uk-overlay-primary"></div>
                        <div class="uk-position-center"><span class="icon-cross"></span></div>
                      </a>
                      <div class="product-item__label">Featured</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-item__info">
                      <ul class="list-info">
                        <li class="list-info-item">
                          <div class="list-info-item__title">Year</div>
                          <div class="list-info-item__value">2021</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Type</div>
                          <div class="list-info-item__value">Adventure</div>
                        </li>
                        <li class="list-info-item">
                          <div class="list-info-item__title">Make</div>
                          <div class="list-info-item__value">Honda</div>
                        </li>
                      </ul>
                    </div>
                    <div class="product-item__specifications">
                      <ul class="specifications-list">
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine type</div>
                            <div class="specifications-list-item__value">4-Stroke Cylinder</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Engine Power</div>
                            <div class="specifications-list-item__value">205hp (151 kW)</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-3.png" alt="Displacement" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Displacement</div>
                            <div class="specifications-list-item__value">999 cc</div>
                          </div>
                        </li>
                        <li class="specifications-list-item">
                          <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-4.png" alt="Bore/Stroke" /></div>
                          <div class="specifications-list-item__desc">
                            <div class="specifications-list-item__title">Bore/Stroke</div>
                            <div class="specifications-list-item__value">80mm / 49.7mm</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="uk-margin-large-top uk-text-center">
                <ul class="uk-pagination uk-flex-center">
                  <li><a href="#"><span data-uk-pagination-previous></span></a></li>
                  <li class="uk-active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><span data-uk-pagination-next></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>