<section id="footer">
    <div id="footerWrapper">
        <div id="majorInfo">
            <img class="imgclick" src="./images/logo.png">
            <div>
                9020 SE 43rd St Mercer Island, WA 98040
            </div>
            <div>
                &copy; <?= date('Y') ?> Wolf Construction All Rights Reserved.
            </div>
            <div>
                <a class="valid" href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
                <a class="valid" href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
            </div>
        </div>
        <div id="footerMenu" class="footerInfo">
            <p>Menus</p>
            <ul>
                <?php foreach ($navList as $key => $value) { ?>
                    <li><a href="./<?= $value ?>"><?= $key ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="footerInfo">
            <p>Quick Contact</p>
            <ul>
                <li><span class="iconfont icon-phone1">+12069605680</span></li>
                <li><span class="iconfont icon-email-fill">HORICKY7@GMAIL.COM</span></li>
                <li><span class="iconfont icon-home-fill"> 9020 SE 43rd St Mercer Island, WA 98040</span></li>
            </ul>
        </div>
    </div>
</section>
</body>
<script src="./js/index.js" type="text/javascript"></script>
<?php
if ($showMap) { ?>
    <script src="./js/map.js" type="text/javascript"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1hC8e4sMbFwGLHj0jHPsSGKPbxxWjCVw&callback=initMap">
    </script>
<?php } ?>


<?php if ($showReCAPTCHA) { ?>
    <script src="./js/contact.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php } ?>

</html>