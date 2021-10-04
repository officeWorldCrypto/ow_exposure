<?php

namespace App\Library;

class LanguagePtBr
{

    static function t($label)
    {
        static $lang = array();

        #language
        $lang['language'] = 'Português do Brasil';

        # Months
        $lang['January'] = 'Janeiro';
        $lang['February'] = 'Fevereiro';
        $lang['March'] = 'Março';
        $lang['April'] = 'Abril';
        $lang['May'] = 'Maio';
        $lang['June'] = 'Junho';
        $lang['July'] = 'Julho';
        $lang['August'] = 'Agosto';
        $lang['September'] = 'Setembro';
        $lang['October'] = 'Outubro';
        $lang['November'] = 'Novembro';
        $lang['December'] = 'Dezembro';

        # Time ago function translate
        $lang['time_ago_just_now']  = 'Agora mesmo';
        $lang['time_ago_minute'] = 'um minuto atrás';
        $lang['time_ago_minutes'] = '%s minutos atrás';
        $lang['time_ago_hour'] = 'uma hora atrás';
        $lang['time_ago_hours'] = '%s horas atrás';
        $lang['time_ago_yesterday'] = 'ontem';
        $lang['time_ago_days'] = '%s dias atrás';
        $lang['time_ago_week'] = 'uma semana atrás';
        $lang['time_ago_weeks'] = '%s semanas atrás';
        $lang['time_ago_month'] = 'um mês atrás';
        $lang['time_ago_months'] = '%s meses atrás';
        $lang['time_ago_year'] = 'um ano atrás';
        $lang['time_ago_years'] = '%s anos atrás';

        #notifications
        $lang['not_event'] = 'Evento começa hoje - %s ...';
        $lang['not_event_public'] = 'Evento público começa hoje - %s ...';
        $lang['not_contract_expiry_reminder'] = 'Lembrete do contrato expirado - %s ...';
        $lang['not_recurring_expense_cron_activity_heading'] = 'Despesas Recorrentes das Atividades de Trabalho Cron';
        $lang['not_recurring_invoices_cron_activity_heading'] = 'Faturas Recorrentes das Atividades de Trabalho Cron';
        $lang['not_recurring_total_renewed'] = 'Total Renovado: %s';
        $lang['not_recurring_expenses_action_taken_from'] = 'Ações tomadas a partir de despesas recorrentes';
        $lang['not_invoice_created'] = 'Fatura Criada:';
        $lang['not_invoice_renewed'] = 'Fatura Renovada:';
        $lang['not_expense_renewed'] = 'Despesa Renovada:';
        $lang['not_invoice_sent_to_customer'] = 'Fatura Enviada para o Cadastro: %s';
        $lang['not_invoice_sent_yes'] = 'Sim';
        $lang['not_invoice_sent_not'] = 'Não';
        $lang['not_action_taken_from_recurring_invoice'] = 'Ações tomadas a partir da fatura recorrente:';
        $lang['not_new_reminder_for'] = 'Novo Lembrete para %s';
        $lang['not_received_one_or_more_messages_lead'] = 'Recebido mais de uma mensagem de e-mail do lead';
        $lang['not_received_lead_imported_email_integration'] = 'Lead Importado do E-mail de Integração';
        $lang['not_lead_imported_attachment'] = 'Anexo importado do e-mail';
        $lang['not_estimate_status_change'] = 'Anexo importado do e-mail';
        $lang['not_estimate_status_updated'] = 'Status do orçamento Atualizado: De: %s para %s';
        $lang['not_goal_message_success'] = 'Parabéns! Nós realizamos a nova meta.<br />Tipo de meta: %s<br />Goal Achievement: %s<br />Total Achievement: %s <br />Start Date: %s <br />End Date: %s';
        $lang['not_assigned_lead_to_you'] = 'lead Atribuído %s para você';
        $lang['not_lead_activity_assigned_to'] = '%s Atribuído para %s';
        $lang['not_lead_activity_attachment_deleted'] = 'Deletar o Anexo';
        $lang['not_lead_activity_status_updated'] = '%s atualizou o status do lead de %s para %s';
        $lang['not_lead_activity_contacted'] = '%s contatou esse lead no %s';
        $lang['not_lead_activity_created'] = '%s criou lead';
        $lang['not_lead_activity_marked_lost'] = 'Marcado como perdido';
        $lang['not_lead_activity_unmarked_lost'] = 'Desmarcado como perdido';
        $lang['not_lead_activity_marked_junk'] = 'Marcado como lixo';
        $lang['not_lead_activity_unmarked_junk'] = 'Desmarcado como lixo';
        $lang['not_lead_activity_added_attachment'] = 'Anexo adicionado';
        $lang['not_lead_activity_converted_email'] = 'E-mail lead alterado. O primeiro lead do e-mail era: %s e adicionou com Cadastro o e-mail %s';
        $lang['not_lead_activity_converted'] = '%s Converteu esse lead para o Cadastro';
        $lang['not_liked_your_post'] = '%s curtiu a sua postagem %s ...';
        $lang['not_commented_your_post'] = '%s comentou a sua postagem %s ...';
        $lang['not_liked_your_comment'] = '%s curtiu o seu comentário %s ...';
        $lang['not_proposal_assigned_to_you'] = 'Proposta atribuida a você - %s ...';
        $lang['not_proposal_comment_from_client'] = 'Novo comentário do Cadastro sobre a proposta %s ...';
        $lang['not_proposal_proposal_accepted'] = 'Proposta Aceita - %s';
        $lang['not_proposal_proposal_declined'] = 'Proposta Declinada - %s';
        $lang['not_task_added_you_as_follower'] = 'Adicionou você como seguidor na tarefa %s ...';
        $lang['not_task_added_someone_as_follower'] = 'Adicionou %s como seguidor na tarefa %s ...';
        $lang['not_task_added_himself_as_follower'] = 'Adicionou ele mesmo como seguidor na tarefa %s ...';
        $lang['not_task_assigned_to_you'] = 'Atribuida uma tarefa para você %s ...';
        $lang['not_task_assigned_someone'] = 'Atribuida %s para tarefa %s ...';
        $lang['not_task_will_do_user'] = 'fará a tarefa %s ...';
        $lang['not_task_new_attachment'] = 'Novo Anexo Adicionado';
        $lang['not_task_marked_as_complete'] = 'tarefa marcada como completa %s';
        $lang['not_task_unmarked_as_complete'] = 'tarefa desmarcada como completa %s';
        $lang['not_ticket_assigned_to_you'] = 'Tíquete Atribuído a você - %s ...';
        $lang['not_ticket_reassigned_to_you'] = 'Tíquete Atribuído a você - %s ...';
        $lang['not_estimate_customer_accepted'] = 'Parabéns! Cadastro aceitou o orçamento com número %s';
        $lang['not_estimate_customer_declined'] = 'Cadastro não aceitou o orçamento com número %s';
        $lang['not_commented_on_activity_discussion'] = 'Comentou em uma discussão de atividade';
        $lang['not_created_new_activity_discussion'] = 'Criou nova discussão na atividade';
        $lang['not_description_changed_on_activity'] = 'Descrição alterada na atividade';
        $lang['not_staff_added_as_activity_member'] = 'Membro adicionado em atividade';
        $lang['not_staff_added_as_project_member'] = 'Membro foi adicionado em projeto';


        # Clients
        $lang['clients'] = 'Cadastros';
        $lang['client'] = 'Cadastro';
        $lang['new_client'] = 'Novo Cadastro';
        $lang['client_lowercase'] = 'Cadastro';
        $lang['client_firstname'] = 'Nome';
        $lang['client_lastname'] = 'Sobrenome';
        $lang['client_email'] = 'E-mail';
        $lang['client_company'] = 'Instituição / Municipio / Empresa';
        $lang['client_vat_number'] = 'CPF / CNPJ / CNES';
        $lang['client_address'] = 'Endereço';
        $lang['client_city'] = 'Cidade';
        $lang['client_postal_code'] = 'CEP';
        $lang['client_state'] = 'Estado';
        $lang['client_password'] = 'Senha';
        $lang['client_password_change_populate_note']= 'Nota: se você preencher os campos, a senha poderá ser mudada por este Cadastro.';
        $lang['client_password_last_changed'] = 'Senha alterada pela última vez:';
        $lang['login_as_client'] = 'Login como Cadastro';
        $lang['client_invoices_tab'] = 'Faturas';
        $lang['contracts_invoices_tab'] = 'Contratos';
        $lang['contracts_tickets_tab'] = 'Tíquetes';
        $lang['contracts_notes_tab'] = 'Notas';
        $lang['note_description'] = 'Descrição da Nota';
        $lang['client_do_not_send_welcome_email'] = 'Não enviar e-mail de boas-vindas';
        $lang['clients_notes_table_description_heading']= 'Descrição';
        $lang['clients_notes_table_addedfrom_heading'] = 'Adicionado Por';
        $lang['clients_notes_table_dateadded_heading'] = 'Data da Adição';
        $lang['clients_list_full_name'] = 'Nome Completo';
        $lang['clients_list_last_login']= 'Último Login';

        # Contracts
        $lang['contracts'] = 'Contratos';
        $lang['contract']                 = 'Contrato';
        $lang['new_contract']             = 'Novo Contrato';
        $lang['contract_lowercase']       = 'contrato';
        $lang['contract_start_date']      = 'Data de Início';
        $lang['contract_end_date']        = 'Data Final';
        $lang['contract_subject']         = 'Assunto';
        $lang['contract_description']     = 'Descrição';
        $lang['contract_subject_tooltip'] = 'Assunto também visível para o Cadastro';
        $lang['contract_client_string']   = 'Cadastro';
        $lang['contract_attach']          = 'Documento anexo';

        $lang['contract_list_client']     = 'Cadastro';
        $lang['contract_list_subject']    = 'Assunto';
        $lang['contract_list_start_date'] = 'Data de Início';
        $lang['contract_list_end_date']   = 'Data Final';
        $lang['contract_list_limit_date'] = 'Data Limite';
        $lang['contract_limit_date']      = 'Data limite de renovação';

        # Currencies
        $lang['currencies']           = 'Moedas';
        $lang['currency']             = 'Moeda';
        $lang['new_currency']         = 'Nova Moeda';
        $lang['currency_lowercase']   = 'moeda';
        $lang['base_currency_set']    = 'Essa é agora sua moeda base.';
        $lang['make_base_currency']   = 'Tornar moeda base';
        $lang['base_currency_string'] = 'Moeda Base';

        $lang['currency_list_name']   = 'Nome';
        $lang['currency_list_symbol'] = 'Símbolo';


        $lang['currency_add_edit_description'] = 'Nome da Moeda';
        $lang['currency_add_edit_rate']        = 'Símbolo';

        $lang['currency_edit_heading'] = 'Editar Moeda';
        $lang['currency_add_heading']  = 'Adicionar Nova Moeda';


        # Department
        $lang['departments']          = 'Departamentos';
        $lang['department']           = 'Departamento';
        $lang['new_department']       = 'Novo Departamento';
        $lang['department_lowercase'] = 'departamento';

        $lang['department_name']             = 'Nome do Departamento';
        $lang['department_email']            = 'E-mail do Departamento';
        $lang['department_hide_from_client'] = 'Esconder do Cadastro?';
        $lang['department_list_name']        = 'Nome';

        # Email Templates
        $lang['email_templates']                        = 'Modelos de e-mail';
        $lang['email_template']                         = 'Modelo de e-mail';
        $lang['email_template_lowercase']               = 'modelo de e-mail';
        $lang['email_templates_lowercase']              = 'modelos de e-mail';
        $lang['email_template_ticket_fields_heading']   = 'Tíquetes';
        $lang['email_template_invoices_fields_heading'] = 'Faturas';
        $lang['email_template_clients_fields_heading']  = 'Cadastros';

        $lang['template_name']                = 'Nome do Modelo';
        $lang['template_subject']             = 'Assunto';
        $lang['template_fromname']            = 'Remetente';
        $lang['template_fromemail']           = 'Do E-mail';
        $lang['send_as_plain_text']           = 'Enviar como Plaintext';
        $lang['email_template_disabled']      = 'Desabilitar';
        $lang['email_template_email_message'] = 'Mensagem do e-mail';
        $lang['available_merge_fields']       = 'Disponibilizar mesclagem dos campos';
        # Home
        $lang['dashboard_string']                          = 'Painel';
        $lang['home_latest_todos']                         = 'Últimas tarefas';
        $lang['home_no_latest_todos']                      = 'Nenhuma tarefa encontrada';
        $lang['home_latest_finished_todos']                = 'Últimas tarefas concluídas';
        $lang['home_no_finished_todos_found']              = 'Nenhuma tarefa concluída encontrada';
        $lang['home_tickets_awaiting_reply_by_department'] = 'Tíquetes esperando resposta por departamento';
        $lang['home_tickets_awaiting_reply_by_status']     = 'Tíquetes esperando por resposta por status';
        $lang['home_this_week_events']                     = 'Eventos dessa semana';
        $lang['home_upcoming_events_next_week']            = 'Próximos eventos da próxima semana';
        $lang['home_event_added_by']                       = 'Evento adicionado por';
        $lang['home_public_event']                         = 'Evento público';
        $lang['home_weekly_payment_records']               = 'Registros de Pagamentos Semanais';
        $lang['home_weekend_ticket_opening_statistics']    = 'Estatísticas Semanais dos Tíquetes Abertos';
        # Newsfeed
        $lang['whats_on_your_mind']                                 = 'No que você está pensando? Digite aqui a sua ideia e deixe os membros da sua equipe comentarem sobre ela.';
        $lang['new_post']                                           = 'Postar';
        $lang['newsfeed_upload_tooltip']                            = 'Dica: Arraste e solte aqui os arquivos, para carregar';
        $lang['newsfeed_all_departments']                           = 'Todos os Departamentos';
        $lang['newsfeed_pin_post']                                  = 'Fixar a postagem';
        $lang['newsfeed_unpin_post']                                = 'Desfixar a postagem';
        $lang['newsfeed_delete_post']                               = 'Deletar';
        $lang['newsfeed_published_post']                            = 'Publicado';
        $lang['newsfeed_you_like_this']                             = 'Você curtiu isso';
        $lang['newsfeed_like_this']                                 = 'curtir isso';
        $lang['newsfeed_one_other']                                 = 'outro';
        $lang['newsfeed_you']                                       = 'Você';
        $lang['newsfeed_and']                                       = 'e';
        $lang['newsfeed_you_and']                                   = 'Você e';
        $lang['newsfeed_like_this_saying']                          = 'Curta isso';
        $lang['newsfeed_unlike_this_saying']                        = 'descurta isso';
        $lang['newsfeed_show_more_comments']                        = 'Mostrar mais comentários';
        $lang['comment_this_post_placeholder']                      = 'Comentar essa postagem...';
        $lang['newsfeed_post_likes_modal_heading']                  = 'Amigos que curtiram essa postagem';
        $lang['newsfeed_comment_likes_modal_heading']               = 'Amigos que curtiram esse comentário';
        $lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Essa postagem está visível apenas para os seguintes departamentos: %s';
        # Invoice Items
        $lang['invoice_items']                     = 'Itens da Fatura';
        $lang['invoice_item']                      = 'Item da Fatura';
        $lang['new_invoice_item']                  = 'Novo Item';
        $lang['invoice_item_lowercase']            = 'item da fatura';
        $lang['invoice_items_list_description']    = 'Descrição';
        $lang['invoice_items_list_rate']           = 'Tarifa';
        $lang['invoice_item_add_edit_description'] = 'Descrição';
        $lang['invoice_item_add_edit_rate']        = 'Tarifa';
        $lang['invoice_item_edit_heading']         = 'Editar o Item';
        $lang['invoice_item_add_heading']          = 'Adicionar Novo Item';

        # Invoices
        $lang['invoices']                       = 'Faturas';
        $lang['invoice']                        = 'Fatura';
        $lang['invoice_lowercase']              = 'fatura';
        $lang['create_new_invoice']             = 'Criar Nova Fatura';
        $lang['view_invoice']                   = 'Visualizar Fatura';
        $lang['invoice_payment_recorded']       = 'Pagamento da Fatura Registrado';
        $lang['invoice_payment_record_failed']  = 'Falha no Registro do Pagamento da Fatura';
        $lang['invoice_sent_to_client_success'] = 'A fatura foi enviada com sucesso para o Cadastro';
        $lang['invoice_sent_to_client_fail']    = 'Problema ao enviar a fatura';
        $lang['invoice_reminder_send_problem']  = 'Problema ao enviar o lembrete de fatura atrasada';
        $lang['invoice_overdue_reminder_sent']  = 'Lembrete de Fatura Atrasada Enviado com Sucesso';

        $lang['invoice_details']              = 'Detalhes da Fatura';
        $lang['invoice_view']                 = 'Visualizar a Fatura';
        $lang['invoice_select_customer']      = 'Cadastro';
        $lang['invoice_add_edit_number']      = 'Número da Fatura';
        $lang['invoice_add_edit_date']        = 'Data da Fatura';
        $lang['invoice_add_edit_duedate']     = 'Data de Vencimento';
        $lang['invoice_add_edit_currency']    = 'Moeda';
        $lang['invoice_add_edit_client_note'] = 'Nota do Cadastro';
        $lang['invoice_add_edit_admin_note']  = 'Nota da Administração';

        $lang['invoices_toggle_table_tooltip'] = 'Tabela de alternância';

        $lang['edit_invoice_tooltip']                   = 'Editar Fatura';
        $lang['delete_invoice_tooltip']                 = 'Deletar Fatura. Nota: Todos os pagamentos relativos a essa fatura serão deletados (se houver algum).';
        $lang['invoice_sent_to_email_tooltip']          = 'Enviar por E-mail';
        $lang['invoice_already_send_to_client_tooltip'] = 'Essa fatura já foi enviada para o Cadastro %s';
        $lang['send_overdue_notice_tooltip']            = 'Enviar Aviso de Vencimento';
        $lang['invoice_view_activity_tooltip']          = 'Registro de Atividade';
        $lang['invoice_record_payment']                 = 'Registro de Pagamento';

        $lang['invoice_send_to_client_modal_heading']    = 'Enviar a fatura para o Cadastro';
        $lang['invoice_send_to_client_attach_pdf']       = 'Anexar Fatura como PDF';
        $lang['invoice_send_to_client_preview_template'] = 'Prévia do Modelo de E-mail';

        $lang['invoice_dt_table_heading_number']         = 'Fatura #';
        $lang['invoice_dt_table_heading_date']           = 'Data';
        $lang['invoice_dt_table_heading_client']         = 'Cadastro';
        $lang['invoice_dt_table_heading_duedate']        = 'Data de Vencimento';
        $lang['invoice_dt_table_heading_amount']         = 'Valor';
        $lang['invoice_dt_table_heading_status']         = 'Status';
        $lang['record_payment_for_invoice']              = 'Pagamento Registrado para';
        $lang['record_payment_amount_received']          = 'Valor Recebido';
        $lang['record_payment_date']                     = 'Data de Pagamento';
        $lang['record_payment_leave_note']               = 'Deixar uma anotação';
        $lang['invoice_payments_received']               = 'Pagamentos Recebidos';
        $lang['invoice_record_payment_note_placeholder'] = 'Anotação do Admin';
        $lang['no_payments_found']                       = 'Nenhum Pagamento encontrado para essa fatura';

        # Payments
        $lang['payments']                             = 'Pagamentos';
        $lang['payment']                              = 'Pagamento';
        $lang['payment_lowercase']                    = 'pagamento';
        $lang['payments_table_number_heading']        = 'Pagamento #';
        $lang['payments_table_invoicenumber_heading'] = 'Fatura #';
        $lang['payments_table_mode_heading']          = 'Modo de Pagamento';
        $lang['payments_table_date_heading']          = 'Data';
        $lang['payments_table_amount_heading']        = 'Valor';
        $lang['payments_table_client_heading']        = 'Cadastro';
        $lang['payment_not_exists']                   = 'O pagamento não existe';

        $lang['payment_edit_for_invoice']     = 'Pagamento por Fatura';
        $lang['payment_edit_amount_received'] = 'Valor Recebido';
        $lang['payment_edit_date']            = 'Data de Pagamento';


        # Knowledge Base
        $lang['kb_article_add_edit_subject']   = 'Assunto';
        $lang['kb_article_add_edit_group']     = 'Grupo';
        $lang['kb_string']                     = 'Base de Conhecimento';
        $lang['kb_article']                    = 'Artigo';
        $lang['kb_article_lowercase']          = 'artigo';
        $lang['kb_article_new_article']        = 'Novo Artigo';
        $lang['kb_article_disabled']           = 'Desabilitar';
        $lang['kb_article_description']        = 'Descrição do Artigo';
        $lang['kb_no_articles_found']          = 'Nenhum artigo da base de conhecimento encontrado';
        $lang['kb_dt_article_name']            = 'Nome do Artigo';
        $lang['kb_dt_group_name']              = 'Grupo';
        $lang['new_group']                     = 'Novo Grupo';
        $lang['kb_group_add_edit_name']        = 'Nome do Grupo';
        $lang['kb_group_add_edit_description'] = 'Descrição curta';
        $lang['kb_group_add_edit_disabled']    = 'Desabilitado';
        $lang['kb_group_add_edit_note']        = 'Nota: Todos os artigos nesse grupo serão escondidos, se desabilitado for selecionado';
        $lang['group_table_name_heading']      = 'Nome';
        $lang['group_table_isactive_heading']  = 'Ativo';
        $lang['kb_no_groups_found']            = 'Nenhum grupo de base de conhecimento encontrado';

        # Mail Lists
        $lang['mail_lists']                            = 'Listas de Envio';
        $lang['mail_list']                             = 'Lista de Envio';
        $lang['new_mail_list']                         = 'Nova Lista de Envio';
        $lang['mail_list_lowercase']                   = 'lista de envio';
        $lang['custom_field_deleted_success']          = 'Campo Personalizado deletado';
        $lang['custom_field_deleted_fail']             = 'Problema ao deletar o campo personalizado';
        $lang['email_removed_from_list']               = 'E-mail removido da lista';
        $lang['email_remove_fail']                     = 'E-mail removido da lista';
        $lang['staff_mail_lists']                      = 'Lista de Envio dos Colaboradores';
        $lang['clients_mail_lists']                    = 'Lista de Envio dos Cadastros';
        $lang['mail_list_total_imported']              = 'Total de e-mails importados: %s';
        $lang['mail_list_total_duplicate']             = 'Total de e-emails duplicados: %s';
        $lang['mail_list_total_failed_to_insert']      = 'Falha nos e-mails, ao inserir: %s';
        $lang['mail_list_total_invalid']               = 'Endereço de e-mail inválido: %s';
        $lang['cant_edit_mail_list']                   = 'Você não pode editar essa lista, pois ela é preenchida automaticamente';
        $lang['mail_list_add_edit_name']               = 'Nome da Lista de Envio';
        $lang['mail_list_add_edit_customfield']        = 'Adicionar campo personalizado';
        $lang['mail_lists_view_email_email_heading']   = 'E-mail';
        $lang['mail_lists_view_email_date_heading']    = 'Data Adicionada';
        $lang['add_new_email_to']                      = 'Adicionar Novo E-mail a %s';
        $lang['import_emails_to']                      = 'Importar E-mails para %s';
        $lang['mail_list_new_email_edit_add_label']    = 'E-mail';
        $lang['mail_list_import_file']                 = 'Importar Arquivo';
        $lang['mail_list_available_custom_fields']     = 'Campos Personalizados Disponíveis';
        $lang['submit_import_emails']                  = 'Importar E-mails';
        $lang['btn_import_emails']                     = 'Importar E-mails (Excel)';
        $lang['btn_add_email_to_list']                 = 'Adicionar E-mail a Esta Lista';
        $lang['mail_lists_dt_list_name']               = 'Nome da Lista';
        $lang['mail_lists_dt_datecreated']             = 'Data de Criação';
        $lang['mail_lists_dt_creator']                 = 'Criador';
        $lang['email_added_to_mail_list_successfully'] = 'E-mail adicionado a lista com sucesso!';
        $lang['email_is_duplicate_mail_list']          = 'E-mail já existente nessa lista!';

        # Media
        $lang['media_files'] = 'Arquivos';

        # Payment modes
        $lang['new_payment_mode']       = 'Novo Modo de Pagamento';
        $lang['payment_modes']          = 'Modos de Pagamento';
        $lang['payment_mode']           = 'Modo de Pagamento';
        $lang['payment_mode_lowercase'] = 'modo de pagamento';
        $lang['payment_modes_dt_name']  = 'Nome do Modo de Pagamento';

        $lang['payment_mode_add_edit_name'] = 'Nome do Modo de Pagamento';
        $lang['payment_mode_edit_heading']  = 'Editar Modo de Pagamento';
        $lang['payment_mode_add_heading']   = 'Adicionar Novo Modo de Pagamento';

        # Predefined Ticket Replies
        $lang['new_predefined_reply']              = 'Nova Resposta Predefinida';
        $lang['predefined_replies']                = 'Respostas Predefinidas';
        $lang['predefined_reply']                  = 'Resposta Predefinida';
        $lang['predefined_reply_lowercase']        = 'resposta predefinida';
        $lang['predefined_replies_dt_name']        = 'Nome da Resposta Predefinida';
        $lang['predefined_reply_add_edit_name']    = 'Nome da Resposta Predefinida';
        $lang['predefined_reply_add_edit_content'] = 'Conteúdo da Resposta';

        # Ticket Priorities
        $lang['new_ticket_priority']           = 'Nova Prioridade';
        $lang['ticket_priorities']             = 'Prioridades dos Tíquetes';
        $lang['ticket_priority']               = 'Prioridade do Tíquete';
        $lang['ticket_priority_lowercase']     = 'prioridade do Tíquete';
        $lang['no_ticket_priorities_found']    = 'Nenhuma Prioridade do Tíquete Encontrada';
        $lang['ticket_priority_dt_name']       = 'Nome da Prioridade do Tíquete';
        $lang['ticket_priority_add_edit_name'] = 'Nome da Prioridade';

        # Reports
        $lang['kb_reports']                                       = 'Relatórios da Base de Conhecimento dos artigos';
        $lang['sales_reports']                                    = 'Relatórios de Vendas';
        $lang['reports_choose_kb_group']                          = 'Escolher Grupo';
        $lang['report_kb_yes']                                    = 'Sim';
        $lang['report_kb_no']                                     = 'Não';
        $lang['report_kb_no_votes']                               = 'Nenhum voto ainda';
        $lang['report_this_week_leads_conversions']               = 'Conversões de Leads Dessa Semana';
        $lang['report_leads_sources_conversions']                 = 'Fontes';
        $lang['report_leads_monthly_conversions']                 = 'Mensal';
        $lang['sales_report_heading']                             = 'Relatórios de Vendas';
        $lang['report_sales_type_income']                         = 'Renda Total';
        $lang['report_sales_type_customer']                       = 'Relatório do Cadastro';
        $lang['report_sales_base_currency_select_explanation']    = 'Você precisa selecionar uma moeda, porque você tem faturas em moedas diferentes';
        $lang['report_sales_from_date']                           = 'Por Data';
        $lang['report_sales_to_date']                             = 'Até a Data';
        $lang['report_sales_months_all_time']                     = 'Todos os meses';
        $lang['report_sales_months_six_months']                   = 'Últimos 6 meses';
        $lang['report_sales_months_twelve_months']                = 'Últimos 12 meses';
        $lang['reports_sales_generated_report']                   = 'Relatórios Gerados';
        $lang['reports_sales_dt_customers_client']                = 'Cadastro';
        $lang['reports_sales_dt_customers_total_invoices']        = 'Total de Faturas';
        $lang['reports_sales_dt_items_customers_amount']          = 'Valor';
        $lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Valor + Taxas';

        # Roles
        $lang['new_role']           = 'Nova Função';
        $lang['all_roles']          = 'Todas as Funções';
        $lang['roles']              = 'Funções dos Colaboradores';
        $lang['role']               = 'Função';
        $lang['role_lowercase']     = 'função';
        $lang['roles_total_users']  = 'Total de Usuários: ';
        $lang['roles_dt_name']      = 'Nome da Função';
        $lang['role_add_edit_name'] = 'Nome da Função';

        # Service
        $lang['new_service']           = 'Novo Serviço';
        $lang['services']              = 'Serviços';
        $lang['service']               = 'Serviço';
        $lang['service_lowercase']     = 'serviço';
        $lang['services_dt_name']      = 'Nome do Serviço';
        $lang['service_add_edit_name'] = 'Nome do Serviço';

        # Settings
        $lang['settings']                    = 'Configurações';
        $lang['settings_updated']            = 'Configurações Atualizadas';
        $lang['settings_save']               = 'Salvar Configurações';
        $lang['settings_group_general']      = 'Geral';
        $lang['settings_group_localization'] = 'Localização';
        $lang['settings_group_tickets']      = 'Tíquetes';
        $lang['settings_group_sales']        = 'Finanças';
        $lang['settings_group_email']        = 'E-mail';
        $lang['settings_group_clients']      = 'Cadastros';
        $lang['settings_group_newsfeed']     = 'Notícias';
        $lang['settings_group_cronjob']      = 'Cron Job';

        $lang['settings_yes']                                        = 'Sim';
        $lang['settings_no']                                         = 'Não';
        $lang['settings_clients_default_theme']                      = 'Tema padrão do Cadastro';
        $lang['settings_clients_allow_registration']                 = 'Permitir que os Cadastros registrem?';
        $lang['settings_clients_allow_kb_view_without_registration'] = 'Permitir que a base de conhecimento seja visualizada sem registro?';

        $lang['settings_cron_send_overdue_reminder']                 = 'Enviar lembrete de fatura em atraso';
        $lang['settings_cron_send_overdue_reminder_tooltip']         = 'Enviar automaticamente e-mail ao Cadastro, com mensagem de fatura em atraso, quando o status da fatura for atualizada como atrasada, no Cron Job';
        $lang['automatically_send_invoice_overdue_reminder_after']   = 'Enviar Automaticamente um lembrete, depois de (dias)';
        $lang['automatically_resend_invoice_overdue_reminder_after'] = 'Reenviar automaticamente um lembrete, depois de (dias)';

        $lang['settings_email_host']      = 'SMTP da Hospedagem';
        $lang['settings_email_port']      = 'Porta SMTP';
        $lang['settings_email']           = 'E-mail';
        $lang['settings_email_password']  = 'Senha SMTP';
        $lang['settings_email_charset']   = 'Codificação do E-mail';
        $lang['settings_email_signature'] = 'Assinatura do E-mail';

        $lang['settings_general_company_logo']                = 'Logo da Empresa';
        $lang['settings_general_company_logo_tooltip']        = 'Dimensões recomendadas: 150 x 32px';
        $lang['settings_general_company_remove_logo_tooltip'] = 'Remover o logo da empresa';
        $lang['settings_general_company_name']                = 'Nome da Empresa';
        $lang['settings_general_company_main_domain']         = 'Domínio Principal da Empresa';
        $lang['settings_general_use_knowledgebase']           = 'Usar a base de Conhecimento?';
        $lang['settings_general_use_knowledgebase_tooltip']   = 'Se você marcar essa opção, a base de conhecimento aparecerá também para o Cadastro';
        $lang['settings_general_tables_limit']                = 'Limite de paginação de Tabelas';
        $lang['settings_general_default_staff_role']          = 'Função padrão do Colaborador';
        $lang['settings_general_default_staff_role_tooltip']  = 'Quando você adicionar um novo Colaborador, essa função será selecionada por padrão';

        $lang['settings_localization_date_format']      = 'Formato da Data';
        $lang['settings_localization_default_timezone'] = 'Fuso Horário Padrão';
        $lang['settings_localization_default_language'] = 'Idioma Padrão';

        $lang['settings_newsfeed_max_file_upload_post'] = 'Máximo de arquivos para carregamento na postagem';

        $lang['settings_reminders_contracts']         = 'Lembrete de expiração do contrato';
        $lang['settings_reminders_contracts_tooltip'] = 'Notificação do lembrete de expiração, em dias';

        $lang['settings_tickets_use_services']             = 'Usar Serviços';
        $lang['settings_tickets_max_attachments']          = 'Máximo de arquivos anexos por Tíquetes';
        $lang['settings_tickets_allow_departments_access'] = 'Permitir que o Colaborador acesse apenas Tíquetes que pertençam ao departamento desse Colaborador';
        $lang['settings_tickets_allowed_file_extensions']  = 'Extensões de arquivos permitidos para os Anexos';

        $lang['settings_sales_general']                                    = 'Geral';
        $lang['settings_sales_general_note']                               = 'Configurações Gerais';
        $lang['settings_sales_invoice_prefix']                             = 'Prefixo do Número da Fatura';
        $lang['settings_sales_decimal_separator']                          = 'Separador Decimal';
        $lang['settings_sales_thousand_separator']                         = 'Separador Centesimal';
        $lang['settings_sales_currency_placement']                         = 'Posição do Símbolo da Moeda';
        $lang['settings_sales_currency_placement_before']                  = 'Antes do Valor';
        $lang['settings_sales_currency_placement_after']                   = 'Depois do Valor';
        $lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'É necessário que o Cadastro esteja logado, para visualizar uma fatura?';
        $lang['settings_sales_next_invoice_number']                        = 'Sequência inicial do Número da Fatura';
        $lang['settings_sales_next_invoice_number_tooltip']                = 'Defina esse campo como 1 se você quer começar do início';
        $lang['settings_sales_decrement_invoice_number_on_delete']         = 'Diminuir a sequência do número da fatura, ao deletar';
        $lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Você quer diminuir o número da fatura, quando a última fatura for deletada? Ex. Se você definir essa opção como SIM, e deletar a fatura 15, então terá a última como sendo a 14. Se marcar NÃO, a próxima fatura será a 16.';
        $lang['settings_sales_invoice_number_format']                      = 'Formato do Número da Fatura';
        $lang['settings_sales_invoice_number_format_year_based']           = 'Ano e número como Base';
        $lang['settings_sales_invoice_number_format_number_based']         = 'Número como Base (000001)';

        $lang['settings_sales_company_info_note'] = 'Essa informação será exibida nas faturas/orçamentos/pagamentos e em outros documentos em PDF, nos quais as informações da empresa são necessárias';
        $lang['settings_sales_company_name']      = 'Nome da Empresa';
        $lang['settings_sales_address']           = 'Endereço';
        $lang['settings_sales_city']              = 'Cidade';
        $lang['settings_sales_country_code']      = 'Sigla do País - Ex.: Brasil = BR';
        $lang['settings_sales_postal_code']       = 'CEP';
        $lang['settings_sales_phonenumber']       = 'Telefone';

        # Leads
        $lang['new_lead']       = 'Novo Lead';
        $lang['leads']          = 'Leads';
        $lang['lead']           = 'Lead';
        $lang['lead_lowercase'] = 'Lead';
        $lang['leads_all']      = 'Todos os Leads';

        $lang['leads_canban_notes']                = 'Notas: %s';
        $lang['leads_canban_source']               = 'Fonte: %s';
        $lang['lead_new_source']                   = 'Nova Fonte';
        $lang['lead_sources']                      = 'Fontes de Lead';
        $lang['lead_source']                       = 'Fonte de Lead';
        $lang['lead_source_lowercase']             = 'fonte de lead';
        $lang['leads_sources_not_found']           = 'Nenhuma fonte de leads encontrada';
        $lang['leads_sources_table_name']          = 'Nome da Fonte';
        $lang['leads_source_add_edit_name']        = 'Nome da Fonte';
        $lang['lead_new_status']                   = 'Novo Status do Lead';
        $lang['lead_status']                       = 'Status do Lead';
        $lang['lead_status_lowercase']             = 'status do lead';
        $lang['leads_status_table_name']           = 'Nome do Status';
        $lang['leads_status_add_edit_name']        = 'Nome do Status';
        $lang['leads_status_add_edit_order']       = 'Pedido';
        $lang['lead_statuses_not_found']           = 'Nenhum status de lead encontrado';
        $lang['leads_search']                      = 'Procurar Leads';
        $lang['leads_table_total']                 = 'Total de Leads: %s';
        $lang['leads_dt_name']                     = 'Nome';
        $lang['leads_dt_email']                    = 'E-mail';
        $lang['leads_dt_phonenumber']              = 'Telefone';
        $lang['leads_dt_assigned']                 = 'Atribuído';
        $lang['leads_dt_status']                   = 'Status';
        $lang['leads_dt_last_contact']             = 'Último Contato';
        $lang['lead_add_edit_name']                = 'Nome';
        $lang['lead_add_edit_email']               = 'Endereço de E-mail';
        $lang['lead_add_edit_phonenumber']         = 'Telefone';
        $lang['lead_add_edit_source']              = 'Fonte';
        $lang['lead_add_edit_status']              = 'Status do Lead';
        $lang['lead_add_edit_assigned']            = 'Atribuído a';
        $lang['lead_add_edit_datecontacted']       = 'Data de Contato';
        $lang['lead_add_edit_contacted_today']     = 'Contactado Hoje';
        $lang['lead_add_edit_activity']            = 'Registro de Atividade';
        $lang['lead_add_edit_notes']               = 'Notas';
        $lang['lead_add_edit_add_note']            = 'Adicionar notas';
        $lang['lead_not_contacted']                = 'Lead não contactado';
        $lang['lead_add_edit_contacted_this_lead'] = 'Eu entrei em contato com esse lead';

        # Misc
        $lang['access_denied'] = 'Acesso negado';
        $lang['prev']          = 'anterior';
        $lang['next']          = 'próximo';

        # Datatables
        $lang['dt_paginate_first']    = 'Primeiro';
        $lang['dt_paginate_last']     = 'Último';
        $lang['dt_paginate_next']     = 'Próximo';
        $lang['dt_paginate_previous'] = 'Anterior';
        $lang['dt_search']            = 'Procurar:';
        $lang['dt_zero_records']      = 'Nenhum registro compatível encontrado';
        $lang['dt_loading_records']   = 'Carregando...';
        $lang['dt_length_menu']       = 'Mostrar _MENU_ entradas';
        $lang['dt_info_filtered']     = '(filtrado do _MAX_ total {0})';
        $lang['dt_info_empty']        = 'Mostrar 0 a 0 de 0 {0}';
        $lang['dt_info']              = 'Mostrar _START_ a _END_ de _TOTAL_ {0}';
        $lang['dt_empty_table']       = 'Nenhuma {0} encontrado';
        $lang['dt_sort_ascending']    = 'ativar a classificação ascendente da coluna';
        $lang['dt_sort_descending']   = 'ativar a classificação descendente da coluna';
        # Invoice Activity Log
        $lang['user_sent_overdue_reminder'] = '%s lembrete de fatura atrasada enviado';

        # Weekdays
        $lang['wd_monday']    = 'Segunda-feira';
        $lang['wd_tuesday']   = 'Terça-feira';
        $lang['wd_thursday']  = 'Quarta-feira';
        $lang['wd_wednesday'] = 'Quinta-feira';
        $lang['wd_friday']    = 'Sexta-feira';
        $lang['wd_saturday']  = 'Sábado';
        $lang['wd_sunday']    = 'Domingo';

        # Admin Left Sidebar
        $lang['als_dashboard']             = 'Painel';
        $lang['als_clients']               = 'Cadastros';
        $lang['als_leads']                 = 'Leads';
        $lang['als_contracts']             = 'Contratos';
        $lang['als_sales']                 = 'Comercial';
        $lang['als_staff']                 = 'Colaboradores';
        $lang['als_tasks']                 = 'Tarefas';
        $lang['als_kb']                    = 'Base de Conhecimento';
        $lang['als_surveys']               = 'Pesquisas';
        $lang['als_media']                 = 'Mídia';
        $lang['als_reports']               = 'Relatórios';
        $lang['als_reports_sales_submenu'] = 'Comercial';
        $lang['als_reports_leads_submenu'] = 'Leads';
        $lang['als_kb_articles_submenu']   = 'Artigos';
        $lang['als_utilities']             = 'Utilitários';
        $lang['als_announcements_submenu'] = 'Anúncios';
        $lang['als_calendar_submenu']      = 'Calendário';
        $lang['als_activity_log_submenu']  = 'Registro de Atividade';

        # Admin Customizer Sidebar
        $lang['acs_ticket_priority_submenu']           = 'Prioridade do Tíquete';
        $lang['acs_ticket_statuses_submenu']           = 'Status do Tíquete';
        $lang['acs_ticket_predefined_replies_submenu'] = 'Respostas Predefinidas';
        $lang['acs_ticket_services_submenu']           = 'Serviços';
        $lang['acs_departments']                       = 'Departamentos';
        $lang['acs_leads']                             = 'Leads';
        $lang['acs_leads_sources_submenu']             = 'Fontes';
        $lang['acs_leads_statuses_submenu']            = 'Status';
        $lang['acs_sales_taxes_submenu']               = 'Taxas';
        $lang['acs_sales_currencies_submenu']          = 'Moedas';
        $lang['acs_sales_payment_modes_submenu']       = 'Modo de Pagamento';
        $lang['acs_email_templates']                   = 'Modelo de E-mail';
        $lang['acs_roles']                             = 'Funções';
        $lang['acs_settings']                          = 'Configurações';

        # Tickets
        $lang['new_ticket']                                          = 'Abrir um Novo Tíquete';
        $lang['tickets']                                             = 'Tíquetes';
        $lang['ticket']                                              = 'Tíquete';
        $lang['ticket_lowercase']                                    = 'Tíquete';
        $lang['support_tickets']                                     = 'Tíquetes de Suporte';
        $lang['support_ticket']                                      = 'Tíquete de Suporte';
        $lang['ticket_settings_to']                                  = 'Para';
        $lang['ticket_settings_email']                               = 'Endereço de E-mail';
        $lang['ticket_settings_departments']                         = 'Departamento';
        $lang['ticket_settings_service']                             = 'Serviço';
        $lang['ticket_settings_priority']                            = 'Prioridade';
        $lang['ticket_settings_subject']                             = 'Assunto';
        $lang['ticket_settings_assign_to']                           = 'Atribuir Tíquete para (responsável pelo atendimento)';
        $lang['ticket_settings_preview_date']                        = 'Data de previsão';
        $lang['ticket_add_body']                                     = 'Corpo do Tíquete';
        $lang['ticket_add_attachments']                              = 'Anexos';
        $lang['ticket_no_reply_yet']                                 = 'Ainda Sem Resposta';
        $lang['new_ticket_added_successfully']                       = 'Tíquete #%s adicionado com sucesso';
        $lang['replied_to_ticket_successfully']                      = 'Respondido para o Tíquete #%s com sucesso';
        $lang['ticket_settings_updated_successfully']                = 'Configurações do Tíquete atualizadas com sucesso';
        $lang['ticket_settings_updated_successfully_and_reassigned'] = 'Configurações do Tíquete atualizadas com sucesso - transferido para o departamento %s';
        $lang['ticket_dt_subject']                                   = 'Assunto';
        $lang['ticket_dt_department']                                = 'Departamento';
        $lang['ticket_dt_service']                                   = 'Serviço';
        $lang['ticket_dt_submitter']                                 = 'Cadastro';
        $lang['ticket_dt_status']                                    = 'Status';
        $lang['ticket_dt_priority']                                  = 'Prioridade';
        $lang['ticket_dt_last_reply']                                = 'Última Resposta';
        $lang['ticket_dt_previewdate']                               = 'Previsão';
        $lang['ticket_no_preview']                                   = 'Sem previsão';
        $lang['ticket_single_add_reply']                  = 'Adicionar Resposta';
        $lang['ticket_single_add_note']                   = 'Adicionar Nota';
        $lang['ticket_single_other_user_tickets']         = 'Outros Tíquetes';
        $lang['ticket_single_settings']                   = 'Configurações';
        $lang['ticket_single_priority']                   = 'Prioridade: %s';
        $lang['ticket_single_last_reply']                 = 'Última Resposta: %s';
        $lang['ticket_single_ticket_note_by']             = 'Nota do Tíquete por %s';
        $lang['ticket_single_note_added']                 = 'Nota adicionada: %s';
        $lang['ticket_single_change_status']              = 'Alterar Status';
        $lang['ticket_single_assign_to_me_on_update']     = 'Atribuir esse Tíquete para mim, automaticamente';
        $lang['ticket_single_insert_predefined_reply']    = 'Inserir resposta predefinida';
        $lang['ticket_single_insert_knowledge_base_link'] = 'Inserir o link da base de conhecimento';
        $lang['ticket_single_attachments']                = 'Anexos';
        $lang['ticket_single_add_response']               = 'Adicionar Resposta';
        $lang['ticket_single_note_heading']               = 'Nota';
        $lang['ticket_single_add_note']                   = 'Adicionar nota';
        $lang['ticket_settings_none_assigned']            = 'Nenhuma';
        $lang['ticket_status_changed_successfully']       = 'Alterar o Status do Tíquete';
        $lang['ticket_status_changed_fail']               = 'Problema para Alterar o Status do Tíquete';

        $lang['ticket_staff_string']                = 'Colaborador';
        $lang['ticket_client_string']               = 'Cadastro';
        $lang['ticket_posted']                      = 'Postado: %s';
        $lang['ticket_access_by_department_denied'] = 'Você não tem acesso a esse Tíquete. Esse Tíquete pertence a um departamento que você não faz parte';

        # Staff
        $lang['new_staff']                       = 'Novo Colaborador';
        $lang['staff_members']                   = 'Colaboradores';
        $lang['staff_member']                    = 'Colaborador';
        $lang['staff_member_lowercase']          = 'Colaborador';
        $lang['staff_profile_updated']           = 'Seu Perfil foi Atualizado';
        $lang['staff_old_password_incorrect']    = 'Sua senha antiga está incorreta';
        $lang['staff_password_changed']          = 'Sua senha foi Alterada';
        $lang['staff_problem_changing_password'] = 'Problema ao alterar sua senha';
        $lang['staff_profile_string']            = 'Perfil';

        $lang['staff_attachments']               = 'Documentos e anexos';
        $lang['staff_cant_remove_main_admin']          = 'Você Não pode remover o administrador principal';
        $lang['staff_cant_remove_yourself_from_admin'] = 'Você não pode remover você mesmo da função de administrador';

        $lang['staff_dt_name']       = 'Nome Completo';
        $lang['staff_dt_email']      = 'E-mail';
        $lang['staff_dt_last_Login'] = 'Último Login';
        $lang['staff_dt_active']     = 'Ativo';

        $lang['staff_add_edit_firstname']             = 'Nome';
        $lang['staff_add_edit_lastname']              = 'Sobrenome';
        $lang['staff_add_edit_email']                 = 'E-mail';
        $lang['staff_add_edit_phonenumber']           = 'Telefone';
        $lang['staff_add_edit_facebook']              = 'Facebook';
        $lang['staff_add_edit_linkedin']              = 'LinkedIn';
        $lang['staff_add_edit_skype']                 = 'Skype';
        $lang['staff_add_edit_departments']           = 'Departamento';
        $lang['staff_add_edit_role']                  = 'Função';
        $lang['staff_add_edit_permissions']           = 'Permissões';
        $lang['staff_add_edit_administrator']         = 'Administrador';
        $lang['staff_add_edit_password']              = 'Senha';
        $lang['staff_add_edit_password_note']         = 'Nota: se você preencher esse campo, a senha será alterada para esse membro.';
        $lang['staff_add_edit_password_last_changed'] = 'Senha última vez alterada';
        $lang['staff_add_edit_notes']                 = 'Notas';
        $lang['staff_add_edit_note_description']      = 'descrição da nota';

        $lang['staff_notes_table_description_heading'] = 'Nota';
        $lang['staff_notes_table_addedfrom_heading']   = 'Adicionado Por';
        $lang['staff_notes_table_dateadded_heading']   = 'Data da Adição';

        $lang['staff_admin_profile']         = 'Esse é o perfil do admin';
        $lang['staff_profile_notifications'] = 'Notificações';
        $lang['staff_profile_departments']   = 'Departamentos';

        $lang['staff_edit_profile_image']                      = 'Imagem de Perfil';
        $lang['staff_edit_profile_your_departments']           = 'Seus Departamentos';
        $lang['staff_edit_profile_change_your_password']       = 'Alterar sua Senha';
        $lang['staff_edit_profile_change_old_password']        = 'Senha Antiga';
        $lang['staff_edit_profile_change_new_password']        = 'Nova Senha';
        $lang['staff_edit_profile_change_repeat_new_password'] = 'Repetir a Nova Senha';

        # Surveys
        $lang['new_survey']                    = 'Nova Pesquisa';
        $lang['surveys']                       = 'Pesquisas';
        $lang['survey']                        = 'Pesquisa';
        $lang['survey_lowercase']              = 'pesquisa';
        $lang['survey_no_mail_lists_selected'] = 'Nenhuma lista de envio selecionada';
        $lang['survey_send_success_note']      = 'Todos os Emails Pesquisados(%s) serão enviados através do CRON JOB, com um intervalo de 5 minutos';
        $lang['survey_result']                 = 'Resultado da Pesquisa: %s';
        $lang['question_string']               = 'Questão';
        $lang['question_field_string']         = 'Campo';

        $lang['survey_list_view_tooltip']         = 'Visualizar Pesquisa';
        $lang['survey_list_view_results_tooltip'] = 'Visualizar Resultados';

        $lang['survey_add_edit_subject']                   = 'Assunto da Pesquisa';
        $lang['survey_add_edit_email_description']         = 'Descrição da Pesquisa (E-mail de Descrição)';
        $lang['survey_include_survey_link']                = 'Incluir o link da pesquisa na descrição';
        $lang['survey_available_mail_lists_custom_fields'] = 'Campo do Cadastro disponível para listas de e-mails';
        $lang['survey_mail_lists_custom_fields_tooltip']   = 'Os campos personalizados podem ser usados para editar e-mail. DICA: Clique no editor de e-mail e, em seguida, selecionar a partir de lista suspensa do menu, para ser anexado automaticamente.';
        $lang['survey_add_edit_short_description_view']    = 'Pesquisa de descrição curta (Visualizar Descrição)';
        $lang['survey_add_edit_from']                      = 'De (exibido no e-mail)';
        $lang['survey_add_edit_redirect_url']              = 'Pesquisa redirecionada para URL';
        $lang['survey_add_edit_red_url_note']              = 'Quando o usuário acabar a pesquisa para onde ele será redirecionado (deixar em branco para esse site url)';
        $lang['survey_add_edit_disabled']                  = 'Desabilitar';
        $lang['survey_add_edit_only_for_logged_in']        = 'Apenas para participantes logados (Colaboradores e Cadastros)';
        $lang['send_survey_string']                        = 'Enviar Pesquisa';
        $lang['survey_send_mail_list_clients']             = 'Cadastros';
        $lang['survey_send_mail_list_staff']               = 'Colaboradores';
        $lang['survey_send_mail_lists_string']             = 'Listas de Envio';
        $lang['survey_send_mail_lists_note_logged_in']     = 'Nota: Você está enviando uma pesquisa para as listas de envio, onde apenas participantes logados não precisam estar selecionados';
        $lang['survey_send_string']                        = 'Enviar';

        $lang['survey_send_to_total']  = 'Enviar para total de %s e-mails';
        $lang['survey_send_till_now']  = 'Até agora';
        $lang['survey_send_finished']  = 'Envio da pesquisa terminado: %s';
        $lang['survey_added_to_queue'] = 'Essa pesquisa foi adicionada a fila cron em %s';

        $lang['survey_questions_string']          = 'Questões';
        $lang['survey_insert_field']              = 'Inserir Campo';
        $lang['survey_field_checkbox']            = 'Caixa de Seleção';
        $lang['survey_field_radio']               = 'Rádio';
        $lang['survey_field_input']               = 'Incluir Campo';
        $lang['survey_field_textarea']            = 'Área de Texto';
        $lang['survey_question_required']         = 'Preenchimento Obrigatório';
        $lang['survey_question_only_for_preview'] = 'Apenas para previsualização';
        $lang['survey_create_first']              = 'Você precisa criar uma pesquisa primeiro! Então, você vai poder inserir questões.';


        $lang['survey_dt_name']               = 'Nome';
        $lang['survey_dt_total_questions']    = 'Total de Questões';
        $lang['survey_dt_total_participants'] = 'Total de Participantes';
        $lang['survey_dt_date_created']       = 'Data de Criação';
        $lang['survey_dt_active']             = 'Ativo';

        $lang['survey_text_questions_results'] = 'Resultado das Perguntas de Texto';
        $lang['survey_view_all_answers']       = 'Visualizar outras Respostas';

        # Staff Tasks
        $lang['new_task']       = 'Nova Tarefa';
        $lang['tasks']          = 'Tarefas';
        $lang['task']           = 'Tarefa';
        $lang['task_lowercase'] = 'tarefa';
        $lang['comment_string'] = 'Comentário';

        $lang['task_marked_as_complete'] = 'Tarefa marcada como completa';
        $lang['task_follower_removed']   = 'Seguidor da tarefa removido com sucesso';
        $lang['task_assignee_removed']   = 'Destinatário da tarefa removido com sucesso';

        $lang['task_no_assignees'] = 'Nenhum destinatário para essa tarefa';
        $lang['task_no_followers'] = 'Nenhum seguidor para essa tarefa';

        $lang['task_list_all']            = 'Todos';
        $lang['task_list_not_assigned']   = 'Não Atribuído';
        $lang['task_list_duedate_passed'] = 'Data de Vencimento passado';
        $lang['tasks_dt_name']            = 'Nome';

        $lang['task_single_priority']               = 'Prioridade';
        $lang['task_single_start_date']             = 'Data de Início';
        $lang['task_single_due_date']               = 'Data de Vencimento';
        $lang['task_single_finished']               = 'Concluido';
        $lang['task_single_mark_as_complete']       = 'Marcar como completo';
        $lang['task_single_edit']                   = 'Editar';
        $lang['task_single_delete']                 = 'Deletar';
        $lang['task_single_assignees']              = 'Destinatários';
        $lang['task_single_assignees_select_title'] = 'Atribuir a tarefa a';
        $lang['task_single_followers']              = 'Seguidores';
        $lang['task_single_followers_select_title'] = 'Adicionar seguidores';
        $lang['task_single_add_new_comment']        = 'Adicionar Comentário';

        $lang['task_add_edit_subject']     = 'Assunto';
        $lang['task_add_edit_priority']    = 'Prioridade';
        $lang['task_priority_low']         = 'Baixa';
        $lang['task_priority_medium']      = 'Média';
        $lang['task_priority_high']        = 'Alta';
        $lang['task_priority_urgent']      = 'Urgente';
        $lang['task_add_edit_start_date']  = 'Data de Início';
        $lang['task_add_edit_due_date']    = 'Data de Vencimento';
        $lang['task_add_edit_description'] = 'Descrição da Tarefa';

        # Taxes
        $lang['new_tax']       = 'Nova Taxa';
        $lang['taxes']         = 'Taxas';
        $lang['tax']           = 'Taxa';
        $lang['tax_lowercase'] = 'taxa';
        $lang['tax_dt_name']   = 'Nome da Taxa';
        $lang['tax_dt_rate']   = 'Tarifa (porcentual)';

        $lang['tax_add_edit_name'] = 'Nome da Taxa';
        $lang['tax_add_edit_rate'] = 'Tarifa da Taxa (porcentual)';
        $lang['tax_edit_title']    = 'Editar Taxa';
        $lang['tax_add_title']     = 'Adicionar Nova Taxa';

        #Competence - competence
        $lang['new_competence']       = 'Nova Competência';
        $lang['competences']         = 'Competências';
        $lang['competence']           = 'Competência';
        $lang['competence_lowercase'] = 'competência';
        $lang['competence_dt_name']   = 'Nome da Competência';
        $lang['competence_add_edit_name'] = 'Nome da Competência (MM/AAAA)';
        $lang['competence_edit_title']    = 'Editar Competência';
        $lang['competence_add_title']     = 'Adicionar nova competência';

        # Ticket Statuses
        $lang['new_ticket_status']       = 'Novo Status do Tíquete';
        $lang['ticket_statuses']         = 'Status do Tíquete';
        $lang['ticket_status']           = 'Status do Tíquete';
        $lang['ticket_status_lowercase'] = 'Status do Tíquete';

        $lang['ticket_statuses_dt_name']      = 'Nome do Status do Tíquete';
        $lang['no_ticket_statuses_found']     = 'Nenhum status do Tíquete encontrado';
        $lang['ticket_statuses_table_total']  = 'Total %s';
        $lang['ticket_status_add_edit_name']  = 'Nome do Status do Tíquete';
        $lang['ticket_status_add_edit_color'] = 'Escolher cor';
        $lang['ticket_status_add_edit_order'] = 'Status do Pedido';

        # Todos
        $lang['new_todo']                  = 'Nova Tarefa';
        $lang['my_todos']                  = 'Meus Itens de Tarefas';
        $lang['todo']                      = 'Item de Tarefa';
        $lang['todo_lowercase']            = 'tarefa';
        $lang['todo_status_changed']       = 'Status da tarefa alterado';
        $lang['todo_add_title']            = 'Adicionar nova tarefa';
        $lang['add_new_todo_description']  = 'Descrição';
        $lang['no_finished_todos_found']   = 'Nenhuma tarefa acabada foi encontrada';
        $lang['no_unfinished_todos_found'] = 'Nenhuma tarefa inacabada foi encontrada';
        $lang['unfinished_todos_title']    = 'Tarefas abertas';
        $lang['finished_todos_title']      = 'Tarefas concluídas';

        # Utilities
        $lang['utility_activity_log']                        = 'Registro de atividade';
        $lang['utility_activity_log_filter_by_date']         = 'Filtrar por data';
        $lang['utility_activity_log_dt_description']         = 'Descrição';
        $lang['utility_activity_log_dt_date']                = 'Data';
        $lang['utility_activity_log_dt_staff']               = 'Staff';
        $lang['utility_calendar_new_event_title']            = 'Adicionar novo evento';
        $lang['utility_calendar_new_event_start_date']       = 'Data de Início';
        $lang['utility_calendar_new_event_end_date']         = 'Data de Término';
        $lang['utility_calendar_new_event_make_public']      = 'Tornar Público';
        $lang['utility_calendar_event_added_successfully']   = 'Novo evento adicionado com sucesso';
        $lang['utility_calendar_event_deleted_successfully'] = 'Evento deletado';
        $lang['utility_calendar_new_event_placeholder']      = 'Título do evento';


        # Navigation
        $lang['nav_notifications']          = 'Notificações';
        $lang['nav_my_profile']             = 'Meu Perfil';
        $lang['nav_edit_profile']           = 'Editar Perfil';
        $lang['nav_logout']                 = 'Sair';
        $lang['nav_no_notifications']       = 'Nenhuma notificação encontrada';
        $lang['nav_view_all_notifications'] = 'Visualizar todas as notificações';
        $lang['nav_notifications_tooltip']  = 'Visualizar Notificações';

        # Footer
        $lang['clients_copyright'] = 'Copyright %s';

        # Contracts
        $lang['clients_contracts']               = 'Contratos';
        $lang['clients_contracts_dt_subject']    = 'Assunto';
        $lang['clients_contracts_dt_start_date'] = 'Data de Início';
        $lang['clients_contracts_dt_end_date']   = 'Data Final';

        # Home
        $lang['clients_quick_invoice_info']           = 'Informações rápidas de Faturas';
        $lang['clients_home_currency_select_tooltip'] = 'Você precisa selecionar uma moeda, porque você tem faturas com moedas diferentes';
        # Invoices
        $lang['clients_invoice_html_btn_download'] = 'Baixar';

        $lang['clients_my_invoices']        = 'Minhas Faturas';
        $lang['clients_invoice_dt_number']  = 'Fatura #';
        $lang['clients_invoice_dt_date']    = 'Data';
        $lang['clients_invoice_dt_duedate'] = 'Data de Vencimento';
        $lang['clients_invoice_dt_amount']  = 'Valor';
        $lang['clients_invoice_dt_status']  = 'Status';

        # Profile
        $lang['clients_profile_heading'] = 'Cadastro';

        # Used for edit profile and register START
        $lang['clients_firstname'] = 'Nome';
        $lang['clients_lastname']  = 'Sobrenome';
        $lang['clients_email']     = 'Endereço de E-mail';
        $lang['clients_company']   = 'Instituição / Municipio / Empresa';
        $lang['clients_vat']       = 'CPF / CNPJ / CNES';
        $lang['clients_phone']     = 'Telefone';
        $lang['clients_country']   = 'País';
        $lang['clients_city']      = 'Cidade';
        $lang['clients_address']   = 'Endereco';
        $lang['clients_zip']       = 'CEP';
        $lang['clients_state']     = 'Estado';

        # Used for edit profile and register END

        $lang['clients_register_password']        = 'Senha';
        $lang['clients_register_password_repeat'] = 'Repetir a Senha';
        $lang['clients_edit_profile_update_btn']  = 'Atualizar';

        $lang['clients_edit_profile_change_password_heading'] = 'Alterar Senha';
        $lang['clients_edit_profile_old_password']            = 'Senha Antiga';
        $lang['clients_edit_profile_new_password']            = 'Senha Nova';
        $lang['clients_edit_profile_new_password_repeat']     = 'Repetir a Senha';
        $lang['clients_edit_profile_change_password_btn']     = 'Alterar a Senha';
        $lang['clients_profile_last_changed_password']        = 'Senha alterada pela última vez %s';

        # Knowledge base
        $lang['clients_knowledge_base']                    = 'Base de Conhecimento';
        $lang['clients_knowledge_base_articles_not_found'] = 'Nenhum artigo encontrado na base de conhecimento';
        $lang['clients_knowledge_base_find_useful']        = 'Você achou esse artigo útil?';
        $lang['clients_knowledge_base_find_useful_yes']    = 'Sim';
        $lang['clients_knowledge_base_find_useful_no']     = 'Não';
        $lang['clients_article_only_1_vote_today']         = 'Você pode votar uma vez, em 24 horas';
        $lang['clients_article_voted_thanks_for_feedback'] = 'Obrigado pela sua opinião';

        # Tickets
        $lang['clients_ticket_open_subject']               = 'Abrir Tíquete';
        $lang['clients_ticket_open_departments']           = 'Departamento';
        $lang['clients_tickets_heading']                   = 'Tíquetes de Suporte';
        $lang['clients_ticket_open_service']               = 'Serviço';
        $lang['clients_ticket_open_priority']              = 'Prioridade';
        $lang['clients_ticket_open_body']                  = 'Corpo do Tíquete';
        $lang['clients_ticket_attachments']                = 'Anexos';
        $lang['clients_single_ticket_string']              = 'Tíquete';
        $lang['clients_single_ticket_replied']             = 'Respondido: %s';
        $lang['clients_single_ticket_information_heading'] = 'Informações do Tíquete';

        $lang['clients_tickets_dt_number']     = 'Tíquete #';
        $lang['clients_tickets_dt_subject']    = 'Assunto';
        $lang['clients_tickets_dt_department'] = 'Departamento';
        $lang['clients_tickets_dt_service']    = 'Serviço';
        $lang['clients_tickets_dt_status']     = 'Status';
        $lang['clients_tickets_dt_last_reply'] = 'Última Resposta';


        $lang['clients_ticket_single_department']        = 'Departamento: %s';
        $lang['clients_ticket_single_submitted']         = 'Submetido: %s';
        $lang['clients_ticket_single_status']            = 'Status:';
        $lang['clients_ticket_single_priority']          = 'Prioridade: %s';
        $lang['clients_ticket_single_add_reply_btn']     = 'Adicionar Resposta';
        $lang['clients_ticket_single_add_reply_heading'] = 'Adicionar Resposta a esse Tíquete';

        # Login
        $lang['clients_login_heading_no_register'] = 'Por favor, faça o login!';
        $lang['clients_login_heading_register']    = 'Por favor, faça o login ou registre-se';
        $lang['clients_login_email']               = 'Endereço de E-mail';
        $lang['clients_login_password']            = 'Senha';
        $lang['clients_login_remember']            = 'Lembre-se de mim';
        $lang['clients_login_login_string']        = 'Entrar';

        # Register
        $lang['clients_register_string']  = 'Registrar-se';
        $lang['clients_register_heading'] = 'Registrar-se';

        # Navigation
        $lang['clients_nav_login']     = 'Entrar';
        $lang['clients_nav_register']  = 'Registrar-se';
        $lang['clients_nav_invoices']  = 'Faturas';
        $lang['clients_nav_contracts'] = 'Contratos';
        $lang['clients_nav_kb']        = 'Base de Conhecimento';
        $lang['clients_nav_profile']   = 'Pefil';
        $lang['clients_nav_logout']    = 'Sair';

        # Payments
        $lang['payment_receipt']                               = 'Recibo do pagamento';
        $lang['payment_for_string']                            = 'Pagamento Para';
        $lang['payment_date']                                  = 'Data de Pagamento:';
        $lang['payment_view_mode']                             = 'Modo de Pagamento:';
        $lang['payment_total_amount']                          = 'Valor Total';
        $lang['payment_table_invoice_number']                  = 'Número da Fatura';
        $lang['payment_table_invoice_date']                    = 'Data da Fatura';
        $lang['payment_table_invoice_amount_total']            = 'Valor da Fatura';
        $lang['payment_table_payment_amount_total']            = 'Valor do Pagamento';
        $lang['payments_table_transaction_id']                 = 'ID da Transação: %s';
        $lang['payment_getaway_token_not_found']               = 'Símbolo não Encontrado';
        $lang['online_payment_recorded_success']               = 'Pagamento registado com sucesso';
        $lang['online_payment_recorded_success_fail_database'] = 'Pagamento bem sucedido! Mas, não foi possível adicionar o pagamento ao banco de dados. Por favor, entre em contato com o administrador e informe-o sobre o problema.';

        # Leads
        $lang['lead_convert_to_client']                = 'Converter para Cadastro';
        $lang['lead_convert_to_email']                 = 'E-mail';
        $lang['lead_convert_to_client_firstname']      = 'Nome';
        $lang['lead_convert_to_client_lastname']       = 'Sobrenome';
        $lang['lead_email_already_exists']             = 'E-mail do lead já existe nos dados de Cadastros';
        $lang['lead_to_client_base_converted_success'] = 'Lead convertido para Cadastro com sucesso!';
        $lang['lead_have_client_profile']              = 'Esse lead já existe como perfil de Cadastro.';
        $lang['lead_converted_edit_client_profile']    = 'Editar Perfil';

        # Invoices
        $lang['view_invoice_as_customer_tooltip']                                     = 'Visualizar fatura como o Cadastro';
        $lang['invoice_add_edit_recurring']                                           = 'Fatura Recorrente?';
        $lang['invoice_add_edit_recurring_no']                                        = 'Não';
        $lang['invoice_add_edit_recurring_month']                                     = 'Todo mês';
        $lang['invoice_add_edit_recurring_months']                                    = 'A cada %s meses';
        $lang['invoices_list_all']                                                    = 'Tudo';
        $lang['invoices_list_not_have_payment']                                       = 'Faturas sem registro de pagamento';
        $lang['invoices_list_recurring']                                              = 'Faturas Recorrentes';
        $lang['invoices_list_made_payment_by']                                        = 'Pagamento realizado por %s';
        $lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Criar uma nova fatura, da fatura recorrente principal, somente se estiver com o status pago';
        $lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Criar nova fatura, da fatura principal recorrente, apenas se a fatura principal estiver com status de paga? Se esse campo está definido como NÃO e a fatura recorrente não está com status de paga, a nova fatura não será criada';
        $lang['view_invoice_pdf_link_pay']                                            = 'Pagar a Fatura';

        # Payment modes
        $lang['payment_mode_add_edit_description']         = 'Contas Bancárias / Descrição';
        $lang['payment_mode_add_edit_description_tooltip'] = 'Você pode definir aqui suas informações das contas bancárias. Será mostrado na Fatura HTML';
        $lang['payment_modes_dt_description']              = 'Contas Bancárias / Descrição';
        $lang['payment_modes_add_edit_announcement']       = 'Nota: O modos de pagamentos, listados abaixo, são os offline. Para configurar os modos de pagamentos online, como o Paypay, por exempplo, acesse Configurações-> Meios de Pagamento';
        $lang['payment_mode_add_edit_active']              = 'Ativo';
        $lang['payment_modes_dt_active']                   = 'Ativo';

        # Contracts
        $lang['contract_not_found'] = 'Contrato não encontrado. Talvez esteja deletado, verifique o registro de atividade';

        # Settings
        $lang['setting_bar_heading']                 = 'Definições';
        $lang['settings_group_online_payment_modes'] = 'Meios de Pagamento';
        $lang['settings_paymentmethod_mode_label']   = 'Título';
        $lang['settings_paymentmethod_active']       = 'Ativo';
        $lang['settings_paymentmethod_currencies']   = 'Vírgulas Separando Moedas';
        $lang['settings_paymentmethod_testing_mode'] = 'Habilitar Modo de Teste';

        $lang['settings_paymentmethod_paypal_username']  = 'API do Usuário Paypal';
        $lang['settings_paymentmethod_paypal_password']  = 'Senha API Paypal';
        $lang['settings_paymentmethod_paypal_signature'] = 'Assinatura API';

        $lang['settings_paymentmethod_stripe_api_secret_key']      = 'Chave Secreta API';
        $lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Chave Publica API';
        $lang['settings_limit_top_search_bar_results']             = 'Limite Superior da Barra de Pesquisa e Resultados para';

        ## Clients
        $lang['client_phonenumber'] = 'Telefone';

        # Main Clients
        $lang['clients_register']                          = 'Registrar-se';
        $lang['clients_profile_updated']                   = 'Seu perfil foi atualizado';
        $lang['clients_successfully_registered']           = 'Obrigado por se registrar!';
        $lang['clients_account_created_but_not_logged_in'] = 'Sua conta foi criada, mas você ainda não está logado no nosso sistema. Por favor, faça o login!';
        # Tickets
        $lang['clients_tickets_heading'] = 'Tíquetes de Suporte';

        # Payments
        // Uses on stripe page
        $lang['payment_for_invoice'] = 'Pagamento pela Fatura';
        $lang['payment_total']       = 'Total: %s';

        # Invoice
        $lang['invoice_html_online_payment']             = 'Pagamento Online';
        $lang['invoice_html_online_payment_button_text'] = 'Pagar agora';
        $lang['invoice_html_payment_modes_not_selected'] = 'Por favor, Selecione um Modo de Pagamento';
        $lang['invoice_html_amount_blank']               = 'Valor total não pode estar em branco ou ser zero';
        $lang['invoice_html_offline_payment']            = 'Pagamento Offline';
        $lang['invoice_html_amount']                     = 'Valor';

        # DataTables
        $lang['dt_button_column_visibility'] = 'Visibilidade';
        $lang['dt_button_reload']            = 'Recarregar';
        $lang['dt_button_excel']             = 'Excel';
        $lang['dt_button_csv']               = 'CSV';
        $lang['dt_button_pdf']               = 'PDF';
        $lang['dt_button_print']             = 'Imprimir';
        $lang['is_not_active_export']        = 'Não';
        $lang['is_active_export']            = 'Sim';

        # Invoice
        $lang['invoice_add_edit_advanced_options']                = 'Opções Avançadas';
        $lang['invoice_add_edit_allowed_payment_modes']           = 'Modos de pagamentos permitidos para essa fatura';
        $lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Faturas recorrentes desta fatura';
        $lang['invoice_add_edit_no_payment_modes_found']          = 'Nenhum modo de pagamento encontrado.';
        $lang['invoice_html_total_pay']                           = 'Total: %s';

        # Email templates
        $lang['email_templates_table_heading_name'] = 'Nome do Modelo';
        # General
        $lang['discount_type']            = 'Tipo de Desconto';
        $lang['discount_type_after_tax']  = 'Depois da Taxa';
        $lang['discount_type_before_tax'] = 'Antes da Taxa';
        $lang['terms_and_conditions']     = 'Termos e Condições';
        $lang['reference_no']             = 'Referência #';
        $lang['no_discount']              = 'Sem desconto';
        $lang['view_stats_tooltip']       = 'Visualizar Estatisticas Rápidas';
        # Clients
        $lang['zip_from_date']            = 'Da Data:';
        $lang['zip_to_date']              = 'Até a Data:';
        $lang['client_zip_payments']      = 'Pagamentos ZIP';
        $lang['client_zip_invoices']      = 'Faturamentos ZIP';
        $lang['client_zip_estimates']     = 'Orçamentos ZIP';
        $lang['client_zip_status']        = 'Status';
        $lang['client_zip_status_all']    = 'Todos';
        $lang['client_zip_payment_modes'] = 'Pagamento realizado por';
        $lang['client_zip_no_data_found'] = 'Nenhum %s encontrado';

        # Payments
        $lang['payment_mode']         = 'Modo de Pagamento';
        $lang['payment_view_heading'] = 'Pagamento';

        # Settings
        $lang['settings_allow_payment_amount_to_be_modified']               = 'Permitir que o Cadastro altere o valor a pagar (para pagamentos online)';
        $lang['settings_survey_send_emails_per_cron_run']                   = 'Quantos e-mails enviar por hora';
        $lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Esta opção é usada quando a pesquisa é emviada. A Pesquisa cron é realizada a cada 5 minutos. Então você pode definir quantos e-mails serão enviados a cada 5 minutos';
        $lang['settings_delete_only_on_last_invoice']                       = 'Permitir ao Cadastro Deletar apenas a última fatura';
        $lang['settings_sales_estimate_prefix']                             = 'Prefixo do orçamento';
        $lang['settings_sales_next_estimate_number']                        = 'Próxima Sequência Númérica do orçamento';
        $lang['settings_sales_next_estimate_number_tooltip']                = 'Defina esse campo para 1 se você quiser começar pelo início';
        $lang['settings_sales_decrement_estimate_number_on_delete']         = 'Diminuir o número da sequência do orçamento, ao deletar';
        $lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Você quer diminuir a sequência do número do orçamento, quando o último for deletado? Ex. Se esta opção estiver definida para SIM e o orçamento anterior, de número 15, for deletado, o número seguinte será 15. Se estiver definida como Não, o próximo número de orçamento será 16';
        $lang['settings_sales_estimate_number_format']                      = 'Formato do número do orçamento';
        $lang['settings_sales_estimate_number_format_year_based']           = 'Ano de Base';
        $lang['settings_sales_estimate_number_format_number_based']         = 'Número de Base (000001)';
        $lang['settings_delete_only_on_last_estimate']                      = 'Permitir Deletar orçamento, apenas na última fatura';
        $lang['settings_send_test_email_heading']                           = 'Enviar E-mail Teste';
        $lang['settings_send_test_email_subheading']                        = 'Enviar e-mail teste para garantir que suas configurações SMTP estão definidas corretamente.';
        $lang['settings_send_test_email_string']                            = 'Endereço de E-mail';
        $lang['settings_smtp_settings_heading']                             = 'Configurações SMTP';
        $lang['settings_smtp_settings_subheading']                          = 'Configurar e-mail principal';
        $lang['settings_sales_heading_general']                             = 'Geral';
        $lang['settings_sales_heading_invoice']                             = 'Fatura';
        $lang['settings_sales_heading_estimates']                           = 'Orçamento';
        $lang['settings_sales_cron_invoice_heading']                        = 'Fatura';

        # Tasks
        $lang['tasks_dt_datestart'] = 'Data de Início';

        # Invoice General
        $lang['invoice_discount'] = 'Desconto';

        # Settings
        $lang['settings_rtl_support_admin']                                   = 'RTL Área Admin (Direita para Esquerda)';
        $lang['settings_rtl_support_client']                                  = 'RTL Área do Cadastro (Direita para Esquerda)';
        $lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto conversão de orçamento para fatura, após o Cadastro aceitar';
        $lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir Orçamento com status de Rascunho da área do Cadastro';

        # Months
        $lang['January']   = 'Janeiro';
        $lang['February']  = 'Fevereiro';
        $lang['March']     = 'Março';
        $lang['April']     = 'Abril';
        $lang['May']       = 'Maio';
        $lang['June']      = 'Junho';
        $lang['July']      = 'Julho';
        $lang['August']    = 'Agosto';
        $lang['September'] = 'Setembro';
        $lang['October']   = 'Outubro';
        $lang['November']  = 'Novembro';
        $lang['December']  = 'Dezembro';

        # Time ago function translate
        $lang['time_ago_just_now']  = 'Agora mesmo';
        $lang['time_ago_minute']    = 'um minuto atrás';
        $lang['time_ago_minutes']   = '%s minutos atrás';
        $lang['time_ago_hour']      = 'uma hora atrás';
        $lang['time_ago_hours']     = '%s horas atrás';
        $lang['time_ago_yesterday'] = 'ontem';
        $lang['time_ago_days']      = '%s dias atrás';
        $lang['time_ago_week']      = 'uma semana atrás';
        $lang['time_ago_weeks']     = '%s semanas atrás';
        $lang['time_ago_month']     = 'um mês atrás';
        $lang['time_ago_months']    = '%s meses atrás';
        $lang['time_ago_year']      = 'um ano atrás';
        $lang['time_ago_years']     = '%s anos atrás';


        # Estimates
        $lang['estimates']                          = 'Orçamentos';
        $lang['estimate']                           = 'Orçamento';
        $lang['estimate_lowercase']                 = 'orçamento';
        $lang['create_new_estimate']                = 'Criar Novo Orçamento';
        $lang['view_estimate']                      = 'Visualizar Orçamento';
        $lang['estimate_sent_to_client_success']    = 'O Orçamento foi enviado com sucesso para o Cadastro';
        $lang['estimate_sent_to_client_fail']       = 'Problema ao enviar o Orçamento';
        $lang['estimate_view']                      = 'Visualizar Orçamento';
        $lang['estimate_select_customer']           = 'Cadastro';
        $lang['estimate_add_edit_number']           = 'Número do Orçamento';
        $lang['estimate_add_edit_date']             = 'Data do Orçamento';
        $lang['estimate_add_edit_expirydate']       = 'Data de Expiração';
        $lang['estimate_add_edit_currency']         = 'Moeda';
        $lang['estimate_add_edit_client_note']      = 'Nota do Cadastro';
        $lang['estimate_add_edit_admin_note']       = 'Nota do Admin';
        $lang['estimates_toggle_table_tooltip']     = 'Tabela de alternância';
        $lang['estimate_add_edit_advanced_options'] = 'Opções Avançadas';
        $lang['estimate_to']                        = 'Para';
        $lang['estimates_list_all']                 = 'Todos';

        $lang['estimate_invoiced_date']                  = 'Estimar Fatura em %s';
        $lang['edit_estimate_tooltip']                   = 'Editar orçamento';
        $lang['delete_estimate_tooltip']                 = 'Deletar orçamento';
        $lang['estimate_sent_to_email_tooltip']          = 'Enviar E-mail';
        $lang['estimate_already_send_to_client_tooltip'] = 'Esse orçamento já foi enviado para o Cadastro %s';
        $lang['estimate_view_activity_tooltip']          = 'Registro de Atividade';

        $lang['estimate_send_to_client_modal_heading']    = 'Enviar esse orçamento para o Cadastro';
        $lang['estimate_send_to_client_attach_pdf']       = 'Anexar orçamento em PDF';
        $lang['estimate_send_to_client_preview_template'] = 'Pré-visualização do Modelo de e-mail';

        $lang['estimate_dt_table_heading_number']     = 'orçamento #';
        $lang['estimate_dt_table_heading_date']       = 'Data';
        $lang['estimate_dt_table_heading_client']     = 'Cadastro';
        $lang['estimate_dt_table_heading_expirydate'] = 'Data de Expiração';
        $lang['estimate_dt_table_heading_amount']     = 'Valor';
        $lang['estimate_dt_table_heading_status']     = 'Status';

        $lang['estimate_convert_to_invoice'] = 'Converter a Fatura';

        # Clients
        $lang['client_payments_tab'] = 'Pagamentos';

        # Estimate General
        $lang['estimate_pdf_heading']            = 'Orçamento';
        $lang['estimate_table_item_heading']     = 'Item';
        $lang['estimate_table_quantity_heading'] = 'Qtd';
        $lang['estimate_table_rate_heading']     = 'Vlr.Unitario';
        $lang['estimate_table_tax_heading']      = 'Taxa';
        $lang['estimate_table_amount_heading']   = 'Valor';
        $lang['estimate_subtotal']               = 'Sub Total';
        $lang['estimate_adjustment']             = 'Ajuste';
        $lang['estimate_discount']               = 'Desconto';
        $lang['estimate_total']                  = 'Total';
        $lang['estimate_to']                     = 'Para';
        $lang['estimate_data_date']              = 'Data Estimada';
        $lang['estimate_data_expiry_date']       = 'Data de Expiração';
        $lang['estimate_note']                   = 'Nota:';
        $lang['estimate_status_draft']           = 'Rascunho';
        $lang['estimate_status_sent']            = 'Enviado';
        $lang['estimate_status_declined']        = 'Declinado';
        $lang['estimate_status_accepted']        = 'Aceito';
        $lang['estimate_status_expired']         = 'Expirado';
        $lang['estimate_note']                   = 'Nota:';

        ## Clients
        $lang['clients_estimate_dt_number']             = 'Orçamento #';
        $lang['clients_estimate_dt_date']               = 'Data';
        $lang['clients_estimate_dt_duedate']            = 'Data de Expiração';
        $lang['clients_estimate_dt_amount']             = 'Valor';
        $lang['clients_estimate_dt_status']             = 'Status';
        $lang['clients_nav_estimates']                  = 'Orçamentos';
        $lang['clients_decline_estimate']               = 'Recusar';
        $lang['clients_accept_estimate']                = 'Aceitar';
        $lang['clients_my_estimates']                   = 'Orçamentos';
        $lang['clients_estimate_invoiced_successfully'] = 'Orçamento aceito! Aqui está a fatura desse orçamento';
        $lang['clients_estimate_accepted_not_invoiced'] = 'Obrigada por aceitar esse orçamento';
        $lang['clients_estimate_declined']              = 'Orçamento anulado pelo sistema! Você só pode aceitar orçamentos que não estão expirados/vencidos.';
        $lang['clients_estimate_failed_action']         = 'Falha na ação para esse orçamento';
        $lang['client_add_edit_profile']                = 'Cadastro';

        # Custom Fields
        $lang['custom_field']                          = 'Campo Personalizado';
        $lang['custom_field_lowercase']                = 'campo personalizado';
        $lang['custom_fields']                         = 'Campos Personalizados';
        $lang['new_custom_field']                      = 'Novo Campo Personalizado';
        $lang['custom_field_name']                     = 'Nome do Campo';
        $lang['custom_field_add_edit_type']            = 'Tipo';
        $lang['custom_field_add_edit_belongs_top']     = 'Campo Pertencente a';
        $lang['custom_field_add_edit_options']         = 'Opções';
        $lang['custom_field_add_edit_options_tooltip'] = 'Use apenas para tipos Selecionados. Preencha o campo separando as opções por vírgulas. Ex. maça,laranja,banana';
        $lang['custom_field_add_edit_order']           = 'Pedido';

        $lang['custom_field_dt_field_to']       = 'Pertencente a';
        $lang['custom_field_dt_field_name']     = 'Nome';
        $lang['custom_field_dt_field_type']     = 'Tipo';
        $lang['custom_field_add_edit_active']   = 'Ativo';
        $lang['custom_field_add_edit_disabled'] = 'Desabilitado';

        # Ticket replies
        $lang['ticket_reply'] = 'Resposta do Tíquete';

        # Admin Customizer Sidebar
        $lang['asc_custom_fields'] = 'Campos Personalizados';

        # Contracts
        $lang['contract_types']          = 'Tipos de Contratos';
        $lang['contract_type']           = 'Tipo de contrato';
        $lang['new_contract_type']       = 'Novo Tipo de Contrato';
        $lang['contract_type_lowercase'] = 'contrato';
        $lang['contract_type_name']      = 'Nome';
        $lang['contract_types_list_name'] = 'Tipo de Contrato';
        $lang['acs_contracts']      = 'Contratos';
        $lang['acs_contract_types'] = 'Tipos de Contrato';       
        $lang['invoice_item_long_description'] = 'Descrição Longa';
        $lang['clients_list_phone']                = 'Telefone';
        $lang['client_expenses_tab']               = 'Despesas';
        $lang['customers_summary']                 = 'Resumo dos Cadastros';
        $lang['customers_summary_active']          = 'Contatos ativos';
        $lang['customers_summary_inactive']        = 'Contatos inativos';
        $lang['customers_summary_logged_in_today'] = 'Logados Hoje';

        # Authentication
        $lang['admin_auth_forgot_password_email']     = 'Endereço de E-mail';
        $lang['admin_auth_forgot_password_heading']   = 'Senha Esquecida';
        $lang['admin_auth_login_heading']             = 'Entrar';
        $lang['admin_auth_login_email']               = 'Endereço de E-mail';
        $lang['admin_auth_login_password']            = 'Senha';
        $lang['admin_auth_login_remember_me']         = 'Lembre-se de mim';
        $lang['admin_auth_login_button']              = 'Entrar';
        $lang['admin_auth_login_fp']                  = 'Senha Esquecida?';
        $lang['admin_auth_reset_password_heading']    = 'Redefinir senha';
        $lang['admin_auth_reset_password']            = 'Senha';
        $lang['admin_auth_reset_password_repeat']     = 'Repetir a senha';
        $lang['admin_auth_invalid_email_or_password'] = 'E-mail inválido ou senha';
        $lang['admin_auth_inactive_account']          = 'Conta inativa';
        # Calender
        $lang['calendar_estimate']          = 'Orçamento';
        $lang['calendar_invoice']           = 'Fatura';
        $lang['calendar_contract']          = 'Contrato';
        $lang['calendar_customer_reminder'] = 'Lembrete ao Cadastro';
        $lang['calendar_event']             = 'Evento';
        $lang['calendar_task']              = 'Tarefa';
        # Leads
        $lang['lead_edit_delete_tooltip'] = 'Deletar Lead';
        $lang['lead_attachments']         = 'Anexos';
        # Admin Customizer Sidebar
        $lang['acs_finance'] = 'Finanças';
        # Settings
        $lang['settings_show_sale_agent_on_invoices']       = 'Mostrar o Agente de Venda na Fatura';
        $lang['settings_show_sale_agent_on_estimates']      = 'Mostrar o Agente da Venda no orçamento';
        $lang['settings_predefined_predefined_term']        = 'Termos e Condições predefinidos';
        $lang['settings_predefined_clientnote']             = 'Nota do Cadastro Predefinida';
        $lang['settings_custom_pdf_logo_image_url']         = 'Personalizar o Logotipo da Empresa no PDF';
        $lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Você pode ter problemas com imagens PNG, com transparência tratadas de forma diferente do normal/padrão, dependendo da versão do módulo php-imagick ou php-gd, usado no seu servidor de hospedagem. Caso perceba algum erro, tente atualizar o php-imagick e desabilitar o php-gd.
        Se você deixar este campo em branco, o logo que você carregou, nas configurações da sua empresa, será usado automaticamente.';

        # General
        $lang['sale_agent_string']               = 'Agente de Venda';
        $lang['amount_display_in_base_currency'] = 'Valor está exibida na sua moeda base';

        # Leads
        $lang['leads_summary'] = 'Resumo de Leads';

        # Contracts
        $lang['contract_value']                       = 'Valor do Contrato';
        $lang['contract_trash']                       = 'Inativo';
        $lang['contracts_view_trash']                 = 'Visualizar Inativos';
        $lang['contracts_view_all']                   = 'Todos';
        $lang['contracts_view_exclude_trashed']       = 'Ocultar os Contratos Inativos';
        $lang['contract_value_tooltip']               = 'Adicionar valor de contrato. O valor será exibido na sua moeda base.';
        $lang['contract_trash_tooltip']               = 'Se você adicionar um contrato a inativo, não será mostrado no lado do Cadastro, não será incluido no gráfico e outras estatisticas e também por padrão não será mostrado quando você listar todos os contratos.';
        $lang['contract_renew_heading']               = 'Renovar contrato';
        $lang['contract_summary_heading']             = 'Resumo do contrato';
        $lang['contract_summary_expired']             = 'Expirado';
        $lang['contract_summary_active']              = 'Ativo';
        $lang['contract_summary_about_to_expire']     = 'Próximo de Expirar';
        $lang['contract_summary_recently_added']      = 'Recentemente adicionado';
        $lang['contract_summary_trash']               = 'Inativo';
        $lang['contract_summary_by_type']             = 'Contratos por Tipo';
        $lang['contract_summary_by_type_value']       = 'Tipos de Contratos, por Valor';
        $lang['contract_renewed_successfully']        = 'Contrato renovado com sucesso';
        $lang['contract_renewed_fail']                = 'Problema ao renovar o contrato. Entre em contato com o administrador';
        $lang['no_contract_renewals_found']           = 'Renovações para este contrato não encontradas';
        $lang['no_contract_renewals_history_heading'] = 'Histórico de Renovação do Contrato';
        $lang['contract_renewed_by']                  = '%s renovado este contrato';
        $lang['contract_renewal_deleted']             = 'Renovação deletada com sucesso';
        $lang['contract_renewal_delete_fail']         = 'Falha ao deletar o contrato renovado. Entre em contato com o administrador';
        $lang['contract_renewal_new_value']           = 'Novo Valor de Contrato: %s';
        $lang['contract_renewal_old_value']           = 'Antigo Valor de Contrato: %s';
        $lang['contract_renewal_new_start_date']      = 'Nova Data de Início: %s';
        $lang['contract_renewal_old_start_date']      = 'No Contrato Antigo a Data de Início era: %s';
        $lang['contract_renewal_new_end_date']        = 'Nova Data Final: %s';
        $lang['contract_renewal_old_end_date']        = 'No Contrato Antigo a Data Final era: %s';
        $lang['contract_attachment']                  = 'Anexo';

        # Admin Aside Menu
        $lang['als_goals_tracking']     = 'Rastreamento de Metas';
        $lang['als_expenses']           = 'Despesas';
        $lang['als_reports_expenses']   = 'Despesas';
        $lang['als_expenses_vs_income'] = 'Despesas vs Renda';

        # Invoices
        $lang['invoice_attach_file']           = 'Arquivo Anexo';
        $lang['invoice_mark_as_sent']          = 'Marcar como Enviado';
        $lang['invoice_marked_as_sent']        = 'Fatura marcada como enviada com sucesso';
        $lang['invoice_marked_as_sent_failed'] = 'Falha ao marcar a fatura como enviada';

        # Goals Tracking
        $lang['goals']                                                          = 'Metas';
        $lang['goal']                                                           = 'Meta';
        $lang['goals_tracking']                                                 = 'Rastrear Metas';
        $lang['new_goal']                                                       = 'Nova meta';
        $lang['goal_lowercase']                                                 = 'meta';
        $lang['goal_start_date']                                                = 'Data de Início';
        $lang['goal_end_date']                                                  = 'Data Final';
        $lang['goal_subject']                                                   = 'Assunto';
        $lang['goal_description']                                               = 'Descrição';
        $lang['goal_type']                                                      = 'Tipo de meta';
        $lang['goal_achievement']                                               = 'Realização';
        $lang['goal_contract_type']                                             = 'Tipo de Contrato';
        $lang['goal_notify_when_fail']                                          = 'Notificar membros da equipe quando a meta NÃO for alcançada';
        $lang['goal_notify_when_achieve']                                       = 'Notificar membros da equipe quando a meta for alcançada';
        $lang['goal_progress']                                                  = 'Progresso';
        $lang['goal_total']                                                     = 'Total: %s';
        $lang['goal_result_heading']                                            = 'Progresso da Meta';
        $lang['goal_income_shown_in_base_currency']                             = 'Renda total é mostrada na sua moeda base';
        $lang['goal_notify_when_end_date_arrives']                              = 'Os membros do staff serão notificados quando a ata final chegar.';
        $lang['goal_staff_members_notified_about_achievement']                  = 'Os membros do staff são notificados sobre a realização da meta';
        $lang['goal_staff_members_notified_about_failure']                      = 'Os membros do Staff são notificados sobre as falhas';
        $lang['goal_notify_staff_manually']                                     = 'Notificar os Membros Staff Manualmente';
        $lang['goal_notify_staff_notified_manually_success']                    = 'Os membros do staff são notificados sobre o resultado dessa meta';
        $lang['goal_notify_staff_notified_manually_fail']                       = 'Falha ao notificar os membros do staff sobre o resultado dessa meta';
        $lang['goal_achieved']                                                  = 'Meta alcançada';
        $lang['goal_failed']                                                    = 'Meta NÃO alcançada';
        $lang['goal_close']                                                     = 'Meta QUASE Alcançada';
        $lang['goal_type_total_income']                                         = 'Renda Total Alcançada';
        $lang['goal_type_convert_leads']                                        = 'Conversão X Leads';
        $lang['goal_type_increase_customers_without_leads_conversions']         = 'Aumentar o Número de Cadastros';
        $lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Conversão de Leads está Excluida';
        $lang['goal_type_increase_customers_with_leads_conversions']            = 'Aumentar o Número de Cadastros';
        $lang['goal_type_increase_customers_with_leads_conversions_subtext']    = 'Conversão de Leads está Incluida';
        $lang['goal_type_make_contracts_by_type_calc_database']                 = 'Fazer Contratos por Tipo';
        $lang['goal_type_make_contracts_by_type_calc_database_subtext']         = 'É calculado a partir dos dados adicionados na base de dados';
        $lang['goal_type_make_contracts_by_type_calc_date']                     = 'Fazer Contratos por Tipo';
        $lang['goal_type_make_contracts_by_type_calc_date_subtext']             = 'É calculado a partir da data de início do contrato';
        $lang['goal_type_total_estimates_converted']                            = 'X Conversões Estimadas ';
        $lang['goal_type_total_estimates_converted_subtext']                    = 'Serão tomados apenas Orçamentos, que serão convertidos em faturas';
        $lang['goal_type_income_subtext']                                       = 'A renda será calculada na sua moeda base (não convertida)';
        # Payments
        $lang['payment_transaction_id'] = 'ID da Transação';
        # Settings Menu
        $lang['acs_expense_categories'] = 'Categorias de Despesas';
        # Expenses
        $lang['expense_category']                             = 'Categoria da Despesa';
        $lang['expense_category_lowercase']                   = 'Categoria da despesa';
        $lang['new_expense']                                  = 'Gravar a Despesa';
        $lang['expense_add_edit_name']                        = 'Nome da Categoria';
        $lang['expense_add_edit_description']                 = 'Descrição da Categoria';
        $lang['expense_categories']                           = 'Categorias de Despesas';
        $lang['new_expense_category']                         = 'Nova Categoria';
        $lang['dt_expense_description']                       = 'Descrição';
        $lang['expense']                                      = 'Despesa';
        $lang['expenses']                                     = 'Despesas';
        $lang['expense_lowercase']                            = 'despesa';
        $lang['expense_add_edit_customer']                    = 'Cadastro';
        $lang['expense_add_edit_note']                        = 'Nota';
        $lang['expense_add_edit_date']                        = 'Data da despesa';
        $lang['expense_add_edit_amount']                      = 'Valor';
        $lang['expense_add_edit_billable']                    = 'Faturável';
        $lang['expense_add_edit_attach_receipt']              = 'Recibo Anexo';
        $lang['expense_add_edit_reference_no']                = 'Referência #';
        $lang['expense_receipt']                              = 'Recibo da Despesa';
        $lang['expense_receipt_lowercase']                    = 'recibo da despesa';
        $lang['expense_dt_table_heading_category']            = 'Categoria';
        $lang['expense_dt_table_heading_amount']              = 'Valor';
        $lang['expense_dt_table_heading_date']                = 'Data';
        $lang['expense_dt_table_heading_reference_no']        = 'Referência #';
        $lang['expense_dt_table_heading_customer']            = 'Cadastro';
        $lang['expense_dt_table_heading_payment_mode']        = 'Modo de pagamento';
        $lang['expense_converted_to_invoice']                 = 'Despesa convertida com sucesso a fatura';
        $lang['expense_converted_to_invoice_fail']            = 'Falha ao converter essa despesa para faturar o registro de erro de verificação.';
        $lang['expense_copy_success']                         = 'A despesa foi copiada com sucesso.';
        $lang['expense_copy_fail']                            = 'Falha ao copiar despesa. Por favor, verifique os campos obrigatórios e tente novamente';
        $lang['expenses_list_all']                            = 'Todos';
        $lang['expenses_list_billable']                       = 'Faturável';
        $lang['expenses_list_non_billable']                   = 'Não Faturada';
        $lang['expenses_list_invoiced']                       = 'Faturada';
        $lang['expenses_list_unbilled']                       = 'Não Faturada';
        $lang['expenses_list_recurring']                      = 'Recorrente';
        $lang['expense_invoice_delete_not_allowed']           = 'Você não pode excluir essa despesa. A despesa já está faturada.';
        $lang['expense_convert_to_invoice']                   = 'Converter Para Fatura';
        $lang['expense_add_to_cashflow']                      = 'Adicionar';
        $lang['expense_del_from_cashflow']                    = 'Remover';
        $lang['expense_edit']                                 = 'Editar Despesas';
        $lang['expense_delete']                               = 'Deletar';
        $lang['expense_copy']                                 = 'Copiar';
        $lang['expense_invoice_not_created']                  = 'Fatura Não Criada';
        $lang['expense_billed']                               = 'Faturada';
        $lang['expense_not_billed']                           = 'Não Faturada';
        $lang['expense_customer']                             = 'Cadastro';
        $lang['expense_note']                                 = 'Nota:';
        $lang['expense_date']                                 = 'Data:';
        $lang['expense_ref_noe']                              = 'Ref #:';
        $lang['expense_amount']                               = 'Valor:';
        $lang['expense_recurring_indicator']                  = 'Recorrente';
        $lang['expense_already_invoiced']                     = 'Esta despesa já está faturada';
        $lang['expense_recurring_auto_create_invoice']        = 'Auto Criação da Fatura';
        $lang['expense_recurring_send_custom_on_renew']       = 'Enviar a fatura por e-mail ao Cadastro quando repetida despesa';
        $lang['expense_recurring_autocreate_invoice_tooltip'] = 'Se esta opção estiver marcada a fatura para o Cadastro será auto criada quando a despesa for renovada.';
        $lang['expenses_yearly_by_categories']                = 'Despesas anuais por Categorias';
        $lang['total_expenses_for']                           = 'Total de Despesas para'; // year
        $lang['expenses_report_for']                          = 'Despesas para'; // year
        # Custom fields
        $lang['custom_field_required']    = 'Necessário';
        $lang['custom_field_show_on_pdf'] = 'Mostrar em PDF';
        $lang['custom_field_leads']       = 'Leads';
        $lang['custom_field_customers']   = 'Cadastros';
        $lang['custom_field_staff']       = 'Staff';
        $lang['custom_field_contracts']   = 'Contratos';
        $lang['custom_field_tasks']       = 'Tarefas';
        $lang['custom_field_expenses']    = 'Despesas';
        $lang['custom_field_invoice']     = 'Fatura';
        $lang['custom_field_estimate']    = 'Orçamento';
        # Tickets
        $lang['ticket_single_private_staff_notes'] = 'Notas Privadas para o Staff';


        # Business News
        $lang['business_news'] = 'Notícias';

        # Navigation
        $lang['nav_todo_items'] = 'Itens de Tarefas';
        # Clients
        # Contracts
        $lang['clients_contracts_type'] = 'Tipo de Contrato';

        $lang['no_tax']                              = 'Sem Taxa';
        $lang['numbers_not_formatted_while_editing'] = 'A tarifa no campo de entrada não está formatada quando editar/adicionar item e deve permanecer não formatada não tente formatá-la manualmente aqui.';
        $lang['contracts_view_expired']         = 'Expirado';
        $lang['contracts_view_without_dateend'] = 'Contratos Sem Data Final';

        # Email Templates
        $lang['email_template_contracts_fields_heading'] = 'Contratos';
        # Invoices General
        $lang['invoice_estimate_general_options'] = 'Opções Gerais';
        $lang['invoice_table_item_description']   = 'Descrição';
        $lang['invoice_recurring_indicator']      = 'Recorrente';

        # Estimates
        $lang['estimate_convert_to_invoice_successfully'] = 'Orçamento convertido para fatura com sucesso!';
        $lang['estimate_table_item_description']          = 'Descrição';

        $lang['cant_delete_base_currency'] = 'Você não pode excluir a moeda base. É necessário atribuir uma nova moeda de base para excluir esta.';
        $lang['invoice_copy']              = 'Copiar Fatura';
        $lang['invoice_copy_success']      = 'Fatura copiada com sucesso';
        $lang['invoice_copy_fail']         = 'Falha ao copiar a fatura';
        $lang['invoice_due_after_help']    = 'Definir zero para evitar cálculo';
        $lang['show_shipping_on_invoice']  = 'Mostrar detalhes do envio em fatura';

        # Estimates
        $lang['show_shipping_on_estimate']         = 'Mostrar detalhes de envio em Orçamentos';
        $lang['is_invoiced_estimate_delete_error'] = 'Esse orçamento está faturado. Você não pode deletar o orçamento';

        # Customers & Invoices / Estimates
        $lang['ship_to']                            = 'Entregar para';
        $lang['customer_profile_details']           = 'Detalhes do Cadastro';
        $lang['billing_shipping']                   = 'Fatura e Entrega';
        $lang['billing_address']                    = 'Endereço para Fatura';
        $lang['shipping_address']                   = 'Endereço de Entrega';
        $lang['billing_street']                     = 'Rua';
        $lang['billing_city']                       = 'Cidade';
        $lang['billing_state']                      = 'Estado';
        $lang['billing_zip']                        = 'CEP';
        $lang['billing_country']                    = 'País';
        $lang['shipping_street']                    = 'Rua';
        $lang['shipping_city']                      = 'Cidade';
        $lang['shipping_state']                     = 'Estado';
        $lang['shipping_zip']                       = 'CEP';
        $lang['shipping_country']                   = 'País';
        $lang['get_shipping_from_customer_profile'] = 'Obter detalhes do envio de perfil de Cadastro';

        # Customer
        $lang['customer_default_currency']                             = 'Moeda Padrão';
        $lang['customer_update_address_info_on_invoices']              = 'Atualizar a informação de entrega/cobrança em todas as faturas/Orçamentos anteriores';
        $lang['customer_update_address_info_on_invoices_help']         = 'Se você marcar esse campo de entrega, as informações de faturamento serão atualizadas para todas as faturas e Orçamentos. Nota: As faturas com status de pagas não serão afetadas.';
        $lang['setup_google_api_key_customer_map']                     = 'Configuração google api key a fim de visualizar o mapa personalizado';
        $lang['customer_attachments_file']                             = 'Arquivo';
        $lang['client_send_set_password_email']                        = 'Enviar e-mail ao contato, solicitando para ele escolher sua senha';
        $lang['customer_billing_same_as_profile']                      = 'Mesma Informações do Cadastro';
        $lang['customer_billing_copy']                                 = 'Copiar Endereço de Faturamento';
        $lang['customer_map']                                          = 'Mapa';
        $lang['set_password_email_sent_to_client']                     = 'E-mail para definir a senha é enviada com sucesso para o Cadastro';
        $lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil atualizado e e-mail enviado para definir a senha é enviada com sucesso para o Cadastro';
        $lang['customer_attachments']                                  = 'Arquivos';
        $lang['customer_attachments_not_showed']                       = 'Nesta tabela não serão mostrados os arquivos anexados por (projetos, atividades ou tarefas)';
        //'Files from projects and tasks linked to the customer are not shown on this table'
        $lang['customer_longitude']                                    = 'Longitude (Google Maps)';
        $lang['customer_latitude']                                     = 'Latitude (Google Maps)';

        # Authentication
        $lang['admin_auth_set_password']         = 'Senha';
        $lang['admin_auth_set_password_repeat']  = 'Repetir a Senha';
        $lang['admin_auth_set_password_heading'] = 'Definir Senha';
        # General
        $lang['apply']                         = 'Aplicar';
        $lang['department_calendar_id']        = 'Google Calendar ID';
        $lang['localization_default_language'] = 'Idioma Padrão';
        $lang['system_default_string']         = 'Sistema Padrão';
        $lang['advanced_options']              = 'Opções Avançadas';
        # Expenses
        $lang['expense_list_invoice']             = 'Faturado';
        $lang['expense_list_billed']              = 'Faturado';
        $lang['expense_list_unbilled']            = 'Não faturar'; # Leads
        $lang['lead_merge_custom_field']          = 'Mesclar como campo personalizado';
        $lang['lead_merge_custom_field_existing'] = 'Mesclar com o campo de banco de dados existente';
        $lang['lead_dont_merge_custom_field']     = 'Não misturar';
        $lang['lost_leads']                       = 'Leads Perdidos';
        $lang['junk_leads']                       = 'Leads no Lixo';
        $lang['lead_mark_as_lost']                = 'Marcar como perdido';
        $lang['lead_unmark_as_lost']              = 'Desmarcar Lead como perdido';
        $lang['lead_marked_as_lost']              = 'Lead marcado como perdido com sucesso';
        $lang['lead_unmarked_as_lost']            = 'Lead desmarcado como perdido com sucesso';
        $lang['leads_status_color']               = 'Cor';
        $lang['lead_mark_as_junk']                = 'Marcado como lixo';
        $lang['lead_unmark_as_junk']              = 'Desmarcado Lead como lixo';
        $lang['lead_marked_as_junk']              = 'Lead marcado como lixo com sucesso';
        $lang['lead_unmarked_as_junk']            = 'Lead desmarcado como lixo com sucesso';
        $lang['lead_not_found']                   = 'Lead Não Encontrado';
        $lang['lead_lost']                        = 'Perdido';
        $lang['lead_junk']                        = 'Lixo';
        $lang['leads_not_assigned']               = 'Não Atribuído';
        # Contacts
        $lang['contract_not_visible_to_client'] = 'Ocultar do Cadastro';
        $lang['contract_edit_overview']         = 'Visão Geral do Contrato';
        $lang['contract_attachments']           = 'Anexos';
        # Tasks
        $lang['task_view_make_public']     = 'Tornar público';
        $lang['task_is_private']           = 'Tarefa privada';
        $lang['task_finished']             = 'Concluida';
        $lang['task_single_related']       = 'Relacionada';
        $lang['task_unmark_as_complete']   = 'Desmarcar como completa';
        $lang['task_unmarked_as_complete'] = 'Tarefa desmarcada como concluída';
        $lang['task_relation']             = 'Relacionado';
        $lang['task_public']               = 'Público';
        $lang['task_public_help']          = 'Se você definir essa tarefa como pública ela será visível para todos os membros da equipe. Caso contrário, será apenas visível para os membros que são remetentes, seguidores, criadores ou administradores';
        # Settings
        $lang['settings_general_favicon']                                            = 'Favicon';
        $lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Documentos de saída do Cadastro em PDF da área de administração no idioma do Cadastro';
        $lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Se esta opção estiver definida como sim e por ex. o idioma padrão do sistema é Inglês e o Cadastro têm idioma de configuração em francês os documentos em PDF serão emitidos na língua do Cadastro';
        $lang['settings_cron_surveys']                                               = 'Pesquisas';
        $lang['settings_default_tax']                                                = 'Taxa Padrão';
        $lang['setup_calendar_by_departments']                                       = 'Configurar calendário dos Departamentos (clique aqui para criar/editar Departamentos)';
        $lang['settings_calendar']                                                   = 'Calendário';
        $lang['settings_sales_invoice_due_after']                                    = 'A Fatura é considerada devida/atrasada/não paga, depois de (dias)';
        $lang['settings_google_api']                                                 = 'Google API Key';
        $lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID (Geral da Empresa)';
        $lang['settings_gcal_main_calendar_id_help']                                 = 'Este é o calendário geral da empresa. Todos os eventos deste calendário serão mostrados. Se deseja especificar um calendário individual, para cada departamento, você pode adiciona-lo através do menu Suporte>Departamentos>Google Calendar ID.';

        $lang['show_on_calendar']                    = 'Mostrar no Calendário';
        $lang['show_invoices_on_calendar']           = 'Faturas';
        $lang['show_estimates_on_calendar']          = 'Orçamentos';
        $lang['show_contracts_on_calendar']          = 'Contratos';
        $lang['show_tasks_on_calendar']              = 'Tarefas';
        $lang['show_customer_reminders_on_calendar'] = 'Lembretes de Cadastros';
        # Leads
        $lang['copy_custom_fields_convert_to_customer']                      = 'Copiar os campos personalizados ao perfil do Cadastro';
        $lang['copy_custom_fields_convert_to_customer_help']                 = 'Se qualquer um dos seguintes campos personalizados não existir para o Cadastro será automaticamente criado com o mesmo nome de outra forma apenas o valor será copiado do perfil do lead.';
        $lang['lead_profile']                                                = 'Cadastro';
        $lang['lead_is_client']                                              = 'Cadastro';
        $lang['leads_email_integration_folder_no_encryption']                = 'Sem Criptografia';
        $lang['leads_email_integration']                                     = 'Integração com E-mail';
        $lang['leads_email_active']                                          = 'Ativo';
        $lang['leads_email_integration_imap']                                = 'Servidor IMAP';
        $lang['leads_email_integration_email']                               = 'Endereço de e-mail';
        $lang['leads_email_integration_password']                            = 'Senha';
        $lang['leads_email_integration_default_source']                      = 'Fonte Padrão';
        $lang['leads_email_integration_check_every']                         = 'Verificar a cada (minutos)';
        $lang['leads_email_integration_default_assigned']                    = 'Responsável pelo novo lead';
        $lang['leads_email_encryption']                                      = 'Criptografia';
        $lang['leads_email_integration_updated']                             = 'E-mail de Integração Atualizado';
        $lang['leads_email_integration_default_status']                      = 'Status Padrão do Lead';
        $lang['leads_email_integration_folder']                              = 'Pasta';
        $lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar quando o lead for importado';
        $lang['leads_email_integration_only_check_unseen_emails']            = 'Verificar apenas os e-mails não abertos';
        $lang['leads_email_integration_only_check_unseen_emails_help']       = 'O script irá auto definir o e-mail para estar aberto após verificação. Isto é usado para evitar a verificação de todos os e-mails novamente e novamente. Não é recomendado desmarcar esta opção se você tem muitos e-mails e você tem uma configuração de encaminhamento de e-mails da configuração para leads';
        $lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificar se o lead foi enviado por e-mail múltiplas vezes';
        $lang['leads_email_integration_test_connection']                     = 'Teste da Conexão IMAP';
        $lang['lead_email_connection_ok']                                    = 'Conexão IMAP está boa';
        $lang['lead_email_connection_not_ok']                                = 'Conexão IMAP não está correta';
        $lang['lead_email_activity']                                         = 'Atividade de E-mail';
        $lang['leads_email_integration_notify_roles']                        = 'Função para Notificar';
        $lang['leads_email_integration_notify_staff']                        = 'Membros da equipe para Notificar';
        $lang['lead_public']                                                 = 'Público';
        # Knowledge Base

        $lang['kb_group_color'] = 'Cor';
        $lang['kb_group_order'] = 'Pedido';
        # Utilities - BULK PDF Exporter
        $lang['activities_admin']              = 'Administração de atividades';

        $lang['bulk_pdf_exporter']             = 'Exportador de PDF em Massa';
        $lang['bulk_export_pdf_payments']      = 'Pagamentos';
        $lang['bulk_export_pdf_estimates']     = 'Orçamentos';
        $lang['bulk_export_pdf_invoices']      = 'Faturas';
        $lang['bulk_pdf_export_button']        = 'Exportar';
        $lang['bulk_pdf_export_select_type']   = 'Selecionar Tipo';
        $lang['no_data_found_bulk_pdf_export'] = 'Nenhum dado encontrado para exportar';
        $lang['bulk_export_status_all']        = 'Todos';
        $lang['bulk_export_status']            = 'Status';
        $lang['bulk_export_zip_payment_modes'] = 'Pagamentos feito por';
        $lang['bulk_export_include_tag']       = 'Incluir Tag';
        $lang['bulk_export_include_tag_help']  = 'Ex. Original ou Cópia. O tag será mostrado no PDF. Recomenda-se usar apenas 1 tag';
        # Backup
        $lang['auto_backup_options_updated']     = 'Opções atualizadas de Auto backup';
        $lang['auto_backup_every']               = 'Criar backup a cada X dias';
        $lang['auto_backup_enabled']             = 'Habilitar (Cron Necessário)';
        $lang['auto_backup']                     = 'Auto backup';
        $lang['backup_delete']                   = 'Backup Deletado';
        $lang['backup_success']                  = 'Backup foi feito com sucesso';
        $lang['utility_backup']                  = 'Backup da Base de dados';
        $lang['utility_create_new_backup_db']    = 'Criar Backup da Base de Dados';
        $lang['utility_backup_table_backupname'] = 'Backup';
        $lang['utility_backup_table_backupsize'] = 'Tamanho do Backup';
        $lang['utility_backup_table_backupdate'] = 'Data';
        $lang['utility_db_backup_note']          = 'Nota: Devido ao tempo de execução limitado e memória disponível para o PHP, o backup de grandes bases de dados pode NÃO ser possível. Se seu banco de dados é muito grande, você pode precisar de backup diretamente do seu servidor SQL, via linha de comando, ou solicitar ao seu administrador do servidor para fazê-la para você, se você não tiver os privilégios de root.';

        $lang['clients_nav_proposals'] = 'Propostas';
        $lang['clients_nav_support']   = 'Suporte';
        # General
        $lang['more']            = 'Mais';
        $lang['add_item']        = 'Adicionar Item';
        $lang['goto_admin_area'] = 'Ir para a área do admin';
        $lang['delete']          = 'Deletar %s';
        $lang['welcome_top']     = 'Bem-vindo %s';

        # Customers
        $lang['customer_permissions']         = 'Permissões';
        $lang['customer_permission_invoice']  = 'Faturas';
        $lang['customer_permission_estimate'] = 'Orçamento';
        $lang['customer_permission_proposal'] = 'Proposta';
        $lang['customer_permission_contract'] = 'Contratos';
        $lang['customer_permission_support']  = 'Suporte';


        #Tasks
        $lang['task_related_to'] = 'Relacionado ao';

        # Send file
        $lang['custom_file_fail_send']    = 'Falha ao enviar o arquivo';
        $lang['custom_file_success_send'] = 'O arquivo foi enviado com sucesso para %s';
        $lang['send_file_subject']        = 'Assunto do E-mail';
        $lang['send_file_email']          = 'Endereço de E-mail';
        $lang['send_file_message']        = 'Mensagem';
        $lang['send_file']                = 'Enviar Arquivo';
        $lang['add_checklist_item']       = 'Item para Verificação';
        $lang['task_checklist_items']     = 'Verificar Itens';

        # Import
        $lang['default_pass_clients_import'] = 'Senha Padrão para todos os Cadastros';
        $lang['simulate_import']             = 'Simular Importação';
        $lang['import_upload_failed']        = 'Carregamento Falhou';
        $lang['import_total_imported']       = 'Total Importado: %s';
        $lang['import_leads']                = 'Importar Leads';
        $lang['import_customers']            = 'Importar Cadastros';
        $lang['choose_csv_file']             = 'Esvolher Arquivo CSV';
        $lang['import']                      = 'Importar';
        $lang['lead_import_status']          = 'Status';
        $lang['lead_import_source']          = 'Fonte';

        # Bulk PDF Export
        $lang['bulk_export_pdf_proposals'] = 'Propostas';

        # Invoices
        $lang['delete_invoice'] = 'Deletar';
        $lang['items']          = 'Itens';
        $lang['support']        = 'Suporte';
        $lang['new_ticket']     = 'Novo Tíquete';

        # Reminders
        $lang['calendar_lead_reminder']  = 'Lembrete do Lead';
        $lang['lead_set_reminder_title'] = 'Adiconar lembrete de lead';
        $lang['set_reminder_tooltip']    = 'Esta opção permite que você nunca esqueça de nada sobre seus Cadastros.';
        $lang['client_reminders_tab']    = 'Lembretes';
        $lang['leads_reminders_tab']     = 'Lembretes';

        # Tickets
        $lang['delete_ticket_reply']  = 'Deletar Resposta';
        $lang['ticket_priority_edit'] = 'Editar Prioridade';
        $lang['ticket_priority_add']  = 'Adicionar Prioridade';
        $lang['ticket_status_edit']   = 'Editar Status do Tíquete';
        $lang['ticket_service_edit']  = 'Editar Serviço do Tíquete';
        $lang['edit_department']      = 'Editar Departamento';

        # Expenses
        $lang['edit_expense_category'] = 'Editar Categoria de Despesa';
        # Settings
        $lang['customer_default_country']                                 = 'País Padrão';
        $lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Exigir que o Cadastro esteja logado para ver o orçamento';
        $lang['set_reminder']                                             = 'Definir Lembrete';
        $lang['set_reminder_date']                                        = 'Data para ser notificado';
        $lang['reminder_description']                                     = 'Definir descrição';
        $lang['reminder_notify_me_by_email']                              = 'Enviar também um e-mail para este lembrete';
        $lang['reminder_added_successfully']                              = 'Lembrete adicionado com sucesso. Você será notificado a tempo.';
        $lang['reminder_description']                                     = 'Descrição';
        $lang['reminder_date']                                            = 'Data';
        $lang['reminder_staff']                                           = 'Lembrete';
        $lang['reminder_is_notified']                                     = 'Está notificado?';
        $lang['reminder_is_notified_boolean_no']                          = 'Não';
        $lang['reminder_is_notified_boolean_yes']                         = 'Sim';
        $lang['reminder_set_to']                                          = 'Definir lembrete para';
        $lang['reminder_deleted']                                         = 'Lembrete deletado com sucesso';
        $lang['reminder_failed_to_delete']                                = 'Falha para deletar o lembrete';
        $lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar status da fatura/orçamento no PDF';
        $lang['email_piping_default_priority']                            = 'Prioridade padrão no Tíquete';
        $lang['show_lead_reminders_on_calendar']                          = 'Lembretes do Lead';
        $lang['tickets_piping']                                           = 'Sistema de E-mail dos Tíquetes';
        $lang['email_piping_only_replies']                                = 'Respostas somente permitidas por E-mail';
        $lang['email_piping_only_registered']                             = 'Respostas somente permitidas para Usuários Registrados';

        # Estimates
        $lang['view_estimate_as_client']         = 'Visualizar o orçamento como Cadastro';
        $lang['estimate_mark_as']                = 'Marcar como %s';
        $lang['estimate_status_changed_success'] = 'Status da orçamento alterado';
        $lang['estimate_status_changed_fail']    = 'Falha ao alterar o status do orçamento';

        # Proposals
        $lang['proposal_to']                            = 'Empresa / Nome';
        $lang['proposal_date']                          = 'Data';
        $lang['proposal_address']                       = 'Endereço';
        $lang['proposal_phone']                         = 'Telefone';
        $lang['proposal_email']                         = 'E-mail';
        $lang['proposal_date_created']                  = 'Data de Criação';
        $lang['proposal_open_till']                     = 'Abrir Até';
        $lang['proposal_status_open']                   = 'Aberto';
        $lang['proposal_status_accepted']               = 'Aceito';
        $lang['proposal_status_declined']               = 'Declinado';
        $lang['proposal_status_sent']                   = 'Enviado';
        $lang['proposal_expired']                       = 'Expirado';
        $lang['proposal_subject']                       = 'Assunto';
        $lang['proposal_total']                         = 'Total';
        $lang['proposal_status']                        = 'Status';
        $lang['proposals_list_all']                     = 'Todos';
        $lang['proposals_leads_related']                = 'Leads Relacionados';
        $lang['proposals_customers_related']            = 'Cadastros relacionados';
        $lang['proposal_related']                       = 'Relacionado';
        $lang['proposal_for_lead']                      = 'Lead';
        $lang['proposal_for_customer']                  = 'Cadastro';
        $lang['proposal']                               = 'Proposta';
        $lang['proposal_lowercase']                     = 'proposta';
        $lang['proposals']                              = 'Propostas';
        $lang['proposals_lowercase']                    = 'propostas';
        $lang['new_proposal']                           = 'Nova Proposta';
        $lang['proposal_currency']                      = 'Moeda';
        $lang['proposal_allow_comments']                = 'Permitir Comentários';
        $lang['proposal_allow_comments_help']           = 'Se você verificar estas opções de comentários serão permitidos quando os seus Cadastros visualizarem a proposta.';
        $lang['proposal_edit']                          = 'Editar';
        $lang['proposal_pdf']                           = 'PDF';
        $lang['proposal_send_to_email']                 = 'Enviar para o E-mail';
        $lang['proposal_send_to_email_title']           = 'Enviar a Proposta por E-mail';
        $lang['proposal_attach_pdf']                    = 'PDF Anexo';
        $lang['proposal_preview_template']              = 'Pré-visualizar o modelo';
        $lang['proposal_view']                          = 'Visualizar a Proposta';
        $lang['proposal_copy']                          = 'Copiar';
        $lang['proposal_delete']                        = 'Deletar';
        $lang['proposal_to']                            = 'Para';
        $lang['proposal_add_comment']                   = 'Adicionar comentário';
        $lang['proposal_sent_to_email_success']         = 'Proposta enviado por e-mail com sucesso';
        $lang['proposal_sent_to_email_fail']            = 'Falha para enviar a proposta para o e-mail';
        $lang['proposal_copy_fail']                     = 'Falha para copiar a proposta';
        $lang['proposal_copy_success']                  = 'Proposta copiada com sucesso';
        $lang['proposal_status_changed_success']        = 'Status da proposta alterado com sucesso';
        $lang['proposal_status_changed_fail']           = 'Falha para alterar o status da proposta';
        $lang['proposal_assigned']                      = 'Atribuído';
        $lang['proposal_comments']                      = 'Comentários';
        $lang['proposal_convert']                       = 'Converter';
        $lang['proposal_convert_estimate']              = 'Orçamento';
        $lang['proposal_convert_invoice']               = 'Fatura';
        $lang['proposal_convert_to_estimate']           = 'Converter para orçamento';
        $lang['proposal_convert_to_invoice']            = 'Converter para Fatura';
        $lang['proposal_convert_to_lead_disabled_help'] = 'Você precisa converter o lead, para o Cadastro para poder criar %s';
        $lang['proposal_convert_not_related_help']      = 'A proposta precisa estar relacionada ao Cadastro, para poder coverter para %s';
        $lang['proposal_converted_to_estimate_success'] = 'Proposta convertida para orçamento com êxito!';
        $lang['proposal_converted_to_invoice_success']  = 'Proposta convertida em fatura com sucesso';
        $lang['proposal_converted_to_estimate_fail']    = 'Falha para converter a Proposta em orçamento';
        $lang['proposal_converted_to_invoice_fail']     = 'Falha para converter a proposta em fatura';

        # Proposals - view proposal template
        $lang['proposal_total_info']   = 'Total %s';
        $lang['proposal_accept_info']  = 'Aceitar';
        $lang['proposal_decline_info'] = 'Declinar';
        $lang['proposal_pdf_info']     = 'PDF';

        # Customers Portal
        $lang['customer_reset_action']            = 'Redefinir';
        $lang['customer_reset_password_heading']  = 'Redefinir sua senha';
        $lang['customer_forgot_password_heading'] = 'Esqueceu a Senha';
        $lang['customer_forgot_password']         = 'Esqueceu a Senha?';
        $lang['customer_reset_password']          = 'Senha';
        $lang['customer_reset_password_repeat']   = 'Repetir a Senha';
        $lang['customer_forgot_password_email']   = 'EndereCo de E-mail';
        $lang['customer_forgot_password_submit']  = 'Submeter';
        $lang['customer_ticket_subject']          = 'Assunto';

        # Email templates
        $lang['email_template_proposals_fields_heading'] = 'Propostas';

        # Tasks
        $lang['add_task_attachments']  = 'Anexo';
        $lang['task_view_attachments'] = 'Anexos';
        $lang['task_view_description'] = 'Descrição';

        # Customer Groups
        $lang['customer_group_add_heading']  = 'Adicionar Novo Grupo de Cadastro';
        $lang['customer_group_edit_heading'] = 'Editar Grupo de Cadastro';
        $lang['new_customer_group']          = 'Novo grupo de Cadastro';
        $lang['customer_group_name']         = 'Nome';
        $lang['customer_groups']             = 'Grupos';
        $lang['customer_group']              = 'Grupo de Cadastro';
        $lang['customer_group_lowercase']    = 'grupo de Cadastro';

        $lang['customer_have_invoices_by']       = 'Conter faturas por status %s';
        $lang['customer_have_estimates_by']      = 'Conter Orçamentos por status %s';
        $lang['customer_have_contracts_by_type'] = 'Ter contratos por tipo %s';

        # Custom fields
        $lang['custom_field_show_on_table']              = 'Mostrar na tabela';
        $lang['custom_field_show_on_client_portal']      = 'Mostrar no portal do Cadastro';
        $lang['custom_field_show_on_client_portal_help'] = 'Se esse campo está marcado, também será mostrado em tabelas';
        $lang['custom_field_visibility']                 = 'Visibilidade';

        # Utilities # Menu Builder
        $lang['utilities_menu_translate_name_help'] = 'Você pode adicionar aqui também para traduzir as linhas. Então, se o staff/sistema estiver em outra língua, então o padrão dos nomes dos itens do menu serão atualizados na língua da equipe. Caso contrário, se a linha não existir no arquivo que será traduzido será considerada a linha que entrar aqui.';
        $lang['utilities_menu_icon']                = 'Icone';
        $lang['active_menu_items']                  = 'Itens Ativos do Menu';
        $lang['inactive_menu_items']                = 'Itens Inativos do Menu';
        $lang['utilities_menu_url']                 = 'URL';
        $lang['utilities_menu_name']                = 'Nome';
        $lang['utilities_menu_save']                = 'Salvar Menu';

        # Knowledge Base
        $lang['view_articles_list']     = 'Visualizar Artigos';
        $lang['view_articles_list_all'] = 'Todos os Artigos';
        $lang['als_all_articles']       = 'Todos os Artigos';
        $lang['als_kb_groups']          = 'Grupos';

        # Customizer Menu
        $lang['menu_builder']            = 'Configurar Menu';
        $lang['main_menu']               = 'Menu Principal';
        $lang['setup_menu']              = 'Configurar Menu';
        $lang['utilities_menu_url_help'] = '%s está auto anexado ao url';

        # Spam Filter - Tickets
        $lang['spam_filters']                 = 'Filtros de Spam';
        $lang['spam_filter']                  = 'Filtro de Spam';
        $lang['new_spam_filter']              = 'Novo Filtro de Spam';
        $lang['spam_filter_blocked_senders']  = 'Remetentes Bloqueados';
        $lang['spam_filter_blocked_subjects'] = 'Assuntos Bloqueados';
        $lang['spam_filter_blocked_phrases']  = 'Frases Bloqueadas';
        $lang['spam_filter_content']          = 'Conteúdo';
        $lang['spamfilter_edit_heading']      = 'Editar Filtro de Spam';
        $lang['spamfilter_add_heading']       = 'Adicionar Filtro de Spam';
        $lang['spamfilter_type']              = 'Tipo';
        $lang['spamfilter_type_subject']      = 'Assunto';
        $lang['spamfilter_type_sender']       = 'Remetente';
        $lang['spamfilter_type_phrase']       = 'Frase';

        # Tickets
        $lang['block_sender']                = 'Bloquear Remetente';
        $lang['sender_blocked']              = 'Remetente bloqueado';
        $lang['sender_blocked_successfully'] = 'Remetente bloqueado com sucesso';
        $lang['ticket_date_created']         = 'Data de Criação';

        #KB
        $lang['edit_kb_group'] = 'Editar grupo';
        # Leads
        $lang['edit_source'] = 'Editar Fonte';
        $lang['edit_status'] = 'Editar Status';
        # Contacts
        $lang['contract_type_edit'] = 'Editar Tipo de Contrato';
        # Reports
        $lang['report_by_customer_groups'] = 'Valor Total Por Grupos de Cadastros';
        #Utilities
        $lang['ticket_pipe_log']      = 'Atividades de Tíquetes';
        $lang['ticket_pipe_name']     = 'Do Nome';
        $lang['ticket_pipe_email_to'] = 'Para';
        $lang['ticket_pipe_email']    = 'Do E-mail';
        $lang['ticket_pipe_subject']  = 'Assunto';
        $lang['ticket_pipe_message']  = 'Mensagem';
        $lang['ticket_pipe_date']     = 'Data';
        $lang['ticket_pipe_status']   = 'Status';

        # Home
        $lang['home_latest_activity']   = 'Últimas Atividades';
        $lang['home_my_tasks']          = 'Minhas Tarefas';
        $lang['home_latest_activity']   = 'Últimas Atividades';
        $lang['home_my_todo_items']     = 'Minha lista de Tarefas';
        $lang['home_widget_view_all']   = 'Visualizar Todas';
        $lang['home_stats_full_report'] = 'Relatório Completo';

        # Validation

        $lang['form_validation_required']    = 'O {field} campo é necessário.';
        $lang['form_validation_valid_email'] = 'O {field} campo deve conter um endereço de e-mail válido.';
        $lang['form_validation_matches']     = 'O {field} campo não combina com o {param} campo.';
        $lang['form_validation_is_unique']   = 'O {field} campo deve conter um valor único.';

        $lang['estimate_activity_converted']                              = 'Orçamento convertido em fatura.<br /> %s';
        $lang['estimate_activity_created']                                = 'Criou a orçamento';
        $lang['invoice_estimate_activity_removed_item']                   = 'item removido <b>%s</b>';
        $lang['estimate_activity_number_changed']                         = 'Número do orçamento alterado de %s para %s';
        $lang['invoice_activity_number_changed']                          = 'Número da fatura alterado de %s para %s';
        $lang['invoice_estimate_activity_updated_item_short_description'] = 'descrição curta do item atualizada de %s para %s';
        $lang['invoice_estimate_activity_updated_item_long_description']  = 'descrição longa do item atualizada de <b>%s</b> para <b>%s</b>';
        $lang['invoice_estimate_activity_updated_item_rate']              = 'tarifa do item atualizada de %s para %s';
        $lang['invoice_estimate_activity_updated_qty_item']               = 'quantidade atualizada no item <b>%s</b> de %s para %s';
        $lang['invoice_estimate_activity_added_item']                     = 'novo item adicionado <b>%s</b>';
        $lang['invoice_estimate_activity_sent_to_client']                 = 'Enviar orçamento para o Cadastro';
        $lang['estimate_activity_client_accepted_and_converted']          = 'Cadastro aceitou esse orçamento. Orçamento foi convertido para faturar, com número %s';
        $lang['estimate_activity_client_accepted']                        = 'Cadastro aceitou esse orçamento';
        $lang['estimate_activity_client_declined']                        = 'Cadastro recusou esse orçamento';
        $lang['estimate_activity_marked']                                 = 'Orçamento marcado como %s';
        $lang['invoice_activity_status_updated']                          = 'Status da fatura atualizado de %s para %s';
        $lang['invoice_activity_created']                                 = 'criou a factura';
        $lang['invoice_activity_from_expense']                            = 'fatura convertida a partir da despesa';
        $lang['invoice_activity_recurring_created']                       = '[Recurring] Fatura criada por CRON';
        $lang['invoice_activity_recurring_from_expense_created']          = '[Invoice From Expense] Fatura criada por CRON';
        $lang['invoice_activity_sent_to_client_cron']                     = 'Fatura enviada para o Cadastro por CRON';
        $lang['invoice_activity_sent_to_client']                          = 'fatura enviada para o Cadastro';
        $lang['invoice_activity_marked_as_sent']                          = 'fatura marcada como enviada';
        $lang['invoice_activity_payment_deleted']                         = 'pagamento deletado para a fatura. Pagamento #%s, valor total %s';
        $lang['invoice_activity_payment_made_by_client']                  = 'Cadastro realizou o pagamento para a fatura do total <b>%s</b> - %s';
        $lang['invoice_activity_payment_made_by_staff']                   = 'pagamento registrado do total <b>%s</b> - %s';
        $lang['invoice_activity_added_attachment']                        = 'Anexo adicionado';

        # Navigation
        $lang['top_search_placeholder'] = 'Procurar...';

        # Staff
        $lang['staff_profile_inactive_account'] = 'Essa conta do membro do staff member está inativa';

        # Estimates
        $lang['copy_estimate']                = 'Copiar Orçamento';
        $lang['estimate_copied_successfully'] = 'Orçamento copiado com sucesso!';
        $lang['estimate_copied_fail']         = 'Falha ao copiar Orçamento';

        # Tasks
        $lang['tasks_view_assigned_to_user'] = 'Tarefas atribuídas a mim';
        $lang['tasks_view_follower_by_user'] = 'Tarefas que eu estou seguindo';
        $lang['no_tasks_found']              = 'Nenhuma Tarefa encontrada';

        # Leads
        $lang['leads_dt_datecreated']       = 'Criado';
        $lang['leads_sort_by']              = 'Classificar por';
        $lang['leads_sort_by_datecreated']  = 'Data de Criação';
        $lang['leads_sort_by_kanban_order'] = 'Ondenar em modo Kan Ban (Modo Cartão)';

        # Authentication
        $lang['check_email_for_resetting_password'] = 'Verifique seu e-mail para obter mais instruções para redefinir sua senha';
        $lang['inactive_account']                   = 'Conta Inativa';
        $lang['error_setting_new_password_key']     = 'Erro ao definir nova senha';
        $lang['password_reset_message']             = 'Sua senha foi redefinida. Por favor, entre agora!';
        $lang['password_reset_message_fail']        = 'Erro ao redefinir sua senha. Tente novamente';
        $lang['password_reset_key_expired']         = 'Chave da senha expirada ou usuário inválido';
        $lang['auth_reset_pass_email_not_found']    = 'E-mail não encontrado';
        $lang['auth_reset_password_submit']         = 'Redefinir Senha';

        # Settings
        $lang['settings_amount_to_words']          = 'Quantidade Limite de palavras';
        $lang['settings_amount_to_words_desc']     = 'Ver quantas palavras faltam para o limite máximo, de forma decrescente, em fatura/orçamento';
        $lang['settings_amount_to_words_enabled']  = 'Habilitar';
        $lang['settings_total_to_words_lowercase'] = 'Quantidade de palavras em letras minúsculas';
        $lang['settings_show_tax_per_item']        = 'Mostrar TAXA por item';

        # Reports
        $lang['report_sales_months_three_months'] = 'Últimos 3 meses';
        $lang['report_invoice_number']            = 'Fatura #';
        $lang['report_invoice_customer']          = 'Cadastro';
        $lang['report_invoice_date']              = 'Data';
        $lang['report_invoice_duedate']           = 'Data de Vencimento';
        $lang['report_invoice_amount']            = 'Valor';
        $lang['report_invoice_amount_with_tax']   = 'Valor + Taxas';
        $lang['report_invoice_amount_open']       = 'Valor em aberto';
        $lang['report_invoice_status']            = 'Status';

        $lang['report_activity_id']               = 'Atividade #';
        $lang['report_activity_customer']         = 'Cadastro';
        $lang['report_activity_competence']       = 'Compet';
        $lang['report_activity_status_admin']     = 'Admin';
        $lang['report_activity_status']           = 'Status';
        $lang['report_activity_name']             = 'Nome da atividade';
        $lang['report_competence_tips']           = 'A competência é indicada na própria atividade e corresponde ao relatório que pertence';
        $lang['report_start_date']                = 'Inicio';
        $lang['report_estimated_hours']           = 'Horas';
        $lang['report_instance']                  = 'Instância';
        $lang['activities_print']                 = 'Relatório de atividades';
        $lang['activity_admin_status']            = 'Situação';
        $lang['activity_admin_status_marked_as_accepted'] = 'Atividade aprovada pela administração';
        # Home stats
        $lang['home_stats_by_project_status'] = 'Estatisticas do status do projeto';
        $lang['home_invoice_overview']        = 'Visão geral da fatura';
        $lang['home_estimate_overview']       = 'Visão geral do orçamento';
        $lang['home_proposal_overview']       = 'Visão geral da proposta';
        $lang['home_lead_overview']           = 'Visão geral do lead';
        $lang['home_my_projects']             = 'Meus Projetos';
        $lang['home_announcements']           = 'Avisos';

        # Settings
        $lang['settings_leads_kanban_limit']                                    = 'Limitar número de linhas dos leads, por status, no Kan Ban (Modo Cartão)';
        $lang['settings_group_misc']                                            = 'Variados';
        $lang['show_projects_on_calendar']                                      = 'Projetos';
        $lang['settings_media_max_file_size_upload']                            = 'Tamanho máx permitido para upload de arquivo de Mídia (MB)';
        $lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir ao Cadastro/equipe adicionar/editar comentários de tarefas, apenas na primeira hora? (Não aplicado aos administradores)';

        # Email templates
        $lang['email_template_only_domain_email'] = 'Apenas e-mail de domínio';

        # Announcements
        $lang['dismiss_announcement']   = 'Silenciar aviso';
        $lang['announcement_from']      = 'De:';
        $lang['announcement_date']      = 'Data de postagem: %s';
        $lang['announcement_not_found'] = 'Aviso não encontrado';
        $lang['announcements_recent']   = 'Avisos recentes';

        # General
        $lang['zip_invoices']         = 'Faturas Zip';
        $lang['zip_estimates']        = 'Orçamentos Zip';
        $lang['zip_payments']         = 'Pagamentos Zip';
        $lang['setup_help']           = 'Suporte';
        $lang['clients_list_company'] = 'Cadastro / Nome';
        $lang['dt_button_export']     = 'Exportar';

        $lang['dt_entries']         = 'entrada';
        $lang['invoice_total_paid'] = 'Total Pago';
        $lang['invoice_amount_due'] = 'Valor devida';

        # Calendar
        $lang['calendar_project'] = 'Projeto';

        # Leads
        $lang['leads_import_assignee']     = 'Cessionário';
        $lang['customer_from_lead']        = 'Cadastro de %s';
        $lang['lead_kan_ban_attachments']  = 'Anexos %s';
        $lang['leads_sort_by_lastcontact'] = 'Último contato';

        # Tasks
        $lang['task_comment_added']     = 'Comentário adicionado com sucesso';
        $lang['task_duedate']           = 'Data de Vencimento';
        $lang['task_view_comments']     = 'Comentários';
        $lang['task_comment_updated']   = 'Comentário atualizado';
        $lang['task_visible_to_client'] = 'Visível para Cadastro';
        $lang['task_hourly_rate']       = 'Tarifa por Hora';
        $lang['hours']                  = 'Horas';
        $lang['seconds']                = 'Segundos';
        $lang['minutes']                = 'Minutos';
        $lang['task_start_timer']       = 'Iniciar o cronometro';
        $lang['task_stop_timer']        = 'Parar o cronometro';
        $lang['task_billable']          = 'Faturável';
        $lang['task_billable_yes']      = 'Faturável';
        $lang['task_billable_no']       = 'Não Faturável';
        $lang['task_billed']            = 'Faturado';
        $lang['task_billed_yes']        = 'Faturado';
        $lang['task_billed_no']         = 'Não faturado';
        $lang['task_user_logged_time']  = 'Seu tempo logado:';
        $lang['task_total_logged_time'] = 'Tempo total logado:';
        $lang['task_is_billed']         = 'Esta tarefa é cobrada na fatura com o número %s';
        $lang['task_statistics']        = 'Estatisticas';
        $lang['task_milestone']         = 'Etapa';

        # Tickets
        $lang['ticket_message_updated_successfully'] = 'Mensagem atualizada com sucesso';

        # Invoices
        $lang['invoice_task_item_project_tasks_not_included'] = 'Tarefas do Projeto não estão incluidas nessa lista.';
        $lang['show_quantity_as']                             = 'Mostrar como:';
        $lang['quantity_as_qty']                              = 'Qtdd';
        $lang['quantity_as_hours']                            = 'Horas';
        $lang['invoice_table_hours_heading']                  = 'Horas';
        $lang['bill_tasks']                                   = 'Tarefas da Conta';
        $lang['invoice_estimate_sent_to_email']               = 'Email';

        # Estimates
        $lang['estimate_table_hours_heading'] = 'Horas';

        # General
        $lang['is_customer_indicator']         = 'Cadastro';
        $lang['print']                         = 'Print';
        $lang['customer_permission_projects']  = 'Projetos';
        $lang['no_timers_found']               = 'Nenhum cronometro iniciado encontrado';
        $lang['timers_started_confirm_logout'] = 'Cronometro de tarefas encontrados iniciados!<br /> Você tem certeza que quer fazer logout sem parar os cronometros?';
        $lang['confirm_logout']                = 'Sair';
        $lang['timer_top_started']             = 'Iniciado em %s';

        # Activities
        $lang['new_activity']                                        = 'Novo relatório de atividade';
        $lang['activities_summary']                                  = 'Resumo de atividades';
        $lang['activity']                                            = 'Relatório de atividade';
        $lang['activity_lowercase']                                  = 'relatório de atividade';
        $lang['activity_settings']                                   = 'Configurações do Relatório de Atividade';
        $lang['activity_name']                                       = 'Nome da Atividade';
        $lang['activity_not_found']                                  = 'Relatório de atividade não encontrado';

        $lang['activity_list_all']                                   = 'Todas';
        $lang['home_my_activity']                                    = 'Minhas atividades';
        $lang['activity_overview']                                   = 'Visão Geral da Atividade';
        $lang['activity_overview_logged_hours']                      = 'Horas Registrados:';
        $lang['activity_overview_billable_hours']                    = 'Horas Faturáveis:';
        $lang['activity_overview_billed_hours']                      = 'Horas Faturadas:';
        $lang['activity_overview_unbilled_hours']                    = 'Horas não Faturadas:';
        $lang['activity_overview_expenses']                          = 'Total de Despesas';
        $lang['activity_overview_expenses_billable']                 = 'Despesas Faturaveis';
        $lang['activity_overview_expenses_billed']                   = 'Despesas Faturadas';
        $lang['activity_overview_expenses_unbilled']                 = 'Despesas não Faturadas';
        $lang['activity_overview_total_logged_hours']                = 'Total de Horas Logado';
        $lang['activity_activity_created']                           = 'Criou o relatório de atividade';
        $lang['activity_start_date']                                 = 'Data de Início';
        $lang['activity_datecreated']                                = 'Data de criação';
        $lang['activity_deadline']                                   = 'Prazo';
        $lang['activity_activity_updated']                           = 'Atualizou a atividade';
        $lang['activity_report_heading']                             = 'Relatórios de atividades disponíveis';
        $lang['activity_report_draft']                               = 'Relatório de atividades (rascunho)';
        $lang['activity_report']                                     = 'Relatório de atividades';
        $lang['activity_report_cancelled_not_included' ]             = 'Atividades canceladas não estão inclusas';
        $lang['activity_reports_generated_report']                   = 'Relatórios gerados';
        $lang['activity_admin_status_marked_as_recovery']            = 'Atividade recuperada da administração';
        $lang['activity_admin_status_marked_as_send' ]               = 'Atividade enviada para administração';
        $lang['activity_mark_all_tasks_as_completed']                = 'Marcar todas as tarefas como concluidas e parar todos os cronometros (Nenhuma notificação enviada para os membros da atividade)';
        $lang['activity_marked_as_finished_to_contacts']             = 'Enviar mensagem de <b>Atividade concluída</b> para todos os contatos';
        $lang['activity_marked_as_finished' ]                        = 'Atividade marcada como concluida';
        $lang['activity_mark_tasks_finished_confirm']                = 'Confirmar';
        $lang['activity_marked_as_success']                          = 'Atividade marcado como %s com sucesso!';
        $lang['activity_marked_as_failed']                           = 'Falha ao marcar atividade como %s';
        $lang['activity_mark_as']                                    = 'Marcar como %s';
        $lang['activity_recovery']                                   = 'Recuperar';
        $lang['activity_status_updated']                             = 'Atividade com status atualizado';
        $lang['activity_admin_marked_as_accept']                     = 'Atividade aceita pela administração';
        $lang['activity_members_overview']                           = 'Visão geral dos membros da atividade';
        $lang['total_activity_members']                              = 'Membros da atividade';
        $lang['total_activity_files']                                = 'Arquivos anexados a atividade';
        $lang['total_activity_worked_days']                          = 'Total de dias trabalhados';
        $lang['activity_total_cost']                                 = 'Total de custos';
        $lang['activity_total_invoices_created']                     = 'Pedidos vinculados';
        $lang['total_activity_discussions_created']                  = 'Discussões abertas';
        $lang['total_tickets_related_to_activity']                   = 'Total de tickets relacionados a atividade';

        $lang['activity_changing_status_recurring_tasks_notice']= 'Você está mudando o status para {0}, todas as tarefas restantes serão canceladas';

        $lang['activityreport']                                      = 'Relatório de atividade';
        $lang['export_activity_data']                                = 'Imprimir atividade em PDF';
        $lang['export_activity_attachments']                         = 'Imprimir com anexos';
        $lang['export_activity_data_normal']                         = 'Imprimir atividade';
        $lang['send_activity']                                       = 'Validar e Gravar atividade';
        $lang['edit_activity']                                       = 'Editar Rel. Atividade';
        $lang['activity_progress']                                   = 'Progresso';
        $lang['unpin_activity']                                      = 'Desfixar Rel. Atividade';
        $lang['copy_activity']                                       = 'Copiar Rel. Atividade';
        $lang['pin_activity']                                        = 'Fixar Rel. Atividade';
        $lang['activity_description']                                = 'Descrição da Atividade';
        $lang['activity_members']                                    = 'Membros da Atividade';
        $lang['activity_member']                                     = 'Membro da Atividade';
        $lang['no_activity_members']                                 = 'Não há membros nesta atividade';
        $lang['no_description_activity']                             = 'Nenhuma descrição para atividade';

        $lang['activity_report_complete']                            = 'Relatório Completo';

        $lang['activity_expenses']                                   = 'Despesas da atividade';
        $lang['activity_due_notice']                                 = 'Esta atividade está atrasada em %s dias';

        $lang['activity_vinculated_expenses']                        = 'Esta atividade possui despesas vinculadas';
        $lang['activity_validate_expenses_not_found']                = 'Atividade com indicação de despesas vinculadas';
        $lang['not_found']                                           = 'Registros não encontrados';
        $lang['activity_validate_status_is_closed']                  = 'Status da atividade não esta como concluída';
        $lang['activity_corret_to_closed']                           = 'Corrija para concluir';
        $lang['activity_validate_expenses_found_and_returnexpenses_not_found'] = 'Atividade com despesas vinculadas';
        $lang['activity_found_expenses']                            = 'Sem indicação de que possui despesa';

        $lang['activity_discussion']                               = 'Discussão';
        $lang['activity_discussions']                              = 'Discussões';
        $lang['new_activity_discussion']                           = 'Criar Discussão';
        $lang['activity_discussion_subject']                       = 'Assunto';
        $lang['activity_discussion_description']                   = 'Descrição';
        $lang['activity_discussion_show_to_customer']              = 'Visível aos Cadastros';
        $lang['activity_discussion_total_comments']                = 'Total de Comentários';
        $lang['activity_discussion_last_activity']                 = 'Últimas Atividades';

        $lang['activity_files']                                       = 'Arquivos';
        $lang['activity_activity']                                    = 'Atividade';
        $lang['activity_notes']                                       = 'Anotações';
        $lang['activity_note_private']                                = 'Anotação pessoal (privada)';
        $lang['activity_updated']                                     = 'Atualizou o Relatorio de atividade';
        $lang['delete_activity']                                      = 'Deletar atividade';
        $lang['activity_admin_status_updated_send']                   = 'Enviou atividade para administração';
        $lang['activity_admin_status_updated_recovery']               = 'Recuperou atividade da administração';
        $lang['activity_admin_status_updated_accepted']               = 'Atividade aceita';
        $lang['activity_admin_status_updated_rejected']               = 'Atividade recusada';
        $lang['activities']                                            = 'Atividades';
        $lang['activity_allow_client_to']                          = 'Permitir Cadastros a %s';
        $lang['activity_setting_view_task_total_logged_time']      = 'visualizar o tempo total logado da tarefa';
        $lang['activity_setting_view_task_comments']               = 'visualizar comentários da tarefa';
        $lang['activity_setting_upload_files']                     = 'atualizar os arquivos';
        $lang['activity_setting_view_task_checklist_items']        = 'visualizar os itens da lista de tarefas';
        $lang['activity_setting_view_task_attachments']            = 'visualizar anexos das tarefas';
        $lang['activity_setting_upload_on_tasks']                  = 'enviar anexos nas tarefas';
        $lang['activity_setting_open_discussions']                 = 'abrir discussões';
        $lang['activity_setting_comment_on_tasks']                 = 'comentar nas tarefas do projeto';
        $lang['activity_setting_view_tasks']                       = 'visualizar tarefas';
        $lang['activity_setting_view_milestones']                  = 'visualizar etapas';
        $lang['activity_setting_view_gantt']                       = 'visualizar Gantt';
        $lang['activity_setting_view_timesheets']                  = 'visualizar quadros de horários';
        $lang['activity_setting_view_activity_log']                = 'visualizar registros de atividades';
        $lang['activity_setting_view_team_members']                = 'visualizar membros da equipe';
        $lang['activity_discussion_visible_to_customer_yes']       = 'Visível';
        $lang['activity_discussion_visible_to_customer_no']        = 'Não Visível';
        $lang['activity_discussion_posted_on']                     = 'Postado no %s';
        $lang['activity_discussion_posted_by']                     = 'Postado por %s';
        $lang['activity_discussion_failed_to_delete']              = 'Falha ao deletar a discussão';
        $lang['activity_discussion_deleted']                       = 'Discussão deletada com sucesso!';
        $lang['activity_discussion_no_activity']                   = 'Nenhuma Atividade';
        $lang['activity_discussion']                               = 'Discussão';
        $lang['activity_discussions']                              = 'Discussões';
        $lang['edit_discussion']                                  = 'Criar Discussão';
        $lang['new_activity_discussion']                           = 'Criar Discussão';
        $lang['activity_discussion_subject']                       = 'Assunto';
        $lang['activity_discussion_description']                   = 'Descrição';
        $lang['activity_discussion_show_to_customer']              = 'Visível aos Cadastros';
        $lang['activity_discussion_total_comments']                = 'Total de Comentários';
        $lang['activity_discussion_last_activity']                 = 'Últimas Atividades';

        $lang['activity_billing_type']                                = 'Tipo de faturamento';
        $lang['activity_billing_type_fixed_cost']                     = 'Custos Fixos';
        $lang['activity_billing_type_activity_hours']                  = 'Horas da Atividade';
        $lang['activity_billing_type_activity_task_hours']             = 'Horas das tarefas';
        $lang['activity_billing_type_activity_task_hours_hourly_rate'] = 'Com base na tarefa RTU taxa horária';

        $lang['activity_send_created_email']                         = 'Enviar e-mail da atividade criada';
        $lang['activity_customer']                        = 'Instituição relacionada';


        $lang['activity_setting_create_tasks']                  = 'criar tarefa';
        $lang['activity_setting_edit_tasks']                    = 'editar tarefa (somente tarefas criadas pelo contato)';

        $lang['activity_setting_view_finance_overview']            = 'ter visão geral das finanças';
        $lang['show_all_tasks_for_activity_member']                = 'Permitir ao Colaborador a ver todas as tarefas, relacionadas a projetos que ele faz parte? (inclui não Colaboradores)';
        $lang['not_staff_added_as_activity_member']                = 'Adicionado você como um membro da atividade %s';
        $lang['notify_activity_members_status_change']             = 'Notificar aos membros que o status da atividade foi alterado';

        $lang['activity_new_task']                                 = 'Adicionar nova tarefa vinculada';

        $lang['activity_macroregion']                                 = 'Macroregião';
        $lang['activity_region']                                      = 'Região';
        $lang['activity_coordinating']                                = 'Coordenadoria';
        $lang['activity_competence']                                  = 'Mês/Ano de competência';


        $lang['activity_competence']                                  = 'Mês/Ano de competência';
        $lang['activity_competence_1']                                = '07/2019';
        $lang['activity_competence_2']                                = '08/2019';
        $lang['activity_competence_3']                                = '09/2019';
        $lang['activity_competence_4']                                = '10/2019';
        $lang['activity_competence_5']                                = '11/2019';
        $lang['activity_competence_6']                                = '12/2019';

        $lang['activity_status']                                      = 'Status';
        $lang['activity_status_1']                                    = 'Não Iniciado';
        $lang['activity_status_2']                                    = 'Em Progresso';
        $lang['activity_status_3']                                    = 'Aguardando';
        $lang['activity_status_4']                                    = 'Concluido';
        $lang['activity_status_5']                                    = 'Cancelado';

        $lang['activity_category']                                    = 'Categoria';
        $lang['activity_category_1']                                  = 'SES';
        $lang['activity_category_2']                                  = 'CIR';
        $lang['activity_category_3']                                  = 'CIB';
        $lang['activity_category_4']                                  = 'Setec';
        $lang['activity_category_5']                                  = 'Reunião';
        $lang['activity_category_6']                                  = 'GT';
        $lang['activity_category_7']                                  = 'Seminário';
        $lang['activity_category_8']                                  = 'GC';
        $lang['activity_category_9']                                  = 'Colegiado';
        $lang['activity_category_10']                                 = 'Outro';

        $lang['activity_instance']                                    = 'Instância';
        $lang['activity_instance_1']                                  = 'Regional';
        $lang['activity_instance_2']                                  = 'Macroregional';
        $lang['activity_instance_3']                                  = 'Municipal';
        $lang['activity_instance_4']                                  = 'Estadual';
        $lang['activity_instance_5']                                  = 'Nacional';
        $lang['activity_instance_6']                                  = 'Central';




        # Projects
        $lang['cant_change_billing_type_billed_tasks_found']         = 'Você não pode alterar o tipo de fatura. Tarefas já faturadas encontrada para esse projeto.';
        $lang['project_customer_permission_warning']                 = 'O sistema indicou que o Cadastro não tem permissão para esses projetos. O Cadastro não poderá ver esse projeto. Considere adicionar o perfil do Cadastro na tabela de Permissões.';
        $lang['project_invoice_timesheet_start_time']                = 'Tempo de início: %s';
        $lang['project_invoice_timesheet_end_time']                  = 'Tempo final: %s';
        $lang['project_invoice_timesheet_total_logged_time']         = 'Tempo logado: %s';
        $lang['project_view_as_client']                              = 'Visualizar o projeto como Cadastro';
        $lang['project_mark_all_tasks_as_completed']                 = 'Marcar todas as tarefas como concluidas e parar todos os cronometros (Nenhum notificação enviada para os membros do projeto)';
        $lang['project_not_started_status_tasks_timers_found']       = 'Cronometros das tarefas encontrado para esse projeto, mas o projeto está com Status de Não Iniciado. Recomedado alterar o status do Projeto para Em Progresso';
        $lang['project_status']                                      = 'Status';
        $lang['project_status_1']                                    = 'Não Iniciado';
        $lang['project_status_2']                                    = 'Em Progresso';
        $lang['project_status_3']                                    = 'Aguardando';
        $lang['project_status_4']                                    = 'Concluido';
        $lang['project_file_dateadded']                              = 'Date uploaded';
        $lang['project_file_filename']                               = 'Nome do Arquivo';
        $lang['project_file__filetype']                              = 'Tipo do Arquivo';
        $lang['project_file_visible_to_customer']                    = 'Visível para Cadastro';
        $lang['project_file_uploaded_by']                            = 'Carregado por';
        $lang['edit_project']                                        = 'Editar Projeto';
        $lang['copy_project']                                        = 'Copiar Projeto';
        $lang['delete_project']                                      = 'Deletar Projeto';
        $lang['project_task_assigned_to_user']                       = 'Tarefas atribuidas a você';
        $lang['seconds']                                             = 'Segundos';
        $lang['hours']                                               = 'Horas';
        $lang['minutes']                                             = 'Minutos';
        $lang['project']                                             = 'Projeto';
        $lang['project_lowercase']                                   = 'projeto';
        $lang['projects']                                            = 'Projetos';
        $lang['projects_lowercase']                                  = 'projetos';
        $lang['project_settings']                                    = 'Configurações do Projeto';
        $lang['project_invoiced_successfully']                       = 'Projeto Faturado com Sucesso';
        $lang['new_project']                                         = 'Novo Projeto';
        $lang['project_files']                                       = 'Arquivos';
        $lang['project_activity']                                    = 'Atividade';
        $lang['project_name']                                        = 'Nome do Projeto';
        $lang['project_description']                                 = 'Descrição do Projeto';
        $lang['project_customer']                                    = 'Cadastro';
        $lang['project_start_date']                                  = 'Data de Início';
        $lang['project_datecreated']                                 = 'Data de criação';
        $lang['project_deadline']                                    = 'Prazo';
        $lang['project_billing_type']                                = 'Tipo de faturamento';
        $lang['project_billing_type_fixed_cost']                     = 'Custos Fixos';
        $lang['project_billing_type_project_hours']                  = 'Horas do Projeto';
        $lang['project_billing_type_project_task_hours']             = 'Horas das tarefas';
        $lang['project_billing_type_project_task_hours_hourly_rate'] = 'Com base na tarefa RTU taxa horária';
        $lang['project_rate_per_hour']                               = 'Tarifa Por Hora';
        $lang['project_total_cost']                                  = 'Total de Custos';
        $lang['project_members']                                     = 'Membros do Projeto';
        $lang['project_member_removed']                              = 'Membro do Projeto removido com sucesso!';
        $lang['project_overview']                                    = 'Visão Geral do Projeto';
        $lang['project_gant']                                        = 'Diagrama de Gantt';
        $lang['project_milestones']                                  = 'Etapas';
        $lang['project_milestone_order']                             = 'Ordem';
        $lang['project_milestone_duedate_passed']                    = 'Data de Vencimento Passada';
        $lang['record_timesheet']                                    = 'Quadro de Tempo';
        $lang['new_milestone']                                       = 'Nova Etapa';
        $lang['edit_milestone']                                      = 'Editar Etapa';
        $lang['milestone_name']                                      = 'Nome';
        $lang['milestone_due_date']                                  = 'Data de Vencimento';
        $lang['project_milestone']                                   = 'Etapas';
        $lang['project_notes']                                       = 'Notas';
        $lang['project_timesheets']                                  = 'Quadros de Tempo';
        $lang['project_timesheet']                                   = 'Quadro de Tempo';
        $lang['milestone_total_logged_time']                         = 'Tempo Logado';
        $lang['project_overview_total_logged_hours']                 = 'Total de Horas Logado';
        $lang['milestones_uncategorized']                            = 'Sem categoria';
        $lang['milestone_no_tasks_found']                            = 'Nenhuma Tarefa Encontrada';
        $lang['project_copied_successfully']                         = 'Dados do projeto copiados com sucesso';
        $lang['failed_to_copy_project']                              = 'Falha ao copiar o projeto';
        $lang['copy_project_task_include_check_list_items']          = 'Copiar os itens da lista de verificação';
        $lang['copy_project_task_include_assignees']                 = 'Copiar os mesmos destinatários';
        $lang['copy_project_task_include_followers']                 = 'Copiar os mesmos seguidores';

        $lang['project_days_left']                                = 'Dias Restantes';
        $lang['project_open_tasks']                               = 'Abrir Tarefas';
        $lang['timesheet_stop_timer']                             = 'Parar o Cronômetro';
        $lang['failed_to_add_project_timesheet_end_time_smaller'] = 'Falha ao adicionar a planilha de tempo. O tempo final é menor do que o tempo inicial.';
        $lang['project_timesheet_user']                           = 'Membro';
        $lang['project_timesheet_start_time']                     = 'Tempo Inicial';
        $lang['project_timesheet_end_time']                       = 'Tempo Final';
        $lang['project_timesheet_time_spend']                     = 'Tempo Gasto';
        $lang['project_timesheet_task']                           = 'Tarefa';
        $lang['project_invoices']                                 = 'Faturas';
        $lang['total_logged_hours_by_staff']                      = 'Total de Tempo Logado';
        $lang['invoice_project']                                  = 'Fatura do Projeto';
        $lang['invoice_project_info']                             = 'Informações da Fatura do Projeto';
        $lang['invoice_project_data_single_line']                 = 'Linha única';
        $lang['invoice_project_data_task_per_item']               = 'Tarefa por item';
        $lang['invoice_project_data_timesheets_individually']     = 'Todas as planilhas de tempo individualmente';
        $lang['invoice_project_item_name_data']                   = 'Nome do Item';
        $lang['invoice_project_description_data']                 = 'Descrição';
        $lang['invoice_project_projectname_taskname']             = 'Nome do projeto + Nome da Tarefa';
        $lang['invoice_project_all_tasks_total_logged_time']      = 'Todas as tarefas + total de tempo logado por tarefa';
        $lang['invoice_project_project_name_data']                = 'Nome do Projeto';
        $lang['invoice_project_timesheet_individually_data']      = 'Planilha de tempo de começo + tempo de término + tempo total logado';
        $lang['invoice_project_total_logged_time_data']           = 'Tempo total logado';
        $lang['project_allow_client_to']                          = 'Permitir Cadastros a %s';
        $lang['project_setting_view_task_total_logged_time']      = 'visualizar o tempo total logado da tarefa';
        $lang['project_setting_view_task_comments']               = 'visualizar comentários da tarefa';
        $lang['project_setting_upload_files']                     = 'atualizar os arquivos';
        $lang['project_setting_view_task_checklist_items']        = 'visualizar os itens da lista de tarefas';
        $lang['project_setting_view_task_attachments']            = 'visualizar anexos das tarefas';
        $lang['project_setting_upload_on_tasks']                  = 'enviar anexos nas tarefas';
        $lang['project_setting_open_discussions']                 = 'abrir discussões';
        $lang['project_setting_comment_on_tasks']                 = 'comentar nas tarefas do projeto';
        $lang['project_setting_view_tasks']                       = 'visualizar tarefas';
        $lang['project_setting_view_milestones']                  = 'visualizar etapas';
        $lang['project_setting_view_gantt']                       = 'visualizar Gantt';
        $lang['project_setting_view_timesheets']                  = 'visualizar quadros de horários';
        $lang['project_setting_view_activity_log']                = 'visualizar registros de atividades';
        $lang['project_setting_view_team_members']                = 'visualizar membros da equipe';
        $lang['project_discussion_visible_to_customer_yes']       = 'Visível';
        $lang['project_discussion_visible_to_customer_no']        = 'Não Visível';
        $lang['project_discussion_posted_on']                     = 'Postado no %s';
        $lang['project_discussion_posted_by']                     = 'Postado por %s';
        $lang['project_discussion_failed_to_delete']              = 'Falha ao deletar a discussão';
        $lang['project_discussion_deleted']                       = 'Discussão deletada com sucesso!';
        $lang['project_discussion_no_activity']                   = 'Nenhuma Atividade';
        $lang['project_discussion']                               = 'Discussão';
        $lang['project_discussions']                              = 'Discussões';
        $lang['edit_discussion']                                  = 'Criar Discussão';
        $lang['new_project_discussion']                           = 'Criar Discussão';
        $lang['project_discussion_subject']                       = 'Assunto';
        $lang['project_discussion_description']                   = 'Descrição';
        $lang['project_discussion_show_to_customer']              = 'Visível aos Cadastros';
        $lang['project_discussion_total_comments']                = 'Total de Comentários';
        $lang['project_discussion_last_activity']                 = 'Últimas Atividades';
        $lang['discussion_add_comment']                           = 'Adicionar comentário';
        $lang['discussion_newest']                                = 'Mais novos';
        $lang['discussion_oldest']                                = 'Mais antigos';
        $lang['discussion_attachments']                           = 'Anexos';
        $lang['discussion_send']                                  = 'Enviar';
        $lang['discussion_reply']                                 = 'Responder';
        $lang['discussion_edit']                                  = 'Editar';
        $lang['discussion_edited']                                = 'Modificado';
        $lang['discussion_you']                                   = 'Você';
        $lang['discussion_save']                                  = 'Salvar';
        $lang['discussion_delete']                                = 'Deletar';
        $lang['discussion_view_all_replies']                      = 'Mostrar todas as respostas';
        $lang['discussion_hide_replies']                          = 'Esconder Respostas';
        $lang['discussion_no_comments']                           = 'Nenhum comentário';
        $lang['discussion_no_attachments']                        = 'Nenhum anexo';
        $lang['discussion_attachments_drop']                      = 'Arraste e solte para carregar os arquivos';
        $lang['project_note']                                     = 'Nota';
        $lang['project_note_private']                             = 'Notas Privadas';
        $lang['project_save_note']                                = 'Salvar nota';

        # Project Activity
        $lang['project_activity_created']                      = 'Criou o projeto';
        $lang['project_activity_updated']                      = 'Atualizou o projeto';
        $lang['project_activity_removed_team_member']          = 'Removeu um membro da equipe';
        $lang['project_activity_added_team_member']            = 'Adicionou um novo membro na equipe';
        $lang['project_activity_marked_all_tasks_as_complete'] = 'Marcou todas as tarefas como completas';
        $lang['project_activity_recorded_timesheet']           = 'Gravou no quadro de tempo';
        $lang['project_activity_task_name']                    = 'Tarefa:';
        $lang['project_activity_deleted_discussion']           = 'Deletou discussão';
        $lang['project_activity_created_discussion']           = 'Criou discussão';
        $lang['project_activity_updated_discussion']           = 'Atualizou discussão';
        $lang['project_activity_commented_on_discussion']      = 'Comentou na discussão';
        $lang['project_activity_deleted_discussion_comment']   = 'Deletou comentário na discussão';
        $lang['project_activity_deleted_milestone']            = 'Deletou etapa';
        $lang['project_activity_updated_milestone']            = 'Atualizou etapa';
        $lang['project_activity_created_milestone']            = 'Criou uma nova etapa';
        $lang['project_activity_invoiced_project']             = 'Faturou o projeto';
        $lang['project_activity_task_marked_complete']         = 'Tarefa marcada como completa';
        $lang['project_activity_task_unmarked_complete']       = 'Tarefa desmarcada como completa';
        $lang['project_activity_task_deleted']                 = 'Tarefa deletada';
        $lang['project_activity_new_task_comment']             = 'Comentou na tarefa';
        $lang['project_activity_new_task_attachment']          = 'Atualizou o anexo na tarefa';
        $lang['project_activity_new_task_assignee']            = 'Adicionou novo remetente a tarefa';
        $lang['project_activity_task_assignee_removed']        = 'Removeu remetente da tarefa';
        $lang['project_activity_task_timesheet_deleted']       = 'Removeu o quadro de tempo';
        $lang['project_activity_uploaded_file']                = 'Atualizou o arquivo do projeto';
        $lang['project_activity_status_updated']               = 'Atualizou o status do projeto';
        $lang['project_activity_visible_to_customer']          = 'Visível ao Cadastro';
        $lang['project_activity_project_file_removed']         = 'Removeu arquivo do projeto';

        # Customers area
        $lang['clients_my_estimates']                    = 'Meus Orçamentos';
        $lang['client_no_reply']                         = 'Sem Resposta';
        $lang['clients_nav_projects']                    = 'Projetos';
        $lang['clients_my_projects']                     = 'Meus Projetos';
        $lang['client_profile_image']                    = 'Imagem de Perfil';
        $lang['tasks_reminder_notification_before_help'] = 'Notificar os destinatários da tarefa com prazo de entrega antes de X dias. A notificação/e-mail é enviado somente para os destinatários.';

        $lang['tasks_reminder_notification_before']           = 'Lembrete sobre prazo da tarefas antes de (Dias)';
        $lang['not_task_deadline_reminder']                   = 'Atenção! O prazo da tarefa está acabando! Clique para ver.';
        $lang['dt_length_menu_all']                           = 'Todos';
        $lang['task_not_finished']                            = 'Incompleto';
        $lang['task_billed_cant_start_timer']                 = 'Tarefa faturada. Cronômetro não pode ser recomeçado';
        $lang['invoice_task_billable_timers_found']           = 'Cronômetro iniciado encontrado';
        $lang['sales_report_cancelled_invoices_not_included'] = 'Faturas canceladas estão excluidas dos relatórios';
        $lang['invoices_merge_cancel_merged_invoices']        = 'Marque as faturas mescladas como canceladas em vez de apaga-las';
        $lang['invoice_marked_as_cancelled_successfully']     = 'Fatura marcada como cancelada com sucesso!';
        $lang['invoice_unmarked_as_cancelled']                = 'Fatura desmarcada como cancelada com sucesso!';

        $lang['project_timesheet_not_updated']                         = 'Quadro de Tempo sem modificações';
        $lang['project_invoice_task_no_timers_found']                  = 'Nenhum cronômetro encontrado para esta tarefa';
        $lang['invoice_project_tasks_not_started']                     = 'Ainda não iniciado | Data de início: %s.';
        $lang['invoice_project_see_billed_tasks']                      = 'Ver tarefas que serão cobradas nesta fatura';
        $lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas as tarefas faturadas serão marcadas como acabadas';
        $lang['invoice_project_nothing_to_bill']                       = 'Não há tarefas para faturar. Fique a vontade para adicionar o que quiser nos itens da fatura.';
        $lang['invoice_project_start_date_tasks_not_passed']           = 'Tarefas com data de início no futuro não podem ser cobradas';
        $lang['invoice_project_stop_all_timers']                       = 'Parar todos os cronômetros';
        $lang['invoice_project_stop_billable_timers_only']             = 'Parar apenas cronômetros faturáveis';
        $lang['project_tasks_total_timers_stopped']                    = 'Total de %s cronômetros parados';
        $lang['project_invoice_timers_started']                        = 'Os cronômetros da tarefa encontrada estão executando as tarefas faturáveis. Fatura não pode ser criada. Por favor, pare o cronômetro da tarefa, para criar fatura.';
        $lang['task_start_timer_only_assignee']                        = 'Você precisa estar atribuído a esta tarefa, para iniciar o cronômetro!';
        $lang['task_comments']                                         = 'Comentário';
        $lang['invoice_total_tax']                                     = 'Total Imposto';
        $lang['estimates_total_tax']                                   = 'Total Imposto';
        $lang['report_invoice_total_tax']                              = 'Total Imposto';
        $lang['home_tickets']                                          = 'Tíquetes';
        $lang['home_project_activity']                                 = 'Últimas atividades de projetos';
        $lang['view_tracking']                                         = 'Rastreamento das Visualizações';
        $lang['view_date']                                             = 'Data';
        $lang['view_ip']                                               = 'Endereço IP';
        $lang['article_total_views']                                   = 'Total de Visualizações';
        $lang['leads_source']                                          = 'Fonte';
        $lang['invoices_available_for_merging']                        = 'Faturas disponíveis para mesclar';
        $lang['invoices_merge_discount']                               = 'Você terá que aplicar o desconto de %s total manualmente para esta fatura';
        $lang['invoice_merge_number_warning']                          = 'Mesclar faturas irá criar lacunas nos números de fatura. Por favor, não mescle as faturas, se não quiser lacunas no seu histórico de fatura. Você também tem a opção de ajustar manualmente os números da fatura, se você deseja preencher as lacunas.';
        $lang['invoice_mark_as']                                       = 'Marcar como %s';
        $lang['invoice_unmark_as']                                     = 'Desmarcar como %s';
        $lang['invoice_status_cancelled']                              = 'Cancelado';
        $lang['tasks_reminder_notification_before_help']               = 'Notificar os destinatários da tarefa com prazo de entrega antes de X dias. A notificação/e-mail é enviado somente para os destinatários.';
        $lang['project_invoice_select_all_tasks'] = 'Selecionar todas as tarefas';
        $lang['lead_company']                     = 'Empresa';
        $lang['admin_auth_forgot_password_button']       = 'Confirmar';
        $lang['task_assigned']                           = 'Atribuído ao';
        $lang['switch_to_pipeline']                      = 'Mudar para pipeline';
        $lang['switch_to_list_view']                     = 'Mudar para Modo Lista';
        $lang['estimates_pipeline']                      = 'Orçamentos Pipeline';
        $lang['estimates_pipeline_sort']                 = 'Ordenar por';
        $lang['estimates_sort_expiry_date']              = 'Data de Validade';
        $lang['estimates_sort_pipeline']                 = 'Pedido de Pipeline';
        $lang['estimates_sort_datecreated']              = 'Data de Criação';
        $lang['estimates_sort_estimate_date']            = 'Data de orçamento';
        $lang['estimate_set_reminder_title']             = 'Definir Lembrete de orçamento';
        $lang['invoice_set_reminder_title']              = 'Definir Lembrete da Fatura';
        $lang['estimate_reminders']                      = 'Lembretes';
        $lang['invoice_reminders']                       = 'Lembretes';
        $lang['estimate_notes']                          = 'Anotações';
        $lang['estimate_add_note']                       = 'Adicionar Anotação';
        $lang['dropdown_non_selected_tex']               = 'Nada selecionado';
        $lang['auto_close_ticket_after']                 = 'Auto fechamento do bilhete depois (Horas)';
        $lang['event_description']                       = 'Descrição';
        $lang['delete_event']                            = 'Deletar';
        $lang['not_new_ticket_created']                  = 'Novo tíquete aberto no departamento - %s';
        $lang['receive_notification_on_new_ticket']      = 'Receber notificação sobre novo tíquete aberto?';
        $lang['receive_notification_on_new_ticket_help'] = 'Todos os colaboradores que pertencem ao departamento do bilhete receberão uma notificação de que o novo bilhete está aberto';
        $lang['event_updated']                           = 'Evento atualizado com sucesso';
        $lang['customer_contacts']                       = 'Contatos';
        $lang['new_contact']                             = 'Novo Contato';
        $lang['contact']                                 = 'Contato';
        $lang['contact_lowercase']                       = 'contato';
        $lang['contact_primary']                         = 'Contato principal';
        $lang['contact_position']                        = 'Cargo';
        $lang['contact_active']                          = 'Contatos ativos';
        $lang['client_company_info']                     = 'Detalhes da Instituição';
        $lang['proposal_save']                           = 'Salvar Proposta';
        $lang['calendar']                                = 'Calendário';
        $lang['settings_pdf']                            = 'PDF';
        $lang['settings_pdf_font']                       = 'Fonte PDF';
        $lang['settings_pdf_table_heading_color']        = 'Cor do título da tabela de itens';
        $lang['settings_pdf_table_heading_text_color']   = 'Cor do texto do título da tabela de itens';
        $lang['settings_pdf_font_size']                  = 'Tamanho padrão da fonte';
        $lang['proposal_status_draft']                   = 'Rascunho';
        $lang['custom_field_contacts']                   = 'Contatos';
        $lang['company_primary_email']                   = 'E-mail principal';
        $lang['client_register_contact_info']            = 'Informação de contato principais';
        $lang['client_register_company_info']            = 'Informações da Empresa';
        $lang['contact_permissions_info']                = 'Certifique-se de definir as permissões apropriadas para este contato';
        $lang['default_leads_kanban_sort']               = 'Ordenar Kan Ban por padrão';
        $lang['default_leads_kanban_sort_type']          = 'Ordenar';
        $lang['order_ascending']                         = 'Crescente';
        $lang['order_descending']                        = 'Decrescente';
        $lang['calendar_expand']                         = 'expandir';
        $lang['proposal_reminders']                      = 'Lembretes';
        $lang['proposal_set_reminder_title']             = 'Definir lembrete da proposta';
        $lang['settings_allowed_upload_file_types']      = 'Tipos de arquivo permitidos';
        $lang['no_primary_contact']                      = 'Este Cadastro não tem contato principal. Você precisará definir o login principal contato como Cadastro. É recomendado que todos os Cadastros tenham contatos primários.';
        $lang['leads_merge_customer']                    = 'Campos de Cadastro mesclados';
        $lang['leads_merge_contact']                     = 'Campos de contato mesclados';
        $lang['leads_merge_as_contact_field']            = 'Mesclar como campo de contato';
        $lang['lead_convert_to_client_phone']            = 'Telefone';
        $lang['invoice_status_report_all']               = 'Todos';
        $lang['import_contact_field']                    = 'Campo de contatos';

        $lang['file_uploaded_success']             = 'Não há nenhum erro, o arquivo enviado com sucesso';
        $lang['file_exceeds_max_filesize']         = 'O arquivo enviado excede a diretiva upload_max_filesize em php.ini';
        $lang['file_exceeds_maxfile_size_in_form'] = 'O arquivo enviado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML';
        $lang['file_uploaded_partially']           = 'O arquivo enviado foi apenas parcialmente carregado';
        $lang['file_not_uploaded']                 = 'Nenhum arquivo foi enviado';
        $lang['file_missing_temporary_folder']     = 'Faltando uma pasta temporária';
        $lang['file_failed_to_write_to_disk']      = 'Erro ao gravar o arquivo em disco.';
        $lang['file_php_extension_blocked']        = 'Uma extensão PHP parou o envio do arquivo.';
        $lang['calendar_expand']                   = 'Expandir';
        $lang['view_pdf']                          = 'Visualizar PDF';
        $lang['expense_repeat_every']              = 'Repitir todos';
        $lang['leads_switch_to_kanban']                   = 'Mudar para kan ban (Modo Cartão)';
        $lang['survey_no_questions']                      = 'Esta pesquisa não tem perguntas acrescentadas ainda.';
        $lang['survey_submit']                            = 'Enviar';
        $lang['contract_content']                         = 'Contrato';
        $lang['contract_save']                            = 'Salvar Contrato';
        $lang['contract_send_to_email']                   = 'Enviar e-mail';
        $lang['contract_send_to_client_modal_heading']    = 'Enviar contrato por e-mail';
        $lang['contract_send_to']                         = 'Enviar para';
        $lang['contract_send_to_client_attach_pdf']       = 'Anexar PDF';
        $lang['contract_send_to_client_preview_template'] = 'Visualização do Modelo de E-mail';
        $lang['include_attachments_to_email']             = 'Incluir anexos por e-mail';
        $lang['contract_sent_to_client_success']          = 'O contrato é enviado com sucesso para o Cadastro';
        $lang['contract_sent_to_client_fail']             = 'Falha ao enviar o contrato';
        $lang['client_invalid_username_or_password'] = 'Nome do usuário inválido ou senha';
        $lang['client_old_password_incorrect']       = 'Sua senha antiga está incorreta';
        $lang['client_password_changed']             = 'Sua senha foi alterada';
        $lang['total_leads_deleted']                              = 'Total de contatos excluídos: %s.';
        $lang['total_clients_deleted']                            = 'Total de Cadastros excluídos: %s.';
        $lang['confirm_action_prompt']                            = 'Tem certeza de que deseja executar esta ação?';
        $lang['mass_delete']                                      = 'Deletar a Massa';
        $lang['email_protocol']                                   = 'Protocolo de E-mail';
        $lang['add_edit_members']                                 = 'Adicionar/Editar Membros';
        $lang['project_overview_logged_hours']                    = 'Horas Registrados:';
        $lang['project_overview_billable_hours']                  = 'Horas Faturáveis:';
        $lang['project_overview_billed_hours']                    = 'Horas Faturadas:';
        $lang['project_overview_unbilled_hours']                  = 'Horas não Faturadas:';
        $lang['calendar_first_day']                               = 'Primeiro dia';
        $lang['permission_view']                                  = 'Visualizar';
        $lang['permission_edit']                                  = 'Editar';
        $lang['permission_create']                                = 'Criar';
        $lang['permission_delete']                                = 'Deletar';
        $lang['permission']                                       = 'Permissão';
        $lang['permissions']                                      = 'Permissões';
        $lang['proposals_pipeline']                               = 'Proposta do Pipeline';
        $lang['proposals_pipeline_sort']                          = 'Ordenar por';
        $lang['proposals_sort_open_till']                         = 'Aberto até';
        $lang['proposals_sort_pipeline']                          = 'Ordem do Pipeline';
        $lang['proposals_sort_datecreated']                       = 'Data de criação';
        $lang['proposals_sort_proposal_date']                     = 'Data da Proposta';
        $lang['is_not_staff_member']                              = 'Não é membro da Equipe';
        $lang['lead_created']                                     = 'Criado';
        $lang['access_tickets_to_none_staff_members']             = 'Não permitir acesso aos Tíquetes para nenhum dos membros da equipe?';
        $lang['project_expenses']                                 = 'Despesas';
        $lang['expense_currency']                                 = 'Moeda';
        $lang['currency_valid_code_help']                         = 'Certifique-se de introduzir código de moeda válido.';
        $lang['week']                                             = 'Semana';
        $lang['weeks']                                            = 'Semanas';
        $lang['month']                                            = 'Mês';
        $lang['months']                                           = 'Meses';
        $lang['year']                                             = 'Ano';
        $lang['years']                                            = 'Anos';
        $lang['expense_report_category']                          = 'Categoria';
        $lang['expense_paid_via']                                 = 'Pago Via %s';
        $lang['item_as_expense']                                  = '[Despesa]';
        $lang['show_help_on_setup_menu']                          = 'Mostrar o item de suporte no menu de configuração';
        $lang['customers_summary_total']                          = 'Total de Cadastros';
        $lang['filter_by']                                        = 'Filtrar por';
        $lang['re_captcha']                                       = 'reCAPTCHA';
        $lang['recaptcha_site_key']                               = 'Chave do site';
        $lang['recaptcha_secret_key']                             = 'Chave secreta';
        $lang['recaptcha_error']                                  = 'O campo reCAPTCHA está dizendo que você é um robô.';
        $lang['smtp_username']                                    = 'Nome de usuário do SMTP';
        $lang['smtp_username_help']                               = 'Preencher somente se o seu Cadastro de e-mail usar nome de usuário para login SMTP.';
        $lang['pinned_project']                                   = 'Projeto Fixado';
        $lang['pin_project']                                      = 'Fixar Projeto';
        $lang['unpin_project']                                    = 'Desprender o Projeto';
        $lang['smtp_encryption']                                  = 'Criptografia de E-mail';
        $lang['smtp_encryption_none']                             = 'Nenhum';
        $lang['show_proposals_on_calendar']                       = 'Propostas';
        $lang['invoice_project_see_billed_expenses']              = 'Ver as despesas que serão faturadas nesta';
        $lang['project_overview_expenses']                        = 'Total de Despesas';
        $lang['project_overview_expenses_billable']               = 'Despesas Faturaveis';
        $lang['project_overview_expenses_billed']                 = 'Despesas Faturadas';
        $lang['project_overview_expenses_unbilled']               = 'Despesas não Faturadas';
        $lang['announcement_date_list']                           = 'Data';
        $lang['project_setting_view_finance_overview']            = 'ter visão geral das finanças';
        $lang['show_all_tasks_for_project_member']                = 'Permitir ao Colaborador a ver todas as tarefas, relacionadas a projetos que ele faz parte? (inclui não Colaboradores)';
        $lang['not_staff_added_as_project_member']                = 'Adicionado você como um membro do projeto';
        $lang['report_expenses_base_currency_select_explanation'] = 'Você precisa selecionar uma moeda porque o sistema encontrou diferentes moedas usadadas nas despesas.';
        $lang['project_activity_recorded_expense']   = 'Despesa Registrada';
        $lang['save_customer_and_add_contact']       = 'Salvar e criar contato';
        $lang['tickets_chart_weekly_opening_stats']  = 'Status semanal';
        $lang['related_knowledgebase_articles']      = 'Artigos relacionados';
        $lang['knowlegde_base_attachment_files']     = 'Arquivos anexados';
        $lang['detailed_overview']                   = 'Visão geral das tarefas';
        $lang['tasks_total_checklists_finished']     = 'Total de items da checklist marcados como terminados';
        $lang['tasks_total_added_attachments']       = 'Total de anexos adicionados';
        $lang['tasks_total_comments']                = 'Total de comentários';
        $lang['task_finished_on_time']               = 'Terminado a tempo?';
        $lang['task_finished_on_time_indicator']     = 'Sim';
        $lang['task_not_finished_on_time_indicator'] = 'Não';
        $lang['filter']                              = 'Filtro';
        $lang['task_filter_detailed_all_months']     = 'Todos os meses';
        $lang['kb_article_slug']                     = 'Slug';
        $lang['email_template_ticket_warning']          = 'Se o ticket for importado com o direcionamento de email e o contato não existir no CRM os campos não serão substituidos.';
        $lang['auto_stop_tasks_timers_on_new_timer']    = 'Parar todos os outros cronometros, quando começar um novo?';
        $lang['notification_when_customer_pay_invoice'] = 'Receber notificação quando Cadastro efetuar um pagamento (embutido)';
        $lang['not_invoice_payment_recorded']           = 'Novo pagamento de fatura - %s';
        $lang['email_template_contact_warning']         = 'A ação de mesclagem de campo de contatos não será substituida se o contato não estiver logado ao mesmo tempo.';
        $lang['theme_style']                            = 'Estilo de Tema';
        $lang['change_role_permission_warning']         = 'Alterar permissões de função agora não vão afetar permissões dos Colaboradores atuais que estão usando este papel.';
        $lang['task_copied_successfully']               = 'Tarefa copiada com sucesso';
        $lang['failed_to_copy_task']                    = 'Falha ao copiar tarefa';
        $lang['not_project_file_uploaded']              = 'Novo arquivo de projeto adicionado';
        $lang['settings_calendar_color']                = '%s Cor';
        $lang['settings_calendar_colors_heading']       = 'Cores';
        $lang['reminder']                               = 'Lembrete';
        $lang['back_to_tasks_list']                     = 'Voltar a lista de tarefas';
        $lang['copy_task_confirm']                      = 'Confirmar';
        $lang['changing_items_affect_warning']          = 'Alterar as informações de itens não afetará as Faturas/Orçamentos criados.';
        $lang['tax_is_used_in_expenses_warning']        = 'Você não pode atualizar este imposto, pois transações de gastos usando este imposto foram encontrados.';
        $lang['note']                                   = 'Nota';
        $lang['leads_staff_report_converted']           = 'Total de leads convertidos';
        $lang['leads_staff_report_created']             = 'Total de leads criados';
        $lang['leads_staff_report_lost']                = 'Total de leads perdidos';
        $lang['client_go_to_dashboard']                 = 'Voltar ao Painel';
        $lang['calendar_estimate_reminder']             = 'Lembrete de orçamento';
        $lang['calendar_invoice_reminder']              = 'Lembrete de fatura';
        $lang['calendar_proposal_reminder']             = 'Lembrete de proposta';
        $lang['show_estimate_reminders_on_calendar']    = 'Lembretes de Orçamentos';
        $lang['show_invoice_reminders_on_calendar']     = 'Lembretes de faturas';
        $lang['show_proposal_reminders_on_calendar']    = 'Lembretes de propostas';
        $lang['proposal_due_after']                     = 'Proposta vencida após (dias)';
        $lang['project_progress']                       = 'Progresso';
        $lang['calculate_progress_through_tasks']       = 'Calcular progresso através de tarefas';
        $lang['allow_customer_to_change_ticket_status'] = 'Aceitar que Cadastro possa mudar o status do Tíquete na área de Cadastro?';
        $lang['switch_to_general_report']               = 'Trocar para relatórios geral';
        $lang['switch_to_staff_report']                 = 'Trocar para relatório de Colaboradores';
        $lang['generate']                               = 'Gerar';
        $lang['from_date']                              = 'Da data';
        $lang['to_date']                                = 'Até a data';
        $lang['not_results_found']                      = 'Nenhum resultado encontrado';
        $lang['lead_lock_after_convert_to_customer']    = 'Não permitir a edição de lead, depois de convertido para Cadastro? (Não aplicado a administradores)';
        $lang['default_pipeline_sort']                  = 'Padrão de ordenação';
        $lang['not_goal_message_failed']                = 'Nós falhamos de alcançar nossa meta!<br /> Tipo de meta: %s
        <br />Objetivo: %s
        <br />Total Realizado: %s
        <br />Data início:: %s
        <br />Data fim: %s';
        $lang['toggle_full_view']             = 'Ativar visão Geral';
        $lang['not_estimate_invoice_deleted'] = 'apagado a invoice criada';
        $lang['not_task_new_comment']         = 'comentou a tarefa %s';
        $lang['invoice_number_exists']                  = 'Este número da fatura existe para o ano em curso.';
        $lang['estimate_number_exists']                 = 'Este número de orçamento existe para o ano em curso.';
        $lang['email_exists']                           = 'E-mail já existe';
        $lang['not_uploaded_project_file']              = 'Novo arquivo carregado';
        $lang['not_created_new_project_discussion']     = 'Nova discussão sobre o projeto criada';
        $lang['not_commented_on_project_discussion']    = 'Novo comentário na discussão do projeto';
        $lang['all_staff_members']                      = 'Todos os membros da equipe';
        $lang['help_project_permissions']               = 'Se marcar essa opção, irá permitir que os membros da equipe vejam TODOS os projetos, sem exceção. Se você só quer que eles visualizem apenas os projetos aos quais eles são atribuídos (adicionados como membros), não marque esse item.';
        $lang['help_tasks_permissions']                 = 'Se marcar essa opção, irá permitir que os membros da equipe vejam TODAS as tarefas, sem exceção. Se você só quer que eles visualizem apenas as tarefas as quais eles são atribuídos ou seguindo, não marque essa opção.';
        $lang['expense_recurring_days']                 = 'Dia (s)';
        $lang['expense_recurring_weeks']                = 'Semana (s)';
        $lang['expense_recurring_months']               = 'Mês (s)';
        $lang['expense_recurring_years']                = 'Ano (s)';
        $lang['reset_to_default_color']                 = 'Redefinir como padrão de cor';
        $lang['pdf_logo_width']                         = 'Largura do Logo (PX)';
        $lang['drop_files_here_to_upload']              = 'Solte os arquivos aqui para carregar';
        $lang['browser_not_support_drag_and_drop']      = 'Seu navegador não suporta carregar os arquivos por arrastar\'e\'soltar';
        $lang['remove_file']                            = 'Remover arquivo';
        $lang['you_can_not_upload_any_more_files']      = 'Você não pode carregar mais arquivos';
        $lang['custom_field_only_admin']                = 'Restringir visibilidade para apenas os administradores';
        $lang['leads_default_source']                   = 'Padrão de fonte, onde o Lead foi captado';
        $lang['clear_activity_log']                     = 'Limpar log';
        $lang['default_contact_permissions']            = 'Marque apenas as Permissões Padrão para esse contato';
        $lang['invoice_activity_marked_as_cancelled']   = 'fatura marcada como cancelada';
        $lang['invoice_activity_unmarked_as_cancelled'] = 'fatura desmarcada como cancelada';
        $lang['wait_text']                              = 'Por favor, aguarde ...';
        $lang['projects_summary']                       = 'Resumo dos projetos';
        $lang['dept_imap_host']                         = 'Hospedagem IMAP';
        $lang['dept_encryption']                        = 'Criptografia';
        $lang['dept_email_password']                    = 'Senha';
        $lang['dept_email_no_encryption']               = 'Sem Criptografia';
        $lang['failed_to_decrypt_password']             = 'Falha ao descriptografar a senha';
        $lang['delete_mail_after_import']               = 'Excluir e-mail após a importação?';
        $lang['expiry_reminder_enabled']                = 'Enviar lembrete de expiração';
        $lang['send_expiry_reminder_before']            = 'Enviar lembrete de expiração antes (DIAS)';
        $lang['not_expiry_reminder_sent']               = 'Lembrete de expiração enviado';
        $lang['send_expiry_reminder']                   = 'Lembrete de expiração enviado';
        $lang['sent_expiry_reminder_success']           = 'Lembrete de expiração enviado com sucesso';
        $lang['sent_expiry_reminder_fail']              = 'Falha ao enviar lembrete de expiração';
        $lang['leads_default_status']                   = 'Status padrão';
        $lang['item_description_placeholder']           = 'Descrição';
        $lang['item_long_description_placeholder']      = 'Descrição longa';
        $lang['item_quantity_placeholder']              = 'Quantidade';
        $lang['item_rate_placeholder']                  = 'Avaliar';
        $lang['tickets_summary']                        = 'Resumo dos Tíquetes';
        $lang['tasks_list_priority'] = 'Prioridade';
        $lang['ticket_status_db_2'] = 'Em Progresso';
        $lang['ticket_status_db_1'] = 'Aberto';
        $lang['ticket_status_db_3'] = 'Respondido';
        $lang['ticket_status_db_4'] = 'Em Espera';
        $lang['ticket_status_db_5'] = 'Fechado';
        $lang['ticket_priority_db_1'] = 'Baixa';
        $lang['ticket_priority_db_2'] = 'Média';
        $lang['ticket_priority_db_3'] = 'Alta';
        $lang['customer_have_projects_by'] = 'Contém projetos por status %s';
        $lang['customer_have_proposals_by'] = 'Contém propostas por status %s';
        $lang['do_not_redirect_payment'] = 'Não me redirecione para o processador de pagamento';
        $lang['project_tickets'] = 'Tíquetes';
        $lang['invoice_report'] = 'Relatório de Fatura';
        $lang['payment_modes_report'] = 'Métodos de Pagamento (Transações)';
        $lang['customer_admins'] = 'Administradores de Cadastro';
        $lang['assign_admin'] = 'Atribuição do administrador';
        $lang['customer_admin_date_assigned'] = 'Data de Atribuição';
        $lang['customer_admin_login_as_client_message'] ='Olá %s. Você está adicionado como administrador para este Cadastro.';
        $lang['ticket_form_validation_file_size'] = 'Tamanho do arquivo deve ser inferior a %s';
        $lang['has_transactions_currency_base_change'] = 'Alteração da moeda base só é possível se não há transações registradas nessa moeda. Exclua as transações para alterar a moeda base';
        $lang['customers_sort_all'] = 'Todos';
        $lang['use_recaptcha_customers_area']    = 'Permitir recaptcha na área de Cadastros (Login/Registro)';
        $lang['project_marked_as_finished']      = 'Projeto concluído';
        $lang['project_status_updated']          = 'Status do projeto atualizado';
        $lang['remove_decimals_on_zero']         = 'Remover decimais em números/dinheiro, com zero. (Ex.: 2,00 se tornará 2 | 2,25 permanecerá 2,25)';
        $lang['remove_tax_name_from_item_table'] = 'Remover o nome do imposto da linha do item, na tabela';
        $lang['not_billable_expenses_by_categories']      = 'Despesas não faturáveis, por categorias';
        $lang['billable_expenses_by_categories']          = 'Despesas faturáveis, ​​por categorias';
        $lang['format_letter_size']                       = 'A4 Paisagem';
        $lang['pdf_formats']                              = 'Formatos dos documentos';
        $lang['swap_pdf_info']                            = 'Trocar os Detalhes da Empresa/Cadastro (detalhes da empresa para o lado direito, detalhes do Cadastro para o lado esquerdo)';
        $lang['expenses_filter_by_categories']            = 'Por Categorias';
        $lang['task_copy']                                = 'Copiar';
        $lang['estimate_status']                          = 'Status';
        $lang['expenses_report_exclude_billable']         = 'Excluir as Despesas Faturáveis';
        $lang['expenses_total']                           = 'Total';
        $lang['estimate_activity_added_attachment']       = 'Anexo adicionado';
        $lang['show_to_customer']                         = 'Mostrar ao Cadastro';
        $lang['hide_from_customer']                       = 'Ocultar do Cadastro';
        $lang['expenses_report_total']                    = 'Total';
        $lang['expenses_report']                          = 'Relatório de despesas';
        $lang['expenses_report_total_tax']                = 'Total de Imposto';
        $lang['expenses_detailed_report']                 = 'Relatório Detalhado';
        $lang['expenses_export_contaazul']                = 'Exportar ContaAzul';
        $lang['expense_not_billable']                     = 'Não Faturável';
        $lang['notification_settings']                    = 'Configurações de Notificação';
        $lang['staff_with_roles']                         = 'Membros com funções';
        $lang['specific_staff_members']                   = 'Membros Específicos';
        $lang['proposal_mark_as']                         = 'Marcar como %s';
        $lang['kb_report_total_answers']                  = 'Total';
        $lang['ticket_message_edit']                      = 'Editar';
        $lang['invoice_files']                            = 'Arquivos da Fatura';
        $lang['estimate_files']                           = 'Arquivos de Orçamento';
        $lang['proposal_files']                           = 'Arquivos da Proposta';
        $lang['invoices_awaiting_payment']                = 'Faturas Aguardando Pagamento';
        $lang['tasks_not_finished']                       = 'Tarefas não Terminadas';
        $lang['outstanding_invoices']                     = 'Faturas Pendentes';
        $lang['past_due_invoices']                        = 'Faturas Vencidas';
        $lang['paid_invoices']                            = 'Faturas Pagas';
        $lang['invoice_estimate_year']                    = 'Ano';
        $lang['task_stats_logged_hours']                  = 'Horas Registradas';
        $lang['leads_converted_to_client']                = 'Leads Convertidos';
        $lang['task_assigned_from']                       = 'Esta tarefa está atribuída a você por %s';
        $lang['new_note']                                 = 'Nova Nota';
        $lang['my_tickets_assigned']                      = 'Tíquetes atribuídos a mim';
        $lang['filter_by_assigned']                       = 'Por Membro Atribuído';
        $lang['staff_stats_total_logged_time']            = 'Total de Tempo Cronometrado';
        $lang['staff_stats_last_month_total_logged_time'] = 'Tempo Cronometrado no Mês Anterior';
        $lang['staff_stats_this_month_total_logged_time'] = 'Tempo Cronometrado Neste Mês';
        $lang['staff_stats_last_week_total_logged_time']  = 'Tempo Cronometrado na Semana Anterior';
        $lang['staff_stats_this_week_total_logged_time']  = 'Tempo Cronometrado Nesta Semana';
        $lang['filter_by_competence']                     = 'Por Competência';
        // Dont change this because are translated before for the projects timesheets and now are only used for readability.
        $lang['timesheet_user']       = $lang['project_timesheet_user'];
        $lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
        $lang['timesheet_end_time']   = $lang['project_timesheet_end_time'];
        $lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
        $lang['task_timesheets']      = $lang['project_timesheets'];
        $lang['task_log_time_start']  = $lang['project_timesheet_start_time'];
        $lang['task_log_time_end']    = $lang['project_timesheet_end_time'];
        $lang['task_single_log_user'] = $lang['project_timesheet_user'];
        $lang['milestone_description']                      = 'Descrição';
        $lang['description_visible_to_customer']            = 'Mostrar descrição ao Cadastro';
        $lang['upcoming_tasks']                             = 'Próximas Tarefas';
        $lang['paymentmethod_two_checkout_account_number']  = 'Número da Conta (ID do Vendedor)';
        $lang['paymentmethod_two_checkout_private_key']     = 'Chave Privada';
        $lang['paymentmethod_two_checkout_publishable_key'] = 'Chave Publicável';
        $lang['payment_credit_card_number']                 = 'Número do Cartão';
        $lang['payment_credit_card_expiration_date']        = 'Data de Vencimento';
        $lang['payment_billing_email']                      = 'E-mail';
        $lang['submit_payment']                             = 'Submeter Pagamento';
        $lang['2checkout_notice_payment']                   = 'Os detalhes do cartão de crédito são processados através de um token seguro fornecido pelo 2Checkout';
        $lang['2checkout_usage_notice']                     = 'SSL é necessário se você está usando a API de pagamento do 2Checkout. É necessário ligar com segurança para o uso do token e autorizações. O sistema funcionará sem SSL, no entanto, isso estará fora de conformidade, o que corre o risco de desativação das suas permissões de API.';
        $lang['custom_field_disallow_customer_to_edit']     = 'Não permitir que o Cadastro edite este campo';
        $lang['project_due_notice']                         = 'Este projeto está atrasado em %s dias';
        $lang['not_lead_added_attachment']                  = 'novo anexo adicionado para liderar %s';
        $lang['lead_note_date_added']                       = 'Nota adicionada: %s';
        $lang['recurring_custom']                           = 'Personalizar';
        // don't translate these, only added for better readability already translated for the expenses custom recurring feature.
        $lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
        $lang['invoice_recurring_years']  = $lang['expense_recurring_years'];
        $lang['invoice_recurring_days']   = $lang['expense_recurring_days'];
        $lang['invoice_recurring_weeks']  = $lang['expense_recurring_weeks'];
        $lang['document_direction']                                 = 'Direção';
        $lang['notify_project_members_status_change']               = 'Notificar os membros do projeto que o status do projeto está alterado';
        $lang['not_project_status_updated']                         = 'Status do projeto atualizado de %s para %s';
        $lang['ticket_not_found']                                   = 'Tíquete não encontrado';
        $lang['project_not_found']                                  = 'Projeto não encontrado';
        $lang['export_project_data']                                = 'Exportar dados do projeto';
        $lang['total_project_members']                              = 'Total de Membros do Projeto';
        $lang['total_project_files']                                = 'Arquivos anexados';
        $lang['total_project_discussions_created']                  = 'Discussões criadas';
        $lang['project_member']                                     = 'Membro';
        $lang['total_project_discussions_comments']                 = 'Total de comentários da discussão';
        $lang['staff_total_task_assigned']                          = 'Total de tarefas atribuídas';
        $lang['staff_total_comments_on_tasks']                      = 'Comentários nas tarefas';
        $lang['project_members_overview']                           = 'Visão geral dos membros do projeto';
        $lang['project_milestones_overview']                        = 'Visão geral das etapas';
        $lang['total_tasks_in_milestones']                          = 'Total de tarefas atribuídas';
        $lang['total_task_members_assigned']                        = 'Total de membros atribuídos';
        $lang['total_task_members_followers']                       = 'Total de seguidores';
        $lang['total_milestones']                                   = 'Total de etapas';
        $lang['total_project_worked_days']                          = 'Total de dias trabalhados';
        $lang['finance_overview']                                   = 'Visão Geral de Finanças';
        $lang['project_custom_fields']                              = 'Personalizar campos';
        $lang['total_tickets_related_to_project']                   = 'Total de tíquetes ligados ao projeto';
        $lang['projects_total_invoices_created']                    = 'Total de faturas criadas';
        $lang['do_not_send_invoice_payment_email_template_contact'] = 'Não envie o e-mail gravado de pagamento da fatura para os contatos dos Cadastros';
        $lang['no_preview_available_for_file']                      = 'Não há visualização disponível para este arquivo.';
        $lang['project_activity_deleted_file_discussion_comment']   = 'Arquivo do comentário da discussão excluído';
        $lang['email_template_discussion_info']                     = 'Este modelo é usado para ambos e-mails de comentários da discussão do projeto. (arquivos de discussões e discussões regulares)';
        $lang['format_a4_portrait_size']                            = 'Retrato';
        $lang['only_show_contact_tickets']                          = 'No perfil do Cadastro, mostre apenas os tíquetes relacionados com o registrado para o contato (Não aplicado ao contato principal)';
        $lang['cancel_overdue_reminders_invoice']                   = 'Impedir o envio de lembretes em atraso para esta fatura';
        $lang['customer_shipping_address_notice']                   = 'Não preencha as informações de endereço de transporte se você não vai usar o endereço de transporte nas faturas dos Cadastros';
        $lang['timesheets_overview']                                = 'Visão geral das folhas de horas';
        $lang['invoice_status_draft']                               = 'Rascunho';
        $lang['save_as_draft']                                      = 'Salvar como Rascunho';
        $lang['convert_and_save_as_draft']                          = 'Converter e salvar como rascunho';
        $lang['convert']                                            = 'Converter';
        $lang['exclude_invoices_draft_from_client_area']            = 'Excluir faturas com status de rascunho da área dos Cadastros';
        $lang['invoice_draft_status_info']                          = 'Esta fatura está com status de Rascunho, o status será automaticamente mudado quando você enviar a fatura para o Cadastro ou marcar como enviada.';
        $lang['task_info']                                          = 'Informações da Tarefa';
        $lang['recurring_tasks']                                    = 'Recorrente';
        // don't translate these, already translated
        $lang['task_repeat_every']                         = $lang['expense_repeat_every'];
        $lang['task_recurring_months']                     = $lang['expense_recurring_months'];
        $lang['task_recurring_years']                      = $lang['expense_recurring_years'];
        $lang['task_recurring_days']                       = $lang['expense_recurring_days'];
        $lang['task_recurring_weeks']                      = $lang['expense_recurring_weeks'];
        $lang['todays_tasks']                              = 'Tarefas de hoje';
        $lang['payment_mode_invoices_only']                = 'Apenas Faturas';
        $lang['payment_mode_expenses_only']                = 'Apenas Despesas';
        $lang['task_no_checklist_items_found']             = 'Itens da lista de verificação não foram encontrados para esta tarefa';
        $lang['task_no_description']                       = 'Nenhuma descrição para esta tarefa';
        $lang['expenses_reminders']                        = 'Lembretes';
        $lang['expense_set_reminder_title']                = 'Definir lembrete de despesas';
        $lang['calendar_expense_reminder']                 = 'Lembretes de Despesas';
        $lang['recurring_task']                            = 'Tarefa Recorrente';
        $lang['disable_email_from_being_sent']             = 'Desativar este e-mail, para ser usado no envio';
        $lang['not_sent_indicator']                        = 'Não Enviado';
        $lang['proposal_status_revised']                   = 'Revisado';
        $lang['customer_currency_change_notice']           = 'Se o Cadastro utilizar outra moeda, em relação a moeda base, certifique-se de selecionar a moeda adequada para este Cadastro. A alteração da moeda não é possível após as transações serem registradas.';
        $lang['click_to_add_content']                      = 'Clique aqui para adicionar o conteúdo';
        $lang['related_to_project']                        = 'Este %s está relacionado com %s: %s';
        $lang['back_to_lead']                              = 'Voltar ao lead';
        $lang['add_task_timer_started_warning']            = 'Pare o cronômetro, iniciado atualmente para esta tarefa, para ser capaz de adicionar um novo cronômetro, manualmente.';
        $lang['sending_email_contact_permissions_warning'] = 'Falha ao selecionar automaticamente os contatos do Cadastro. Por favor, certifique-se de que o Cadastro associou os contatos com a permissão %s';
        $lang['currently_supported_currencies']                       = 'Moedas suportadas atualmente';
        $lang['authorize_notice']                                     = 'SSL é necessário se você está usando a API de pagamento AIM Authorize.Net. Authorize.net suporta apenas 1 moeda por conta. Certifique-se de adicionar apenas uma moeda associada à sua conta Authorize no campo de moedas.';
        $lang['settings_paymentmethod_developer_mode']                = 'Modo Desenvolvedor';
        $lang['payment_cardholder_name']                              = 'Nome do Titular do Cartão';
        $lang['settings_paymentmethod_authorize_api_login_id']        = 'ID do Login API';
        $lang['settings_paymentmethod_mollie_api_key']                = 'Chave API';
        $lang['settings_paymentmethod_authorize_api_transaction_key'] = 'ID da Transação API';
        $lang['settings_paymentmethod_authorize_secret_key']          = 'Chave Secreta';
        $lang['leads_report_converted_notice']                        = 'Apenas leads que pertencem ao status padrão do Cadastro serão considerados como leads convertidos. Se os leads pertencem ao status padrão do Cadastro e não são convertidos pelo Cadastro, ainda será contado como lead convertido';
        $lang['payment_method']                                       = 'Método de Pagamento';
        $lang['payment_method_info']                                  = 'Alguns portais de pagamento suportam vários/diferentes métodos de pagamentos, como Cartão de Crédito, Paypal, Banco...';
        $lang['dropbox_app_key']                                    = 'Chave do Aplicativo Dropbox';
        $lang['project_invoice_select_all_expenses']                = 'Selecionar todas as despesas';
        $lang['role_update_staff_permissions']                      = 'Atualizar todas as permissões dos membros da equipe que estão usando essa função';
        $lang['customer_active']                                    = 'Ativo';
        $lang['note_updated_successfully']                          = 'Nota atualizada com sucesso!';
        $lang['update_note']                                        = 'Atualizar nota';
        $lang['update_comment']                                     = 'Atualizar comentário';
        $lang['comment_updated_successfully']                       = 'Comentário atualizado com sucesso!';
        $lang['staff_send_welcome_email']                           = 'Enviar e-mail de boas-vindas';
        $lang['proposal_warning_email_change']                      = 'E-mail alterado para %s. Este %s está associado a proposta/s. Você quer atualizar todos os e-mails de propostas associados a %s?';
        $lang['update_proposal_email_yes']                          = 'Sim, atualize todos os e-mails associados.';
        $lang['update_proposal_email_no']                           = 'Não, eu vou atualizar manualmente.';
        $lang['proposals_emails_updated']                           = 'Todos os e-mails de propostas associados a este %s foram atualizados para %s';
        $lang['custom_field_company']                               = 'Empresa';
        $lang['actions']                                            = 'Ações';
        $lang['project_mark_as']                                    = 'Marcar como %s';
        $lang['todo_edit_title']                                    = 'Editar item a fazer';
        $lang['additional_action_required']                         = 'Ação adicional solicitada!';
        $lang['project_mark_tasks_finished_confirm']                = 'Confirmar';
        $lang['project_marked_as_success']                          = 'Projeto marcado como %s com sucesso!';
        $lang['project_marked_as_failed']                           = 'Falha ao marcar projeto como %s';
        $lang['auto_assign_customer_admin_after_lead_convert']      = 'Atribuir Automaticamente para Administrador, o membro da equipe que converteu o lead para Cadastro?';
        $lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Se esta opção estiver definida como SIM, o membro da equipe que converteu o lead para o Cadastro será automaticamente atribuído como administrador do Cadastro. NOTA: Esta opção só será aplicável aos membros da equipe que não tem permissão para VISÃO dos Cadastros';
        $lang['auto_close_tickets_disable']                         = 'Defina 0 para desativar';
        $lang['task_checklist_item_completed_by']                   = 'Concluído por %s';
        $lang['staff_email_signature_help']                         = 'Se vazio, a assinatura de e-mail padrão das configurações será usada';
        $lang['default_task_priority']                              = 'Prioridade Padrão';
        $lang['project_send_created_email']                         = 'Enviar e-mail do projeto criado';
        $lang['survey_send_to_lists']                               = 'Listas de envio de pesquisa';
        $lang['survey_send_notice']                                 = 'Os e-mails serão enviados, através do CRON JOB, por hora.';
        $lang['show_transactions_on_invoice_pdf']            = 'Exibir pagamentos de faturas (transações) em PDF';
        $lang['bulk_actions']                                = 'Ações em Massa';
        $lang['additional_filters']                          = 'Filtros Adicionais';
        $lang['expenses_available_to_bill']                  = 'Despesas disponíveis para faturar';
        $lang['bulk_action_customers_groups_warning']        = 'Se você não selecionar nenhum grupo, todos os grupos atribuídos aos Cadastros selecionados serão removidos.';
        $lang['customer_attachments_show_in_customers_area'] = 'Mostrar na área do Cadastros';
        $lang['customer_attachments_show_notice']            = 'Somente os arquivos enviados pelo perfil do Cadastro podem ser mostrados/ocultados na área de Cadastros...';
        $lang['customer_profile_files']                      = 'Arquivos';
        $lang['no_files_found']                              = 'Nenhum Arquivo Encontrado';
        $lang['survey_customers_all']                        = 'Todos os Cadastros';
        $lang['custom_field_column']                         = 'Grade (Coluna Bootstrap) - Máximo são 12';
        $lang['task_status']                                 = 'Status';
        $lang['task_status_1']                               = 'Não Iniciado';
        $lang['task_status_2']                               = 'Aguardando Feedback';
        $lang['task_status_3']                               = 'Em Teste';
        $lang['task_status_4']                               = 'Em Progresso';
        $lang['task_status_5']                               = 'Completo';
        $lang['task_mark_as']                                = 'Marcar como %s';
        $lang['task_marked_as_success']                      = 'Tarefa marcada como %s com sucesso!';
        $lang['search_tasks']                                = 'Buscar Tarefas';
        $lang['tasks_kanban_limit']                          = 'Limite de linhas, por status, de tarefas no modo Kan Ban (Modo Cartão)';
        $lang['show_on_invoice_on_pdf']                      = 'Mostrar %s Na fatura PDF';
        $lang['show_pay_link_to_invoice_pdf']                = 'Mostrar o link do PDF da Fatura de pagamento  (Não aplicado se o status da fatura for Cancelado)';
        $lang['no_leads_found']                              = 'Nenhum Lead encontrado';
        $lang['created_today']                               = 'Criado hoje';
        $lang['total_tasks_deleted']                         = 'Total de Tarefas Deletadas: %s';
        $lang['total_tickets_delete']                        = 'Total de Tíquetes Deletados: %s';
        $lang['format_letter_portrait']                      = 'Formato Retrato';
        $lang['format_letter_landscape']                     = 'Formato Panorama';
        $lang['period_datepicker']                           = 'Período';
        $lang['total_by_hourly_rate']                        = 'Total por hora';
        $lang['staff_hourly_rate']                           = 'Valor por hora ou por Equipe';
        $lang['task_hourly_rate']                            = 'Valor da tarefa, por hora';
        // &#37; is for % so the system can confuse for the original fields like %s
        $lang['remove_tax_name_from_item_table_help'] = 'ex. A TAXA do Item 15&#37; Será mostrado como 15&#37; Sem o nome do imposto. (Não aplicado, se vários impostos possuem o mesmo nome e o percentual do imposto existir para o item)';
        $lang['back_to_project']                      = 'Voltar para o Projeto';
        $lang['view_kanban']                          = 'Exibir em Modo Cartão';
        $lang['invoice_is_overdue']                   = 'Esta fatura está atrasada em %s dias';
        $lang['time_decimal']                            = 'Tempo (decimal)';
        $lang['time_h']                                  = 'Hora (h)';
        $lang['proposal_number_prefix']                  = 'Prefixo do número da proposta';
        $lang['settings_number_padding_prefix']          = 'Quantidade de Zeros, para o formato do prefixo. <br /> <small>Ex. Se este valor for 3, o número será formatado: 005 ou 025</small>';
        $lang['this_week_payments']                      = 'Pagamentos dessa Semana';
        $lang['last_week_payments']                      = 'Pagamentos da semana passada';
        $lang['not_published_new_post']                  = 'Novo Post publicado';
        $lang['expense_name']                            = 'Nome';
        $lang['expense_name_help']                       = 'Para uso pessoal';
        $lang['adjustments']                             = 'Ajustes';
        $lang['payments_received']                       = 'Pagamentos Recebidos';
        $lang['not_lead_activity_created_proposal']      = 'Nova proposta Criada - %s';
        $lang['lead_title']                              = 'Posição';
        $lang['lead_address']                            = 'Endereço';
        $lang['lead_city']                               = 'Cidade';
        $lang['lead_state']                              = 'Estado';
        $lang['lead_country']                            = 'País';
        $lang['lead_zip']                                = 'CEP';
        $lang['lead_is_public_yes']                      = 'Sim';
        $lang['lead_is_public_no']                       = 'Não';
        $lang['lead_info']                               = 'Informações de Lead';
        $lang['lead_general_info']                       = 'Informações Gerais';
        $lang['lead_latest_activity']                    = 'Última Atividade';
        $lang['item_description_new_lines_notice']       = 'Novas linhas não são suportadas para a descrição do item. Use a descrição longa do item.';
        $lang['estimates_report']                        = 'Relatório de Orçamentos';
        $lang['confirm']                                 = 'Confirmar';
        $lang['delete_staff']                            = 'Excluir membro da Equipe';
        $lang['delete_staff_info']                       = 'Alguns dados para este membro da equipe precisam ser transferidos para outro usuário. Selecione o usuário, para onde deseja transferir os dados.';
        $lang['estimate_items']                          = 'Itens Estimados';
        $lang['no_proposals_found']                      = 'Nenhuma Proposta encontrada';
        $lang['no_estimates_found']                      = 'Nenhum orçamento encontrado';
        $lang['pipeline_limit_status']                   = 'Limite do pipeline, por status';
        $lang['settings_update']                         = 'Atualização do sistema';
        $lang['purchase_key']                            = 'Chave de Compra';
        $lang['update_now']                              = 'Atualizar Agora!';
        $lang['update_available']                        = 'Uma atualização está disponível';
        $lang['latest_version']                          = 'Última Versão';
        $lang['your_version']                            = 'Sua versão';
        $lang['using_latest_version']                    = 'Você está usando a versão mais recente';
        $lang['mark_as_active']                          = 'Marcar como ativo';
        $lang['customer_inactive_message']               = 'Este é o perfil de Cadastro inativo. Alguns recursos podem estar desativados';
        $lang['active_customers']                        = 'Cadastros Ativos';
        $lang['inactive_active_customers']               = 'Cadastros Inativos';
        $lang['include_proposal_items_merge_field_help'] = 'Incluir itens de proposta, com campo de mesclagem, em qualquer parte do conteúdo da proposta, como %s';
        $lang['all_data_synced_successfully']            = 'Todos os dados foram sincronizados com êxito!';
        $lang['sync_now']                                = 'Sincronizar Agora';
        $lang['sync_data']                               = 'Sincronizar dados';
        $lang['sync_proposals_up_to_date']               = 'Todas as propostas estão atualizadas! Nada para sincronizar!';
        $lang['proposal_sync_1_info']                    = 'Todos os dados da proposta são armazenados separadamente, para cada proposta, após a criação. Atualizar a informação de  %s  não afetará as propostas criadas anteriormente para esta %s';
        $lang['proposal_sync_2_info']                    = 'Se você atualizou recentemente a sua informação de %s , você pode sincronizar todos os novos dados com as propostas associadas. Aqui está uma lista de campos que você pode sincronizar.';
        $lang['expense_include_additional_data_on_convert'] = 'Inclua detalhes adicionais, para descrição longa, do item tirado desta despesa.';
        $lang['calendar_events_limit']                              = 'Limite do Calendário de Eventos (mês e semana)';
        $lang['show_page_number_on_pdf']                            = 'Mostrar número da página no PDF';
        $lang['customer_active_inactive_help']                      = 'Não será exibido nos menus suspensos, ao criar novos registros';
        $lang['item_groups']                                        = 'Grupos';
        $lang['item_group']                                         = 'Grupo do Item';
        $lang['item_group_name']                                    = 'Nome do Grupo';
        $lang['new_item_group']                                     = 'Novo Grupo';
        $lang['show_setup_menu_item_only_on_hover']                 = 'Mostrar o item de menu de configuração, somente quando passar o mouse sobre a área da barra lateral principal';
        $lang['internal_article']                                   = 'Artigo Interno';
        $lang['expenses_created_from_this_recurring_expense']       = 'Despesas criadas a partir desta despesa recorrente';
        $lang['convert_to_task']                                    = 'Converter para tarefa';
        $lang['next_invoice_date']                                  = 'Data da Próxima Fatura: %s';
        $lang['next_expense_date']                                  = 'Data da Próxima Despesa: %s';
        $lang['invoice_recurring_from']                             = 'Esta fatura foi criada a partir de uma fatura recorrente com número: %s';
        $lang['expense_recurring_from']                             = 'Essa despesa foi criada a partir da seguinte despesa recorrente: %s';
        $lang['child_invoices'] = 'Child Invoices';
        $lang['child_expenses'] = 'Child Expenses';
        $lang['no_announcements'] = 'Sem anúncios';
        $lang['unit'] = 'Unidade';
        $lang['permission_view_own'] = 'Visualizar (criados somente por ele)';
        $lang['permission_global'] = 'criados por todos';
        $lang['permission_customers_based_on_admins'] = 'Com base em administradores de Cadastros';
        $lang['permission_payments_based_on_invoices'] = 'Com base em permissão, para ver as próprias faturas';
        $lang['permission_projects_based_on_assignee'] = 'Se o membro da equipe não tiver permissão para ver Globalmente, será exibido apenas os projetos em que o membro da equipe é adicionado como membro do projeto.';
        $lang['permission_tasks_based_on_assignee'] = 'Se o colaborador não tiver permissão para ver Globalmente, será exibido apenas as tarefas onde o membro da equipe é seguidor, atribuído ou se a tarefa estiver como Pública. Outra opção é Configurar da seguinte forma -> Configurações-> Tarefas-> Permitir que todos os colaboradores possam ver todas as tarefas, relacionadas a projetos. Defina para SIM, quando a tarefa estiver vinculada ao projeto.';
        $lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selecionado por padrão na fatura';
        $lang['paymentmethod_braintree_merchant_id'] = 'ID do Negociante';
        $lang['paymentmethod_braintree_private_key'] = 'Chave Privada';
        $lang['paymentmethod_braintree_public_key'] = 'Chave Pública';
        $lang['company_requires_vat_number_field'] = 'A empresa exige a utilização do campo Número do IVA?';
        $lang['no_company_view_profile'] = 'Ver Perfil da Pessoa';
        $lang['company_is_required'] = 'O campo Empresa é obrigatório?';
        $lang['estimate_invoiced'] = 'Faturado';
        $lang['file_date_uploaded'] = 'Data de envio';
        $lang['allow_contact_to_delete_files'] = 'Permitir que os contatos excluam arquivos próprios, enviados pela área do Cadastro?';
        $lang['file'] = 'Arquivo';
        $lang['customer_contact_person_only_one_allowed'] = 'Somente 1 contato é permitido, quando o campo da empresa não está preenchido. O sistema lançará este Cadastro como pessoa';
        $lang['web_to_lead'] = 'Lead para Web';
        $lang['web_to_lead_form'] = 'Formulário de Lead para Web';
        $lang['new_form'] = 'Novo Formulário';
        $lang['form_name'] = 'Nome do Formulário';
        $lang['cf_option_in_use'] = 'Uma opção que você removeu está em uso e, por isso, não pode ser removida. A opção é anexada automaticamente às opções existentes.';
        $lang['form_builder'] = 'Construtor de formulários';
        $lang['form_information'] = 'Informações sobre Formulários e Configuração';
        $lang['form_builder_create_form_first'] = 'Para usar o construtor de formulários, primeiro crie um formulário.';
        $lang['notify_assigned_user'] = 'Pessoa responsável';
        $lang['form_recaptcha'] = 'Usar Google Recaptcha';
        $lang['form_lang_validation'] = 'Idioma';
        $lang['form_lang_validation_help'] = 'Para mensagens de validação';
        $lang['form_btn_submit_text'] = 'Nome do botão de Enviar';
        $lang['form_success_submit_msg'] = 'Mensagem para mostrar depois que o formulário for enviado com sucesso';
        $lang['total_submissions'] = 'Total de Envios';
        $lang['form_integration_code'] = 'Código de Integração';
        $lang['not_lead_imported_from_form'] = 'Novo lead, importado da Web, para o formulário Lead - %s';
        $lang['not_lead_activity_log_attachment'] = 'Anexo importado do formulário - %s';
        $lang['form_integration_code_help'] = 'Copie e cole o código, em qualquer lugar do seu site, para mostrar o formulário. Além disso, você pode ajustar a largura X altura, em px, para caber no seu site.';
        $lang['invoice_not_found'] = 'Fatura não encontrada';
        $lang['estimate_not_found'] = 'Orçamento não encontrado';
        $lang['expense_not_found'] = 'Despesa não encontrada';
        $lang['proposal_not_found'] = 'Proposta não encontrada';
        $lang['new_task_assigned_non_user'] = 'Nova tarefa %s foi atribuída a você';
        $lang['no_child_found'] = 'Nenhum subitem %s foi encontrado';
        $lang['company_vat_number'] = 'CNPJ';
        $lang['not_lead_assigned_from_form'] = 'Novo lead foi atribuído a você';
        $lang['not_lead_activity_assigned_from_form'] = 'Lead atribuído a %s';
        $lang['form_allow_duplicate'] = 'Permitir %s duplicados, para ser inserido no banco de dados?';
        $lang['track_duplicate_by_field'] = 'Impedir campo duplicado';
        $lang['and_track_duplicate_by_field'] = 'campo + (Deixe em branco para acompanhar duplicatas apenas por 1 campo)';
        $lang['create_the_duplicate_form_data_as_task'] = 'Criar %s Dados duplicados, para a tarefa, e atribuir a um colaborador responsável';
        $lang['create_the_duplicate_form_data_as_task_help'] = 'Usado para uma revisão adicional sobre o envio e tomar as medidas necessárias';
        $lang['currently_selected'] = 'Selecionado atualmente';
        $lang['search_ajax_empty'] = 'Selecionar e começar a digitar';
        $lang['search_ajax_placeholder'] = 'Escreva, para pesquisar...';
        $lang['search_ajax_searching'] = 'Buscando...';
        $lang['search_ajax_initialized'] = 'Comece a digitar, para pesquisar';
        $lang['lead_description'] = 'Descrição';
        $lang['lead_website'] = 'Website';
        $lang['invoice_activity_auto_converted_from_estimate'] = 'Fatura automática criada, a partir do orçamento com número %s';
        $lang['hour_of_day_perform_auto_operations'] = 'Hora do dia para realizar operações automáticas';
        $lang['hour_of_day_perform_auto_operations_format'] = 'Formato de 24 horas. Ex. 9 da manhã e 21h da noite.';
        $lang['inv_hour_of_day_perform_auto_operations_help'] = 'Usado para faturas recorrentes, avisos atrasados, etc...';
        $lang['use_minified_files'] = 'Usar versão de arquivos minified para css e js (somente arquivos do sistema)';
        $lang['logo_favicon_changed_notice'] = 'Alteração de Logo ou Favicon detectado. Se você ainda estiver visualizando o logotipo anterior, limpe o cache do seu navegador.';
        $lang['kb_search_articles'] = 'Pesquisar artigos na Base de Dados de Conhecimento';
        $lang['kb_search'] = 'Pesquisar';
        $lang['have_a_question'] = 'Tem uma pergunta?';
        $lang['card_expiration_year'] = 'Ano de Expiração';
        $lang['card_expiration_month'] = 'Mês de Expiração';
        $lang['client_website'] = 'Website';
        $lang['search_project_members'] = 'Pesquisar Membros do Projecto...';
        $lang['cf_translate_input_link_title'] = 'Título';
        $lang['cf_translate_input_link_url'] = 'URL';
        $lang['cf_translate_input_link_tip'] = 'Clique aqui para adicionar link';
        $lang['task_edit_delete_timesheet_notice'] = 'O Quadro de Tempo da tarefa é %s. Você não pode %s o quadro de tempo.';
        $lang['department_username'] = 'Nome de usuário IMAP';
        $lang['department_username_help'] = 'Preencha somente este campo, se o servidor IMAP usar o nome de usuário, para efetuar o login, em vez do endereço de e-mail. Observe que, você ainda precisará adicionar o endereço de e-mail.';
        $lang['total_tickets_deleted'] = 'Total de tíquetes deletados: %s';
        $lang['ticket_linked_to_project'] = 'Este ticket está vinculado ao projeto: %s';
        $lang['only_own_files_contacts'] = 'Se você compartilhar o arquivo, manualmente, no perfil do Cadastro, outros contatos poderão ver o arquivo?';
        $lang['only_own_files_contacts_help'] = 'Se você compartilhar o arquivo manualmente, do perfil do Cadastro, para outros contatos, eles poderão ver o arquivo.';
        $lang['share_file_with'] = 'Compartilhar arquivo com';
        $lang['file_share_visibility_notice'] = 'Este arquivo não é compartilhado com seus contatos! Modifique a visibilidade do arquivo, para que seus contatos possam vê-lo, e recarregue a página';
        $lang['share_file_with_show'] = 'Este arquivo está compartilhado com: %s';
        $lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Permitir que o contato principal visualize/edite os detalhes de faturamento e envio?';
        $lang['estimate_due_after'] = 'Finalizar orçamento, depois de (dias)';
        $lang['my_timesheets'] = 'Meus Quadros de Tempo';
        $lang['today'] = 'Hoje';
        $lang['open_in_dropbox'] = 'Abrir no Dropbox';
        $lang['show_primary_contact'] = 'Mostrar nome completo do contato principal em %s';
        $lang['view_members_timesheets'] = 'Ver todos os quadros de tempo';
        $lang['priority'] = 'Prioridade';
        $lang['fetch_from_google'] = 'Buscar no google';
        $lang['customer_fetch_lat_lng_usage'] = 'Preencha o endereço, cidade e país, antes de buscar, para obter o melhor resultado.';
        $lang['g_search_address_not_found'] = 'O endereço não pôde ser encontrado! Por favor, tente novamente';
        $lang['proposals_report'] = 'Relatório de Propostas';
        $lang['staff_members_open_tickets_to_all_contacts_help'] = 'Se os membros da equipe não tiverem permissão para visualizar os Cadastros, então, só será possível criar novos tíquetes na área de administração, para os contatos do Cadastro, onde é atribuído como Cadastro admin.';
        $lang['staff_members_open_tickets_to_all_contacts'] = 'Permitir que os membros da equipe possam abrir tíquetes para todos os contatos?';
        $lang['charts_based_report'] = 'Relatório Baseado em Gráficos';
        $lang['delete_backups_older_then'] = 'Deletar automaticamente backups mais antigos do que X dias (definir 0 para desativar)';
        $lang['responsible_admin'] = 'Administrador responsável';
        $lang['tags'] = 'Tags';
        $lang['tag'] = 'Tag';
        $lang['customer_map_notice'] = 'Adicione longitude e latitude no perfil do Cadastro, para mostrar o mapa aqui';
        $lang['default_view'] = 'Visualização padrão';
        $lang['day'] = 'Dia';
        $lang['agenda'] = 'Agenda';
        $lang['timesheet_tags'] = 'Tags de Quadros de Tempo';
        $lang['show_more'] = 'Ver Mais';
        $lang['show_less'] = 'Ver Menos';
        $lang['project_completed_date'] = 'Data de Conclusão';
        $lang['language'] = 'Idioma';
        $lang['this_week'] = 'Esta Semana';
        $lang['last_week'] = 'Última Semana';
        $lang['this_month'] = 'Este mês';
        $lang['last_month'] = 'Último mês';
        $lang['no_description_project'] = 'Nenhuma descrição para este projeto';
        $lang['sales_string'] = 'Informações adicionais';
        $lang['no_project_members'] = 'Não há membros para este projeto';
        $lang['search_by_tags'] = 'Use # + nome da tag para pesquisar por tags';
        $lang['project_status_5'] = 'Cancelado';
        $lang['not_activity_new_reminder_created'] = 'Definir um novo lembrete para %s com data em %s';
        $lang['not_activity_new_task_created'] = 'Nova tarefa Criada - %s';
        $lang['recurring_invoice_draft_notice'] = 'Esta fatura está com status de rascunho. Você precisa marcar esta fatura como enviada.. As faturas recorrentes, com o status de rascunhos, não serão recriadas pelo job do cron..';
        $lang['recurring_recreate_hour_notice'] = '%s Será recriado em hora específica do dia, com base na configuração, localizada em Configuração-> Configurações de Cron Job';
        $lang['invoice_project_include_timesheets_notes'] = 'Incluir carimbo da hora na descrição do item';
        $lang['events'] = 'Eventos';
        $lang['clear'] = 'Limpar';
        $lang['auto_mark_as_public'] = 'Marcar automaticamente como Público';
        $lang['time_format'] = 'Formato de Hora';
        $lang['time_format_24'] = '24 horas';
        $lang['time_format_12'] = '12 horas';
        $lang['delete_activity_log_older_then'] = 'Excluir registro de atividade do sistema mais antigo que X meses';
        $lang['mark_as_read'] = 'Marcar como lida';
        $lang['mark_all_as_read'] = 'Marcar todas como lidas';

        $lang['tax_1'] = 'Taxa 1';
        $lang['tax_2'] = 'Taxa 2';
        $lang['total_with_tax'] = 'Total com taxa/imposto';
        $lang['new_task_auto_assign_current_member'] = 'Atribuir automaticamente o criador da tarefa, quando nova tarefa for criada';
        $lang['new_task_auto_assign_current_member_help'] = 'Não se aplica se a tarefa estiver vinculada ao projeto e o criador não for membro do projeto';
        $lang['copy_project_tasks_status'] = 'Status das tarefas';
        $lang['tasks_summary'] = 'Resumo das Tarefas';
        $lang['vault'] = 'Vault';
        $lang['new_vault_entry'] = 'Nova entrada de Vault';
        $lang['server_address'] = 'Endereço do Servidor';
        $lang['port'] = 'Porta';
        $lang['vault_username'] = 'Nome de Usuário';
        $lang['vault_password'] = 'Senha';
        $lang['vault_description'] = 'Descrição Curta';
        $lang['vault_entry'] = 'Entrada de Vault';
        $lang['no_port_provided'] = 'Não fornecido';
        $lang['view_password'] = 'Ver Semha';
        $lang['security_reasons_re_enter_password'] = 'Por razões de segurança, digite sua senha abaixo';
        $lang['password_change_fill_notice'] = 'Preencha apenas o campo de senha se você quiser alterar a senha';
        $lang['vault_password_user_not_correct'] = 'Sua senha está INcorreta. Por favor, tente novamente';
        $lang['no_vault_entries'] = 'Entradas de Vault não encontradas para este Cadastro.';
        $lang['vault_entry_created_from'] = 'Esta entrada do vault foi criada por %s';
        $lang['vault_entry_last_update'] = 'Última atualização por %s';
        $lang['vault_entry_visible_to_all'] = 'Visível para todos os membros da equipe, que têm acesso a este Cadastro';
        $lang['vault_entry_visible_creator'] = 'Visível apenas para mim (o administrador não está excluído)';
        $lang['vault_entry_visible_administrators'] = 'Visível apenas para administradores';
        $lang['my_reminders'] = 'Meus Lembretes';
        $lang['reminder_related'] = 'Relacionado a';
        $lang['event_notification'] = 'Notificação';
        $lang['days'] = 'Dias';
        $lang['reminder_notification_placeholder'] = 'Ex. 30 minutos antes';
        $lang['event_color'] = 'Cor do Evento';
        $lang['group_by_task'] = 'Grupo por Tarefa';
        $lang['save'] = 'Salvar';
        $lang['disable_languages'] = 'Desabilitar Traduções';
        $lang['not_customer_viewed_invoice'] = 'An invoice with number %s has been viewed';
        $lang['not_customer_viewed_estimate'] = 'An estimate with number %s has been viewed';
        $lang['not_customer_viewed_proposal'] = 'An proposal with number %s has been viewed';
        $lang['display_inline'] = 'Display Inline';
        $lang['email_header'] = 'Predefined Header';
        $lang['email_footer'] = 'Predefined Footer';
        $lang['exclude_proposal_from_client_area_with_draft_status'] = 'Exclude proposals with draft status from customers area';
        $lang['pusher_app_key'] = 'APP Key';
        $lang['pusher_app_secret'] = 'APP Secret';
        $lang['pusher_app_id'] = 'APP ID';
        $lang['pusher_cluster_notice'] = 'Leave blank to use default pusher cluster.';
        $lang['pusher_enable_realtime_notifications'] = 'Enable Real Time Notifications';
        $lang['task_is_overdue'] = 'This task is overdue';
        $lang['this_year'] = 'This Year';
        $lang['last_year'] = 'Last Year';
        $lang['customer_statement'] = 'Movimentações';
        $lang['customer_statement_for'] = 'Movimentações de %s';
        $lang['account_summary'] = 'Resumo periódico';
        $lang['statement_beginning_balance'] = 'Saldo inicial';
        $lang['invoiced_amount'] = 'Pedidos / Faturas';
        $lang['amount_paid'] = 'Montate pago';
        $lang['statement_from_to'] = '%s para %s';
        $lang['customer_statement_info'] = 'Apresentação de pedidos e pagamentos entre %s e %s';
        $lang['balance_due'] = 'Total';
        $lang['statement_heading_date'] = 'Data';
        $lang['statement_heading_details'] = 'Detalhes';
        $lang['statement_heading_amount'] = 'Valor';
        $lang['statement_heading_payments'] = 'Pagamentos';
        $lang['statement_heading_balance'] = 'Balanço';
        $lang['statement_invoice_details'] = 'Pedido %s - em %s';
        $lang['statement_payment_details'] = 'Pagamento (%s) do pedido %s';
        $lang['statement_bill_to'] = 'Para';
        $lang['send_to_email'] = 'Enviar e-mail';
        $lang['statement_sent_to_client_success'] = 'Este resumo de movimentos foi enviado ao cadastro';
        $lang['statement_sent_to_client_fail'] = 'Problema ao enviar as movimentações';
        $lang['view_account_statement'] = 'Ver movimentações da conta';
        $lang['text_not_recommended_for_servers_limited_resources'] = 'Not recommended if the server have limited resources. Eq shared hosting';
        $lang['tasks_bull_actions_assign_notice'] = 'If the task is linked to project and the staff member you are assigning the task to is not project member this staff will be auto added as member.';
        $lang['company_information'] = 'Instituição';
        $lang['ticket_form'] = 'Ticket Form';
        $lang['ticket_form_subject'] = 'Subject';
        $lang['ticket_form_name'] = 'Your name';
        $lang['ticket_form_email'] = 'Email Address';
        $lang['ticket_form_department'] = 'Department';
        $lang['ticket_form_message'] = 'Message';
        $lang['ticket_form_priority'] = 'Priority';
        $lang['ticket_form_service'] = 'Service';
        $lang['ticket_form_submit'] = 'Submit';
        $lang['ticket_form_attachments'] = 'Attachments';

        $lang['success_submit_msg'] = 'Thank you for contacting us. We will get back to you shortly.';
        $lang['vault_entry_share_on_projects'] = 'Share this vault entry in projects with project members';
        $lang['project_shared_vault_entry_login_details'] = 'View Customer Site Login Details';
        $lang['iso_code'] = 'ISO Code';
        $lang['estimates_not_invoiced'] = 'Not Invoiced';
        $lang['show_on_ticket_form'] = 'Show on ticket form';
        $lang['cancel_upload'] = 'Cancelar Upload';
        $lang['show_table_export_button'] = 'Show table export button';
        $lang['show_table_export_all'] = 'Para todos os membros';
        $lang['show_table_export_admins'] = 'Only to administrators';
        $lang['show_table_export_hide'] = 'Hide export button for all staff members';
        $lang['task_created_by'] = 'Criado por %s';
        $lang['validation_extension_not_allowed'] = 'File extension not allowed';
        $lang['allow_staff_view_proposals_assigned'] = 'Allow staff members to view proposals where they are assigned to';
        $lang['task_users_working_on_tasks_multiple'] = 'Neste momento %s está trabalhando nesta tarefa';
        $lang['task_users_working_on_tasks_single'] = 'Atualmente %s está trabalhando nesta tarefa';
        $lang['estimated_hours'] = 'Tempo estimado';
        $lang['two_factor_auth_failed_to_send_code'] = 'Failed to send two step authentication code to email, SMTP settings may not be configured properly';
        $lang['two_factor_auth_code_sent_successfully'] = 'An email has been sent to %s with verification code to verify your login';
        $lang['enable_two_factor_authentication'] = 'Ativar autenticação de dois fatores';
        $lang['two_factor_authentication_info'] = 'Two factor authentication is provided by email, before enable two factor authentication make sure that your SMTP settings are properly configured and the system is able to send an email. Unique authentication key will be sent to email upon login.';
        $lang['timesheets_overview_all_members_notice_admins'] = 'Planilhas de tempo de todos os membros só é disponível para administradores.';
        $lang['two_factor_authentication'] = 'Autenticação de dois fatores';
        $lang['two_factor_authentication_code'] = 'Code';
        $lang['admin_two_factor_auth_heading'] = 'Código de autenticação';
        $lang['two_factor_code_not_valid'] = 'Código de autenticação inválido';
        $lang['back_to_login'] = 'Retornar ao login';
        $lang['enter_activity'] = 'Atividade';
        $lang['attach_files'] = 'Anexar arquivos';
        $lang['no_tags_used'] = 'No tags used by the system';
        $lang['exclude_completed_tasks'] = 'Exclude Completed Tasks';
        $lang['modal_width_class'] = 'Modal Width Class';
        $lang['contract_copy'] = 'Copiar';
        $lang['contract_copied_successfully'] = 'Contract copied successfully';
        $lang['contract_copied_fail'] = 'Failed to copy contract';
        $lang['project_marked_as_finished_to_contacts'] = 'Send <b>Project Marked as Finished</b> email to customer contacts';
        $lang['only_admins'] = 'Only administrators';
        $lang['new_notification'] = 'New Notification!';
        $lang['enable_desktop_notifications'] = 'Enable Desktop Notifications';
        $lang['save_and_send'] = 'Salvar e enviar';
        $lang['private'] = 'Privado';
        $lang['task_created_at'] = 'Criado em %s';
        $lang['hide_notified_reminders_from_calendar'] = 'Hide notified reminders from calendar';
        $lang['last_active'] = 'Última atividade';
        $lang['open_ticket'] = 'Tíquete aberto';
        $lang['task_add_description'] = 'Adicionar descrição';
        $lang['project_setting_create_tasks'] = 'criar tarefa';
        $lang['project_setting_edit_tasks'] = 'editar tarefa (somente tarefas criadas pelo contato)';
        $lang['items_report'] = 'Relatório de itens';
        $lang['reports_item'] = 'Item';
        $lang['quantity_sold'] = 'Quantity Sold';
        $lang['total_amount'] = 'Total Amount';
        $lang['avg_price'] = 'Average Price';
        $lang['item_report_paid_invoices_notice'] = 'Items report is generated only from paid invoices before discounts and taxes.';
        $lang['overview'] = 'Visão geral';
        $lang['timer_started_change_status_in_progress'] = 'Change task status to In Progress on timer started (applicable only if task status is Not Started)';
        $lang['company_info_format'] = 'Company Information Format (PDF and HTML)';
        $lang['customer_info_format'] = 'Customer Information Format (PDF and HTML)';
        $lang['custom_field_info_format_embed_info'] = 'Custom fields for %s can be easily embedded into PDF and HTML documents by adding the merge fields into the page format at the following page: %s';
        $lang['transfer_lead_notes_to_customer'] = 'Transfer lead notes to customer profile';
        $lang['authorized_signature_text'] = 'Assinatura autorizada';
        $lang['show_pdf_signature_invoice'] = 'Show PDF Signature on Invoice';
        $lang['show_pdf_signature_estimate'] = 'Exibe PDF da assinatura na previsão';
        $lang['signature'] = 'Assinatura';
        $lang['signature_image'] = 'Imagem da Assinatura';
        $lang['insert_checklist_templates'] = 'Insert Checklist Templates';
        $lang['save_as_template'] = 'Save as Template';
        $lang['scroll_responsive_tables_help'] = 'Tables with large amount of data will have horizontal scroll instead rows wrapped in + icon.';
        $lang['scroll_responsive_tables'] = 'Activate Scroll Responsive Tables';
        $lang['invoice_item_add_edit_rate_currency'] = 'Rate - %s';
        $lang['total_files_deleted'] = 'Total files deleted: %s';
        $lang['invalid_transaction'] = 'Invalid Transaction. Please try again.';
        $lang['payment_gateway_payu_money_key'] = 'PayU Money Key';
        $lang['payment_gateway_payu_money_salt'] = 'PayU Money Salt';
        $lang['settings_paymentmethod_description'] = 'Gateway Dashbord Payment Description';
        $lang['default_ticket_reply_status'] = 'Default status selected when replying to ticket';
        $lang['ticket_add_response_and_back_to_list'] = 'Return to ticket list after response is submitted';
        $lang['default_task_status'] = 'Default status when new task is created';
        $lang['custom_field_pdf_html_help'] = 'Make sure you check ' . $lang['custom_field_show_on_client_portal'] . ' field if you want the custom fields to be visible to customers area and when customer download PDF or receive PDF via email.';
        $lang['auto'] = 'Auto';
        $lang['email_queue'] = 'Email Queue';
        $lang['email_queue_enabled'] = 'Enable Email Queue';
        $lang['email_queue_skip_attachments'] = 'Do not add emails with attachments in the queue.';
        $lang['disable'] = 'Disable';
        $lang['enable'] = 'Enable';
        $lang['auto_dismiss_desktop_notifications_after'] = 'Auto Dismiss Desktop Notifications After X Seconds (0 to disable)';
        $lang['proposal_info_format'] = 'Proposal Info Format (PDF and HTML)';
        $lang['hide_tasks_on_main_tasks_table'] = 'Ocultar tarefas na lista principal de tarefas (admin area)';
        $lang['ticket_replies_order'] = 'Ticket Replies Order';
        $lang['ticket_replies_order_notice'] = 'The initial ticket message will be always shown as first.';
        $lang['invoice_cancelled_email_disabled'] = 'Invoice is cancelled. Unmark as cancelled to enable email to client';
        $lang['email_notifications'] = 'Notificações por e-mail';
        $lang['invoice_activity_record_payment_email_to_customer'] = 'Payment recorded, email sent to: %s';
        $lang['exclude_inactive'] = 'Ocultar registros inativos em';
        $lang['disable_all'] = 'Disable All';
        $lang['enable_all'] = 'Enable All';
        $lang['reccuring_invoice_option_gen_and_send'] = 'Generate and Autosend the renewed invoice to the customer';
        $lang['reccuring_invoice_option_gen_unpaid'] = 'Generate a Unpaid Invoice';
        $lang['reccuring_invoice_option_gen_draft'] = 'Generate a Draft Invoice';
        $lang['event_created_by'] = 'This event is created by %s';
        $lang['customers_assigned_to_me'] = 'Cadastros vinculados a mim';
        $lang['bcc_all_emails'] = 'BCC All Emails To';
        $lang['confirmation_of_identity'] = 'Confirmação de identidade';
        $lang['accept_identity_confirmation'] = 'Require identity confirmation on accept';
        $lang['accepted_identity_info'] = 'This %s is accepted by %s on %s from IP address %s';
        $lang['clear_this_information'] = 'Clear This Information';
        $lang['new_task_auto_follower_current_member'] = 'Auto add task creator as task follower when new task is created';
        $lang['expenses_report_net'] = 'Net Amount (Subtotal)';
        $lang['expense_field_billable_help'] = 'Se pagamento, %s poderá ser adicionado ao pedido uma descrição mais detalhada.';
        $lang['task_biillable_checked_on_creation'] = 'Billable option is by default checked when new task is created?';
        $lang['pause_overdue_reminders'] = 'Pause Overdue Reminders';
        $lang['resume_overdue_reminders'] = 'Resume Overdue Reminders';

        # Credit Notes
        $lang['credit_notes'] = 'Notas de crédito';
        $lang['credit_note'] = 'Crédito';
        $lang['credit_note_lowercase'] = 'Nota de crédito';
        $lang['credit_note_not_found'] = 'Nota de crédito não encontrada';
        $lang['credit_note_date'] = 'Data da nota de crédito';
        $lang['credit_date'] = 'Data';
        $lang['settings_sales_next_credit_note_number'] = 'Próximo número de nota de crédito';
        $lang['credit_note_number_prefix'] = 'Prefixo das notas de crédito';
        $lang['credit_note_number'] = 'Nota de crédito número ';
        $lang['credit_note_number_exists'] = 'Este número de nota de crédito já existe';
        $lang['show_shipping_on_credit_note'] = 'Show shipping details on credit note';
        $lang['credit_note_number_decrement_on_delete'] = 'Decrement credit note number on delete.';
        $lang['credit_note_number_decrement_on_delete_help'] = 'Number will be decremented only if is last credit note created.';
        $lang['credit_note_status'] = 'Status';
        $lang['credit_note_status_open'] = 'Open';
        $lang['credit_note_status_closed'] = 'Closed';
        $lang['credit_note_status_void'] = 'Void';
        $lang['credit_note_mark_as_open'] = 'Mark as Open';
        $lang['new_credit_note'] = 'Nova nota de crédito';
        $lang['credit_note_amount'] = 'Valor';
        $lang['credit_note_remaining_credits'] = 'Saldo';
        $lang['credit_note_client_note'] = 'Note';
        $lang['invoices_credited'] = 'Invoices Credited';
        $lang['apply_credits'] = 'Apply Credits';
        $lang['x_credits_available'] = '%s em créditos disponíveis';
        $lang['credit_amount'] = 'Valor do crédito';
        $lang['credits_available'] = 'Créditos disponíveis';
        $lang['amount_to_credit'] = 'Valor de crédito';
        $lang['invoice_credits_applied'] = 'Crédito aplicado ao pedido com sucesso';
        $lang['applied_credits'] = 'Créditos aplicados';
        $lang['credit_amount_bigger_then_invoice_balance'] = 'Total credits amount is bigger then invoice balance due';
        $lang['credit_amount_bigger_then_credit_note_remaining_credits'] = 'Total credits amount is bigger then remaining credits';
        $lang['credited_invoices_not_found'] = 'Credited Invoices Not Found';
        $lang['credit_invoice_number'] = 'Invoice Number';
        $lang['credits_used'] = 'Credits Used';
        $lang['credits_remaining'] = 'Credits Remaining';
        $lang['amount_credited'] = 'Amount Credited';
        $lang['credits_applied_cant_delete_status_closed'] = 'This credit note is with status Closed, you need first to delete the credits in order to delete the credit note.';
        $lang['credits_applied_cant_delete_credit_note'] = 'This credit note has applied credits, you need first to delete the credits in order to delete the credit note.';
        $lang['credit_note_pdf_heading'] = 'CREDIT NOTE';
        $lang['show_status_on_pdf'] = 'Show %s status on PDF documents';
        $lang['show_pdf_signature_credit_note'] = 'Show PDF Signature on Credit Note';
        $lang['calendar_credit_note_reminder'] = 'Credit Note Reminder';
        $lang['show_credit_note_reminders_on_calendar'] = 'Credit Note Reminders';
        $lang['reminders'] = 'Lembretes';
        $lang['invoice_activity_applied_credits'] = 'applied credits of %s from %s';
        $lang['create_credit_note'] = 'Create Credit Note';
        $lang['confirm_invoice_credits_from_credit_note'] = 'When creating credit note from non paid invoice, the credit note amount will get applied for this invoice. Are you sure that you want to create the credit note?';
        $lang['credit_invoice_date'] = 'Invoice Date';
        $lang['apply_to_invoice'] = 'Apply to invoice';
        $lang['apply_credits_from'] = 'Apply Credits From %s';
        $lang['credits_successfully_applied_to_invoices'] = 'Invoices credits successfully applied';
        $lang['credit_note_send_to_client_modal_heading'] = 'Send Credit Note To Customer';
        $lang['credit_note_sent_to_client_success'] = 'Credit note is sent successfully to the client';
        $lang['credit_note_sent_to_client_fail'] = 'Problem while sending credit note to email';
        $lang['credit_note_no_invoices_available'] = 'There are no available invoices for this customer.';
        $lang['show_total_paid_on_invoice'] = 'Show Total Paid On Invoice';
        $lang['show_credits_applied_on_invoice'] = 'Show Credits Applied On Invoice';
        $lang['show_amount_due_on_invoice'] = 'Show Amount Due On Invoice';
        $lang['customer_profile_update_credit_notes'] = 'Update the shipping/billing info on all previous credit notes (Closed credit notes not affected)';
        $lang['zip_credit_notes'] = 'Zip Notas de Créditos';
        $lang['statement_credit_note_details'] = 'Credit Note %s';
        $lang['statement_credits_applied_details'] = 'Credits Applied from Credit Note %s - %s for payment of %s';
        $lang['credit_note_files'] = 'Credit Note Files';
        $lang['credit_notes_report'] = 'Credit Notes Report';
        $lang['credit_note_set_reminder_title'] = 'Set Credit Note Reminder';
        $lang['credit_note_add_edit_client_note'] = 'Inserir/Editar';
        $lang['credit_note_bill_to'] = 'Pagamento para ';
        $lang['credit_note_prefix'] = 'Pedidos';
        $lang['credit_note_admin_note'] = 'Nota administrativa';
        $lang['credit_note_total'] = 'Total';
        $lang['credit_note_adjustment'] = 'Ajuste';
        $lang['credit_note_discount'] = 'Desconto';
        $lang['credit_note_subtotal'] = 'Subtotal';
        $lang['credit_note_table_quantity_heading'] = 'Quantidade';
        $lang['credit_note_table_hours_heading'] = 'Horas';
        $lang['credit_note_table_item_heading'] = ' ';
        $lang['credit_note_table_item_description'] = ' ';
        $lang['credit_note_table_rate_heading'] = ' ';
        $lang['credit_note_table_tax_heading'] = ' ';
        $lang['credit_note_table_amount_heading'] = 'Montante';
        $lang['credit_notes_list_all'] = 'Listar todos';
        $lang['ticket_assigned'] = 'Assinada';
        $lang['dashboard_options'] = 'Opções do Painel';
        $lang['reset_dashboard'] = 'Limpar Painel';
        $lang['widgets'] = 'Componentes';
        $lang['s_chart'] = 'Gráficos de %s';
        $lang['quick_stats'] = 'Estatísticas Rápidas';
        $lang['user_widget'] = 'Componentes de usuários';
        $lang['widgets_visibility_help_text'] = 'Componentes podem ser exibidos somente se contém dados e não estão programados para ficarem ocultos.';
        $lang['show_project_on_estimate'] = 'Exibe nome do projeto no orçamento';
        $lang['show_project_on_invoice'] = 'Exibe o nome do projeto no pedido';
        $lang['show_project_on_credit_note'] = 'Exibe o nome do projeto nas notas de crédito';
        $lang['visible_tabs'] = 'Abas visíveis';
        $lang['all'] = 'Todas';
        $lang['view_widgetable_area'] = 'Visualizar área de componentes';
        $lang['hide_widgetable_area'] = 'Ocultar área de componentes';
        $lang['no_items_warning'] = 'Insira ao menos um item';
        $lang['item_forgotten_in_preview'] = 'Você esqueceu de adicionar este item?';
        $lang['not_task_status_changed'] = '%s - Status da tarefa alterado para %s';
        $lang['not_project_activity_task_status_changed'] = 'Alteração no status da tarefa';
        $lang['reset'] = 'Reset';
        $lang['save_message_as_predefined_reply'] = 'Salvar uma resposta pre-definida';
        $lang['inline_create_option'] = 'Allow non-admin staff members to create %s in %s create/edit area?';
        $lang['inline_create'] = 'Inline Create';
        $lang['inline_create_option_predefined_replies'] = 'Habilitar não administradores a salvar respostas pré-definidas de tíquetes';
        $lang['reminders_view_none_admin'] = 'Showing your reminders and reminders created by you.';
        $lang['show_tabs_and_options'] = 'Exibe abas & Opções';
        $lang['no_milestones_found'] = 'Este projeto está sem etapas definidos'; 
        $lang['lead_is_contact_create_task'] = 'Create task if email sender is already customer and assign to responsible staff member.';
        $lang['existing_customer'] = 'Cadastro existente';
        $lang['use_company_name_instead'] = 'Use nome da instituição';
        $lang['customer_delete_transactions_warning'] = 'Este cadastro possui transações, %s, você precisa apagar as transações ou mover para outro cadastro para executar esta ação.';
        $lang['sending_email_contact_permissions_warning'] = 'Falha ao tentar selecionar e-mail do contato. Por favor selecione um contato no cadastro e marque como principal. Certifique-se de que esteja ativa a opção %s';
        $lang['help_leads_create_permission'] = 'Todos os membros podem criar leads, exceto membros marcados como não pertecentes a equipe';
        $lang['help_leads_edit_permission'] = 'Everyone who has access to specific lead can edit most of the lead information';
        $lang['triggers'] = 'Gatilhos';
        $lang['notice_only_one_active_sms_gateway'] = 'Only 1 active SMS gateway is allowed';
        $lang['sms_trigger_disable_tip'] = 'Leave contents blank to disable specific trigger.';
        $lang['tables'] = 'Tabelas';
        $lang['only_project_tasks'] = 'Only project related tasks';
        $lang['download_all'] = 'Download All';
        $lang['settings_sales_credit_note_number_format'] = 'Credit Note Number Format';
        $lang['sms_reminder_sent_to'] = 'SMS reminder sent to %s';
        $lang['ideal_customer_statement_descriptor'] = 'Statement Descriptor (shown in customer bank statement)';
        $lang['payment_received_awaiting_confirmation'] = 'Your payment was received and is awaiting confirmation.';
        $lang['discount_fixed_amount'] = 'Fixed Amount';
        $lang['timesheet_duration_instead'] = 'Enter time duration instead';
        $lang['timesheet_date_instead'] = 'Set start and end time instead';
        $lang['allow_non_admin_members_to_import_leads'] = 'Allow non-admin staff members to import leads';
        $lang['project_hide_tasks_settings_info'] = 'Tasks are excluded from the main tasks table for this project, you can view the project tasks only in this area.';
        $lang['ticket_create_no_contact'] = 'Tíquete sem contato';
        $lang['ticket_create_to_contact'] = 'Tíquete para contato';
        $lang['showing_billable_tasks_from_project'] = 'Showing billable tasks from project';
        $lang['no_billable_tasks_found'] = 'Billable tasks not found';
        $lang['help_leads_permission_view'] = 'If this permission is not checked, a staff member will be only able to view leads to where is assigned, leads created by the staff member and leads that are marked as public';
        $lang['customers'] = $lang['clients'];
        $lang['knowledge_base'] = $lang['kb_string'];
        $lang['staff'] = $lang['als_staff'];
        $lang['checklist_templates'] = 'Task Checklist Templates';
        $lang['emails_tracking'] = 'E-mails enviados';
        $lang['no_tracked_emails_sent'] = 'Nenhum registro de e-mail enviado';
        $lang['tracked_emails_sent'] = 'Tracked Emails Sent';
        $lang['tracked_email_date'] = 'Date';
        $lang['tracked_email_subject'] = 'Subject';
        $lang['tracked_email_to'] = 'To';
        $lang['tracked_email_opened'] = 'Opened';
        $lang['tracked_email_not_opened'] = 'Not Opened';
        $lang['not_viewed_yet'] = 'This %s is not viewed yet by the customer';
        $lang['undo'] = 'Desfazer';
        $lang['sign_document_validation'] = 'Por favor assine o documento.';
        $lang['document_customer_signature_text'] = 'Assinatura';
        $lang['accept_identity_confirmation_and_signature_sign'] = 'Require digital signature and identity confirmation on accept';
        $lang['legal_bound_text'] = 'Legal Bound Text';
        $lang['e_signature_sign'] = 'Assinar';
        $lang['is_signed'] = 'Assinada';
        $lang['is_not_signed'] = 'Não assinada';
        $lang['download'] = 'Download';
        $lang['view_pdf_in_new_window'] = 'View PDF in New Tab';
        $lang['show_pdf_signature_contract'] = 'Show PDF Signature on Contract';
        $lang['document_signed_successfully'] = 'You have successfully signed this document';
        $lang['document_signed_info'] = 'This document is signed by %s on %s from IP address %s';
        $lang['keep_signature'] = 'Keep Customer Signature';
        $lang['view_contract'] = 'View Contract';
        $lang['summary'] = 'Resumo';
        $lang['discussion'] = 'Discussão';
        $lang['general_information'] = 'Informações gerais';
        $lang['proposal_information'] = 'Informações da proposta';
        $lang['contract_comments'] = 'Comentários';
        $lang['not_contract_comment_from_client'] = 'New comment from customer on contract %s ...';
        $lang['contract_files'] = 'Contract Files';
        $lang['date_signed'] = 'Date Signed';
        $lang['clear_signature'] = 'Clear Signature';
        $lang['recurring_has_ended'] = 'This recurring %s has ended.';
        $lang['cycles_remaining'] = 'Cycles Remaining';
        $lang['cycles_infinity'] = 'Infinity';
        $lang['recurring_total_cycles'] = 'Total Cycles';
        $lang['cycles_passed'] = 'Passed %s';
        $lang['api_key_not_set_error_message'] = 'API key not configured, click on the following link to configure API key: %s';
        $lang['subscription'] = 'Subscription';
        $lang['subscription_lowercase'] = 'subscription';
        $lang['subscriptions'] = 'Assinaturas';
        $lang['tax_is_used_in_subscriptions_warning'] = 'You can\'t update this tax because is used by subscriptions.';
        $lang['credit_card'] = 'Credit Card';
        $lang['update_credit_card'] = 'Update Credit Card';
        $lang['credit_card_update_info'] = 'Want to update the credit card that we have on file? Provide the new details here. Your card information will never directly touch our server.';
        $lang['update_card_details'] = 'Update Card Details';
        $lang['update_card_btn'] = 'Update Card';
        $lang['subscription_name'] = 'Subscription Name';
        $lang['subscriptions_description'] = 'Description';
        $lang['subscribe'] = 'Subscribe';
        $lang['subscription_date'] = 'Date';
        $lang['first_billing_date'] = 'First Billing Date';
        $lang['allow_primary_contact_to_update_credit_card'] = 'Allow primary contact to update stored credit card token?';
        $lang['show_subscriptions_in_customers_area'] = 'Show subscriptions in customers area?';
        $lang['show_subscriptions_in_customers_area_help'] = 'This option is valid only for the customer primary contact.';
        $lang['subscription_sent_to_email_success'] = 'Subscription sent to email successfully';
        $lang['subscription_sent_to_email_fail'] = 'Failed to sent subscription to email';
        $lang['new_subscription'] = 'Nova assinatura';
        $lang['subscription_status'] = 'Status';
        $lang['next_billing_cycle'] = 'Next Billing Cycle';
        $lang['subscription_not_subscribed'] = 'Not Subscribed';
        $lang['send_subscription'] = 'Send Subscription';
        $lang['subscription_will_send_to_primary_contact'] = 'The subscription will be sent to the primary contact.';
        $lang['subscription_resumed'] = 'Subscription is set to active successfully';
        $lang['subscription_canceled'] = 'Subscription Cancelled Successfully';
        $lang['no_credit_card_found'] = 'No Credit Card Found';
        $lang['cancel_immediately'] = 'Cancel Immediately';
        $lang['cancel_at_end_of_billing_period'] = 'Cancel At The End Of Billing Period';
        $lang['view_subscription'] = 'View Subscription';
        $lang['subscription_future'] = 'Future';
        $lang['subscription_active'] = 'Active';
        $lang['subscription_past_due'] = 'Past Due';
        $lang['subscription_canceled'] = 'Canceled';
        $lang['subscription_unpaid'] = 'Unpaid';
        $lang['billing_plan'] = 'Billing Plan';
        $lang['upcoming_invoice'] = 'Upcoming Invoice';
        $lang['resume_now'] = 'Resume Now';
        $lang['subscription_not_yet_subscribed'] = 'Customer is not yet subscribed to this subscription.';
        $lang['subscription_is_canceled_no_resume'] = 'This subscription is canceled and cannot be resumed.';
        $lang['subscription_will_be_canceled_at_end_of_billing_period'] = 'This subscription will be canceled at the end of billing period.';
        $lang['customer_successfully_subscribed_to_subscription'] = 'Thank you for subscribing to %s';
        $lang['date_subscribed'] = 'Date Subscribed';
        $lang['reports'] = 'Reports';
        $lang['subscriptions_summary'] = 'Subscriptions Summary';
        $lang['calendar_only_assigned_tasks'] = 'Show only tasks assigned to the logged in staff member';
        $lang['invoice_activity_subscription_payment_succeeded'] = 'Subscription Payment Succeeded, email sent to: %s';
        $lang['mail_engine'] = 'Mail Engine';
        $lang['settings_require_client_logged_in_to_view_contract'] = 'Require client to be logged in to view contract';
        $lang['privacy_policy'] = 'Privacy Policy';
        $lang['gdpr_terms_agree'] = 'I agree to the <a href="%s" target="_blank">Terms & Conditions</a>';
        $lang['terms_and_conditions_validation'] = 'You must accept the Terms & Conditions in order to continue.';
        $lang['gdpr'] = 'General Data Protection Regulation (GDPR)';
        $lang['data_removal_request_sent'] = 'Data removal request successfully sent';
        $lang['gdpr_consents'] = 'Consents';
        $lang['gdpr_consent'] = 'Consent';
        $lang['gdpr_consent_purpose'] = 'Purpose';
        $lang['gdpr_consent_opt_in'] = 'Opt In';
        $lang['gdpr_consent_opt_out'] = 'Opt Out';
        $lang['gdpr_consent_agree'] = 'I agree';
        $lang['gdpr_consent_disagree'] = 'I disagree';
        $lang['view_consent'] = 'View Consent';
        $lang['transfer_consent'] = 'Transfer Consent';
        $lang['view_public_form'] = 'View Public Form';
        $lang['update_consent'] = 'Update Consent';
        $lang['update_consent'] = 'Update Consent';
        $lang['consent_last_updated'] = 'Last Updated: %s';
        $lang['showing_search_result'] = 'Resultado de busca: %s';
        $lang['per_page'] = 'Per Page';
        $lang['allow_staff_view_invoices_assigned'] = 'Allow staff members to view invoices where they are assigned to';
        $lang['allow_staff_view_estimates_assigned'] = 'Allow staff members to view estimates where they are assigned to';
        $lang['gdpr_right_to_be_informed'] = 'Right to be informed';
        $lang['gdpr_right_of_access'] = 'Right of access';
        $lang['gdpr_right_to_data_portability'] = 'Right to data portability';
        $lang['gdpr_right_to_erasure'] = 'Right to erasure';
        $lang['edit_my_information'] = 'Edit my information';
        $lang['export_my_data'] = 'Export my data';
        $lang['request_data_removal'] = 'Request data removal';
        $lang['explanation_for_data_removal'] = 'Explanation for data removal';
        $lang['briefly_describe_why_remove_data'] = 'Briefly describe why you want to remove the data';
        $lang['date_published'] = 'Date Published';
        $lang['view'] = 'Visualizar';
        $lang['customer_is_subscribed_to_subscription_info'] = 'The customer is subscribed to this subscription';
        $lang['save_last_order_for_tables'] = 'Save last order for tables';
        $lang['date_created'] = 'Data';
        $lang['company_logo_dark'] = 'Logo escuro da instituição';
        $lang['customers_register_require_confirmation'] = 'Require registration confirmation from administrator after customer register';
        $lang['customer_requires_registration_confirmation'] = 'Requires Registration Confirmation';
        $lang['confirm_registration'] = 'Confirm Registration';
        $lang['customer_registration_successfully_confirmed'] = 'Customer registration successfully confirmed';
        $lang['customer_register_account_confirmation_approval_notice'] = 'Thank you for registering, your account is pending approval and will be confirmed soon.';
        $lang['after_subscription_payment_succeeded'] = 'After subscription payment is succeeded';
        $lang['subscription_option_send_invoice'] = 'Send Invoice';
        $lang['subscription_option_send_payment_receipt'] = 'Send Payment Receipt';
        $lang['subscription_option_send_payment_receipt_and_invoice'] = 'Send Invoice and Payment Receipt';
        $lang['subscription_option_do_nothing'] = 'Do Nothing';
        $lang['gdpr_not_enabled'] = 'GDPR não habilitado';
        $lang['enable_gdpr'] = 'Enable GDPR';
        $lang['gdpr_right_to_rectification'] = 'Direito de correção';
        $lang['test_sms_config'] = 'Testar configuração de SMS';
        $lang['test_sms_message'] = 'Testar Mensagem';
        $lang['send_test_sms'] = 'Enviar um SMS de teste';
        $lang['gdpr_short'] = 'GDPR';
        $lang['allow_non_admin_staff_to_delete_ticket_attachments'] = 'Habilitar não administradores para deletar anexos de tíquietes';
        $lang['contract_number'] = 'Número do contrato';
        $lang['project_changing_status_recurring_tasks_notice'] = 'Você está mudando o status para {0}, todas as tarefas restantes serão canceladas';
        $lang['not_contract_signed'] = 'Contrato com assunto %s está assinado pelo cadastro vinculado';
        $lang['the_number_sign'] = '#';
        $lang['not_new_ticket_reply'] = 'Cadastro respondeu no tíquete - %s';
        $lang['receive_notification_on_new_ticket_replies'] = 'Recebida notificação de resposta ao tíquete';
        $lang['receive_notification_on_new_ticket_reply_help'] = 'Todos os membros da equipe responsáveis pelo setor receberão notificação quando o cadastro solicitante responder ao tíquete';
        $lang['payment_gateway_enable_paypal'] = 'Ativar meio de pagamento PayPal';
        $lang['project_member'] = 'Membro do projeto';
        $lang['contract_notes'] = 'Notas';
        $lang['contract_add_note'] = 'Adicionar nota';
        $lang['frequency'] = 'Frequency';
        $lang['frequency_every'] = 'Every %s';
        $lang['last_invoice_date'] = 'Last Invoice Date';
        $lang['next_invoice_date_list'] = 'Next Invoice Date';
        $lang['enter_new_card'] = 'Enter New Card';
        $lang['save_and_record_payment'] = 'Salvar & Registrar pagamento';
        $lang['choose_from_google_drive'] = 'Choose from Google Drive';
        $lang['open_in_google'] = 'Abrir no Google';
        $lang['google_picker'] = 'Google Picker';
        $lang['enable_google_picker'] = 'Habilitar Google Picker';
        $lang['google_api_client_id'] = 'Google API Client ID';
        $lang['subtract_tax_total_from_amount'] = 'Subtract TAX total (%s) from amount';
        $lang['expense_subtract_info_text'] = 'Use this option to subtract the total tax amount from the expense amount, useful when you entered the expense amount with tax included (tax inclusive).';
        $lang['company_exists_info'] = 'It looks that a customer with name %s already exists, if you still want to create the customer you can ignore this message.';
        $lang['import_items'] = 'Importar itens';
        $lang['total_items_deleted'] = 'Total items deleted: %s';
        $lang['billable_amount'] = 'Billable Amount';
        $lang['last_child_invoice_date'] = 'Last Child Invoice Date';
        $lang['good_morning'] = 'Bom dia';
        $lang['good_afternoon'] = 'Boa tarde';
        $lang['good_evening'] = 'Boa noite';
        $lang['description_in_invoice_item'] = 'Include description in invoice item';
        $lang['description_in_invoice_item_help'] = 'Useful if you want to include additional information on the subscription invoice, e.q. what this subscription includes.';
        $lang['ticket_reminders'] = 'Lembretes';
        $lang['ticket_set_reminder_title'] = 'Set Ticket Reminder';
        $lang['calendar_ticket_reminder'] = 'Lembretes de ticket';
        $lang['email_verification_required'] = 'Email Verification Required';
        $lang['email_verification_required_message'] = 'In order to access all the available features in the portal, first you must verify your email.';
        $lang['email_verification_required_message_mail'] = 'We have sent you an email with verification instructions, if you haven\'t received the email please check the spam folder or click <a href="%s">here</a> to resend the verification mail.';
        $lang['email_already_verified'] = 'Your email is already verified';
        $lang['invalid_verification_key'] = 'Invalid verification key';
        $lang['verification_key_expired'] = 'Verification Key Expired';
        $lang['email_successfully_verified'] = 'Your email has been successfully verified.';
        $lang['email_successfully_verified_but_required_admin_confirmation'] = 'Your email has been successfully verified, you will be able to login once administrator confirm your account manually.';
        $lang['email_verification_mail_sent_successully'] = 'We sent you an email with verification instructions';
        $lang['create_reminder'] = 'Criar lembrete';
        $lang['no_reminders_for_this_task'] = 'Sem lembretes para esta tarefa';
        $lang['reminder_for'] = 'Lembrete para %s as %s';
        $lang['no_description_provided'] = 'No description provided';
        $lang['pay_with_card'] = 'Pay With Card';
        $lang['not_customer_uploaded_file'] = 'New File(s) Uploaded in Profile';


        $lang['platform_logged'] = 'Login principal com ID:';
        $lang['new_entitycategory']	= 'Nova categoria de estabelecimento';
        $lang['entity_categories_edit_heading']	= 'Editar categoria de estabelecimento';
        $lang['entity_categories_add_heading']	= 'Adicionar categoria de estabelecimento';
        $lang['entity_categories_list_description']	= 'Nome';
        $lang['entity_categories_list_id']	= 'Código';
        $lang['entity_categories_lowercase'] = 'categorias de estabelecimentos';
        $lang['entity_categories'] = 'Categorias de Estabelecimentos';
        $lang['cant_delete_base_entity_categories']	= 'Impossivel deletar categoria de estabelecimento base';
        $lang['entity_category'] = 'Categoria de estabelecimento';
        $lang['entity_categories_valid_code_help']	= 'Digite 0 ou um código válido';
        $lang['entity_categories_add_edit_description'] = 'Descrição/Nome';
        $lang['entity_categories_add_edit_rate'] = 'Valor de categoria';

        $lang['entity_categorie'] = 'Categoria de Estabelecimento';


        //Message
        $lang["messaging_staffs"] = "Pessoal";
        $lang['messaging_contacts'] = "Contato";
        $lang['messaging_groups'] = "Grupos";
        $lang['messaging_add_new_group'] = "Criar um novo grupo";
        $lang['messaging_add'] = "Adicionar";
        $lang['messaging_group_title'] = "Título do grupo";
        $lang['messaging_recent_conversations'] = 'Mensagens recentes';
        $lang['messaging_new_message'] = 'Nova mensagem';
        $lang['messaging_attachment'] = "Arquivo Attachment";
        $lang['messaging_add_staff'] = "Adicionar pessoal";
        $lang['messaging_save'] = "Salvar";
        $lang['messaging_close'] = "Fechar";
        $lang['messaging_who_create_group'] = "Quem pode criar o grupo";
        $lang['messaging_all'] = "Todos";
        $lang['messaging_only_admin'] = "Admins only";
        $lang['messaging_chat_head_color'] = 'Cor da cabeça do bate-papo';
        $lang['messaging_message_own_color'] = "Cor da fonte da mensagem própria";
        $lang['messaging__message_from_color'] = "Da cor da fonte da mensagem";
        $lang["messaging_all_staff"] = "Todos os funcionários e administradores";
        $lang['messaging_message_own_bg_color'] = "Mensagem de bate-papo própria cor de fundo";
        $lang['messaging_message_from_bg_color'] = "Mensagem de bate-papo própria cor de fundo";
        $lang['messaging_messages'] = "Mensagens";
        $lang['messaging_new'] = "Novo";
        $lang['messaging_start_new_conversation'] = "Iniciar uma nova conversa";
        $lang['messaging_select_conversation'] = "Selecione uma conversa de mensagens no painel lateral, você também pode criar uma nova";
        $lang['messaging_to'] = "Para:";
        $lang['messaging_message_content'] = "Conteúdo da Mensagem";
        $lang['messaging_send'] = "Enviar";
        $lang['messaging_attach_photo'] = "Anexar foto:";
        $lang['messaging_attach_file'] = "Anexar arquivo";
        $lang['messaging_contact'] = "Contato";
        $lang['messaging_staff'] = "Pessoal";
        $lang['messaging_message_sent_success'] = "Mensagem enviada com sucesso";
        $lang['messaging_message_settings'] = "Configurações da mensagem";
        $lang['messaging_type_message'] = "Digite uma mensagem";
        $lang['messaging_chat'] = "Chat";
        $lang['messaging_members'] = "Membros";

        /* Fluxo de caixa / Cash flow */
        $lang['cashflow']='Fluxo de caixa';
        $lang['new_cashflow']='Adicionar registro ao fluxo de caixa';
        $lang['cashflow_add_edit_attach_receipt']='Recibo de caixa anexo';
        $lang['cashflow_record_lowercase']='registro em fluxo de caixa';
        $lang['cashflow_record_not_found']='registro de fluxo de caixa não encontrado';
        $lang['cashflow_member_select_title']='Membro de equipe';
        $lang['cashflow_member_select']='Selecionar um membro';
        $lang['cashflow_no_members']='Nenhum membro vinculado';
        $lang['cashflow_single_member_select_title'] = 'Selecionar membro';
        $lang['cashflow_select']='Seleciona registro';
        $lang['cashflow_unselect']='Libera registro';
        $lang['nav_cashflow_selected']='Vai para registro';
        $lang['cashflow_not_found']='Registro de fluxo de caixa inexistente';
        $lang['cashflow_expense_id']='Id';
        $lang['cashflow_expense_reference']='Referência';
        $lang['cashflow_expense_date']='Data';
        $lang['cashflow_expense_value']='Valor';
        $lang['cashflow_expense_sum']='Soma';
        $lang['cashflow_expense_action']='Ação';
        $lang['cashflow_expense_locate']='Buscar despesas não vinculadas';
        $lang['menu_cashflow'] = 'Fluxo de caixa';
        $lang['expense_locate'] = 'Localizar uma despesa';
        $lang['cashflow_table_member']='Colaborador';
        $lang['cashflow_remove_from_list']='Remover deste fluxo';

        $lang['not_activity_file_uploaded']              = 'Novo arquivo de atividade adicionado';
        $lang['not_uploaded_activity_file']              = 'Novo arquivo carregado';
        $lang['not_created_new_activity_discussion']     = 'Nova discussão sobre atividade criada';
        $lang['not_commented_on_activity_discussion']    = 'Novo comentário na discussão da atividade';
        $lang['not_activity_status_updated']             = 'Status da atividade atualizado de %s para %s';
        $lang['activity_activity_created_discussion' ]   = 'Criou discussão na atividade';
        $lang['activity_activity_added_team_member']     = 'Adicionou um novo membro na equipe';
        $lang['activity_commented_on_discussion'] = 'Comentou em uma discussão';
        $lang['activity_activity_removed_team_member']          = 'Removeu um membro da equipe';

        $lang['warning_department'] = 'Alguns e-mails de departamento estão sendo usados ​​como e-mail de membros da equipe, de acordo com a documentação, os e-mails dos departamentos devem ser exclusivos no sistema. Você deve alterar o e-mail da equipe ou do departamento para que todos os recursos funcionem corretamente.';


        $lang['file_name'] = 'Nome do arquivo';
        $lang['file_id'] = 'Identificação';
        $lang['file_extras'] = 'Informações adicionais';

        $lang['task_id'] = 'Id/Tarefa';


        $lang['activity_theme_area'] = 'Temática e área responsável';
        $lang['activity_theme']='Temática';
        $lang['activity_area']='Área responsável';


        $lang['vinculate_id']='Identificação de vínculo';
        $lang['vinculate']='Vincular';
        $lang['vinculated']='Vinculada';

        $lang['activity_description_modify']='Modficação da descrição da atividade através de tarefa vinculada';

        $lang['nav_api_form'] = 'API e Dispositivos';
        $lang['api_list_keys'] = 'Lista de chaves APIs';
        $lang['api_add'] = 'Gerar chave API';
        $lang['staff_api_generator'] = 'Gerador de chave API';
        $lang['api_description'] = 'A chave que será gerada é uma sequência que ficará vinculada a seu usuário e poderá ser usada em dispositivos móveis ou outros aplicativos que você deseje que tenham acesso aos seus dados no sistema';
        $lang['api_key_inactive_label']='Inativa';
        $lang['api_key_active_label']='Ativa';
        $lang['api_key_status']='Status';
        $lang['api_key_id']='Id';
        $lang['api_key']='Chave';
        $lang['api_no_records']="Nenhuma chave gerada";
        $lang['api_records']="Registros";
        $lang['api_record']="Registro";
        $lang['api_key_view']="Chave selecionada";
        $lang['api_key_list']="Lista de chaves";

        $lang['clients_nav_classhome']='Área do Aluno';

        $lang['activity_customer_permission_warning'] = 'O sistema indicou que o Cadastro não tem permissão para esta atividade. O Cadastro não poderá ver essa atividade. Caso queira que ele acesse, considere adicionar o perfil do Cadastro na tabela de Permissões.';
        $lang['activity_tickets'] = 'Tíquetes';
        $lang['externals_link'] = 'Links externos';
        $lang['share_link'] = 'Link para compartilhamento';
        $lang['activity_clients']='Cadastros';
        $lang['activity_clients_area']='Cadastros vinculados';
        $lang['add_edit_clients']='Adicionar/Editar cadastros';
        $lang['activity_first_customer']='-';
        $lang['activity_more_customer']='-';
        $lang['activity_client_add']='Adicionar';
        $lang['workspace_name'] = 'Nome do Workspace (Conforme registro no workspace manager)';
        $lang['validation'] = 'Validação';
        $lang['field'] = 'Campo';
        $lang['information'] = 'Informação';
        $lang['action'] = 'Ação';
        $lang['clients_courses'] = 'Cursos';
        $lang['id'] = 'Id';
        $lang['settings_general_company_base_url'] = 'Url do webmodule para API gerar links (base_url)';
        $lang['activity_other_clients'] = 'Outras instituições vinculadas';
        $lang['global_parameters'] = 'GLOBAIS';
        $lang['competences'] = 'Competẽncias';
        $lang['clients_courses_title_dashboard'] = 'Cursos em andamento';
        $lang['clients_courses_title_all'] = 'Cursos';
        $lang['clients_courses_id'] = 'Id';
        $lang['clients_courses_name'] = 'Curso';
        $lang['clients_courses_description'] = 'Descrição/Turma';
        $lang['clients_courses_status'] = 'Status';
        $lang['clients_courses_actions'] = 'Ações';
        $lang['clients_courses_action_access'] = 'Acessar';
        $lang['clients_my_courses'] = 'Meus cursos';
        $lang['mark_as_unread'] = 'Marcar como não lida';
        $lang['activity_work_plan'] = 'Plano de trabalho';
        $lang['activity_others'] = 'Outras instituições';

        return $lang[$label] ?? $label;
    }
}
