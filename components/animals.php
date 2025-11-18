<div class="animals">
    <?php $page = get_page_by_path('beef');
        if ($page) { ?>
            <div> <!-- these need to be contained for the animals flex -->
                <a href="<?php echo get_permalink($page->ID); ?>">
                    <div class="round hover-back animals-svg">
                <!-- put these styles in the css -->
                    <!-- // TODO: move svg to specific files  -->
                    <?php get_template_part('components/beef-svg'); ?>
                </div>
                </a> <!-- these need to be tested as svg, its not great they are part of the theme but for now it will do -->

                <h3 class="text-center">
                    <a href="<?php echo get_permalink($page->ID); ?>" class="animals-link">
                        Beef
                    </a>
                </h3>
            </div>
        <?php }

        $page = get_page_by_path('deer');
        if ($page) { ?>
            <div>
                <a href="<?php echo get_permalink($page->ID); ?>">
                    <div class="round hover-back animals-svg">
                    <?php get_template_part('components/deer-svg'); ?>
                </div>
                </a>
                <h3 class="text-center"><a href="<?php echo get_permalink($page->ID); ?>" class="animals-link">Deer</a></h3>
            </div>
        <?php }

        $page = get_page_by_path('pig');
        if ($page) { ?>
            <div>
                <a href="<?php echo get_permalink($page->ID); ?>">
                    <div class="round hover-back animals-svg">

                    <?php get_template_part('components/pig-svg'); ?>

                </div>
                </a>
                <h3 class="text-center">
                    <a href="<?php echo get_permalink($page->ID); ?>" class="animals-link">
                    Pig
                </a>
                </h3>
            </div>
        <?php }

        $page = get_page_by_path('sheep');
        if ($page) { ?>
            <div>
                <a href="<?php echo get_permalink($page->ID); ?>">
                    <div class="round any-center hover-back animals-svg">
                        <?php get_template_part('components/sheep-svg'); ?>
                    </div>
                </a>
                <h3 class="text-center">
                    <a href="<?php echo get_permalink($page->ID); ?>" class="animals-link">
                        Sheep
                    </a>
                </h3>
            </div>
        <?php }


        $page = get_page_by_path('alpaca-llama');
        if ($page) { ?>
            <div>
                <a href="<?php echo get_permalink($page->ID); ?>">
                    <div class="round any-center hover-back animals-svg">
                        <?php get_template_part('components/alpaca-svg'); ?>   
                    </div>
                </a>
                <h3 class="text-center">
                    <a href="<?php echo get_permalink($page->ID); ?>" class="animals-link">Alpaca / llama</a>
                </h3>
            </div>
        <?php } ?>
    </div>