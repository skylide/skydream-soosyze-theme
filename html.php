<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <?php if( $favicon ): ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo $favicon; ?>" />
    <?php endif; ?>

    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keyboard; ?>" />
    <meta name="generator" content="<?php echo $generator; ?>" />
    <?php echo $meta; ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/styles.css">
    <?php echo $styles; ?>
</head>

<body>
    <?php echo $section[ 'page' ]; ?>
    <?php if( isset($section[ 'page_bottom' ]) ): ?>
    <?php echo $section[ 'page_bottom' ]; ?>
    <?php endif; ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.8.3/Sortable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       false,       // default
                      live:         true      // default
                    }
                    )
                    wow.init();
    </script>
    <script src="<?php echo $base_theme; ?>assets/js/admin.js"></script>
    <?php echo $scripts; ?>

</body>

</html>