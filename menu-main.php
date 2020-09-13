<?php echo $level === 1 ? '<ul class="navbar-nav  mr-auto">' : ''; ?>
<?php foreach ($menu as $link): ?>
<?php if ($level === 1): ?>

<li class="nav-item<?php echo empty($link[ 'submenu' ]) ? '' : '​ dropdown'; ?> <?php echo $link[ 'link_active' ]; ?>">
    <?php endif; ?>
    <?php if (!empty($link[ 'submenu' ])): ?>

    <a href="#" class="nav-link hvr-icon-down hvr-underline-reveal" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <?php echo !empty($link['icon']) ? "<i class='{$link['icon']}' aria-hidden='true'></i> {$link[ 'title_link' ]}" : $link[ 'title_link' ]; ?>
        <i class="fas fa-chevron-down hvr-icon"></i>

    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php echo $link[ 'submenu' ]; ?>

    </div>
    <?php else: ?>

    <a href="<?php echo $link[ 'link' ]; ?>" class="hvr-underline-reveal nav-link<?php echo $level !== 1 ? ' dropdown-item' : '​'; ?> "
        target="<?php echo $link[ 'target_link' ]; ?>" <?php if ($link[ 'target_link' ] === '_blank'): ?>
        rel="noopener noreferrer" <?php endif; ?>>
        <?php echo !empty($link['icon']) ? "<i class='{$link['icon']}' aria-hidden='true'></i> {$link[ 'title_link' ]}" : $link[ 'title_link' ]; ?>

    </a>
    <?php endif; ?>
    <?php if ($level === 1): ?>

</li>
<?php endif; ?>
<?php endforeach; ?>
<?php echo $level === 1 ? '</ul>' : ''; ?>