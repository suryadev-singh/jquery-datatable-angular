/**
 * Copyright (c) 2014 .....
 * @author        suryadev <suryadev.singh08@gmail.com>
 * @license       ....
 * @Description   Create Object to access the data member service.js.
 *
 */

angular.module('lazyloadingImage.controllers', [])
        .controller('instagramImageController', function($scope, InstagramApi) {
          $scope.instagramApi = new InstagramApi();
        }
        );
