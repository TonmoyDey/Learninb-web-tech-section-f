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
</style>
<html>
<body>
    <form name="InsertForm" method="post" action="../controllers/publicationController1.php" onsubmit="return validateform()" >
        <fieldset>
            <legend>Publication Name:</legend> 
            <input type="text" name="publicationname" id="publicationname" value=""/><br><br>
            <input type="submit" name="submit" value="submit"/>
        </fieldset>
    </form>

    <script>
      function validateform() {
        var publicationname = document.getElementById("publicationname").value;

         if (publicationname == "" || !publicationname.includes("publication")) {
          alert("Please include the word 'publication' in the publication name field.");
          return false;
        }
        
        return true;
      }
    </script>
</body>
</html>
