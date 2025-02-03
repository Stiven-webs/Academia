$(document).ready(function() {
    $('#searchForm').submit(function(e) {
        e.preventDefault();

        let search = $('#search').val();
        if (search) {
            $.ajax({
                url: '../academia/curso/buscar-curso.php',
                type: 'POST',
                data: { search },
                success: function(response) {
                    let cursos = JSON.parse(response);
                    let plantilla = '';

                    if (cursos.length > 0) {
                        cursos.forEach(curso => {
                            plantilla += ` 
                            <tr>
                                <td>${curso.idcurso}</td>
                                <td>${curso.nombreCurso}</td>
                                <td>${curso.nivelCurso}</td>
                                <td>${curso.precio}</td>
                            </tr>`;
                        });
                        $('#cursos').html(plantilla);
                    } else {
                        plantilla = `<tr><td colspan="6" class="text-center">No se encontraron resultados</td></tr>`;
                        $('#cursos').html(plantilla);
                    }

                    $('#tabla-cursos').show(); 
                }
            });
        } else {
            $('#cursos').html('');
            $('#tabla-cursos').hide();
        }
    });
});
