# API Flashcards
## Introdução

- Objetivo: Criar uma API RESTful para gerenciar flashcards, permitindo a criação, edição, listagem e revisão de cartões de estudo.
- Escopo: Sistema para usuários criarem baralhos de flashcards, com suporte a revisões e autenticação básica.
- Tecnologias: NestJS, TypeScript, banco de dados (a definir: PostgreSQL/MySQL/MongoDB), documentação com Swagger.
- Público-alvo: Estudantes e desenvolvedores interessados em um sistema de estudo com flashcards.

## Requisitos Funcionais

- RF1: O sistema deve permitir que usuários criem, editem, listem e excluam flashcards.
- RF2: Usuários devem poder organizar flashcards em baralhos (decks).
- RF3: O sistema deve suportar autenticação de usuários para proteger dados pessoais.
- RF4: Usuários devem poder marcar flashcards como revisados e registrar o progresso.
- RF5: A API deve fornecer endpoints para buscar flashcards por baralho ou categoria.

## Requisitos Não Funcionais

- RNF1: A API deve responder às requisições em menos de 2 segundos em condições normais.
- RNF2: O sistema deve ser escalável para suportar até 20 usuários simultâneos.
- RNF3: A API deve ser documentada usando OpenAPI/Swagger para facilitar o uso.
- RNF4: Os dados devem ser armazenados de forma segura, com senhas criptografadas.
- RNF5: O código deve seguir padrões de clean code e ser modular para facilitar manutenção.

## Regras de Negócio

- RN1: Um flashcard deve conter, no mínimo, um lado frontal (pergunta) e um lado traseiro (resposta).
- RN2: Apenas o criador de um baralho pode editá-lo ou excluí-lo.
- RN3: Um usuário deve estar autenticado para acessar, criar ou modificar flashcards.
- RN4: Flashcards podem ser associados a uma categoria ou baralho, mas isso é opcional.
- RN5: O sistema deve permitir revisões espaçadas, sugerindo cartões com base em um intervalo de tempo.

## Casos de Uso

### CU1: Criar Flashcard
- Ator: Usuário autenticado.
- Descrição: O usuário cria um novo flashcard com pergunta e resposta, opcionalmente associando a um baralho.
- Pré-condição: Usuário logado.
- Pós-condição: Flashcard salvo no banco de dados e retornado na resposta da API.


### CU2: Listar Flashcards
- Ator: Usuário autenticado.
- Descrição: O usuário lista todos os flashcards de um baralho ou de sua conta.
- Pré-condição: Usuário logado.
- Pós-condição: Lista de flashcards retornada.


### CU3: Revisar Flashcard
- Ator: Usuário autenticado.
- Descrição: O usuário marca um flashcard como revisado e registra o nível de dificuldade.
- Pré-condição: Flashcard existe e pertence ao usuário.
- Pós-condição: Progresso salvo e próxima revisão agendada.


### CU4: Autenticar Usuário
- Ator: Usuário.
- Descrição: O usuário faz login com e-mail e senha para acessar a API.
- Pré-condição: Usuário cadastrado.
- Pós-condição: Token JWT retornado para autenticação em requisições futuras.
