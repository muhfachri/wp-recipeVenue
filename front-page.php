<section class="main-content">
    <div class="container">
        <div class="menus">
            <span class="section-icon cheese"><img
                    src="<?php echo get_template_directory_uri() . '/dist/images/icon-cheese.png' ?>"
                    class="img-fluid"/>Cheese</span>

            <div class="row">
                <?php if (have_rows('menu_cheese')) { ?>
                    <?php while (have_rows('menu_cheese')) {
                        the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $url = get_sub_field('url');

                        $style = '';
                        if ($image) {
                            $style = "background-image:url('" . $image . "')";
                        }
                        ?>
                        <div class="col">
                            <div class="wrapper">
                                <div style="<?php echo $style ?>" class="bg-img img-fluid">
                                    <div class="description">
                                        <h6><?php echo $title; ?></h6>
                                        <a href="<?php echo $url ?>">
                                            <button class="btn btn-default btn-resep">Lihat Resep</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <a href="#" class="view-wrap">
                <span class="fa fa-caret-right view-all" title="icon media play" aria-hidden="true"><span class="view">View All</span></span>
            </a>
        </div>
        <div class="menus">
            <span class="section-icon choco"><img
                    src="<?php echo get_template_directory_uri() . '/dist/images/icon-choco.png' ?>" class="img-fluid"/>Chocolate</span>

            <div class="row">
                <?php if (have_rows('menu_chocolate')) { ?>
                    <?php while (have_rows('menu_chocolate')) {
                        the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $url = get_sub_field('url');

                        $style = '';
                        if ($image) {
                            $style = "background-image:url('" . $image . "')";
                        }
                        ?>
                        <div class="col">
                            <div class="wrapper">
                                <div style="<?php echo $style ?>" class="bg-img img-fluid">
                                    <div class="description">
                                        <h6><?php echo $title; ?></h6>
                                        <a href="<?php echo $url ?>">
                                            <button class="btn btn-default btn-resep">Lihat Resep</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <a href="#" class="view-wrap">
                <span class="fa fa-caret-right view-all" title="icon media play" aria-hidden="true"><span class="view">View All</span></span>
            </a>
        </div>
        <div class="menus">
            <span class="section-icon fruit"><img
                    src="<?php echo get_template_directory_uri() . '/dist/images/icon-cheese.png' ?>"
                    class="img-fluid"/>Fruit</span>

            <div class="row">
                <?php if (have_rows('menu_fruit')) { ?>
                    <?php while (have_rows('menu_fruit')) {
                        the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $url = get_sub_field('url');

                        $style = '';
                        if ($image) {
                            $style = "background-image:url('" . $image . "')";
                        }
                        ?>
                        <div class="col">
                            <div class="wrapper">
                                <div style="<?php echo $style ?>" class="bg-img img-fluid">
                                    <div class="description">
                                        <h6><?php echo $title; ?></h6>
                                        <a href="<?php echo $url ?>">
                                            <button class="btn btn-default btn-resep">Lihat Resep</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <a href="#" class="view-wrap">
                <span class="fa fa-caret-right view-all" title="icon media play" aria-hidden="true"><span class="view">View All</span></span>
            </a>
        </div>
        <div class="menus">
            <span class="section-icon vegetable"><img
                    src="<?php echo get_template_directory_uri() . '/dist/images/icon-cheese.png' ?>"
                    class="img-fluid"/>Vegetable</span>

            <div class="row">
                <?php if (have_rows('menu_vegetable')) { ?>
                    <?php while (have_rows('menu_vegetable')) {
                        the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $url = get_sub_field('url');

                        $style = '';
                        if ($image) {
                            $style = "background-image:url('" . $image . "')";
                        }
                        ?>
                        <div class="col">
                            <div class="wrapper">
                                <div style="<?php echo $style ?>" class="bg-img img-fluid">
                                    <div class="description">
                                        <h6><?php echo $title ?></h6>
                                        <a href="<?php echo $url ?>">
                                            <button class="btn btn-default btn-resep">Lihat Resep</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <a href="#" class="view-wrap">
                <span class="fa fa-caret-right view-all" title="icon media play" aria-hidden="true"><span class="view">View All</span></span>
            </a>
        </div>
    </div>
</section>

<?php $title = get_field('title'); ?>
<?php $description = get_field('description'); ?>
<section id="section-hot-deals">
    <div class="container container-custom-padding">
        <header class="headline">
            <h1><?php echo $title ?></h1>

            <h2><?php echo $description ?></h2>
        </header>
        <div class="row">
            <?php if (have_rows('list_deal')) { ?>
                <?php while (have_rows('list_deal')) {
                    the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $price = get_sub_field('price');
                    $url = get_sub_field('url');

                    $style = '';
                    if ($image) {
                        $style = "background-image:url('" . $image . "')";
                    }
                    ?>
                    <div class="col">
                        <div class="wrapper-lihat">
                            <div style="<?php echo $style ?>" class="bg-img img-fluid"></div>
                            <div class="description-oven">
                                <h1><?php echo $title ?></h1>

                                <h2><?php echo $price ?></h2>
                                <a href="<?php echo $url ?>">
                                    <button class="btn btn-default btn-lihat">Lihat</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php $why_title = get_field('why_title'); ?>
<?php $why_description = get_field('why_description'); ?>
<section id="section-why">
    <div class="container container-custom-padding">
        <header class="headline headline-why">
            <h1><?php echo $why_title ?></h1>

            <h2><?php echo $why_description ?></h2>
        </header>
        <div class="row list-wrapper">
            <?php if (have_rows('why_orang')) { ?>
                <?php while (have_rows('why_orang')) {
                    the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');

                    $style = '';
                    if ($image) {
                        $style = "background-image:url('" . $image . "')";
                    }
                    ?>
                    <div class="col">
                        <div class="wrapper-orang">
                            <div style="<?php echo $style ?>" class="bg-img img-fluid"></div>
                            <h1><?php echo $title ?></h1>

                            <h2><?php echo $description ?></h2>

                            <div class="description-orang">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>


