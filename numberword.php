<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



    <script>

        var result = '';


        var numberarray = [
            ['','One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten'
            ,'Eleven','Twelve','Thirteen','Fourteen','Fifthteen','Sixteen','Seventeen','Eighteen'
            ,'Nineteen'],
            ['Twenty'],
            ['Thirty'],
            ['Fourty'],
            ['Fifty'],
            ['Sixty'],
            ['Seventy'],
            ['Eighty'],
            ['Ninety'],
            ['Hundred'],
            ['Thousand'],
            ['Million'],
        ];

        function splithundreds(nword){

            var word = nword.toString();
            var n = word
            var wordarray = [];
            while(n != ''){
                
                var charlength = n.length

                if(charlength < 3){
                    wordarray.unshift( n.substr(0));
                    n = '';
                }else{
                    var endchar = charlength - 3;
                    wordarray.unshift( n.substr(endchar));

                    n = n.substr(0,endchar)
                }
            }
            return wordarray;

        }


        function nword(digits,index){
            var result = '';

            var hundreds = parseInt(digits.substr(0,1));
            var tens = digits.substr(1);

            if(digits >= 100){
                result += numberarray[0][hundreds];
                result += " Hundred"
            }
         
            
            if(digits >= 100){

                if(parseInt(tens) < 20){
                    var ntens = parseInt(tens);
                    result += " " + numberarray[0][ntens];
                }else{
                    result += tenths(tens)
                }

            }else{

                var tens = parseInt(digits.substr(0));
                if(tens < 20){
                    var ntens = tens;
                    result += " " + numberarray[0][ntens];
                }else{
                    result += tenths(tens.toString())
                }
                
            }
            if(digits > 0){
                switch(index){
                    case 3 :
                        result += " Trillion"
                        break;
                    case 2 :
                        result += " Million"
                        break;
                    case 1 :  
                        result += " Thousand"
                        break;
                }
            }
            

            return result;
        }

        function tenths(tens){
            var result = '';
            var ntens = parseInt(tens.substr(1));

            if( ntens > 0){
                       
                var ntens = tens.substr(0,1); 
                result += " " + numberarray[ntens - 1];   
                var ntens = parseInt(tens.substr(1));                     
                if(ntens > 0){
                    result += " " + numberarray[0][ntens];
                }
                       
            }else{
                var ntens = tens.substr(0,1); 
                result += " " + numberarray[ntens - 1];
            }
           
            return result;
        }

       

        var mynumbers = splithundreds(prompt("Enter"));
        x = 0;
        var wordresult = [];
        for(var i = mynumbers.length - 1; i >= 0 ; i--){
           
            wordresult.push(nword(mynumbers[x],i));
            x++;
        }
        console.log(wordresult.join(" "),mynumbers.join(","))
    </script>
</body>
</html>