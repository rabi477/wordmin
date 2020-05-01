<?php
echo "\e[93m            Filter your wordlist @Rabi kumar singh

W                  W     OOO O OOO     RRRRR      DD D      M M     M M   IIIIIIIIIII   NN      N
 W                W     O         O    R    R     D    D    M  M   M  M        I        N N     N
  W              W     O           O   R     R    D     D   M   M M   M        I        N  N    N
   W      W     W      O           O   R    R     D      D  M    M    M        I        N   N   N
    W    W W   W       O           O   R R        D      D  M         M        I        N    N  N
     W W    W W         O         O    R   R      D     D   M         M        I        N     N N
      W      W           OOOOOOOOO     R     R    D DD D    M         M   IIIIIIIIIII   N      NN
\n";
echo "Enter File path and name:";
$uin1=trim(fgets(STDIN,1024));
echo "Enter output File path and name:";
$uin2=trim(fgets(STDIN,1024));
echo "Enter min character:";
$min=trim(fgets(STDIN,1024))+1;
echo "Enter max character:";
$max=trim(fgets(STDIN,1024))+1;
$file1=fopen($uin1,"r+") or die("unable to open file! \n");
$file2=fopen($uin2,"w+") or die("unable to open\n");
while(!feof($file1)){
    $txt="";
    $txt=fgets($file1,filesize($uin1));
    $len=strlen($txt);
    if($len>=$min&&$len<=$max){
        fputs($file2,$txt);
        echo $txt;
    }
}
fclose($file1);
fclose($file2);
?>