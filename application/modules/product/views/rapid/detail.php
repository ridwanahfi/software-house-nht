<!--==========================
	Products Section
============================-->
<section id="intro" class="clearfix intro-half"></section>
<section id="products">
	<div class="container">
    <div class="body">

      <div class="card">
        <div class="card-body">
          <div class="row detail-item">
            <div class="col-sm-5 col-xs-10">
              <div class="left">
                <a href="<?php echo base_url($data->image1) ?>" data-lightbox="portfolio" class="link-preview link-product-active">
                  <img class="img-large img-product-active" src="<?php echo base_url($data->image1) ?>" />
                </a>
                <div class="img-other">
                  <div class="row">
                    <?php if (!empty($data->image1)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image1) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image1) ?>" class="first img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($data->image2)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image2) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image2) ?>" class="img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($data->image3)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image3) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image3) ?>" class="img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($data->image4)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image4) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image4) ?>" class="img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="img-other">
                  <div class="row">
                    <?php if (!empty($data->image5)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image5) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image5) ?>" class="first img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($data->image6)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image6) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image6) ?>" class="img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($data->image7)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image7) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image7) ?>" class="img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($data->image8)): ?>
                    <div class="col-3">
                      <a href="<?php echo base_url($data->image8) ?>" data-lightbox="portfolio" class="link-preview">
                        <img src="<?php echo base_url($data->image8) ?>" class="img-product" />
                      </a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-7 col-xs-10">
              <div class="right">
                <div class="clearfix d-block d-sm-none d-md-none d-lg-none"></div>
                <div class="title"><?php echo $data->name ?></div>
                <div class="price">Rp <?php echo number_format($data->price) ?></div>
                <div class="description">
                  <!-- <table>
                    <tr>
                      <td valign="top" width="130"> <span class="text-hint">Merek</span> </td>
                      <td valign="top"> <?php echo (!empty($data->merk)) ? $data->merk : '-' ?> </td>
                    </tr>
                  </table> -->
                  <div class="title">Deskripsi Produk</div>
                  <div class="clearfix"></div>
                  <div class="content">
                    <?php echo $data->description ?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="col">
                      <a href="https://wa.me/<?php echo $app->contact->whatsapp ?>?text=Hallo, apakah *<?php echo $data->name ?>* masih tersedia?" target="_blank">
                        <i class="fa fa-whatsapp"></i>
                        Beli Nanti
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?php echo $data->link_demo?>" target="_blank">
                        DEMO
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product-new">
        <div class="header">PRODUK TERBARU</div>
        <div class="content">
          <?php if (count($data_latest) > 0): ?>
          <div class="row">
            <?php foreach ($data_latest as $index => $item): ?>
            <div class="col-md-6 col-lg-3">
              <div class="box box-item">
                <img src="<?php echo base_url($item->image1) ?>" />
                <div class="detail">
                  <div class="title">
                    <a href="<?php echo base_url('product/'.$item->link) ?>">
                      <?php echo $item->name ?>
                    </a>
                  </div>
                  <div class="footer">
                    <div class="left">Rp <?php echo number_format($item->price) ?></div>
                    <div class="right"><?php echo ($item->sold_out <= $item->stock) ? 'Tersedia' : 'Kosong' ?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class="nothing-found"><div>No data found</div></div>
          <?php endIf; ?>
        </div>
      </div>

      <div class="clearfixmin"></div>

    </div>
	</div>
</section><!-- #products -->
