<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./images/backgroundimg.jpg')  ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">Privacy Policy</h1>
            <div class="page-banner__intro">
                <p>BrainStorm Force </p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span>
            </p>
        </div>

        <div class="generic-content">
            <p>This privacy policy applies to all visitors, and our website users, members and customers using or accessing our websites including brainstormforce.com, ultimatebeaver.com, ultimateelementor.com, convertplug.com, wpschema.com, wpportfolio.net, wpastra.com, store.brainstormforce.com, support.brainstormforce.com, ultimate.brainstormforce.com (the “Site”).</p>
        </div>
    </div>



<?php
}

get_footer();
