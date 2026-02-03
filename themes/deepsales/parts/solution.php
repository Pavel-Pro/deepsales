<section class="solution" id="solution">
        <div class="wrapper">
            <h2 class="title title__solution"><?= $s['solution__title'] ?></h1>
            <div class="solution__items">
                <div class="solution__item">
                    <div class="solution__item_top">
                        <span class="solution__stage"><?= $s['solution__etap1'] ?></span>
                        <h4 class="solution__item_title"><?= $s['solution__block_title'] ?></h4>
                    </div>
                    <ul class="solution-list">
                        <?php $solution_etap1 = $s['solution_etap1'] ?>
                        <?php if($solution_etap1) { ?>
                            <?php foreach($solution_etap1 as $item) { ?>
                                <li class="solution-list__item">
                                    <?= $item['solution_etap1_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <li class="solution-list__item">
                            <span class="solution-sublist__title"><?= $s['solution_result_title'] ?></span>
                            <ul class="solution-sublist">
                                 <?php $solution_result = $s['solution_result'] ?>
                                <?php if($solution_result) { ?>
                                    <?php foreach($solution_result as $item) { ?>
                                        <li class="solution-sublist__item">
                                            <?= $item['solution_result_item'] ?>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="solution__item">
                    <div class="solution__item_top">
                        <span class="solution__stage"><?= $s['solution__etap2'] ?></span>
                        <h4 class="solution__item_title"><?= $s['solution__block_title2'] ?></h4>
                        <span class="subtitle subtitle__solution_item">
                            <?= $s['solution__block_undertitle2'] ?>
                        </span>
                    </div>
                    <ul class="solution-list">
                        <?php $solution_etap2 = $s['solution_etap2'] ?>
                        <?php if($solution_etap2) { ?>
                            <?php foreach($solution_etap2 as $item) { ?>
                                <li class="solution-list__item">
                                    <?= $item['solution_etap2_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
                <div class="solution__item">
                    <div class="solution__item_top">
                        <span class="solution__stage"><?= $s['solution__etap3'] ?></span>
                        <h4 class="solution__item_title"><?= $s['solution__block_title3'] ?></h4>
                        <span class="subtitle subtitle__solution_item">
                            <?= $s['solution__block_undertitle3'] ?>
                        </span>
                    </div>
                    <ul class="solution-list">
                        <?php $solution_etap3 = $s['solution_etap3'] ?>
                        <?php if($solution_etap3) { ?>
                            <?php foreach($solution_etap3 as $item) { ?>
                                <li class="solution-list__item">
                                    <?= $item['solution_etap3_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <button class="button solution__button callform"><?= $s['solution__btn'] ?></button>
        </div>  
    </section>