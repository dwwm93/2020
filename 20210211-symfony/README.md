# Projet Symfony GRETA

## Installation

```sh
composer install
```

## Router PHP pur

```php
$router->get('/', [new UserController(), "login"]);
$func = "get";
$router->$func();
call_user_func_array([$router, $func])
```

```yaml
routes:
  - method: GET
    route: /
    controller: user
    method: login
```