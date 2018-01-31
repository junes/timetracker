<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

// Note: escape apostrophes with THREE backslashes, like here:  choisir l\\\'option.
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

// Note to translators: Please use proper capitalization rules for your language.

$i18n_language = 'Português';
$i18n_months = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Augosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
$i18n_weekdays = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
$i18n_weekdays_short = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
// format mm/dd
$i18n_holidays = array('01/01', '02/24', '04/10', '04/12', '04/25', '05/01', '06/10', '06/11', '08/15', '10/05', '01/11', '12/01', '12/08', '12/25');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Login',
'menu.logout' => 'Logout',
// TODO: translate the following.
// 'menu.forum' => 'Forum',
'menu.help' => 'Ajuda',
// TODO: translate the following.
// 'menu.create_team' => 'Create Team',
'menu.profile' => 'Perfil',
'menu.time' => 'Tempo',
// TODO: translate the following.
// 'menu.expenses' => 'Expenses',
'menu.reports' => 'Relatórios',
// TODO: translate the following.
'menu.charts' => 'Charts',
'menu.projects' => 'Projetos',
// TODO: translate the following.
// 'menu.tasks' => 'Tasks',
// 'menu.users' => 'Users',
// 'menu.teams' => 'Teams',
// 'menu.export' => 'Export',
// 'menu.clients' => 'Clients',
'menu.options' => 'Opções',

// Footer - strings on the bottom of most pages.
// TODO: translate the following.
// 'footer.contribute_msg' => 'You can contribute to Time Tracker in different ways.',
// 'footer.credits' => 'Credits',
// 'footer.license' => 'License',
// 'footer.improve' => 'Contribute', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
// TODO: translate the following.
// 'error.access_denied' => 'Access denied.',
// 'error.sys' => 'System error.',
// 'error.db' => 'Database error.',
// 'error.field' => 'Incorrect "{0}" data.',
// 'error.empty' => 'Field "{0}" is empty.',
// 'error.not_equal' => 'Field "{0}" is not equal to field "{1}".',
// 'error.interval' => 'Field "{0}" must be greater than "{1}".',
// 'error.project' => 'Select project.',
// 'error.task' => 'Select task.',
// 'error.client' => 'Select client.',
// 'error.report' => 'Select report.',
// 'error.record' => 'Select record.',
// 'error.auth' => 'Incorrect login or password.',
// 'error.user_exists' => 'User with this login already exists.',
// 'error.project_exists' => 'Project with this name already exists.',
// 'error.task_exists' => 'Task with this name already exists.',
// 'error.client_exists' => 'Client with this name already exists.',
// 'error.invoice_exists' => 'Invoice with this number already exists.',
// 'error.no_invoiceable_items' => 'There are no invoiceable items.',
// 'error.no_login' => 'No user with this login.',
// 'error.no_teams' => 'Your database is empty. Login as admin and create a new team.',
// 'error.upload' => 'File upload error.',
// 'error.range_locked' => 'Date range is locked.',
// 'error.mail_send' => 'Error sending mail.',
// 'error.no_email' => 'No email associated with this login.',
// 'error.uncompleted_exists' => 'Uncompleted entry already exists. Close or delete it.',
// 'error.goto_uncompleted' => 'Go to uncompleted entry.',
// 'error.overlap' => 'Time interval overlaps with existing records.',
// 'error.future_date' => 'Date is in future.',

// Labels for buttons.
'button.login' => 'Login',
'button.now' => 'Hoje',
'button.save' => 'Salvar',
// TODO: translate the following.
// 'button.copy' => 'Copy',
'button.cancel' => 'Cancelar',
'button.submit' => 'Submeter',
// TODO: translate the following.
// 'button.add_user' => 'Add user',
'button.add_project' => 'Adicionar projeto',
// TODO: translate the following.
// 'button.add_task' => 'Add task',
// 'button.add_client' => 'Add client',
// 'button.add_invoice' => 'Add invoice',
// 'button.add_option' => 'Add option',
'button.add' => 'Adicionar',
// TODO: translate the following.
// 'button.generate' => 'Generate',
// 'button.reset_password' => 'Reset password',
'button.send' => 'Enviar',
'button.send_by_email' => 'Enviar por e-mail',
// TODO: translate the following.
// 'button.create_team' => 'Create team',
// 'button.export' => 'Export team',
// 'button.import' => 'Import team',
// 'button.close' => 'Close',
// 'button.stop' => 'Stop',

