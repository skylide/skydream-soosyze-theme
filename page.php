
<header class="wow">
    <div class="header-1">
        <div class="container">
            <div class="row">
                <?php echo $section[ 'second_menu' ]; ?>
            </div>
        </div>
    </div>
    <div class="header-2">
        <div class="logo animated infinite pulse delay-2s">
            <a href="<?php echo $base_path; ?>"><?php echo $title; ?></a>
        </div>
    </div>
    <div class="header-3">
        <nav class="container navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php echo $section[ 'main_menu' ]; ?>
                <form class="form-inline">	
                        <div class="seo_social">	
                            <a target="_blank" href="#" class="i-google"><i class="fab fa-google-plus-g hvr-pulse"></i></a>	
                            <a target="_blank" href="#" class="i-facebook"><i class="fab fa-facebook-f hvr-pulse"></i></a>	
                            <a target="_blank" href="#" class="i-twitter"><i class="fab fa-twitter hvr-pulse"></i></a>	
                            <a target="_blank" href="#" class="i-youtube"><i class="fab fa-youtube hvr-pulse"></i></a>	
                        </div>	
                    </form>
            </div>
        </nav>
    </div>
</header>

<section class="container">
    <div class="row" id="body">
        <div id="content" class="page col-md-12">
            <h2 class="title_main"><?php echo $title_main; ?></h2>

            <?php if (!empty($section[ 'messages' ])): ?>

            <?php echo $section[ 'messages' ]; ?>
            <?php endif; ?>

            <?php if (!empty($section[ 'content_header' ])): ?>

            <?php echo $section[ 'content_header' ]; ?>
            <?php endif; ?>

            <?php echo $section[ 'content' ]; ?>
            <?php if (!empty($section[ 'content_footer' ])): ?>

            <?php echo $section[ 'content_footer' ]; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<footer>
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if (!empty($section[ 'footer_first' ])): ?>

                    <?php echo $section[ 'footer_first' ]; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if (!empty($section[ 'footer_second' ])): ?>

                    <?php echo $section[ 'footer_second' ]; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if (!empty($section[ 'footer_three' ])): ?>

                    <?php echo $section[ 'footer_three' ]; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($section[ 'footer' ])): ?>

                    <?php echo $section[ 'footer' ]; ?>
                    <?php endif; ?>

                    Thème <a target="_blank" href="https://github.com/skylide/skydream-soosyze-theme">Skydream</a> fait avec
                    <i class="fa fa-heart" style="color: red;margin:0 2px;"></i> par
                    <a target="_blank" href="https://www.arnaud-dupont.tech/">Arnaud Dupont</a><br>
                    Intégré par <a target="_blank" href="https://mathieu-noel.fr/">Mathieu NOËL</a>
                </div>
            </div>
        </div>
    </div>
</footer>