<h1 align="center">Teste Técnico</h1>

# Problema

Considere um sistema utilizado por assistências 24 horas, que fornecem benefícios para seus associados. 
Um beneficiário de uma assistência possui produtos que lhe dão direito a solicitar mensalmente reboques, chaveiros, dentre outros.

É necessário então que o sistema possibilite o cadastro do beneficiário, juntamente com os veículos do mesmo. Além disso é importante o cadastro dos produtos e associá-los aos veículos, ou seja, saber qual veículo tem direito a qual produto. 

Por exemplo, posso ter em minha assistência 24 horas o produto básico, que fornece ao beneficiário apenas o direito a reboque e chaveiro, mas também posso ter o produto completo, por um preço maior, que fornece ao beneficiácio tudo que o básico fornece, além de auxílio combustível e carro reserva. 

Agora indo mais a fundo na modelagem de um beneficiário, juntamente com o veículo e os produtos, temos as seguintes entidades:

- Beneficiário: Contém um identificador único, nome, documento, data de nascimento, sexo, situação (ativo ou inativo), endereço (logradouro, numero, bairro, cidade e estado), e-mail e relefone.
- Veículo: Contém um identificador único, deverá ter o identificador do beneficiário ao qual o mesmo pertence, placa, chassi, renavam, modelo, montadora, ano de fabricação, ano de modelo e a situação (ativo ou inativo).
- Produto: Contém um identificador único, nome e situação (ativo ou inativo).

Tendo em mente o cenário proposto, faça as atividades nas seções abaixo da forma que conseguir. 

### Lembre-se: 
- Fique a vontade para pesquisar, ninguém é obrigado a ter tudo em mente. 
- Deixar de responder alguma questão não é eliminatório, apenas queremos saber seu nível de conhecimento.

## Banco de Dados - SQL
Monte as instruções SQLs para resolução das solicitações abaixo:
 
- Obter todos os beneficiários ativos;
- Obter todos os beneficiários ativos que possuam ao menos um veículo ativo;
- Obter todos os beneficiários que tenha mais de 40 anos;
- Obter todos os beneficiários que possuam veículos com mais de dois produtos ativos;
- Cadastrar um beneficiário;
- Cadastrar um veículo ativo para o beneficiário criado no passo anterior e vincular a ele o produto "ASSISTENCIA 24 HORAS";
- Inativar todos os veículos de ano de fabricação menor do que 2001.
### Desafio: 
Exclua os registros da tabela produtoVeiculo cujo o veículo ou produto estejam inativos.

## Front-end
Criar uma tela com o formulário de cadastro do beneficiário com os campos da tabela beneficiário. 
No final da tela deverá adicionar um botão para salvar os dados, ao clicar neste botão, exibir as informações preenchidas pelo usuário logo abaixo do formulário.
### Desafio: 
Ao clicar em salvar, antes de realizar a exibição dos dados preenchidos, validar se o beneficiário é maior de 18 anos, se a idade for menor do que 18 anos exibir mensagem de erro, caso contrário continue com o fluxo normal de exibição das informações. 
