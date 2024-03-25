<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
        <script>
            function voltar(){
                window.history.go(-1); // voltar 1 pagina
                /* -2 voltara 2 páginas
                    se quiser avançar paginas, colocaria numero positivo */
            }
        </script>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "Envio por POST, e utilização de função matemática e formatação";
                $fValor =$_POST["valor"];
                echo "A raiz de $fValor é igual a ".number_format(sqrt($fValor),2);
            ?>
            <form>
                <input type="button" value="Voltar" onclick="voltar()">
            </form>
        </div>
    </body>
</html>