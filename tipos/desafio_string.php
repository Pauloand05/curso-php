<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// avaliando os métodos da documentação da string,
// qual o métodos que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1 ?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';