// Labels for controls on forms. Labels in this section are used on multiple forms.
// TODO: translate the following.
// 'label.team_name' => 'Team name',
// 'label.address' => 'Address',
// 'label.currency' => 'Currency',
// 'label.manager_name' => 'Manager name',
// 'label.manager_login' => 'Manager login',
// 'label.person_name' => 'Name',
// 'label.thing_name' => 'Name',
// 'label.login' => 'Login',
'label.password' => 'Senha',
'label.confirm_password' => 'Confirme a senha',
'label.email' => 'E-mail',
// TODO: translate the following.
// 'label.cc' => 'Cc',
// 'label.bcc' => 'Bcc',
'label.subject' => 'Assunto',
// TODO: translate the following.
// 'label.date' => 'Date',
// 'label.start_date' => 'Start date',
// 'label.end_date' => 'End date',
// 'label.user' => 'User',
// 'label.users' => 'Users',
// 'label.client' => 'Client',
// 'label.clients' => 'Clients',
// 'label.option' => 'Option',
// 'label.invoice' => 'Invoice',
// 'label.project' => 'Project',
// 'label.projects' => 'Projects',
// 'label.task' => 'Task',
// 'label.tasks' => 'Tasks',
// 'label.description' => 'Description',
// 'label.start' => 'Start',
// 'label.finish' => 'Finish',
// 'label.duration' => 'Duration',
// 'label.note' => 'Note',
// 'label.notes' => 'Notes',
// 'label.item' => 'Item',
// 'label.cost' => 'Cost',
// 'label.day_total' => 'Day total',
// 'label.week_total' => 'Week total',
// 'label.month_total' => 'Month total',
// 'label.today' => 'Today',
// 'label.total_hours' => 'Total hours',
// 'label.total_cost' => 'Total cost',
// 'label.view' => 'View',
// 'label.edit' => 'Edit',
'label.delete' => 'Apagar',
// TODO: translate the following.
// 'label.configure' => 'Configure',
// 'label.select_all' => 'Select all',
// 'label.select_none' => 'Deselect all',
// 'label.day_view' => 'Day view',
// 'label.week_view' => 'Week view',
// 'label.id' => 'ID',
// 'label.language' => 'Language',
// 'label.decimal_mark' => 'Decimal mark',
// 'label.date_format' => 'Date format',
// 'label.time_format' => 'Time format',
// 'label.week_start' => 'First day of week',
// 'label.comment' => 'Comment',
// 'label.status' => 'Status',
// 'label.tax' => 'Tax',
// 'label.subtotal' => 'Subtotal',
// 'label.total' => 'Total',
// 'label.client_name' => 'Client name',
// 'label.client_address' => 'Client address',
// 'label.or' => 'or',
// 'label.error' => 'Error',
// 'label.ldap_hint' => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
// 'label.required_fields' => '* - required fields',
// 'label.on_behalf' => 'on behalf of',
// 'label.role_manager' => '(manager)',
// 'label.role_comanager' => '(co-manager)',
// 'label.role_admin' => '(administrator)',
// 'label.page' => 'Page',
// 'label.condition' => 'Condition',
// 'label.yes' => 'yes',
// 'label.no' => 'no',
// Labels for plugins (extensions to Time Tracker that provide additional features).
// TODO: translate the following.
// 'label.custom_fields' => 'Custom fields',
// 'label.monthly_quotas' => 'Monthly quotas',
// 'label.type' => 'Type',
// 'label.type_dropdown' => 'dropdown',
// 'label.type_text' => 'text',
// 'label.required' => 'Required',
// 'label.fav_report' => 'Favorite report',
// 'label.cron_schedule' => 'Cron schedule',
// 'label.what_is_it' => 'What is it?',
// 'label.expense' => 'Expense',
// 'label.quantity' => 'Quantity',
// 'label.paid_status' => 'Paid status',
// 'label.paid' => 'Paid',
// 'label.mark_paid' => 'Mark paid',

// Form titles.
'title.login' => 'Login',
// TODO: translate the following.
// 'title.teams' => 'Teams',
// 'title.create_team' => 'Creating Team',
// 'title.edit_team' => 'Editing Team',
// 'title.delete_team' => 'Deleting Team',



// TODO: refactoring ongoing down from here.

