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
            border: 2px solid green;
            min-width: 30%;
            height: 400px;
            position: relative;
            top: 70px;
            background-color: #009900;
        }

        #tete {
            box-sizing: border-box;
            width: 100%;
            background-color: rgb(172, 153, 130);
            padding: 8px;
            top: 30px;
            overflow: hidden;
            font-size: 15px;
            text-align: center;
            text-transform: uppercase;
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
            left: 30px;
            font-size: 12px;
            color: white;
            font-family: monospace;
        }

        .champ input:not(#btn1, #btn2) {
            position: absolute;
            left: 200px;
            width: 150px;
        }

        #btn {
            position: absolute;
            bottom: 22px;
            bottom: 60px;
            left: 130px;
        }

        #btn1,
        #btn2 {
            margin: 10px;
        }

        @media screen and (max-width:1250px) {
            span {
                position: absolute;
                width: 100%;
                color: white;
            }

            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 180px;
                width: 250%;
            }

            #btn {
                position: absolute;
                bottom: 22px;
                bottom: 60px;
                left: 80px;
            }
        }

        @media screen and (max-width:980px) {
            span {
                position: absolute;
                width: 100%;
                font-size: 10px;
                color: white;
                left: 0;
                font-family: monospace;
            }

            .champ input:not(#btn1, #btn2) {
                position: absolute;
                left: 120px;
                width: 200%;
            }

            #btn {
                position: absolute;
                bottom: 22px;
                bottom: 60px;
                left: 30px;
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
            <div id="tete">Ajouter un fournisseur </div>
            <div class="champ">
                <div class="class"> <span>Date:</span> <input type="date" name="date"></div>
                <div class="class"><span>N°d'identification:</span><input type="text" name="num"></div>
                <div class="class"><span>Id_assure:</span><input type="text" name="assure-id"></div>
                <div class="class"><span>Nom:</span><input type="text" name="nom"></div>
                <div class="class"><span>Prenom(s):</span><input type="text" name="prenom"></div>
            </div>
            <div id="btn"><input type="submit" value="Ajouter" name="add-btn" id="btn1"> <input type="reset" value="Annuler" name="add-btn" id="btn2"></div>
        </div>
    </form>
</body>

</html>