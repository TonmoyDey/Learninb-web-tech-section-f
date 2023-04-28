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
    
    input[type="button"]:hover {
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
    </style>
<html>
  <body>
    <form name="Reservation_check_Form" method="post" action="../controllers/publication_reservation.php" onsubmit="return validateform()">
      <fieldset>
        <legend>Reservation Check Search</legend>
        <input type="text" name="resevation_check_text" value=""/>
        <input type="submit" value="Search"/>
        <a href="../views/reservation_check_publication.php"><button type="button"><b> Back </b></button></a>
      </fieldset>
    </form>

    <?php if(isset($error)): ?>
      <p><?= $error ?></p>
    <?php elseif(isset($publications) && count($publications) > 0): ?>
      <table border="1">
        <tr>
          <th>Publication Name</th>
        </tr>
        <?php foreach($publications as $publication): ?>
        <tr>
          <td><?= $publication['pbname'] ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    <?php endif; ?>
  </body>
</html>

<script>  
function validateform(){  
  var resevation_check_text = document.Reservation_check_Form.resevation_check_text.value;   
  
  if (resevation_check_text == null || resevation_check_text ==""){  
    alert(" Search can't be blank");  
    return false;  
  } else {
    
    return true;
  }
}  
</script>