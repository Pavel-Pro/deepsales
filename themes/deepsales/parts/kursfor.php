<section class="kursfor">
    <div class="wrapper">
        <h2 class="title title__kursfor"><?= $s['kursfor_title'] ?></h2>
        <div class="kursfor__items">
            <?php $kursfor_block = $s['kursfor_block'] ?>
            <?php if($kursfor_block) { ?>
                <?php foreach($kursfor_block as $item) { ?>
                     <div class="kursfor__item">
                        <span class="forposition"><?= $item['kursfor_position'] ?></span>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <p class="kursfor__text"><?= $s['kursfor__text'] ?></p>
    </div>
</section>