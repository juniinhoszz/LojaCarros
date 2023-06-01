<?php

namespace App\Controller;

class BackupController extends Controller
{
    public static function exportar()
    {
        //exec(BASEDIR . '/App/Backup/exportar.bat');
        //echo BASEDIR . '/App/Backup/exportar.bat';

        exec('C:\"Program Files"\"MySQL"\"MySQL Server 8.0"\bin\mysqldump -hlocalhost -P3307 -uroot -petecjau lojacarros --databases > C:/Dev/BackupLojaCarros.sql');
        
        //echo '<script type="text/javascript">
        //window.onload = function () { alert("Backup Realizado com Sucesso!"); } 
        //</script>';
        //header('Location: /');
        include 'View/modules/Pg-Inicial/SucessExportar.php';
    }
    public static function importar()
    {
        
        $command = '"C:/Program Files/MySQL/MySQL Server 8.0/bin/mysql" -uroot -petecjau -P3307 -hlocalhost lojacarros < C:/Dev/BackupLojaCarros.sql'; 
        exec($command);
        
        include 'View/modules/Pg-Inicial/SucessImportar.php';
        //header('Location: /');
    }
}