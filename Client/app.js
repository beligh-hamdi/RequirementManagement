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
            
            /* Admin  - Project */
            .when('/admin/project_add', { templateUrl: 'Views/admin/project_add.html',controller: 'AdminCtrl'})
            .when('/admin/project_edit/:id', { templateUrl: 'Views/admin/project_edit.html',controller: 'AdminCtrl'})
            .when('/admin/project_list', { templateUrl: 'Views/admin/project_list.html',controller: 'AdminCtrl'})
            

           
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
    
    /* Requirement */
            .when('/manager/requirement_add', {templateUrl: 'Views/manager/requirement_add.html',controller: 'ManagerCtrl'})
                       
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

