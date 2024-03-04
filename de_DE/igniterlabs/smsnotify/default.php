<?php

return [
    'text_tab_sms' => 'SMS',
    'text_tab_alert' => 'Alarm (z.B. Slack)',
    'text_send_to_location_tel' => 'Standort-Telefonnummer (falls verfügbar)',
    'text_send_to_customer_tel' => 'Kunden-Telefonnummer (falls verfügbar)',
    'text_send_to_order_tel' => 'Bestell-Telefonnummer (falls verfügbar)',
    'text_send_to_reservation_tel' => 'Reservation phone number (if available)',
    'text_send_to_custom_tel' => 'Spezifische Telefonnummer',

    'setting_title' => 'SMS-Kanäle konfigurieren',
    'setting_desc' => 'Twilio, Plivo, Nexmo oder Clickatell konfigurieren.',

    'label_template' => 'SMS-Vorlage',
    'label_send_to' => 'Senden an',
    'label_send_to_custom' => 'An Telefonnummer senden',

    'help_template' => 'Um SMS-Vorlagen anzupassen, gehen Sie zu Design -> SMS-Vorlagen.',

    'nexmo' => [
        'text_title' => 'Nexmo SMS-Kanal',
        'text_desc' => 'SMS-Benachrichtigungen über Nexmo senden.',
    ],

    'twilio' => [
        'text_title' => 'Twilio SMS-Kanal',
        'text_desc' => 'SMS-Benachrichtigungen mit Twilio senden.',
    ],

    'clickatell' => [
        'text_title' => 'Clickatell SMS-Kanal',
        'text_desc' => 'Senden von SMS-Benachrichtigungen mit Clickatell.',
    ],

    'plivo' => [
        'text_title' => 'Plivo SMS-Kanal',
        'text_desc' => 'SMS-Benachrichtigungen mit Plivo senden.',
    ],

    'channel' => [
        'text_title' => 'SMS-Kanäle',
        'text_new_title' => 'SMS-Kanal: Neu',
        'text_edit_title' => 'SMS-Kanal: Update',
        'text_preview_title' => 'SMS-Kanal: Vorschau',
        'text_form_name' => 'SMS-Kanal',
        'text_empty' => 'Kein SMS-Kanal hinzugefügt',

        'column_label' => 'Bezeichnung',
        'column_description' => 'Beschreibung',
        'column_updated_at' => 'Aktualisiert am',
        'column_created_at' => 'Erstellt am',

        'label_channel' => 'Kanal',
        'label_label' => 'Bezeichnung',
        'label_code' => 'Code',
    ],

    'template' => [
        'text_title' => 'SMS-Vorlagen',
        'text_new_title' => 'SMS-Vorlage: Neu',
        'text_edit_title' => 'SMS-Vorlage: Aktualisieren',
        'text_preview_title' => 'SMS-Vorlage: Vorschau',
        'text_form_name' => 'SMS-Vorlage',
        'text_empty' => 'Keine SMS-Vorlage hinzugefügt',
        'text_order_placed' => 'Auftragsbestätigung-Benachrichtigungs-SMS an das Personal.',
        'text_order_status_changed' => 'Der Bestellstatus hat die SMS-Benachrichtigung an den Kunden geändert.',
        'text_order_assigned' => 'Bestellung zugewiesen SMS-Benachrichtigung an die Mitarbeiter.',
        'text_new_reservation' => 'Reservierungsbestätigung SMS-Benachrichtigung an das Personal.',
        'text_reservation_status_changed' => 'Der Reservierungsstatus hat die SMS-Benachrichtigung an den Kunden geändert.',
        'text_reservation_assigned' => 'Reservierung hat eine SMS-Benachrichtigung an das Personal zugewiesen .',
        'text_order_confirmed' => 'Bestellung bestätigte SMS-Benachrichtigung an den Kunden.',
        'text_reservation_confirmed' => 'Reservierung bestätigt SMS-Benachrichtigung an den Kunden.',

        'column_name' => 'Name',
        'column_updated_at' => 'Aktualisiert am',
        'column_created_at' => 'Erstellt am',

        'label_content' => 'Nachricht',

        'button_test_message' => 'Sende Test Nachricht',

        'alert_test_message_sent' => 'Test-SMS-Nachricht erfolgreich an %s gesendet',
    ],
];
