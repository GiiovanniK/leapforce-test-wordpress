<?php
get_header();
?>

<body>
    <main>
        <section class="container mx-auto">
            <div class="flex justify-center mt-16">
                <div class="flex flex-col items-center text-center">
                    <p class="label mb-2"><?php echo esc_html(get_field('label')); ?></p>
                    <h1 class="headingText mb-6 max-w-8/12"><?php the_field('title'); ?></h1>
                    <p class="bodyText mb-6"><?php echo esc_html(get_field('body')); ?></p>
                    <div class="flex flex-row">
                        <a href="" class="CTAButton flex items-center">
                            <?php echo esc_html(get_field('button')); ?>
                            <img class="ml-2.5" src="<?php the_field('cta_button_icon'); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-1 gap-5 grid-cols-1 md:grid-cols-2 mt-20 mb-24">
                <!-- Hele block clickable. Inline CSS voor variable background img. -->
                <a href="" class="CTAContainer flex flex-col justify-end rounded-sm" style="background-image: linear-gradient(180deg,rgba(20, 20, 20, 0) 0%, rgba(20, 20, 20, 0.8) 100%), url(<?php the_field('cta_background_1'); ?>);">
                    <div class="CTAContent">
                        <div class="flex flex-row justify-between">
                            <div class="content-end">
                                <h2 class="CTATitle mb-2"><?php echo esc_html(get_field('cta_title_1')); ?></h2>
                                <p class="CTABody"><?php echo esc_html(get_field('cta_body_1')); ?></p>
                            </div>
                            <div class="border-2 border-solid border-white/30 hover:border-white/50 rounded-sm p-4">
                                <img src="<?php the_field('cta_blocks_icon'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Alleen icon clickable. Inline CSS voor variable background img. -->
                <div class="CTAContainer flex flex-col justify-end rounded-sm" style="background-image: linear-gradient(180deg,rgba(20, 20, 20, 0) 0%, rgba(20, 20, 20, 0.8) 100%), url(<?php the_field('cta_background_2'); ?>);">
                    <div class="CTAContent">
                        <div class="flex flex-row justify-between">
                            <div class="content-end">
                                <h2 class="CTATitle mb-2"><?php echo esc_html(get_field('cta_title_2')); ?></h2>
                                <p class="CTABody"><?php echo esc_html(get_field('cta_body_2')); ?></p>
                            </div>
                            <a href="" class="border-2 border-solid border-white/30 hover:border-white/50 rounded-sm p-4">
                                <img src="<?php the_field('cta_blocks_icon'); ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>