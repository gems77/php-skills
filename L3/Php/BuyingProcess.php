<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant - Commande</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        .menu {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f7f7f7;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"], button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .total {
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Bienvenue dans notre restaurant</h1>
    <div class="menu">
        <h2>Menu Disponible</h2>
        <table>
            <thead>
                <tr>
                    <th>Option</th>
                    <th>Nom du plat</th>
                    <th>Prix (F)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mealPrices = [
                    1 => ['name' => 'Salade', 'price' => 1000],
                    2 => ['name' => 'Aiéké', 'price' => 1500],
                    3 => ['name' => 'Riz', 'price' => 800],
                    4 => ['name' => 'Atassi', 'price' => 2500]
                ];
                foreach ($mealPrices as $key => $meal) {
                    echo "<tr>
                            <td>{$key}</td>
                            <td>{$meal['name']}</td>
                            <td>{$meal['price']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
        <form method="POST">
            <div class="form-group">
                <label for="numberOfMeals">Combien de repas voulez-vous acheter ?</label>
                <input type="number" name="numberOfMeals" id="numberOfMeals" required min="1">
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $numberOfMeals = (int)$_POST['numberOfMeals'];
                $totalPrice = 0;
                echo "<h3>Choisissez vos plats :</h3>";
                for ($i = 1; $i <= $numberOfMeals; $i++) {
                    echo "<div class='form-group'>
                            <label for='meal{$i}'>Repas {$i} :</label>
                            <input type='number' name='meal{$i}' id='meal{$i}' min='1' max='4' required>
                          </div>";
                }
                echo "<div class='form-group'>
                        <label for='montant'>Combien avez-vous ?</label>
                        <input type='number' name='montant' id='montant' required>
                      </div>";
                echo "<button type='submit'>Valider</button>";
            }

            if (!empty($_POST['montant']) && isset($_POST['meal1'])) {
                $montant = (int)$_POST['montant'];
                $totalPrice = 0;

                for ($i = 1; $i <= $numberOfMeals; $i++) {
                    $option = (int)$_POST["meal{$i}"];
                    if (isset($mealPrices[$option])) {
                        $totalPrice += $mealPrices[$option]['price'];
                    }
                }

                $reliquat = $montant - $totalPrice;

                echo "<div class='total'>
                        <p>Total : {$totalPrice} F</p>
                        <p>Montant donné : {$montant} F</p>
                        <p>Reliquat : {$reliquat} F</p>
                      </div>";
            }
            ?>
        </form>
    </div>
</body>
</html>
