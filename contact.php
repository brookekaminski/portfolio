<?php 

session_start();

include 'header.php';

?>
   
   
   
<?php


if(isset($_SESSION["error"])){
	
	echo $_SESSION["error"];
	unset($_SESSION["error"]);
}

?>
   
   <div class="form">
    <form method="post" action="submit.php">
        <label for="name">Name:</label>

        <input type="text" name="name" id="name" />
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" />
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
        <label for="message">Message:</label>
        <textarea name="message" rows="20" cols="20" id="message"></textarea>
        <input type="submit" name="submit" value="Submit" class="submit" /> 
    </form>
    </div>
    <?php 

include 'footer.php';

?>