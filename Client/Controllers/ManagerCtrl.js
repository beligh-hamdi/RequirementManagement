
var serviceURL = "http://localhost/rm_application/Server/Services/";

var ManagerCtrl = function($scope, $http) {
    
     $scope.getUsers = function() {
        $http.post(serviceURL +'AdminService/list_users.php', {'GetUsers': 'JSON_CALLBACK'}
        ).success(function(data) {

            $scope.results = data;

        }).error(function() {

        });
    };

    $scope.AddUser = function() {

        $http.post('http://localhost/rmapp/lib/service/AdminService.php', {'username': $scope.username, 'password': $scope.password, 'AddUser': 'JSON_CALLBACK'}
        ).success(function(data) {
            $scope.results = data;

        }).error(function() {

        });
    };


    $scope.today = function() {
        $scope.dt = new Date();
    };
    $scope.today();

    $scope.clear = function() {
        $scope.dt = null;
    };

    // Disable weekend selection
    $scope.disabled = function(date, mode) {
        return (mode === 'day' && (date.getDay() === 0 || date.getDay() === 6));
    };

    $scope.toggleMin = function() {
        $scope.minDate = $scope.minDate ? null : new Date();
    };
    $scope.toggleMin();

    $scope.open = function($event) {
        $event.preventDefault();
        $event.stopPropagation();

        $scope.opened = true;
    };

    $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
    };

    $scope.initDate = new Date('2016-15-20');
    $scope.formats = ['dd/MM/yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
    $scope.format = $scope.formats[0];



    
     
    $scope.requirement_add = function() {
       
        $http.post(serviceURL +'ManagerService/requirement_create.php', $scope.requirement)
        .success(function(data) {
            $scope.message = data;
            alert(data);
        }).error(function() {

        });
    };
        
    $scope.master = {};

    $scope.update = function(user) {
      $scope.master = angular.copy(user);
    };

    $scope.reset = function() {
      $scope.user = angular.copy($scope.master);
    };
    
    $scope.isUnchanged = function(user) {
        return angular.equals(user, $scope.master);
    };

    $scope.reset();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     
};




