<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">

    <title>Codefied</title>
  </head>
  <body>
	<?php require_once('../inc/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 side-panel">
          <div class="top-panels text-center">
            <img src="logo.png" class="logo img-fluid" />
          </div>
          <div class="main-menu">
            <a href="javascript:void(0);" onclick="toggleMenu()" class="d-sm-none toggle-menu"><span class="fa fa-bars"></span></a>
            <ul>
              <li><a href="#"><span class="fa fa-dashboard"></span>  Dashboard</a></li>
              <li class="active"><a href="#"><span class="fa fa-star"></span>  Certificates</a></li>
              <li><a href="#"><span class="fa fa-envelope"></span>  Wallet</a></li>
              <li><a href="#"><span class="fa fa-gear"></span>  Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 main-panel">
          <div class="row">
            <div class="col-lg-12 top-panels">
              <div class="">
                <div class="Avatar"></div>
                <div class="Bounds">
                  <span class="badge badge-light">4</span>
                  <span class="fa fa-bell"></span>
                </div>
              </div>
            </div>
            <div class="main-container col-lg-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <h4>Certificates</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  text-right btn-control">
                  <a href="" class="btn btn-light">
                    <span class="fa fa-download"></span> Download All
                  </a>
                  <div class="btn btn-light">
                      <span class="fa fa-sort"></span> Sort by:
                      <select class="btn">
                        <option>Recent</option>
                        <option>Recent</option>
                      </select>
                  </div>
                  <a href="#"class="btn btn-primary"><span class="fa fa-file-text"></span> Load Certificate</a>
                </div>
                <div class="col-lg-12">
                  <ul class="sub-links">
                    <li class="active"><a href="#">All Certificates</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Active</a></li>
                    <li><a href="#">Expired</a></li>
                    <li><a href="#">Archived</a></li>
                  </ul>
                  <div class="certs">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                        <div class="cert">
                            <div class="cert-img"></div>
                            <div class="cert-bottom">
                              <div class="cert-name"><p>Diploma in Business Administrati...</p></div>
                              <div class="cert-menu">
                                <a href="#" class="btn btn-success float-left">Active</a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-download"></span>
                                </a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-share-alt"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                        <div class="cert">
                            <div class="cert-img"></div>
                            <div class="cert-bottom">
                              <div class="cert-name"><p>Diploma in Business Administrati...</p></div>
                              <div class="cert-menu">
                                <a href="#" class="btn btn-danger float-left">Expired</a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-download"></span>
                                </a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-share-alt"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                        <div class="cert">
                            <div class="cert-img"></div>
                            <div class="cert-bottom">
                              <div class="cert-name"><p>Diploma in Business Administrati...</p></div>
                              <div class="cert-menu">
                                <a href="#" class="btn btn-success float-left">Active</a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-download"></span>
                                </a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-share-alt"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                        <div class="cert">
                            <div class="cert-img"></div>
                            <div class="cert-bottom">
                              <div class="cert-name"><p>Diploma in Business Administrati...</p></div>
                              <div class="cert-menu">
                                <a href="#" class="btn btn-success float-left">Active</a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-download"></span>
                                </a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-share-alt"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                        <div class="cert">
                            <div class="cert-img"></div>
                            <div class="cert-bottom">
                              <div class="cert-name"><p>Diploma in Business Administrati...</p></div>
                              <div class="cert-menu">
                                <a href="#" class="btn btn-secondary float-left">Archive</a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-download"></span>
                                </a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-share-alt"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                        <div class="cert">
                            <div class="cert-img"></div>
                            <div class="cert-bottom">
                              <div class="cert-name"><p>Diploma in Business Administrati...</p></div>
                              <div class="cert-menu">
                                <a href="#" class="btn btn-warning float-left">Pending</a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-download"></span>
                                </a>
                                <a href="#" class="float-right btn-action">
                                  <span class="fa fa-share-alt"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10">

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      function toggleMenu(){
        console.log('test');
        $('.main-menu ul').slideToggle();
      }
    </script>
  </body>
</html>
