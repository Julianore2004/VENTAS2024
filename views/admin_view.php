<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Admin Panel</h1>
    <ul>
        <?php foreach ($tables as $table): ?>
            <li><a href="?table=<?php echo $table; ?>"><?php echo $table; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php if (isset($data)): ?>
        <h2>Tabla: <?php echo $table; ?></h2>
        <table border="1">
            <thead>
                <tr>
                    <?php foreach (array_keys($data[0]) as $column): ?>
                        <th><?php echo $column; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <?php foreach ($row as $value): ?>
                            <td><?php echo $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>