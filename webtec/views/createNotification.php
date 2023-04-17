<html>
<head>
    <title>Create Notifications</title>
    <style>
        fieldset {
            border: 2px solid black;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 50%;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend><h1>Create Notification</h1></legend>
        <form name="NotificationForm" method="post" action="../controllers/createNotificationHandler.php" onsubmit="return validateform()" >
        <label><b>Title:</b></label>
        <br>
        <input type="text" name="title">
        <br>
        <label><b>Description:</b></label>
        <br>
        <input type="text" name="description">
        <br><br>
        <input type="submit" value="Create">
        </form>
    </fieldset>
</body>
</html>
<script>  
function validateform(){  
var title = document.NotificationForm.title.value;  
var description=document.NotificationForm.description.value;  
  
if (title==null || title==""){  
  alert("Title can't be blank");  
  return false;  
}else if(description==null || description==""){  
  alert("Description can't be blank.");  
  return false;  
  }  
}  
</script>
