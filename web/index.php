<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SILUMACIÓN</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</head>
<body ng-app="deber">
    <div class="container" ng-controller="AppCtrl">
        <h1>Algoritmo</h1>
        <h1>GITHUB Y HEROKU</h1>
        <h1>6 CIS</h1>
        <h1>Análisis y Diseño de Sistemas</h1>
        <hr>
        <form name="forma">
            <div class="form-group" ng-class="{'has-error': forma.inputA.$invalid, 'has-success': forma.inputA.$valid}">
                <label for="inputA">A (constante multiplicativa)</label>
                <input id="inputA" type="number" class="form-control" placeholder="A" name="a" ng-model="a" required>
            </div>
            <div class="form-group" ng-class="{'has-error': forma.inputB.$invalid, 'has-success': forma.inputB.$valid}">
                <label for="inputB">B (constante aditiva)</label>
                <input id="inputB" type="number" class="form-control" placeholder="B" name="b" ng-model="b" required>
            </div>
            <div class="form-group" ng-class="{'has-error': forma.inputM.$invalid, 'has-success': forma.inputM.$valid}">
                <label for="inputM">M (constante módulo)</label>
                <input id="inputM" type="number" class="form-control" placeholder="Módulo" name="m" ng-model="m" required>
            </div>
            <div class="form-group" ng-class="{'has-error': forma.inputSemilla.$invalid, 'has-success': forma.inputSemilla.$valid}">
                <label for="inputSemilla">Xo (semilla)</label>
                <input id="inputSemilla" type="number" class="form-control" placeholder="Semilla" name="x" ng-model="x" required>
            </div>            
            <button class="btn btn-success" ng-disabled="forma.$invalid" ng-click="calcular(x)">Calcular</button>
        </form>
        <hr>
        <div>
            <h1>SOLUCIÓN</h1>
            <label>{{mensaje}}</label>
            <p>
                {{lista | json}}
            </p>
        </div>
    </div>
</body>
</html>