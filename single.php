  <?php get_header(); ?>


  <div class="scroll-area">

    <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
    ?>

    <section class="work-single">
      <div class="work-single__container">
        <time class="work-single__time"><?php the_date('Y.m.d'); ?></time>
        <h1 class="work-single__title title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail(array(810,810), array('class' => "work-single__thumbnail-img")); ?>
        <div class="work-single__summary">
          <?php
            $field_category = SCF::get('category-wo');
            $field_design = SCF::get('design-wo');
            $field_function = SCF::get('function-wo');
            $field_period = SCF::get('period-wo');
          ?>
          <table class="summary__table">
            <tr>
              <td width="20%" class="summary-item">分野：
            </th>
              <td width="80%" class="summary-vaule"><?php echo $field_category; ?></th>
            </tr>
            <tr>
              <td class="summary-item">デザイン：</th>
              <td class="summary-vaule"><?php echo $field_design; ?></th>
            </tr>
            <tr>
              <td class="summary-item">主な機能：</th>
              <td class="summary-vaule"><?php echo $field_function; ?></th>
            </tr>
            <tr>
              <td class="summary-item">制作期間：</th>
              <td class="summary-vaule"><?php echo $field_period; ?></th>
            </tr>
          </table>
        </div>
        <div class="work-single__area">
          <div class="work-single__init">
            <table>
              
            </table>
          </div>
          <?php the_content(); ?>
        </div>

        <div class="pager">
          <?php
            $prev_post = get_previous_post(); 
            $next_post = get_next_post();
            if($next_post):
          ?>
          <div class="prev">
            <a class="prev__link" href="<?php echo get_permalink($next_post->ID); ?>">
              <div class="prev__area">
                <div class="prev__btn pager__btn">≪</div>
                <p class="prev__text pager__txt"><?php echo $next_post->post_title; ?></p>
              </div>
            </a>
          </div>
          <?php
            endif;
            if($prev_post):
          ?>
          <div class="next">
            <a class="next__link" href="<?php echo get_permalink($prev_post->ID); ?>">
              <div class="next__area">
                <p class="next__text pager__txt"><?php echo $prev_post->post_title; ?></p>
                <div class="next__btn pager__btn">≫</div>
              </div>
            </a>
          </div>
          <?php
          endif;
          ?>
        </div>
        <a href="/" class="work-single__home">ホームに戻る</a>

      </div>
    </section>

    <?php
        endwhile;
      endif;
    ?>




        
  <?php get_footer(); ?>