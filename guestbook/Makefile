SHELL := /bin/bash
tests:
	symfony console doctrine:database:drop --force --env=test || true
	symfony console doctrine:database:create --env=test
	symfony console doctrine:migrations:migrate -n --env=test
	symfony console doctrine:fixtures:load -n --env=test
	symfony php bin/phpunit $(MAKECMDGOALS)

fixer:
	symfony php vendor/bin/phpstan analyse --level max
	symfony php vendor/bin/php-cs-fixer fix
  
.PHONY: tests