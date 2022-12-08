<!--ESSA PÁGINA AINDA NÃO FOI UTILIZADA PRA NADA-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #ddd;
            font-family: 'Arial';
        }

        .nav_tabs {
            width: 40%;
            margin: 10%;
            background-color: #fff;
            position: relative;
        }

        .nav_tabs ul {
            list-style: none;
        }
        
        .nav_tabs ul li{
            float: left;
        }

        .nav_tabs label { /*Vai determinar o tamanho dos botoes das abas*/
            width: 4vh;
            padding: 1vh;
            background-color: #363b48;
            display: block;
            color: #fff;
            cursor: pointer;
            text-align: center;
        }

        .rd_tabs:checked ~ label{
            background-color: #e54e43;
        }

        .rd_tabs { /*sumir com os radios buttons*/
            display: none;
        }
        
        .content {
            border-top: 5px solid #e54e43;
            background-color: #fff;
            display: none;
            position: absolute;
            height: 320px;
            width: 25%;
            left: 0;
        }

        .rd_tabs:checked ~ .content {
            display: block;
        }

        .content article {
            padding: 20px;
        }


    
    </style>

</head>
<body>
    <nav class="nav_tabs">
        <ul> 
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab1">
                <label for="tab1">1</label>
                <div class="content"> 
                    <article>
                        Era uma vez
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label for="tab2">2</label>
                <div class="content">
                    <article>
                        um pudim apaixonado
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab3">
                <label for="tab3">3</label>
                <div class="content">
                    <article>
                        estava andando na rua quando foi atropelado
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab4">
                <label for="tab4">4</label>
                <div class="content">
                    <article>
                        PUDIM AMASSADOOOOOOOOOOOOOO
                    </article>
                </div>
            </li>
        </ul> <!--Lista não ordenada-->
    </nav>
</body>
</html>