#Кликабельные зоны на баннере#
Необходимо было сделать на баннере кликабельные зоны с сылками на соцсети. Остальная часть баннера должна была вести на страницу новости.

Сайт на 1c bitrix с шаблоном Аспро Максимум

Что и как было сделанно:
- Отмечаем координаты зон. Три прямоугольника для сыслок на соцсети, и один многоугольник для всего остального баннера. Эти координаты и будут нашими <area>;
- В файле /bitrix/components/aspro/com.banners.max/common_files/slider.php находим где описывается картинка. И сразу после неё пишем наш элемент <map>;