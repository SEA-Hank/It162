<?php include 'common/header.php'; ?>

<!-- START LEFT COL -->
<section class="main-content">
    <div class="main-left">


        <div id="clientQuestionnaire">
            <?php
            include '../includes/contact_include.php'; #site keys & code here
            $toAddress = "horicky7@gmail.com";  //place your/your client's email address here
            $toName = "hank ho"; //place your client's name here
            $website = "it162.seahank.com";  //place NAME of your client's website
            echo loadContact('multiple.php');
            ?>
        </div>
    </div>
    <div class="main-right">
        <h1>Basic website design and development cycle</h1>
        <ul>
            <li><a href="https://www.websitebuilderexpert.com/designing-websites/" target="_blank">How To Design a Website in 8 Simple Steps</a></li>
            <li><a href="https://www.webfx.com/web-design/why-is-web-design-important.html" target="_blank"> Why Is Web Design Important?</a></li>
            <li><a href="https://blog.hubspot.com/marketing/website-redesign-terms" target="_blank"> 38 Essential Website Redesign Terms You Need to Know?</a></li>

        </ul>
    </div>
</section>



<?php include 'common/footer.php'; ?>