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
        //fazer IMPORTAR
        exec('cd C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin
        mysql -hlocalhost -P3307 -uroot -petecjau < C:/Dev/BackupLojaCarros.sql');

        //cd C:\"Program Files"\MySQL\"MySQL Server 8.0"\bin\mysql -hlocalhost -P3307 -uroot -petecjau < C:/Dev/BackupLojaCarros.sql
        //exec(BASEDIR . '/App/Backup/import.bat');
        header('Location: /');
    }
}