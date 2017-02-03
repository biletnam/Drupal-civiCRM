<?php /* Smarty version 2.6.27, created on 2017-02-01 15:43:35
         compiled from CRM/Case/Form/Activity/OpenCase.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Case/Form/Activity/OpenCase.tpl', 1, false),array('function', 'help', 'CRM/Case/Form/Activity/OpenCase.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['context'] != 'caseActivity'): ?>
  <tr class="crm-case-opencase-form-block-case_type_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['case_type_id']['label']; ?>
<?php echo smarty_function_help(array('id' => "id-case_type",'file' => "CRM/Case/Form/Case.hlp",'activityTypeFile' => $this->_tpl_vars['activityTypeFile']), $this);?>
</td>
    <td><?php echo $this->_tpl_vars['form']['case_type_id']['html']; ?>
</td>
  </tr>
  <tr class="crm-case-opencase-form-block-status_id">
    <td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
</td>
  </tr>
  <tr class="crm-case-opencase-form-block-start_date">
    <td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td>
    <td>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </td>
  </tr>

  <?php if ($this->_tpl_vars['action'] == 4 && $this->_tpl_vars['currentAttachmentURL']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  <?php elseif ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>
    <tr class="crm-activity-form-block-attachment">
      <td colspan="2">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </td>
    </tr>
  <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>