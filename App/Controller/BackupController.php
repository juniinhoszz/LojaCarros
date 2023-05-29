<?php

namespace App\Controller;

class BackupController extends Controller
{
    public static function exportar()
    {
        exec(BASEDIR . '/App/Backup/exportar.bat');
        //echo BASEDIR . '/App/Backup/exportar.bat';

        header('Location: /');
        //echo '<script type="text/javascript">
        //window.onload = function () { alert("Backup Realizado com Sucesso!"); } 
        //</script>';
    }
    public static function importar()
    {
        exec(BASEDIR . '/App/Backup/import.bat');
        header('Location: /');      
    }
}