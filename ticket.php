<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: monospace;
        }

        body {
            background-color: #66FF99;
        }

        form {
            background-color: #66FF99;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
        }

        fieldset {
            border-radius: 10px;
        }

        legend {
            background-color: rgb(13, 121, 45);
            color: white;
            font-size: 12px;
            text-transform: uppercase;
            border: 3px solid green;
            text-align: center;
        }

        .fiel2 legend {
            width: 100%;
        }

        li a {
            color: white;
            font-size: 18px;
            text-decoration: none;
        }

        .container {
            height: 78vh;
            width: 64%;
            display: flex;
            flex-direction: column;
            position: relative;
            position: relative;
            /* margin-left: 100px;*/
            margin-top: 30px;
            /*margin-right: 70px;
            /* background-color: rgb(111, 179, 184);*/
            /* background-color: rgb(111, 179, 184);*/
            background-color: #70AE6E;
            border-radius: 10px;
            border: 3px solid green;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            position: relative;
            width: 100%;
            height: 40vh;
            top: 0px;
            margin: -10px;

        }

        .recherche {
            padding: 20px;
            text-align: center;
            font-size: 20px;
            /* background-color: rgb(111, 179, 184);*/
            color: white;
            display: flex;
            justify-content: space-between;
        }

        section {
            height: auto;
            width: 100%;
        }

        footer {
            padding: 10px;
            text-align: center;
            font-size: 20px;
            background-color: rgb(13, 121, 45);
            color: white;
            /*position: absolute;*/
            bottom: -30px;
            width: 100%;
            margin-left: 20px;
            box-sizing: border-box;
        }

        footer input {
            background-color: rgb(13, 121, 45);
        }

        .section2,
        .section1 {
            display: flex;
            flex-direction: row;
            width: 98%;
            margin-left: 15px;
            justify-content: space-between;
            align-items: center;
        }

        .form1 {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            /*padding: 50px;*/
        }

        /* .section2 {
            border: 2px solid black;
            width: 100%;

        }*/

        .fiel2 {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 3px;
            width: 100%;
            padding: 12px;
            border: none;
            /* border-color: green;*/

        }

        #mod,
        #tva-recu {
            display: flex;
            flex-direction: column;
        }

        #tva-recu input {
            width: 200px;
        }

        #mod select {
            width: 200px;
        }

        .monfield1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 10px;
            width: 100%;
            border-radius: 10px 0px 0px 10px;
            position: relative;
            border: none;
            /* border-color: green;
            border-right: none;*/
        }

        .monfield2 {
            border-color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: flex-start;
            flex-direction: column;
            border-radius: 0px 10px 10px 0px;
            padding: 24.7px;
            width: 100%;
            border: none;
            /* border-left: none;*/
            position: relative;
        }

        .form2 {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            /*padding: 50px;*/
        }

        .monfield1 div,
        .monfield2 div {
            padding: 8px;
            width: 100%;
            position: relative;
        }

        #radio {
            display: flex;
            flex-direction: row;
        }

        /*  .monfield1 label {
            position: absolute;
            left: 10px;
        }*/
        .monfield1 input[type='text'],
        .monfield2 input[type='text'],
        #rd {
            position: absolute;
            left: 120px;
        }


        /* .monfield2 label {
            position: absolute;
            left: 10px;
        }*/
        .ticket {
            top: 0;
            text-align: center;
            background-color: rgb(13, 121, 45);
            color: white;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .ticket input {
            background-color: rgb(13, 121, 45);
            color: white;
            font-size: 15px;
            padding: 5;
            border: none;
            text-align: center;
        }

        .btn {
            text-align: center;
            position: absolute;
            bottom: 0;
            margin-left: 35%;
        }

        .btn input {
            padding: 8px;
            margin: 10px;
        }

        .btn input:hover {
            background-color: rgb(13, 82, 13);
            color: white;
        }

        #init:hover {
            background-color: rgb(8, 58, 8);
            color: white;
        }

        @media screen and (max-width:1200px) {
            .section1 {
                display: flex;
                flex-direction: column;
                width: 120%;
            }

            .section1 {
                width: 120%;
            }

            .form1,
            .form2 {
                width: 80%;
                margin: 10px;
                padding: 10px;
            }

            .container {
                position: relative;
                padding: 0;
                margin: 50px;
                width: 50%;
                height: 130vh;
            }

            .monfield1 {
                height: 120px;
                padding: 38px;
                border-right: 2px solid green;
                border-radius: 10px 10px 10px 10px;
            }

            .monfield2 {
                height: 100px;
                border-left: 2px solid green;
                border-radius: 10px 10px 10px 10px;
            }
        }

        @media screen and (max-width:950px) {
            .container {
                position: relative;
                padding: 0;
                /* margin: 50px;*/
                width: 88%;
                height: 140vh;
            }

            .fiel2 {
                display: flex;
                flex-direction: column;
            }
        }

        @media screen and (max-width:750px) {
            .container {
                position: relative;
                padding: 0;
                /* margin: 50px;*/
                width: 88%;
                height: 145vh;
            }
        }
    </style>
