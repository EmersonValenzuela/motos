<main class="page-main">
  <div class="section-hero">
    <div class="section-hero__bg" style="background-image: url(assets/img/bg/shop.jpg)">
      <div class="uk-container">
        <div class="section-hero__content">
          <div class="section-hero__title"> <span>LLEVAMOS LOS VIAJES A UN NIVEL MÁS NUEVO</span>
            <div class="uk-h1">Motos</div>
          </div>
          <div class="section-hero__breadcrumb">
            <ul class="uk-breadcrumb">
              <li><a href=" <?= base_url(); ?>">Inicio</a></li>
              <li><span>Motos</span></li>
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
              <div class="uk-h4">OPCIONES DE BÚSQUEDA</div><span>ENCUENTRA TU MOTO</span>
            </div>
            <div class="filter-more__icon"><img src="assets/img/logo.svg" alt="logo"></div>
          </div>
          <aside class="sidebar js-filter-content">
            <div class="widjet widjet--filters">
              <div class="widjet__content">
                <div class="uk-grid uk-grid-small uk-child-width-1-2" data-uk-grid>
                  <div class="uk-width-1-1">
                    <form action="" method="get" id="sort_filter_form">
                    <input type="hidden" name="keyword" value="<?php if(isset($_GET['keyword'])){ echo trim($_GET['keyword']); }?>">
                    <select class="uk-select uk-form-large list_brand" name="make">
                      <option value="">Seleccionar Marca</option>
                      <?php
                        foreach ($brand_list as $key => $value)
                          {
                            ?>
                              <option value="<?=$value->id_marca?>"><?=$value->name_marca?></option>
                            <?php
                          }
                      ?>
                    </select>
                  </form>
                  </div>
                  <div class="uk-width-1-1">
                  <form action="" method="get" id="">
                  <input type="hidden" name="keyword" value="<?php if(isset($_GET['keyword'])){ echo trim($_GET['keyword']); }?>">
                  <select class="uk-select uk-form-large list_model" name="model">
                      <option value="">Seleccionar Modelo</option>
                      <?php
                        foreach ($category_list as $key => $value)
                          {
                            ?>
                              <option value="<?=$value->id_category?>"><?=$value->name_category?></option>
                            <?php
                          }
                      ?>
                    </select>
                  </form>
                  </div>
                  <div class="uk-width-1-1">
                  <form action="" method="get" id="">
                  <input type="hidden" name="keyword" value="<?php if(isset($_GET['keyword'])){ echo trim($_GET['keyword']); }?>">
                    <select class="uk-select uk-form-large list_cil" name="type">
                      <option value="">Seleccionar Cilindrada</option>
												<option value="107">107 cc</option>
												<option value="124-cc">124 cc</option>
												<option value="144">144 cc</option>
												<option value="145-cc">145 cc</option>
												<option value="149-cc">149 cc</option>
												<option value="150-cc">150 cc</option>
												<option value="158-cc">158 cc</option>
												<option value="163-cc">163 cc</option>
												<option value="197-cc">197 cc</option>
												<option value="198-cc">198 cc</option>
												<option value="199-cc">199 cc</option>
												<option value="250-cc">250 cc</option>
												<option value="269-cc">269 cc</option>
												<option value="97-cc">97 cc</option>			
                    </select>
                  </form>
                  </div>

                </div>
              </div>
            </div>

            <div class="widjet">
              <div class="widjet__content">
                <div class="uk-text-center"><button class="uk-button uk-button-danger" type="button">Aplicar Filtro</button><br></div>
              </div>
            </div>
          </aside>
        </div>
        <div class="uk-width-2-3@m">
          <div class="sorting">
            <div class="sorting-left">
              <div class="result-count">
                <p><?= $show_result; ?></p>
              </div>
            </div>
            <div class="sorting-right">
              <button class="sorting-btn btn-list" type="button"> 
                <img src="assets/img/icons/list.svg" alt="list" data-uk-svg>
              </button>
                <button class="sorting-btn btn-grid is-active" type="button"> 
                  <img src="assets/img/icons/grid.svg" alt="grid" data-uk-svg>
                </button>
              </div>
          </div>
          <div class="products-items uk-grid uk-child-width-1-2@s" data-uk-grid>
            <?php
            foreach ($product_list as $key => $row) {
              
            ?>
              <div>
                <div class="product-item uk-transition-toggle">
                  <div class="product-item__head">
                    <div>
                      <div class="product-item__name"> <a href="<?php echo base_url();?>producto?n=<?php echo  addslashes(trim($row->nombre_producto))?>"><?= $row->nombre_producto ?></a></div>
                      <div class="product-item__manufacturer">Impulsado por <?= $row->name_marca ?></div>
                      
                    </div>
                  </div>
                  <div class="product-item__media uk-inline-clip uk-inline"><img src="assets/img/productos/<?= $row->imagen_producto ?>" alt="<?php echo  addslashes(trim($row->nombre_producto))?>" />
                  <a class="uk-transition-fade" href="<?php echo base_url();?>producto?n=<?php echo  addslashes(trim($row->nombre_producto))?>" >
                      <div class="uk-overlay-cover uk-overlay-primary"></div>
                      <div class="uk-position-center"><span class="icon-cross"></span></div>
                    </a>
                    <div class="product-item__label">Presentado</div><button class="product-item__whish btn-whish"><i class="far fa-heart"></i></button>
                  </div>
                  <div class="product-item__info">
                    <ul class="list-info">
                      <li class="list-info-item">
                        <div class="list-info-item__title">Año</div>
                        <div class="list-info-item__value">2021</div>
                      </li>
                      <li class="list-info-item">
                        <div class="list-info-item__title">Tipo</div>
                        <div class="list-info-item__value"><?= ucwords($row->name_category) ?></div>
                      </li>
                      <li class="list-info-item">
                        <div class="list-info-item__title">Marca</div>
                        <div class="list-info-item__value"><?= ucwords($row->name_marca) ?></div>
                      </li>
                    </ul>
                  </div>
                  <div class="product-item__specifications">
                    <ul class="specifications-list">
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-1.png" alt="Engine type" /></div>
                        <div class="specifications-list-item__desc">
                          <div class="specifications-list-item__title">Cilindraje</div>
                          <div class="specifications-list-item__value"><?= $row->cilindraje_producto   ?></div>
                        </div>
                      </li>
                      <li class="specifications-list-item">
                        <div class="specifications-list-item__icon"><img src="assets/img/icons/specifications-2.png" alt="Engine Power" /></div>
                        <div class="specifications-list-item__desc">
                          <div class="specifications-list-item__title">Potencia del Motor</div>
                          <div class="specifications-list-item__value"><?= $row->motor ?></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="uk-margin-large-top uk-text-center">
            <?php
            if (!empty($links)) {
            ?>
              <div class="pagination pb-10">
                <?php
                echo $links;
                ?>
              </div>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>