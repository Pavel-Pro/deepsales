<section class="package">
    <div class="wrapper">
        <h2 class="title package__title"><?= $s['package__title'] ?></h2>
        <div class="package__items">
            <div class="package__item">
                <span class="package_advice"><?= $s['start__toptitle'] ?></span>
                <h3 class="package__name"><?= $s['start__title'] ?></h3>
                <span class="package__interest"><?= $s['start__undertitle'] ?></span>
                <ul class="package__list">
                    <?php $start = $s['start_package'] ?>
                    <?php if($start) { ?>
                        <?php foreach($start as $item) { ?>
                            <li class="package__paragraph <?php if($item['package_notavailable'] === true) echo 'package__paragraph_not-available' ?>">
                                <?= $item['start_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <span class="package__price"><?= $s['start__price'] ?></span>
                <button class="button package__button"><?= $s['start__button'] ?></button>
            </div>
            <div class="package__item">
                <span class="package_advice"><?= $s['system__toptitle'] ?></span>
                <h3 class="package__name"><?= $s['system__title'] ?></h3>
                <span class="package__interest"><?= $s['system__undertitle'] ?></span>
                <ul class="package__list">
                    <?php $system = $s['system_package'] ?>
                    <?php if($system) { ?>
                        <?php foreach($system as $item) { ?>
                            <li class="package__paragraph <?php if($item['package_notavailable'] === true) echo 'package__paragraph_not-available' ?>">
                                <?= $item['system_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <span class="package__price"><?= $s['system__price'] ?></span>
                <button class="button package__button"><?= $s['system__button'] ?></button>
            </div>
            <div class="package__item">
                <span class="package_advice"><?= $s['master__toptitle'] ?></span>
                <h3 class="package__name"><?= $s['master__title'] ?></h3>
                <span class="package__interest"><?= $s['master__undertitle'] ?></span>
                <ul class="package__list">
                    <?php $master = $s['master_package'] ?>
                    <?php if($master) { ?>
                        <?php foreach($master as $item) { ?>
                            <li class="package__paragraph <?php if($item['package_notavailable'] === true) echo 'package__paragraph_not-available' ?>">
                                <?= $item['master_item'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <span class="package__price"><?= $s['master__price'] ?></span>
                <button class="button package__button"><?= $s['master__button'] ?></button>
            </div>
        </div>
        <div class="package__bottom">
            <div class="guarantees__day"><?= $s['guarantees__day'] ?></div>
            <p class="guarantees__text"><?= $s['package__text'] ?></p>
        </div>
    </div>
</section>