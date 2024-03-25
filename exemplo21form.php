<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Envio por POST, e utilização de função matemática e formatação";
            ?>
            <form method="post" action="exemplo21.php" name="formulario">
                <p><input type="number" min=0 max=999 name=valor></p>
                <p><input type="submit" value="CALCULO DE RAIZ QUADRADA"></p>
                <p><input type="reset" value="LIMPAR VALOR"></p>
            </form>
        </div>
    </body>
</html>