<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <script>
        function showSuggestion(str);
        console.log(str);
        if(str.length == 0){
            document.getElementById('output').innerHTML = '';
        }else{

            //AJAX REQ
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 & this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("Get", "suggest.php?q="+str , true),
            xmlhttp.send();
        }

    </script>
</head>
<body>
    
    <h1>Search User</h1>
    <form action="">
        Search User: <input type="text" class="form-control"
        onkeyup= "showSuggestion(this.value)">
    </form>
    <p>Suggestion: <span id="output"></span></p>

</body>
</html>