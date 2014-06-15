
var serviceURL = "http://localhost/rm_application/Server/Services/";

var ProductCtrl = function($scope, $http, $location, $route, $routeParams) {
    
   
    $scope.products = $http.get(serviceURL +'ProductService/products.php')
            .success(function(data, status, headers, config) {
                $scope.products = data;
            });

    var list = function(){
        $http.get(serviceURL +'ProductService/products.php')
            .success(function(data, status, headers, config) {
                $scope.products = data;
         });    
    };

    $scope.add = function() {
        $http.post(serviceURL +'ProductService/create_product.php', $scope.newProduct)
        .success(function(data) {
            $scope.message = data;
            $scope.newProduct.name = '';
        }).error(function() {

        });
    };
    
    if($routeParams.id !== null) { 
        $scope.init = $http.get(serviceURL +'ProductService/show_product.php?id=' + $routeParams.id)
                .success(function(data, status, headers, config) {
                    $scope.editProduct = data;
        });
    };
    
    
    $scope.edit = function() {
             
        $http.post(serviceURL +'ProductService/update_product.php', $scope.editProduct)
        .success(function(data) {
            $scope.message = data;
        }).error(function() {

        });
    };
    
   
    $scope.delete = function(id){

        $http.get(serviceURL +'ProductService/delete_product.php?id=' + id)
                .success(function(data, status, headers, config) {
                    //$scope.editProduct = data;
                    alert('Deleted');
                    //$location.path('/product');
                    //$route.reload();
                    list();
                });
    };
       
};




