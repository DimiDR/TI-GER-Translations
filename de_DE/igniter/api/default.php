<?php

return [
    'search_prompt' => 'Api-Name suchen',
    'search_tokens_prompt' => 'Suche Tokens',

    'text_tab_general' => 'Allgemein',
    'text_tokens_title' => 'Zugangs-Token',
    'text_token_type_staff' => 'Mitarbeiter',
    'text_token_type_customer' => 'Kunde',
    'text_guest' => 'Gäste',
    'text_admin' => 'Mitarbeiter',
    'text_customer' => 'Kunden',
    'text_admin_customer' => 'Mitarbeiter oder Kunden',
    'text_all' => 'Alle',
    'text_allow_only' => 'Nur erlauben',

    'button_tokens' => '<i class="fa fa-key"></i>&nbsp;&nbsp;Auf Tokens zugreifen',

    'column_api_name' => 'API-Name',
    'column_base_endpoint' => 'Basis-Endpunkt',
    'column_description' => 'Beschreibung',

    'column_issued_to' => 'Ausgestellt für',
    'column_token_type' => 'Typ',
    'column_device_name' => 'Gerätename',
    'column_created' => 'Erstellt am',
    'column_lastused' => 'Zuletzt verwendet',

    'label_api_name' => 'API-Name',
    'label_base_endpoint' => 'Basis-Endpunkt',
    'label_description' => 'Beschreibung',
    'label_api_name_comment' => 'Name Ihrer API-Ressource',
    'label_description_comment' => 'Beschreiben Sie Ihre API-Ressource',
    'label_base_endpoint_comment' => 'https://example.com/api/<b>endpoint</b>',

    'label_controller' => 'Controller',
    'label_actions' => 'Aktionen',
    'help_actions' => 'Leer lassen um den Endpunkt zu deaktivieren.',
    'label_require_authorization' => 'Autorisierung erforderlich',
    'label_setup' => 'Referenz Dokumentation',

    'actions' => [
        'text_index' => 'Alle Ressourcen auflisten (GET)',
        'text_show' => 'Zeige eine einzelne Ressource (GET)',
        'text_store' => 'Eine Ressource erstellen (POST) ',
        'text_update' => 'Ressource aktualisieren (PUT/PATCH)',
        'text_destroy' => 'Eine Ressource löschen (DELETE)',
    ],

    'alert_auth_failed' => 'Kein gültiges API-Token angegeben.',
    'alert_auth_restricted' => 'Das API-Token hat keine Berechtigung, um die Anfrage durchzuführen.',
    'alert_token_restricted' => 'Das API-Token hat nicht die richtigen Fähigkeiten, um diese Aktion auszuführen',
    'alert_validation_failed' => 'Failed to validate request parameters',
];
