<?php include 'header.php'; ?>

    <div class="mh-header-nav-mobile clearfix"></div>
   
    <div class="mh-wrapper mh-home clearfix">
        <div class="mh-main mh-home-main">
            <div class="mh-home-columns clearfix">
                <div id="main-content" class="mh-content mh-home-content">

                    <!--- This egment is meant for my slider -->
                    <div id="mh_magazine_slider-2" class="mh-widget mh-home-2 mh-widget-col-2 mh_magazine_slider">
                        <div class="flexslider mh-slider-widget mh-slider-normal mh-slider-layout1">

                            <ul class="slides">
                                <li class="mh-slider-item">
                                    <article>
                                        <a href="#" title="">
                                  <img width="678" height="381" src="<?php echo get_stylesheet_directory_uri()?>/images/singa.jpg" class="attachment-mh-magazine-content
                                  size-mh-magazine-content wp-post-image" sizes="(max-width: 678px) 100vw, 678px" />
                                </a>
                                        <div class="mh-image-caption mh-slider-category"> World</div>
                                        <div class="mh-slider-caption">
                                            <div class="mh-slider-content">
                                                <h3 class="mh-slider-title">
                                                    <a href="#" title=""> Consequat vel illum dolore eu feugiat </a>
                                                </h3>
                                                <div class="mh-excerpt">
                                                    Tatvero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                                    <nav class="mh-social-icons mh-social-nav mh-social-nav-top clearfix">
                                                        <ul>Share
                                                            <li><a href="https://www.facebook.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://twitter.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://plus.google.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://www.youtube.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li class="mh-slider-item">
                                    <article>
                                        <a href="#" title="">
                                  <img width="678" height="381" src="<?php echo get_stylesheet_directory_uri()?>/images/singa.jpg" class="attachment-mh-magazine-content
                                  size-mh-magazine-content wp-post-image" sizes="(max-width: 678px) 100vw, 678px" />
                                </a>
                                        <div class="mh-image-caption mh-slider-category"> World</div>
                                        <div class="mh-slider-caption">
                                            <div class="mh-slider-content">
                                                <h3 class="mh-slider-title">
                                                    <a href="#" title=""> Consequat vel illum dolore eu feugiat </a>
                                                </h3>
                                                <div class="mh-excerpt">
                                                    Tatvero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                                    <nav class="mh-social-icons mh-social-nav mh-social-nav-top clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                                                        <ul>Share
                                                            <li><a href="https://www.facebook.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://twitter.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://plus.google.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://www.youtube.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                        </ul>
                                                    </nav>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <li class="mh-slider-item">
                                    <article>
                                        <a href="#" title="">
                                  <img width="678" height="381" src="<?php echo get_stylesheet_directory_uri()?>/images/singa.jpg" class="attachment-mh-magazine-content
                                  size-mh-magazine-content wp-post-image" sizes="(max-width: 678px) 100vw, 678px" />
                                </a>
                                        <div class="mh-image-caption mh-slider-category"> World</div>
                                        <div class="mh-slider-caption">
                                            <div class="mh-slider-content">
                                                <h3 class="mh-slider-title">
                                                    <a href="#" title=""> Consequat vel illum dolore eu feugiat </a>
                                                </h3>
                                                <div class="mh-excerpt">
                                                    Tatvero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                                    <nav class="mh-social-icons mh-social-nav mh-social-nav-top clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                                                        <ul>Share
                                                            <li><a href="https://www.facebook.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://twitter.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://plus.google.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                            <li><a target="_blank" href="https://www.youtube.com/thescript"><i class="fa fa-mh-social"></i></a></li>
                                                        </ul>
                                                    </nav>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--- This segment is meant for my slider -->

                    <div class="clearfix">
                        <div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-margin-left mh-home-area-4">

                            <?php 
                                $args = array('orderby' => 'id');
                                $categories = get_categories($args);
                                foreach ($categories as $cat) :
                            ?>
                                                                
                                <?php 
                                    $args = array( 'posts_per_page' => 1, 'cat' => $cat->term_id );
                                    $the_query = new WP_Query( $args );
                                    
                                    if($the_query->have_posts() ) : 
                                    while ( $the_query->have_posts() ) : $the_query->the_post();
                                ?>

                                <div id="mh_magazine_custom_posts-4" class="mh-widget mh-home-4 mh_magazine_custom_posts">
                                    <h4 class="mh-widget-title">
                                        <span class="mh-widget-title-inner">
                                            <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="mh-widget-title-link"><?php echo strtoupper($cat->name); ?></a>
                                        </span>
                                        <span style="padding:15px;">
                                            <div style="display:inline" style="font-size:5px; background:#000; border:1px solid #000; float:right">
                                            <a href="<?php echo get_permalink() ;?>" style="float:right; background-color:#ccc; font-size:8pt; padding:4px;">VIEW MORE</a>
                                            </div>
                                        </span>
                                    </h4>
                                    <ul class="mh-custom-posts-widget clearfix">
                                        <li class="mh-custom-posts-item mh-custom-posts-large clearfix">
                                            <div class="mh-custom-posts-large-inner clearfix">
                                                <figure class="mh-custom-posts-thumb-xl">
                                                    <a class="mh-thumb-icon mh-thumb-icon-small-mobile" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                                                        <div class="bg-content" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                                                    </a>
                                                </figure>
                                                <div class="mh-custom-posts-content">
                                                    <div class="mh-custom-posts-header">
                                                        <h3 class="mh-custom-posts-xl-title">
                                                            <a href="<?php echo get_permalink(); ?>" title="Esse molestie consequat vel illum dolore eu feugiat">
                                                                <?php get_the_title() ; ?>
                                                            </a>
                                                        </h3>
                                                        <div class="mh-meta entry-meta">
                                                            <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i>
                                                                <a href="#"><?php echo get_post_time('F j, Y'); ?></a>
                                                            </span>
                                                            <span class="entry-meta-comments"><i class="fa fa-comment-o"></i><a href="#" class="mh-comment-count-link"><?php echo wp_count_comments()->total_comments; ?></a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mh-excerpt">
                                                        <?php the_excerpt(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <?php endwhile; else: ?>
                                    <p>No News Today</p>
                                <?php 
                                    endif; 
                                    wp_reset_postdata(); 
                                    endforeach;
                                ?>
                        </div>
                    </div>

                    <style media="screen">
                        .bg-content {
                            width: 326px;
                            height: 245px;
                            background-size: cover;
                        }
                    </style>

                    <!--Ad Section -->
                    <div class="textwidget">
                        <div class="mh-ad-spot">
                            <a target="_blank" href="#">
                                <img width="680" height="130" style="height:130px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner1.png" />
                              </a>
                        </div>
                    </div>
                </div>

                <!-- TODO: Use Plugin Video Section -->
                <div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-6">
                    <div id="mh_magazine_youtube-2" class="mh-widget mh_magazine_youtube">
                        <h4 class="mh-widget-title"><span class="mh-widget-title-inner"><i class="fa fa-youtube-play"></i>Featured Video</span></h4>
                        <div class="mh-video-widget">
                            <div class="mh-video-container">
                                <iframe seamless width="1280" height="720" src="http://www.youtube.com/embed/WBgwuFM92i4?wmode=opaque&amp;hd=1&amp;autoplay=0&amp;showinfo=0&amp;controls=0&amp;rel=0"
                                    allowfullscreen></iframe>
                            </div>
                            <p style="font-size: 12px; font-weight:bold; padding-top: 5px; padding-bottom:5px;">
                                <a href="#">
                                <i class="fa fa-chevron-right" style="padding-top: 5px; padding-bottom:5px"></i>About Obama at the G8 world leaders summit:
                              </a>
                            </p>
                        </div>
                        <p style="padding: 6px 6px;">Up Next</p>
                        <ul class="mh-custom-posts-widget clearfix">
                            <li class="mh-custom-posts-item mh-custom-posts-small clearfix post-144 post type-post status-publish format-standard has-post-thumbnail category-world tag-boat tag-sightseeing tag-travel tag-world">
                                <figure class="mh-custom-posts-thumb">
                                    <a class="mh-thumb-icon mh-thumb-icon-small" href="#" title="Iam nonumy eirmod tempor invidunt ut labore et dol">
                                    <img width="80" height="60" src="<?php echo get_stylesheet_directory_uri()?>/images/Picture1.png" class="attachment-mh-magazine-small size-mh-magazine-small wp-post-image" alt="Ship"  sizes="(max-width: 80px) 100vw, 80px" /> </a>
                                </figure>
                                <div class="mh-custom-posts-header">
                                    <div class="mh-custom-posts-small-title"> <a href="#" style="font-size:12px;"> Maitama Sule: Osinbajo Visits Kano, Condoles With Residents</a></div>
                                    <div class="mh-meta entry-meta">
                                        <span class="entry-meta-date updated" style="color:black;">
                                        <i class="fa fa-play fa-1g" aria-hidden="true"></i>
                                        <a href="#" style="font-weight:bold; color:black;">Play Video 6:33</a>
                                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="mh-custom-posts-item mh-custom-posts-small clearfix post-144 post type-post status-publish format-standard has-post-thumbnail category-world tag-boat tag-sightseeing tag-travel tag-world">
                                <figure class="mh-custom-posts-thumb">
                                    <a class="mh-thumb-icon mh-thumb-icon-small" href="#" title="Iam nonumy eirmod tempor invidunt ut labore et dol">
                                      <img width="80" height="60" src="<?php echo get_stylesheet_directory_uri()?>/images/Picture4.png" class="attachment-mh-magazine-small size-mh-magazine-small wp-post-image" alt="Ship"  sizes="(max-width: 80px) 100vw, 80px" /> </a>
                                </figure>
                                <div class="mh-custom-posts-header">
                                    <div class="mh-custom-posts-small-title"> <a href="#" style="font-size:12px;"> Saraki’s CCT acquittal: Fed Govt Completes record transmission.</a></div>
                                    <div class="mh-meta entry-meta">
                                        <span class="entry-meta-date updated" style="color:black;">
                                          <i class="fa fa-play fa-1g" aria-hidden="true"></i>
                                          <a href="#" style="font-weight:bold; color:black;">Play Video 6:33</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div id="mh_magazine_custom_posts-2" class="mh-widget mh-home-6 mh_magazine_custom_posts">
                        <h4 class="mh-widget-title"><span class="mh-widget-title-inner">IN THE NEWS</span></h4>
                        <ul class="mh-custom-posts-widget clearfix">

                             <?php 
                                $args = array( 'posts_per_page' => 4 );
                                $the_query = new WP_Query( $args );
                                
                                if($the_query->have_posts() ) : 
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                            <li class="mh-custom-posts-item mh-custom-posts-small clearfix">
                                <?php 
                                    the_post_thumbnail('thumbnail' , array('class' => 'mh-custom-posts-thumb', 'title' => get_the_title()) );
                                ?>
                                <div class="mh-custom-posts-header">
                                    <div class="mh-custom-posts-small-title"> <a href="#" title="<?php echo get_title(); ?>"><?php echo get_title() ?> </a></div>
                                    <div class="mh-meta entry-meta"> <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i><a href="#"><?php echo get_post_time('F j, Y');?></a></span>
                                        <span class="entry-meta-comments"><i class="fa fa-comment-o"></i><a href="#" class="mh-comment-count-link" ><?php echo wp_count_comments(); ?></a></span></div>
                                </div>
                            </li>

                            <?php endwhile; else: ?>
                                <p>No News Today</p>
                            <?php endif; wp_reset_postdata(); ?>

                        </ul>
                    </div>

                    <?php get_sidebar(); ?>

                  </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>