<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: #66FF99;
            padding: 0;
            margin: 0;
            font-family: monospace;
            /* display: flex;
            justify-content: center;
            align-items: center;*/

        }

        table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            text-align: center;
            border: 1px solid #009900;
            font-size: 12px;
            font-family: monospace;
            border: 2px solid green;
        }

        th {
            border: 1px solid black;
            width: 5%;
            right: 5%;
            height: 5%;
        }

        table th {
            background-color: #cccccc;
            font-weight: bolder;
        }



        table tr {
            height: 30px;

        }

        table tr:not(#tete):hover {
            background-color: #003300;
            color: white;

        }

        table th {
            background-color: #cccccc;
            font-weight: bolder;
        }

        tr:nth-child(even) {
            background-color: #009900;
            color: white;
        }

        #id1 input:hover,
        #idright input:hover,
        #id2 input:hover {
            background-color: #009900;
            color: white;
        }

        .class {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            flex-direction: column;
            width: 64%;
            position: relative;
            top: 100px;
            margin-left: 250px;


        }

        .class2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            width: 100%;
            top: -40px;

        }


        .class3 {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
            position: absolute;
            bottom: -40px;
        }

        tbody,
        thead {
            display: block;
        }

        tbody {
            height: 350px;
            overflow-y: scroll;
        }

        th,
        td {
            width: 10em;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="" method="POST">
        <?php
        $host = 'localhost';
        $dbname = 'base';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$host;dbname=$dbname";
        // récupérer tous les Fournisseurs
        $sql = "SELECT * FROM t_fournisseur";

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
        <div class="class">
            <div class="class2">
                <div id="id1">
                    <input type="button" value="Précedent" name="">
                    <input type="button" value="Suivant" name="">
                </div>
                <div id="idright">
                    <input type="button" value="Ajouter un nouvel assuré" name="">
                </div>
            </div>
            <table>
                <thead>
                    <tr id="tete">
                        <th>Date</th>
                        <th>ID</th>
                        <th>ID Employé</th>
                        <th>ID Fournisseur</th>
                        <th>Nom</th>
                        <th>Prenom(s)</th>
                        <th>Voir</th>
                        <th>Modifier</th>
                        <th>Dupliquer</th>
                        <th>Selectionner</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $stmt->fetch()) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['date']); ?></td>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['id_emp']); ?></td>
                            <td><?php echo htmlspecialchars($row['id_ass']); ?></td>
                            <td><?php echo htmlspecialchars($row['nom']); ?></td>
                            <td><?php echo htmlspecialchars($row['prenom']); ?></td>

                            <td><a href="#"><img src="voir.jpg" alt="" width="20px" height="20px"></a></td>
                            <td><a href="#"><img src="modif.png" alt="" width="20px" height="20px"></a></td>
                            <td><a href="#"><img src="dup.png" alt="" width="20px" height="20px"></a></td>

                            <td><input type="checkbox" name="slect" id=""></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="class3">
                <div id="id2">
                    <input type="button" value="Précedent" name="">
                    <input type="button" value="Suivant" name="">
                </div>
                <div id="idright">
                    <input type="button" value="Supprimer">
                </div>
            </div>
        </div>
    </form>
</body>

</html>