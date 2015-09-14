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

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- End of fonts -->

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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">News<span class="sr-only">(current)</span></a></li>
              <li><a href="#">Servers</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php bloginfo("url"); ?>/wp-admin">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  <!-- Navbar Ends -->
</body>