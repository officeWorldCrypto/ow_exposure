## Presentation

This software is used for distributing articles and files to website or software with officeWorld integration. Logically, all data has been linked to a workspace, and the system manager can make changes in just one software and reflect all information in others.


*Configuração básica*

**Inicio**

Não existe pasta public, portanto o responsável pelo inicio da apicação é o próprio index.php que esta na pasta raiz.

**Instalação**

Configure os seguintes arquivos para rodar a aplicação:
- jwtAuth.php
- env.php

Crie o banco de dados conforme o indicado na pasta database:
- CREATE.sql

**Segurança**

Por questões de segurança o autenticador de jwt do tuupola considera os parâmetros "relax" que aqui está configurado no arquivo: 
<pre>src/jwtAuth.php</pre>

Portanto, o mesmo deve ser modificado para aceitar o server onde estiver a 
aplicação, caso contrário ocorrerá um erro 500

**Endpoints**

*/login*
- [POST] /login

`@require: email, password`

*/city*
- [GET] /articles?limit=0

`@require: limit`

- [POST] /articles
- [PUT] /articles
- [DELETE] /articles

*/version*
- [GET] /version


**Possibilidades**

- Criação de um aquivo .env para cada instituição
- Criação de uma base de dados para cada instituição
- Repetição de perfil e dados das pessoas em cada base de instituição, mas, com indicação de poderes diferentes conforme instituição
- instituição localizada por .instituicao
- Grupo localizado por /grupo
- Pessoa localizada por @pessoa
- Tag localizada por #

Exemplos de uso (usecase - cadastro company):
.company1 <- id de empresa 

Exemplos de uso (usecase - cadastro user):
Usuarios podem se cadastrar de muitas formas e os mesmos tem um status active (true/false)
.ws @valmorflores (Visualiza todos de todos os grupos?, Todos do mesmo grupo?) 
.ws.suporte - Visualiza outros do mesmo grupo? "Sim"
.ws.comercial - Visualiza outros do mesmo grupo? "Sim"
.ws.fornecedores - Visualiza outros do mesmo grupo? "Não"

.cocacola.brasil.comercial
.cocacola.brasil.financeiro
.cocacola.brasil.fornecedores
@valmorflores power: .ws.proprietario, .ws.admin, .ws.suporte, .cosems.admin
@lisiwfagundes power: .ws.cliente, .rs.saude.daha.admin, .rs.saude, 
@3r power: .ws.fornecedores
@gustavoflores power: ws.faturamento, ws.admin,

Exemplo de grupo:
/grupoEmpresaFinalDeAno - 
    ^^@valmorflores - Administrador
    +@pedro - Voice
    @user - somente fala individualmente
Exemplo de grupo global da empresa:
/.ws

Exemplo de assunto individual _/.ws@valmorflores: Informação que seja restrita a pessoa, mas, com relação com uma empresa apenas. No caso _ inibe para outros;

Exemplo de vinculo #informacao
.ws@valmorflores

////// Cadastro de novos usuários só deve funcionar por convite //////



**Distribuição**

*licença Mozilla v2.*

Este aplicativo é elaborado e distribuido sob licença Mozilla v1.1.

