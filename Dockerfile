# syntax=docker/dockerfile:1

# 1) PHP dependencies — SKIP this stage if you commit the kirby/ folder
#    directly and don't use Composer.
FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist
COPY . .
RUN composer dump-autoload --optimize --no-dev

# 2) Front-end assets (tsc + Vite)
FROM node:22 AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci
COPY . .
RUN npm run build

# 3) Runtime
FROM dunglas/frankenphp:php8.3 AS runtime
RUN install-php-extensions gd intl opcache \
    && printf "opcache.enable=1\nopcache.memory_consumption=128\n" \
    > "$PHP_INI_DIR/conf.d/zz-opcache.ini"
WORKDIR /app

# App source
COPY . .
# Composer deps (drop this line if you skipped stage 1)
COPY --from=vendor /app/vendor ./vendor
# Compiled assets — change "dist" to match your Vite build.outDir
COPY --from=assets /app/dist ./dist

# Ensure the directories Kirby writes to exist
RUN mkdir -p content media site/accounts site/sessions site/cache

COPY Caddyfile /etc/frankenphp/Caddyfile
EXPOSE 80