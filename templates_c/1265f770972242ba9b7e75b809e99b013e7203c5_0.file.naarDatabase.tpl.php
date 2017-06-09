<?php
/* Smarty version 3.1.30, created on 2017-06-01 17:15:12
  from "C:\xampp\htdocs\development\krantenwijk\view\naarDatabase.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59302f80dac461_49201708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1265f770972242ba9b7e75b809e99b013e7203c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\development\\krantenwijk\\view\\naarDatabase.tpl',
      1 => 1496330112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59302f80dac461_49201708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset>
    <legend>Naar database <i class="fa fa-caret-down" aria-hidden="true"></i></legend>
    <div class='form-group form-inline togglecontent'>
        <label for="begin">Begin</label>
        &nbsp &nbsp
        <div class='input-group'>
            <input class='form-control' type="number" id="begin" name="begin" min="1" max="52" step="1"
                   required>
        </div>
        &nbsp &nbsp
        <label for="eind">Eind</label>
        &nbsp &nbsp
        <div class='input-group'>
            <input class='form-control' type="number" id="eind" name="eind" min="1" max="52" step="1"
                   required>
        </div>
        &nbsp &nbsp
        <label for="jaar">Jaar</label>
        &nbsp &nbsp
        <div class='input-group'>
            <input class='form-control' type="number" id="jaar" name="jaar" min="2000" max="3000"
                   step="1"
                   value="2017" required>
        </div>
        <br><br>
        <input class='btn btn-info' type='submit' id='send2db' name='send2db' value="Naar database">
    </div>
</fieldset><?php }
}
