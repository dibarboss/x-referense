<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <div class="ref-links">
        <span>Смотрите также:</span>
        <? foreach ($arResult as $item): ?>
            <a href="<?= $item['LINK'] ?>"><?= $item['NAME'] ?></a>,
        <? endforeach; ?>
    </div>
<? endif; ?>
