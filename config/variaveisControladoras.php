<?php 
/* Este espaço é dedicado para todas as váriaveis 
 * que serão utilizadas com propósito de controlar 
 * uma exibição no sistema. 
 * Ou então demais configurações desde que a mesma seja
 * especificada.
 */

  $texto = "Este é o sistema de gerenciamento de Atribuições. Use o menu acima para escolher uma opção."; #Mensagem no Index
  $autor_name = "Luis Felipe A. Venezian 4º ADS Noturno."; #Nome do desenvolvedor do Sistema. Utilizado no Index.                                                                                                                                                                                          

/* System Name
 * Varivavel recebe o nome do sistema que irá aparecer na página inicial.
 */
  $nome_do_sistema = "AdminS";



/* Nome dos Menus da NAV-BAR (Cabeçalho)
 * Do 1 ao 5, Ordenado da esquerda para direita. 
 * */
  $item1 = "Novo";  
  $item2 = "Consultar";
  $item3 = "Alterar";
  $item4 = "Excluir";
  $item5 = "Listar";

/* Links para os respectivos itens. Se trata do link de ação quando
 * houver click em alguma opção.
 */
  $link_item1 = "../tela/index.php?opcao=novo";
  $link_item2 = "../tela/index.php?opcao=consultar";
  $link_item3 = "../tela/index.php?opcao=alterar";
  $link_item4 = "../tela/index.php?opcao=excluir";
  $link_item5 = "../tela/index.php?opcao=listar";


  /* Variavel de redirecionamento para principal */
  $redirect = "../tela/index.php";


  /* Váriavel irá guardar o caminho para incluir funções de JS no código em qualquer página. */
  $js = "<script src='../funcoes/js.js'></script>\n";

?>                                                                                                                                     