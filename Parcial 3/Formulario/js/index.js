document.querySelector("#btnBuscar").addEventListener("click", async () => {
    let datosFormulario = new FormData(document.getElementById("formulario"));
    let respuesta = await fetch("php/buscarNumeroControl.php", {
        method: "POST", body: datosFormulario,
    });

    let dato = await respuesta.json();

    document.getElementById("parNumeroControl").value = dato.numero_control;
    document.getElementById("parNombre").value = dato.nombre;
    document.getElementById("parApellidoPaterno").value = dato.apellido_paterno;
    document.getElementById("parApellidoMaterno").value = dato.apellido_materno;
    document.getElementById("parSemestre").value = dato.semestre;
    document.getElementById("parCarrera").value = dato.carrera;
    dato.turno === "Matutino" ? (document.getElementById("parMatutino").checked = true) : document.getElementById("parVespertino").checked;

    dato.tiene_beca === 1 ? document.getElementById("parTieneBeca").checked : (document.getElementById("parTieneBeca").checked = false);
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

