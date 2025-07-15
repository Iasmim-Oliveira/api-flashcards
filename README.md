# Flashcard API

## Descrição
Este projeto é uma API desenvolvida com **Laravel** para gerenciamento de flashcards, com foco em aprendizado dinâmico e revisão espaçada. A API oferece endpoints para criação, listagem, atualização e exclusão de flashcards, sendo ideal para integração com aplicações web voltadas para estudo e memorização.

## Tecnologias Utilizadas
- **PHP**: Linguagem principal do backend.
- **Laravel**: Framework PHP para construção da API.
- **Blade**: Motor de templates para renderização de views (quando aplicável).
- **MySQL**: Banco de dados relacional para armazenamento dos flashcards.
- **Docker**: Utilizado para containerização e facilitar o ambiente de desenvolvimento.

## Funcionalidades
- **Criação de Flashcards**: Permite criar novos flashcards com frente e verso (pergunta e resposta).
- **Listagem de Flashcards**: Retorna uma lista de flashcards.
- **Atualização de Flashcards**: Permite editar o conteúdo de flashcards existentes.
- **Exclusão de Flashcards**: Remove flashcards do sistema. (em construção)
- **Revisão Espaçada**: Suporte a lógica de revisão espaçada para otimizar o aprendizado. (em construção)

## Requisitos
- PHP >= 8.1
- Composer
- Docker e Docker Compose
- MySQL
- Laravel 10.x

## Instalação
Siga os passos abaixo para configurar o projeto localmente:

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/Iasmim-Oliveira/api-flashcards.git
   cd api-flashcard
   ```

2. **Instale as dependências do PHP**:
   ```bash
   composer install
   ```

3. **Configure o ambiente**:
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure as variáveis de ambiente no arquivo `.env`, incluindo as credenciais do banco de dados MySQL.

4. **Suba os containers com Docker**:
   ```bash
   docker-compose up -d
   ```

5. **Execute as migrações do banco de dados**:
   ```bash
   php artisan migrate
   ```

6. **Gere a chave da aplicação**:
   ```bash
   php artisan key:generate
   ```

7. **Inicie o servidor local**:
   ```bash
   php artisan serve
   ```

A API estará disponível em `http://localhost:8000`.

## Endpoints
Abaixo estão os principais endpoints da API:

| Método | Endpoint                     | Descrição                          |
|--------|------------------------------|------------------------------------|
| POST   | `/challenge/store`           | Cria um novo desafio            |
| POST   | `/user-response`             | Armazena as respostas do usuário no desafio |
| GET    | `/challenge/{id}/responses`  | Exibe todas as respostas do desafio |

## Contribuição
1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`).
3. Commit suas alterações (`git commit -m 'Adiciona nova feature'`).
4. Envie para o repositório remoto (`git push origin feature/nova-feature`).
5. Abra um Pull Request.

## Licença
Este projeto está licenciado sob a [MIT License](LICENSE).
