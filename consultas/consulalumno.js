$(document).ready(function() {
    $('#searchForm').submit(function(e) {
        e.preventDefault(); 
        
        let search = $('#search').val();
        if (search) {
            $.ajax({
                url: '../academia/alumno/buscar-alumno.php', 
                type: 'POST',
                data: { search },
                success: function(response) {
                    let alumnos = JSON.parse(response);
                    let plantilla = '';
                    
                    if (alumnos.length > 0) {
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
                    } else {
                        plantilla = `<tr><td colspan="6" class="text-center">No se encontraron resultados</td></tr>`;
                    }
                    
                    $('#alumnos').html(plantilla);
                    $('#tabla-alumnos').show();
                }
            });
        } else {
            $('#alumnos').html('');
            $('#tabla-alumnos').hide();
        }
    });
});