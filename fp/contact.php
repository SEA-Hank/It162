<?php include './Includes/fp-config.php' ?>
<?php include './Includes/header.php'; ?>

<section id="schedule">
    <div id="schedule-title">
        Contact Us
    </div>
    <div id="scheduleWrapper" class="clearfloat">
        <div id="scheduleImage">
            <img src="./images/meeting.jpg">
        </div>
        <div id="schedule-form">
            <form>
                <div id="firstNameWrp" class="h-inputwrapper">
                    <span id="spanFirstName">FirstName: </span>
                    <input autocomplete="off" name="firstName" id="firstName" />
                </div>
                <div id="lastNameWrp" class="h-inputwrapper">
                    <span id="spanLashName">LashName: </span>
                    <input autocomplete="off" name="firstName" id="firstName" />
                </div>
                <div id="emailWrp" class="h-inputwrapper">
                    <span id="spanPhone">Phone: </span>
                    <input autocomplete="off" name="firstName" id="firstName" />
                </div>
                <div id="phoneWrp" class="h-inputwrapper">
                    <span id="spanEmail">Email: </span>
                    <input autocomplete="off" name="firstName" id="firstName" />
                </div>
                <div class="g-recaptcha" data-callback="dataCallBack" data-sitekey="<?= $siteKey ?>"></div>
                <div id="formSubmitBtnWrapper">
                    <button id="formSubmitBtn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include './Includes/footer.php'; ?>