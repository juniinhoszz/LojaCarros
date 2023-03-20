<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Cadastrados</title>
    
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #2E2E2E;
    }
    </style>
    
</head>
<body>
    <h1 align="center" style="color:white;">Carros Cadastrados</h1>
    <table id="tabela" width="100%" border="black 1" bgcolor="#0f0f0f">
        <tr>

            <th style="font-size:15px">❌</th>
            <!--<th style="font-size:15px">✏️</th>-->
            <th style="color:white">ID</th>
            <th style="color:white">Marca</th>
            <th style="color:white">Modelo</th>
            <th style="color:white">Fabricante</th>
            <th style="color:white">Tipo</th>
            <th style="color:white">Ano</th>
            <th style="color:white">Combustivel</th>
            <th style="color:white">Cor</th>
            <th style="color:white">Numero do Chassi</th>
            <th style="color:white">Kilometragem</th>
            <th style="color:white">Revisão</th>
            <th style="color:white">Sinistro</th>
            <th style="color:white">Roubo/Furto</th>
            <th style="color:white">Aluguel</th>
            <th style="color:white">Venda</th>
            <th style="color:white">Particular</th>
            <th style="color:white">Observações</th>
            <th style="color:white">Data do Cadastro</th>

        </tr>

        <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a style="text-decoration: none; color:#30a7d7;" href="/carros/delete?id=<?= $item['id'] ?>">❌</a></td>
        <!--<td> <a style="text-decoration: none; color:#30a7d7;" href="/carros/form?id=<?= $item['id'] ?>">✏️​</a></td>-->
        <td style="color:white"><center><b><?= $item['id'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['marca'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['modelo'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['id_fabricante'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['id_tipo'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['ano'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['id_combustivel'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['cor'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['Numero_chassi'] ?></b></center></td>
        <td style="color:white"><center><b><?= $item['kilometragem'] ?></b></center></td>

        <td style="color:white"><center><b>
        <?php if ($item['revisao'] == 1): ?> Sim <?php else: ?> Não <?php endif ?> </b></center></td>
        
        <td style="color:white"><center><b>
        <?php if($item['sinistro'] == 1): ?> Sim <?php else: ?> Não <?php endif ?> </b></center></td>
        
        <td style="color:white"><center><b>
        <?php if ($item['roubo_furto'] == 1): ?> Sim <?php else: ?> Não <?php endif ?> </b></center></td>
        
        <td style="color:white"><center><b>
        <?php if ($item['aluguel'] == 1): ?> Sim <?php else: ?> Não <?php endif ?> </b></center></td>

        <td style="color:white"><center><b>
        <?php if ($item['venda'] == 1): ?> Sim <?php else: ?> Não <?php endif ?> </b></center></td>

        <td style="color:white"><center><b>
        <?php if ($item['particular'] == 1): ?> Sim <?php else: ?> Não <?php endif ?> </b></center></td>

        <td style="color:white"><center><b>
        <?php if ($item['observacoes'] == ""): ?> Sem Observações<?php else: ?> <?= $item['observacoes'] ?> <?php endif ?> 
        </b></center></td>

        <td style="color:white"><center><b><?= $item['horario_cadastro'] ?></b></center></td>
        
        
        
        
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="20"><center><b  style="font-size: 30px;color: white;">Nenhum Carro foi encontrado.</b></center></td>
            </tr>
        <?php endif ?>

</table>
    
</body>
</html>