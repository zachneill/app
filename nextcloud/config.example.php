<?php
$CONFIG = array (
  // Commented out values are automatically generated and differs between instances, specifically instanceid, passwordsalt, secret, and dbpassword 
  // 'htaccess.RewriteBase' => '/',
  // 'memcache.local' => '\\OC\\Memcache\\APCu',
  // 'apps_paths' => 
  // array (
  //   0 => 
  //   array (
  //     'path' => '/var/www/html/apps',
  //     'url' => '/apps',
  //     'writable' => false,
  //   ),
  //   1 => 
  //   array (
  //     'path' => '/var/www/html/custom_apps',
  //     'url' => '/custom_apps',
  //     'writable' => true,
  //   ),
  // ),
  // 'upgrade.disable-web' => true,
  // 'instanceid' => 'REDACTED',
  // 'passwordsalt' => 'REDACTED',
  // 'secret' => 'REDACTED',
  // 'trusted_domains' => 
  // array (
  //   0 => 'nextcloud.mgt.zachneill.com',
  // ),
  // 'datadirectory' => '/var/www/html/data',
  // 'dbtype' => 'mysql',
  // 'version' => '33.0.2.2',
  // 'overwrite.cli.url' => 'http://nextcloud.mgt.zachneill.com',
  // 'dbname' => 'nextcloud',
  // 'dbhost' => 'db',
  // 'dbtableprefix' => 'oc_',
  // 'mysql.utf8mb4' => true,
  // 'dbuser' => 'nextcloud',
  // 'dbpassword' => 'REDACTED',
  // 'installed' => true,
  // 'allow_user_to_change_display_name' => false,
  // 'lost_password_link' => 'disabled',
  'overwriteprotocol' => 'https',
  'oidc_login_provider_url' => 'https://auth.mgt.zachneill.com',
  'oidc_login_client_id' => 'nextcloud',
  'oidc_login_client_secret' => 'REDACTED',
  'oidc_login_auto_redirect' => false,
  'oidc_login_end_session_redirect' => false,
  'oidc_login_button_text' => 'Log in with Authelia',
  'oidc_login_hide_password_form' => true,
  'oidc_login_use_id_token' => false,
  'oidc_login_attributes' => array (
      'id' => 'preferred_username',
      'name' => 'name',
      'mail' => 'email',
      'groups' => 'groups',
      'is_admin' => 'is_nextcloud_admin',
  ),
  'oidc_login_default_group' => 'oidc',
  'oidc_login_use_external_storage' => false,
  'oidc_login_scope' => 'openid profile email groups nextcloud',
  'oidc_login_proxy_ldap' => false,
  'oidc_login_disable_registration' => false,
  'oidc_login_redir_fallback' => false,
  'oidc_login_tls_verify' => true,
  'oidc_create_groups' => false,
  'oidc_login_webdav_enabled' => false,
  'oidc_login_password_authentication' => false,
  'oidc_login_public_key_caching_time' => 86400,
  'oidc_login_min_time_between_jwks_requests' => 10,
  'oidc_login_well_known_caching_time' => 86400,
  'oidc_login_update_avatar' => false,
  'oidc_login_code_challenge_method' => 'S256'
);