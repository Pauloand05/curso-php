<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX) . '<br>';

// int para float
var_dump(PHP_INT_MAX + 1); // float
echo '<br>';
var_dump(1 + 1.0); // float
echo '<br>';
var_dump((float) 3); // float

// float para int
echo '<p>Float para int</p>';
var_dump((int) 2.9); // int
echo '<br>';
var_dump(intval('101011', 2)); // int
echo '<br>';
var_dump((int) round(2.9)); // int

// operações com string
echo '<p>Strings</p>';
var_dump(1 + '1'); // int
echo '<br>';
var_dump(1 + '1.0'); // int
echo '<br>';
var_dump("3" . 2);
echo '<br>';
is_string("3" . 2); // string
echo '<br>';
// is_string("3" + 2); 
echo '<br>';
// var_dump(1 + "cinco"); // int
echo '<br>';
var_dump(1 + "5 cinco"); // int
echo '<br>';
// var_dump(1 + "cinco 5"); // int
echo '<br>';
var_dump(1 + "2 + 5");
echo '<br>';
var_dump(1 + "2.5");
echo '<br>';
var_dump(1 + "2.5e2");
echo '<br>';
var_dump((int) "10.5"); // int
echo '<br>';
var_dump((float) "10.5"); // float