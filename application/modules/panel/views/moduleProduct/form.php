<section id="moduleProduct">
  <div class="card">
    <div class="card-body">

      <form id="form-moduleProduct" enctype="multipart/form-data">

        <input type="hidden" name="id" class="product-id" value="<?php echo (isset($data->id)) ? $data->id : '' ?>" readonly/>

        <div class="row">
          
          <div class="col-xs-10 col-md-10">
            <h4 class="card-title"><?php echo (isset($card_title)) ? $card_title : '' ?></h4>
            <h6 class="card-subtitle"><?php echo (isset($card_subTitle)) ? $card_subTitle : '' ?></h6>
            <div class="clear-card"></div>
          </div>

          <div class="col-xs-10 col-md-2">
            <button class="btn btn--raised btn-primary btn--icon-text btn-block page-action-save spinner-action-button">
              Save Changes
              <div class="spinner-action"></div>
            </button>
            <div class="clear-card"></div>
          </div>

        </div>
        <div class="clear-card"></div>
        
        <div class="row">

          <div class="col-xs-10 col-md-12">
            
            <div class="row">
              <div class="col-xs-10 col-md-6">
                  <div class="form-group">
                    <label required>Category</label>
                    <div class="select">
                      <select name="product_category_id" class="form-control product-product_category_id">
                        <option value="">(Empty)</option>
                        <?php
                          if (count($data_category) > 0) {
                            $category = '';
                            foreach ($data_category as $index => $item) {
                              $selected = (isset($data->product_category_id) && $data->product_category_id == $item->id) ? 'selected' : '';
                              $category .= '<option value="'.$item->id.'" '.$selected.'>'.$item->name.'</option>';
                            };
                            echo $category;
                          };
                        ?>
                      </select>
                      <i class="form-group__bar"></i>
                    </div>
                  </div>
                </div>
                <div class="col-xs-10 col-md-6">
                  <div class="form-group">
                    <label required>Name</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control product-name"
                      placeholder="Name"
                      maxlength="255"
                      value="<?php echo (isset($data->name)) ? $data->name : '' ?>"
                      style="text-transform: capitalize;"
                    />
                    <i class="form-group__bar"></i>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-10 col-md-6">
                <div class="form-group">
                  <label>Link Demo</label>
                  <input
                    type="text"
                    name="link_demo"
                    class="form-control product-link_demo"
                    placeholder="Link Demo"
                    maxlength="200"
                    value="<?php echo (isset($data->link_demo)) ? $data->link_demo : '' ?>"
                    style="text-transform: capitalize;"
                  />
                  <i class="form-group__bar"></i>
                </div>
              </div>
              <div class="col-xs-10 col-md-6">
                <div class="form-group">
                  <label required>Price</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Rp</span>
                    </div>
                    <input
                      type="text"
                      name="price"
                      class="form-control mask-money product-price"
                      placeholder="0"
                      value="<?php echo (isset($data->price)) ? $data->price : '' ?>"
                    />
                    <i class="form-group__bar"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label required>Link</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><?php echo base_url('product/') ?></span>
                </div>
                <input
                  type="text"
                  name="link"
                  class="form-control mask-link product-link"
                  maxlength="150"
                  placeholder="Link"
                  value="<?php echo (isset($data->link)) ? $data->link : '' ?>"
                />
                <i class="form-group__bar"></i>
              </div>
            </div>

            <div class="form-group">
              <label required>Description</label>
              <textarea name="description" class="form-control textarea-autosize product-description" placeholder="Description"><?php echo (isset($data->description)) ? str_replace('<br/>', '&#13;&#10;', $data->description) : '' ?></textarea>
              <i class="form-group__bar"></i>
            </div>

            <div class="row">
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label required>Image 1</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image1" class="upload-pure-button product-image1" data-preview="image1"/>
                    </div>
                    <div class="upload-preview preview-image1">
                      <?php
                        if (isset($data->image1) && !empty($data->image1) && !is_null($data->image1)) {
                          echo '<img src="'.base_url($data->image1).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 2</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image2" class="upload-pure-button product-image2" data-preview="image2"/>
                    </div>
                    <div class="upload-preview preview-image2">
                      <?php
                        if (isset($data->image2) && !empty($data->image2) && !is_null($data->image2)) {
                          echo '<img src="'.base_url($data->image2).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 3</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image3" class="upload-pure-button product-image3" data-preview="image3"/>
                    </div>
                    <div class="upload-preview preview-image3">
                      <?php
                        if (isset($data->image3) && !empty($data->image3) && !is_null($data->image3)) {
                          echo '<img src="'.base_url($data->image3).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 4</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image4" class="upload-pure-button product-image4" data-preview="image4"/>
                    </div>
                    <div class="upload-preview preview-image4">
                      <?php
                        if (isset($data->image4) && !empty($data->image4) && !is_null($data->image4)) {
                          echo '<img src="'.base_url($data->image4).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 5</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image5" class="upload-pure-button product-image5" data-preview="image5"/>
                    </div>
                    <div class="upload-preview preview-image5">
                      <?php
                        if (isset($data->image5) && !empty($data->image5) && !is_null($data->image5)) {
                          echo '<img src="'.base_url($data->image5).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 6</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image6" class="upload-pure-button product-image6" data-preview="image6"/>
                    </div>
                    <div class="upload-preview preview-image6">
                      <?php
                        if (isset($data->image6) && !empty($data->image6) && !is_null($data->image6)) {
                          echo '<img src="'.base_url($data->image6).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 7</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image7" class="upload-pure-button product-image7" data-preview="image7"/>
                    </div>
                    <div class="upload-preview preview-image7">
                      <?php
                        if (isset($data->image7) && !empty($data->image7) && !is_null($data->image7)) {
                          echo '<img src="'.base_url($data->image7).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-5 col-md-3">
                <div class="form-group-xs">
                  <label>Image 8</label>
                  <div class="upload">
                    <div class="upload-button">
                      <input type="file" name="image8" class="upload-pure-button product-image8" data-preview="image8"/>
                    </div>
                    <div class="upload-preview preview-image8">
                      <?php
                        if (isset($data->image8) && !empty($data->image8) && !is_null($data->image8)) {
                          echo '<img src="'.base_url($data->image8).'"/>';
                        };
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </form>

    </div>
  </div>
</section>
