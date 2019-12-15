<?php 

require "./lib/autoload.php";

$data = new Connection();

$smarty = new Template();
$smarty->assign('CONTEUDO', '<h3> Seja bem vindo!!</h3>');
$smarty->assign('PAG_TESTE', Routes::pag_teste01());
$smarty->assign('PAG_TESTE2', Routes::pag_teste02());
$smarty->assign('PAG_HOME', Routes::get_siteHOME());
echo '<center>'.Routes::pag_teste01().'</center>';

$smarty->display('index.tpl');


?>