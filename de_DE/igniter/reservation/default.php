<?php

return [
    'text_tab_general' => 'Allgemein',
    'text_component_title' => 'Buchungskomponente',
    'text_component_desc' => 'Zeigt das Buchungsformular an',

    'text_heading' => 'Reservieren Sie einen Tisch',
    'text_success_heading' => 'Reservierungsbestätigung',
    'text_time_heading' => 'Zeit wählen',
    'text_reservation' => 'Meine Reservierung',
    'text_heading_success' => 'Reservierung bestätigt',
    'text_no_table' => 'In Ihrem Restaurant stehen keine Tische zur Verfügung.',
    'text_find_msg' => 'Bitte verwenden Sie das untenstehende Formular, um einen Tisch zur Reservierung zu finden',
    'text_time_msg' => 'Verfügbare Reservierungszeiten für %s für %s Gäste',
    'text_no_time_slot' => '<span class="text-danger">Keine Reservierungszeit verfügbar, bitte gehen Sie zurück um Ihre Tischdetails zu überprüfen.</span>',
    'text_location_closed' => 'Tut uns leid, aber wir sind geschlossen, kommen Sie während der Öffnungszeiten zurück',
    'text_date_format' => '%D, %M %j, %Y',
    'text_person' => 'Person',
    'text_people' => 'Personen',

    'text_subject' => 'Tisch reserviert - %s!',
    'text_greetings' => 'Danke %s,',
    'text_success_message' => 'Ihre Reservierung im %s wurde für %s am %s gebucht.<br />Vielen Dank, dass Sie bei uns online reserviert haben!',

    'label_status' => 'Status',
    'label_location' => 'Standort',
    'label_guest_num' => 'Anzahl der Gäste',
    'label_date' => 'Datum',
    'label_time' => 'Zeit',
    'label_occasion' => 'Besondere Anlässe',
    'label_select' => ' -Bitte auswählen- ',

    'label_first_name' => 'Vorname',
    'label_last_name' => 'Nachname',
    'label_email' => 'E-Mail-Adresse',
    'label_confirm_email' => 'E-Mail-Adresse bestätigen',
    'label_telephone' => 'Telefon',
    'label_comment' => 'Besondere Wünsche',

    'button_find_table' => 'Tisch suchen',
    'button_select_time' => 'Zeit wählen',
    'button_change' => 'Daten ändern',
    'button_reset' => 'Zurücksetzen',

    'button_find_again' => 'Tisch wiederfinden',
    'button_reservation' => 'Reservierung abschließen',

    'error_invalid_location' => 'Der ausgewählte Ort ist ungültig.',
    'error_invalid_date' => 'Das Datum muss nach dem heutigen Tag sein, Sie können nur zukünftige Reservierungen vornehmen!',
    'error_invalid_datetime' => 'Selected reservation date time is invalid',
    'error_invalid_time' => 'Zeit muss zwischen der Öffnungszeit des Restaurants liegen!',

    'alert_reservation_disabled' => 'Tischreservierung wurde deaktiviert, bitte kontaktieren Sie den Administrator.',
    'alert_no_table_available' => 'Es wurde kein Tisch für die angegebene Gästeanzahl am ausgewählten Ort gefunden.',
    'alert_fully_booked' => 'Wir sind für das gewählte Datum und die Uhrzeit vollständig reserviert, bitte wählen Sie ein anderes Datum oder eine andere Uhrzeit.',

    'activity_reservation_created_title' => 'New reservation.',
    'activity_reservation_created' => '<b>:properties.full_name</b> created a reservation.',

    'reservations' => [
        'component_title' => ' Konto-Reservierungs Komponente',
        'component_desc' => 'Zeigt und verwaltet Konto-Reservierungen',
        'text_heading' => 'Letzte Reservierungen',
        'text_my_account' => 'Mein Konto',
        'text_view_heading' => 'Meine Reservierungsansicht',
        'text_empty' => 'Es gibt keine Reservierungen.',

        'column_id' => 'Reservierungs-ID',
        'column_status' => 'Status',
        'column_location' => 'Standort',
        'column_date' => 'Zeit - Datum',
        'column_table' => 'Tischname',
        'column_guest' => 'Gastanzahl',
        'column_occasion' => 'Anlass',
        'column_telephone' => 'Telefon',
        'column_comment' => 'Kommentar',

        'button_reserve' => 'Reservieren Sie jetzt',
        'button_cancel' => 'Reservierung stornieren',
        'button_back' => 'Zurück',
        'btn_view' => 'View',

        'alert_cancel_success' => 'Die Reservierung wurde erfolgreich storniert.',
        'alert_cancel_failed' => 'Die Reservierung kann nicht storniert werden, bitte kontaktieren Sie uns.',
    ],
];
