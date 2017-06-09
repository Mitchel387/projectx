<?php
/* Smarty version 3.1.30, created on 2017-05-31 14:36:55
  from "C:\xampp\htdocs\development\krantenwijk\view\settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592eb8e7601994_03259175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30bd2dc5b02dbef2fed3294b0c78701690272d71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\development\\krantenwijk\\view\\settings.tpl',
      1 => 1496234214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592eb8e7601994_03259175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <fieldset id="settings">
        <legend>Settings</legend>
        <label for="start">Vanaf week:</label>
        <input name="start" type="number" min="1" max="52" title="start" id="start" placeholder="">
        <label for="weken">Aantal weken:</label>
        <input type="number" min="0" name="weken" title="weken" id="weken" placeholder="">
        <button class="btn btn-primary" type="submit" value="Submit" name="submit">Submit</button>
        <a class="btn btn-success" role="button" href="" onclick="">Opnieuw</a>
    </fieldset>
</div><?php }
}
