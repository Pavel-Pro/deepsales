<section class="lessons">
    <div class="wrapper">
        <h2 class="title title__lessons"><?= $s['lessons__title'] ?></h2>
        <div class="lessons__items">
            <div class="lessons__item">
                <span class="solution__stage"><?= $s['lessons_number1'] ?></span>
                <h4 class="solution__item_title"><?= $s['lessons1_title'] ?></h4>
                <ul class="solution-list">
                    <?php $lessons1 = $s['lessons1_block'] ?>
                    <?php if($lessons1) { ?>
                        <?php foreach($lessons1 as $item) { ?>
                            <li class="solution-list__item">
                                <?= $item['lessons1_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="lessons__item">
                <span class="solution__stage"><?= $s['lessons_number2'] ?></span>
                <h4 class="solution__item_title"><?= $s['lessons2_title'] ?></h4>
                <ul class="solution-list">
                    <?php $lessons2 = $s['lessons2_block'] ?>
                    <?php if($lessons2) { ?>
                        <?php foreach($lessons2 as $item) { ?>
                            <li class="solution-list__item">
                                <?= $item['lessons2_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="lessons__item">
                <span class="solution__stage"><?= $s['lessons_number3'] ?></span>
                <h4 class="solution__item_title"><?= $s['lessons3_title'] ?></h4>
                <ul class="solution-list">
                    <?php $lessons3 = $s['lessons3_block'] ?>
                    <?php if($lessons3) { ?>
                        <?php foreach($lessons3 as $item) { ?>
                            <li class="solution-list__item">
                                <?= $item['lessons3_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="lessons__item">
                <span class="solution__stage"><?= $s['lessons_number4'] ?></span>
                <h4 class="solution__item_title"><?= $s['lessons4_title'] ?></h4>
                <ul class="solution-list">
                    <?php $lessons4 = $s['lessons4_block'] ?>
                    <?php if($lessons4) { ?>
                        <?php foreach($lessons4 as $item) { ?>
                            <li class="solution-list__item">
                                <?= $item['lessons4_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="lessons__item">
                <span class="solution__stage"><?= $s['lessons_number5'] ?></span>
                <h4 class="solution__item_title"><?= $s['lessons5_title'] ?></h4>
                <ul class="solution-list">
                    <?php $lessons5 = $s['lessons5_block'] ?>
                    <?php if($lessons5) { ?>
                        <?php foreach($lessons5 as $item) { ?>
                            <li class="solution-list__item">
                                <?= $item['lessons5_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="lessons__item">
                <span class="solution__stage"><?= $s['lessons_number6'] ?></span>
                <ul class="solution-list">
                    <?php $lessons6 = $s['lessons6_block'] ?>
                    <?php if($lessons6) { ?>
                        <?php foreach($lessons6 as $item) { ?>
                            <li class="solution-list__item">
                                <?= $item['lessons6_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <button class="button button__lessons"><?= $s['lessons_button'] ?></button>
        <p class="lessons__text"><?= $s['lessons_text'] ?></p>
    </div>
</section>