<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compotible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Admin Ocean</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/styles.css" >
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Ocean Storage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transaksi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Barang Masuk</a></li>
            <li><a href="#">Barang Keluar</a></li>
            <li><a href="#">Barang Cacat</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= base_url(); ?>report/pdf">Report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Upload</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
              <li><a href="<?= base_url('logout') ?>">Logout</a></li>
            <?php else : ?>
              <!-- <li><a href="<?= base_url('register') ?>">Register</a></li> -->
              <li><a href="<?= base_url('login') ?>">Login</a></li>
            <?php endif; ?>
          </ul>
        </div><!-- .navbar-collapse -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>