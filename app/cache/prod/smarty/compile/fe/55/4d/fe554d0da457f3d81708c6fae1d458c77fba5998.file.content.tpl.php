<?php /* Smarty version Smarty-3.1.19, created on 2017-10-16 22:00:31
         compiled from "/Users/victorcata/Documents/Projects/07 - Mika/prestashop/admin869rcwzek/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191579324759e50fdf07e968-95497203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe554d0da457f3d81708c6fae1d458c77fba5998' => 
    array (
      0 => '/Users/victorcata/Documents/Projects/07 - Mika/prestashop/admin869rcwzek/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1507124138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191579324759e50fdf07e968-95497203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e50fdf08bd85_18144259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e50fdf08bd85_18144259')) {function content_59e50fdf08bd85_18144259($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
