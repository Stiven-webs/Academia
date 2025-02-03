$(document).ready(function() {
    $('#tablaProfesores').hide();

    $('#searchForm').submit(function(e) {
        e.preventDefault(); 

        let search = $('#search').val();
        if (search) {
            $.ajax({
                url: '../academia/profesor/buscar-profesor.php',
                type: 'POST',
                data: { search },
                success: function(response) {
                    let profesores = JSON.parse(response);
                    let plantilla = '';

                    if (profesores.length > 0) {
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
                        $('#tablaProfesores').show(); 
                    } else {
                        $('#profesores').html('<tr><td colspan="6" class="text-center">No se encontraron resultados</td></tr>');
                        $('#tablaProfesores').show(); 
                    }
                }
            });
        } else {
            $('#profesores').html('');
            $('#tablaProfesores').hide(); 
        }
    });
});
