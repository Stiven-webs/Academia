$(document).ready(function() {
    obtenerCursos();

    function obtenerCursos() {
        $.ajax({
            url: '../academia/curso/listar-curso.php', 
            type: 'GET',
            success: function(response) {
                let cursos = JSON.parse(response);
                let plantilla = '';
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
            }
        });
    }

    $('#search').keyup(function(e) {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: '../academia/curso/buscar-curso.php', 
                type: 'POST',
                data: { search },
                success: function(response) {
                    let cursos = JSON.parse(response);
                    let plantilla = '';
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
                }
            });
        } else {
            obtenerCursos();
        }
    });
});
