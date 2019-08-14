build:
	docker-compose -f docker-compose.base.yml build base && \
	docker-compose -f docker-compose.base.yml build nginx
