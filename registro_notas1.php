<?php include 'log/header.php'?>

<script src="js/js.js"></script> <!--se coloco el script para la funcion--->
<!------botones------------------------------------------->

<!---se realizo los botones los cuales vienen de la pagina de nota ----->
<div
    class="container"
    style="margin-top: 50px; margin-left:550px;"
>

  <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
  <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z"/>
</svg> IFCD0110 </button>
  <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
  <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z"/>
</svg> IFCTO31P0 </button>
  <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
  <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z"/>
</svg> IFCT029PO</button>

</div>

<!-------fin---------------------------------------------------------------------------->

<br>

<!------------------------------tabla 1--------------------------------------------------->

<!----se realizo la primera tabla se coloco el demo para indificar la funcion a ejecutar----->
<div
    class="container" style="border: 2px solid black;"
>
 
<br>


<table
 class="table-responsive  table table-secondary"

>

<thead>
  <tr>
   <th scope="col">MODULOS</th>
   <th scope="col">HORA MODULOS</th>
   <th scope="col">NOTA FINAL</th>
  </tr>
</thead>
<tbody>
<tr class="table table-primary">
<td scope="row">MF0950_2: Construcción de páginas web </td>
<td>210 horas</td>
<td id="demo1"></td>
</tr>
<tr class="table table-primary">
<td scope="row">MF0951_2: Integración de componentes software en páginas
web </td>
<td>180 horas</td>
<td id="demo2"></td>
</tr>
<tr class="table table-primary">
<td scope="row">MF0952_2: Publicación de páginas web</td>
<td>90 horas</td>
<td id="demo3"></td>
</tr>



</tbody>
</table>

<h5>Nota Promedio: <h3 id="demo"></h3></h5>

<button type="button" class="btn btn-primary" style="float: right; margin-top:-40px" onclick="nota()">Calcular Nota</button>


</div>


<!---------------------------------------------------------fin tabla 1--------------------------------------------------------------------->






<!---registrar estudiantes: para realizar los input de registro y consulta--------------------------------------------------->
<form action="">

<div
  class="container"
  style="border: 2px solid black; margin-top:50px"
>

<div class="mb-3">
  <label for="" class="form-label"><b>Nombre del Estudiante</b></label>
  <input
    type="text"
    class="form-control"
    name=""
    id=""
    aria-describedby="helpId"
    placeholder=""
    style="width: 500px; background-color:gray"
  />

</div>

<div class="mb-3">
  <label for="" class="form-label" style="width: 200px;float:right; margin-top:-35px; margin-right:430px"><b>Identificacion</b></label>
  <input
    type="text"
    class="form-control"
    name=""
    id=""
    aria-describedby="helpId"
    placeholder=""
    style="width: 300px;background-color:gray;margin-left:660px; margin-top:-50px "
  />

</div>

<div class="mb-3">
  <label for="" class="form-label" style=" float:right;margin-top:-50px;margin-right:100px">Calificacion</label>
  <select name="" id="" style="float: right; margin-top: -50px">
    <option value="1">Apto</option>
    <option value="0">No apto</option>


  </select>


</div>



<button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
  <path d="M12 2h-2v3h2z"/>
  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
</svg>REGISTRAR</button>

<button type="reset" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg> BORRAR</button>


</form>



<!----------fin resistrar--------------------------------->


<!------modal de consultar------------------------------------------------------------------------------->

<!-- Button trigger modal -->
<div style="float: right;">
<form action="">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z"/>
</svg> Consultar Estudiantes
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">IDENTIFICACION DEL ESTUDIANTE A CONSULTAR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <!---se agrego unos input que no lo traes elmodal------->
      <div class="mb-3">
        <label for="" class="form-label">N# IDENTIFICADOR: </label>
        <input
          type="text"
          class="form-control"
          name=""
          id=""
          aria-describedby="helpId"
          placeholder=""
        />
        <small id="helpId" class="form-text text-muted">Colocar solo numerico</small>
      </div>
      





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">CONSULTAR</button><!----se cambio type botton a submit que sirve para enviar--->
        
      </div>
    </div>
  </div>
</div>
</div>



<br><br>
</div>

</form>









<?php include 'log/footer.php'?>

