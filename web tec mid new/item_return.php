<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?><html>
<body>
  
    <form>
        <fieldset>
            <legend>Item Return</legend> 

            <pre>
            Name
            <input title="text"name="Name"value=""/><br>

            Book name
            <input title="text"name="Book name"value=""/><br>

            Publisher name
            <input title="text"name="Publisher name"value=""/><br>

            Date_Of_Return
            <input title="date"name="Date_Of_Return"value=""/>
            <br>

            <button>SUBMIT</button>
            </pre>

        </fieldset>

    </form>
  
</body>



</html>

