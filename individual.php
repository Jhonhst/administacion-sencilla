<?php 
include('cabecera.php');
if(isset($_GET['fechaindividual'])){
    $fecha = $_GET['fechaindividual'];//esta es la fecha pero con formato normal d-m-Y
    // echo $fecha;
    $date = new DateTime($fecha);
    $fecha_format = $date->format('Y-m-d');//le cambio el formato a la fecha para que se pueda acceder a la base de datos ya que solo acepta el formato Y-m-d 
 

}
?>


    <p class="container bordee mt-3"><strong>Nota:</strong> Recuerde que si ya registro la venta del día, al hacer una modificación o eliminación se debe ir a venta y actualizarla.</p>

       <!--inicio inversión -->
    <div class="container bordee">

        <h4 class="mt-1 text-center">Inversión del día <?php  echo $fecha;?></h4>
        <div class="row mt-2">
                <!-- form de inversión -->
            <form id="inversion" class="col-12">
                <label for="fecha" class=""> fecha:</label>
                <input type="date"  name="fecha-inversion" class="fecha-inv form-control mb-1" id="" value="<?php echo $fecha_format;?>" readonly>

                <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                <input type="text" name="nombre-inversion" class="form-control" id="nombre-inversion">

                <label for="valor-inversion" class="mb-0 mt-1">Valor:</label>
                <input type="text" name="valor-inversion" class="form-control comas" id="valor-inversion">

                <input type="hidden" name="id" class="form-control" id="id-inversion">

                <button id="enviar-inversion" class="btn btn-danger mt-2 guardar">Guardar</button>  
                <button class="btn btn-success mt-2 botones" id="modificar-inversion">Guardar modificación</button> 
                <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button>              
            </form>
                <!--fin form de inversión -->
    
                <!-- lista de inversión del día -->
            <table class="mt-4 table table-striped table-bordered ">
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
    </div> 

       <!--fin de inversión -->

       <!--inicio gastos -->
       <div class="container mt-5 bordee">
        <h4 class="mt-1 text-center">Gastos del día <?php echo $fecha;?></h4>
        <div class="row mt-2">
                <!-- form de gastos -->
            <form id="gastos" class="col-12">

                <label for="fecha" class=""> fecha:</label>
                <input type="date" name="fecha-gastos" class="fecha-inv form-control  mb-1" id="" value="<?php echo $fecha_format;?>" readonly>

                <label for="nombre" class="mb-0 mt-1">Nombre:</label>
                <input type="text" name="nombre-gastos" class="form-control" id="nombre-gastos">

                <label for="valor-gastos" class="mb-0 mt-1">Valor:</label>
                <input type="text" name="valor-gastos" class="form-control comas" id="valor-gastos">

                <input type="hidden" name="id" class="form-control" id="id-gastos">

                <button id="enviar-gastos" class="btn btn-danger mt-2 guardar">Guardar</button>

                <button class="btn btn-success mt-2 botones modificar" id="modificar-gastos">Guardar modificación</button>

                <button class="btn btn-danger mt-2 botones no-modificar">No modificar</button>  
            </form>
                <!--fin form de gastos -->
    
                <!-- lista de gastos del día -->
            <table class="mt-4 table table-striped table-bordered ">
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
                <!-- lista de gastos del día -->
        </div>
    </div> 
       <!--fin de gastos -->

    
       <!--inicio ventas -->
       <div class="container mt-5 bordee">
        <h4 class="mt-1 text-center">Venta del día <?php  echo $fecha;?></h4>
        <div class="row mt-2">
                <!-- form de ventas -->
            <form id="venta" class="col-12 ">
                   
                    <label for="fecha" class=""> fecha:</label>
                    <input type="date" class="fecha-inv form-control mb-1" name="fecha-venta" id="" value="<?php echo $fecha_format;?>" readonly>
                       
                    <input type="hidden" id="id-venta" name="id_venta">

                    <label for="informacion" class="mb-0 mt-1">Efectivo :</label>
                    <input type="text" id="efectivo" name="efectivo-venta" class="form-control input-venta comas" id="" >
           
                    <label for="valor-inversion" class="mb-0 mt-1">Inversión:</label>
                    <input type="text" id="inversion-venta" name="inversion-venta" class="form-control input-venta comas" readonly>
             
                    <label for="valor-inversion" class="mb-0 mt-1">Gastos:</label>
                    <input type="text" id="gastos-venta" name="gastos-venta" class="form-control input-venta comas" readonly>
         
                    <label for="valor-inversion" class="mb-0 mt-1">Dinero que se llevo:</label>
                    <input type="text" name="dinerollevo-venta" id="dineroquellevo" class="form-control input-venta comas">
          
                    <label for="valor-inversion" class="mb-0 mt-1">Dinero extra que no pertenece al negocio:</label>
                    <input type="text" name="dineroextra-venta" id="dineroextra" class="form-control input-venta comas" placeholder="opcional">
        
                    <div class="mt-3">
                        <p><strong  id="venta-dia"></strong> </p>
                    </div>

                    <button id="enviar-venta" class="btn btn-danger mt-2 guardar-venta">Guardar</button>

                    <button id="pre-modicar-venta" class="btn btn-success mt-2 pre-modicar-venta botones">Modificar</button>

                    <button class="btn btn-success mt-2 botones" id="modificar-venta">Guardar modificación</button>

                    <button class="btn btn-danger mt-2 botones " id="no-modificar-venta">No modificar</button> 
                    <br><br> 
            </form>
                <!--fin form de ventas -->  
        </div> 
    </div> 
       <!--fin de ventas -->


    <!-- footer -->
<?php 
    include('footer.php');
?>

