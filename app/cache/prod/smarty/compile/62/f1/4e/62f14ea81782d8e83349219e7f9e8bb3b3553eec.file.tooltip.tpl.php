<?php /* Smarty version Smarty-3.1.19, created on 2017-10-16 21:34:22
         compiled from "/Users/victorcata/Documents/Projects/07 - Mika/prestashop/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130443266659e509be22e758-26470925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f14ea81782d8e83349219e7f9e8bb3b3553eec' => 
    array (
      0 => '/Users/victorcata/Documents/Projects/07 - Mika/prestashop/modules/welcome/views/templates/tooltip.tpl',
      1 => 1507124254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130443266659e509be22e758-26470925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e509be233724_41798898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e509be233724_41798898')) {function content_59e509be233724_41798898($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
