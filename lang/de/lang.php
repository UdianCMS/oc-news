<?php return [
    'plugin' => [
        'name' => 'News und Newsletters',
        'description' => 'Einfaches News und Newsletter plugin.',
        'author' => 'Gergő Szabó',
    ],
    'menu' => [
        'news' => 'News',
        'posts' => 'Nachrichten',
        'subscribers' => 'Abonnenten',
        'statistics' => 'Statistik',
        'import' => 'Import',
        'export' => 'Export',
    ],
    'title' => [
        'posts' => 'Nachrichten',
        'subscribers' => 'Abonnenten',
    ],
    'new' => [
        'posts' => 'Neue Nachricht',
        'subscribers' => 'Neuen Abonnenten',
    ],
    'stat' => [
        'posts' => 'Nachricht|Nachrichten',
        'view' => 'Gesehen',
        'mail' => 'Gesendet',
        'top' => 'TOP',
        'longest' => 'Längste',
        'shortest' => 'Kürzeste',
    ],
    'form' => [
        'created' => 'Erstellt am',
        'updated' => 'Aktualisiert am',
        'id' => 'ID',
        'title' => 'Titel',
        'slug' => 'Slug',
        'introductory' => 'Einleitung',
        'content' => 'Inhalt',
        'image' => 'Bild',
        'status' => 'Status',
        'status_published' => 'Veröffentlicht',
        'status_hide' => 'Versteckt',
        'status_draft' => 'Entwurf',
        'status_active' => 'Aktiv',
        'status_unsubscribed' => 'Deabonniert',
        'featured' => 'Hervorgehoben',
        'yes' => 'Ja',
        'no' => 'Nein',
        'view' => 'Gesehen',
        'published' => 'Veröffentlicht am',
        'send' => 'Sende die Nachricht an Abonneten.',
        'length' => 'Länge',
        'name' => 'Name',
        'email' => 'Email',
        'common' => 'Common',
        'mail' => 'Mail',
    ],
    'button' => [
        'activate' => 'Aktivieren',
        'deactivate' => 'Deaktivieren',
        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',
        'import' => 'Import',
        'export' => 'Export',
        'return' => 'Zurück',
        'unsubscribe' => 'Deabonnieren',
        'subscribe' => 'Abonnieren',
    ],
    'flash' => [
        'activate' => 'Nachrichten erfolgreich aktiviert.',
        'deactivate' => 'Nachrichten erfolgreich deaktiviert.',
        'delete' => 'Möchten Sie wirklich diese Einträge löschen?',
        'remove' => 'Einträge erfolgreich gelöscht.',
    ],
    'widget' => [
        'posts' => 'News - Nachrichten',
        'subscribers' => 'News - Abonneten',
        'show_total' => 'Zeige alle',
        'show_active' => 'Zeige aktive',
        'show_inactive' => 'Zeige inaktive',
        'show_draft' => 'Zeige Entwurf',
        'total' => 'Alle',
    ],
    'component' => [
        'posts' => 'Nachrichten',
        'post' => 'Nachricht',
        'form' => 'Abonnentenform',
        'stat' => 'Besucher',
        'unsubscribe' => 'Deabonnieren'
    ],
    'permission' => [
        'posts' => 'Nachrichten verwalten',
        'subscribers' => 'Abonnenten verwalten',
        'statistics' => 'Zeige Statistik',
        'import_export' => 'Import und Export',
    ],
    'settings' => [
        'post_title' => 'Nachricht',
        'post_description' => 'Zeigt eine Nachricht auf der Seite.',
        'post_slug_title' => 'Nachrichten slug',
        'post_slug_description' => 'Slug parameter nach dem die Nachricht gesucht wird.',
        'posts_title' => 'Nachrichtenliste',
        'posts_description' => 'Zeigt eine Liste von den letzten Nachrichten.',
        'posts_pagination_title' => 'Seitennummer',
        'posts_pagination_description' => 'Parameter für die Seitennummer.',
        'posts_per_page_title' => 'Nachrichten pro Seite',
        'posts_per_page_validation' => 'Ungültiges Format der Nachrichten pro Seite',
        'posts_no_posts_title' => 'Keine Nachrichten Benachrichtigung',
        'posts_no_posts_description' => 'Benachrichtigung die angezeigt wird, wenn keine Nachrichten vorhanden sind.',
        'posts_no_posts_found' => 'Keine Nachrichten gefunden',
        'posts_order_title' => 'Sortierungsattribut',
        'posts_order_description' => 'Attribut nachdem die Nachrichten sortiert werden sollen.',
        'posts_post_title' => 'Seite der einzelnen Nachricht',
        'posts_post_description' => 'Name der Seite, auf dennen die einzelne Nachricht verlinkt werden soll.',
        'posts_featured_title' => 'Nachrichtenart',
        'posts_featured_description' => 'Wählen Sie welche Nachrichten angezeigt werden sollen',
        'posts_list_all' => 'Alle',
        'posts_list_featured' => 'Nur hervorgehobene',
        'posts_list_notfeatured' => 'Keine hervorgehobene',
    ],
    'sorting' => [
        'title_asc' => 'Titel (aufsteigend)',
        'title_desc' => 'Titel (absteigend)',
        'created_at_asc' => 'Erstellt (aufsteigend)',
        'created_at_desc' => 'Erstellt (absteigend)',
        'updated_at_asc' => 'Aktualisiert (aufsteigend)',
        'updated_at_desc' => 'Aktualisiert (absteigend)',
        'published_at_asc' => 'Veröffentlicht (aufsteigend)',
        'published_at_desc' => 'Veröffentlicht (absteigend)',
    ],
    'sitemap' => [
        'post_list' => 'Nachrichten',
        'post_page' => 'Nachricht',
    ],
    'ajax' => [
        'messages' => [
            'unsubscribed' => 'Wir haben Sie erfolgreich aus den Newsletter ausgetragen.',
            'not_subscribed' => 'Sie haben hier keinen Newsletter abonniert.',
            'subscribed' => 'Danke, dass Sie unseren Newsletter abonniert haben.'
        ]
    ]
];