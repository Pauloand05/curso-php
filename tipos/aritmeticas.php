<div class="titulo">Operações Aritmética</div>

<?php
echo 1 + 1, '<br>'; // soma
var_dump(1 + 1); // var_dump mostra o tipo e o valor da variável
echo '<br>';
echo 1 + 2.5, '<br>'; // soma
echo 10 -2, '<br>'; // subtração
echo 10 * 2, '<br>'; // multiplicação
echo 10 / 2, '<br>'; // divisão
echo intdiv(10, 3), '<br>'; // divisão inteira
echo round(10 / 3), '<br>'; // arredondamento
echo 10 % 3, '<br>'; // resto da divisão
echo 10 ** 3, '<br>'; // exponenciação
// echo intdiv(7, 0), '<br>'; // erro de divisão por zero

// Precedência de operadores:
// () -> ** -> * / % -> + -
echo '<p>Precedência de operadores</p>';
echo 2 + 3 * 4, '<br>'; // 14
echo (2 + 3) * 4, '<br>'; // 20
echo 2 + 3 * 4 ** 2, '<br>'; // 50
echo ((2 + 3) * 4) ** 2, '<br>'; // 400