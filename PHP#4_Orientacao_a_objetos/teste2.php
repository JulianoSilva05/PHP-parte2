<?php
// Vetor para armazenar os dados dos alunos 
$alunos = array();
// Loop para inserir os dados dos 10 alunos 
for ($i = 0; $i < 3; $i++) {
    echo "Aluno " . ($i + 1) . ":\n";
    // Solicitar nome do aluno 
    echo "Nome: ";
    $nome = readline();
    // Solicitar nota do aluno 
    echo "Nota: ";
    $nota = readline();
    // Armazenar os dados do aluno no vetor 
    $alunos[] = array('nome' => $nome, 'nota' => $nota);
}

// Calcular a média de notas da classe 
$totalNotas = 0;
foreach ($alunos as $aluno) {
    $totalNotas += $aluno['nota'];
}
$media = $totalNotas / count($alunos);
// Encontrar o aluno com a maior nota 
$maiorNota = 0;
$alunoMaiorNota = '';
foreach ($alunos as $aluno) {
    if ($aluno['nota'] > $maiorNota) {
        $maiorNota = $aluno['nota'];
        $alunoMaiorNota = $aluno['nome'];
    }
} 
// Mostrar a média de nota da classe e o nome do aluno com a maior nota 
echo "Média de notas da classe: " . $media . "\n"; 
echo "Aluno com maior nota: " . $alunoMaiorNota . "\n";