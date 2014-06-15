var app = angular.module("app", ['ngRoute','ui.bootstrap']);



app.config(['$routeProvider',function($routeProvider) {
    $routeProvider
            .when('/home', {
                templateUrl: 'Views/home.html',
                controller: 'MainCtrl'
            })
            
            .when('/about', {
                templateUrl: 'Views/about.html',
                controller: 'MainCtrl'
            })
            
            /* Manager */
            
            .when('/add_manager', {
                templateUrl: 'Views/admin/manager/add_manager.html',
                controller: 'AdminCtrl'
            })
            
             .when('/delete_manager', {
                templateUrl: 'Views/admin/manager/delete_manager.html',
                controller: 'AdminCtrl'
            })
            
             .when('/liste_managers', {
                templateUrl: 'Views/admin/manager/liste_managers.html',
                controller: 'AdminCtrl'
            })
             
            .when('/modify_manager', {
                templateUrl: 'Views/admin/manager/modify_manager.html',
                controller: 'AdminCtrl'
            })
           
            /* Collaborator */
             .when('/add_collaborator', {
                templateUrl: 'Views/admin/collaborator/add_collaborator.html',
                controller: 'AdminCtrl'
            })
            
             .when('/liste_collaborators', {
                templateUrl: 'Views/admin/collaborator/liste_collaborators.html',
                controller: 'AdminCtrl'
            })
            
            .when('/delete_collaborator', {
                templateUrl: 'Views/admin/collaborator/delete_collaborator.html',
                controller: 'AdminCtrl'
            })
            
            
            .when('/modify_collaborator', {
                templateUrl: 'Views/admin/collaborator/modify_collaborator.html',
                controller: 'AdminCtrl'
            })
             
            
            /* Project */
            .when('/add_project', {templateUrl: 'Views/admin/project/add_project.html',controller: 'AdminCtrl'})
            
            .when('/delete_project', {templateUrl: 'Views/admin/project/delete_project.html',controller: 'AdminCtrl'})
            
            .when('/display_project', {templateUrl: 'Views/admin/project/display_project.html',controller: 'AdminCtrl'})
            
            .when('/modify_project', {templateUrl: 'Views/admin/project/modify_project.html',controller: 'AdminCtrl'})
                
            .when('/test', {templateUrl: 'Views/admin/test.html',controller: 'AdminCtrl'})
            
  
  
             /* Product */
            .when('/product/add', {templateUrl: 'Views/product/add.html',controller: 'ProductCtrl'})
            .when('/product/:id', {templateUrl: 'Views/product/edit.html',controller: 'ProductCtrl'})
            .when('/product', {templateUrl: 'Views/product/list.html',controller: 'ProductCtrl'})
                       
         /*
            .otherwise({
                redirectTo: '/home'
            })
         */
}]);



        
app.controller('NavCtrl', ['$scope', '$location', function($scope, $location) {
    $scope.$location = $location;
}]);
 
 
  

app.controller('MainCtrl', MainCtrl);
app.controller('AdminCtrl', AdminCtrl);
app.controller('ProductCtrl',ProductCtrl);

