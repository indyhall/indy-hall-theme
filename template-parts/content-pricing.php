<section class="pricing-packages">
  <div class="inner-wrap">
    <h2><?php the_field('pricing_header', 'option'); ?></h2>
    <hr>
    <div class="pricing-toggle">
      <span>I'm looking for a place to work</span>
      <label class="switch-toggle outer">
        <input type="checkbox" checked="true" />
        <div></div>
      </label>
      <span>I don't need a place to work</span>
    </div>
    <div class="packages">
      <?php
        // check if the repeater field has rows of data
        if( have_rows('pricing_package', 'option') ):
          // loop through the rows of data
          while ( have_rows('pricing_package', 'option') ) : the_row();
            // display a sub field value
            ?>
            <div class="package">
              <span class="package-name"><?php the_sub_field('package_name'); ?></span>
              <span class="package-price" style="color: #<?php the_sub_field('color'); ?>"><?php the_sub_field('package_price'); ?></span>
              <span class="package-caption"><?php the_sub_field('price_caption'); ?></span>
              <span class="package-description"><?php the_sub_field('description'); ?></span>
              <a href="<?php the_sub_field('button_link'); ?>"><span class="button" style="background-color: #<?php the_sub_field('color'); ?>"><?php the_sub_field('button_text'); ?></span></a>
            </div>
            <?php
          endwhile;
        else :
          // no rows found
        endif;
      ?>
    </div>

  </div>
</section>