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
</style>
<html>
<body>
    <form name="ReservationForm" method="post" action="../controllers/publicationres.php" onsubmit="return validateform()">
        <fieldset>
            <legend> <h1>Insert Publication Name</h1></legend> 
            <input type="text" name="pubname" id="pubname" value=""/><br><br>
            <input type="submit" name="submit" value="submit"/>
        </fieldset>
    </form>
    
    <script>  
        function validateform(){  
            var pubname = document.getElementById("pubname").value;

            if (pubname == "" || pubname.toLowerCase().indexOf("publication") == -1) {
                alert("Please include the word 'publication' in the publication name field.");
                return false;
            }
            alert("your reservation for the book is accepted ");
            return true;
        }  
    </script>
</body>
</html>

