<?php /* Smarty version Smarty-3.1.19, created on 2017-10-16 22:00:30
         compiled from "/Users/victorcata/Documents/Projects/07 - Mika/prestashop/admin869rcwzek/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158250309459e50fdef0f434-16082110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0255f23975e728022322ad72ad89a1c13e5311' => 
    array (
      0 => '/Users/victorcata/Documents/Projects/07 - Mika/prestashop/admin869rcwzek/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1507124138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158250309459e50fdef0f434-16082110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e50fdf00aeb5_54188566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e50fdf00aeb5_54188566')) {function content_59e50fdf00aeb5_54188566($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
