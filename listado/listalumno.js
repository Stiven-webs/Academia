$(document).ready(function() {
    obtenerAlumnos();

    function obtenerAlumnos() {
        $.ajax({
            url: '../academia/alumno/listar-alumno.php', 
            type: 'GET',
            success: function(response) {
                let alumnos = JSON.parse(response);
                let plantilla = '';
                alumnos.forEach(alumno => {
                    plantilla += `
                    <tr>
                        <td>${alumno.idalumno}</td>
                        <td>${alumno.nombre}</td>
                        <td>${alumno.apellido}</td>
                        <td>${alumno.numero}</td>
                        <td>${alumno.fechaNacimiento}</td>
                        <td>${alumno.sexo}</td>
                    </tr>`;
                });
                $('#alumnos').html(plantilla);
            }
        });
    }

    $('#search').keyup(function(e) {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: '../academia/alumno/buscar-alumno.php', 
                type: 'POST',
                data: { search },
                success: function(response) {
                    let alumnos = JSON.parse(response);
                    let plantilla = '';
                    alumnos.forEach(alumno => {
                        plantilla += `
                        <tr>
                            <td>${alumno.idalumno}</td>
                            <td>${alumno.nombre}</td>
                            <td>${alumno.apellido}</td>
                            <td>${alumno.numero}</td>
                            <td>${alumno.fechaNacimiento}</td>
                            <td>${alumno.sexo}</td>
                        </tr>`;
                    });
                    $('#alumnos').html(plantilla);
                }
            });
        } else {
            obtenerAlumnos();
        }
    });
});
