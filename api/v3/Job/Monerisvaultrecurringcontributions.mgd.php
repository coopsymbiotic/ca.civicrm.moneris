<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 =>
  array (
    'name' => 'Cron:Job.Monerisvaultrecurringcontributions',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'Moneris Recurring Contributions Daily Auto-Generate using Vault',
      'description' => 'Process due recurring Moneris contributions using Vault',
      'run_frequency' => 'Daily',
      'api_entity' => 'Job',
      'api_action' => 'Monerisvaultrecurringcontributions',
      'parameters' => '',
      'is_active' => 0,
    ),
  ),
);
