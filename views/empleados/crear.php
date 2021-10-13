<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
              <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <!-- colocar en for, name, id la misma variable -->
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del Empleado">
              <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">
        </form>
    </div>

</div>