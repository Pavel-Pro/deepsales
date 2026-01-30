<section class="effect">
        <div class="wrapper">
            <h2 class="title title__effect"><?= $s['effect__title'] ?></h2>
            <div class="effect__container">
                <h4 class="effect__items_title"><?= $s['effect__title_business'] ?></h4>
                <div class="effect__items effect__business">
                    <?php $effect__business = $s['effect__business'] ?>
                    <?php if($effect__business) { ?>
                        <?php foreach($effect__business as $item) { ?>
                            <div class="effect__item">
                                <h5 class="effect__item_title"><?= $item['for_business_title'] ?></h5>
                                <p class="effect__item_text"><?= $item['for_business_text'] ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <h4 class="effect__items_title"><?= $s['effect__title_team'] ?></h4>
                <div class="effect__items effect__team">
                    <?php $effect__team = $s['effect__team'] ?>
                    <?php if($effect__team) { ?>
                        <?php foreach($effect__team as $item) { ?>
                            <div class="effect__item">
                                <h5 class="effect__item_title"><?= $item['for_team_title'] ?></h5>
                                <p class="effect__item_text"><?= $item['for_team_text'] ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
             <button class="button effect__button callform"><?= $s['effect__btn'] ?></button>
        </div>
        <div class="steps">
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>
    </section>