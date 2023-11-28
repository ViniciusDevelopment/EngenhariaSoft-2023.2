# Relatório Especificação de Requisitos SKILLSYNC

## Engenharia de software 2023.2 | Universidade Federal do Tocantins - Palmas, 2023

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2023.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto, além do método Kanban para gestão ágil, por meio da ferramenta Trello. Todo o trabalho será desenvolvido no formato markdown.

## Escopo do projeto

### Descrição do projeto
Desenvolver uma plataforma de prestação de serviços que conecta prestadores de serviços a usuários, permitindo que os prestadores ofereçam seus serviços e os usuários solicitem os mesmos. A plataforma deve permitir que os prestadores de serviços criem perfis com informações pessoais, habilidades e preços, além de possibilitar a criação de perfis de usuários com informações de contato e preferências. Os usuários devem ser capazes de buscar e filtrar prestadores com base em critérios como localização e classificações, enviar solicitações de serviços e visualizar históricos de transações. Além disso, o sistema deve suportar a avaliação e revisão de prestadores e oferecer funcionalidades de pagamento seguro.

### Objetivos

* Conectar prestadores de serviços a usuários, facilitando a oferta e solicitação de serviços.
* Permitir que prestadores de serviços criem perfis detalhados com informações pessoais, habilidades e preços.
* Possibilitar aos usuários a criação de perfis com informações de contato e preferências.
* Oferecer recursos de busca e filtragem de prestadores com base em critérios como localização e classificações.
* Permitir que os usuários enviem solicitações de serviços de forma eficiente.
* Manter registros de transações para que os usuários possam acessar seu histórico.
* Facilitar a avaliação e revisão de prestadores de serviços.
* Garantir um sistema de pagamento seguro para todas as transações.
* Organizar o desenvolvimento do projeto em iterações definidas.

### Requisitos Funcionais
Os **Requisitos Funcionais** são uma lista dos recursos e funcionalidades específicas que o sistema, produto ou serviço deve oferecer. Isso pode incluir funcionalidades como login de usuário, solicitação de serviços, geração de relatórios, etc.

### Requisitos não funcionais
Requisitos que não estão diretamente relacionados a funcionalidades específicas, mas são igualmente importantes. Isso pode incluir requisitos de desempenho, segurança, escalabilidade, usabilidade, entre outros.
**RNF01 - Usabilidade:**<br/>

* **RNF02 - Desempenho:** <br/>

* **RNF03 - Segurança:**<br/>

* **RNF04 - Escalabilidade:**<br/>

* **RNF05 - Confiabilidade:** <br/>

* **RNF06 - Manutenibilidade:**<br/>

* **RNF07 - Compatibilidade do Navegador:**<br/>

* **RNF08 - Acessibilidade:** <br/>

* **RNF09 - Disponibilidade:**<br/>

* **RNF10 - Proteção de Dados:** <br/>

### Atores
**Usuário:** Este ator possui um nível de acesso básico dentro da aplicação. Suas principais ações incluem visualizar os serviços disponíveis e solicitar a prestação desses serviços.

**Prestador de Serviço:** Este ator tem todas as funcionalidades de um usuário, com a adição de privilégios adicionais. Além de poder visualizar e solicitar serviços, o prestador de serviço tem a capacidade de adicionar e gerenciar os serviços que oferece. Isso inclui a criação, edição e exclusão de serviços, bem como a definição de preços e informações detalhadas sobre os serviços prestados.

Esses dois atores desempenham papéis distintos no sistema SkillSync, refletindo as diferentes necessidades e responsabilidades de cada grupo de usuários.
### Cronograma

|Período|Ações|
| --------------- | ----------------------------------------------------------------------------------- |
|Semana 1| Inicio do desenvolvimento do Relatório Especificação de Requisitos.|
|Semana 2| Conclusão e apresentação do Relatório Especificação de Requisitos.|
|Semana 3| Inicio do desenvolimento dos requisitos da 1º iteração.|
|Semana 4| Conclusão do desenvolvimento da 1º iteração e apresentação dos resultados obtidos.|

### Metodologia de Desenvolvimento
O Kanban será usado para organizar e gerenciar o fluxo de trabalho da equipe. Criamos um quadro Kanban que representa o progresso do projeto, com colunas como "A fazer", "Em progresso" e "Concluído". As tarefas do Backlog serão adicionadas ao quadro e movidas conforme o progresso.
O desenvolvimento seguirá a arquitetura MVC (Model-View-Controller) em PHP. Cada iteração abordará um conjunto específico de requisitos funcionais e será implementada seguindo os princípios do MVC.
No final de cada iteração, a equipe realizará uma retrospectiva para avaliar o processo e identificar áreas de melhoria. Os aprendizados serão aplicados nas próximas iterações.
Após a conclusão de cada iteração, haverá uma revisão interna e externa para garantir a qualidade do código e da funcionalidade implementada. Os feedbacks serão incorporados para refinamento contínuo.

### Tecnologias e Ferramentas

Neste projeto, serão utilizadas várias tecnologias e ferramentas para o desenvolvimento, divididas entre o back-end, front-end e o sistema de gerenciamento de banco de dados (SGBD).

**Back-End:**<br/>
* Linguagem de Programação PHP: O back-end será desenvolvido utilizando PHP para implementar a lógica de negócios.
* Web Server: Um servidor web, como o Apache, será configurado para hospedar a aplicação PHP.

**Front-End:**<br/>
* HTML (HyperText Markup Language): Para criar a estrutura da interface do usuário e as páginas da web.
* CSS (Cascading Style Sheets): Para estilizar e formatar as páginas da web, garantindo uma aparência atraente e responsiva.
* JavaScript: Será usado para tornar a interface do usuário interativa e dinâmica, lidando com eventos do lado do cliente.

**Banco de Dados:**<br/>
* PostgreSQL: Será usado como o Sistema de Gerenciamento de Banco de Dados (SGBD) principal. O PostgreSQL é um sistema de banco de dados relacional robusto e altamente escalável.

### Critérios de Aceitação
Os critérios de aceitação para este projeto incluem:

* Todas as funcionalidades especificadas nos requisitos funcionais estão implementadas e funcionando corretamente.
* A plataforma passou por testes de qualidade e os bugs foram corrigidos.
* A documentação está completa e bem organizada.
* A equipe apresentou o projeto de forma clara e demonstrou todas as funcionalidades.


### Entregáveis
Os principais entregáveis deste projeto incluem:

*  **Documentação de Requisitos:** Especificação detalhada dos requisitos funcionais e não funcionais do sistema.<br/>
*  **Documentação de Design:** Descrição da arquitetura de software e design da plataforma.<br/>
*  **Código Fonte:** O código-fonte do sistema hospedado no GitHub.<br/>
*  **Relatórios de Progresso:** Relatórios de progresso semanais ou quinzenais para acompanhamento.<br/>
*  **Apresentação Final:** Uma apresentação que destaca as funcionalidades e realizações do projeto.<br/>

