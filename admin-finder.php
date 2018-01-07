<?php
 
echo("Criado por Ergo.\n");
echo("Este script serve para achar a pagina administradora de um site, usando a tecnica do brute force...\n");
echo("Para usar este script digite: php admin-finder.php http://www.nomedosite.com\n");

$admin = array("/wp-admin/","/admin/login.php","/cpanel/index.php","/admin/index.php", "/admin/index.html");
if(!$argv[1]){
   echo("A url precisa ser especificada!\n");
   exit();
}
$url = $argv[1];
echo("\n[+]Target===>$url\n\n");
foreach($admin as $admins){
    $teste = $url.$admins;
    $getteste = get_headers($teste)[0];
    $vapor = substr($getteste, 9, 3);
    if($vapor != 200 ){
           echo "\033[0;31m";
           echo "[-]NOT FOUND ==> " . $url.$admins . "\n";
    }else{
        echo "\033[0;32m";
        echo("[+] FOUND ==> " . $teste . "\n");

    }


}
echo("Greatz - Vapor");


?>


