<style>
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid black;
        border-radius: 5px;
    }

    input[type="text"], input[type="submit"] {
        padding: 5px;
        margin: 5px;
        border-radius: 3px;
        border: 1px solid grey;
    }

    input[type="submit"] {
        background-color: green;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: darkgreen;
    }

    div {
        margin: 10px;
        padding: 10px;
        border-radius: 3px;
    }

    div.color-red {
        background-color: pink;
        color: red;
    }

    div.color-green {
        background-color: lightgreen;
        color: green;
    }
    table {
        border-collapse: collapse;
        width: 50%;
        font-family: Arial, sans-serif;
    }
    th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    </style><?php 

require_once('../models/publication.php');

$publications = getPublications();

?>

<html>
<head>
    <title>Publications</title>
</head>
<body>
    <h1>Publications</h1>
    <table>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Available Copies</th>
            </tr>
        <body>
            <?php foreach ($publications as $publication) { ?>
                <tr>
                    <td><?php echo $publication['title']; ?></td>
                    <td><?php echo $publication['author']; ?></td>
                    <td><?php echo $publication['available_copies']; ?></td>
                </tr>
            <?php } ?>
        </body>
    </table>
</body>
</html>
