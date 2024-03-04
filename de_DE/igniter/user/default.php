<?php

return [
    'text_title' => 'Mein Konto',

    'text_heading' => 'Konto',
    'text_account' => 'Mein Konto',
    'text_edit_details' => 'Meine Details bearbeiten',
    'text_address' => 'Addressbuch',
    'text_orders' => 'Letzte Bestellungen',
    'text_reservations' => 'Letzte Reservierungen',
    'text_inbox' => 'Mein Posteingang',
    'text_welcome' => 'Willkommen %s',
    'text_cart_summary' => 'Sie haben %s Elemente: %s',
    'text_change_password' => 'Kennwort ändern',
    'text_order' => 'Jetzt bestellen',
    'text_checkout' => 'Jetzt bezahlen',
    'text_edit' => 'Bearbeiten',
    'text_set_default' => 'ALS STANDARD EINSTELLEN',
    'text_default_address' => 'Meine Standardadresse',
    'text_no_default_address' => 'Sie haben keine Standardadresse',
    'text_no_orders' => 'Es sind keine Bestellungen zum Anzeigen verfügbar.',
    'text_no_reservations' => 'Es gibt keine Reservierungen zum Anzeigen.',
    'text_no_inbox' => 'Es gibt keine Nachrichten zum Anzeigen',
    'text_no_cart_items' => 'Es gibt keine Menüs in Ihrem Warenkorb.',

    'text_logout' => 'Abmelden',
    'text_logged_in' => 'Haben Sie bereits ein Konto? <a href="%s">Melden Sie sich hier an</a>',
    'text_logged_out' => 'Willkommen zurück <b>%s</b>, Nicht Sie? <a href="javascript:;" data-request="%s">Abmelden</a>',

    'label_heading' => 'Überschriften:',
    'label_template' => 'E-Mail-Vorlagen',
    'label_send_to' => 'Senden an',
    'label_send_to_staff_group' => 'An Personalgruppe senden',
    'label_send_to_custom' => 'An E-Mail-Adresse senden',

    'column_date' => 'Datum/Zeit',
    'column_subject' => 'Betreff',

    'alert_logout_success' => 'Sie wurden erfolgreich ausgeloggt!',

    'text_send_to_restaurant' => 'E-Mail-Adresse des Restaurants',
    'text_send_to_location' => 'E-Mail-Adresse des Standorts (falls verfügbar)',
    'text_send_to_staff_email' => 'Personal-E-Mail-Adresse (falls verfügbar)',
    'text_send_to_customer_email' => 'E-Mail-Adresse des Kunden (falls verfügbar)',
    'text_send_to_custom' => 'Spezifische E-Mail-Adresse',
    'text_send_to_staff_group' => 'Mitarbeitergruppen',

    'login' => [
        'label_password' => 'Passwort',
        'label_password_confirm' => 'Passwortbestätigung',
        'label_remember' => 'Bleibe eingeloggt',
        'label_activation' => 'Aktivierungscode',
        'label_newsletter' => 'Halten Sie mich über Angebote per E-Mail auf dem Laufenden.',
        'label_terms' => 'Durch Klicken auf Registrieren erklären Sie sich mit den <a target="_blank" href="%s">Nutzungsbedingungen</a> dieser Website, einschließlich unserer Cookie-Nutzung, einverstanden.',
        'label_i_agree' => 'Ich stimme zu',
        'label_subscribe' => 'Abonnieren',

        'button_terms_agree' => 'Ich stimme zu',
        'button_subscribe' => 'Abonnieren',
        'button_login' => 'Anmelden',
        'button_register' => 'Registrieren',

        'error_email_exist' => 'Die E-Mail-Adresse hat bereits ein Konto, bitte melden Sie sich an',

        'alert_logout_success' => 'Sie wurden erfolgreich abgemeldet.',
        'alert_expired_login' => 'Sitzung abgelaufen, bitte anmelden',
        'alert_invalid_login' => 'Benutzername und Kenwort nicht gefunden!',
        'alert_account_created' => 'Konto wurde erfolgreich angelegt - Anmelden unten!',
        'alert_account_activation' => 'Eine Aktivierungs-E-Mail wurde an Ihre E-Mail-Adresse gesendet.',
        'alert_registration_disabled' => 'Die Registrierung ist derzeit vom Administrator der Website deaktiviert.',

        'activity_registered_account_title' => 'Kunde registriert',
        'activity_registered_account' => '<b>:properties.full_name</b> hat ein Konto erstellt.',
    ],

    'session' => [
        'component_title' => 'Session-Komponente',
        'component_desc' => 'Fügt eine Auth-Sitzung zu einer Seite hinzu und beschränkt den Zugriff auf die Seite.',
    ],

    'account' => [
        'component_title' => 'Konto Komponente',
        'component_desc' => 'Zeigt Kontoübersicht an',
        'text_heading' => 'Addressbuch',
        'text_my_account' => 'Mein Konto',
        'text_edit_heading' => 'Adressbuch bearbeiten',
        'text_no_address' => 'Sie haben keine gespeicherte Adresse(n)',
        'text_edit' => 'Bearbeiten',
        'text_delete' => 'Löschen',

        'button_back' => 'Zurück',
        'button_add' => 'Neue Adresse hinzufügen',
        'button_update' => 'Adresse aktualisieren',

        'label_address_1' => 'Adresse 1',
        'label_address_2' => 'Adresse 2',
        'label_city' => 'Stadt',
        'label_state' => 'Bundesland',
        'label_postcode' => 'Postleitzahl',
        'label_country' => 'Land',

        'alert_updated_success' => 'Adresse erfolgreich hinzugefügt/aktualisiert.',
        'alert_deleted_success' => 'Adresse erfolgreich gelöscht.',
    ],
    'reset' => [
        'component_title' => 'Passwort Zurücksetz Komponente',
        'component_desc' => 'Zeige Passwort-Reset-Formular',

        'text_heading' => 'Konto-Passwort zurücksetzen',
        'text_summary' => 'E-Mail-Adresse, die Sie für Ihr Konto verwenden. Wir senden Ihnen eine E-Mail mit einem neuen Passwort.',

        'label_email' => 'E-Mail-Adresse',
        'label_password' => 'Passwort',
        'label_password_confirm' => 'Passwort bestätigen',
        'label_code' => 'Zurücksetzungscode',

        'button_login' => 'Anmelden',
        'button_reset' => 'Passwort zurücksetzen',

        'alert_reset_success' => 'Passwort erfolgreich zurückgesetzt.',
        'alert_reset_request_success' => 'Anfrage zum Zurücksetzen des Passworts erfolgreich. Bitte überprüfen Sie Ihre E-Mail Posteingang, wie Sie fortfahren.',
        'alert_reset_error' => 'Passwort zurücksetzen fehlgeschlagen, E-Mail nicht gefunden oder falsche Details eingegeben.',
        'alert_reset_failed' => 'Zurücksetzen des Passworts fehlgeschlagen, Zurücksetzungscode ist entweder ungültig oder abgelaufen.',
        'alert_activation_failed' => 'Kontoaktivierung fehlgeschlagen, bitte versuchen Sie es erneut.',
        'alert_no_email_match' => 'Keine passende E-Mail-Adresse',
    ],
    'addressbook' => [
        'component_title' => 'Konto-Adressbuchkomponente',
        'component_desc' => 'Zeigt und verwaltet das Konto-Adressbuch',
    ],
    'settings' => [
        'component_title' => 'Komponente Konto Einstellungen',
        'component_desc' => 'Verwaltet Konto Einstellungen',
        'text_heading' => 'Meine Details',
        'text_details' => 'Ihre Daten bearbeiten',
        'text_password_heading' => 'Passwort ändern',

        'button_subscribe' => 'Abonnieren',
        'button_back' => 'Zurück',
        'button_save' => 'Details speichern',

        'label_first_name' => 'Vorname',
        'label_last_name' => 'Nachname',
        'label_email' => 'E-Mail-Adresse',
        'label_password' => 'Neues Passwort',
        'label_password_confirm' => 'Neues Passwort bestätigen',
        'label_old_password' => 'Altes Passwort',
        'label_telephone' => 'Telefon',
        'label_s_question' => 'Sicherheitsfrage',
        'label_s_answer' => 'Sicherheitsantwort',
        'label_newsletter' => 'Halten Sie mich über Angebote per E-Mail auf dem Laufenden.',

        'error_password' => 'Das %s stimmt nicht überein.',

        'alert_updated_success' => 'Details erfolgreich aktualisiert.',
    ],
];
