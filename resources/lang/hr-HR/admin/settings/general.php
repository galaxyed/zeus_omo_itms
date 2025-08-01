<?php

return [
    'ad'				        => 'Aktivni direktorij',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'Ovo je ponekad isto kao i vaša domena e-pošte, ali ne uvijek.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'Kopija e-pošte (CC)',
    'admin_cc_email_help'       => 'Send a copy of checkin/checkout emails to this address.',
    'admin_cc_always' => 'Always send copy upon checkin/checkout',
    'admin_cc_when_acceptance_required' => 'Only send copy upon checkout if acceptance is required',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Ovo je poslužitelj Active Directory',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Pošaljite upozorenja za',
    'alert_email_help'          => 'Email addresses or distribution lists you want alerts to be sent to, comma separated.',
    'alerts_enabled'			=> 'Upozorenja su omogućena',
    'alert_interval'			=> 'Prag prekoračenja upozorenja (u danima)',
    'alert_inv_threshold'		=> 'Prag upozorenja inventara',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'ID atributi',
    'audit_interval'            => 'Interval revizije',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Prag za upozorenje na reviziju',
    'audit_warning_days_help'   => 'Koliko dana unaprijed trebamo vas upozoriti kada imamo sredstva za reviziju?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Prefiks (opcija)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Sigurnosne kopije',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Postavke crtičnog koda',
    'confirm_purge'			    => 'Potvrdite čišćenje',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Prilagođeni CSS',
    'custom_css_placeholder'	=> 'Add your custom CSS',
    'custom_css_help'			=> 'Unesite bilo koji prilagođeni CSS nadjačaj koji biste željeli koristiti. Ne uključujte oznake &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Prilagođeni URL za resetiranje zaporke',
    'custom_forgot_pass_url_help'	=> 'Ovo zamjenjuje ugrađeni URL za zaboravljenu zaporku na zaslonu za prijavu, korisno za usmjeravanje korisnika na internu ili hostanu LDAP uslugu resetiranja zaporke. To će zapravo isključiti lokalnu funkciju za zaboravljene korisničke zaporke.',
    'dashboard_message'			=> 'Poruka nadzorne ploče',
    'dashboard_message_help'	=> 'Taj će se tekst prikazati na nadzornoj ploči za sve osobe s dozvolom za pregled nadzorne ploče.',
    'default_currency'  		=> 'Zadana valuta',
    'default_eula_text'			=> 'Zadana EULA',
    'default_eula_text_placeholder' => 'Add your default EULA text',
    'default_language'			=> 'Zadani jezik',
    'default_eula_help_text'	=> 'Također možete povezati prilagođene EULA-e s određenim kategorijama imovine.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Prikaz naziva imovine',
    'display_checkout_date'     => 'Prikaz datuma narudžbe',
    'display_eol'               => 'Prikaži EOL u prikazu tablice',
    'display_qr'                => 'Display 2D barcode',
    'display_alt_barcode'		=> 'Prikaz 1D crtičnog koda',
    'barcode_type'				=> 'Vrsta 2D barkod',
    'alt_barcode_type'			=> '1D tip crtičnog koda',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'EULA postavke',
    'eula_markdown'				=> 'Ovo EULA dopušta <a href="https://help.github.com/articles/github-flavored-markdown/">Gordan markdown</a>.',
    'empty_row_count'           => 'Field Start Offset (Empty Rows)',
    'empty_row_count_help'      => 'Fields will begin populating after this many empty rows are skipped at the top of the label.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Dodatni tekst u podnožju ',
    'footer_text_help'          => 'Ovaj će se tekst pojaviti u podnožju desno. Poveznice su dopuštene uporabom <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Prijelazi u novi red, naslovi, slike itd., mogu imati nepredvidive rezultate.',
    'footer_text_placeholder'   => 'Optional footer text',
    'general_settings'			=> 'Opće postavke',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Izradi sigurnosnu kopiju',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Boja zaglavlja',
    'info'                      => 'Te postavke omogućuju prilagodbu određenih aspekata vaše instalacije.',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Inačica Laravela',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP je omogućen',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP postavke',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Unesite valjano korisničko ime i lozinku LDAP-a iz osnovnog DN-a koji ste prethodno naveli da biste provjerili je li vaša LDAP prijava ispravno konfigurirana. MORATE NAJPRIJE SPREMITI SVOJE AŽURIRANE LDAP POSTAVKE.',
    'ldap_login_sync_help'      => 'Ovo samo testira da se LDAP može ispravno sinkronizirati. Ako vaš upit za LDAP autentikaciju nije ispravan, korisnici se i dalje možda neće moći prijaviti. MORATE NAJPRIJE SPREMITI SVOJE AŽURIRANE LDAP POSTAVKE.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP poslužitelj',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Provjera LDAP SSL certifikata',
    'ldap_server_cert_ignore'	=> 'Dopusti nevažeću SSL certifikat',
    'ldap_server_cert_help'		=> 'Odaberite ovaj potvrdni okvir ako upotrebljavate autentičnu SSL certifikat i želite prihvatiti nevažeći SSL certifikat.',
    'ldap_tls'                  => 'Koristite TLS',
    'ldap_tls_help'             => 'To treba provjeriti samo ako pokrenete STARTTLS na LDAP poslužitelju.',
    'ldap_uname'                => 'LDAP pridržava se korisničko ime',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Lozinka vezivanja LDAP-a',
    'ldap_basedn'               => 'Baza se povezuje s DN',
    'ldap_filter'               => 'LDAP filtar',
    'ldap_pw_sync'              => 'Cache LDAP Passwords',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords cached as local hashed passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Polje za korisničko ime',
    'ldap_lname_field'          => 'Prezime',
    'ldap_fname_field'          => 'Ime LDAP-a',
    'ldap_auth_filter_query'    => 'Upit za provjeru autentičnosti LDAP-a',
    'ldap_version'              => 'LDAP inačica',
    'ldap_active_flag'          => 'LDAP aktivna zastava',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_invert_active_flag'   => 'LDAP Invert Active Flag',
    'ldap_invert_active_flag_help'     => 'If enabled: when the value returned by LDAP Active Flag is <code>0</code> or <code>false</code> the user account will be active.',
    'ldap_emp_num'              => 'Broj zaposlenika LDAP-a',
    'ldap_email'                => 'LDAP e-pošta',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Licenca za softver',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Prijava bilješke',
    'login_note_placeholder'            => "If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you.",
    'login_note_help'           => 'Po želji možete uključiti nekoliko rečenica na zaslonu za prijavu, na primjer, kako biste pomogli osobama koje su pronašle izgubljeni ili ukradeni uređaj. Ovo polje prihvaća <a href="https://help.github.com/articles/github-flavored-markdown/">Gordinu s okusom s okusom</a>',
    'login_remote_user_text'    => 'Mogućnosti udaljene prijave korisnika',
    'login_remote_user_enabled_text' => 'Omogući prijavu sa zaglavljem daljinskog korisnika',
    'login_remote_user_enabled_help' => 'Ova opcija omogućuje autentikaciju putem zaglavlja REMOTE_USER prema "Zajedničkom sučelju za pristupnik (rfc3875)"',
    'login_common_disabled_text' => 'Onemogući druge mehanizme autentikacije',
    'login_common_disabled_help' => 'Ova opcija onemogućuje druge mehanizme autentikacije. Omogućite ovu opciju samo ako ste sigurni da vaša REMOTE_USER prijava već funkcionira',
    'login_remote_user_custom_logout_url_text' => 'Prilagođeni URL za odjavu',
    'login_remote_user_custom_logout_url_help' => 'Ako je ovdje upisan url, korisnici će biti biti preusmjereni na taj URL nakon što se odjave iz Snipe-IT-a. Ovo je korisno radi ispravnog zatvaranja korisničkog session-a kod vašeg pružatelja autentifikacije.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Koristi kod ispisa',
    'logo_print_assets_help'    => 'Prikaži elemente brandiranja na ispisima liste imovine ',
    'full_multiple_companies_support_help_text' => 'Ograničavanje korisnika (uključujući administratore) koje tvrtke dodjeljuju imovini tvrtke.',
    'full_multiple_companies_support_text' => 'Potpuna podrška za više tvrtki',
    'scope_locations_fmcs_support_text'  => 'Scope Locations with Full Multiple Companies Support',
    'scope_locations_fmcs_support_help_text'  => 'Restrict locations to their selected company.',
    'scope_locations_fmcs_check_button' => 'Check Compatibility',
    'scope_locations_fmcs_support_disabled_text'  => 'This option is disabled because you have conflicting locations set for :count or more items.',
    'show_in_model_list'   => 'Prikaži u padajućim modelima',
    'optional'					=> 'neobavezan',
    'per_page'                  => 'Rezultati po stranici',
    'php'                       => 'PHP verzija',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Morate instalirati php-gd da biste prikazali QR kodove, pogledajte instalacijske upute.',
    'php_gd_warning'            => 'PHP Image Processing i GD dodatak NIJE instalirani.',
    'pwd_secure_complexity'     => 'Složenost lozinke',
    'pwd_secure_complexity_help' => 'Odaberite koja pravila za složenost lozinke želite izvršiti.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Najmanji broj znakova',
    'pwd_secure_min_help'       => 'Minimalna dopuštena vrijednost je 8',
    'pwd_secure_uncommon'       => 'Spriječite uobičajene zaporke',
    'pwd_secure_uncommon_help'  => 'To će onemogućiti korisnicima upotrebu uobičajenih zaporki s najviše 10.000 zaporki prijavljenih u kršenju.',
    'qr_help'                   => 'Najprije omogućite QR kodove za postavljanje',
    'qr_text'                   => 'QR kodni tekst',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'postavljanje',
    'settings'                  => 'postavke',
    'show_alerts_in_menu'       => 'Prikaži upozorenja u gornjem izborniku',
    'show_archived_in_list'     => 'Arhivirane imovine',
    'show_archived_in_list_text'     => 'Prikaz arhivirane imovine u popisu "sva imovina"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Prikaži slike u e-porukama',
    'show_images_in_email_help'   => 'Isključite ovaj okvir ako je vaša Snipe-IT instalacija iza VPN ili zatvorene mreže, a korisnici izvan mreže neće moći učitati slike poslužene s ove instalacije u njihovu e-poštu.',
    'site_name'                 => 'Ime stranice',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Snipe-IT verzija',
    'support_footer'            => 'Podrška poveznica u podnožju ',
    'support_footer_help'       => 'Navedite tko vidi poveznice na informacije o Snipe-IT podršci i korisničkom priručniku',
    'version_footer'            => 'Verzija u podnožju ',
    'version_footer_help'       => 'Odredite tko može vidjeti Snipe-IT verziju i build broj.',
    'system'                    => 'Informacije o sustavu',
    'update'                    => 'Ažuriraj postavke',
    'value'                     => 'Vrijednost',
    'brand'                     => 'branding',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'O postavkama',
    'about_settings_text'       => 'Te postavke omogućuju prilagodbu određenih aspekata vaše instalacije.',
    'labels_per_page'           => 'Oznake po stranici',
    'label_dimensions'          => 'Dimenzije oznake (inča)',
    'next_auto_tag_base'        => 'Sljedeći automatski prirast',
    'page_padding'              => 'Margine stranice (inča)',
    'privacy_policy_link'       => 'Poveznica na politiku privatnosti',
    'privacy_policy'            => 'Politika privatnosti',
    'privacy_policy_link_help'  => 'Ako je ovdje upisan url, poveznica na politiku privatnosti će biti prikazana u podnožju aplikacije i u svim e-mail-ovima koje sustav šalje, u skladu sa GDPR odredbama. ',
    'purge'                     => 'Obrišite izbrisane zapise',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Oznaka donjeg kanala',
    'labels_display_sgutter'    => 'Oznaka kanala',
    'labels_fontsize'           => 'Oznaka veličine fonta',
    'labels_pagewidth'          => 'Širina listova naljepnica',
    'labels_pageheight'         => 'Visina naljepnice',
    'label_gutters'        => 'Razmak oznaka (inča)',
    'page_dimensions'        => 'Dimenzije stranice (inča)',
    'label_fields'          => 'Označite vidljiva polja',
    'inches'        => 'inča',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Veza na Snipe-IT u e-pošti',
    'show_url_in_emails_help_text'      => 'Poništite potvrdni okvir ako ne želite povezati vašu Snipe-IT instalaciju u svoje podnožje e-pošte. Korisno je ako se većina korisnika nikada ne prijavljuje.',
    'text_pt'        => 'PT',
    'thumbnail_max_h'   => 'Maksimalna visina minijature',
    'thumbnail_max_h_help'   => 'Maksimalna visina u pikselima koje se minijature prikazuju u prikazu unosa. Min 25, max 500.',
    'two_factor'        => 'Dva faktorska provjera autentičnosti',
    'two_factor_secret'        => 'Dva faktorska šifra',
    'two_factor_enrollment'        => 'Dva faktora upisa',
    'two_factor_enabled_text'        => 'Omogući dva faktora',
    'two_factor_reset'        => 'Poništi dvoznamenkasti faktor',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Uspješno resetira dva faktorska uređaja',
    'two_factor_reset_error'          => 'Dva faktora resetiranja uređaja nije uspjela',
    'two_factor_enabled_warning'        => 'Omogućivanje dva faktora ako trenutačno nije omogućeno odmah će vas prisiliti na provjeru autentičnosti pomoću uređaja za prijavu na Google Auth. Moći ćete upisati svoj uređaj ako ga trenutno niste upisali.',
    'two_factor_enabled_help'        => 'To će uključiti autentifikaciju s dva faktora pomoću Google Autentifikatora.',
    'two_factor_optional'        => 'Selektivan (Korisnici mogu omogućiti ili onemogućiti ako su dopušteni)',
    'two_factor_required'        => 'Obavezno za sve korisnike',
    'two_factor_disabled'        => 'onesposobljen',
    'two_factor_enter_code'	=> 'Unesite dvoznamenkasti kôd',
    'two_factor_config_complete'	=> 'Pošaljite šifru',
    'two_factor_enabled_edit_not_allowed' => 'Vaš administrator vam ne dopušta uređivanje ove postavke.',
    'two_factor_enrollment_text'	=> "Potrebna je autentikacija dva faktora, međutim vaš uređaj još nije upisan. Otvorite aplikaciju Google autentifikator i skenirajte QR kôd u nastavku da biste registrirali svoj uređaj. Nakon što upišete uređaj, unesite kôd u nastavku",
    'require_accept_signature'      => 'Potražite potpis',
    'require_accept_signature_help_text'      => 'Ako omogućite tu značajku, korisnici će se morati fizički odjaviti pri prihvaćanju imovine.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'lijevo',
    'right'        => 'pravo',
    'top'        => 'vrh',
    'bottom'        => 'dno',
    'vertical'        => 'vertikala',
    'horizontal'        => 'vodoravan',
    'unique_serial'                => 'Jedinstveni serijski brojevi',
    'unique_serial_help_text'                => 'Uključivanje ovog checkbox-a će osigurati jedinstvenost serijskih brojeva imovine',
    'zerofill_count'        => 'Duljina oznaka za imovinu, uključujući nulte punjenje',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Barcodes &amp; label settings',
    'purge_help' => 'Obrišite izbrisane zapise',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'ldap_test_label' => 'Test LDAP Sync',
    'ldap_test_login' => ' Test LDAP Login',
    'ldap_username_placeholder' => 'LDAP Username',
    'ldap_password_placeholder' => 'LDAP Password',
    'employee_number' => 'Broj djelatnika',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'status_label_name' => 'Status Label Name',
    'super_admin_only'  => 'Super Admin Only',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Titula',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => 'Vrsta 2D barkod',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The data that will be contained in the 2D barcode',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'purge_barcodes' => 'Purge Barcodes',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'asset_id'              => 'Asset ID',
    'data'               => 'Data',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'test_mail' => 'Test Mail',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Custom Default Avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'How many days before the expected checkin of an asset should it be listed in the "Due for checkin" page?',
    'no_groups' => 'No groups have been created yet. Visit <code>Admin Settings > Permission Groups</code> to add one.',
    'text' => 'Text',

    'username_formats' => [
        'username_format'		=> 'Format korisničkog imena',
        'firstname_lastname_format'	=> 'Prezime prezime (jane.smith)',
        'first_name_format'	        => 'First Name (jane)',
        'last_name_format'		=> 'Last Name (doe)',
        'filastname_format'			=> 'First Initial Last Name (jsmith)',
        'lastnamefirstinitial_format' =>  'Last Name First Initial (smithj)',
        'firstname_lastname_underscore_format' => 'First Name Last Name (jane_smith)',
        'firstinitial_lastname' => 'First Initial Last Name (j.smith)',
        'lastname_firstinitial' => 'Last Name First Initial (smith_j)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j)',
        'firstnamelastname'     => 'First Name Last Name (janesmith)',
        'firstnamelastinitial'  => 'First Name Last Initial (janes)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane)',
    ],

    'email_formats' => [
        'email_format'			=> 'Format e-pošte',
        'firstname_lastname_format'	=> 'Prezime prezime (jane.smith@example.com)',
        'first_name_format'		=> 'Ime (jane@example.com)',
        'last_name_format'		=> 'Last Name (doe@example.com)',
        'filastname_format'			=> 'Prvo početno prezime (jsmith@example.com)',
        'lastnamefirstinitial_format' =>  'Prezime Prvo slovo imena (smithj@example.com)',
        'firstname_lastname_underscore_format' => 'Ime Prezime (jane_smith@example.com)',
        'firstinitial_lastname' => 'Inicijal imena i prezime (i.ivic)',
        'lastname_firstinitial' => 'Last Name First Initial (smith_j@example.com)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j@example.com)',
        'firstnamelastname'     => 'First Name Last Name (janesmith@example.com)',
        'firstnamelastinitial'  => 'First Name Last Initial (janes@example.com)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane@example.com)',
    ],



    'logo_labels' => [
        'acceptance_pdf_logo'       => 'PDF Logo',
        'email_logo'                => 'Email Logo',
        'label_logo'                => 'Label Logo',
        'logo'                      => 'Site Logo',
        'favicon'                   => 'Favicon',
    ],

    'logo_help' => [
        'email_logo_size'       => 'Square logos in email look best. ',
    ],

    'logo_option_types' => [
        'text' => 'Text',
        'logo' => 'Logo',
        'logo_and_text' => 'Logo and Text',
    ],


    'legends' => [
        'scoping' => 'Scoping',
        'formats' => 'Default Formats',
        'profiles' => 'User Profiles',
        'eula' => 'EULA & Acceptance Preferences',
        'misc_display' => 'Miscellaneous Display Options',
        'email' => 'Email Preferences',
        'checkin' => 'Checkin Preferences',
        'dashboard' => 'Login & Dashboard Preferences',
        'misc' => 'Miscellaneous',
        'logos' => 'Logos & Display',
        'colors' => 'Colors & Skins',
        'footer' => 'Footer Preferences',
        'security' => 'Security Preferences',
        'general' => 'General',
        'intervals' => 'Intervals & Thresholds',
    ],


    /* Keywords for settings overview help */
    'keywords' => [
        'brand'             => 'footer, logo, print, theme, skin, header, colors, color, css',
        'general_settings'  => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
        'groups'            => 'permissions, permission groups, authorization',
        'labels'            => 'labels, barcodes, barcode, sheets, print, upc, qr, 1d, 2d',
        'localization'      => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
        'php_overview'      => 'phpinfo, system, info',
        'purge'             => 'permanently delete',
        'security'          => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
        'notifications'     => 'alerts, email, notifications, audit, threshold, email alerts, cc',
    ],

];
