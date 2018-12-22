# docker
Ambiente de desenvolvimento 

**Pré-requisitos:** Ter o Docker e Docker-compose instalados.

Acesse até o diretório do ambiente correspondente e digite os comandos abaixo:
```
docker-compose build
docker-compose up -d
```

Com isso irá fazer o build e subir o ambiente. Inclui arquivo de exemplo de conexão com o banco de dados no ambiente correspondente para averiguar.
Caso tenha mantido o mesmo credenciais e nome do banco de dados, então deve funcionar, porém caso tenha alterado, terá que obviamente alterar no arquivo conectaBanco.php a nova credenciais e nome do banco de dados.

No browser http://localhost:8080/conectaBanco.php
Também tem o arquivo info.php http://localhost:8080/info.php

PS: Importante não ter serviço MySQL e PostgreSQL em execução na máquina HOST, pois se estiver em execução poderão ocorrer conflitos de porta com o container, pois mantive a mesma porta dos serviços MySQL e PostgreSQL.

Feito!
