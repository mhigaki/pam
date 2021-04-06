<div class="sidebar-right"> 
  <!-- Advanced search start -->   
  <div class="sidebar widget advanced-search"> 
    <h3 class="sidebar-title"><?php _e( 'Advanced Search', 'pam' ); ?></h3> 
    <form method="GET"> 
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="all-status"> 
          <option>
            <?php _e( 'All Status', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'For Sale', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'For Rent', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="all-type"> 
          <option>
            <?php _e( 'All Type', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Apartments', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Houses', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Commercial', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Garages', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="commercial"> 
          <option>
            <?php _e( 'Commercial', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Residential', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Land', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Hotels', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="form-group"> 
        <select class="selectpicker search-fields" name="location"> 
          <option>
            <?php _e( 'location', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'New York', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Bangladesh', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'India', 'pam' ); ?>
          </option>           
          <option>
            <?php _e( 'Canada', 'pam' ); ?>
          </option>           
        </select>         
      </div>       
      <div class="row"> 
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="bedrooms"> 
              <option>
                <?php _e( 'Bedrooms', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="bathroom"> 
              <option>
                <?php _e( 'Bathroom', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
      </div>       
      <div class="row"> 
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="balcony"> 
              <option>
                <?php _e( 'Balcony', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
        <div class="col-lg-6"> 
          <div class="form-group"> 
            <select class="selectpicker search-fields" name="garage"> 
              <option>
                <?php _e( 'Garage', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '1', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '2', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '3', 'pam' ); ?>
              </option>               
              <option>
                <?php _e( '4', 'pam' ); ?>
              </option>               
            </select>             
          </div>           
        </div>         
      </div>       
      <div class="range-slider"> 
        <label>
          <?php _e( 'Area', 'pam' ); ?>
        </label>         
        <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>         
        <div class="clearfix"></div>         
      </div>       
      <div class="range-slider"> 
        <label>
          <?php _e( 'Price', 'pam' ); ?>
        </label>         
        <div data-min="0" data-max="150000" data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>         
        <div class="clearfix"></div>         
      </div>       
      <a class="show-more-options" data-toggle="collapse" data-target="#options-content"> <i class="fa fa-plus-circle"></i> <?php _e( 'Show More Options', 'pam' ); ?> </a> 
      <div id="options-content" class="collapse"> 
        <label class="margin-t-10">
          <?php _e( 'Features', 'pam' ); ?>
        </label>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox1" type="checkbox"> 
          <label for="checkbox1"> 
            <?php _e( 'Free Parking', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox2" type="checkbox"> 
          <label for="checkbox2"> 
            <?php _e( 'Air Condition', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox3" type="checkbox"> 
          <label for="checkbox3"> 
            <?php _e( 'Places to seat', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox4" type="checkbox"> 
          <label for="checkbox4"> 
            <?php _e( 'Swimming Pool', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox5" type="checkbox"> 
          <label for="checkbox5"> 
            <?php _e( 'Laundry Room', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox6" type="checkbox"> 
          <label for="checkbox6"> 
            <?php _e( 'Window Covering', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox7" type="checkbox"> 
          <label for="checkbox7"> 
            <?php _e( 'Central Heating', 'pam' ); ?> 
          </label>           
        </div>         
        <div class="checkbox checkbox-theme checkbox-circle"> 
          <input id="checkbox8" type="checkbox"> 
          <label for="checkbox8"> 
            <?php _e( 'Alarm', 'pam' ); ?> 
          </label>           
        </div>         
      </div>       
      <div class="form-group mb-0"> 
        <button class="search-button">
          <?php _e( 'Search', 'pam' ); ?>
        </button>         
      </div>       
    </form>     
  </div>   
  <!-- Popular posts start -->   
  <div class="widget popular-posts"> 
    <h3 class="sidebar-title"><?php _e( 'Popular Posts', 'pam' ); ?></h3> 
    <div class="media"> 
      <div class="media-left"> 
        <img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-7.jpg" alt="sub-properties"> 
      </div>       
      <div class="media-body"> 
        <h3 class="media-heading"> <a href="#"><?php _e( 'Modern Design Building', 'pam' ); ?></a> </h3> 
        <p><?php _e( '22 April, 2018', 'pam' ); ?></p> 
        <strong><?php _e( '$345,000', 'pam' ); ?></strong> 
      </div>       
    </div>     
    <div class="media"> 
      <div class="media-left"> 
        <img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-6.jpg" alt="sub-properties"> 
      </div>       
      <div class="media-body"> 
        <h3 class="media-heading"> <a href="#"><?php _e( 'Real Eatate Expo 2018', 'pam' ); ?></a> </h3> 
        <p><?php _e( '22 April, 2018', 'pam' ); ?></p> 
        <strong><?php _e( '$345,000', 'pam' ); ?></strong> 
      </div>       
    </div>     
    <div class="media"> 
      <div class="media-left"> 
        <img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-3.jpg" alt="sub-properties"> 
      </div>       
      <div class="media-body"> 
        <h3 class="media-heading"> <a href="#"><?php _e( 'Villa in Coral Gables', 'pam' ); ?></a> </h3> 
        <p><?php _e( '22 April, 2018', 'pam' ); ?></p> 
        <strong><?php _e( '$345,000', 'pam' ); ?></strong> 
      </div>       
    </div>     
  </div>   
  <!-- Posts by category start -->   
  <div class="posts-by-category widget"> 
    <h3 class="sidebar-title"><?php _e( 'Category', 'pam' ); ?></h3> 
    <ul class="list-unstyled list-cat"> 
      <li> 
        <a href="#"><?php _e( 'Single Family', 'pam' ); ?> <span><?php _e( '(45)', 'pam' ); ?></span></a> 
      </li>       
      <li> 
        <a href="#"><?php _e( 'Apartment', 'pam' ); ?> <span><?php _e( '(21)', 'pam' ); ?></span> </a> 
      </li>       
      <li> 
        <a href="#"><?php _e( 'Condo', 'pam' ); ?> <span><?php _e( '(23)', 'pam' ); ?></span></a> 
      </li>       
      <li> 
        <a href="#"><?php _e( 'Multi Family', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a> 
      </li>       
      <li> 
        <a href="#"><?php _e( 'Villa', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a> 
      </li>       
      <li> 
        <a href="#"><?php _e( 'Other', 'pam' ); ?> <span><?php _e( '(22)', 'pam' ); ?> </span></a> 
      </li>       
    </ul>     
  </div>   
  <!-- Helping Center start -->   
  <div class="widget helping-center"> 
    <h3 class="sidebar-title"><?php _e( 'Helping Center', 'pam' ); ?></h3> 
    <ul class="contact-link"> 
      <li> 
        <i class="flaticon-location"></i> 
        <?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> 
      </li>       
      <li> 
        <i class="flaticon-technology-1"></i> 
        <a href="tel:+55-417-634-7071">  <?php _e( '+55 417 634 7071', 'pam' ); ?> </a> 
      </li>       
      <li> 
        <i class="flaticon-envelope"></i> 
        <a href="mailto:info@themevessel.com">  <?php _e( 'info@themevessel.com', 'pam' ); ?> </a> 
      </li>       
    </ul>     
  </div>   
  <!-- Latest reviews start -->   
  <div class="widget latest-reviews"> 
    <h3 class="sidebar-title"><?php _e( 'Reviews', 'pam' ); ?></h3> 
    <div class="media"> 
      <div class="media-left"> 
        <a href="#"> <img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-1.jpg" alt="avatar-1"> </a> 
      </div>       
      <div class="media-body"> 
        <h3 class="media-heading"><a href="#"><?php _e( 'Emma Connor', 'pam' ); ?></a></h3> 
        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiamrisus tortor, accumsan at nisi,', 'pam' ); ?></p> 
      </div>       
    </div>     
    <div class="media"> 
      <div class="media-left"> 
        <a href="#"> <img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-2.jpg" alt="avatar-2"> </a> 
      </div>       
      <div class="media-body"> 
        <h3 class="media-heading"><a href="#"><?php _e( 'Martin Smith', 'pam' ); ?></a></h3> 
        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiamrisus tortor, accumsan at nisi,', 'pam' ); ?></p> 
      </div>       
    </div>     
  </div>   
  <!-- Latest tweet start -->   
  <div class="widget latest-tweet"> 
    <h3 class="sidebar-title"><?php _e( 'Tweet', 'pam' ); ?></h3> 
    <p><a href="#"><?php _e( '@Lorem ipsum dolor', 'pam' ); ?></a> <?php _e( 'sit amet, consectetur adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum', 'pam' ); ?> </p> 
    <p><?php _e( '@Lorem ipsum dolor', 'pam' ); ?><a href="#"><?php _e( 'sit amet, consectetur', 'pam' ); ?></a> <?php _e( 'adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum quis orci', 'pam' ); ?> </p> 
  </div>   
</div>