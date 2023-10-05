# symfony

## Commands

### Server launch
symfony server:start -d

### Database launch and health check
docker compose up -d
docker compose ps

### Migrations

symfony console make:migration
symfony console doctrine:migrations:migrate 