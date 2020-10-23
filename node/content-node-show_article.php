
<?php echo $node_submenu; ?>

<div class="article_img text-center">
    <?php echo $fields[ 'image' ][ 'field_display' ]; ?>
</div>
<?php echo $fields[ 'body' ][ 'field_display' ]; ?>
<div class="span-atc-1">
    <i class="fas fa-calendar-alt"></i>
    <?php echo strftime('%d.%B.%Y', $node[ 'date_created' ]); ?>
    -
    <i class="fa fa-clock"></i>
    ~<?php echo $fields[ 'reading_time' ][ 'field_value' ] . ' ' . t('minute(s)'); ?>
</div>