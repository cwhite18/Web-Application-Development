/**Christopher Lewis White
 ITFN 2214 - Web Application Development
 Lab 4 Assigmment - 10/27/2021
 Spring 2021
 Dr. Ken Nguyen
*/

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Strict//DTD"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <element>
        <header>
            <body>
                <title>
                    "Validate Local Address" <!-- Title of the page -->
                </title>

<h1>Validate Local Address</h1><hr /> <!-- Header for the page -->

<?php
//START OF PHP CODE//                
$email = array(
"jsmith123@example.org",
"john.smith.mail@example.org",
"john.smith@example.org",
"john.smith@example",
"jsmith123@mail.example.org");


foreach ($email as $emailAddress){
echo "The email address &ldquo;" . $emailAddress .
"&rdquo; ";
if (preg_match("/^(([A-Za-z]+\d+)|" .
"([A-Za-z]+\.[A-Za-z]+))" .
"@((mail\.)?)example\.org$/i",
$emailAddress)==1)
echo " is a valid e-mail address.";
else
echo " is not a valid e-mail address.";
}
//END OF PHP CODE//
?>

</body>
        
        
        </header>
    
    
    </element>

</html>