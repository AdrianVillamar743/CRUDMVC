<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function(){
        $('#eliminar').click(function(){
            Swal.fire({
                type:"question",
                title:"Desea eliminar el registro",
                text:"No se podrá recuperar",
                showCancelButton:true,
                cancelButtonColor:"red",
                confirmButtonColor:"green",
                confirmButtonText:"si, eliminar"
            }).then((result)=>{
                if(result.value){
                    $('#d1').append("<input type='hiden'  name='eliminar'>")
                    $('#f').submit()
                }
            })
        })
    })
</script>
    
    
</head>
<body>
    
<center>
    <header>
      <h1>CRUD EMPLEADO</h1>  
    </header>

<section>
    <div class="col-md-5">
        <form action="#" id="f">
            <div id='d1'></div>
         ID <input type="text" name="id_emp" id="id_emp" class="form-control" readonly="true">
         NOMBRE<input type="text" name="nombre" id="nombre" class="form-control" >  
         DEPARTAMENTO <select name="id_dep" id="id_dep" class="form-control">
           <option></option>
                <?php
                    foreach($dep as $d){
                        echo "<option value=".$d["id_dep"].">".$d["nombre"]."</option>";
                    }
                ?>
           
         </select>
         <br>
         <input type="reset" class="btn btn-primary" value="Nuevo" onclick="$('#g').attr('disabled',false)">
         <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-primary" disabled="true">
         <input type="submit" name="modificar" value="Modificar" class="btn btn-primary">
        <input type="button" id="eliminar"  value="Eliminar" class="btn btn-primary">
        </form>
    </div>
</section>

<br><br><br>
<div class="col-md-5" >
    <table  class="table table-bordered">
        <thead>
             <tr>
                 <th>ID</th>
                 <th>NOMBRE</th>
                 <th>DEPARTAMENTO</th>
                 <th>ACCION</th>
             </tr>
        </thead>

      <tbody>
         <?php
         foreach ($datos as $e) {
             $id_emp=$e->getId_emp();
             $nombre=str_replace(" ","&nbsp;",$e->getNombre());
             $id_dep=$e->getId_dep();
             $nombre_dep=str_replace("","&nbsp;",$e->getNombre_dep());
             echo"
             <tr>
                 <td>$id_emp</t>
             <td>$nombre</td>
             <td>$nombre_dep<td/>
             
             <button onclick=$('#id_emp').val('$id_emp');$('#nombre').val('$nombre');$('#id_dep').val('$id_dep') class='btn btn-success'>Editar</button>
             
             </tr>";
         }
         ?>
         </tbody>    
    </table>
</div>
</center>


</body>
</html>