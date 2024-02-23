

## Sobre D-Social Learning

O projeto é um web service para um sistema de propagação de cursos onlines. Existe o usuário Admin que controla o sistema, como adicionar categorias. o Criador que cria os cursos, insere módulos e aulas. O Usuário estudante, que consumirá esse conteúdo.

O projeto está rodando em Docker, por meio do Laravel Sail, utilizando Laravel 10 e MySQL.


## Resumo Técnico

Para o desenvolvimento, foi utilizado os conceitos de migrations e relacionamentos pelos Model. A lógica de negócios foi separada dos Controllers, que assumem apenas a função receber e processar as requisições HTTP.
Sendo este, o principio da responsabilidade única descrita no SOLID.

Para as regras de negócios foi utilizado o design pattern Service Layer. Os services assumem a lógica e em forma de injeção de dependência são utilizados nos controladores.

Também foi utilizado o conceito de filas, por meio do redis.
Sempre que um usuário novo é cadastrado é disparado um e-mail de boas vindas.
