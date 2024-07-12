1.	Baixar o projeto git clone https://github.com/thyago666/testeHora.git
2.	Abrir o projeto com o visual Studio code ou alguma IDE de sua preferencia
3.	Configurar o .env com as credenciais do seu banco
4.	Acessar o terminal do VSCode e digitar o comando "composer install" (se der erros de avisos, acessar o php.ini do xampp e habilitar a opcao extension=zip)
5.	Pelo terminal do VScode dar o comando "php artisan key:generate"
6.	Criar a base de dados no postgree, no meu caso chamada "teste"
7.	Comando docker-compose up -d --build
8.	Rodar as migrate php artisan migrate
9.	Executar o comando "PHP artisan serve" no terminal do VS Code
10.	Abrir o postman e criar uma collection (botão new) e importar a collection dos endpoints (pasta dados dentro do projeto 'testeHorario.postman_collection.json')
11.	Executar o primeiro endpoint pelo postman mehotd[POST] - (http://127.0.0.1:8000/api/post)
12.	Executar o segundo endpoint pelo postman mehotd[GET] - (http://127.0.0.1:8000/api/estrategiaWMS/1/09/30/40)

