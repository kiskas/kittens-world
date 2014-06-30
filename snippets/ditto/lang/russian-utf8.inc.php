<?php

/**
 * Filename:       assets/snippets/ditto/russian.inc.php
 * Function:       Default English language file for Ditto.
 * Author:         modx.ru team
 * Date:           2006/08/13
 * Version:        1.0.2
 * MODx version:   0.9.2.1
*/

// NOTE: New language keys should added at the bottom of this page

$_lang['file_does_not_exist'] = " не существует. Пожалуйста, проверьте файл.";

$_lang['default_template'] = '
    <div class="ditto_summaryPost">
        <h3><a href="[~[+id+]~]">[+title+]</a></h3>
        <div>[+summary+]</div>
        <p>[+link+]</p>
        <div style="text-align:right;">Автор: <strong>[+author+]</strong> Дата: [+date+]</div>
    </div>
';

$_lang['blank_tpl'] = " пуст или вы допустили ошибку в имени чанка.";

$_lang['missing_placeholders_tpl'] = 'В одном из шаблонов (чанков) Ditto недостает подстановщиков, проверьте следующий шаблон: <br /><br /><hr /><br /><br />';

$_lang['missing_placeholders_tpl_2'] = '<br /><br /><hr /><br />';

$_lang['default_splitter'] = "<!-- splitter -->";

$_lang['more_text'] = "далее...";

$_lang['no_entries'] = '<p>Записей не найдено.</p>';

$_lang['date_format'] = "%d-%b-%y %H:%M";

$_lang['archives'] = "Архив";

$_lang['prev'] = "&lt; Предыдущая";

$_lang['next'] = "Следующая &gt;";

$_lang['button_splitter'] = "|";

$_lang['default_copyright'] = "[(site_name)] 2006";	

$_lang['rss_lang'] = "ru";

$_lang['debug_summarized'] = "Число выводимых записей (summarize):";

$_lang['debug_returned'] = "<br />Предположительно всего возвращенных записей:";

$_lang['debug_retrieved_from_db'] = "Всего в БД:";

$_lang['debug_sort_by'] = "Сортировать по (sortBy):";

$_lang['debug_sort_dir'] = "Порядок сортировки (sortDir):";

$_lang['debug_start_at'] = "Начать с";

$_lang['debug_stop_at'] = "закончить на";

$_lang['debug_out_of'] = "из";

$_lang['debug_document_data'] = "Данные документа ";

$_lang['default_archive_template'] = "<a href=\"[~[+id+]~]\">[+title+]</a> (<span class=\"ditto_date\">[+date+]</span>)";

$_lang['invalid_class'] = "Класс Ditto неверный. Проверьте класс.";

// New language key added 2-July-2006 to 5-July-2006

// Keys deprecated : $_lang['api_method'] and $_lang['GetAllSubDocs_method'] 

$_lang['tvs'] = "Доп. параметры (TVs):";

$_lang['api'] = "Используется MODx 0.9.2.1 API";

?>