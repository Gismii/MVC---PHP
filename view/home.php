<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes </title>
</head>

<body>

    <h1>Client Contact</h1>

    <div class="content">
        <table class="table">

            <thead>

                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>

            </thead>
            <tbody>
                <?php  foreach($resultData as $data): ?>
                    <tr>
                       
                        <td> <?= $data['name'] ?> </td>
                        <td> <?= $data['email'] ?> </td>
                        <td> <?= $data['contact'] ?> </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>    

        </table>
    </div>

</body>

</html>