</head>

<body>
    <form action="ticket.php" method="post">
        <?php
        $host = 'localhost';
        $dbname = 'mabase';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$host;dbname=$dbname";
        // récupérer tous les Fournisseurs
        $sql = "SELECT * FROM produit";
        try {
            $pdo = new PDO($dsn, $username, $password);
            $stmt = $pdo->query($sql);
            if ($stmt === false) {
                die("Erreur");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


        ?>
        <script type="text/javascript">
            function update() {
                var select = document.getElementById('slt');
                var option = select.options[select.selectedIndex];

                document.getElementById('ty').value = option.text;
                document.getElementById('pu').value = option.value;
            }
            update();
        </script>

        <div class="container">
            <div class="ticket">
                <h2>TICKET No:<input type="text" readonly size="4px" value="5">
                </h2>
            </div>
            <div class="recherche">
                <input type="button" value="INITIALISATION" id="init">

                <select name="selectio" id="slt" style="width: 250px;" onchange="update()">
                    <option value="rien" selected>Selectionnez un produit</option>
                    <?php while ($row = $stmt->fetch()) : ?>
                        <option value="<?php echo htmlspecialchars($row['pu']); ?>"><?php echo htmlspecialchars($row['type']); ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <main>
                <section class="section1">
                    <div class="form1">
                        <fieldset class="monfield1">
                            <legend>Information client</legend>
                            <div id="radio">
                                <label for="as">Assuré:</label>
                                <div id="rd"><input type="radio" name="sex" id="rd1">OUI <input type="radio" name="sex" id="rd2">Non</div>
                            </div>
                            <div> <label for="n-as">No Assuré:</label> <input type="text" name="num_ass" id="n-as">
                            </div>
                            <div><label for="ben">Beneficiaire:</label><input type="text" name="benef" id="ben"></div>
                            <div><label for="asce">Assurance:</label>
                                <input type="text" name="Assurance" id="asce">
                            </div>
                            <div><label for="couv">Couverture:</label>
                                <input type="text" name="couv" id="couv">
                            </div>

                        </fieldset>
                    </div>
                    <div class="form2">
                        <fieldset class="monfield2">
                            <legend> Information produit
                            </legend>

                            <div><label for="ty">Type:</label><input type="text" name="type" id="ty" value=""></div>
                            <div><label for="pu">Prix unitaire:</label><input type="text" name="prix" id="pu" value=""></div>
                            <div><label for="qte">Quantité:</label><input type="text" name="quantite" id="qte"></div>
                            <div><label for="rem">Remise:</label><input type="text" name="Remise" id="rem"></div>

                        </fieldset>
                    </div>
                </section>
                <section class="section2">
                    <fieldset class="fiel2">
                        <legend>REGLEMENT</legend>
                        <div id="mod">
                            <label for="mdp">Mode de paiement : </label> <select name="monsel" id="mdp">
                                <option value="">xxxxxxxxxxx</option>
                                <option value="">zzzzzzzzzzz</option>
                            </select>
                            <label for="tva">TVA : </label> <select name="mon-tva" id="tva">
                                <option value="">xxxxxxxxxxx</option>
                                <option value="">zzzzzzzzzzz</option>
                            </select>
                        </div>
                        <div id="tva-recu">
                            <label for="mv">Montant Versé : </label> <input type="text" name="montant-verse" id="mv">
                            <label for="mr">Monnaie reçu :</label> <input type="text" name="monnaie" id="mr">
                        </div>
                    </fieldset>
                </section>
                <footer> CAISSE : <input type="text" value="10 000 000 F CFA" readonly style="font-size: 18px; color: white;border: none;"></footer>
            </main>
            <div class="btn">
                <input type="button" value="Valider"> <input type="button" value="RECAPITULATIF">
            </div>
        </div>
    </form>
</body>

</html>