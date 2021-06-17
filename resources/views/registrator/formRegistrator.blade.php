<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrator Code</title>
</head>
<body>
    <h1>Code Generator</h1>
    <form action="{{ route('registrator.store') }}"" method="POST">
        @csrf
        <label for="email">Correo Electronico </label>
        <input type="text" name="email" id="email" >
        <br>  
        <label for="code"></label>
        <input type="text" name="code" id="code" >
        <input type = "button" onclick = "makeid()" value = "Display">
        <br>
        <input type="submit" value="Aceptar">
    </form>
    <script type = "text/javascript">  
        function makeid() {
          var text = "";
          var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        
          for (var i = 0; i < 5; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        document.getElementById("code").value = text; 
        
        }
            
                </script>  
</body>
</html>