<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e Horário Minimalista</title>
    <style>
        /* Definindo o wallpaper de fundo */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('3.gif'); /* Substitua pelo seu caminho de imagem */
            background-size: cover;
            background-position: center;
            font-family: 'Montserrat', sans-serif; /* Fonte elegante */
        }

        /* Estilização do container da data e horário */
        .date-container {
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.5); /* Fundo semi-transparente */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
        }

        /* Estilo do texto */
        .day-name {
            font-size: 60px;
            font-weight: bold;
        }

        .date {
            font-size: 40px;
            margin-top: 10px;
        }

        .year {
            font-size: 30px;
            margin-top: 10px;
        }

        .time {
            font-size: 50px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="date-container">
        <?php
            // Configurações de data em Português
            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

            // Gera a data completa
            $diaSemana = strftime('%A'); // Nome do dia da semana
            $dia = strftime('%d'); // Dia do mês
            $mes = strftime('%B'); // Nome do mês
            $ano = strftime('%Y'); // Ano completo

            // Exibe a data no formato desejado
            echo "<div class='day-name'>$diaSemana</div>";
            echo "<div class='date'>$dia de $mes</div>";
            echo "<div class='year'>$ano</div>";
        ?>

        <!-- Exibição do horário com JavaScript para atualizar em tempo real -->
        <div class="time" id="time"></div>
    </div>

    <script>
        function updateTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('time').innerText = `${hours}:${minutes}:${seconds}`;
        }

        // Atualiza o horário a cada segundo
        setInterval(updateTime, 1000);
        updateTime(); // Chama imediatamente para exibir o horário ao carregar a página
    </script>

</body>
</html>
