<?php 
include('cabecera.php');

?>
<!-- esta página de momento no va estar, me falta pensar como sera el proceso pra calcular el dinero -->
    <h4 class="text-center mt-1 mb-1">Como vamos con el dinero</h4>

    <select name="" id="" class="form-control mt-2 mb-5">
      <option value="">Ultimo Día</option>
      <option value="">Ultima Semana</option>
      <option value="">Ultimo mes</option>
      <option value="">todo</option>
    </select>
    
    <label for="fecha" class="">De que fecha:</label>
    <input type="date" class="form-control mb-1 col-6 d-inline d-sm-block" name="fecha" id="">
    <label for="fecha" class="">Hasta que fecha:</label>
    <input type="date" class="form-control mb-5 col-6 d-inline d-sm-block" name="fecha" id="">
      <!-- inicio tabla con los dotas -->
    <table class="table table-striped table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">Dinero antes</th>
          <th scope="col">Ganancias optenidas</th>
          <th scope="col">Dinero actual</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>$ 50000</td>
          <td>$ 50000</td>
          <td>
            $ 50000
            <button class="btn btn-success mt-2">Modificar</button>
          </td>
        </tr>
      </tbody>
    </table>
   
    <!-- footer -->
<?php 
    include('footer.php');
?>
