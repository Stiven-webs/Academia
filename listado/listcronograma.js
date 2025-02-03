$(document).ready(function() {
    obtenerCronogramas();

    function obtenerCronogramas() {
        $.ajax({
            url: '../academia/cronograma/listar-cronograma.php', 
            type: 'GET',
            success: function(response) {
                let cronogramas = JSON.parse(response);
                let plantilla = '';
                cronogramas.forEach(cronograma => {
                    plantilla += `
                    <tr>
                        <td>${cronograma.idcronograma}</td>
                        <td>${cronograma.nombreActividad}</td>
                        <td>${cronograma.fechaInicio}</td>
                        <td>${cronograma.fechaFin}</td>
                        <td>${cronograma.horaInicio}</td>
                        <td>${cronograma.horaFin}</td>
                    </tr>`;
                });
                $('#cronogramas').html(plantilla);
            }
        });
    }

    $('#search').keyup(function(e) {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: '../academia/cronograma/buscar-cronograma.php', 
                type: 'POST',
                data: { search },
                success: function(response) {
                    let cronogramas = JSON.parse(response);
                    let plantilla = '';
                    cronogramas.forEach(cronograma => {
                        plantilla += `
                        <tr>
                            <td>${cronograma.idcronograma}</td>
                            <td>${cronograma.nombreActividad}</td>
                            <td>${cronograma.fechaInicio}</td>
                            <td>${cronograma.fechaFin}</td>
                            <td>${cronograma.horaInicio}</td>
                            <td>${cronograma.horaFin}</td>
                        </tr>`;
                    });
                    $('#cronogramas').html(plantilla);
                }
            });
        } else {
            obtenerCronogramas();
        }
    });
});
