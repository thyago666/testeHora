Baixar o projeto git clone https://github.com/thyago666/testeHora.git
Abrir o projeto com o visual Studio code ou alguma IDE de sua preferencia
Configurar o .env com as credenciais do seu banco
Acessar o terminal do VSCode e digitar o comando "composer install" (se der erros de avisos, acessar o php.ini do xampp e habilitar a opcao extension=zip)
Pelo terminal do VScode dar o comando "php artisan key:generate"
Criar a base de dados no postgree, no meu caso chamada "teste"
Comando docker-compose up -d --build
Rodar as migrate php artisan migrate
Executar o comando "PHP artisan serve" no terminal do VS Code
Abrir o postman e criar uma collection (botão new) e importar a collection dos endpoints (pasta dados dentro do projeto 'testeHorario.postman_collection.json')
Executar o primeiro endpoint pelo postman mehotd[POST] - (http://127.0.0.1:8000/api/post)
Executar o segundo endpoint pelo postman mehotd[GET] - (http://127.0.0.1:8000/api/estrategiaWMS/1/09/30/40)
