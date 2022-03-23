<h1 align="center">Teste Técnico</h1>

# Problema

Considere um sistema utilizado por assistências 24 horas veicular (seguradora), que fornecem serviços para seus clientes/beneficiários. 
O beneficiário (cliente) quando vai contratar um plano de assistência 24 horas (ou um seguro para o seu veículo) pode escolher diversas coberturas diferentes para o seu veículos como por exemplo, guincho, borracheiro, chaveiro, carro reserva, carga de bateria, dentre outros.

Por tanto, dentro do sistema da assistência 24 horas deve ser possível cadastrar todos os produtos (planos) que a assistência oferece aos seus clientes. Por exemplo, em minha assistencia eu posso oferecer 2 produtos diferentes, o BÁSICO, que oferece apenas o direito ao guincho, chaveiro e borracheiro. Mas também posso oferecer o produto COMPLETO, que por um preço maior, o cliente pode ter tudo que o básico oferece, além de carro reserva, auxílio combustível e carga de bateria. Além disso, é necessário que o sistema possibilite o cadastro do cliente e de seus veículos, juntamente com o produto correto que ele contratou.  

Agora indo mais a fundo na modelagem de um beneficiário (cliente), juntamente com o veículo e os produtos (planos), temos as seguintes entidades:

- Beneficiário: Contém um identificador único, nome, documento (cpf ou cnpj), data de nascimento, sexo, situação (ativo ou inativo), endereço (logradouro, numero, bairro, cidade e estado), e-mail e telefone.
- Veículo: Contém um identificador único, deverá ter o identificador do beneficiário ao qual o mesmo pertence, placa, chassi, renavam, modelo, montadora, ano de fabricação, ano de modelo e a situação (ativo ou inativo).
- Produto: Contém um identificador único, nome e situação (ativo ou inativo).

Tendo em mente o cenário proposto, faça as atividades das seções abaixo da forma que conseguir. 

### Lembre-se: 
- Fique a vontade para pesquisar, ninguém é obrigado a ter tudo em mente. 
- Deixar de responder alguma questão não é eliminatório, apenas queremos saber seu nível de conhecimento.
- As questões de banco de dados será necessário nos informar apenas os SQLs utilizados.
- A questão de frond-end você deverá utilizar html, css e javascript, não sendo necessário persistir os dados no banco de dados. Fique a vontade para utilizar qualquer framework de css ou similar.
- Os desafios não são obrigatórios, é apenas um diferencial.
- Pode ser entregue um arquivo para cada área de conhecimento, ou seja, um arquivo contendo as respostas da questão "1. Banco de Dados - SQL", outro com a resposta da questão "2. Front-end" e um arquivo com as respostas da questão "3. Back-end".

## 1. Banco de Dados - SQL

Para resolução das questões sobre construção de instruções SQL, leve em consideração o seguinte diagrama de banco de dados: 

![Alt text](readme_files/teste-estagio-diagrama.png?raw=true "Diagrama")

Agora monte as instruções SQLs para resolução das solicitações abaixo:
 
a) Obter todos os beneficiários ativos;

b) Obter todos os beneficiários ativos que possuam ao menos um veículo ativo;

c) Obter todos os beneficiários que tenha mais de 40 anos;

d) Obter todos os beneficiários que possuam veículos com mais de dois produtos ativos;

e) Cadastrar um beneficiário;

f) Cadastrar um veículo ativo para o beneficiário criado no passo anterior e vincular a ele o produto "ASSISTENCIA 24 HORAS";

g) Inativar todos os veículos de ano de fabricação menor do que 2001.
### Desafio: 
Exclua os registros da tabela produtoVeiculo cujo o veículo ou produto estejam inativos.

## 2. Front-end
Criar uma tela com o formulário de cadastro do beneficiário com os campos da tabela beneficiário. 
No final da tela deverá adicionar um botão para salvar os dados, ao clicar neste botão, exibir as informações preenchidas pelo usuário logo abaixo do formulário.
### Desafio: 
Ao clicar em salvar, antes de realizar a exibição dos dados preenchidos, validar se o beneficiário é maior de 18 anos, se a idade for menor do que 18 anos exibir mensagem de erro, caso contrário continue com o fluxo normal de exibição das informações. 

## 3. Back-end
Neste item serão propostos questões de lógica básica que deverão ser resolvidas utilizando a linguagem de programação PHP.
Caso a questão contenha o texto: "Ler um número", na verdade você deverá criar uma variável e já atribuir um valor a ela, para não ser necessário a criação de nenhuma tela ou execução do PHP em terminal. 

a) Ler um número (de 1 a 12) e informe o mês correspondente por extenso.

b) Ler a data de nascimento do usuário e imprima se o mesmo é maior de 18 anos e a idade calculada.

c) Ler um número e imprimir a tabuada do mesmo.

d) Criar um array com 20 números inteiros. Você deverá imprimir o maior e o menor número desse array, além de calcular e exibir o percentual de números pares e ímpares, e por fim, o valor médio dos números desse array.

e) Ler o valor de um boleto bancário, data de vencimento e o valor percentual de juros diário por atraso. Imprima qual o novo valor que o usuário deverá pagar do boleto caso pague na data de hoje.

### Desafio 1: 
Agora sim, uma tela completa, com front-end, entrada de dados, e leitura dos mesmos no back-end em PHP.
A ideia é criar uma calculadora bem simples, para isso crie uma tela para que o usuário digite dois números (duas caixas de texto) e a operação desejada (soma, subtração, multiplicação ou divisão), e um botão de calcular. Ao solicitar a operação de calcular (clique no botão), você deverá enviar as informações ao back-end em PHP para que o mesmo faça o cálculo e devolva o resultado da operação.


### Desafio 2: 
Utilize seu código fonte do front-end da tela com o formulário de cadastro do beneficiário e agora ao invés de apenas exibir as informações na própria tela com o javascrip, pode persistir os dados no banco de dados, enviando o formulário para o back-end em PHP e o mesmo acessando o banco de dados em MySql e gravando as informações na tabela de beneficiário. 

