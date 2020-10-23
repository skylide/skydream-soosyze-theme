
<div class="row">
    <?php if( $news ): ?>
        <?php foreach( $news as $new ): ?>
            <article class="col-md-4">
                <h3>
                    <a href="<?php echo $new[ 'link_view' ]; ?>">
                        <?php echo $new[ 'title' ]; ?>
                    </a>
                </h3>
                
                <img src="<?php echo $new[ 'field' ][ 'image' ][ 'field_value' ]; ?>" alt="Illustration" class="img-fluid">
                
                <?php echo $new[ 'field' ][ 'summary' ][ 'field_display' ]; ?>
                
                <span class="span-atc-1">
                    <i class="fas fa-calendar-alt"></i> <?php echo strftime('%d.%B.%Y', $new[ 'date_created' ]); ?>
                </span>
                
                <span class="span-atc-2">
                    <i class="fas fa-clock"></i> 
                    ~<?php echo $new[ 'field' ][ 'reading_time' ][ 'field_value' ] . ' ' . t('minute(s)'); ?>
                </span>
                
                <div class="text-center">
                    <a href="<?php echo $new[ 'link_view' ]; ?>" class="btn"><?php echo t('Learn more'); ?></a>
                </div>
            </article>

        <?php endforeach; ?>
        <div class="col-md-12">

            <?php echo $paginate; ?>
        </div>
        <div class="col-md-12">
            <a type="application/rss+xml" href="<?php echo $link_rss; ?>"><i class="fa fa-rss-square" aria-hidden="true" title="Flux RSS"></i></a>
        </div>
    <?php else: ?>

        <div class="col-md-12">
            <p><?php echo $default; ?></p>
        </div>
    <?php endif; ?>

</div>