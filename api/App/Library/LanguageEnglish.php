<?php

namespace App\Library;

class LanguageEnglish {

    static function t($label){
        static $lang = array();

        #language
        $lang['language'] = 'English';

        # Months
        $lang['January'] = 'January';
        $lang['February'] = 'February';
        $lang['March'] = 'March';
        $lang['April'] = 'April';
        $lang['May'] = 'May';
        $lang['June'] = 'June';
        $lang['July'] = 'July';
        $lang['August'] = 'August';
        $lang['September'] = 'September';
        $lang['October'] = 'October';
        $lang['November'] = 'November';
        $lang['December'] = 'December';

        # Time ago function translate
        $lang['time_ago_just_now']  = 'Now';
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
        $lang['time_ago_year'] = 'One year ago';
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
        return $lang[$label]??$label;
    }

}