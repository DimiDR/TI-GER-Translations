<?php

return [

    'text_side_menu' => 'Banner & Slider',

    'banners' => [
        'text_tab_general' => 'Allgemein',
        'component_title' => 'Banner-Komponente',
        'component_desc' => 'Banner anzeigen',
        'text_edit_banner' => 'Banner bearbeiten',
        'text_title' => 'Banner',
        'text_form_name' => 'Banner',
        'text_filter_search' => 'Suche nach Name, Typ oder Status.',
        'text_empty' => 'Es stehen keine Banner zur Verfügung.',
        'text_image' => 'Bild',
        'text_custom' => 'Eigene',

        'column_banner' => 'Banner',
        'column_dimension' => 'Abmessungen (W x H)',
        'column_layout_partial' => 'Layout - Partial Bereich',
        'column_status' => 'Status',
        'column_id' => 'ID',

        'label_banner' => 'Banner',
        'label_dimension' => 'Maße (B x H)',
        'label_width' => 'Breite',
        'label_height' => 'Höhe',
        'label_status' => 'Status',
        'label_layout_partial' => 'Layout - Partial Bereich',
        'label_type' => 'Typ',
        'label_click_url' => 'Klicken Sie auf URL',
        'label_language' => 'Sprache',
        'label_alt_text' => 'Alternativ-Text',
        'label_image' => 'Bild',
        'label_custom_code' => 'Benutzerdefinierter Code',

        'button_banners' => 'Banner hinzufügen',

        'help_layouts' => 'Wählen Sie ein Layout, um ein oder mehrere Banner hinzuzufügen.',
        'help_image' => 'Wählen Sie mehrere Bilder, um das Banner als Karussell anzuzeigen.',
        'help_click_url' => 'Sie können eine relative oder absolute Website-URL verwenden',

        'alert_set_banners' => 'Sie müssen zuerst das Banner-Modul zu einem oder mehreren Layouts hinzufügen',
    ],

    'contact' => [
        'component_title' => 'Kontaktformular-Komponente',
        'component_desc' => 'Kontaktformular anzeigen',
        'text_heading' => 'Kontakt',
        'text_summary' => 'Zögern Sie nicht, eine Nachricht zu senden',
        'text_find_us' => 'Finden Sie uns auf der Karte',
        'text_select_subject' => 'wählen Sie einen Betreff',
        'text_contact_us' => 'Kontaktieren Sie uns',
        'text_general_enquiry' => 'Allgemeine Anfrage',
        'text_comment' => 'Kommentar',
        'text_technical_issues' => 'Technische Probleme',

        'label_subject' => 'Anfrage Betrifft:',
        'label_full_name' => 'Vor- und Nachname:',
        'label_email' => 'Email-Adresse:',
        'label_telephone' => 'Telefon:',
        'label_comment' => 'Kommentar',

        'button_send' => 'Senden',

        'alert_contact_sent' => 'Nachricht erfolgreich gesendet, wir melden uns in Kürze bei Ihnen!',
    ],

    'slider' => [
        'text_title' => 'Slider',
        'text_tab_general' => 'Allgemein',
        'component_title' => 'Slider-Komponenten',
        'component_desc' => 'Zeigt Bilder Slider auf der Homepage an',
        'text_form_name' => 'Slider',
        'text_empty' => 'Es sind keine Slider verfügbar.',

        'text_tab_slides' => 'Folien',

        'column_updated_at' => 'Aktualisiert',

        'label_code' => 'Code',
        'label_slider' => 'Slider-Code',
        'label_effect' => 'Effekte',
        'label_interval' => 'Verzögerungsintervall zwischen Folien',
        'label_caption' => 'Beschriftung',
        'label_images' => 'Bilder',
        'label_hide_controls' => 'Bedienelemente ausblenden',
        'label_hide_indicators' => 'Indikatoren ausblenden',
        'label_hide_captions' => 'Bildunterschriften ausblenden',
    ],

    'newsletter' => [
        'text_tab_general' => 'Allgemein',
        'component_title' => 'Newsletter-Komponente',
        'component_desc' => 'Zeigt das Newsletter-Formular an',

        'text_subscribe' => 'Abonnieren Sie unseren Newsletter',

        'label_status' => 'Status: ',
        'label_email' => 'E-Mail-Adresse',

        'alert_success_subscribed' => 'Danke, Ihre E-Mail wurde jetzt für unsere Newsletter abonniert.',
        'alert_success_existing' => 'Danke, Ihre E-Mail ist bereits für unseren Newsletter abonniert',
    ],

    'featured' => [
        'text_tab_general' => 'Allgemein',
        'component_title' => 'Empfohlene Menü Komponente',
        'component_desc' => 'Zeigt die Liste der vorgestellten Menüs auf der Shopseite an',
        'text_subscribe' => 'Abonnieren Sie unseren Newsletter',
        'text_featured_menus' => 'Empfohlenes Menü',

        'column_menu_name' => 'Menüname',
        'column_menu_remove' => 'Entfernen',

        'label_title' => 'Titel',
        'label_menus' => 'Menüs',
        'label_limit' => 'Limit',
        'label_items_per_row' => 'Artikel pro Zeile',
        'label_dimension' => 'Maße:',
        'label_dimension_w' => 'Maße (Breit)',
        'label_dimension_h' => 'Maße (Höhe)',

        'help_dimension' => '(Breite x Höhe)',
        'help_items_per_row' => 'Anzahl der anzuzeigenden Elemente pro Zeile',
    ],

    'captcha' => [
        'component_title' => 'Captcha-Komponente',
        'component_desc' => 'Zeigt das reCATPCHA Widget an.',

        'label_api_site_key' => 'Site Key',
        'label_api_secret_key' => 'Secret Key',
        'label_version' => 'Version',
        'label_version_v2' => 'reCAPTCHA v2',
        'label_version_invisible' => 'reCAPTCHA v2 Unsichtbar',
        'label_version_v3' => 'reCAPTCHA v3',
        'label_lang' => 'Sprache',

        'error_recaptcha' => 'Bitte bestätige, dass du ein Mensch bist!',

        'help_lang' => 'Erzwingt das Widget in einer bestimmten Sprache zu rendern. Automatisch - erkennt die Sprache des Benutzers wenn nicht spezifiziert.',
    ],
];
