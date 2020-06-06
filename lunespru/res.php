<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $path = $_POST['path'];
      $path1 = $_POST['path1'];
      if(file_exists($path)==true){
          
          echo "el archivo si existe"."<BR>";
          if(is_file($path)==true){
             echo "es un archivo"."<BR>";
             
             echo "<TABLE border=1>";
             echo "<TH>";
             echo "</TD>Tamano</TD>";
             echo "<TD>escritura</TD>";
             echo "<TD>lectura</TD>";
             echo "<TD>ejecucion</TD>";
             echo "</TH>";
             
             echo "<TR>";
             echo "<TD>".filesize($path)."byte"."</TD>";
             if(is_writable($path)==1){
                 echo "<TD>SI</TD>";
                }  else{
                     echo "<TD>NO</TD>";
                    
                }  
                 if(is_readable($path)==1){
                 echo "<TD>SI</TD>";
                } 
                else{
                     echo "<TD>NO</TD>";
                    
                } 
                if(is_executable($path)==1){
                 echo "<TD>SI</TD>";
                 }  else{
                     echo "<TD>NO</TD>";
                    
                } 
               echo "</TR>";
             
             echo "<TR>";
             echo "<TD>ultimo acceso realizado</TD>";
             echo "<TD>". date("d/m/y h:i:s", fileatime($path))."</TD>";
             echo "</TR>";
             
             echo "<TR>";
             echo "<TD>ultimo modificacion realizado</TD>";
             echo "<TD>". date("d/m/y h:i:s", filemtime($path))."</TD>";
             echo "</TR>";
             
              echo "<TR>";
             echo "<TD>ultimo cambio realizado</TD>";
             echo "<TD>". date("d/m/y h:i:s", filectime($path))."</TD>";
             echo "</TR>";
             echo "</TABLE>";
             
             $fic = fopen($path,"r")or die("NO encontrado");
             echo "el contenido es"."<BR>";
             echo "---------------------------"."<BR>";
             
             while(!feof($fic)){
                 $n=0;
            while ($ele = fgets($fic)) {
                           $n++;
                            echo "$n".$ele;
                            echo "<BR>";
            }         
            
}   

          }
          
         
              
          }
          
         
          
          
          
          
        
          
          
          
        


                     if ($dh = opendir($path1)) {
                    
                    echo "el directorio es"."<BR>";
             echo "---------------------------"."<BR>";
                    while ($ele = readdir($dh)) {
                     
                        echo $ele;
                        echo "<BR>";
                        
                    }
                    
                    
                }
      
       
          
     
             
        
        
        ?>
    </body>
</html>
