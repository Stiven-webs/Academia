$(document).ready(function() {
    obtenerCronogramas();

    function obtenerCronogramas() {
        $.ajax({
            url: 'academia/cronograma/listar-cronograma.php', 
            type: 'GET',
            success: function(response) {
                let cronogramas = JSON.parse(response);
                let plantilla = '';
                cronogramas.forEach(cronograma => {
                    plantilla += `
                    <tr cronogramaId="${cronograma.idcronograma}">
                        <td>${cronograma.idcronograma}</td>
                        <td>${cronograma.nombreActividad}</td>
                        <td>${cronograma.fechaInicio}</td>
                        <td>${cronograma.fechaFin}</td>
                        <td>${cronograma.horaInicio}</td>
                        <td>${cronograma.horaFin}</td>
                        <td>
                            <button class="editarCronograma btn btn-info btn-sm">Editar</button>
                            <button class="eliminarCronograma btn btn-danger btn-sm">Eliminar</button>
                        </td>                    
                    </tr>`;
                });
                $('#cronogramas').html(plantilla);
            }
        });
    }

    $('#cronograma-form').submit(function(e) {
        const postData = {
            nombreActividad: $('#nombreActividad').val(),
            fechaInicio: $('#fechaInicio').val(),
            fechaFin: $('#fechaFin').val(),
            horaInicio: $('#horaInicio').val(),
            horaFin: $('#horaFin').val(),
            idcronograma: $('#cronogramaId').val()
        };

        let url = $('#cronogramaId').val() ? 'academia/cronograma/editar-cronograma.php' : 'academia/cronograma/agregar-cronograma.php';

        $.post(url, postData, function(response) {
            console.log(response);
            obtenerCronogramas();
            $('#cronograma-form').trigger('reset');
            $('#cronogramaId').val('');
        });

        e.preventDefault();
    });

    $(document).on('click', '.eliminarCronograma', function() {
        if (confirm('¿Está seguro de querer eliminar este cronograma?')) {
            let elemento = $(this)[0].parentElement.parentElement;
            let id = $(elemento).attr('cronogramaId');
            $.post('cronograma/eliminar-cronograma.php', { id }, function(response) {
                console.log(response); 
                obtenerCronogramas();
            });
        }
    });

    $(document).on('click', '.editarCronograma', function() {
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr('cronogramaId');
        $.post('academia/cronograma/encontrar-cronograma.php', { id }, function(response) {
            const cronograma = JSON.parse(response);
            $('#nombreActividad').val(cronograma.nombreActividad);
            $('#fechaInicio').val(cronograma.fechaInicio);
            $('#fechaFin').val(cronograma.fechaFin);
            $('#horaInicio').val(cronograma.horaInicio);
            $('#horaFin').val(cronograma.horaFin);
            $('#cronogramaId').val(cronograma.idcronograma);
        });
    });
});
