# Docker + XDebug + Apple Macintosh
## Example for configuring xdebug with PHPStorm and Docker nginx/php-fpm environment
### Important IDE and Environment Setup:

**Edit /etc/hosts** on the host machine:

A the nginx configuration responds to a specific hostname.
- Add: ```127.0.0.1 php-docker.local``` to match nginx.conf

**Create a loopback interface alias address**: ```sudo ifconfig en0 alias 10.254.254.254 255.255.255.0```

**Configure a php server in PHPStorm**:

Preferences -> Languages & Frameworks -> PHP -> Servers
- Name: ```php```
- Host: ```10.254.254.254``` (same loopback alias as in previous step)
- Port: ```8080``` (or whatever the public port is, I think)
- Debugger: ```Xdebug```
- Use port mappings: use judgment? For this example I mapped project's app folder to server's /app folder - more complicated projects might be more complicated.
    
**Add a Debug run configuration**:
- PHP Remote Debug
- Name: ```my xdebug```
- Server: ```php``` (specify the one you configured)
- IDE Key: ```PHPSTORM```

### How to debug

Once the IDE and environment are configured, do a ```docker-compose up``` and then click the "telephone" icon next to the debug icon on the task runner tool. Put a breakpoint in the code, and then execute a page request. Code should halt execution at your breakpoint and you should be able to do debuggy things like you would expect.

References:
- http://www.arroyolabs.com/2016/10/docker-xdebug/
- https://github.com/bfellows37/Expressive-Skeleton
- http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/
