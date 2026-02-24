<section class="faq">
    <div class="wrapper">
        <h2 class="title faq__title"><?= $s['faq__title'] ?></h2>
        <div class="faq__items">
            <?php $faq_item = $s['faq_list'] ?>
            <?php if($faq_item) { ?>
                <?php foreach($faq_item as $item) { ?>
                     <div class="faq__item">
                        <h4 class="faq__question"><?= $item['question'] ?></h4>
                        <p class="faq__answer"><?= $item['answer'] ?></p>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>