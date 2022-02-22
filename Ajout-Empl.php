<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: #6fa781;
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
            /* background-color: rgb(170, 157, 157);*/
            /* background-color: #7C7C7C;*/
            background-color: #92977E;
            min-width: 30%;
            height: 350px;
            position: relative;
            top: 70px;

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

        label {
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
            bottom: 10px;
            left: 130px;
        }

        #btn1,
        #btn2 {
            margin: 10px;
        }

        @media screen and (max-width:1300px) {

            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 200px;
                width: 400%;
            }

            .myclass {
                border: 1px solid black;
                width: 40%;
                height: 380px;
                position: relative;
                top: 70px;

            }
        }

        @media screen and (max-width:960px) {
            label {
                position: absolute;
                width: 100%;
                left: auto;

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



            }
        }

        @media screen and (max-width:850px) {
            label {
                position: absolute;
                width: 100%;
                left: auto;
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


            }
        }

        @media screen and (max-width:600px) {
            .myclass {
                border: 1px solid black;
                width: 80%;

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
                <div class="class"> <label for="dt">Date:</label> <input type="date" name="date" id="dt"></div>
                <div class="class"><label for="num-id">N°d'identification:</label><input type="text" name="num" id="num-id"></div>
                <div class="class"><label for="nm">Nom:</label><input type="text" name="nom" id="nm"></div>
                <div class="class"><label for="pnm">Prenom(s):</label><input type="text" name="prenom" id="pnm"></div>
                <div class="class"><label for="idemp">Id_emloyé:</label><input type="text" name="employe-id" id="idemp"></div>
                <div class="class"><label for="idfour">Id_Fournisseur:</label><input type="text" name="four-id" id="idfour"></div>
            </div>
            <div id="btn"><input type="submit" value="Ajouter" name="add-btn" id="btn1"> <input type="reset" value="Annuler" name="add-btn" id="btn2"></div>
        </div>
    </form>
</body>

</html>