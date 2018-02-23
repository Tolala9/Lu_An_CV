<?php get_header(); ?>


<!--  Sections  -->
<!--Section About-->

<section id="about" class="s-about bg-light">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug('s-about');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s-descr-wrap">
            <div class="s-descr"><?php echo category_description($id) ?></div>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">

                <?php if ( have_posts() ) : query_posts('p=30');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-push-4 animation-2">
                    <h3>Photo</h3>
                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a class="popup" href="<?php
                            $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            echo $large_image_url[0];
                            ?>" alt= "title="<?php the_title_attribute(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4 animation-1">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>




                        <div class="col-md-4 animation-3 personal-last-block">
                            <?php if ( have_posts() ) : query_posts('p=34');
                                while (have_posts()) : the_post(); ?>
                            <h3><?php the_title(); ?></h3>
                            <h2 class="personal-header"><?php echo get_bloginfo('name'); ?></h2>
                            <?php the_content(); ?>
                            <?php endwhile; endif; wp_reset_query(); ?>

                            <div class="social-wrap">
                                <ul>

                                    <?php
                                    $idObj = get_category_by_slug('socials');
                                    $id = $idObj->term_id;
                                    if ( have_posts() ) : query_posts('cat=' . $id);
                                        while (have_posts()) : the_post(); ?>
                                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>"
                                                   target="_blank" title="<?php the_title(); ?>">
                                                    <i class="fa <?php echo get_post_meta($post->ID, 'icon', true); ?>"></i></a></li>
                                        <?php endwhile; endif; wp_reset_query(); ?>

                                </ul>
                            </div>
                        </div>




            </div>
        </div>
    </div>
</section>

<!--Section Resume-->

<section id="resume" class="s-resume bg-light">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug('s-resume');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s-descr-wrap">
            <div class="s-descr"><?php echo category_description($id) ?></div>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="resume-container">
                    <div class="col-md-6 col-sm-6 left">
                        <h3><?php
                            $idObj = get_category_by_slug('c_work');
                            $id = $idObj->term_id;
                            echo get_cat_name($id); ?>
                        </h3>
                        <div class="resume-icon"><i class="icon-basic-case"></i></div>

                        <?php if ( have_posts() ) : query_posts('cat=' . $id);
                            while (have_posts()) : the_post(); ?>
                                <div class="resume-item">
                                    <div class="year"><?php echo get_post_meta($post->ID, 'years', true); ?></div>
                                    <div class="resume-description"><strong><?php the_title(); ?> - </strong>
                                        <?php echo get_post_meta($post->ID, 'resume_place', true); ?></div>
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; endif; wp_reset_query(); ?>
                    </div>


                    <div class="col-md-6 col-sm-6 right">
                        <h3><?php
                            $idObj = get_category_by_slug('c_edu');
                            $id = $idObj->term_id;
                            echo get_cat_name($id); ?>
                        </h3>
                        <div class="resume-icon"><i class="icon-basic-spread-text-bookmark"></i></div>
                            <?php if ( have_posts() ) : query_posts('cat=' . $id);
                            while (have_posts()) : the_post(); ?>
                        <div class="resume-item">
                            <div class="year"><?php echo get_post_meta($post->ID, 'years', true); ?></div>
                            <div class="resume-description"><?php echo get_post_meta($post->ID, 'resume_place', true); ?> - <strong><?php the_title(); ?></strong></div>
                            <?php the_content(); ?>
                        </div>
                            <?php endwhile; endif; wp_reset_query(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section Portfolio-->

<section id="portfolio" class="s-myportfolio bg-dark">
    <div class="section-header">
        <h2>
            <?php
            $idObj = get_category_by_slug('s-myportfolio');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?>
        </h2>
        <div class="s-descr-wrap">
            <div class="s-descr"><?php echo category_description($id) ?></div>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="filter-div controls">
                    <ul>
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".sites">Sites</li>
                        <li class="filter" data-filter=".design">Design</li>

                    </ul>
                </div>
                <div id="portfolio-grid">

                    <?php if ( have_posts() ) : query_posts('cat=' . $id);
                        while (have_posts()) : the_post(); ?>

                            <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item
                            <?php
                            $tags = wp_get_post_tags($post->ID);
                            if ($tags) {
                                foreach($tags as $tag) {
                                    echo ' ' . $tag->name;
                                }
                            }
                            ?>  ">
                                <?php the_post_thumbnail(array(400, 300)); ?>
                                <div class="port_item_cont">
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <a href="#" class="popup-content">See more</a>
                                </div>
                                <div class="hidden">
                                    <div class="podrt_descr">

                                            <h3>
                                                <?php the_title(); ?>
                                            </h3>
                                            <?php the_content(); ?>
                                            <img src="<?php
                                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                            echo $large_image_url[0];
                                            ?>" alt="<?php the_title(); ?>" />

                                    </div>
                                </div>
                            </div>

                        <?php endwhile; endif; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!--Section Contacts-->

<section id="contacts" class="s-contacts bg-light">
    <div class="section-header">
        <h2><?php
            $idObj = get_category_by_slug('s-contacts');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s-descr-wrap">
            <div class="s-descr"><?php echo category_description($id) ?></div>
        </div>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-box">
                        <i class="contacts-icon icon-basic-geolocalize-05"></i>
                        <h3>Address:</h3>
                        <p><?php $options = get_option('sample_theme_options'); echo $options['addresstext']; ?></p>
                    </div>
                    <div class="contact-box">
                        <i class="contacts-icon icon-basic-smartphone"></i>
                        <h3>Phone:</h3>
                        <p><?php $options = get_option('sample_theme_options'); echo $options['phonetext']; ?></p>
                    </div>
                    <div class="contact-box ">
                        <i class="contacts-icon icon-basic-webpage-img-txt"></i>
                        <h3>Site</h3>
                        <p><a href="//<?php $options = get_option('sample_theme_options'); echo $options['sitetext']; ?>
                        " target="_blank"><?php
                                $options = get_option('sample_theme_options');
                                echo $options['sitetext']; ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form action="https://formspree.io/anatolii.lukavenko@gmail.com" class="main-form" target="_blank" method="POST" novalidate>
                        <label class="form-group">
                            <span class="color_element">*</span> Your name:
                            <input type="text" name="name" placeholder="Type your name..." data-validation-required-message="You didn`t type a name" required>
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Your e-mail:
                            <input type="text" name="E-mail" placeholder="Type your E-mail..." data-validation-required-message="You didn`t type an E-mail correct"  required>
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            Your comment:
                            <textarea  name="comment" placeholder="Type your comment here..."></textarea>
                            <span class="help-block text-danger"></span>
                        </label>
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Footer -->
<?php get_footer(); ?>