# Docker + XDebug + Apple Macintosh
## Example for configuring xdebug with PHPStorm and Docker nginx/php-fpm environment
### Important IDE and Environment Setup:

#### Preferences -> Languages and Frameworks -> PHP -> DBGp Proxy
- IDE key: PHPSTORM
- Host: 10.254.254.254
- Port: 9000

#### Preferences -> Languages and Frameworks -> PHP -> Servers
- Name: docker-local
- Host: 10.254.254.254
- Port: 8080
- Debugger: Xdebug
- Use path mappings: app -> /app

#### Preferences -> Languages and Frameworks -> PHP -> Test Frameworks
- (Add new)
- CLI interpreter: click the ellipsis to set up for docker-compose in this repo
- PHPUnit library: Path to phpunitnit.phar
- Path to phpunit.phar: /usr/local/bin/phpunit

#### Run configurations -> (create new) PHP Remote Debug
- Name: xdebug
- Filter debug connection by IDE key: checked
- Server: docker-local
- IDE key: PHPSTORM

#### Run configurations -> (create new) Docker -> docker-compose
- Name: docker-compose
- Server: Docker (maybe need to create new)
- Compose file: docker-compose.yml (the one in this repo)

#### Run configurations -> (create new) PHPUnit
- Name: test
- Test scope: directory
- Directory: [/path/to/repo]/app/test
- Test runner options: —bootstrap /app/test_autoload.php

References:
- http://www.arroyolabs.com/2016/10/docker-xdebug/
- https://github.com/bfellows37/Expressive-Skeleton
- http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/
