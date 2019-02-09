H1 Docker
В папках apache, db, elasticsearch, filebeat, jenkins, kibana, logstash, nginx хранятся настройки и Dockerfile для сборки контейнеров.
---
В папке certs хранятся сертификаты, для доступа к локальному репозиторию, хранящему docker images проэкта.
---
В папке playbook хранятся файлы для автоматизированного развертывания копии проекта при помощи ansible-playbook
---
docker-compose - файл запуска проекта в контейнерах
rancher-compose - мульти-хостовая версия docker-compose для старта проекта при создании контейнера.
---
Подключение новой ноды к хосту rancher является одной из задач ansible playbook