### Equipe de Projeto
 [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)<br/>
 <br/>[Raphael Sales de Souza](https://github.com/raphaelsales)<br/>
 <br/>[Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)<br/>
<br/>[Jorge Antonio Motta Braga](https://github.com/jorgespark11)<br/>
<br/>[Wanderson Melo](https://github.com/sadMello)<br/>
<br/>[Pedro Trivelato](https://github.com/Ptrivelato)<br/>
<br/>[Loenis Fernandes](https://github.com/loenisjunior)<br/>

###
## Épicos

### Épico 1: Gerenciamento de Usuário -> RF01, RF02, R03, RF10, RF12.
### Épico 2: Gerenciamento de Serviços -> RF03, RF04, RF08, RF11.
### Épico 3: Gerenciamento de Solicitações de serviços -> RF05, RF06, RF13.
### Épico 4: Avaliação de serviços -> RF09, RF14.

## Iteração 1

- [X] RF01 -  Cadastrar prestador de serviço. [Raphael Sales de Souza](https://github.com/raphaelsales) Revisado por  [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)
- [X] RF02 - Cadastrar usuário. [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/) Revisado por [Raphael Sales de Souza](https://github.com/raphaelsales)
- [X] RF03 -  Realizar Login.  [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/) Revisado por [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)
- [X] RF04 -  Cadastrar serviços. [Pedro Trivelato](https://github.com/Ptrivelato) Revisado por [Jorge Antonio Motta Braga](https://github.com/jorgespark11)
- [X] RF05 -  Buscar serviços por critérios. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Pedro Trivelato](https://github.com/Ptrivelato)
- [X] RF06 - Enviar solicitação de serviço. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Wanderson Melo](https://github.com/sadMello)
- [X] RF07 - Responder solicitação de serviço. [Wanderson Melo](https://github.com/sadMello) Revisado por [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

<br/>

## Iteração 2


- [X] RF08 - Realizar o pagamento seguro pelo serviço prestado [Wanderson Melo](https://github.com/sadMello) Revisado por [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)
- [X] RF09 - Avaliar e revisar prestadores de serviço.  [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/) Revisado por [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)
- [X] RF10 -  Manter perfis de prestadores de serviço atualizados. [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/) Revisado por [Wanderson Melo](https://github.com/sadMello)
- [X] RF11 - Notificar usuários sobre atualizações em solicitações de serviço. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)
- [X] RF12 -  Permitir que os usuários editem seus perfis. [Jorge Antonio Motta Braga](https://github.com/jorgespark11) Revisado por [Jorge Antonio Motta Braga](https://github.com/jorgespark11)
- [X] RF13 -   Implementar funcionalidade de pesquisa avançada de prestadores de serviço. [Pedro Trivelato](https://github.com/Ptrivelato) Revisado por [Raphael Sales de Souza](https://github.com/raphaelsales)
- [X] RF14 -Oferecer suporte a diferentes métodos de pagamento.  [Raphael Sales de Souza](https://github.com/raphaelsales) Revisado por [Pedro Trivelato](https://github.com/Ptrivelato)
<br/>

---
## **RF01 - Cadastrar prestador de serviço**

<br/>

#### Autor: [Raphael Sales de Souza](https://github.com/raphaelsales)

#### Revisor: [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)

<br/>


| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF01 - Cadastrar prestador de serviço;                                                       |
| Resumo          | Cadastrar um prestador de serviço ao sistema; |
| Ator principal  | Prestador de serviço;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                          |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O prestador digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Após preencher seus dados o prestador deve marcar a opção 'sou um prestador de serviços'. |
| Passo 3 | Ao clicar no botão 'cadastrar' no final do formulário, o prestador de serviços é cadastrado. |

<br/>

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Nome  | Sim          | Sim       | Texto        |
| Email             | Sim          | Sim       | Email         |
| Senha            | Sim          | Sim       | Password        |
| Confirmar senha  | Sim          | Não       | Password        |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo prestador de serviço          | Não possui       |
| Realizar login             | Redireciona o prestador para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |

<br/>

### US01 - Cadastrar prestador de serviço

**Prestador de serviços**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto **um prestador de serviços** eu preciso ser capaz de **criar uma conta** para que **eu possa oferecer meus seerviços** | O **prestador de serviços** deve poder se cadastrar no sistema.|

<br />

### Prototipação de telas
**Tela de cadastro com marcação da opção 'Sou um prestador de serviços'**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/b6d7912e-bb58-4063-9207-737a786b53a0)


<br />
---

## **RF02 - Cadastrar usuário**

<br/>

#### Autor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

#### Revisor: [Raphael Sales de Souza](https://github.com/raphaelsales)

<br/>

| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF02 - Cadastrar usuário;                                                       |
| Resumo          | Cadastrar um usuário no sistema; |
| Ator principal  | Usuário;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                                                                    |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O usuário digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Ao clicar no botão 'cadastrar' no final do formulário, o usuário é cadastrado. |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo usuário          | Não possui       |
| Realizar login             | Redireciona o usuário para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |
<br/>



| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF01 - Cadastrar prestador de serviço;                                                       |
| Resumo          | Cadastrar um prestador de serviço ao sistema; |
| Ator principal  | Prestador de serviço;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                          |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O prestador digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Após preencher seus dados o prestador deve marcar a opção 'sou um prestador de serviços'. |
| Passo 3 | Ao clicar no botão 'cadastrar' no final do formulário, o prestador de serviços é cadastrado. |

<br/>

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Nome  | Sim          | Sim       | Texto        |
| Email             | Sim          | Sim       | Email         |
| Senha            | Sim          | Sim       | Password        |
| Confirmar senha  | Sim          | Não       | Password        |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo prestador de serviço          | Não possui       |
| Realizar login             | Redireciona o prestador para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |

<br/>

### US01 - Cadastrar prestador de serviço

**Prestador de serviços**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto **um prestador de serviços** eu preciso ser capaz de **criar uma conta** para que **eu possa oferecer meus seerviços** | O **prestador de serviços** deve poder se cadastrar no sistema.|

<br />

### Prototipação de telas
**Tela de cadastro com marcação da opção 'Sou um prestador de serviços'**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/b6d7912e-bb58-4063-9207-737a786b53a0)


<br />
---

## **RF02 - Cadastrar usuário**

<br/>

#### Autor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

#### Revisor: [Raphael Sales de Souza](https://github.com/raphaelsales)

<br/>

| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF02 - Cadastrar usuário;                                                       |
| Resumo          | Cadastrar um usuário no sistema; |
| Ator principal  | Usuário;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                                                                    |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O usuário digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Ao clicar no botão 'cadastrar' no final do formulário, o usuário é cadastrado. |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo usuário          | Não possui       |
| Realizar login             | Redireciona o usuário para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |
<br/>



| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF01 - Cadastrar prestador de serviço;                                                       |
| Resumo          | Cadastrar um prestador de serviço ao sistema; |
| Ator principal  | Prestador de serviço;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                          |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O prestador digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Após preencher seus dados o prestador deve marcar a opção 'sou um prestador de serviços'. |
| Passo 3 | Ao clicar no botão 'cadastrar' no final do formulário, o prestador de serviços é cadastrado. |

<br/>

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Nome  | Sim          | Sim       | Texto        |
| Email             | Sim          | Sim       | Email         |
| Senha            | Sim          | Sim       | Password        |
| Confirmar senha  | Sim          | Não       | Password        |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo prestador de serviço          | Não possui       |
| Realizar login             | Redireciona o prestador para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |

<br/>

### US01 - Cadastrar prestador de serviço

**Prestador de serviços**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto **um prestador de serviços** eu preciso ser capaz de **criar uma conta** para que **eu possa oferecer meus seerviços** | O **prestador de serviços** deve poder se cadastrar no sistema.|

<br />

### Prototipação de telas
**Tela de cadastro com marcação da opção 'Sou um prestador de serviços'**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/b6d7912e-bb58-4063-9207-737a786b53a0)


<br />
---

## **RF02 - Cadastrar usuário**

<br/>

#### Autor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

#### Revisor: [Raphael Sales de Souza](https://github.com/raphaelsales)

<br/>

| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF02 - Cadastrar usuário;                                                       |
| Resumo          | Cadastrar um usuário no sistema; |
| Ator principal  | Usuário;                                                    |
| Ator secundário | -                                                                                   |
| Pré-condição    | -                          |
| Pós-condição    |                                                                                    |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O usuário digita seus dados cadastrais nos campos adequados.            |
| Passo 2 | Ao clicar no botão 'cadastrar' no final do formulário, o usuário é cadastrado. |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Cadastrar | Cadastra um novo usuário          | Não possui       |
| Realizar login             | Redireciona o usuário para a tela de login          | Não possui       |

<br/>

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Cadastro realizado com sucesso | Informa que o cadastro foi efetuado com sucesso  | Texto   |
| Erro ao realizar o cadastro | Informa que ocorreu um erro durante o cadastro  | Texto   |
| Senha e confirmar senha não conferem | Informa a senha e a confirmação da senha estão diferentes  | Texto   |
<br/>

 ### US02 - Cadastrar usuário

**Usuário**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto **um usuário do aplicativo** eu preciso ser capaz de **me cadastrar no sistema** para que **eu possa analisar e solicitar serviços.**| O usuário deve poder se cadastrar no sistema|

<br />

### Prototipação de telas
**Tela de cadastro sem marcação da opção 'Sou um prestador de serviços'**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/6f547212-51ae-418c-93f2-8621523d6478)


<br/>

---

## **RF03 - Realizar Login**

<br/>

#### Autor: [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)

#### Revisor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

<br/>

| Item            | Descrição                                                                           |
| --------------- | ----------------------------------------------------------------------------------- |
| Caso de uso     | RF03 - Realizar Login;                                                       |
| Resumo          | Realizar o login dos atores; |
| Ator principal  | Usuario/Prestador de serviço;                                                    |
| Ator secundário | -                                                                             |
| Pré-condição    | O(s) ator(es) devem ter um cadastro no sistema.                         |
| Pós-condição    | Os dados do(s) ator(er) devem estar corretos                                                                                      |

<br/>

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O(s) Ator(es) informam seus dados           |
| Passo 2 | A verificação das credenciais é efetuada |
| Passo 3 | A sessão é iniciada em caso de login correto. |

<br/>

#### Fluxo alternativo

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O(s) Ator(es) informam seus dados            |
| Passo 2 | A verificação das credenciais é efetuada |
| Passo 3 | A sessão não é iniciada e o usuário é redirecionado para a tela de login. |

<br/>

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Email             | Sim          | Sim       | Email         |
| Senha            | Sim          | Sim       | Password        |

<br/>

#### Opções dos usúarios

| Opção            | Descrição | Atalho |
| ---------------- | ------------ | --------- |
| Login | Valida as credenciais do ator          | Não possui       |
| Cadastre-se             | Redireciona o usuario para a tela de cadastro          | Não possui       |

<br />

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Email e/ou senha incorretos | Informa que as credenciais são inválidas  | Texto   |

<br />

### US03 - Realizar Login

**Prestador de serviço/Usuário**

|  User Story                                        | Critério de aceitação                                 |
| ------------------------------------------------- | ----------------------------------------------------- |
| Enquanto **um ator do aplicativo** eu preciso ser capaz de **realizar login**, para que **eu possa ter acesso as funcionalidades do sistema** | Certifique-se de que o usuário é capaz de **acessar o aplicativo**. |

<br/>

### Prototipação de telas
**Tela de login**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/3af7381b-ff75-4558-9398-b5caddd05977)


<br />

---

## **RF04 - Cadastrar serviços**

<br />

#### Autor: [Pedro Trivelato](https://github.com/Ptrivelato)
#### Revisor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

<br />


|Item             | Descrição                                                           |
| --------------- | -----------------------------------------------------------------   |
| Caso de uso     | Cadastrar serviços                                                  |
| Resumo          | É esperado que o prestador de serviços tenha a possibilidade de inserir seus serviços prestados|
| Ator principal  | prestador de serviço                                 |
| Ator secundário | -                                                          |
| Pré-condição    | É necessário que o prestador de serviço tenha efetuado o login.            |
| Pós-condição    | Todos os campos do formulário de cadastro de serviço devem ser preenchidos corretamente.  |

<br />

#### Fluxo principal

| Passos  | Descrição                                                                   |
| ------- | -----------------------------------------                                   |
| Passo 1 | Entrar na seção de cadastro de meus serviços                                         |
| Passo 2 | Clicar no botão "Inserir novo serviço"                                            |
| Passo 3 | Inserir os dados adequados nos campos do formulário                                                  |
| Passo 5 | Clicar em salvar serviço                                                                     |
<br />

#### Campos do formulário

| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Nome do serviço             | Sim          | Sim       | Texto        |
| Tipo             | Sim          | Sim       | Texto        |
| Valor            | Sim          | Sim       | Numérico     |
| Descrição            | Sim          | Sim       | Texto     |


<br />

#### Opções do usuário


| Opção         | Descrição                 | Atalho |
| ------------- | ------------------------- | ------ |
| Adicionar serviço | Cadastra um serviço no sistema | Não possui       |
| Cancelar | Retorna Para a tela de meus serviços | Não possui       |
<br />

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Serviço inserido com sucesso | Isso confirma e garante todo êxito na operação de inserção de serviço   | Texto   |
| Erro ao inserir serviço | Informa que ocorreu um erro ao inserir o serviço   | Texto   |
| Dados incorretos | Informa que os dados inseridos são inválidos   | Texto   |
<br />


### US04 - Cadastrar serviços

**Usuário/Prestador de serviços**

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto "prestador de serviço" preciso ter meus serviços salvos na plataforma a fim de fornecer minha mão de obra. | O prestador de serviços deve ser capaz de cadastrar seus serviços. |

<br/>

### Prototipação de telas
**Botão que redireciona para a tela de cadastro de serviços**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/5bf1e406-58c6-429f-8e7b-1d5d97c70af4)

**Formulário de cadastro de serviço**

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/d34408cc-3e23-4aad-83b8-c6155fa67ac1)


****
---

## *RF05 -  Buscar serviço por critérios*

<br />

#### Autor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)
#### Revisor: [Pedro Trivelato](https://github.com/Ptrivelato)
<br />

<br />

|Item             | Descrição                                                         |
| --------------- | ----------------------------------------------------------------- |
| Caso de uso     | Buscar serviço por critérios.                                                   |
| Resumo          | É esperado que o usuário tenha a possibilidade de buscar pelos serviços mais adequados para ele|
| Ator principal  | Atores |
| Ator secundário | Não possui                                                        | 
| Pré-condição    |  É necessário que para realizar a busca conta o ator tenha feito login         |
| Pós-condição    | Os dados de busca devem ser válidos |
<br />

#### Fluxo principal
| Passos  | Descrição                                 |
| ------- | ----------------------------------------- |
| Passo 1 | Entrar na seção de Serviços               |
| Passo 2 | Clicar no input de pesquisa                 |
| Passo 3 | Inserir dados no campo              |
| Passo 4 | Pesquisar                                    |
<br />

#### Campos do formulário
| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Pesquisa             | Sim          | Sim       | Texto        |

<br />

#### Opções do usuário
| Opção         | Descrição                 | Atalho |
| ------------- | ------------------------- | ------ |
| Pesquisar Serviço | Uma busca com base nos dados de entrada do ator é efetuada |  Não possui      |
<br />

#### Relatório de usuário

| Campo                      | Descrição                                                             | Formato |
| -------------------------- | --------------------------------------------------------------------- | ------- |
| Nenhum serviço encontrado! | Não foi possível encontrar nenhum serviço com os parâmetros inseridos.   | Texto   |
<br />


### US05 - Buscar serviço por critérios

*Atores*

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto "um ator" do sistema preciso poder pesquisar pelos mais diversos tipos de serviços. | Digitar corretamente no campo de pesquisa |

<br/>

### Prototipação de telas
*Tela de busca de serviços*

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/869cf3be-3b58-4d49-89e1-61f109522fe8)


---

## *RF06 - Enviar solicitação de serviço*

<br/>

#### Autor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

#### Revisor: [Wanderson Melo](https://github.com/sadMello)

<br/>

|Item             | Descrição                                                         |
| --------------- | ----------------------------------------------------------------- |
| Caso de uso     | RF06 -  Enviar solicitação de serviço.                                             |
| Resumo          | É esperado que o ator tenha a possibilidade de Enviar solicitação de serviço.                                                                     |
| Ator principal  | Usuário/Prestador de serviço|
| Ator secundário | Não possui                                                        | 
| Pré-condição    | É necessário que o ator tenha efetuado o login.        |
| Pós-condição    | - |

<br/>

#### Fluxo principal
| Passos  | Descrição                                 |
| ------- | ----------------------------------------- |
| Passo 1 | Entrar na aba de serviços       |
| Passo 2 | Digitar a data da prestação do serviço |
| Passo 3 | Clicar no botão 'Solicitar serviço' no serviço desejado|

<br/>

#### Campos do formulário
| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Data         | Não          | Sim       | Data        |

<br/>

#### Opções do usuário
| Opção             | Descrição                 | Atalho |
| -------------     | ------------------------- | ------ |
| Solicitar serviços | Solicita o serviço selecionado |        |

<br/>

#### Relatório de usuário

| Campo      | Descrição   | Formato |
| ---------- | ----------- |---------|
| Erro ao solicitar o serviço | Ocorreu um erro ao solicitar o serviço |  Texto  |

<br/>

### US06 - Enviar solicitação de serviço

*Atores*

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto *um ator* preciso ser capaz de *solicitar a prestação de serviços* para que *eu possa ressolver meus problemas* | O ator deve poder solicitar serviços dentro da plataforma.

<br/>

### Prototipação de telas
*Tela com o botão de solicitar serviço*

![WhatsApp Image 2023-09-12 at 21 21 00](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/0271f42b-cd74-4ad5-bd77-9d6e3a2f8246)

*Segunda etapa da tela*

![WhatsApp Image 2023-09-12 at 21 32 28](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/371da8a6-a520-4bea-852e-cc58112d47cb)

---

## *RF07 -  Responder solicitação de serviço*

<br/>

#### Autor: [Wanderson Melo](https://github.com/sadMello)

#### Revisor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

<br/>

|Item             | Descrição                                                         |
| --------------- | ----------------------------------------------------------------- |
| Caso de uso     | O prestador pode responder as solicitações de serviço                                |
| Resumo          | Visualiza o somatório das despesas que o usário teve no mês       |
| Ator principal  | Prestador de serviços                                 |
| Ator secundário | Não possui                                                        | 
| Pré-condição    |É necessário que o ator tenha efetuado o login.                                                                               |
| Pós-condição    | Não possui                                                        | 

<br/>

#### Fluxo principal
| Passos  | Descrição                                 |
| ------- | ----------------------------------------- |
| Passo 1 | Entrar na página de respostas a solicitações de serviços        |
| Passo 2 | Visualizar as solicitações           |
| Passo 3 | Responder as solicitações           |

<br/>

#### Campos do formulário
| Campo            | Obrigatório? | Editável? | Formato      |
| ---------------- | ------------ | --------- | ------------ |
| Descrição         | Não          | Sim       | Texto        |

<br/>

#### Opções do usuário
| Opção             | Descrição                                                         | Atalho |
| ----------------- | ----------------------------------------------------------------- | ------ |
| Aprovar solicitação | Trocar o status da requisição para aprovado. |  Não possui  |
| Reprovar solicitação | Trocar o status da requisição para reprovado. |  Não possui  |
| Em análise | Trocar o status da requisição para em análise. |  Não possui  |

<br/>

#### Relatório de usuário

| Campo      | Descrição  | Formato |
| ---------- | ---------- | ------- |
| Solicitação alterada com sucesso |   Status da solicitação foi alterado         |    Texto     |

<br/>

#### Fluxo alternativo
| Passos    | Descrição                                               |
| --------  | ------------------------------------------------------- |
| Passo 1.1 | O sistema não possui nenhum serviço cadastrado                   |
| Passo 1.2 | O sistema informa que não existem serviços cadastradas  |
<br />

### Prototipação de telas
*Tela enviar solicitação de serviços*


### US07 -  Responder solicitação de serviço

*Prestador de serviço*

| User Story | Critério de aceitação |
| --------- | --------------------- |
| Enquanto um *prestador de serviço* eu preciso ser capaz de *responder as solicitações de serviço* para que *eu possa ter um controle melhor da minha profissão*. | O prestador deve poder responder as solicitações de serviço. 

<br/>

### Prototipação de telas
*Tela de resposta a solicitação de serviço*

![image](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/34839923-b3c8-4804-a978-036bc3c4b05f)


---

## RF08 - Realizar o pagamento pelo serviço prestado.

<br/>

#### Autor: [Wanderson Melo](https://github.com/sadMello)

#### Revisor: [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)

<br/>

|Item             | Descrição                                                                                                                                      |
| --------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | RF08 - Realizar o pagamento pelo serviço prestado;                                                                                             |
| Resumo          | É esperado que o usuário consiga através dos método de pagamento escolhido, realizar o pagamento do serviço usado para o prestador do serviço; |
| Ator principal  | Usuário que faz uso da plataforma;                                                                                                             |
| Ator secundário | Prestador do serviço escolhido pelo usúario;                                                                                                   |
| Pré-condição    | É necessário que o usuário tenha uma conta na platarforma, tenha um método de pagamento e tenha comprado um serviço;                           |
| Pós-condição    | É necessário que o pagamento do usúario tenha sido efetuado para o prestador de serviço e para a platarforma;                                  |

<br />

#### Fluxo principal
| Passos  | Descrição                                          |
| ------- | -------------------------------------------------- |
| Passo 1 | Entrar no aplicativo e fazer login.                |
| Passo 2 | Estar no aplicativo e clicar na seção de serviços. |
| Passo 3 | Clicar no botão pagar serviço.                     |
| Passo 4 | Escolher qual serviço prestado pagar.              |
| Passo 5 | Escolher método de pagamento.                      |
| Passo 6 | Efetuar pagamento.                                 |

<br />

#### Campos do formulário
| Campo                           | Obrigatório? | Editável? | Formato         |
| ------------------------------- | ------------ | --------- | --------------- |
| Método de pagamento             | Sim          | Sim       | Texto           |
| Preço do serviço                | Sim          | Não       | Numérico        |
| Nome do serviço                 | Sim          | Não       | Texto           |
| Prestador do serviço            | Sim          | Não       | Texto           |
<br />

#### Opções do usuário
| Opção                          | Descrição                 | Atalho |
| ------------------------------ | ------------------------- | ------ |
| Selecionar serviço             | Confirmar dados inseridos |        |
| Selecionar método de pagamento | Confirmar dados inseridos |        |
| Efetuar pagamento              | Confirmar dados inseridos |        |
<br />

#### Relatório de usuário

| Campo                           | Descrição                                                                | Formato |
| ------------------------------- | ------------------------------------------------------------------------ | ------- |
| Pagamento realizado com sucesso | Isso confirma e garante todo êxito na operação de pagamento do serviço   | Texto   |
<br />

#### Fluxo alternativo
| Passos    | Descrição |
| --------  | ---------------------------------------------------------------------------------------------- |
| Passo 1.1 | O ator tenta adicionar um método de pagamento que já foi cadastrado.                           |
| Passo 1.2 | O sistema acusa que a método de pagamento em questão já existe.                                |
| Passo 2.1 | O ator tenta adicionar um método de pagamento que não é válido.                                |
| Passo 2.2 | O sistema acusa que a método de pagamento em questão não é válido.                             |
| Passo 3.1 | O ator não possui saldo suficiente para o pagamento do serviço.                                |
| Passo 3.2 | O sistema exibe que não foi possível concluir a operação.                                      |
<br />

### US08 - Realizar o pagamento seguro pelo serviço prestado.

*Usuário*

| User Story                                                                                | Critério de aceitação                         |
| ----------------------------------------------------------------------------------------- | --------------------------------------------- |
| Como um usuario, desejo poder selecionar um serviço para pagamento e ser redirecionado para uma tela onde possa inserir as informações do meu cartão de crédito ou usar métodos de pagamento salvos. | Certificar que todos campos estão preenchidos |
| Como um prestador de serviços, gostaria de receber uma notificação quando um pagamento for efetuado com sucesso pelos meus serviços, junto com informações sobre o serviço e o valor pago. | Certificar que todos campos estão preenchidos |

<br />

### Prototipação de telas
*Tela de pagamento de serviço com aopção do serviço prestado, com a opção de método de pagamento e com a opção de efetuar pagamento*

![WhatsApp Image 2023-09-12 at 21 34 19](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/1c874d5b-53a4-498d-8460-1f3d30d1001b)


<br/>

---

## RF09 - Avaliar e revisar prestadores de serviço.

<br/>

#### Autor: [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)

#### Revisor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

<br/>

|Item             | Descrição                                                                                                 |
| --------------- | --------------------------------------------------------------------------------------------------------- |
| Caso de uso     | RF09 - Avaliar e revisar prestadores de serviço;                                                          |
| Resumo          | É esperado que o usuário tenha a possibilidade de olhar e fazer uma avaliação dos prestadores de serviço; |
| Ator principal  | Usuário que faz uso da plataforma;                                                                        |
| Ator secundário | Atores;                                                                                     |
| Pré-condição    | É necessário que o usuário tenha uma conta na plataforma;                                                 |
| Pós-condição    | É necessário que a avaliação seja visível para os usúarios e para o prestador de serviço;                 |
<br />

#### Fluxo principal
| Passos  | Descrição                                            |
| ------- | ---------------------------------------------------- |
| Passo 1 | Entrar no aplicativo e fazer login.                  |
| Passo 2 | Estar no aplicativo e clicar na seção de serviços.   |
| Passo 3 | Pesquisar pelo prestador de serviço em questão.      |
| Passo 7 | Clicar na seção de avaliações.                       |
| Passo 4 | Clicar no botão de fazer uma avaliação.              |
| Passo 5 | Fazer a avaliação do prestador de serviço.           |
| Passo 6 | Salvar e enviar a avaliação.                         |
<br />

#### Campos do formulário
| Campo               | Obrigatório? | Editável? | Formato      |
| ------------------- | ------------ | --------- | ------------ |
| Nome do usúario     | Sim          | Não       | Texto        |
| Nome do prestador   | Sim          | Não       | Texto        |
| Comentário          | Não          | Sim       | Texto        |
| Número de estrelas  | Sim          | Sim       | Numérico     |
| Enviar avaliação    | Sim          | Sim       | Texto        |
| Data da avaliação   | Sim          | Não       | Texto        |
<br />

#### Opções do usuário
| Opção           | Descrição                 | Atalho |
| --------------- | ------------------------- | ------ |
| Avaliar         | Confirmar dados inseridos |        |
<br />

#### Relatório de usuário

| Campo                      | Descrição                                                                              | Formato |
| -------------------------- | -------------------------------------------------------------------------------------- | ------- |
| Avaliação concluída        | Isso confirma e garante todo êxito na operação de avaliação do prestador de serviço.   | Texto   |

<br />

### US09 - Avaliar e revisar prestadores de serviço.

*Atores*

| User Story | Critério de aceitação |
| ---------- | --------------------- |
| Enquanto *usuário comum* preciso ter a possibilidade de avaliar um prestador de serviços e ver suas avaliações. | Certificar que todos campos estão preenchidos. |

<br />

### Prototipação de telas
*Tela de prestadores de serviços, com a seção de avaliações e com o botão de 'fazer uma avaliação'*

![WhatsApp Image 2023-09-12 at 21 23 43](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/593299cf-d904-4bc8-b587-6e64e96ee817)


<br/>

---

## *RF10 - Manter perfis de prestadores de serviço atualizados.*

<br/>

#### Autor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

### Revisor: [Wanderson Melo](https://github.com/sadMello)

<br/>

| Item            | Descrição                                                                                                |
| --------------- | -------------------------------------------------------------------------------------------------------- |
| Caso de uso     | RF10 - Manter perfis de prestadores de serviço atualizados;                                              |
| Resumo          | Responsável por manter atualizado as informações de perfil do prestador de serviço caso sejam alteradas; |
| Ator principal  | Prestador de serviços - Responsável pelas informações e suas futuras alterações;                         |
| Ator secundário | -                                                                                                        |
| Pré-condição    | Ter cadastro como prestador de serviço no aplicativo e estar logado;                                     |
| Pós-condição    | Ter suas informações de perfil atualizadas para quem esteja visualizando;                                |

<br/>

#### Fluxo principal

| Passos  | Descrição                                                         |
| ------- | ----------------------------------------------------------------- |
| Passo 1 | Entrar no aplicativo e fazer login.                               |  
| Passo 2 | O usuário ter cadastro como prestador de serviços.                |
| Passo 3 | Acessar a seção do Perfil de prestador de serviço.                |
| Passo 4 | Clicar no botão de alterar as informações de Perfil.              |
| Passo 5 | Salvar as alterações.                                             |
| Passo 6 | Atualizar o perfil.                                               |

<br/>

#### Campos do formulário

| Campo                 | Obrigatório? | Editável? | Formato      |
| --------------------- | ------------ | --------- | ------------ |
| Nome                  | Sim          | Sim       | Texto        |
| Email                 | Sim          | Sim       | Email        |
| Descrição do serviço  | Sim          | Sim       | Texto        |
| Foto                  | Sim          | Sim       | Jpeg         |
| Localização           | Não          | Sim       | Texto        |
| Preço                 | Sim          | Sim       | Numérico     |
| Ocupação              | Não          | Sim       | Texto        |

<br/>

### US10 - Manter perfis de prestadores de serviço atualizados.

*Prestador de serviço*

|  User Story                                                                                                                                                  | Critério de aceitação                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------- |
| Enquanto *um prestador de serviço* eu preciso ser capaz de *Verificar e alterar minhas informações de perfil* para que *meu perfil esteja atualizado.* | Certifique-se de que o usuário é cadastrado como *prestador de serviço* e é capaz de *acessar o aplicativo*. |

<br />

### Prototipação de telas
*Tela de perfil com botão para editar as informações de perfil*

![WhatsApp Image 2023-09-12 at 21 53 57](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/924a0abe-29b9-467a-80b9-12c4b3fb0593)



<br/>

---
## *RF11 - Notificar usuários sobre atualizações em solicitações de serviço.*

<br/>

#### Autor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

#### Revisor: [Antonio Cassio de Oliveira Neto](https://github.com/ACNprogrammer/)

<br/>

| Item            | Descrição                                                                                                       |
| --------------- | --------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | RF11 - Notificar usuários sobre atualizações em solicitações de serviço;                                        |
| Resumo          | O usuário recebe uma notificação do aplicativo se a solicitação de serviço foi aceita, recusada ou concluída;   |
| Ator principal  | Usuário que fez a solicitação de serviço;                                                                       |
| Ator secundário | -                                                                                                               |
| Pré-condição    | Usuário estar logado no aplicativo e ter solicitado um serviço;                                                 |
| Pós-condição    | Usuário receber uma notificação                                                                                 |

<br/>

#### Fluxo principal

| Passos    | Descrição                                                                |
| --------- | ------------------------------------------------------------------------ |
| Passo 1   | O usuário estar logado no aplicativo.                                    |
| Passo 2   | O usuário ter feito uma solicitação de serviço.                          |
| Passo 3   | O prestador de serviço escolhido pelo usuário responder a solicitação.   |
| Passo 4.1 | O usuário recebe uma notificação que a solicitação foi aceito.           |
| Passo 4.2 | O usuário recebe uma notificação que a solicitação foi recusado.         |
| Passo 4.3 | O usuário recebe uma notificação que o serviço foi concluído.            |

<br />

### US11 - Notificar usuários sobre atualizações em solicitações de serviço.

*Usuário*

![WhatsApp Image 2023-09-12 at 22 10 57](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/2fc676ab-fdfe-490f-9cff-4a06e3927500)



|  User Story                                                                                                                                                  | Critério de aceitação                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------- |
|"Enquanto um *usuário, eu preciso visualizar e ser *notificado se minha solicitação foi aceita ou recusada, caso tenha sido aceita, é preciso notificar sua conclusão." |  Certificar que o usuário tenha feito uma solicitação. |



<br />

### Prototipação de telas
*Tela de notificações dentro da seção de serviços*

<br/>

---
## *RF12 - Permitir que os usuários editem seus perfis.*

<br/>

#### Autor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

#### Revisor: [Jorge Antonio Motta Braga](https://github.com/jorgespark11)

<br/>

| Item	         | Descrição                                                         |
| -------------- | ----------------------------------------------------------------- |
|Casos de uso    | RF12 - Permitir que os usuários editem seus perfis;               |
|Resumo          | O usuário deseja editar as informações de seu perfil;             |
|Ator principal  | Usuário                                                           |
|Ator secundario | -                                                                 |
|Pré-condição    | O usuário estar logado no aplicativo;                             |
|Pós-condição    | O usuário consegue editar seu perfil da maneira desejada;         |

<br/>

#### Fluxo principal

| Passos    | Descrição                                               |
| --------- | ------------------------------------------------------- |
| Passo 01  | O usuário acessa o app.                                 |
| Passo 02  | O usuário acessa a seção de Perfil.                     |
| Passo 03  | O usuário seleciona o botão de 'alterar Perfil'.        |
| Passo 04  | O usuário altera ou atualiza as informações do perfil.  |
| Passo 05  | O usuário salva as alterações.                          |

<br/>

#### Campos do formulário

| Campo                     | Obrigatório? | Editável? | Formato      |
| ------------------------- | ------------ | --------- | ------------ |
| Nome                      | Sim          | Sim       | Texto        |
| Email                     | Sim          | Sim       | Email        |
| Descrição do que procura  | Não          | Sim       | Texto        |
| Foto                      | Não          | Sim       | Jpeg         |
| Localização               | Não          | Sim       | Texto        |
| Preço aceitável           | Não          | Sim       | Numérico     |
| Ocupação                  | Não          | Sim       | Texto        |

<br/>

#### Opções de usuário


| Opção         | Descrição                   |
| ------------- | --------------------------- |
| Editar Perfil | Edita o perfil do usuário.  |

<br />

### US12 - Permitir que os usuários editem seus perfis.

*Usuário*

| User story                                                                                                  | Critério de aceitação                                                     |
| ----------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------- |
| Enquanto usuário quando visualizo *meu perfil* necessito ser capaz de *alterar e atualizar* minhas informações. | Ator necessita ter perfil.   |

<br />

### Prototipação de telas
*Tela de perfil do usuário com o botão de 'alterar informações de perfil'*

![WhatsApp Image 2023-09-12 at 21 43 16](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/e94a1988-80f6-4284-8a37-563289371dbd)

<br/>

---

## *RF13 - Implementar funcionalidade de pesquisa avançada de prestadores de serviço*

<br/>

#### Autor: [Pedro Trivelato](https://github.com/Ptrivelato)

#### Revisor: [Raphael Sales de Souza](https://github.com/raphaelsales)

<br/>

| Item            | Descrição                                                                                           |
| --------------- | --------------------------------------------------------------------------------------------------- |
| Caso de uso     | RF13 - Implementar funcionalidade de pesquisa avançada de prestadores de serviço;                   |
| Resumo          | Responsável por adicionar parâmetros de referencia para a pesquisa de prestadores de serviço;       |
| Ator principal  | Usuário;                                                                                            |
| Ator secundário | -                                                                                                   |
| Pré-condição    | Ter acesso ao aplicativo, ter acessado a aba de pesquisa;                                           |
| Pós-condição    | Usuário ter uma pesquisa avançada de prestadores de serviço com parâmetros;                         |

<br />

#### Fluxo principal

| Passos  | Descrição                                           |
| ------- | --------------------------------------------------- |
| Passo 1 | O usuário estar logado no aplicativo.               |
| Passo 2 | O usuário deve acessar a tela de pesquisa.          |  
| Passo 3 | O usuário seleciona a aba de 'pesquisa avançada'.   |

<br />

#### Campos do formulário

| Campo                     | Obrigatório? | Editável? | Formato      |
| ------------------------- | ------------ | --------- | ------------ |
| Pesquisa                  | Sim          | Sim       | Texto        |
| Localização               | Sim          | Sim       | Texto        |
| Preço no orçamento        | Sim          | Sim       | Numérico     |
| Nível de avaliação        | Sim          | Sim       | Numérico     |

<br/>

#### Opções de usuário


| Opção          | Descrição                                                     |
| -------------- | ------------------------------------------------------------- |
| Busca avançada | Adiciona parâmetros na busca.                                 |
| Preço          | Parâmetro de serviços baratos, caros ou dentro do orçamento.  |
| Localização    | Parâmetro de serviços proximos do usuário.                    |
| Avaliação      | Parâmetro de serviços mais avaliados.                         |

<br />

### US13 - Implementar funcionalidade de pesquisa avançada de prestadores de serviço.

*Usuário*

| User Story                                                                                                                                                                                                         | Critério de aceitação                                         |
|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------- |
| Enquanto *Usuário* eu preciso ser capaz de ao pesquisar, poder realizar *pesquisas avançadas* para que eu *tenha um controle melhor de minha busca de acordo com as minhas preferências do serviço.* | Certifique-se de que o usuário está logado e *pesquisando*. |

 <br />

### Prototipação de telas
*Aba de pesquisa avançada na tela de pesquisa*

![WhatsApp Image 2023-09-12 at 21 47 48](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/d6620940-338f-4bf3-a88e-2c5a159618c3)


<br/>

---

## *RF14 - Oferecer suporte a diferentes métodos de pagamento.*

<br/>

#### Autor: [Raphael Sales de Souza](https://github.com/raphaelsales)

#### Revisor: [Pedro Trivelato](https://github.com/Ptrivelato)

<br/>

| Item            |Descrição                                                                                        |
| --------------- | ----------------------------------------------------------------------------------------------- |
| Caso de uso     | RF14 - Oferecer suporte a diferentes métodos de pagamento;                                      |
| Resumo          | Responsável por oferecer suporte ao usuário para alterar ou adicionar mais opções de pagamento; |
| Ator principal  | Usuário - Editar forma de pagamento;                                                            |
| Ator secundário | -                                                                                               |
| Pré-condição    | Ter acesso ao aplicativo, e ter uma conta adicionada;                                           |
| Pós-condição    | Ter um método de pagamento capaz de efetuar uma compra de serviço;                              |

<br/>

#### Fluxo principal

| Passos  | Descrição                                                                        |
| ------- | -------------------------------------------------------------------------------- |
| Passo 1 | O usuário faz login no aplicativo.                                               |
| Passo 2 | O usuário acessa a tela de Perfil.                                               |
| Passo 3 | O usuário clica no botão de formas de pagamento.                                 |
| Passo 4 | O usuário clica em adicionar, alterar ou exclui a forma de pagamento desejada.   |
| Passo 5 | O usuário preenche as informações necessárias.                                   |
| Passo 6 | O método de pagamento é validado e pronto para ser usado.                        |

<br/>

#### Campos do Formulário

| Campo              | Obrigatório                | Formato      |
| ------------------ | ---------------------------|------------- |
| Nome do titular    | Sim                        | Texto        |
| Número do cartão   | Sim                        | Texto        |
| Data de vencimento | Sim                        | Texto        |
| Digitar o CVV      | Sim                        | Texto        |
| Email              | Sim                        | Texto        |
| Senha              | Sim                        | Texto        |

<br />

#### Opções de usuário


| Opção             | Descrição                                                     |
| ----------------- | ------------------------------------------------------------- |
| Cartão de credito | Adiciona como método de pagamento.                            |
| PIX               | Adiciona como método de pagamento.                            |
| Boleto            | Adiciona como método de pagamento.                            |
| Paypal            | Adiciona como método de pagamento.                            |

<br />

#### Relatório de usuário

| Campo                      | Descrição                                                                                   | Formato |
| -------------------------- | ------------------------------------------------------------------------------------------- | ------- |
| Forma de pagamento aceita  | Isso confirma e garante o êxito na operação de adicionar ou alterar a forma de pagamento.   | Texto   |

<br />

#### Fluxo alternativo

| Passos  | Descrição                                                                                  |
| ------- | ------------------------------------------------------------------------------------------ |
| Passo 1 | Estar no aplicativo e clicar na seção de serviços.                                         |
| Passo 2 | Clicar no botão pagar serviço.                                                             |
| Passo 3 | Escolher qual serviço prestado pagar.                                                      |
| Passo 4 | Escolher método de pagamento.                                                              |
| Passo 5.1 | O usuário clica em adicionar, alterar ou exclui a forma de pagamento desejada.           |
| Passo 5.2 | O ator tenta adicionar um método de pagamento que já foi cadastrado.                     |
| Passo 5.3 | O sistema acusa que a método de pagamento em questão já existe.                          |
| Passo 6.1 | O usuário preenche as informações necessárias.                                           |
| Passo 6.2 | O ator tenta adicionar um método de pagamento que as informações não são válidas.        |
| Passo 6.3 | O sistema acusa que a método de pagamento em questão não é válido.                       |

<br/>

### US14 - Oferecer suporte a diferentes métodos de pagamento.

*Atores*

| User Story                                                                                                                                                                                                                           | Critério de aceitação                                                    |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------ |
| Enquanto um *ator* eu preciso ser capaz de *editar, adicionar e excluir* métodos de pagamentos para que *eu possa ter mais acessibilidade no pagamento* e *mais segurança nas minhas informações financeiras*. | Certifique-se de que o método de pagamento posto pelo usuário é válido.  |

<br />

### Prototipação de telas
*Tela de método de pagamento*

![WhatsApp Image 2023-09-12 at 21 34 19](https://github.com/ViniciusDevelopment/EngSoft-2023.2/assets/67427291/1c874d5b-53a4-498d-8460-1f3d30d1001b)

<br/>

## RF15 - Exibir informações no painel de controle (Dashboard);

#### Autor: [Wanderson Melo](https://github.com/sadMello)
#### Revisor: [Vinícius Maciel Pires](https://github.com/ViniciusDevelopment/)


<br/>

|Item             | Descrição                                                                                                                                      |
| --------------- | ---------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | RF15 - Exibir informações no painel de controle (Dashboard);                                                                                  |
| Resumo          | É esperado que o usuário e o prestador de serviços visualizem informações relevantes sobre suas atividades no painel de controle.              |
| Ator principal  | Usuário que faz uso da plataforma ou Prestador de serviços;                                                                                   |
| Ator secundário | -                                                                                                                                            |
| Pré-condição    | É necessário que o usuário tenha uma conta na plataforma e tenha interações no sistema;                                                   |
| Pós-condição    | O painel de controle deve exibir informações relevantes para o usuário ou prestador de serviços.                                           |

<br />

#### Fluxo principal
| Passos  | Descrição                                          |
| ------- | -------------------------------------------------- |
| Passo 1 | Entrar no aplicativo e fazer login.                |
| Passo 2 | Estar no aplicativo e ser redirecionado para o painel de controle (Dashboard). |
| Passo 3 | Visualizar informações relevantes no painel de controle, como serviços prestados, serviços solicitados, notificações, estatísticas, etc. |

<br />

#### Campos do painel de controle
| Campo                           | Obrigatório? | Editável? | Formato         |
| ------------------------------- | ------------ | --------- | --------------- |
| Serviços Prestados              | Não          | Não       | Numérico        |
| Serviços Solicitados            | Não          | Não       | Numérico        |
| Notificações                    | Não          | Não       | Numérico        |
| Estatísticas                    | Não          | Não       | Gráficos, números, etc. |

<br />

### US15 - Exibir informações no painel de controle (Dashboard).

*Usuário / Prestador de Serviços*

| User Story                                                                                | Critério de aceitação                         |
| ----------------------------------------------------------------------------------------- | --------------------------------------------- |
| Como um usuário registrado, quero ver um resumo dos serviços que solicitei no meu painel principal, para acompanhar minhas atividades.| Certificar que as informações estão sendo exibidas de forma correta no painel de controle. | Como um prestador de serviços, desejo poder filtrar os serviços que ofereço com base em critérios como categoria, localização ou status, para encontrar oportunidades de trabalho relevantes. Bem como, ver minhas estatisticas de pagamentos e serviços prestados.| Certificar que as informações estão sendo exibidas de forma correta no painel de controle. |

<br />

### Prototipação de telas
*Protótipo da tela de Painel de Controle com as informações relevantes para o usuário e prestador de serviços.*


---

## Requisitos não funcionais

**RNF01 - Usabilidade:**<br/>
A interface de usuário deve ser intuitiva e de fácil utilização, garantindo que os usuários possam navegar e usar a plataforma sem dificuldades.

*RNF02 - Desempenho:* <br/>
A plataforma deve ser responsiva e garantir tempos de carregamento rápidos, mesmo quando há um grande número de usuários acessando simultaneamente.

**RNF03 - Segurança:**<br/>
As informações dos usuários, como dados pessoais e informações de pagamento, devem ser armazenadas de forma segura e protegidas contra acesso não autorizado.

**RNF04 - Escalabilidade:**<br/>
A plataforma deve ser projetada para escalar facilmente, permitindo que mais usuários e prestadores de serviços sejam adicionados sem comprometer o desempenho.

*RNF05 - Confiabilidade:* <br/>
A plataforma deve ser altamente confiável, minimizando o tempo de inatividade e garantindo que os serviços estejam disponíveis a maior parte do tempo.

**RNF06 - Manutenibilidade:**<br/>
O código-fonte da plataforma deve ser bem documentado e organizado, facilitando a manutenção e implementação de futuras atualizações.

**RNF07 - Compatibilidade do Navegador:**<br/>
A plataforma deve ser compatível com uma variedade de navegadores da web, garantindo que os usuários possam acessá-la independentemente do navegador que utilizam.

*RNF08 - Acessibilidade:* <br/>
A plataforma deve ser acessível a pessoas com deficiência, seguindo as diretrizes de acessibilidade da Web (WCAG) para garantir uma experiência inclusiva.

**RNF09 - Disponibilidade:**<br/>
A plataforma deve estar disponível 24 horas por dia, 7 dias por semana, com manutenção programada realizada fora do horário de pico.

*RNF10 - Proteção de Dados:* <br/>
Todas as transações financeiras e informações pessoais dos usuários devem ser protegidas por criptografia de ponta a ponta para garantir a privacidade e segurança dos dados.

======
