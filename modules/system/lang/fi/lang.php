<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Takaisin perusteisiin'
    ],
    'locale' => [
        'be' => 'Беларуская',
        'bg' => 'Български',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fi' => 'Finnish (suomi)',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polskie',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'rs' => 'Srpski',
        'ru' => 'Русский',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文'
    ],
    'directory' => [
        'create_fail' => 'Ei voida luoda kansiota: :name'
    ],
    'file' => [
        'create_fail' => 'Ei voida luoda tiedostoa: :name'
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Token on virheellinen',
        ],
    ],
    'combiner' => [
        'not_found' => "Yhdistelmätiedostoa ':name' ei löydy."
    ],
    'system' => [
        'name' => 'Järjestelmä',
        'menu_label' => 'Järjestelmä',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Muut',
            'logs' => 'Lokit',
            'mail' => 'Sähköposti',
            'shop' => 'Kauppa',
            'team' => 'Tiimi',
            'users' => 'Käyttäjät',
            'system' => 'Järjestelmä',
            'social' => 'Some',
            'backend' => 'Ylläpito',
            'events' => 'Tapahtumat',
            'customers' => 'Asiakkaat',
            'my_settings' => 'Omat asetukset',
            'notifications' => 'Notifikaatiot'
        ]
    ],
    'theme' => [
        'label' => 'Teema',
        'unnamed' => 'Nimetön teema',
        'name' => [
            'label' => 'Teeman nimi',
            'help' => 'Nimeä teema uniikilla tunnuksella. Esimerkiksi RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Asenna teemoja',
        'search' => 'etsi asennettavia teemoja...',
        'installed' => 'Asennetut teemat',
        'no_themes' => 'Ei asennettuja teemoja kaupasta.',
        'recommended' => 'Suositellut',
        'remove_confirm' => 'Haluatko varmasti poistaa tämän teeman?'
    ],
    'plugin' => [
        'label' => 'Lisäosa',
        'unnamed' => 'Nimetön lisäosa',
        'name' => [
            'label' => 'Lisäosan nimi',
            'help' => 'Anna lisäosalle uniikkikoodi. Esimerkiksi: RainLab.Blog'
        ],
        'by_author' => 'Tekijä: :name'
    ],
    'plugins' => [
        'manage' => 'Hallinnoi lisäosia',
        'enable_or_disable' => 'Aktivoi tai poista käytöstä',
        'enable_or_disable_title' => 'Aktivoi tai poista lisäosia käytöstä',
        'install' => 'Asenna lisäosia',
        'install_products' => 'Asenna tuotteita',
        'search' => 'etsi asennettavia lisäosia...',
        'installed' => 'Asennetut lisäosat',
        'no_plugins' => 'Ei asennettuja lisäosia markkinapaikalta.',
        'recommended' => 'Suositellut',
        'remove' => 'Poista',
        'refresh' => 'Päivitä',
        'disabled_label' => 'Poistettu käytöstä',
        'disabled_help' => 'Järjestelmä ei huomioi Käytöstä poistettuja lisäosia.',
        'frozen_label' => 'Pysäytä päivitykset',
        'frozen_help' => 'Päivitystoiminto ei huomioi jäädytettyjä lisäosia.',
        'selected_amount' => 'Valittuja lisäosia: :amount',
        'remove_confirm' => 'Haluatko varmasti poistaa tämän lisäosan?',
        'remove_success' => 'Lisäosat poistettu onnistuneesti järjestelmästä.',
        'refresh_confirm' => 'Oletko varma?',
        'refresh_success' => 'Onnistuneesti päivitetty järjestelmän lisäosat.',
        'disable_confirm' => 'Oletko varma?',
        'disable_success' => 'Lisäosat poistettu käytöstä onnistuneesti.',
        'enable_success' => 'Lisäosat otettu käyttöön onnistuneesti.',
        'unknown_plugin' => 'Lisäosa on poistettu järjestelmästä.'
    ],
    'project' => [
        'name' => 'Projekti',
        'owner_label' => 'Omistaja',
        'attach' => 'Liitä projekti',
        'detach' => 'Irroita projekti',
        'none' => 'Ei yhtään',
        'id' => [
            'label' => 'Projektin ID',
            'help' => 'Mistä löydän projektin ID:n',
            'missing' => 'Määrittele projektin ID.'
        ],
        'detach_confirm' => 'Haluatko varmasti irrottautua projektista?',
        'unbind_success' => 'Projekti on irrotettu.'
    ],
    'settings' => [
        'menu_label' => 'Asetukset',
        'not_found' => 'Määriteltyjä asetuksia ei löytynyt.',
        'missing_model' => 'The settings page is missing a Model definition.',
        'update_success' => ':name settings updated',
        'return' => 'Palaa järjestelmän asetuksiin',
        'search' => 'Haku'
    ],
    'mail' => [
        'log_file' => 'Lokitiedosto',
        'menu_label' => 'Sähkököpostin asennus',
        'menu_description' => 'Hallitse sähköpostin asetuksia.',
        'general' => 'Yleiset',
        'method' => 'Sähköpostimenetelmä',
        'sender_name' => 'Lähettäjän nimi',
        'sender_email' => 'Lähettäjän sähköposti',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP-osoite',
        'smtp_authorization' => 'Pakollinen SMTP autorisointi',
        'smtp_authorization_comment' => 'Ruksi tämä, jos SMTP-palvelimesi tarvitsee tunnistuksen.',
        'smtp_username' => 'Käyttäjätunnus',
        'smtp_password' => 'Salasana',
        'smtp_port' => 'SMTP-portti',
        'smtp_ssl' => 'SSL-yhteys vaaditaan',
        'smtp_encryption' => 'SMTP-salausprotokolla',
        'smtp_encryption_none' => 'Ei salausta',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail-polku',
        'sendmail_path_comment' => 'Määritä polku sendmail-ohjelmaan.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domain',
        'mailgun_domain_comment' => 'Määritä Mailgun domain nimi.',
        'mailgun_secret' => 'Mailgun sala-avain',
        'mailgun_secret_comment' => 'Syötä sinun Mailgun API sala-avain.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill sala-avain',
        'mandrill_secret_comment' => 'Syötä sinun Mandrill API sala-avain.',
        'ses' => 'SES',
        'ses_key' => 'SES key',
        'ses_key_comment' => 'Syötä sinun SES API avain.',
        'ses_secret' => 'SES sala-avain',
        'ses_secret_comment' => 'Syötä sinun SES API sala-avain.',
        'ses_region' => 'SES alue',
        'ses_region_comment' => 'Syötä sinun SES alue (esim: us-east-1)',
        'drivers_hint_header' => 'Ajureita ei asennettu',
        'drivers_hint_content' => 'Tämä sähköpostimenetelmä vaatii lisäosan ":plugin" asennettavaksi ennen kuin voit lähettää sähköpostia.'
    ],
    'mail_templates' => [
        'menu_label' => 'Sähköpostipohjat',
        'menu_description' => 'Muokkaa sähköpostimalleja, jotka lähetetään käyttäjille ja järjestelmänvalvojille, hallitse sähköpostien ulkoasua.',
        'new_template' => 'Uusi teema',
        'new_layout' => 'Uusi ulkoasu',
        'new_partial' => 'Uusi sisältöpala',
        'template' => 'Teema',
        'templates' => 'Teemat',
        'partial' => 'Sisältöpala',
        'partials' => 'Sisältöpalat',
        'menu_layouts_label' => 'Sähköpostin ulkoasut',
        'menu_partials_label' => 'Sähköpostin sisältöpalat',
        'layout' => 'Ulkoasu',
        'layouts' => 'Ulkoasut',
        'no_layout' => '-- Ei ulkoasua --',
        'name' => 'Nimi',
        'name_comment' => 'Uniikki koodi tälle teemalle',
        'code' => 'Koodi',
        'code_comment' => 'Uniikkikoodi teemalle',
        'subject' => 'Otsikko',
        'subject_comment' => 'Sähköpostin aihe',
        'description' => 'Kuvaus',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Pelkkä teksti',
        'test_send' => 'Lähetä testiviesti',
        'test_success' => 'Testiviesti lähetetty.',
        'test_confirm' => 'Lähetä testiviesti :email. Jatketaanko?',
        'creating' => 'Luodaan teema...',
        'creating_layout' => 'Luodaan asettelu...',
        'saving' => 'Tallennetaan teema...',
        'saving_layout' => 'Tallennetaan asettelu...',
        'delete_confirm' => 'Poista tämä teema?',
        'delete_layout_confirm' => 'Poista tämä asettelu?',
        'deleting' => 'Poistetaan teemaa...',
        'deleting_layout' => 'Poistetaan ulkoasua...',
        'sending' => 'Lähetetään testiviestiä...',
        'return' => 'Palaa teemalistaan'
    ],
    'mail_brand' => [
        'menu_label' => 'Sähköpostin brändäys',
        'menu_description' => 'Muokkaa sähköpostiviestin värejä ja teemaa.',
        'page_title' => 'Muokkaa sähköpostiviestin ulkoasua',
        'sample_template' => [
            'heading' => 'Otsikko',
            'paragraph' => 'Tämä kappale sisältää Lorem Ipsumia ja linkin. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Kohde',
                'description' => 'Kuvaus',
                'price' => 'Hinta',
                'centered' => 'Keskitetty',
                'right_aligned' => 'Tasattu oikealle'
            ],
            'buttons' => [
                'primary' => 'Ensisijainen nappula',
                'positive' => 'Positiivinen nappula',
                'negative' => 'Negatiivinen nappula',
            ],
            'panel' => 'Kuinka hieno tämä paneeli onkaan?',
            'more' => 'Lisää tekstiä',
            'promotion' => 'Kuponkikoodi: OCTOBER',
            'subcopy' => 'Tämä on sähköpostin alateksti',
            'thanks' => 'Kiitos'
        ],
        'fields' => [
            '_section_background' => 'Tausta',
            'body_bg' => 'Body-tausta',
            'content_bg' => 'Sisällön tausta',
            'content_inner_bg' => 'Keskeisen sisällön tausta',
            '_section_buttons' => 'Painikkeet',
            'button_text_color' => 'Painikkeiden tekstin väri',
            'button_primary_bg' => 'Ensisijaisen painikkeen tausta',
            'button_positive_bg' => 'Positiivisen painikkeen tausta',
            'button_negative_bg' => 'Negatiivisen painikkeen tausta',
            '_section_type' => 'Typografia',
            'header_color' => 'Pääosion väri',
            'heading_color' => 'Otsikoiden väri',
            'text_color' => 'Tekstin väri',
            'link_color' => 'Linkkiväri',
            'footer_color' => 'Alatunnisteen väri',
            '_section_borders' => 'Reunat',
            'body_border_color' => 'Pääosion reunuksen väri',
            'subcopy_border_color' => 'Alatekstin reunuksen väri',
            'table_border_color' => 'Taulukon reunuksen väri',
            '_section_components' => 'Komponentit',
            'panel_bg' => 'Paneelin tausta',
            'promotion_bg' => 'Promootion tausta',
            'promotion_border_color' => 'Promootion reunan väri',
        ]
    ],
    'install' => [
        'project_label' => 'Kiinnitä projektiin',
        'plugin_label' => 'Asenna liitännäinen',
        'theme_label' => 'Asenna teema',
        'missing_plugin_name' => 'Määritä asennettavan lisäosan nimi.',
        'missing_theme_name' => 'Määritä asennettavan teeman nimi.',
        'install_completing' => 'Viimeistellään asennusta',
        'install_success' => 'Lisäosa asennettu onnistuneesti'
    ],
    'updates' => [
        'title' => 'Hallinnoi päivityksiä',
        'name' => 'Ohjelmistopäivitys',
        'menu_label' => 'Päivitykset & Lisäosat',
        'menu_description' => 'Päivitä järjestelmää, hallitse ja asenna lisäosia ja teemoja.',
        'return_link' => 'Palaa järjestelmäpäivityksiin',
        'check_label' => 'Tarkista päivitykset',
        'retry_label' => 'Yritä uudelleen',
        'plugin_name' => 'Nimi',
        'plugin_code' => 'Koodi',
        'plugin_description' => 'Kuvaus',
        'plugin_version' => 'Versio',
        'plugin_author' => 'Julkaisija',
        'plugin_not_found' => 'Lisäosaa ei löydy',
        'core_current_build' => 'Nykyinen versio',
        'core_build' => 'Rakennusversio :build',
        'core_build_help' => 'Viimeisin versio saatavilla.',
        'core_downloading' => 'Ladataan ohjelmiston versiota',
        'core_extracting' => 'Puretaan ohjelmiston tiedostoja',
        'plugins' => 'Lisäosat',
        'themes' => 'Teemat',
        'disabled' => 'Pois käytöstä',
        'plugin_downloading' => 'Ladataan lisäosaa: :name',
        'plugin_extracting' => 'Puretaan lisäosaa: :name',
        'plugin_version_none' => 'Uusi lisäosa',
        'plugin_current_version' => 'Nykyinen versio',
        'theme_new_install' => 'Uuden teeman asennus.',
        'theme_downloading' => 'Ladataan teemaa: :name',
        'theme_extracting' => 'Puretaan teemaa: :name',
        'update_label' => 'Päivitä ohjelmisto',
        'update_completing' => 'Viimeistellään päivitysprosessia',
        'update_loading' => 'Ladataan saatavilla olevia päivityksiä...',
        'update_success' => 'Päivitys valmis',
        'update_failed_label' => 'Päivitys epäonnistui',
        'force_label' => 'Pakota päivitys',
        'found' => [
            'label' => 'Löydettiin uusia päivityksiä!',
            'help' => 'Klikkaa Päivitä ohjelmisto aloittaaksesi päivitysprosessi.'
        ],
        'none' => [
            'label' => 'Ei päivityksiä',
            'help' => 'Uusia päivityksiä ei löytynyt.'
        ],
        'important_action' => [
            'empty' => 'Valitse toimenpide',
            'confirm' => 'Vahvista päivitys',
            'skip' => 'Jätä tämä pävitys väliin (vain kerran)',
            'ignore' => 'Hyppää tämän päivityksen yli (aina)'
        ],
        'important_action_required' => 'Toimenpiteitä vaaditaan',
        'important_view_guide' => 'Katso päivitysopas',
        'important_view_release_notes' => 'Katso julkaisulista',
        'important_alert_text' => 'Osa päivityksistä vaatii huomiotasi.',
        'details_title' => 'Liitännäisen tiedot',
        'details_view_homepage' => 'Näytä kotisivu',
        'details_readme' => 'Dokumentaatio',
        'details_readme_missing' => 'Dokumentaatiota ei löydy.',
        'details_changelog' => 'Muutosloki',
        'details_changelog_missing' => 'There is no changelog provided.',
        'details_upgrades' => 'Päivitysopas',
        'details_upgrades_missing' => 'Päivitysohjeita ei lödy.',
        'details_licence' => 'Lisenssi',
        'details_licence_missing' => 'Lisenssiä ei löydy.',
        'details_current_version' => 'Tämän hetkinen versio',
        'details_author' => 'Tekijä'
    ],
    'server' => [
        'connect_error' => 'Palvelimeen ei saada yhteyttä.',
        'response_not_found' => 'Päivityspalvelinta ei löydy.',
        'response_invalid' => 'Virheellinen vastaus palvelimelta.',
        'response_empty' => 'Tyhjä vastaus palvelimelta.',
        'file_error' => 'Paketin toimitus palvelimelta epäonnistui.',
        'file_corrupt' => 'Palvelimella oleva tiedosto on vahingoittunut.'
    ],
    'behavior' => [
        'missing_property' => 'Luokan :class täytyy määritellä ominaisuus $:property, jota käyttää :behavior käyttäytyminen.'
    ],
    'config' => [
        'not_found' => 'Asetustiedostoa :file ei löydy määriteltynä kohteelle :location.',
        'required' => "Kohteen :location asetustiedostossa on oltava arvo ':property'."
    ],
    'zip' => [
        'extract_failed' => "Ydintiedoston ':file' purku epäonnistui."
    ],
    'event_log' => [
        'hint' => 'Tämä loki näyttää listan mahdollisista virheistä, jotka tapahtuvat sovelluksessa, kuten poikkeukset ja virheen korjaustiedot.',
        'menu_label' => 'Tapahtumaloki',
        'menu_description' => 'View system log messages with their recorded time and details.',
        'empty_link' => 'Tyhjennä tapahtumaloki',
        'empty_loading' => 'Tyhjennetään tapahtumalokia...',
        'empty_success' => 'Tapahtumaloki on tyhjä',
        'return_link' => 'Palaa tapahtumalokiin',
        'id' => 'ID',
        'id_label' => 'Tapahtuman ID',
        'created_at' => 'Päivä & Aika',
        'message' => 'Viesti',
        'level' => 'Taso',
        'preview_title' => 'Tapahtuma'
    ],
    'request_log' => [
        'hint' => 'Tämä loki näyttää listan selainten pyynnöistä, jotka saattavat vaatia huomiotasi. Esim. jos vierailijat avaavat CMS-sivun, jota ei löydy, kohde lisätään tilakoodilla 404.',
        'menu_label' => 'Pyyntöloki',
        'menu_description' => 'Tarkastele huonoja tai uudelleenohjattuja pyyntöjä, kuten Sivua ei löydy (404).',
        'empty_link' => 'Tyhjää pyyntöloki',
        'empty_loading' => 'Tyhjätään pyyntölokia...',
        'empty_success' => 'Pyyntöloki tyhjätty',
        'return_link' => 'Palaa pyyntölokiin',
        'id' => 'ID',
        'id_label' => 'Loki ID',
        'count' => 'Laskuri',
        'referer' => 'Viitteet',
        'url' => 'URL',
        'status_code' => 'Tilakoodi',
        'preview_title' => 'Pyyntö'
    ],
    'permissions' => [
        'name' => 'Järjestelmä',
        'manage_system_settings' => 'Hallitse järjestelmän asetuksia',
        'manage_software_updates' => 'Hallitse ohjelmiston päivityksiä',
        'access_logs' => 'Katso järjestelmän lokeja',
        'manage_mail_templates' => 'Hallitse sähköpostin teemoja',
        'manage_mail_settings' => 'Hallitse sähköpostin asetuksia',
        'manage_other_administrators' => 'Hallitse muita ylläpitäjiä',
        'manage_preferences' => 'Hallitse ylläpitopuolen asetuksia',
        'manage_editor' => 'Hallitse koodieditorin asetuksia',
        'view_the_dashboard' => 'Katso Dashboardia',
        'manage_branding' => 'Muokkaa ylläpitoa'
    ],
    'log' => [
        'menu_label' => 'Lokiasetukset',
        'menu_description' => 'Määrittele minkä alueiden kuuluisi käyttää lokeja.',
        'default_tab' => 'Lokit',
        'log_events' => 'Kirjaa järjestelmän tapahtumat',
        'log_events_comment' => 'Tallenna järjestelmätapahtumat tietokantaan tiedostopohjaisen lokin lisäksi.',
        'log_requests' => 'Kirjaa huonot pyynnöt',
        'log_requests_comment' => 'Selainten pyynnöt, jotka saattavat vaatia huomiota, kuten 404 virheet.',
        'log_theme' => 'Kirjaa teeman muutokset',
        'log_theme_comment' => 'Kun muutos on tehty teemaan käyttäen hallintapaneelia.',
    ],
    'media' => [
        'invalid_path' => "Virheellinen tiedostopolku: ':path'.",
        'folder_size_items' => 'tiedosto(a)',
    ]
];