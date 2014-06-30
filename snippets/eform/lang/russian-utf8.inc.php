<?php
/**
* snippets/eform/english.inc.php
* Russian language file for eForm
* local revision: $Id: russian.inc.php,v 1.0 2007/02/19 yentsun Exp $
*/


$_lang["ef_thankyou_message"] = "<h3>Спасибо!</h3><p>Информация принята.</p>";
$_lang["ef_no_doc"] = "Не найден документ или чанк для шаблона id=";
//$_lang["ef_no_chunk"] = ""; //deprecated
//$_lang["ef_validation_message"] = "<strong>Some errors were detected in your form:</strong><br />";
$_lang["ef_validation_message"] = "<div class=\"errors\"><strong>Некоторые поля заполнены неверно:</strong><br />[+ef_wrapper+]</div>"; //changed
$_lang["ef_required_message"] = " Не были заполнены следующие обязательные поля: {fields}<br />";
$_lang["ef_invalid_number"] = " - неверное число";
$_lang["ef_invalid_date"] = " - неверная дата";
$_lang["ef_invalid_email"] = " - неверный адрес email";
$_lang["ef_upload_exceeded"] = " - превышает максимально допустимый объем.";
$_lang["ef_failed_default"] = "Неверное значение";
$_lang["ef_failed_vericode"] = "Неверный код безопасности.";
$_lang["ef_failed_range"] = "Значение за пределами допустимого диапазона";
$_lang["ef_failed_list"] = "Значение не входит в список допустимых";
$_lang["ef_failed_eval"] = "Значение не прошло проверку";
$_lang["ef_failed_ereg"] = "Значение не прошло проверку";
$_lang["ef_failed_upload"] = "Неверный тип файла.";
$_lang["ef_error_validation_rule"] = "Правило проверки неверное";
$_lang["ef_tamper_attempt"] = "Обнаружена попытка нелегальной операции!";
$_lang["ef_error_formid"] = "Неверный идентификатор формы.";
$_lang["ef_debug_info"] = "Отладочная информация: ";
$_lang["ef_is_own_id"] = "<span class=\"ef-form-error\">Шаблон формы является документом, содержащим вызов формы! Смените шаблон формы.</span> id=";
$_lang["ef_sql_no_result"] = " прошло проверку. <span style=\"color:red;\"> SQL не вернул результата!</span> ";
$_lang['ef_regex_error'] = 'ошибка в регулярном выражении ';
$_lang['ef_debug_warning'] = '<p style="color:red;"><span style="font-size:1.5em;font-weight:bold;">ВНИМАНИЕ - ВКЛЮЧЕНА ОТЛАДКА</span> <br />Убедитесь, что отладка отключена, прежде чем запускать форму на работающем сайте!</p>';
$_lang['ef_mail_abuse_subject'] = 'Обнаружена потенциальная угроза в форме с ИД';
$_lang['ef_mail_abuse_message'] = '<p>Форма на вашем сайте возможно стала объектом атаки злоумышленников. Детали отправленных данных следуют ниже. Подозрительный текст заключен в теги \[..]\.  </p>';
$_lang['ef_mail_abuse_error'] = '<strong>Неверные или небезопасные элементы обнаружены в вашей форме</strong>.';
$_lang['ef_eval_deprecated'] = "Правила #EVAL больше не используются и могут не работать в последующих версиях. Используйте #FUNCTION.";
$_lang['ef_multiple_submit'] = "<p>Данные были УЖЕ успешно отправлены. Нет нужды отправлять данные несколько раз.</p>";
$_lang['ef_submit_time_limit'] = "<p>Данные были УЖЕ успешно отправлены. Повторная отправка данных невозможна втечение ".($submitLimit/60)." минут.</p>";
$_lang['ef_version_error'] = "<strong>Внимание!</strong> Версия сниппета eForm ($version) отличается от inc-файла ($fileVersion). Пожалуйста, убедитесь в том, что версии идентичны.";
?>
