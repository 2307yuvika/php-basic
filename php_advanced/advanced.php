<?php  
//PHP readfile() Function
echo readfile("data.txt");
echo"<br>";
echo"<br>";


//PHP Open File - fopen()
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("data.txt"));
fclose($myfile);
echo"<br>";
echo"<br>";


//PHP Read Single Line - fgets()
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo"<br>";
echo"<br>";


//PHP Check End-Of-File - feof()
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
echo"<br>";

//PHP Read Single Character - fgetc()
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
echo"<br>";



//PHP Write to File - fwrite()
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

//PHP Append Text
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
echo"<br>";

//The PHP fwrite() Function
//fwrite(file handle, string)

$f = "myfile.txt";
    
$content = "The quick brown fox jumps over the lazy dog."; // String of data to be written

$file = fopen($f, "w") or die("ERROR: Cannot open the file."); // Open the file for writing

fwrite($file, $content) or die ("ERROR: Cannot write to file."); // Write data to the file

fclose($file); // Closing the file

echo "Data written successfully.";

?> 