<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<form action="/carros/save" method="post">
        <fieldset >
            <legend style="color: white;"><b>Cadastro de Carros</b></legend>
            
            <label for="id" style="color: white;">ID do veiculo:</label>
            <input type="text" for="id" disabled value="<?= $model->id ?>" name="id" />

            <label for="nome" style="color: white;">Marca:</label>
            <select name="marca" id="marca" style="background:#484d50; color:white; height:20px;">
            <?php foreach($model->rowsMarca as $item): ?>

            <option value="<?= $item['id'] ?> "><?= $item['descricao'] ?></option>

            <?php endforeach ?>
            </select>

            <label for="modelo" style="color: white;">Modelo:</label>
            <input type="text" for="modelo" value="<?= $model->modelo ?>" name="modelo" />

            <label for="fabricante" style="color: white;">Fabricante:</label>
            <select name="fabricante" id="fabricante" style="background:#484d50; color:white; height:20px;">
            <?php foreach($model->rowsFabr as $item): ?>

            <option value="<?= $item['id'] ?> "><?= $item['descricao'] ?></option>

            <?php endforeach ?>
            </select>
            

            
            <br>
            <button type="submit"  style="background-color:#484d50 ;  height:35px; width:65px; font-size:17px;color:white">Enviar</button>

        </fieldset>
    </form>   

    <br>
    <center><a href="/carros"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black;color:white" >Ver listagem de Carros</button></a></center>
    
    <a href="/"><button style="height: 70px; width:300px; font-size:25px; background-color:#484d50;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:white" >Voltar para página inicial</button></a>
    
    <style>
        body{
            background-color: #2e2e2e;
        }
        


    </style>

</body>
</html>