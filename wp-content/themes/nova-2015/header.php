<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nova Gaming Community</title>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- End of fonts -->
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/bower_components/fontawesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo("template_url"); ?>/styles/navbar.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo("template_url"); ?>/styles/codestrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!--     <?php wp_enqueue_script("jquery"); ?>

	<?php wp_head(); ?> -->
</head>
<body>
<!-- Navbar Starts -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cs-dropdown-navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->


        <?php
        wp_nav_menu( array(
                'menu'              => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_id'      => 'cs-dropdown-navbar',
                'container_class'   => 'collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

        <!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  <!-- Navbar Ends -->
</body>