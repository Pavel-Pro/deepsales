    <section class="problem">
        <div class="wrapper">
            <h2 class="title title__problem"><?= $s['problem_title'] ?></h1>
            <span class="subtitle subtitle__problem"><?= $s['problem_text'] ?></span>
            <div class="problem-lists">
                <div class="problem-item">
                    <h3 class="title-list"><?= $s['problem_block_title1'] ?></h3>
                    <ul class="problem__list">
                        <?php $problem_owner = $s['problem_owner']; ?>
                        <?php if($problem_owner) { ?>
                            <?php foreach($problem_owner as $item) { ?>
                                <li class="problem-list__item">
                                    <?= $item['problem_owner_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
                <div class="problem-item">
                    <h3 class="title-list"><?= $s['problem__block_title2'] ?></h3>
                    <ul class="problem__list">
                        <?php $problem_manager = $s['problem_manager']; ?>
                        <?php if($problem_manager) { ?>
                            <?php foreach($problem_manager as $item) { ?>
                                <li class="problem-list__item">
                                    <?= $item['problem_manager_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <button class="button button__problem callform"><?= $s['problem__btn'] ?></button>
        </div>
    </section>