<?php
get_header();
?>

<body>
    <main>
        <section class="container mx-auto">
            <div class="flex justify-center mt-16">
                <div class="flex flex-col items-center text-center">
                    <p class="label mb-2"><?php echo esc_html( get_field('label') ); ?></p>
                    <h1 class="headingText mb-6 max-w-8/12"><?php the_field('title'); ?></h1>
                    <p class="bodyText mb-6"><?php echo esc_html( get_field('body') ); ?></p>
                    <div class="flex flex-row">
                        <a class="CTAButton" href=""><?php echo esc_html( get_field('button') ); ?></a>
                        <img class="ml-2.5" src="<?php the_field('cta_button_icon'); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 grid-rows-1 gap-5 mt-20 mb-24">
                <div class="CTAContainer flex flex-col justify-end" style="background-image: url(<?php the_field('cta_background_1'); ?>);">
                    <div class="CTAContent">
                        <h2 class="CTATitle"><?php echo esc_html( get_field('cta_title_1') ); ?></h2>
                        <div class="flex flex-row">
                            <p class="CTABody"><?php echo esc_html( get_field('cta_body_1') ); ?></p>
                            <img src="<?php the_field('cta_blocks_icon'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="CTAContainer flex flex-col justify-end" style="background-image: url(<?php the_field('cta_background_2'); ?>);">
                    <div class="CTAContent">
                        <h2 class="CTATitle"><?php echo esc_html( get_field('cta_title_2') ); ?></h2>
                        <div class="flex flex-row">
                            <p class="CTABody"><?php echo esc_html( get_field('cta_body_2') ); ?></p>
                            <img src="<?php the_field('cta_blocks_icon'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>