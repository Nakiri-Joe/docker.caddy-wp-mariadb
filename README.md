
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
    └── wp.env
```

## Installation

1. Clone the repository.
```
git clone https://github.com/Nakiri-Joe/docker.caddy-wp-mariadb.git
```

2. Edit `wp.env`.
- By default the security keys are empty.
```
...
WORDPRESS_AUTH_KEY=''
WORDPRESS_SECURE_AUTH_KEY=''
...
```
- Access the API site (<https://api.wordpress.org/secret-key/1.1/salt/>).
```
# example

define('AUTH_KEY',         'H^|kDbdv^-F ...');
...
```
- Replace the keys with the respective values.
```
...
WORDPRESS_AUTH_KEY='H^|kDbdv^-F ...'
...
```

3. Create and start containers with Docker Compose.
```
docker compose up
```

4. Open the browser and access the WP install page.  
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
