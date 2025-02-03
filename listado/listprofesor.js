$(document).ready(function() {
    obtenerProfesores();

    function obtenerProfesores() {
        $.ajax({
            url: '../academia/profesor/listar-profesor.php', 
            type: 'GET',
            success: function(response) {
                let profesores = JSON.parse(response);
                let plantilla = '';
                profesores.forEach(profesor => {
                    plantilla += `
                    <tr>
                        <td>${profesor.idprofesor}</td>
                        <td>${profesor.nombre}</td>
                        <td>${profesor.apellido}</td>
                        <td>${profesor.telefono}</td>
                        <td>${profesor.fechaNacimiento}</td>
                        <td>${profesor.sexo}</td>
                    </tr>`;
                });
                $('#profesores').html(plantilla);
            }
        });
    }

    $('#search').keyup(function(e) {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: '../academia/profesor/buscar-profesor.php', 
                type: 'POST',
                data: { search },
                success: function(response) {
                    let profesores = JSON.parse(response);
                    let plantilla = '';
                    profesores.forEach(profesor => {
                        plantilla += `
                        <tr>
                            <td>${profesor.idprofesor}</td>
                            <td>${profesor.nombre}</td>
                            <td>${profesor.apellido}</td>
                            <td>${profesor.telefono}</td>
                            <td>${profesor.fechaNacimiento}</td>
                            <td>${profesor.sexo}</td>
                        </tr>`;
                    });
                    $('#profesores').html(plantilla);
                }
            });
        } else {
            obtenerProfesores();
        }
    });
});
