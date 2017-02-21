<?php 

session_start();

include 'header.php';

?>
    <main id="content" class="content">


    
                      <div class="form">
                      
                       <?php


if(isset($_SESSION["error"])){
	
    echo '<div class="form>';
    
	echo $_SESSION["error"];
    echo '</div';
    
	unset($_SESSION["error"]);
}

    
?>     
            <h2>Get in Touch</h2>
            <form method="post" action="submit.php">
                <!--
                    <label for="name"></label>
                    <input type="text" name="name" id="name" placeholder="name" />
-->
                <label for="subject"></label>
                <input type="text" name="subject" id="subject" placeholder="subject" />
                <br>
                <label for="email"></label>
                <input type="text" name="email" id="email" placeholder="e-mail" />
                <label for="message"></label>
                <textarea name="message" rows="10" cols="10" id="message" placeholder="message"></textarea>
                <input class="form-button" type="submit" name="submit" value="Send" class="submit" /> </form>
        </div>
    </main>
    <?php 

include 'footer.php';

?>