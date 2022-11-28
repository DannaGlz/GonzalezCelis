window.addEventListener("load", async function () {
  const respuesta = await fetch("consultarDatos.php");
  const datos = await respuesta.json();

  const tabla = document.getElementById("tabla");
  
  datos.forEach( dato => {
    
    tabla.innerHTML += `<tr>
      <th>${dato.numero_control}</th>
      <td>${dato.nombre}</td>
      <td>${dato.apellido_paterno}</td>
      <td>${dato.apellido_materno}</td>
      <td>${dato.semestre}</td>
      <td>${dato.turno}</td>
      <td>${dato.carrera}</td>
      <td>${dato.tiene_beca == 0 ? 'No' : 'Si'}</td>
    </tr>`;
  } )
});

document.querySelector("#btnBuscar").addEventListener("click", async () => {
  let datosFormulario = new FormData(document.getElementById("formulario"));
  let respuesta = await fetch("php/buscarNumeroControl.php", {
    method: "POST",
    body: datosFormulario,
  });

  let dato = await respuesta.json();

  document.getElementById("parNumeroControl").value = dato.numero_control;
  document.getElementById("parNombre").value = dato.nombre;
  document.getElementById("parApellidoPaterno").value = dato.apellido_paterno;
  document.getElementById("parApellidoMaterno").value = dato.apellido_materno;
  document.getElementById("parSemestre").value = dato.semestre;
  document.getElementById("parCarrera").value = dato.carrera;
  dato.turno == "Matutino"
    ? (document.getElementById("parMatutino").checked = true)
    : document.getElementById("parVespertino").checked;

  dato.tiene_beca == 1
    ? document.getElementById("parTieneBeca").checked
    : (document.getElementById("parTieneBeca").checked = false);
});

document.querySelector("#guardarCarrera").addEventListener("click", () => {
  const inputEstilo = document.querySelector("#parCarrera");

  const radioButtons = document.querySelectorAll(".carrera");
  radioButtons.forEach((element) => {
    if (element.checked) inputEstilo.value = element.value;
  });

  if (!document.querySelector('input[name="opcionCarrera"]:checked')) {
    alert("Seleccione una carrera");
    hasError = true;
  }
});

