<?php 
include('cabecera.php');
include('menu-sencillo.php');
?>


       <!--inicio ventas -->
    <div class="container bordee">
        <h4 class="mt-1 text-center">Venta del día <span class="el-dia"></span></h4>
        <div class="row mt-2">
                <!-- form de ventas -->
            <form id="venta" class="col-12">
                   
                    <label for="fecha" class=""> fecha:</label>
                    <div class="form-inline"> 
                        <input type="date" class="fecha-inv form-control mr-sm-2 mb-1" name="fecha-venta" id="" value="<?php echo date("Y-m-d");?>">
                        <button class="btn btn-danger ml-2 buscar-dia">Buscar día</button>
                    </div>
                       
                    <input type="hidden" id="id-venta" name="id_venta">

                    <label for="informacion" class="mb-0 mt-1">Efectivo :</label>
                    <input type="text" id="efectivo" name="efectivo-venta" class="form-control input-venta col-12 col-md-4 comas">
           
                    <label for="valor-inversion" class="mb-0 mt-1">Inversión:</label>
                    <input type="text" id="inversion-venta" name="inversion-venta" class="form-control input-venta col-12 col-md-4 comas" readonly>
             
                    <label for="valor-inversion" class="mb-0 mt-1">Gastos:</label>
                    <input type="text" id="gastos-venta" name="gastos-venta" class="form-control input-venta col-12 col-md-4 comas" readonly>
         
                    <label for="valor-inversion" class="mb-0 mt-1">Dinero que se llevo:</label>
                    <input type="text" name="dinerollevo-venta" id="dineroquellevo" class="form-control input-venta col-12 col-md-4 comas">
          
                    <label for="valor-inversion" class="mb-0 mt-1">Dinero extra (que no pertenece al negocio): </label>
                    <input type="text" name="dineroextra-venta" id="dineroextra" class="form-control input-venta col-12 col-md-4 comas">
        
                    <div class="mt-3">
                        <p><strong  id="venta-dia"></strong> </p>
                    </div>

                    <button id="enviar-venta" class="btn btn-danger mt-2 ml-5  guardar-venta">Guardar</button>

                    <button id="pre-modicar-venta" class="btn btn-success mt-2 ml-5  pre-modicar-venta botones">Modificar</button>

                    <button class="btn btn-success mt-2 botones ml-5" id="modificar-venta">Guardar modificación</button>

                    <button class="btn btn-danger mt-2 botones " id="no-modificar-venta">No modificar</button>  
            </form>
                <!--fin form de ventas -->  
        </div>
        <!--fin de ventas -->
        <br><br>
    </div> 

 

    <!-- footer -->
<?php 
    include('footer.php');
?>
