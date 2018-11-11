<?php 
include('cabecera.php');
include('menu-sencillo.php');

?>
       <!--inicio inversión -->
    <div class="container bordee">
        <h4 class="mt-1 text-center">Inversión del día <span class="el-dia"></span></h4>
        <div class="row mt-2">
                <!-- form de inversión -->
            <form id="inversion" class="col-12">
                <label for="fecha" class=""> fecha:</label>
                <div class="form-inline">     
                    <input type="date"  name="fecha-inversion" class="fecha-inv form-control mr-sm-2 mb-1 "  id="" value="<?php echo date("Y-m-d");?>">
                    <button class="btn btn-danger ml-2 buscar-dia">Buscar día</button>
                </div>

                <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                <input type="text" name="nombre-inversion" class="form-control col-12 col-md-4" id="nombre-inversion">

                <label for="valor-inversion" class="mb-0 mt-1">Valor:</label>
                <input type="text" name="valor-inversion" class="form-control col-12 col-md-4 comas" id="valor-inversion">

                <input type="hidden" name="id" class="form-control" id="id-inversion">

                <button id="enviar-inversion" class="btn btn-danger mt-2 ml-5 guardar">Guardar</button>  
                <button class="btn btn-success mt-2 botones" id="modificar-inversion">Guardar modificación</button> 
                <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button> 
                <br><br>            
            </form>
                <!--fin form de inversión -->
    
                <!-- mensaje que se vera visible al modificar -->
            <p class="mensaje-modificacion mt-3 bordee"><strong>Nota:</strong> Recuerde que si ya registro la venta del día, al hacer una modificación o una eliminación se debe ir a venta y actualizarla.</p>

                <!-- lista de inversión del día -->
            <br><br><br><br>
            <table class="mt-2 table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th scope="col-6">Información</th>
                        <th scope="col-5">Cuanto</th>
                        <th scope="col-1">C</th>
                    </tr>
                </thead>
                <tbody id="inversion-dia">

                </tbody>
                <tbody>
                    <tr>
                        <td scope="row" class="text-right">Total inversión del día</td>
                        <td><strong>$ </strong><strong id="total_valor_inversion"> </strong></td>                      
                    </tr>
                </tbody>
            </table>
                <!-- lista de inversión del día -->
        </div>
        <!--fin de inversión -->
    </div> 

 

    <!-- footer -->
<?php 
    include('footer.php');
?>
