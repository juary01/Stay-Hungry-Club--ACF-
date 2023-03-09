<?php get_header(); ?>
<div class="container-fluid gx-0 mx-auto overflow-hidden">
    <div class="inner-section mt-5">
    <?php if( have_rows('content')):?>

        <?php while(have_rows('content')): the_row();?>

                <?php if(get_row_layout() == 'columns_section'):

                     $title = get_sub_field('title');
                     $content = get_sub_field('content');
                     $image = get_sub_field('image');
                ?>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class ="mr-description">
                            <h1><?php echo $title?></h1>
                            <p><?php echo $content?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 text-center">
                            <div class="image-container">
                            <img src="<?php echo esc_url($image['url']);?>" class ="img-fluid img-left-bottom-rounded" alt="">
                            </div>
                        </div>
                    </div>
                <?php endif;?>
        <?php endwhile;?>
    </div>                      
    <?php endif; ?>
    <?php if(have_rows('section_membership')): ?>
        <?php while(have_rows('section_membership')): the_row();?>
          <?php if(get_row_layout()== 'section_membership'):

                $title_membership_section = get_sub_field('title_membership');
                $sub_membership_section = get_sub_field('sub_title');
                $content_membership_section = get_sub_field('content_membership');
                $image_membership_section = get_sub_field('image_membership');
                $sign_up_membership_section = get_sub_field('sign_up');
                $sign_up_label = get_sub_field('sign_up_now');

            ?>
                <div class = "row-membership_wrapper mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                            <img src="<?php echo esc_url($image_membership_section['url']);?>" class ="img-fluid float-end">
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <h2 ><?php  echo $title_membership_section;?></h2>
                        <h3><?php echo $sub_membership_section;?></h3>
                        <p><?php echo $content_membership_section;?></p>
                        <div class = "sign-up_container">
                        <a href="<?php echo esc_url($sign_up_membership_section['url']); ?>" class = "sign-up_btn"><?php echo esc_html($sign_up_label);?></a>
                        </div>
                    </div>
                </div>
                </div>
          <?php endif;?>
        <?php endwhile;?>

    <?php endif;?>
    <div class ="inner-section mt-5">
        <?php if(have_rows('section_subscription_box')): ?>
            <?php while(have_rows('section_subscription_box')): the_row();?>
                <?php if(get_row_layout() == 'section_subscription_box'):
                    $title_subscription = get_sub_field('title_subscription');
                    $content_subscription = get_sub_field('content_subscription');
                    $quarter_content_subscription = get_sub_field('quarter_subscription');
                    $sign_up_subscription = get_sub_field('sign_up_subscription');
                    $sign_up_now_label = get_sub_field('sign_up_now_label');
                    $image_subscription = get_sub_field('image_subscription');
                    ?>
                        <div class="row align-items-center">
                                <div class="col-lg-7">
                                <div class="mr-description_subs">
                                <h1 class ="subscription_title"><?php echo $title_subscription;?></h1>
                                <p><?php echo $content_subscription;?></p>
                                <p><?php echo $quarter_content_subscription;?></p>
                                <div class="sign-up-subs_container">
                                <a href="<?php echo esc_url($sign_up_subscription['url']);?>" class ="sign-up-btn_subs"><?php echo esc_html($sign_up_now_label);?></a>
                                </div>
                                </div>
                                </div>
                                <div class="col-lg-5">
                                <div class="img-subscription_wrapper text-center">
                                <img src="<?php echo esc_url($image_subscription['url']);?>" class = "img-fluid img-left-bottom-rounded">
                                </div>
                                </div>
                        </div>
                <?php endif;?>
            <?php endwhile;?>
        <?php endif;?>
    </div>
    <div class="section-banner_container mt-5">
        <?php if(have_rows('section_4_banner')):?>
                <?php while(have_rows('section_4_banner')): the_row();?>
                    <?php if(get_row_layout() == 'section_4_banner'):
                        $section_banner_image = get_sub_field('section_4_banner_image');
                        $section_banner_title = get_sub_field('section_4_banner_title');
                        $section_banner_text = get_sub_field('section_4_banner_text');
                        ?>
                        <div class="row">
                            <div class="col-lg-6">
                            <img src="<?php echo esc_url($section_banner_image['url']);?>" class ="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="section-banner_content">
                                 <h1 class="banner-title"><?php echo $section_banner_title?></h1>
                                <p class="banner-content"><?php echo $section_banner_text?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endwhile;?>
        <?php endif;?>
        </div>
        <div class="testimonial-section">
            <?php if (have_rows('testimonials_title_and_text')): ?>
                <?php while(have_rows('testimonials_title_and_text')): the_row();?>
                    <?php if(get_row_layout() == 'testimonials_title_and_text'):

                    $testimonial_title = get_sub_field('testimonials_title');
                    $testimonial_text = get_sub_field('testimonials_text');
                ?>
                    <h1><?php echo $testimonial_title?></h1>
                    <h2><?php echo $testimonial_text?></h2>

                    <?php endif;?>    
                <?php endwhile;?>
            <?php endif;?>
        </div>
        <div class="carousel-inner">
            <?php if (have_rows('section_testimonials')): ?>
                    <?php while (have_rows('section_testimonials')): the_row(); ?>
                        <div class="carousel-slide">
                        <?php $slide_image = get_sub_field('slide_image'); ?>
                            <?php if ($slide_image): ?>
                                <img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>">
                        <?php endif; ?>
                            <p class ="carousel-description"><?php the_sub_field('slide_description'); ?></p>
                            <p class ="author-name"><?php echo the_sub_field('author_name');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class ="contacts-container">
            <div class="inner-section mt-5">
                <?php if(have_rows('section_contacts')):?>
                    <?php while(have_rows('section_contacts')): the_row();?>
                        <?php if(get_row_layout() == 'section_contacts'):
                        $section_contact_title = get_sub_field('section_contact_title');
                        $section_contact_details = get_sub_field('section_contact_details');
                        $section_contact_button = get_sub_field('section_contact_button');
                        $contact_button_label = get_sub_field('section_button_label');
                        $contact_image = get_sub_field('section_contact_image');
                        ?>  
                            <div class="row">
                                <div class="col-lg-7">
                                   
                                    <h1 class= "contact-title"><?php echo $section_contact_title?></h1>
                                    <p class = "contact-details"><?php echo $section_contact_details?></p>
                                    <div class ="mt-5">
                                    <a href="<?php echo esc_url($section_contact_button['url']);?>" class = "contacts-btn"><?php echo esc_html($contact_button_label);?></a>      
                                    </div>                 
                                </div>
                                <div class="col-lg-5">
                                    <div class="image-container_contacts">
                                    <img src="<?php echo esc_url($contact_image['url']);?>" class ="img-fluid">
                                    </div>
                                </div>
                            </div>    
                        <?php endif;?>
                    <?php endwhile;?>
                <?php endif;?>
                </div>
            </div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.carousel-inner').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  variableWidth: true,
  prevArrow: false,
  nextArrow: false,
  dots: true,

});
});
</script>

<?php get_footer();?>