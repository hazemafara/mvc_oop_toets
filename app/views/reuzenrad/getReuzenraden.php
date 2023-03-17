<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div>
        <h3><?= $data['title']; ?></h3>

        <table>
            <thead>
                <th>Naam reuzenrad</th>
                <th>Hoogte (m)</th>
                <th>Land</th>
                <th>Kosten (miljoen)</th>
                <th>Aantal passagiers</th>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>

        <p><a href='/home/index'>Terug naar Home</a></p>
    </div>

</body>

</html>