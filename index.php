<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
    
    function searchiteam(str){
        if(str.length == 0)
        {
            document.getElementById('output').innerHTML = ' ';
        }else{
            

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById('output').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "search.php?q="+str, true);
            xhttp.send();
        }
    }
    </script>
</head>
<body>
    <div class="container">
        <div class="title">Search Engin</div>
        <div class="searchbar">
        <input type="text" name="searchbar" class="form-control" onkeyup="searchiteam(this.value)">
        <div class="content"> suggestion:
        <span id="output"></span>
        </div>
        </div>
    </div>
</body>
</html>