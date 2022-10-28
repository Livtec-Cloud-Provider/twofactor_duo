# twofactor_duo
Experimental Duo two-factor auth provider for Nextcloud. Tested working up to 25.0.1 RC1

## Configuration
Add your duo configuration to your Nextcloud's `config/config.php` fils:
```
'twofactor_duo' => [
    'IKEY' => 'xxx',
    'SKEY' => 'yyy',
    'HOST' => 'zzz',
    'AKEY' => '123',
  ],
```

AKEY can be generated using the command ```dd if=/dev/random count=1 | sha256sum```
