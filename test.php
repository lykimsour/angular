<!DOCTYPE html>
<html ng-app="myapp">
<body>

<div data-ng-init="person=[
					{names:'zadds',age:'120'},
					{names:'zwrth',age:'34'},
					{names:'zhjiok',age:'13'},
					{names:'zfgfg',age:'56'},
					{names:'zbnmkl',age:'33'},
					{names:'zadghh',age:'78'}]">


</div>

<div data-ng-controller = "TestController">
<input type="text" data-ng-model="name" /> {{name}}
<li data-ng-repeat="p in persons | filter:name | orderBy:'age'">{{p.names | uppercase }} - {{p.age}}</li>
</div>
<li data-ng-repeat="pp in person | filter:name">{{pp.names}} - {{pp.age}}</li>

<div data-ng-view = ""></div>
<a href="#/view">view</a>
</body>

<script type="text/javascript" src="angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular-route.min.js"></script>

<script>
var myApp = angular.module('myapp', ['ngRoute']);
//var controllers = {};
//myApp.controller(controllers);
/*controllers.TestController = function ($scope) {
    	$scope.persons = [
					{names:'z',age:'13'},
					{names:'zwrth',age:'34'},
					{names:'zhjiok',age:'13'},
					{names:'zfgfg',age:'56'},
					{names:'zbnmkl',age:'33'},
					{names:'zadghh',age:'78'}
				];

     };*/
 myApp.config(['$routeProvider',function ($routeProvider){
 	$routeProvider
 	.when('/',{controller: 'TestController',templateUrl: 'index.php'})
 	.when('/view',{controller: 'TestController', templateUrl: 'view.php'})
 	.otherwise({redirectTo:'/'});
 }]);

/*function TestController($scope){
	$scope.persons = [
					{names:'zadds',age:'120'},
					{names:'zwrth',age:'34'},
					{names:'zhjiok',age:'13'},
					{names:'zfgfg',age:'56'},
					{names:'zbnmkl',age:'33'},
					{names:'zadghh',age:'78'}
				];
}*/

    //Defining a Angular Controller 
    //myApp.controller('TestController',TestController);
    myApp.controller('TestController', function ($scope) {
    	$scope.persons = [
					{names:'z',age:'13'},
					{names:'zwrth',age:'34'},
					{names:'zhjiok',age:'13'},
					{names:'zfgfg',age:'56'},
					{names:'zbnmkl',age:'33'},
					{names:'zadghh',age:'78'}
				];

     });
</script>
</html>