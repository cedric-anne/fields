<?php
define('GLPI_ROOT', '../../..');
include (GLPI_ROOT."/inc/includes.php");

Html::header($LANG['fields']['title'][1], $_SERVER['PHP_SELF'] ,"plugins", "fields", "container");

Search::show("PluginFieldsContainer");

Html::footer();
?>
