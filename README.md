# twofactor_duo
Experimental Duo two-factor auth provider for Nextcloud. Tested working up to 25.0.1 RC1

## Configuration

Add your duo configuration to your Nextcloud's `config/config.php` file:

```
'twofactor_duo' => [
    'client_id' => 'xxx',
    'client_secret' => 'yyy',
    'api_hostname' => 'api.host.from.duo',
    'redirect_uri' => 'https://nextcloud.local/index.php/login/challenge/duo',
  ],
```

Make sure that the redirect_uri matches the URL under which the Duo challenge is accessed.
