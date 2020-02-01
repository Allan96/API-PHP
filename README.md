# REST API EM PHP
**Representational State Transfer**, abreviado como REST, não é uma tecnologia, uma biblioteca, e nem tampouco uma arquitetura, mas sim um modelo a ser utilizado para se projetar arquiteturas de software distribuído, baseadas em comunicação via rede.

## Algumas características da API Rest

### Utilize URIs legíveis

Ao definir uma URI, utilize nomes legíveis por humanos, que sejam de fácil dedução e que estejam relacionados com o domínio da aplicação. Isso facilita a vida dos clientes que utilizarão o serviço, além de reduzir a necessidade de documentações extensas.

### Utilize o mesmo padrão de URI na identificação dos recurso

***Evite situações como:***
~~http://servicorest.com.br/produto (Singular);~~
~~http://servicorest.com.br/clientes (Plural);~~
~~http://servicorest.com.br/processosAdministrativos (Camel Case);~~
~~http://servicorest.com.br/processos_judidicais (Snake Case).~~

### Evite adicionar na URI a operação a ser realizada no recurso

~~http://servicorest.com.br/produtos/cadastrar;~~
~~http://servicorest.com.br/clientes/10/excluir;~~
~~http://servicorest.com.br/vendas/34/atualizar.~~

### Evite adicionar na URI o formato desejado da representação do recurso

~~http://servicorest.com.br/produtos/xml;~~
~~http://servicorest.com.br/clientes/112?formato=json.~~

### Evite alterações nas URIs

A URI é a porta de entrada de um serviço. Se você a altera, isso certamente causará impacto nos clientes que estavam a utilizando, pois você alterou a forma de acesso a ele. Após definir uma URI e disponibilizar a manipulação de um recurso por ela, evite ao máximo sua alteração.
|MÉTODO|UTILIZAÇÃO|
|--|--|
|GET|Obter os dados de um recurso.|
|POST|Criar um novo recurso.|
|PUT|Substituir os dados de um determinado recurso.|
|PATCH|Atualizar parcialmente um determinado recurso.|
|DELETE|Excluir um determinado recurso.|
|HEAD|Similar ao GET, mas utilizado apenas para se obter os cabeçalhos de resposta, sem os dados em si.|
|OPTIONS|Obter quais manipulações podem ser realizadas em um determinado recurso.|


## Padrão de utilização dos métodos HTTP em um serviço REST
|MÉTODO|URI| UTILIZAÇÃO |
|--|--|--|
|GET|/clientes|Recuperar os dados de todos os clientes.|
|GET|/clientes/id| Recuperar os dados de um determinado cliente.|
|POST|/clientes|Criar um novo cliente.|
|PUT|/clientes/id |Atualizar os dados de um determinado cliente.|
|DELETE|/clientes/id|Excluir um determinado cliente.|




> Todos os direitos reservados dessa explicação sobre APIs REST é para o
> [Blog  Caelum](https://blog.caelum.com.br/rest-principios-e-boas-praticas/)

