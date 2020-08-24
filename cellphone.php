<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        
        function keypad(char){

            var result = '';    
            var keypadlist = [
                [" "],
                [".",",","?","!",";"],
                ["A","B","C"],
                ["D","E","F"],
                ["G","H","I"],
                ["J","K","L"],
                ["M","N","O"],
                ["P","Q","R","S"],
                ["T","U","V"],
                ["W","X","Y","Z"]
            ]

            for(var key = 0; key < keypadlist.length;key++){

                var keypad_index = keypadlist[key].indexOf(char.toUpperCase());

                if(keypad_index > -1){
                    for(var i =0; i <= keypad_index; i++){
                        result += ((key)).toString();
                    }
                    return result
                }

            }
        }

        var message = prompt('Enter message');
        var keypadresult = ""
        
        for(var char = 0; char < message.length; char++){
            keypadresult += keypad(message.substr(char,1));
        }

        alert(keypadresult);       
    </script>
    
</body>
</html>