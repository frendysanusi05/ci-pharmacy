setup:
	@make build
	@make run
	@make composer-setup
	@make database-migrate
	@echo Setup successful, website running on localhost:8080
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
run:
	docker-compose up -d
copy-env:
	cp .env.example .env
composer-setup:
	docker exec ci-pharmacy-app-1 bash -c "composer install"
database-setup:
	docker exec -i ci-pharmacy-database-1 mysql -u root -e "CREATE DATABASE pharmacy;"
	docker exec -i ci-pharmacy-database-1 mysql -u root -e "USE pharmacy;"
	echo Database pharmacy created;
database-migrate:
	echo Starting database migration
	docker exec ci-pharmacy-app-1 bash -c "yes | php spark migrate:refresh"
	echo Finished database migration
	echo Starting database seeding
	docker exec ci-pharmacy-app-1 bash -c "php spark db:seed DataSeeder"
	echo Finished database seeding