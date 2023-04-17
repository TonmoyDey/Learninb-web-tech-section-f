<style>
    table {
        border-collapse: collapse;
        width: 40%;
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
 
</style>

<?php
require_once('../models/publication_display.php');
$con = mysqli_connect("127.0.0.1","root","","lms");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$quer = "SELECT publicationName FROM ADDPUBLICATION";
$data = mysqli_query($con, $quer);
$total = mysqli_num_rows($data);

if ($total != 0)
{
    ?>
    <table>
        <tr>
            <th>Publication Name</th>
        </tr>
    



<?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
               <td>". $result['publicationName'] ."</td>
             </tr>";
         
    }
}
else
{
    echo "No publications found.";
}

mysqli_close($con);
?>
</table>
