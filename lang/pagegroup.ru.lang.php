<?php
defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Info
 */

$L['info_desc'] = 'Собирает страницы в группы';

/**
 * Plugin Config
 */

$L['cfg_category'] = array('Коды категорий', 'Коды категорий, через запятую, в которых нужно страницы объеденить в группы. Если пусто то для всех категорий');
$L['cfg_extrfldnamegroup'] = array('Название экстраполя', 'Экстраполе страниц в которое вносится id страницы и характеристики для группировок по его значению<div id="addextrfd">
<button type="button">Создать указанное экстраполе</button> Если такое экстраполе существует то произойдет его заполнение служебной информацией. То есть кнопку эту нажать рекомендуется в любом случае</div>');
$L['cfg_extrfldnamesforgroup'] = array('Название экстраполей', 'Экстраполя страниц, через запятую, которые используются для сбора страниц в группы по значениям этих полей');

/**
 * Plugin Admin
 */

$L['adm_pag_grp_add_field_hint'] = ' где <b>id</b> - идентификатор заглавной страницы в группе, а <b>field</b> - поле по которому есть отличия и будет переключение в группе<br /><i><ul><li>- Если страницу нужно включить в существующую группу нужно указать и <b>id</b> и <b>field</b>.</li><li>- Если нужно создать группу и эта страница будет заглавной в ней то указать только <b>field</b>.</li><li>- Если страница не принадлежит ни одной группе <b>field</b> и <b>id</b> оставить пустым</li></ul></i>';
$L['adm_pag_grp_this_page'] = ' (эта страница)';
$L['adm_pag_grp_group'] = '<br />Группа: ';
$L['adm_pag_grp_extr_field_ok'] = 'В таблице страниц такое поле уже есть. Все хорошо! Можно зайти на <a href="/admin.php?m=extrafields&n=cot_pages" target="_blank" class="button">страницу настройки</a> и ввести свои актуальные <i>Значения для select...</i>';
$L['adm_pag_grp_extr_field_upd_ok'] = '<br />Заполнение поля служебной информацие прошло успешно - там где нада было проставилось';
$L['adm_pag_grp_extr_field_added'] = 'Экстраполе <b>%s</b> добавлено в таблицу!<br />Зайдите на <a href="/admin.php?m=extrafields&n=cot_pages" target="_blank" class="button">страницу настройки</a> и введите свои <i>Значения для select...</i>';
$L['adm_pag_grp_extr_field_empty'] = 'Вы не указали желаемое имя для экстраполя. Введите его, а потом жмите <button type="button">Создать указанное экстраполе</button>';
$L['adm_pag_grp_extr_field_error'] = 'Ошибка! Экстраполе не добавлено. Зайдите на <a href="/admin.php?m=extrafields&n=cot_pages" target="_blank" class="button">страницу настройки</a> и добавте его вручную';

/**
 * Plugin Body
 */

//$L['pag_grp_help'] = '';