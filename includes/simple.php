<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
<main>
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
        <label>
            Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)"
                        title="Name is required" autocomplete="off" tabindex="10" size="44" autofocus />
        </label>
    </div>
    <div>
        <label>
            Email:<br /><input type="email" autocomplete="off" name="Email" required="required"
                        placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
        </label>
    </div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>
        <label>
            Comments:<br /><textarea name="Comments" rows="4" placeholder="Your comments are important to us!"
                        tabindex="30"></textarea>
        </label>
    </div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div class="submitBtnWrapper">
        <input type="submit" value="Submit" />
    </div>
	</form>
</main>
	<!-- END HTML FORM -->
