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
<table>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
        </table>
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
        <input type="button" name="click" value="re_Check" onclick="ajax()">
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
function ajax (){
    var title = document.NotificationForm.title.value;  
    var description=document.NotificationForm.description.value;  
			    
                
          let data = {
				 'title' : title,
				 'description' :description,
				
        };

			let info = JSON.stringify(data);

        let xhttp = new XMLHttpRequest();

          xhttp.open('post', 'server.php', true);
          xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhttp.send('data=' + info);
          xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                let info = JSON.parse(this.responseText);
                document.getElementsByTagName('h2')[0].innerHTML ="title : "+info.title;
                document.getElementsByTagName('h2')[1].innerHTML ="description : " +info.description;
			}
        }
    }
        
</script>  