// "form.filter.project" => 'project',
// "form.filter.filter" => 'favorite report',
// "form.filter.filter_new" => 'save as favorite',
// "form.filter.filter_confirm_delete" => 'are you sure you want to delete this favorite report?',

// password reminder form attributes
"form.fpass.title" => 'enviar senha',
// Note to translators: "form.fpass.login" => 'e-mail', // email has been changed to login
"form.fpass.send_pass_str" => 'senha foi enviada',
"form.fpass.send_pass_subj" => 'Sua senha do Anuko Time Tracker',
// Note to translators: the strings below are missing and must be added and translated
// "form.fpass.send_pass_body" => "Dear User,\n\nSomeone, possibly you, requested your Anuko Time Tracker password reset. Please visit this link if you want to reset your password.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit https://www.anuko.com for more information.\n\n",
// "form.fpass.reset_comment" => "to reset your password please type it in and click on save",

// administrator form
// Note to translators: the strings below are missing and must be added and translated 
// "form.admin.title" => 'administrator',
// "form.admin.duty_text" => 'create a new team by creating a new team manager account.<br>you can also import team data from an xml file from another Anuko Time Tracker server (no login collisions are allowed).',

// "form.admin.change_pass" => 'change password of administrator account',
// "form.admin.profile.title" => 'teams',
// "form.admin.profile.noprofiles" => 'your database is empty. login as admin and create a new team.',
// "form.admin.profile.comment" => 'delete team',
// "form.admin.profile.th.id" => 'id',
// "form.admin.profile.th.name" => 'name',
// "form.admin.profile.th.edit" => 'edit',
// "form.admin.profile.th.del" => 'delete',
// "form.admin.profile.th.active" => 'active',
"form.admin.options" => 'opções',
// "form.admin.custom_date_format" => "date format",
// "form.admin.custom_time_format" => "time format",
// "form.admin.start_week" => "first day of week",

// my time form attributes
"form.mytime.title" => 'adicionar período',
// Note to translators: the strings below must be translated
// "form.mytime.edit_title" => 'editing time record',
// "form.mytime.del_str" => 'deleting time record',
// "form.mytime.time_form" => ' (hh:mm)',
"form.mytime.date" => 'data',
"form.mytime.project" => 'projeto',
"form.mytime.activity" => 'atividade',
"form.mytime.start" => 'início',
"form.mytime.finish" => 'fim',
"form.mytime.duration" => 'duração',
"form.mytime.note" => 'anotação',
// Note to translators: the string below must be translated
// "form.mytime.behalf" => 'daily work for',
"form.mytime.daily" => 'trabalho diário',
"form.mytime.total" => 'horas totais: ',
"form.mytime.th.project" => 'projeto',
"form.mytime.th.activity" => 'actividade',
"form.mytime.th.start" => 'início',
"form.mytime.th.finish" => 'finish',
"form.mytime.th.duration" => 'duração',
"form.mytime.th.note" => 'fim',
"form.mytime.th.edit" => 'editar',
"form.mytime.th.delete" => 'apagar',
"form.mytime.del_yes" => 'o período registrado foi apagado com sucesso',
// Note to translators: the strings below are missing and must be added and translated 
// "form.mytime.no_finished_rec" => 'this record was saved with only start time. it is not an error. logout if you need to.',
// "form.mytime.billable" => 'billable',
// "form.mytime.warn_tozero_rec" => 'this time record must be deleted because this time period is locked',
// "form.mytime.uncompleted" => 'uncompleted',

// profile form attributes
// Note to translators: we need a more accurate translation of form.profile.create_title
"form.profile.create_title" => 'criar nova conta de gerência',
"form.profile.edit_title" => 'editando perfil',
"form.profile.name" => 'nome',
// Note to translators: the string below is missing and must be added and translated 
// "form.profile.login" => 'login',

// Note to translators: the strings below are missing and must be added and translated 
// "form.profile.showchart" => 'show pie charts',
// "form.profile.lang" => 'language',
// "form.profile.custom_date_format" => "date format",
// "form.profile.custom_time_format" => "time format",
// "form.profile.default_format" => "(default)",
// "form.profile.start_week" => "first day of week",

