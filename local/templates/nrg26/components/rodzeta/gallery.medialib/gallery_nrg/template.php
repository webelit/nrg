<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?php

$galleryKey = implode("_", $arParams["GALLERY_COLLECTIONS"]);

?>

<div class="rodzeta-gallery">

  <?php foreach ($arResult["ITEMS"] as $item) { ?>

    <div class="rodzeta-gallery-item">
    <a href="<?= $item["PATH"] ?>" class="fancybox" data-fancybox="rodzeta-gallery-<?= $galleryKey ?>" title="<?= htmlspecialchars($item["DESCRIPTION"]) ?>">
      <img src="<?= $item["THUMB_PATH"] ?>"></a>
    </a>
    </div>

  <?php } ?>

</div>
