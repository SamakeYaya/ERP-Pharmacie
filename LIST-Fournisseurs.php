<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: #66FF99;
            /* padding: 0;
            margin: 0;
             display: flex;
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
        }

        table tr {
            height: 30px;

        }

        table th {
            background-color: #dFdBdB;
            font-weight: bolder;
        }

        button:hover {
            background-color: #009900;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #009900;
            color: white;
        }

        .class {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            flex-direction: column;
            width: 90%;
            position: relative;
            top: 100px;
            margin: 60px;


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
                    <button>Précedent</button>
                    <button>Suivant</button>
                </div>
                <div id="idright">
                    <button>Ajouter un Fournisseur</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
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
                    <button>Précedent</button>
                    <button>Suivant</button>
                </div>
                <div id="idright">
                    <button>Supprimer</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>