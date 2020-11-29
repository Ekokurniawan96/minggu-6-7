<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TOLEKTRO</title>

  <!-- letakan bootstrap disini -->
  <link href="<?php echo e(url('public')); ?>/assets/vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo e(url('public')); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!--Slide Show Css -->
  <link href="<?php echo e(url('public')); ?>/assets/ItemSlider/css/main-style.css" rel="stylesheet" />
  <!-- custom CSS here -->
  <link href="<?php echo e(url('public')); ?>/assets/css/style.css" rel="stylesheet" />
  <!-- Custom styles for this template-->
  <link href="<?php echo e(url('public')); ?>/assets/css2/sb-admin-2.min.css" rel="stylesheet">

  <!-- letakan style css disini -->
  <style type="text/css">
    /*****************globals*************/
    body {
      font-family: 'open sans';
      overflow-x: hidden;
    }

    img {
      max-width: 100%;
    }

    .preview {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    @media  screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px;
      }
    }

    .preview-pic {
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
      border: none;
      margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
      width: 18%;
      margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block;
    }

    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0;
    }

    .tab-content {
      overflow: hidden;
    }

    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
      animation-name: opacity;
      -webkit-animation-duration: .3s;
      animation-duration: .3s;
    }

    .card {
      margin-top: 50px;
      background: #eee;
      padding: 3em;
      line-height: 1.5em;
    }

    @media  screen and (min-width: 997px) {
      .wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }
    }

    .details {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .colors {
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
      text-transform: UPPERCASE;
      font-weight: bold;
    }

    .checked,
    .price span {
      color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
      margin-bottom: 15px;
    }

    .product-title {
      margin-top: 0;
    }

    .size {
      margin-right: 10px;
    }

    .size:first-of-type {
      margin-left: 40px;
    }

    .color {
      display: inline-block;
      vertical-align: middle;
      margin-right: 10px;
      height: 2em;
      width: 2em;
      border-radius: 2px;
    }

    .color:first-of-type {
      margin-left: 20px;
    }

    .add-to-cart,
    .like {
      background: #ff9f1a;
      padding: 1.2em 1.5em;
      border: none;
      text-transform: UPPERCASE;
      font-weight: bold;
      color: #fff;
      -webkit-transition: background .3s ease;
      transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
      background: #b36800;
      color: #fff;
    }

    .not-available {
      text-align: center;
      line-height: 2em;
    }

    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff;
    }

    .gold {
      background: gold;
    }

    .white {
      background: white;
    }

    .silver {
      background: silver;
    }

    .tooltip-inner {
      padding: 1.3em;
    }

    @-webkit-keyframes opacity {
      0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes  opacity {
      0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">

            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="<?php echo e(url('public')); ?>/assets/img/xiaomi.jpg" /></div>
              <div class="tab-pane" id="pic-2"><img src="<?php echo e(url('public')); ?>/assets/img/realme.jpg" /></div>
              <div class="tab-pane" id="pic-3"><img src="<?php echo e(url('public')); ?>/assets/img/dummyimg.png" /></div>
              <div class="tab-pane" id="pic-4"><img src="<?php echo e(url('public')); ?>/assets/img/realme.jpg" /></div>
              <div class="tab-pane" id="pic-5"><img src="<?php echo e(url('public')); ?>/assets/img/dummyimg.png" /></div>
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?php echo e(url('public')); ?>/assets/img/dummyimg.png" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="<?php echo e(url('public')); ?>/assets/img/realme.jpg" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="<?php echo e(url('public')); ?>/assets/img/dummyimg.png" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="<?php echo e(url('public')); ?>/assets/img/realme.jpg" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="<?php echo e(url('public')); ?>/assets/img/dummyimg.png" /></a></li>
            </ul>

          </div>
          <div class="details col-md-6">
            <h3 class="product-title"><?php echo e($produkUser->nama); ?></h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">
                <p>Berat :<?php echo e($produkUser->berat); ?></p>
              </span>
              <span class="review-no">
                <p>Stok :<?php echo e($produkUser->stok); ?></p>
              </span>
              <span class="review-no">
                <p>Seller :<?php echo e($produkUser->seller->nama); ?></p>
              </span>
            </div>
            <p class="product-description"><?php echo nl2br($produkUser->deskripsi); ?></p>
            <h4 class="price">current price: <span><?php echo e($produkUser->harga); ?>


              </span></h4>

            <h5 class="colors">colors:
              <span class="color gold not-available" data-toggle="tooltip" title="Not In store"></span>
              <span class="color white"></span>
              <span class="color silver"></span>
            </h5>
            <div class="action">
              <button class="add-to-cart btn btn-default" type="button">add to cart</button>
              <a href="<?php echo e(url('berandaUser')); ?>" class="btn btn-primary  btn-xs">Kembali</a>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\blog\system\resources\views/users/showProduk.blade.php ENDPATH**/ ?>