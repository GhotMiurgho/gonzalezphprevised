<!DOCTYPE html>
<html> <!--here is the start of the HTML block-->
<body>
<?php  //here is the start of the php block

ECHO
$plussign=
"+++++++++++++++++++++++++++++++++++++++";
$NAME=
"Hello classmate, I am MAURO R. GONZALEZ.";
$CLASSES=
" I am currently taking CIS 64, MATH 110, AND ENGLISH 1A.";
$DATE=
" TODAY IS THU AUG 17.";
$NOTE=
" ENJOY YOUR DAY.";
$greet=
" HAPPY THANKSGIVING!";
$plussign=
"+++++++++++++++++++++++++++++++++++++++";

    $number = "1";  //create a variable name $number and set it to 0
    if ($number > "0") {  //compare the value of $number to zero
        print "$CLASSES\n";  //if $number is zero, print this text
    } else {
        if ($number == "1") {
            print "Coursework for XXXXXX is confidential\n";  //if $number is not zero, print this text
        } else {
            if ($Name == "") {
                print "Your name is \n";
            } else {
                if ($Name == "") {
                    print "Your name is \n";
                } else {
                    print "I do not know your name!\n";
               }

             }

          }

      }

?>
</body>
</html>


-------------------------------------------

<html>
<body>
<form action="redirect.php" method = "post">
<p>this is the top of the html</p>

<select name = "make">
<?php
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
  	if (preg_match('/MSIE/i', $user_agent))
  	{
    ?>
		  <option value="http://volvo.com">Volvo</option>
		  <option value="saab">Saab</option>
		  <option value="opel">Opel</option>
		  <option value="audi">Audi</option>
    <?php
	} elseif (preg_match('/Edge/i', $user_agent))
	  	{
	    	?>
				  <option value="http://toyota.com">Toyota</option>
				  <option value="Honda">Honda</option>
				  <option value="Nissan">Nissan</option>
				  <option value="Subaru">Subaru</option>
    		<?php
			} elseif (preg_match('/Firefox/i', $user_agent))
			{
		       ?>
			       	<p>replace this line with FireFox links</p>
    			<?php
				} elseif (preg_match('/Chrome/i', $user_agent))
				{
				    ?>
							 <p>replace this line with Chrome links</p>

    				<?php
				} elseif (preg_match('/Safari/i', $user_agent))
				{
					    ?>
					    	<p>replace this line with Safari links</p>
    					<?php
				}
    echo "<br/><br/>";

?>
</select>
<input type="submit">
</form>
</body>
</html>