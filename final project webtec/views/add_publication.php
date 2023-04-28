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
    </style>
<html>
<head>
    <title>Add Publication</title>
</head>
<body>
    <fieldset>
    <legend><h1>Add Publication</h1></legend>
    <form name="add_publication_Form" method="post" action="../controllers/add_publication_controller.php" onsubmit="return validateform()" >
        Publication:
        <input type="text" id="title" name="title" required><br>
        Author:
        <input type="text" id="author" name="author" required><br>
       Available Copies:
        <input type="number" id="available_copies" name="available_copies" required><br>
        <input type="submit" value="Add Publication">
        </fieldset>
    </form>
</body>
</html>
<script>  
function validateform(){  
  var title = document.add_publication_Form.title.value;   
  var author = document.add_publication_Form.author.value; 
  var available_copies = document.add_publication_Form.available_copies.value;  
  if (title == "" || author == "" || available_copies == "" || title.toLowerCase().indexOf("publication") == -1) {
    alert("Please, fill the gaps properly and make sure to include 'publication' in the publication.");  
    return false;  
  } 
  else {
    alert("The publication has been added"); 
    return true;
  }
}  
</script>
