
    <?php foreach ($menu as $link): ?>
        <?php if (empty($link[ 'submenu' ])): ?>

        <a class="header-1-a" href="<?php echo $link[ 'link' ]; ?>" target="<?php echo $link[ 'target_link' ]; ?>"
            <?php if ($link[ 'target_link' ] === '_blank'): ?> rel="noopener noreferrer" <?php endif; ?>>
            <?php echo !empty($link['icon']) ? "{$link[ 'title_link' ]}" : $link[ 'title_link' ]; ?>

        </a>
        <?php else: ?>

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">
            <?php echo !empty($link['icon']) ? "<i class='{$link['icon']}' aria-hidden='true'></i> {$link[ 'title_link' ]}" : $link[ 'title_link' ]; ?>
            <span class="caret"></span>

        </a>
        <?php echo $link[ 'submenu' ]; ?>
        <?php endif; ?>


    <?php endforeach; ?>