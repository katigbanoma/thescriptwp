<?php
/**
 * The template for displaying single post
 *
 * This is the template that displays all single post of any post type by default.
 *
 * @package theScript
 * @subpackage Single Template
 * @since v2017.01
 */

get_header(); ?>

        <div class="mh-wrapper clearfix">
            <div class="mh-main clearfix">
                <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage">

                    <!--Breadcrumb-->
                    <nav class="mh-breadcrumb"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php" itemprop="url"><span itemprop="title">Home</span></a>
                        </span><span class="mh-breadcrumb-delimiter"><i class="fa fa-angle-right"></i></span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                         <?php
                            $category = get_the_category(); 
                            $category_link = get_category_link($category[0]->cat_ID);
                            $category_name = $category[0]->cat_name;
                        ?>

                        <a href="<?php echo $category_link ?>" itemprop="url">
                        <span itemprop="title"><?php echo $category_name?></span>
                        </a>
                        </span><span class="mh-breadcrumb-delimiter"><i class="fa fa-angle-right"></i></span><?php echo get_the_title(); ?>
                    </nav>


                    <article>
                        <header class="entry-header clearfix">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            <div class="mh-subheading-top"></div>
                            <!--<h2 class="mh-subheading">This is a custom subheading for your article</h2>-->
                            <div class="mh-meta entry-meta"> 
                                <span class="entry-meta-date updated">
                                    <i class="fa fa-clock-o"></i><a href="#"><?php echo get_post_time('F j, Y')?></a>
                                </span>
                                <span class="entry-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" href="<?php echo get_the_author_link() ?>"><?php get_the_author(); ?></a></span>
                                <span class="entry-meta-categories"><i class="fa fa-folder-open-o"></i><a href="#" rel="category tag">Politics</a></span>
                                <span class="entry-meta-comments"><i class="fa fa-comment-o"></i><a href="#" class="mh-comment-count-link" ><?php echo wp_count_comments() ?></a></span></div>
                        </header>

                        <div id="text-3" class="mh-widget mh-posts-1 widget_text">
                            <div class="textwidget">
                                <div class="mh-ad-label">Advertisement</div>
                                <div class="mh-ad-area">
                                    <div style="font-size: 13px; padding: 0.5em; background: #f5f5f5; border: 1px solid #ebebeb; text-align: center;">
                                        <a target="_blank" href="#" title="Purchase MH Magazine Premium">Here you can place more advertisements and banners</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-content clearfix">

                            <?php the_post_thumbnail() ?>

                            <!--<figure class="entry-thumbnail"> <img src="images/berlin-678x381.jpg" alt="Berlin" title="Berlin" />
                                <figcaption class="wp-caption-text">Image Credit: The Script Photography</figcaption>
                            </figure>-->

                            <p><span class="mh-dropcap">T</span> he office of the Attorney General of the Federation (AGF) yesterday
                                completed the transmission of record of proceedings at the Code of Conduct Tribunal (CCT)
                                to the Court of Appeal in Abuja in relation to the appeal it filed against the acquittal
                                of Senate President Bukola Saraki by the CCT.</p>

                            <!-- TODO: Implement Social Plugin as a template -->
                            <div class="mh-social-bottom">
                                <div class="mh-share-buttons clearfix">
                                    <a class="mh-facebook" href="#" onclick="window.open('https://www.facebook.com/sharer.php?u=http%3A%2F%2Fdemo.mhthemes.com%2Fmagazine%2Ftempor-invidunt-ut-labore-et-dolore-magna-aliquyam%2F&amp;t=Laoreet+dolore+magna+aliquam+erat+vol+magna+aliquyam', 'facebookShare', 'width=626,height=436'); return false;"
                                        title="Share on Facebook"> <span class="mh-share-button"><i class="fa fa-facebook"></i></span> </a>
                                    <a class="mh-twitter" href="#" onclick="window.open('https://twitter.com/share?text=Laoreet+dolore+magna+aliquam+erat+vol+magna+aliquyam:&amp;url=http%3A%2F%2Fdemo.mhthemes.com%2Fmagazine%2Ftempor-invidunt-ut-labore-et-dolore-magna-aliquyam%2F', 'twitterShare', 'width=626,height=436'); return false;"
                                        title="Tweet This Post"> <span class="mh-share-button"><i class="fa fa-twitter"></i></span> </a>
                                    <a class="mh-pinterest" href="#" onclick="window.open('https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fdemo.mhthemes.com%2Fmagazine%2Ftempor-invidunt-ut-labore-et-dolore-magna-aliquyam%2F&amp;media=http://demo.mhthemes.com/magazine/wp-content/uploads/sites/16/2015/10/berlin.jpg&amp;description=Laoreet+dolore+magna+aliquam+erat+vol+magna+aliquyam', 'pinterestShare', 'width=750,height=350'); return false;"
                                        title="Pin This Post"> <span class="mh-share-button"><i class="fa fa-pinterest"></i></span> </a>
                                    <a class="mh-googleplus" href="#" onclick="window.open('https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=http%3A%2F%2Fdemo.mhthemes.com%2Fmagazine%2Ftempor-invidunt-ut-labore-et-dolore-magna-aliquyam%2F', 'googleShare', 'width=626,height=436'); return false;"
                                        title="Share on Google+" target="_blank"> <span class="mh-share-button"><i class="fa fa-google-plus"></i></span> </a>
                                    <a class="mh-email" href="#" title="Send this article to a friend" target="_blank"> <span class="mh-share-button"><i class="fa fa-envelope-o"></i></span> </a>
                                </div>
                                <!--<p>This current post has been shared 100 times click above to share also:</p>-->
                            </div>
                        </div>
                        <div class="entry-tags clearfix"><i class="fa fa-tag"></i>
                            <?php 
                                if(get_the_tag_list()) {
                                    echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                                }
                            ?>
                        </div>

                    </article>
                    <div class="mh-author-box clearfix">
                        Copyright 2017 TheScript. Permission to use quotations from this article is granted subject to appropriate credit being given
                        to www.thescript.com.ng as the source.
                    </div>


                    <nav class="mh-post-nav mh-row clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                        <!--<div class="mh-col-1-2 mh-post-nav-item mh-post-nav-prev">
                            <a href="#" rel="prev"><img width="80" height="60" src="images/protest-80x60.jpg" class="attachment-mh-magazine-small size-mh-magazine-small wp-post-image" alt="Protest"  sizes="(max-width: 80px) 100vw, 80px" /><span>Previous</span>
                                    <p>The incessant lynching of humans continue</p>
                                  </a>
                        </div>
                        <div class="mh-col-1-2 mh-post-nav-item mh-post-nav-next">
                            <a href="#" rel="next"><img width="80" height="60" src="images/river_london-80x60.jpg" class="attachment-mh-magazine-small size-mh-magazine-small wp-post-image" alt="River London"  sizes="(max-width: 80px) 100vw, 80px" /><span>Next</span>
                                    <p>How the group called badoo started</p>
                                  </a>
                        </div>-->

                        <div id="cooler-nav" class="navigation">
                            <?php $prevPost = get_previous_post(true);
                            if($prevPost): ?>
                                <div class="nav-box previous">
                                    <?php 
                                        $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );
                                        previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); 
                                    ?>
                                </div>

                                <?php 
                                    endif; 
                                    $nextPost = get_next_post(true);
                                    if($nextPost) : 
                                ?>
                                <div class="nav-box next" style="float:right;">
                                    <?php 
                                        $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); 
                                        next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE); 
                                    ?>
                                </div>
                                <?php endif; ?>
                            </div><!--#cooler-nav div -->

                            <style>
                                #cooler-nav{clear: both; height: 100px; margin: 0 0 70px;}
                                #cooler-nav .nav-box{background: #e9e9e9; padding: 10px;}
                                #cooler-nav img{float: left; margin: 0 10px 0 0;}
                                #cooler-nav p{margin: 0 10px; font-size: 12px; vertical-align: middle;}
                                #cooler-nav .previous{float: left; vertical-align: middle; width: 250px; height: 100px;}
                                #cooler-nav .next{float: right; width: 250px;}
                            </style>
                    </nav>

                    <!--Ad Section-->
                    <div id="text-4" class="mh-widget mh-posts-2 widget_text">
                        <div class="textwidget">
                            <div class="mh-ad-label">Advertisement</div>
                            <div class="mh-ad-area">
                                <div style="font-size: 13px; padding: 0.5em; background: #f5f5f5; border: 1px solid #ebebeb; text-align: center;">
                                    <a target="_blank" href="#" title="Purchase MH Magazine Premium">Here you can place more advertisements and banners</a></div>
                            </div>
                        </div>
                    </div>
                    <!--Ad Section Ends-->

                    <div id="comments" class="mh-comments-wrap">
                        <!-- TODO: Implement Disqus -->
                    </div>
                </div>

                <!-- Sidebar starts here -->
                <aside class="mh-widget-col-1 mh-sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
                    
                    
                    <div id="text-2" class="mh-widget widget_text">
                        <div class="textwidget">
                            <div class="mh-ad-spot">
                                <a href="#" target="_blank">
                                        <img alt="MH Themes" src="images/ad-300x250-mh-magazine.png"> </a>
                            </div>
                        </div>
                    </div>

                    <!-- News in Pictures Section -->
                    <div id="mh_magazine_nip-2" class="mh-widget mh_magazine_nip">
                        <h4 class="mh-widget-title"><span class="mh-widget-title-inner">News in Pictures</span></h4>
                        <ul class="mh-nip-widget clearfix">

                            <?php 
                                $args = array( 'posts_per_page' => 9 );
                                $the_query = new WP_Query( $args );
                                
                                if($the_query->have_posts() ) : 
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                            ?>

                            <li class="mh-nip-item post-115 post type-post status-publish format-standard has-post-thumbnail category-money tag-banks tag-euro tag-financial tag-money">
                                <a class="mh-thumb-icon mh-thumb-icon-small" href="#" title="Feugiat nulla facilisis at vero eros et accumsan">
                                    <img width="80" height="60" src="images/wallet-80x60.jpg" class="attachment-mh-magazine-small size-mh-magazine-small wp-post-image" alt="Wallet"  sizes="(max-width: 80px) 100vw, 80px" />
                                    <div class="mh-nip-overlay"></div>
                                </a>
                            </li>

                            <?php endwhile; else: ?>
                                <p>No News for Today</p>
                            <?php endif; wp_reset_postdata(); ?>

                        </ul>
                    </div>

                    <?php get_sidebar(); ?>

                    <!-- Ad Section -->
                    <div id="text-2" class="mh-widget widget_text">
                        <div class="textwidget">
                            <div class="mh-ad-spot">
                                <a href="#" target="_blank">
                                  <img alt="MH Themes" src="images/ad-300x250-mh-magazine.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Ad Section -->

                </aside>

                <!--Sidebar ends here-->
            </div>
        </div>
        
<?php get_footer() ?>