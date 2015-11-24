var app = angular.module('deber', []);

app.controller('AppCtrl', function ($scope) {
    $scope.lista = new Array();
    $scope.calcular = function(semilla){
        try{
            $scope.mensaje = "No se encontró un ciclo congruente. CICLO COMPLETO";
            if($scope.lista.length<$scope.m){
                var resultado = ($scope.a*semilla + $scope.b) % $scope.m;
                if(comprobar(resultado)){
                    $scope.mensaje="Ciclo congruente";
                    $scope.lista.push(resultado);//para mostrar que existe ciclo congruente se guarda el último dígito calculado.
                }else{
                    $scope.lista.push(resultado);
                    $scope.calcular(resultado);
                }
            }
        }catch(e){
            $scope.lista = [];
            $scope.mensaje = "Módulo muy grande";
            alert("MÓDULO MUY GRANDE");
            //moduloGrande(semilla);
        }
    }

    function comprobar(resultado) {
        for(var i=0; i<$scope.lista.length; i++){
            if($scope.lista[i]==resultado){
                return true;
            }
        }
    }

    function moduloGrande(semilla){
        $scope.lista = [];
        for(var i = 0; i<$scope.m; i++){
            var resultado = ($scope.a*semilla + $scope.b) % $scope.m;
            if(comprobar(resultado)){
                $scope.mensaje="Ciclo congruente";
                $scope.lista.push(resultado);//para mostrar que existe ciclo congruente se guarda el último dígito calculado.
            }else{
                $scope.lista.push(resultado);
                $scope.calcular(resultado);
            }
        }
    }
});
