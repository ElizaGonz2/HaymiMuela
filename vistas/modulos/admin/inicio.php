
<?php

$item = null;

$valor = null;

$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

$citas = ControladorCitas::ctrMostrarCitas($item, $valor);

$cantidadUsuarios = count($usuarios);

$cantidadCitas = count($citas);

?>


<!-- Contenido Principal -->
<div class="overflow-hidden space">

    <div class="container">
        <!-- Bloques de Estadísticas -->
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-4">
                    <div class="rounded-10 p-3 text-center" style="background: #1F5FFF;">
                        <div>
                            <h4 class="text-white fw-bold">Total: <?php echo $cantidadUsuarios; ?></h4>
                        </div>
                        <div class="text-white">Usuarios</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="rounded-10 p-3 text-center" style="background: #04CE78;">
                        <div>
                            <h4 class="text-white fw-bold">Total: <?php echo $cantidadCitas;?></h4>
                        </div>
                        <div class="text-white">Citas</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="bg-danger rounded-10 p-3 text-center">
                        <div>
                            <h4 class="text-white fw-bold">Total: 10</h4>
                        </div>
                        <div class="text-white">Servicios</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="rounded-10 p-3 text-center" style="background: #F9A234;">
                        <div>
                            <h4 class="text-white fw-bold">Total: 20</h4>
                        </div>
                        <div class="text-white">Mensajes</div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Gráfico de barras principal -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Estadísticas de la página</h5>
                <canvas id="mainChart" width="400" height="200"></canvas>
            </div>
        </div>

    </div>
    
</div>

<!-- Script para inicializar Chart.js y crear el gráfico de barras -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

    // Datos de ejemplo para el gráfico de barras

    var mainData = {
        labels: ['Clientes', 'Citas', 'Visitas', 'Productos'],
        datasets: [{
            label: 'Cantidad',
            data: [2000, 5000, 4000, 23434], 
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',   
                'rgba(54, 162, 235, 0.5)',   
                'rgba(255, 206, 86, 0.5)',  
                'rgba(75, 192, 192, 0.5)',   
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',   
                'rgba(54, 162, 235, 1)',    
                'rgba(255, 206, 86, 1)',    
                'rgba(75, 192, 192, 1)', 
            ],
            borderWidth: 1
        }]
    };

    // Configuración para el gráfico de barras
    var barChartOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Inicializar el gráfico de barras
    var mainCtx = document.getElementById('mainChart').getContext('2d');
    var mainChart = new Chart(mainCtx, {
        type: 'bar',
        data: mainData,
        options: barChartOptions
    });
</script>
