<?php 
include('cabecera.php');
include('menu-sencillo.php');
?>

       <!--inicio gastos -->
    <div class="container bordee">
        <h4 class="mt-1 text-center">Gastos del día <span class="el-dia"></span></h4>
        <div class="row mt-2">
                <!-- form de gastos -->
            <form id="gastos" class="col-12">

                <label for="fecha" class=""> fecha:</label>
                <div class="form-inline"> 
                    <input type="date" name="fecha-gastos" class="fecha-inv form-control mr-sm-2  mb-1" id="" value="<?php echo date("Y-m-d");?>">
                    <button class="btn btn-danger ml-2 buscar-dia">Buscar día</button>
                </div>

                <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                <input type="text" name="nombre-gastos" class="form-control col-12 col-md-4"  id="nombre-gastos">

                <label for="valor-gastos" class="mb-0 mt-1">Valor:</label>
                <input type="text" name="valor-gastos" class="form-control col-12 col-md-4 comas" id="valor-gastos">

                <input type="hidden" name="id" class="form-control" id="id-gastos">

                <button id="enviar-gastos" class="btn btn-danger mt-2 ml-5  guardar">Guardar</button>

                <button class="btn btn-success mt-2 botones modificar" id="modificar-gastos">Guardar modificación</button>

                <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button> 
                <br><br> 
            </form>
                <!--fin form de gastos -->
            <!-- mensaje que se vera visible al modificar -->
            <p class="mensaje-modificacion mt-3 bordee"><strong>Nota:</strong> Recuerde que si ya registro la venta del día, al hacer una modificación o eliminación se debe ir a venta y actualizarla.</p>

                <!-- lista de gastos del día -->
            <table class="mt-2 table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col-6">Información</th>
                        <th scope="col-5">Cuanto</th>
                        <th scope="col-1">C</th>
                    </tr>
                </thead>
                <tbody id="gastos-dia">

                </tbody>
                <tbody>
                    <tr>
                        <td scope="row" class="text-right">Total gastos del día</td>
                        <td><strong>$ </strong><strong id="total_valor_gastos"> </strong></td>                      
                    </tr>
                </tbody>
            </table>
        </div>
     </div> 
     <!--fin de gastos -->
    <!-- footer -->
<?php 
    include('footer.php');
?>

