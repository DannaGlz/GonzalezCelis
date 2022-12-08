<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumnos</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="node_modules/bootstrap/js/dist/"></script>
    <script defer src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script defer src="js/index.js"></script>
</head>

<body>
    <?php include('conexion.php'); ?>
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Registro de Alumnos</span>
            </div>
        </nav>
    </header>

    <main class="container p-4">
        <div class="row">
            <div class="">
                <div class="card card-body">
                    <form id="formulario" method="POST" action="./save.php">

                        <div class="input-group w-100 mb-3 float-end ">
                            <input type="number" class="form-control form-control-sm" name="buscarNumeroControl" id="buscarNumeroControl" placeholder="Buscar por Numero de Control" aria-label="Numero de Control" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary mx-2" id="btnBuscar" type="button">
                                    <i class="bi bi-search"></i>
                                    Buscar
                                </button>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-3">
                                <label for="parNumeroControl" class="form-label">No. Control</label>
                                <input type="number" class="form-control" id="parNumeroControl" name="numero_control">
                            </div>

                            <div class="col-sm-12 col-md-8 col-lg-9">
                                <label for="parNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="parNombre" name="nombre">
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="parApellidoPaterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="parApellidoPaterno" name="apellidoPaterno">
                            </div>

                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label for="parApellidoMaterno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="parApellidoMaterno" name="apellidoMaterno">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-2">
                                <label for="parSemestre" class="form-label">Semestre</label>
                                <input type="number" class="form-control" id="parSemestre" name="semestre">
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
                                    <input type="text" class="form-control" name="carrera" id="parCarrera" placeholder="">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1" data-bs-toggle="modal" data-bs-target="#modalCarreras">
                                        <i class="bi bi-plus-lg"></i>&#8203;
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label class="btn btn-light" for="parVespertino"></label>

                                <div class="form-check form-check-reverse">
                                    <input class="form-check-input" type="checkbox" value="" id="parTieneBeca" name="tieneBeca">
                                    <label class="form-check-label" for="parTieneBeca">
                                        ¿El alumno cuenta con beca?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-12 mx-auto mt-3">
                            <button type="submit" id="agregarAlumno" name="agregarAlumno" class="btn btn-success btn-lg">
                                Agregar Alumno
                                <i class="bi bi-person mx-2"></i>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No. Control</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido P</th>
                            <th scope="col">Apellido M</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Turno</th>
                            <th scope="col">Carrera</th>
                            <th scope="col">Beca</th>
                            <th scope="col">Controles</th>
                        </tr>
                    </thead>
                    <tbody id="tabla">
                        <?php
                        $query = "SELECT * FROM alumno";
                        $resultados = mysqli_query($con, $query);
                        while ($alumno = mysqli_fetch_array($resultados))  { ?>
                            <tr>
                                <td><?php echo $alumno['numero_control'] ?></td>
                                <td><?php echo $alumno['nombre'] ?></td>
                                <td><?php echo $alumno['apellido_paterno'] ?></td>
                                <td><?php echo $alumno['apellido_materno'] ?></td>
                                <td><?php echo $alumno['semestre'] ?></td>
                                <td><?php echo $alumno['turno'] ?></td>
                                <td><?php echo $alumno['carrera'] ?></td>
                                <td><?php echo $alumno['tiene_beca'] ?></td>
                                <td>
                                    <button class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $alumno['numero_control']; ?>">
                                        <i class='bi bi-pen'></i>
                                    </button>
                                    <a href="delete.php?numero_control=<?php echo $alumno['numero_control'] ?>" class='btn btn-danger'><i class='bi bi-trash2'></i></a>
                                </td>
                            </tr>
                            <?php include('modalEditar.php') ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="modal fade" id="modalCarreras" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="">Carreras</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="sistemas" autocomplete="off" value="Sistemas Computacionales">
                        <label class="btn btn-outline-dark m-1" for="sistemas">Sistemas Computacionales</label>

                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="arquitectura" autocomplete="off" value="Arquitectura">
                        <label class="btn btn-outline-dark m-1" for="arquitectura">Arquitectura</label>

                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="industrial" autocomplete="off" value="Industrial">
                        <label class="btn btn-outline-dark m-1" for="industrial">Industrial</label>

                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="civil" autocomplete="off" value="Civil">
                        <label class="btn btn-outline-dark m-1" for="civil">Civil</label>

                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="contabilidad" autocomplete="off" value="Contabilidad">
                        <label class="btn btn-outline-dark m-1" for="contabilidad">Contabilidad</label>

                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="gestion" autocomplete="off" value="Gestion Empresarial">
                        <label class="btn btn-outline-dark m-1" for="gestion">Gestion Empresarial</label>

                        <input type="radio" class="btn-check carrera" name="opcionCarrera" id="administracion" autocomplete="off" value="Administracion de Empresas">
                        <label class="btn btn-outline-dark m-1" for="administracion">Administracion de Empresas</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarCarrera" data-bs-dismiss="modal">
                            Seleccionar Estilo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>