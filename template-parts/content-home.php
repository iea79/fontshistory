<!-- begin fScreen -->
<section id="fScreen" class="fScreen section">
    <div class="fScreen__map">
        <?php echo wp_get_attachment_image(SCF::get('first_bg'), 'full') ?>
    </div>
    <h1 class="section__title">
        <div class="before__line"></div>
        <span><?php echo strip_tags(SCF::get('first_title'), ['em', 'i', 'span', 'br']); ?></span>
        <div class="after__line"></div>
    </h1>
    <div class="fScreen__bg">
        <?php
        $first_list = SCF::get('first_list');

        foreach ($first_list as $item) {
        ?>
            <div class="fScreen__point">
                <div class="fScreen__year"><?php echo $item['first_list_year'] ?></div>
                <div class="fScreen__round"><?php echo wp_get_attachment_image($item['first_list_img'], 'full') ?></div>
            </div>
        <?php
        };
        ?>
    </div>
    <div class="fScreen__content">
        <div class="section__sub"><?php echo SCF::get('first_text'); ?></div>
        <div class="fScreen__img">
            <?php echo wp_get_attachment_image(SCF::get('first_img'), 'full') ?>
        </div>
    </div>
</section>
<!-- end fScreen -->

<!-- begin tableContent -->
<section id="tableContent" class="tableContent section">
    <h2 class="section__title">
        <?php echo strip_tags(SCF::get('table_content_title'), ['em', 'i', 'span', 'br']); ?>
    </h2>
    <div class="tableContent__list">
        <?php
        $table_content_list = SCF::get('table_content_list');

        foreach ($table_content_list as $item) {
        ?>
            <div class="tableContent__row">
                <div class="tableContent__name"><?php echo $item['table_content_list_name'] ?></div>
                <div class="tableContent__text"><?php echo $item['table_content_list_text'] ?></div>
                <div class="tableContent__img"><?php echo wp_get_attachment_image($item['table_content_list_img'], 'full') ?></div>
            </div>
        <?php
        };
        ?>
    </div>
</section>
<!-- end tableContent -->

<!-- begin antiqueFonts -->
<section id="antiqueFonts" class="antiqueFonts section section_light">
    <div class="antiqueFonts__bg"><?php echo wp_get_attachment_image(SCF::get('antique_fonts_bg'), 'full') ?></div>
    <div class="antiqueFonts__content">
        <div class="antiqueFonts__left">
            <h2 class="section__title"><?php echo strip_tags(SCF::get('antique_fonts_title'), ['em', 'i', 'span', 'br']); ?></h2>
            <div class="antiqueFonts__img">
                <div class="antiqueFonts__pattern">
                    <?php echo wp_get_attachment_image(SCF::get('antique_fonts_pattern'), 'full') ?>
                </div>
                <div class="antiqueFonts__portret">
                    <?php echo wp_get_attachment_image(SCF::get('antique_fonts_portret'), 'full') ?>
                </div>
                <div class="antiqueFonts__autograf">
                    <?php echo wp_get_attachment_image(SCF::get('antique_fonts_autograf'), 'full') ?>
                </div>
                <div class="antiqueFonts__plates">
                    <div class="antiqueFonts__plate"><?php echo wp_get_attachment_image(SCF::get('antique_fonts_label1'), 'full') ?></div>
                    <div class="antiqueFonts__plate"><?php echo wp_get_attachment_image(SCF::get('antique_fonts_label2'), 'full') ?></div>
                </div>
            </div>
        </div>
        <div class="antiqueFonts__right">
            <div class="antiqueFonts__top">
                <div class="section__anchore"><?php echo SCF::get('antique_fonts_anchore'); ?></div>
                <div class="section__except"><?php echo SCF::get('antique_fonts_sub'); ?></div>
            </div>
            <div class="section__text"><?php echo SCF::get('antique_fonts_text'); ?></div>
        </div>
    </div>
</section>
<!-- end anticueFonts -->

<!-- begin during -->
<section id="during" class="during section">
    <div class="during__content">
        <div class="during__right">
            <h2 class="section__title"><?php echo strip_tags(SCF::get('during_title'), ['em', 'i', 'span', 'br']); ?></h2>
        </div>
        <div class="during__left">
            <div class="section__anchore"><?php echo SCF::get('during_anchore'); ?></div>
            <div class="section__except"><?php echo SCF::get('during_sub'); ?></div>
            <div class="section__text"><?php echo SCF::get('during_text'); ?></div>
        </div>
    </div>
    <div class="during__gallery">
        <?php
        $during_gallery = SCF::get('during_gallery');

        foreach ($during_gallery as $item) {
        ?>
            <div class="during__img"><?php echo wp_get_attachment_image($item['during_gallery_img'], 'full') ?></div>
        <?php
        };
        ?>
    </div>
</section>
<!-- end during -->