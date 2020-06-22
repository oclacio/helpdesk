<?php

/*
*   Config
*   Configurações da applicação, entre elas: Fuso horário, Exibição de erros (NOTICE & WARNING),
*   Bem como algumas constantes da ferramenta.
*/

require_once 'config.php';


/*
*   Router
*   Todas as requisições são enviadas por URL amigavel
*   O Router trata os dados na variavel $_GET e carrega a classes solicitada.
*/

require_once 'router.php';


/*
 *  Instanciar Classe 
 */
new router();