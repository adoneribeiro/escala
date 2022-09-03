<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Default Configuration -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <title>Atos Music - Escala</title>

    <!-- Social Medias -->
    <meta property="og:site_name" content="Atos Music">
    <meta property="og:title" content="Atos Music" />
    <meta property="og:description" content="Escala adoradores" />
    <meta property="og:image" itemprop="image" content="https://netune.ministerioatos239.com.br/images/note.png">
    <meta property="og:type" content="website" />

    <!-- mobile settings -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#32383e">

    <!-- jQuery Framework -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Framework -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- App style -->
    <link rel="stylesheet" href="css/app.css">

    <script>
        $(() => {
            function adjustWidthElement($el) {
                const w = $(window).width();
                const offset = 20;
                $el.width(w - offset);
            }

            function adjustWidthTableQuarta() {
                adjustWidthElement($('#contentEscalaQuarta'));
            }

            function adjustWidthTableDomingo() {
                adjustWidthElement($('#contentEscalaDomingo'));
            }

            function adjustWidthTables() {
                adjustWidthTableQuarta();
                adjustWidthTableDomingo();
            }

            $(window).resize(() => {
                adjustWidthTables();
            });

            adjustWidthTables();
        });
    </script>
</head>

<body>
    <div class="">
        <div class="row">
            <div class="col-12">
                <h1 class="title-center">
                    <img src="images/logo.png" alt="" style="">
                    <div>Escala Adoradores</div>
                </h1>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-12">
                <h3 style="padding: 0px 10px;">Quarta-Feira</h3>
                <div id="contentEscalaQuarta" style="overflow-x: scroll;padding: 0px 10px;">
                    <table class="table table-striped table-dark" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Ministrante(s)</th>
                                <th scope="col">Back</th>
                                <th scope="col">Violão</th>
                                <th scope="col">Cajon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">07/09/2022</th>
                                <td>Ian</td>
                                <td>Renata</td>
                                <td>Ian</td>
                                <td>Bruno</td>
                            </tr>
                            <tr>
                                <th scope="row">14/09/2022</th>
                                <td>Bruno</td>
                                <td>Marta</td>
                                <td>Bruno</td>
                                <td>Manoel</td>
                            </tr>
                            <tr>
                                <th scope="row">21/09/2022</th>
                                <td>Claudinho</td>
                                <td>Renata</td>
                                <td>Manoel</td>
                                <td>Vinícius</td>
                            </tr>
                            <tr>
                                <th scope="row">28/09/2022</th>
                                <td>Ian</td>
                                <td>Marta</td>
                                <td>Ian</td>
                                <td>Vinícius</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <h3 style="padding: 0px 10px;">Domingo</h3>
                <div id="contentEscalaDomingo" style="overflow-x: scroll;padding: 0px 10px;">
                    <table class="table table-striped table-dark" style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Ministrante(s)</th>
                                <th scope="col">Back(s)</th>
                                <th scope="col">Violão</th>
                                <th scope="col">Teclado</th>
                                <th scope="col">Guitar</th>
                                <th scope="col">Baixo</th>
                                <th scope="col">Bateria</th>
                                <th scope="col">Holder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">04/09/2022</th>
                                <td>Bruno</td>
                                <td>Renata</td>
                                <td>Bruno</td>
                                <td>Help</td>
                                <td>Billy</td>
                                <td>Danilo</td>
                                <td>Manoel</td>
                                <td>Manoel</td>
                            </tr>
                            <tr>
                                <th scope="row">11/09/2022</th>
                                <td>Claudinho</td>
                                <td>Marta</td>
                                <td>Bruno</td>
                                <td>-</td>
                                <td>Ian</td>
                                <td>Danilo</td>
                                <td>Manoel</td>
                                <td>Ian</td>
                            </tr>
                            <tr>
                                <th scope="row">18/09/2022</th>
                                <td>Help</td>
                                <td>Billy</td>
                                <td>Billy</td>
                                <td>-</td>
                                <td>Bruno</td>
                                <td>Danilo</td>
                                <td>Manoel</td>
                                <td>Bruno</td>
                            </tr>
                            <tr>
                                <th scope="row">25/09/2022</th>
                                <td>Ian</td>
                                <td>Renata, Marta</td>
                                <td>Ian (Violão 1)</td>
                                <td>-</td>
                                <td>Billy (Violão 2)</td>
                                <td>-</td>
                                <td>Vinícius (Cajon)</td>
                                <td>Billy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>