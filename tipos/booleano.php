<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 é false 
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); // qualquer número diferente de 0 é true
echo '<br>' . var_dump((bool) 0.0); // apenas 0.0 é false
echo '<br>' . var_dump((bool) 0.1); // qualquer número diferente de 0.0 é true
echo '<br>' . var_dump((bool) ""); // apenas string vazia é false
echo '<br>' . var_dump((bool) " "); // qualquer string diferente de vazia é true
echo '<br>' . var_dump((bool) "0"); // string 0 é false
echo '<br>' . var_dump((bool) "00"); // string 00 é true
echo '<br>' . var_dump((bool) "false"); // string false é true
