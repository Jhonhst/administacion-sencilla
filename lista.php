<?php 
include('cabecera.php');
// include('config/conexion.php');

?>
   
<div class="bordee container mt-5">
  <h4 class="text-center mt-1 mb-5">Lista de ventas y ganancias</h4>
  <div class="">
    <select name="tiempo" id="tiempo" class="form-control mr-sm-2 col-12 col-md-4 mb-3">
      <option  value="semana">Ultima Semana</option>
      <option  value="mes">Último mes</option>
      <option  value="todo">todo</option>
    </select>
   
    <form class="form-inline  mb-3">
      <label for="fecha" class="mr-2">Fecha única:</label>
      <input class="form-control mr-sm-2" id="fecha-unica" type="date" >
      <button class="btn btn-success my-2 my-sm-0" id="fecha-buscar" type="buttom">Buscar</button>
    </form>

    <form class="form-inline  mb-5">
      <label for="fecha" class="mr-2">Desde que fecha:</label>
      <input type="date" name="fecha-inicio" id="fecha-inicio" class="form-control mr-sm-2"  id="">
      <label for="fecha" class="mr-2">Hasta que fecha:</label>
      <input type="date" name="fecha-fin" id="fecha-fin" class="form-control mr-sm-2"  id="">
      <button id="fechas" class="btn btn-danger ">Buscar</button>
    </form>
  </div>
    <p class="mt-2 mb-2 bordee"><strong>Nota:</strong> Solo se verán registros que estén completos, es decir, que se encuentre registrado inversión, gasto y venta.</p>
    <table class="table table-striped table-bordered table-primary bordee">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Inversión</th>
          <th scope="col">Gastos</th>
          <th scope="col">Venta</th>
          <th scope="col">Ganancia</th>
          <th scope="col">Ganancia - gastos</th>
        </tr>
      </thead>
      <tbody id="lista-tiempo">
   
      </tbody>
    </table>

    <table class="table table-striped table-dark  table-bordered ">
      <thead>
        <tr>
          <th scope="col">Fecha</th>
          <th scope="col">Inversión</th>
          <th scope="col">Gastos</th>
          <th scope="col">Venta</th>
          <th scope="col">Ganancia</th>
          <th scope="col">Ganancia - gastos</th>
        </tr>
      </thead>
      <tbody id="lista">

      </tbody>
    </table>
    <p id="mayor-30-registros"></p>
    <br><br>
</div>

 







    <!-- footer -->
    
    <!-- footer -->
<?php 
    include('footer.php');
?>
