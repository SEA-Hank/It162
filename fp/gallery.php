<?php include './Includes/fp-config.php' ?>
<?php include './Includes/header.php'; ?>
<?php
$category = array(
    0 => array(
        "title" => "Bathroom",
        "imgPrefix" => "bathroom",
        "count" => 4
    ),
    1 => array(
        "title" => "Blinds & Window Treatment",
        "imgPrefix" => "window",
        "count" => 3
    ),
    3 => array(
        "title" => "Lighting & Ceiling Fans",
        "imgPrefix" => "lighting",
        "count" => 5
    ),
    4 => array(
        "title" => "Kitchen & Kitchenware",
        "imgPrefix" => "kitchen",
        "count" => 4
    ),
    5 => array(
        "title" => "Lawn & Garden",
        "imgPrefix" => "lawn",
        "count" => 3
    ),
    6 => array(
        "title" => "Paint",
        "imgPrefix" => "paint",
        "count" => 4
    )
);
?>

<section id="gallery">
    <div id="galleryWrapper">
        <?php foreach ($category as $key => $value) { ?>
            <div id="<?= $value["imgPrefix"] ?>" class="galleryItem">
                <p class="item-title"><span><?= $value["title"] ?></span></p>
                <div class="imagesContainer">
                    <?php for ($index = 1; $index <= $value["count"]; $index++) { ?>
                        <div class="imgWrapper">
                            <div class="iterator" img-src-pre="<?= $value["imgPrefix"] ?>" img-index="<?= $index ?>">
                                <span class="iconfont icon-loading"></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php include './Includes/footer.php'; ?>