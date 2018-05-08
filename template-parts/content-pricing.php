<section class="pricing-packages">
  <div class="inner-wrap">
    <h2><?php the_field('pricing_header', 'option'); ?></h2>
    <hr>

    <div class="packages non-list">
      <div class="package">
        <span class="package-name"><?php the_field('package_name'); ?></span>
        <span class="package-price" style="color: #<?php the_field('color'); ?>"><?php the_field('package_price'); ?></span>
        <span class="package-caption"><?php the_field('price_caption'); ?></span>
        <span class="package-description"><?php the_field('description'); ?></span>
        <a href="<?php the_field('button_link'); ?>"><span class="button"><?php the_field('button_text'); ?></span></a>
      </div>
    </div>

    <div class="packages non-list">
      <div class="package">
        <span class="package-name"><?php the_field('package_name1'); ?></span>
        <span class="package-price" style="color: #<?php the_field('color1'); ?>"><?php the_field('package_price1'); ?></span>
        <span class="package-caption"><?php the_field('price_caption1'); ?></span>
        <span class="package-description"><?php the_field('description1'); ?></span>
        <a href="<?php the_field('button_link1'); ?>"><span class="button"><?php the_field('button_text1'); ?></span></a>
      </div>
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
            </div>

            <hr>
            <?php
          endwhile;
        else :
          // no rows found
        endif;
      ?>
      <a class="center" href="<?php the_field('button_link_packages'); ?>"><span class="button"><?php the_field('button_text_packages'); ?></span></a>
    </div>

    <div class="packages nights">
      <div class="package">
        <span class="package-name"><?php the_field('package_name2'); ?></span>
        <span class="package-price" style="color: #<?php the_field('color2'); ?>"><?php the_field('package_price2'); ?></span>
        <span class="package-caption"><?php the_field('price_caption2'); ?></span>
        <span class="package-description"><?php the_field('description2'); ?></span>
        <a href="<?php the_field('button_link2'); ?>"><span class="button"><?php the_field('button_text2'); ?></span></a>
      </div>
    </div>

  </div>
</section>