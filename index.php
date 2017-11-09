<html>
    <head>
       
        <script>
              function turn(A){
                  document.getElementById("S"+A).style.backgroundImage = "URL('images.jpg')";
                  alert ("test");

            //var myArray =["S"+11,"S"+12,"S"+13,"S"+14,"S"+21,"S"+22,"S"+23,"S"+24,"S"+31,"S"+32,"S"+33,"S"+34,"S"+41,"S"+42,"S"+43,"S"+44];
                             
            //var arrayLength = myArray.length;
            
            //for (var i = 0; i < arrayLength; i++) {
                
              // if( myArray[0] == myArray[8]) 
                
            }
          
        
        
        </script>
        <style>
            .button{
                background-color : black;
                width : 100px;
                height: 100px;
                cursor: crosshair;
            }
            .button:hover{
                background-color :red;
            }
            
            
       
            table, th, td {
                border: 1px solid black;
                border-width: 5px;
                border-color: black    ;
            }
        </style>   
        
    </head>
    
    
    
    <body>
        <div>
            
                 <p align='center'>
                 <table>
            <?php
                for($x = 1; $x < 5; $x++){   
                    echo "<tr>";
                    for($y = 1; $y < 5; $y++){
                        echo "<td onclick=turn($x$y) id=S$x$y class=button></td>\n";                    
                    }
                    echo "</tr>\n";
                }
                
            
            ?>
            
        </table>
        </p>
            
            
            
            
        </div>
        
        
        
        
        
    </body>
    
    
</html>