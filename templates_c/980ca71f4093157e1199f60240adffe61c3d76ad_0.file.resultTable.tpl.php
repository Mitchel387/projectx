<?php
/* Smarty version 3.1.30, created on 2017-06-01 17:15:12
  from "C:\xampp\htdocs\development\krantenwijk\view\resultTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59302f80d61466_98084928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '980ca71f4093157e1199f60240adffe61c3d76ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\development\\krantenwijk\\view\\resultTable.tpl',
      1 => 1496330112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59302f80d61466_98084928 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    document.getElementById("settings").style.display = "none";
<?php echo '</script'; ?>
>

<div class='form-group'></div>
<fieldset>
<legend>Resultaat <i class="fa fa-caret-down" aria-hidden="true"></i></legend>

    <div class="panel panel-default togglecontent">
        <table class='table table-bordered form-inline'>
            <thead>
            <tr>
                <th>Naam</th>
                <th>Bedrag</th>
            </tr>
            </thead>
            <tr>
                <td>Melvin</td>
                <td>
                    <input class='form-control' type="number" step="0.01" placeholder="0.00" id="name1"
                           name="name1" readonly>
                </td>
            </tr>
            <tr>
                <td>Bart</td>
                <td><input class='form-control' type="number" step="0.01" placeholder="0.00" id="name2"
                           name="name2" readonly></td>
            </tr>
            <tr>
                <td>Totaal</td>
                <td><input class='form-control' type="number" step="0.01" placeholder="0.00" id="total"
                           name="total" readonly required></td>
            </tr>
        </table>

    </div>

</fieldset><?php }
}
