 <?php
include 'conf.php';
//We "Import/Include" this so we can access our credentials.
    $key = "ENTERKEY"; //Register to get a key on www.FraudPro.org/Community
    $searchterm = $_GET['searchterm']; //Types: email, ip, phone+
   $site = "www.example.com";
   //include full domain(ex. example.com)
$source = file_get_contents('https://fraudpro.org/api/detect.php');
//If you plan to use our system, leave this.
//If the information entered, is in our database, we will return a boolean response. 
   if ($source = "true"){
return true;
echo 'true';
//You can add functions under this section. Example: Exit the session
exit("Detection of fraud.");
}
else {
return false
echo 'false';
//You can enable loading operations if the result = false. OR leave this empty

}
   
?>
