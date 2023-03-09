<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
</head>
<body>
<form action="/carros/save" method="post">
        <fieldset >
            <legend style="color: white;">Cadastro de Carros</legend>
            
            
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome" style="color: white;">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="descricao" style="color: white;">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="preco" style="color: white;">Preço:</label>
            <input name="preco" id="preco" type="is_double" value="<?= $model->preco ?>" style="background:#484d50; color:white; height:20px;"/>

            <br>
            <button type="submit"  style="background-color:#484d50 ;  height:35px; width:65px; font-size:17px;color:white">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>