// people form attributes
"form.people.ppl_str" => 'pessoas',
"form.people.createu_str" => 'adicionar novo usuário',
"form.people.edit_str" => 'editando usuário',
"form.people.del_str" => 'apagando usuário',
"form.people.th.name" => 'nome',
// Note to translators: "form.people.th.login" => 'e-mail', // email has been changed to login
"form.people.th.role" => 'regra',
"form.people.th.edit" => 'editar',
"form.people.th.del" => 'apagar',
"form.people.th.status" => 'status',
// Note to translators: the strings below are missing and must be added and translated 
// "form.people.th.project" => 'project',
// "form.people.th.rate" => 'rate',
"form.people.manager" => 'gerente',
// Note to translators: the string below is missing and must be added and translated 
// "form.people.comanager" => 'comanager',
"form.people.empl" => 'usuário',
"form.people.name" => 'nome',
// Note to translators: the string below is missing and must be added and translated 
// "form.people.login" => 'login',

"form.people.rate" => 'hourly rate',
// Note to translators: the strings below are missing and must be added and translated 
// "form.people.comanager" => 'co-manager',
// "form.people.projects" => 'projects',

// projects form attributes
"form.project.proj_title" => 'projetos',
"form.project.edit_str" => 'editando projeto',
"form.project.add_str" => 'adicionando novo projeto',
"form.project.del_str" => 'apagando projeto',
"form.project.th.name" => 'nome',
"form.project.th.edit" => 'editar',
"form.project.th.del" => 'apagar',
"form.project.name" => 'nome',

// activities form attributes
"form.activity.act_title" => 'atividades',
"form.activity.add_title" => 'adicionando nova atividade',
"form.activity.edit_str" => 'editando atividade',
// Note to translators: the string below must be translated
// "form.activity.del_str" => 'deleting activity',
"form.activity.name" => 'nome',
"form.activity.project" => 'project',
"form.activity.th.name" => 'nome',
"form.activity.th.project" => 'project',
"form.activity.th.edit" => 'editar',
"form.activity.th.del" => 'apagar',

// report attributes
"form.report.title" => 'relatórios',
"form.report.from" => 'data inicial',
"form.report.to" => 'data final',
// Note to translators: the strings below must be translated
// "form.report.groupby_user" => 'user',
// "form.report.groupby_project" => 'project',
// "form.report.groupby_activity" => 'activity',
"form.report.duration" => 'duração',
"form.report.start" => 'início',
"form.report.activity" => 'atividade',
// Note to translators: the string below must be translated
// "form.report.show_idle" => 'show idle',
"form.report.finish" => 'fim',
"form.report.note" => 'anotação',
"form.report.project" => 'projeto',
// Note to translators: the string below is missing and must be added and translated 
// "form.report.totals_only" => 'totals only',
"form.report.total" => 'horas totais',
"form.report.th.empllist" => 'usuário',
// Note to translators: the strings below must be translated
// "form.report.th.date" => 'data',
// "form.report.th.project" => 'project',
// "form.report.th.activity" => 'activity',
// "form.report.th.start" => 'start',
// "form.report.th.finish" => 'finish',
// "form.report.th.duration" => 'duration',
// "form.report.th.note" => 'note',

// mail form attributes
"form.mail.from" => 'de',
"form.mail.to" => 'para',
"form.mail.comment" => 'comentário',
"form.mail.above" => 'enviar este relatório por e-mail',
// Note to translators: the strings below must be translated
// "form.mail.footer_str" => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="https://www.anuko.com">www.anuko.com</a> for more information.',
// "form.mail.sending_str" => '<b>the message has been sent</b>',

// invoice attributes
// Note to translators: the strings below must be translated
// "form.invoice.title" => 'invoice',
// "form.invoice.caption" => 'invoice',
// "form.invoice.above" => 'additional information for invoice',
// "form.invoice.select_cust" => 'select client',
// "form.invoice.fillform" => 'fill the fields',
// "form.invoice.date" => 'invoice date',
// "form.invoice.number" => 'invoice number',
// "form.invoice.tax" => 'tax',
// "form.invoice.comment" => 'comment ',
// "form.invoice.th.username" => 'person',
// "form.invoice.th.time" => 'hours',
// "form.invoice.th.rate" => 'rate',
// "form.invoice.th.summ" => 'amount',
// "form.invoice.subtotal" => 'subtotal',
// "form.invoice.customer" =>'customer',
// Note to translators: the strings below must be translated
// "form.invoice.mailinv_above" => 'send this invoice by e-mail',
// "form.invoice.sending_str" => '<b>invoice has been sent</b>',

