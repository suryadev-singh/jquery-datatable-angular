/**
 * Copyright (c) 2014 .....
 * @author        suryadev <suryadev.singh08@gmail.com>
 * @license       ....
 * @Description   Create service to get data from the instagramAPI.
 *
 */
angular.module('lazyloadingImage.services', []).
        factory('InstagramApi', function($http) {
          var InstagramApi = function() {
            this.items = [];
            this.busy = false;
            this.url = '';
            this.after = '';           
          };

          InstagramApi.prototype.nextPage = function() {            
            if (this.busy)
              return;
            this.busy = true;
            this.url = "https://api.instagram.com/v1/users/self/feed?access_token=1549843941.4ba9036.4e573dc50b8b4feeb32f428b965f1f20&count=10&max_id="+this.after+"&callback=JSON_CALLBACK";            
            $http.jsonp(this.url).success(function(data) {                            
              var items = data.data;    
              this.after = data.pagination.next_max_id;              
              for (var i = 0; i < items.length; i++) {
                this.items.push(items[i].images.low_resolution);                
              }                                         
              this.busy = false;
            }.bind(this));
          };

          return InstagramApi;
        });

