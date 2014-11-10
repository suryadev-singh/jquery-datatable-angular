<!doctype html>
<html ng-app="lazyloadingImage" ng-controller="instagramImageController">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>
      Lazy Loading Images With AngularJS
    </title>
    <link rel="stylesheet" type="text/css" href="css/lazy-loading.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <!-- Load scripts. -->
    <script type="text/javascript" src="angular/jquery.min.js"></script> 
    <script type="text/javascript" src="angular/bootstrap.min.js"></script> 
    <script type="text/javascript" src="angular/angular.min.js"></script>
    <script type="text/javascript" src="angular/ng-infinite-scroll.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/controller.js"></script>
    <script type="text/javascript" src="js/services.js"></script> 
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>
            Lazy Loading Images With AngularJS
            <button onclick=location.href="https://instagram.com/accounts/logout/"> LOG OUT </button>
          </h1>
          <ul class="photos" infinite-scroll='instagramApi.nextPage()' infinite-scroll-disabled='instagramApi.busy' infinite-scroll-distance='1'>
            <li id="{{$index + 1}}" ng-repeat="item in instagramApi.items" class="photo">        
              <img class="img-responsive thumbnail" src={{item.url}} />
              <div style='clear: both;'></div>                             
            </li>
            <li ng-show='instagramApi.busy'>Loading data...</li>
          </ul>
        </div>
      </div>
    </div>                             s
  </body>
</html>
