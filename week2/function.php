<?php

$navMenu = array(
    'Home' => 'index.php',
    'About' => 'about.php',
    'Services' => array(
        'Web Design' => 'webdesign.php',
        'OOP' => 'oop.php',
    ),
    'Contact' => 'contact.php',
);

$tableData = array(
    array('Angela', '20', 'Model'),
    ['Bruno', '30', 'Artist'],
    ['jimmy', '28', 'MC'],
    ['Jolie', '26', 'Manager'],
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <style>

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: darkblue;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: lightblue;
            color: black;
        }
         ul.submenu {
            display: none;
            position: absolute;
        }

        ul.submenu li {
            float: none;
        }

        li:hover ul.submenu {
            display: block;
        }


        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 10px;
            margin-left: 10%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <!-- Navigation menu -->
    <ul>
        <?php foreach ($navMenu as $label => $url): ?>
            <?php if (is_array($url)): ?>
                <li>
                    <a href="#"><?php echo $label; ?></a>
                    <ul class="submenu">
                        <?php foreach ($url as $subLabel => $subUrl): ?>
                            <li><a href="<?php echo $subUrl; ?>"><?php echo $subLabel; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Occupation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?php echo $cell; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>
</html>