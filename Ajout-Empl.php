<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: #66FF99;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .myclass {
            border: 2px solid rgb(3, 121, 39);
            background-color: rgb(170, 157, 157);
            min-width: 30%;
            height: 380px;
            position: relative;
            top: 70px;
            /* background-color: #009900;*/
        }

        #tete {
            box-sizing: border-box;
            width: 100%;
            font-family: monospace;
            /*background-color: rgb(170, 157, 157);*/
            background-color: #009900;
            /*background-color: white;*/
            padding: 8px;
            top: 30px;
            overflow: hidden;
            font-size: 15px;
            text-align: center;
            text-transform: uppercase;
            color: white;
        }

        .champ {
            position: absolute;
            top: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        .class {
            padding: 10px;
            margin: 10px;
        }

        span {
            position: absolute;
            left: 35px;
            font-size: 12px;
            color: black;
            font-family: monospace;
        }

        .champ input:not(#btn1, #btn2) {
            position: absolute;
            left: 200px;
            width: 170px;
        }

        #btn {
            position: absolute;
            bottom: 40px;
            left: 130px;
        }

        #btn1,
        #btn2 {
            margin: 10px;
        }

        @media screen and (max-width:1300px) {

            /* span {
                position: absolute;
                width: 100%;
                font-size: 10px;
                color: white;
                left: auto;
            }*/
            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 200px;
                width: 400%;
            }

            /* #btn {
                position: absolute;
                bottom: 22px;
                bottom: 30px;
                left: 80px;
            }*/
            .myclass {
                border: 1px solid black;
                width: 40%;
                height: 380px;
                position: relative;
                top: 70px;
                background-color: #009900;
            }
        }

        @media screen and (max-width:960px) {
            span {
                position: absolute;
                width: 100%;
                font-size: 12px;
                color: white;
                left: auto;
                font-family: monospace;
            }

            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 300px;
                width: 350px;
            }

            #btn {
                position: absolute;
                bottom: 22px;
                bottom: 30px;
                left: 200px;
            }

            .myclass {
                border: 2px solid green;
                width: 80%;
                height: 380px;
                position: relative;
                top: 70px;
                background-color: #009900;
            }
        }

        @media screen and (max-width:850px) {
            span {
                position: absolute;
                width: 100%;
                font-size: 12px;
                color: white;
                left: auto;
                font-family: monospace;
            }

            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 200px;
                width: 260px;
            }

            #btn {
                position: absolute;
                bottom: 22px;
                bottom: 30px;
                left: 150px;
            }

            .myclass {
                border: 1px solid black;
                width: 80%;
                height: 380px;
                position: relative;
                top: 70px;
                background-color: #009900;
            }
        }

        @media screen and (max-width:600px) {
            .myclass {
                border: 1px solid black;
                width: 80%;
                height: 380px;
                position: relative;
                top: 70px;
                background-color: #009900;
            }

            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 200px;
                width: 130px;
            }

            #btn {
                position: absolute;
                bottom: 22px;
                bottom: 30px;
                left: 80px;
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div class="myclass">
            <div id="tete">Ajouter un Employé </div>
            <div class="champ">
                <div class="class"> <span>Date:</span> <input type="date" name="date"></div>
                <div class="class"><span>N°d'identification:</span><input type="text" name="num"></div>
                <div class="class"><span>Id_emloyé:</span><input type="text" name="employe-id"></div>
                <div class="class"><span>Id_Fournisseur:</span><input type="text" name="four-id"></div>
                <div class="class"><span>Nom:</span><input type="text" name="nom"></div>
                <div class="class"><span>Prenom(s):</span><input type="text" name="prenom"></div>
            </div>
            <div id="btn"><input type="submit" value="Ajouter" name="add-btn" id="btn1"> <input type="reset" value="Annuler" name="add-btn" id="btn2"></div>
        </div>
    </form>
</body>

</html>