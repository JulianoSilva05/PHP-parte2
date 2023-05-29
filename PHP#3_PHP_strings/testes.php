<?PHP
// Array com os dias da semana
$diasemana = array('domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado');
// Aqui usamos a data atual ou qualquer outra data no formato Y-M-D (2016-05-19)
$data = date('Y-m-d');

// Variável que recebe o dia da semana (0 = domingo, 1 = segunda, 2 = terca ...)
$diasemana_numero = date('w', strtotime($data));
echo "dia da semana numero".PHP_EOL;
echo $diasemana_numero.PHP_EOL;
// Mostra o dia da semana
echo $diasemana[$diasemana_numero].PHP_EOL;

switch ($diasemana[$diasemana_numero]) {
    case "segunda":
        echo "Hoje é segunda-feira.";
        break;
    case "terça":
        echo "Hoje é terça-feira.";
        break;
    case "quarta":
        echo "Hoje é quarta-feira.";
        break;
    case "quinta":
        echo "Hoje é quinta-feira.";
        break;
    case "sexta":
        echo "Hoje é sexta-feira.";
        break;
    case "sábado":
        echo "Hoje é sábado.";
        break;
    case "domingo":
        echo "Hoje é domingo.";
        break;
    default:
        echo "Dia inválido.";
        break;
}
