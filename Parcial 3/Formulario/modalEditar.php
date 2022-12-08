<div class="modal fade" id="modalEditar<?php echo $alumno['numero_control']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Alumno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formulario" method="POST" action="update.php">

                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <label for="parNumeroControl" class="form-label">No. Control</label>
                            <input type="number" class="form-control" id="parNumeroControl" name="numero_control" value="<?php echo $alumno['numero_control']?>">
                        </div>

                        <div class="col-sm-12 col-md-8 col-lg-9">
                            <label for="parNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="parNombre" name="nombre" value="<?php echo $alumno['nombre']?>">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="parApellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="parApellidoPaterno" name="apellidoPaterno" value="<?php echo $alumno['apellido_paterno']?>">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="parApellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="parApellidoMaterno" name="apellidoMaterno" value="<?php echo $alumno['apellido_materno']?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-2">
                            <label for="parSemestre" class="form-label">Semestre</label>
                            <input type="number" class="form-control" id="parSemestre" name="semestre" value="<?php echo $alumno['semestre']?>">
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <label for="parSemestre" class="form-label">Turno</label>
                            <div>
                                <input type="radio" class="btn-check" name="turno" id="parMatutino" autocomplete="off" checked>
                                <label class="btn btn-light" for="parMatutino">Mautino</label>

                                <input type="radio" class="btn-check" name="turno" id="parVespertino" autocomplete="off">
                                <label class="btn btn-light" for="parVespertino">Vespertino</label>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-7">
                            <label for="carrera" class="form-label">Carrera</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="carrera" id="parCarrera" placeholder="" value="<?php echo $alumno['carrera']?>">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#modalCarreras">
                                    <i class="bi bi-plus-lg"></i>&#8203;
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <label class="btn btn-light" for="parTieneBeca"></label>

                            <div class="form-check form-check-reverse">
                                <input class="form-check-input" type="checkbox" value="" id="parTieneBeca" name="tieneBeca">
                                <label class="form-check-label" for="parTieneBeca">
                                    ¿El alumno cuenta con beca?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="actualizar">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>