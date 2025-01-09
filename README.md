
# Introduction

A repository for a Docker managed Caddy-WP-MariaDB application.

## Docker Images/Features

- Caddy == caddy:2.8.4-alpine
- Wordpress == wordpress:6.7.1-php8.1-fpm-alpine
- MariaDB == mariadb:11.6

## Repository Structure

```
.
├── README.md
├── compose.yaml
└── conf
    ├── Caddyfile
    ├── mariadb.env
    ├── my.conf
    ├── uploads.ini
    ├── wp.env
    ├── (wp_keys.txt)
    └── wp_keys.txt.sample
```

## Installation

1. Clone the repository.
```
git clone https://github.com/Nakiri-Joe/docker.caddy-wp-mariadb.git
```

2. Copy the file `wp_keys.txt.sample` as `wp_keys.txt`.
```
cp conf/wp_keys.txt.sample conf/wp_keys.txt
```
- The WP container uses this file to load in security keys as secrets.
```
# compose.yaml

...
  wordpress:
    container_name: "docker-wp"
    ...
    env_file:
      - ./conf/wp.env
    secrets:
      - wp_keys

...
secrets:
  wp_keys:
    file: ./conf/wp_keys.txt
...
```

3. Edit the `wp_keys.txt` file according to the
[WP secret key API site](https://api.wordpress.org/secret-key/1.1/salt/).
- By default the keys are empty.
```
# wp_keys.txt.sample

AUTH_KEY            = ""
...
```
- Access the API site (<https://api.wordpress.org/secret-key/1.1/salt/>).
```
# example

define('AUTH_KEY',         'H^|kDbdv^-F ...');
...
```
- Replace the keys with respective values.
```
# wp_keys.txt

AUTH_KEY            = "H^|kDbdv^-F ..."
...
```

4. Create and start containers with Docker Compose.
```
docker compose up
```

5. Open the browser and access the WP install page.  
URL: `http://localhost:8000/wp-admin/install.php`  

From here on out, it is all WordPress.


### Usage (Docker Commands)

Create and start containers.
```
docker compose up
```

Stop and remove containers, networks.
```
docker compose down
```

WP admin URL: `http://localhost:8000/wp-admin`
