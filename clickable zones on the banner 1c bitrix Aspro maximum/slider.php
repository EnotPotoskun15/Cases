<!-- Начало описания активной картинки на баннере -->
<td class="img <?=($bHasVideo ? 'with_video' : '');?>">
    <?if($bHasVideo):?>
        <div class="video_block">
            <span class="play btn btn-video  <?=(strlen($arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID']) ? $arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID'] : 'btn-default')?>" title="<?=$buttonVideoText?>"></span>
        </div>
    <?elseif($arItem["PREVIEW_PICTURE"]):?>
        <?if(!empty($arItem["PROPERTIES"]["URL_STRING"]["VALUE"])):?>
            <a href="<?=$arItem["PROPERTIES"]["URL_STRING"]["VALUE"]?>" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>>
        <?endif;?>
        <img class="plaxy <?=($bSwiperLazy ? 'swiper-lazy' : '');?>" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" src="<?=($bSwiperLazy ? \Aspro\Functions\CAsproMax::showBlankImg($arItem['PREVIEW_PICTURE']['SRC']) : $arItem['PREVIEW_PICTURE']['SRC']);?>" alt="<?=($arItem['PREVIEW_PICTURE']['ALT'] ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($arItem['PREVIEW_PICTURE']['TITLE'] ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" />
        <?if(!empty($arItem["PROPERTIES"]["URL_STRING"]["VALUE"])):?>
            </a>
        <?endif;?>
    <?endif;?>
<!-- Вставляем наш код перед закрывающим td-->
    <map name="soc">
        <area coords="684, 54, 840, 157" target="_blank" href="https://wa.me/..." alt="WhatsApp">
        <area coords="684, 157, 840, 244" href="https://t.me/..." alt="Telegram">
        <area coords="684, 244, 840, 333" href="https://vk.com/..." alt="Вконтакте">
        <area shape="poly" coords="0, 0, 960, 0, 960, 470, 840, 470, 840, 333, 840, 54, 684, 54, 684, 333, 839, 333, 839, 470, 0, 470" href="/.../" alt="Новость">
    </map>
</td>