// Note to translators: the strings below are missing and must be added and translated 
// "form.migration.zip" => 'compression',
// "form.migration.file" => 'select file',
// "form.migration.import.title" => 'import data',
// "form.migration.import.success" => 'import completed successfully',
// "form.migration.import.text" => 'import team data from an xml file',
// "form.migration.export.title" => 'export data',
// "form.migration.export.success" => 'export completed successfully',
// "form.migration.export.text" => 'you can export all team data into an xml file. this could be useful if you are migrating data to your own server.',
// "form.migration.compression.none" => 'none',
// "form.migration.compression.gzip" => 'gzip',
// "form.migration.compression.bzip" => 'bzip',

// "form.client.title" => 'clients',
// "form.client.add_title" => 'add client',
// "form.client.edit_title" => 'edit client',
// "form.client.del_title" => 'delete client',
// "form.client.th.name" => 'name',
// "form.client.th.edit" => 'edit',
// "form.client.th.del" => 'delete',
// "form.client.name" => 'name',
// "form.client.tax" => 'tax',
// "form.client.comment" => 'comment ',

// miscellaneous strings
"forward.forgot_password" => 'esqueceu a senha?',
// Note to translators: the strings below must be translated 
// "forward.edit" => 'edit',
// "forward.delete" => 'delete',
// Note to translators: the string below must be translated 
// "forward.tocsvfile" => 'export data to .csv file',
// Note to translators: the strings below are missing and must be added and translated 
// "forward.toxmlfile" => 'export data to .xml file',
// "forward.geninvoice" => 'generate invoice',
// "forward.change" => 'configure clients',

// strings inside contols on forms
"controls.select.project" => '--- selecione projeto ---',
"controls.select.activity" => '--- selecione atividade ---',
// Note to translators: the strings below are missing and must be added and translated 
// "controls.select.client" => '--- select client ---',
// "controls.project_bind" => '--- all ---',
// "controls.all" => '--- all ---',
// "controls.notbind" => '--- no ---',
"controls.per_tm" => 'este mês',
"controls.per_lm" => 'último mês',
"controls.per_tw" => 'esta semana',
"controls.per_lw" => 'última semana',
// Note to translators: the strings below are missing and must be added and translated 
// "controls.per_td" => 'this day',
// "controls.per_at" => 'all time',
// "controls.per_ty" => 'this year',
"controls.sel_period" => '--- selecione o período de tempo ---',
// Note to translators: the strings below must be translated 
// "controls.sel_groupby" => '--- no grouping ---',
// "controls.inc_billable" => 'billable',
// "controls.inc_nbillable" => 'not billable',
// "controls.default" => '--- default ---',

// labels
// Note to translators: the strings below are missing and must be added and translated 
// "label.chart.title1" => 'activities for user',
// "label.chart.title2" => 'projects for user',
// "label.chart.period" => 'chart for period',

"label.pinfo" => '%s, %s',
"label.pinfo2" => '%s',
"label.pbehalf_info" => '%s %s <b>on behalf of %s</b>',
"label.pminfo" => ' (gerente)',
// Note to translators: the strings below are missing and must be added and translated 
// "label.pcminfo" => ' (co-manager)',
// "label.painfo" => ' (administrator)',
"label.time_noentry" => 'sem registro',
"label.today" => 'today',
"label.req_fields" => '* campos obrigatórios',
// Note to translators: the strings below must be translated 
// "label.sel_project" => 'select project',
// "label.sel_activity" => 'select activity',
"label.sel_tp" => 'selecione o período de tempo',
"label.set_tp" => 'ou selecionar datas',
"label.fields" => 'exibir campos',
// Note to translators: the strings below must be translated
// "label.group_title" => 'group by',
// "label.include_title" => 'include records',
// "label.inv_str" => 'invoice',
//" label.sel_all" => 'select all',
// "label.sel_none" => 'deselect all',
// "label.or" => 'or',
// "label.disable" => 'disable',
// "label.enable" => 'enable',
// "label.filter" => 'filter',
// "label.timeweek" => 'weekly total',
// "label.hrs" => 'hrs',
// "label.errors" => 'errors',
// "label.ldap_hint" => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
// "label.calendar_today" => 'today',
// "label.calendar_close" => 'close',

// login hello text
// "login.hello.text" => "Anuko Time Tracker is a simple, easy to use, open source time tracking system.",
);
