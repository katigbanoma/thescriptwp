
<div class="mh-tabbed-widget">
    <div class="mh-tab-buttons clearfix">
        <a class="mh-tab-button" href="#tab-mh_magazine_tabbed-2-1"><span><i class="fa fa-bar-chart" aria-hidden="true"></i></span>Polls</a>
        <a class="mh-tab-button" href="#tab-mh_magazine_tabbed-2-2"><span><i class="fa fa-comments-o" aria-hidden="true"></i></span>Comment</a>
    </div>


    <div id="tab-mh_magazine_tabbed-2-1" class="mh-tab-content mh-tab-posts">
        <h3 style="text-align:center;">Will the NGR Senate pass the Petroleum Bill?</h3>
        <p><button type="button" name="button" class="poll-btn"><h3>YES</h3></button></p>
        <p><button type="button" name="button" class="poll-btn"><h3>NO</h3></button></p>
    </div>

    <div id="tab-mh_magazine_tabbed-2-2" class="mh-tab-content mh-tab-posts">
        <div class="mh-custom-posts-header">
            <div class="mh-custom-posts-small-title"> <a href="#" title="Vulputate velit esse molestie consequat vel illum"> Maitama Sule: Osinbajo Visits Kano, Condoles With Residents </a></div>
            <div class="mh-meta entry-meta">
                <span class="entry-meta-date updated">
                        <i class="fa fa-clock-o"></i><a href="#">Mar 10, 2015</a>
                      </span> <span class="entry-meta-comments"><i class="fa fa-comment-o"></i>
                        <a href="#" class="mh-comment-count-link" >2</a></span></div>
        </div>
        <div class="mh-custom-posts-header">
            <div class="mh-custom-posts-small-title"> <a href="#" title="Vulputate velit esse molestie consequat vel illum"> Man United agree £75m deal with Everton for Romelu Lukaku </a></div>
            <div class="mh-meta entry-meta"> <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i><a href="#">Mar 10, 2015</a></span>
                <span class="entry-meta-comments"><i class="fa fa-comment-o"></i>
                            <a href="#" class="mh-comment-count-link" >2</a></span></div>
        </div>
    </div>
</div>

<div class="mh-tab-buttons clearfix">
    <a class="mh-tab-button" href="#">Exchange Rates </a>
</div>
<div class="mv-tab-content mv-tab-posts">
  <table class="exchange-table" cellspacing="15px">
    <thead>
      <tr>
        <th></th>
        <th><img src="<?php echo get_stylesheet_directory_uri()?>/images/ukthumb" width="30px" /><br>BUY/SELL</th>
        <th><img src="<?php echo get_stylesheet_directory_uri()?>/images/uslogo.png" width="30px" /><br>BUY/SELL</th>
        <th><img src="<?php echo get_stylesheet_directory_uri()?>/images/eurologo.jpg" width="30px" /><br>BUY/SELL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>13/07/2017</td>
        <td>363/365</td>
        <td>455/465</td>
        <td>405/410</td>
      </tr>
      <tr>
        <td>13/07/2017</td>
        <td>363/365</td>
        <td>455/465</td>
        <td>405/410</td>
      </tr>
      <tr>
        <td>13/07/2017</td>
        <td>363/365</td>
        <td>455/465</td>
        <td>405/410</td>
      </tr>
      <tr>
        <td>13/07/2017</td>
        <td>363/365</td>
        <td>455/465</td>
        <td>405/410</td>
      </tr>
      <tr>
        <td>13/07/2017</td>
        <td>363/365</td>
        <td>455/465</td>
        <td>405/410</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="mh-tab-buttons clearfix">
    <a class="mh-tab-button" href="#"> Most Read </a>
</div>

<div class="" style="marign-top:20px;">
    <div id="mh_magazine_custom_posts-2" class="mh-widget mh-home-6 mh_magazine_custom_posts">
        <ul class="mh-custom-posts-widget clearfix">

            <?php 
                $args = array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  );
                $the_query = new WP_Query( $args );
                
                if($the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>

            <li class="mh-custom-posts-item mh-custom-posts-small clearfix post-140 post type-post status-publish format-standard  category-world tag-festival tag-sightseeing tag-travel tag-world">
                <figure class="mh-custom-posts-thumb">
                    <a class="mh-thumb-icon mh-thumb-icon-small" href="<?php echo get_the_permalink()?>" title="<?php echo get_the_title(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'attachment-mh-magazine-small size-mh-magazine-small', 'title' => 'Feature image']); ?>
                    </a>
                </figure>
                <div class="mh-custom-posts-header">
                    <div class="mh-custom-posts-small-title">
                        <a href="<?php echo get_the_permalink()?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_excerpt(); ?></a></div>
                    <div class="mh-meta entry-meta">
                        <span class="entry-meta-date updated">
                            <i class="fa fa-clock-o"></i>
                            <a href="<?php echo get_the_permalink()?>"><?php echo get_the_excerpt(); ?> <a href="#" style="color:red;">Read more</a></a>
                        </span>
                    </div>
                </div>
            </li>

            <?php endwhile; else: ?>

                <p>No News Today</p>

            <?php endif; wp_reset_postdata(); ?>

        </ul>
    </div>
</div>
