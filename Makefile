docker-build:
	docker build --tag=we30-landing  site

docker-run:
	docker run -d --name landing -p 8080:80 we30-landing

docker-stop:
	docker stop landing

docker-images:
	docker images | grep we30-landing

docker-rm:
	docker rm landing

docker-rerun: docker-stop docker-rm docker-run

docker-ps:
	docker ps