<?php include "includes/header.php" ?>

              <div class="card-header">               
                <div class="row">
                  <div class="col-md-9">
                    <h3 class="card-title">Lista de todos los registros usuarios</h3>
                  </div>
                  <div class="col-md-3">
                      <a href="crear_usuario.php" class="btn btn-primary btn-xl pull-right w-100"><i class="fa fa-plus"></i>  Ingresar nuevo usuario</a>                  
                 </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblUsuarios" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>                  
                    <th>Email</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>                   
                  </tr>
                  </thead>
                  <tbody>
                
                   <tr>
                          <td>1</td>
                          <td>admin@render2web.com</td>
                          <td>jose montoya</td>
                          <td>3333333</td>
                    </tr> 
                 
                  </tbody>                  
                </table>
              </div>
              <!-- /.card-body -->

<?php include "includes/footer.php" ?>

<!-- page script -->
<script>
  $(function () {   
    $('#tblUsuarios').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });  

    

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'HH:mm',        
        enabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        stepping: 30
    })
  
  });
</script>
            