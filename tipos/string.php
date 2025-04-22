<div class="titulo">Tipo String</div>

<?php
echo 'Eus sou uma string!';
echo "<br>";
var_dump("Eu também");
echo "<br>";

// concatenação
echo "Nós também" . ' somos uma string!';
echo "<br>", 'Nós também', ' somos uma string!';

echo "<br>";
echo "'Teste' " . '"Teste" ' . '\'Teste\'' . "\"Teste\"" . "\\";

print("<br> Também existe a função print!");
print "<br> Também existe a função print!";


// Algumas funções 
echo "<br>" . strtoupper('maximizado');
echo "<br>" . strtolower('MINIMIZADO');
echo "<br>" . ucfirst('primeira letra maiúscula');
echo "<br>" . ucwords('todas as palavras com a primeira letra maiúscula');
echo "<br>" . strlen('quantas letras?');
echo "<br>" . mb_strlen('Eu também', 'utf-8'); // multibyte, para caracteres especiais
echo "<br>" . substr('Só uma parte mesmo', 0, 10); // começa em 0 e vai até 10
echo "<br>" . str_replace('parte', 'substituição', 'Só uma parte mesmo'); // substitui a palavra parte por substituição
