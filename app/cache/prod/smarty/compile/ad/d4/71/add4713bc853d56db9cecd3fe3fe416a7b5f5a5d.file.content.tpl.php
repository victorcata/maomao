<?php /* Smarty version Smarty-3.1.19, created on 2017-10-16 21:34:21
         compiled from "/Users/victorcata/Documents/Projects/07 - Mika/prestashop/admin869rcwzek/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449006959e509bde1fcd5-08533465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add4713bc853d56db9cecd3fe3fe416a7b5f5a5d' => 
    array (
      0 => '/Users/victorcata/Documents/Projects/07 - Mika/prestashop/admin869rcwzek/themes/default/template/content.tpl',
      1 => 1507124138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449006959e509bde1fcd5-08533465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e509bde270b9_52252883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e509bde270b9_52252883')) {function content_59e509bde270b9_52252883($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
