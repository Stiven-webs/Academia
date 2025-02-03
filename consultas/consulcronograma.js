$(document).ready(function() {
    $('#searchForm').submit(function(e) {
        e.preventDefault(); 

        let search = $('#search').val();
        if (search) {
            $.ajax({
                url: '../academia/cronograma/buscar-cronograma.php', 
                type: 'POST',
                data: { search },
                success: function(response) {
                    let cronogramas = JSON.parse(response);
                    let plantilla = '';

                    if (cronogramas.length > 0) {
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
                    } else {
                        plantilla = `<tr><td colspan="6" class="text-center">No se encontraron resultados</td></tr>`;
                    }

                    $('#cronogramas').html(plantilla);
                    $('#tabla-cronogramas').show();
                }
            });
        } else {
            $('#cronogramas').html('');
            $('#tabla-cronogramas').hide();
        }
    });
});
