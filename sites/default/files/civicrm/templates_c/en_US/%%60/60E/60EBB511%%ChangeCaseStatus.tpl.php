<?php /* Smarty version 2.6.27, created on 2017-02-01 16:32:34
         compiled from CRM/Case/Form/Activity/ChangeCaseStatus.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Case/Form/Activity/ChangeCaseStatus.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>   <div class="crm-block crm-form-block crm-case-changecasestatus-form-block">
    <tr class="crm-case-changecasestatus-form-block-case_status_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['case_status_id']['label']; ?>
</td>
  <td><?php echo $this->_tpl_vars['form']['case_status_id']['html']; ?>
</td>
    </tr>
    <?php if ($this->_tpl_vars['groupTree']): ?>
        <tr>
            <td colspan="2"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array('noPostCustomButton' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        </tr>
    <?php endif; ?>
   </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>