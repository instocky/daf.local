<?php /* Smarty version Smarty-3.1.22-dev, created on 2016-07-24 22:41:20
         compiled from "..\views\default\maintable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2889557935d105c3398-81362232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6afb8ef241de587a5d32a5ec484c0f79776335d' => 
    array (
      0 => '..\\views\\default\\maintable.tpl',
      1 => 1469389274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2889557935d105c3398-81362232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.22-dev',
  'unifunc' => 'content_57935d105c7218_05617372',
  'variables' => 
  array (
    'vk7' => 0,
    'vk15' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57935d105c7218_05617372')) {function content_57935d105c7218_05617372($_smarty_tpl) {?><div class="panel panel-default">

  <div class="panel-heading">Panel heading</div>


  <table class="table">
  <tr style="font-weight: bold;">
    <td>Наименование</td>
    <td>Количество</td>
    <td>Цена</td>
    <td>Купить</td>
  </tr>
  <tr style="background-color: lightgray;">
    <td>ip_v6_VK срок 7 дней</td>
    <td style="font-weight: bold; color: blue;"><?php echo $_smarty_tpl->tpl_vars['vk7']->value;?>
</td>
    <td>10 рублей</td>
    <td>Купить</td>
  </tr>
  </tr>
  <tr style="background-color: lightgray;">
    <td>ip_v6_VK срок 15 дней</td>
    <td style="font-weight: bold; color: blue;"><?php echo $_smarty_tpl->tpl_vars['vk15']->value;?>
</td>
    <td>9 рублей</td>
    <td><a href="#">Купить)</a></td>
  </tr>
  </table>
</div>
<?php }} ?>
