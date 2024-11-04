<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/png" href="img/bora.png">
    <title>Estruturas</title>
</head>
<body>
    <form action="" method="GET">
        <button name="aba" value="php">PHP e HTML</button>
        <button name="aba" value="css">CSS</button>
        <button name="aba" value="sql">SQL</button>
    </form>
        <a href="institucional.php"><button>Voltar</button></a>
<?php
if(isset($_GET['aba'])){
    $ababerta = $_GET['aba'];
    if($ababerta == "php"){


    echo '<h2>PHP e HTML</h2><br/>
    <h4>Página index.php (Home):</h4><br/>
    <p>No início do código, é visível uma estrutura de sessão que verifica se uma sessão já foi iniciada; caso não tenha sido, ela será iniciada. A partir da linha 186, são apresentadas várias estruturas em PHP e HTML. Entre as linhas 188 e 197, existe uma lista para definir botões no rodapé da página, que direcionam para quatro locais (Conta, Institucional, Catálogo e a própria Home). Da linha 198 até a linha 209, há uma estrutura em PHP que verifica se o usuário já está logado. Se o usuário estiver logado, será exibida apenas a foto da conta; caso contrário, será mostrada a foto acompanhada da frase “Entre ou cadastre-se”. A partir da linha 215, é apresentada a logo e um texto explicativo sobre o site. Entre as linhas 227 e 235, é exibido um rodapé contendo o FAQ (ajuda). É importante ressaltar que as linhas 188 a 197, 198 a 209 e 227 a 235 serão utilizadas com frequência ao longo do site; portanto, coloco a explicação apenas neste texto.</p><br/>
    <hr>
    <h4>Catalogo.php:</h4><br>
    <p>No início, é exibido um array com todas as informações dos filmes (que serão utilizadas mais adiante). No início do corpo da página, temos a função toggleMovieDetails, que alterna a exibição dos detalhes de um filme com base em um índice fornecido. Ela localiza os elementos de detalhes e sobreposição do filme usando esse índice. Se os detalhes estiverem escondidos, a função os exibe e oculta a sobreposição; caso contrário, ela esconde os detalhes e exibe a sobreposição. Isso permite que o usuário clique para mostrar ou ocultar as informações do filme. Da linha 344 a 363, utilizamos um loop foreach para obter os valores do array selecionado e apresentá-los na tela. Quando o usuário clica em um filme, as informações correspondentes são exibidas. Graças ao foreach, é possível utilizar várias informações da lista em uma única estrutura; também é visível na tag de link do foreach a presença de várias variáveis, que pegam as informações do array e as passam para a próxima página.</p><br/>
    <hr>
    <h4>Compra.php:</h4><br/>
    <p>No início do código, há a função include, que carrega um arquivo chamado protect, impedindo que usuários não logados acessem a página. Também existem diversas variáveis que estão sendo puxadas da página catalogo.php, as quais são definidas para evitar que fiquem indefinidas. Da linha 384 a 404, um código exibe uma nova tela que apresenta o trailer do filme. Da linha 431 a 458, o código mostra na tela a imagem, o nome, a classificação etária, a duração e a descrição do filme, e a cor do container muda de acordo com o valor da classificação etária. Da linha 463 a 479, são criados inputs que impedem a perda das variáveis extraídas, e são gerados cinco botões correspondentes aos dias da semana. Da linha 481 a 614, as variáveis dos botões semanais são utilizadas para criar uma tela logo abaixo, exibindo os cinemas, horários, se a exibição é dublada ou legendada e o endereço do local, extraindo essas informações dos arrays definidos. Na tag de link na linha 508, é utilizado o mesmo esquema da página catalogo.php.</p><br/>
    <hr>
    <h4>Comprafinal.php:</h4><br/>
    <p>No início do código, são inicializados os contadores com o valor 0, e, em seguida, os contadores são atualizados de acordo com o botão clicado. As variáveis são extraídas do arquivo compra.php, e o valor total é calculado com base nos valores de valorM e valorI. Da linha 271 a 297, a imagem e o título são exibidos, juntamente com dois containers: um para ingressos integrais e outro para ingressos meia, com os contadores correspondentes. No container de resumo da compra, os contadores e valores também mostram quantos ingressos foram adquiridos, o preço e a soma total.</p><br/>
    <hr>
    <h4>Finalização.php:</h4><br/>
    <p>No início, o site também extrai as variáveis da página anterior, comprafinal.php. Nas linhas 223 a 224, são criados botões como “Crédito” e “Débito”, que abrirão uma tela com os formulários para cada tipo de pagamento, conforme a estrutura das linhas 253 a 269. Nas linhas 229 a 245, as variáveis extraídas da página anterior são exibidas no container “Resumo do Pedido”. Da linha 273 a 323, há uma estrutura de código que implementa um modal para pagamentos com cartão de crédito ou débito. O modal contém um formulário com campos para o número do cartão, validade, CVV e nome do titular, que são enviados para finalizado.php. Funções de máscara formatam as entradas enquanto o usuário digita. Botões permitem abrir o modal para crédito ou débito, e o modal pode ser fechado clicando fora dele ou no botão de fechar.</p><br/>
    <hr>
    <h4>Finalizado.php:</h4><br/>
    <p>Esta página não apresenta complexidade, apenas exibirá a mensagem “Compra realizada” e um botão para voltar ao catálogo.</p><br/>
    <hr>
    <h4>institucional.php:</h4><br/>
    <p>Esta página exibirá as variáveis do array, mostrando a imagem, o nome e a função de cada participante, assim como a localização deste texto.</p><br/>
    <hr>
    <h4>FAQ.php:</h4><br/>
    <p>Este código PHP processa um formulário de ajuda, onde os usuários podem enviar seu nome, e-mail e uma mensagem. Ao receber uma requisição POST, ele coleta os dados e utiliza uma declaração preparada para inserir essas informações na tabela de ajuda de um banco de dados. Se a inserção for bem-sucedida, uma mensagem de confirmação é exibida; caso contrário, uma mensagem de erro é apresentada. Por fim, a declaração é encerrada.</p><br/>';
    }elseif($ababerta == "css"){
    echo '<h2>CSS</h2><br/>

    <div class="documento">

    <h4>index.php</h4>
    <h5>Estilos Gerais:</h5>
    <p>O corpo da página utiliza a fonte Arial, apresentando um fundo preto e texto branco.</p>
    
    <h5>Cabeçalho e Rodapé:</h5>
    <p>Ambos apresentam alinhamento horizontal com espaçamento adequado entre os elementos, mantendo um fundo preto com links brancos que mudam de cor ao passar o cursor.</p>
    
    <h5>Imagens e Ícones:</h5>
    <p>Logos e ícones são dimensionados conforme especificações para cabeçalho e rodapé.</p>
    
    <h5>Banner:</h5>
    <p>Inclui uma área de texto centralizada com fundo cinza e texto escuro, além de títulos com efeito de sombra.</p>
    
    <h5>Outros Elementos:</h5>
    <p>Um botão de login com bordas arredondadas e uma seção de imagem "coringa" para um visual impactante.</p>
    <hr>
    <h4>catalogo.php</h4>
    <h5>Estilos Gerais:</h5>
    <p>O corpo da página é preto, com uma imagem de fundo (fundo2.jpg).</p>
    
    <h5>Cabeçalho:</h5>
    <p>Similar ao de index.php, com links brancos que mudam de cor ao passar o cursor.</p>
    
    <h5>Lista de Filmes:</h5>
    <p>Apresenta um container centralizado com fundo escuro, utilizando um layout de grade com 4 colunas. Os itens de filme incluem imagens redimensionadas e uma sobreposição que exibe informações de idade.</p>
    
    <h5>Efeitos de Hover:</h5>
    <p>Os itens se expandem ao passar o cursor, destacando o filme.</p>
    
    <h5>Classificação de Idade:</h5>
    <p>Ícones coloridos indicam as diferentes faixas etárias.</p>
    
    <h5>Botão de Compra:</h5>
    <p>Botão arredondado com efeito de escala ao passar o cursor.</p>
    <hr>
    <h4>login.php</h4>
    <h5>Estilos Gerais:</h5>
    <p>A página apresenta um fundo com imagem centralizada (palhaço.jpg) e uma sobreposição de cores escuras para melhor legibilidade.</p>
    
    <h5>Container de Login:</h5>
    <p>Um box centralizado com bordas arredondadas, fundo preto semi-transparente e elementos organizados verticalmente.</p>
    
    <h5>Cabeçalho de Login:</h5>
    <p>Inclui um título e um logo pequenos no topo da página.</p>
    
    <h5>Formulários:</h5>
    <p>Campos de entrada para texto e senha com design minimalista, fundo escuro e bordas arredondadas.</p>
    
    <h5>Botão de Login:</h5>
    <p>Botão com gradiente e efeito de hover.</p>
    
    <h5>Links e Mensagens:</h5>
    <p>Link de recuperação de senha com efeito sublinhado ao passar o cursor.</p>
    <hr>
    <h4>registro.php</h4>
    <h5>Estilos Gerais:</h5>
    <p>O fundo é semelhante ao de login.php, com uma imagem centralizada (palhaço.jpg).</p>
    
    <h5>Container de Registro:</h5>
    <p>Semelhante ao de login, mas com um campo adicional para e-mail.</p>
    
    <h5>Cabeçalho e Logo:</h5>
    <p>Posicionados no canto superior direito da página.</p>
    
    <h5>Campos de Entrada:</h5>
    <p>Estilo similar aos do login, com layout para entrada de e-mail, texto e senha.</p>
    
    <h5>Botão de Registro:</h5>
    <p>Botão gradiente com efeito de escala ao passar o cursor.</p>
    
    <h5>Links e Notas:</h5>
    <p>Links para termos de uso e outras informações com efeito de hover.</p>
    <hr>
    <h4>institucional.php</h4>
    <h5>Corpo:</h5>
    <p>O fundo é definido por uma imagem com efeito de cobertura. A cor do texto é branca e a fonte utilizada é Arial.</p>
    
    <h5>Logo:</h5>
    <p>Tamanho fixo da imagem do logo (60px de altura).</p>
    
    <h5>Navegação:</h5>
    <p>Um menu horizontal com links que mudam de cor ao passar o mouse.</p>
    
    <h5>Ícone do Usuário:</h5>
    <p>Exibe uma imagem do usuário e o nome ao lado, organizados em um layout flexível.</p>
    
    <h5>Botão de Login:</h5>
    <p>Estilizado com bordas brancas e fundo transparente.</p>
    
    <h5>Container de Participantes:</h5>
    <p>Um layout vertical centralizado para exibir os participantes.</p>
    
    <h5>Estilos de Institucional:</h5>
    <p>Apresenta imagens circulares com bordas brancas e sombra, com título e descrição centralizados.</p>
    
    <h5>Cabeçalho e Rodapé:</h5>
    <p>Estilizados com fundo preto e textos brancos, com links que mudam de estilo ao passar o mouse.</p>
    <hr>
    <h4>comprafinal.php</h4>
    <h5>Corpo:</h5>
    <p>O fundo é escuro, com texto branco, e apresenta flexibilidade na estrutura de layout.</p>
    
    <h5>Cabeçalho:</h5>
    <p>Similar ao de institucional.php, com menu de navegação e logotipo.</p>
    
    <h5>Container Principal:</h5>
    <p>Layout flexível para organizar as seções esquerda e direita, centralizadas horizontalmente.</p>
    
    <h5>Seleção de Tickets:</h5>
    <p>Área escura para escolher tipos de ingressos, com bordas arredondadas e separação entre os tipos.</p>
    
    <h5>Contadores:</h5>
    <p>Botões redondos para incrementar ou decrementar a quantidade de ingressos.</p>
    
    <h5>Resumo do Pedido:</h5>
    <p>Estrutura vertical com imagem e detalhes do filme, incluindo informações sobre o ingresso e totalização do preço.</p>
    
    <h5>Botões de Ação:</h5>
    <p>Estilizados para serem claramente identificáveis e responsivos ao hover.</p>
    <hr>
    <h4>finalizacao.php</h4>
    <h5>Corpo:</h5>
    <p>Mantém o fundo escuro, semelhante ao de comprafinal.php, com estrutura flexível para diferentes seções.</p>
    
    <h5>Cabeçalho:</h5>
    <p>Igual aos arquivos anteriores, mantendo a coesão visual.</p>
    
    <h5>Seções de Pagamento:</h5>
    <p>Duas áreas para opções de pagamento e resumo do pedido, ambas com fundo escuro e bordas arredondadas.</p>
    
    <h5>Botões:</h5>
    <p>Estilizados para pagamento, mudando de cor ao serem destacados.</p>
    
    <h5>Modal:</h5>
    <p>Estilos para uma janela modal que aparece ao interagir, com fundo escuro e conteúdo claro, permitindo interação com formulários.</p>
    <hr>
    <h4>finalizado.php</h4>
    <h5>Corpo:</h5>
    <p>Estrutura semelhante à de finalizacao.php, mas com foco na centralização vertical e horizontal do conteúdo.</p>
    
    <h5>Cabeçalho:</h5>
    <p>Igual aos outros arquivos, com logotipo e navegação.</p>
    
    <h5>Container de Mensagem:</h5>
    <p>Área centralizada com fundo de imagem, bordas arredondadas e sombreamento.</p>
    
    <h5>Títulos e Links:</h5>
    <p>Estilizados para destacar informações com cores contrastantes e interações em hover.</p>
    <hr>
    <h4>FAQ.php</h4>
    <h5>Corpo:</h5>
    <p>Define o corpo com uma imagem de fundo (palhaço) que cobre toda a tela, centralizando o conteúdo vertical e horizontalmente, utilizando a fonte Arial em branco para contraste com o fundo escuro.</p>
    
    <h5>Top Bar:</h5>
    <p>Um elemento posicionado no canto superior esquerdo com uma imagem (logo) de 200px de largura.</p>
    
    <h5>Container de Login:</h5>
    <p>Um card central com fundo semitransparente escuro (80% opaco) e bordas arredondadas, projetado para destacar o formulário de login/FAQ, apresentando sombra para um leve efeito de profundidade.</p>
    
    <h5>Cabeçalho do Login:</h5>
    <p>Composto por um título grande (h4) alinhado à esquerda e um logotipo pequeno de 100px, sendo o subtítulo de cor cinza clara para contraste visual.</p>
    
    <h5>Formulário:</h5>
    <p>Campos de entrada para texto, e-mail e área de texto (usados para o FAQ), com fundo cinza escuro e texto branco, apresentando bordas arredondadas e espaçamento padronizado entre os campos.</p>
    
    <h5>Botão de Enviar:</h5>
    <p>Botão grande que ocupa toda a largura do container, com um gradiente azul roxo que inverte ao passar o mouse, enfatizando o efeito interativo.</p>
    
    <h5>Links:</h5>
    <p>Links em azul claro para chamadas secundárias de ação (como "Esqueci minha senha"), com sublinhado no hover para aumentar a usabilidade.</p>

</div>';

    }elseif($ababerta == "sql"){
echo '<h2>SQL</h2>

    <div class="documento">

    <h4>conexao.php</h4>
    <p>O arquivo <strong>conexao.php</strong> é fundamental para o funcionamento do sistema, pois estabelece a conexão com o banco de dados MySQL. As variáveis <code>$USUARIO</code>, <code>$SENHA</code>, <code>$DATABASE</code> e <code>$HOST</code> são definidas para armazenar as credenciais necessárias.</p>
    <p>A conexão é criada usando a classe <code>mysqli</code>, que oferece métodos para interagir com o banco de dados de forma segura. Após criar a conexão, o código verifica se ocorreu algum erro utilizando <code>connect_errno</code>. Se a conexão falhar, uma mensagem de erro detalhando o motivo é exibida. Este arquivo deve ser incluído em outros scripts que precisam acessar o banco de dados.</p>
    <hr>
    <h4>logout.php</h4>
    <p>O arquivo <strong>logout.php</strong> cuida da finalização da sessão do usuário. Primeiro, ele verifica se uma sessão já foi iniciada; se não, uma nova sessão é iniciada. O método <code>session_destroy()</code> é chamado para remover todas as variáveis de sessão, o que efetivamente desconecta o usuário.</p>
    <p>Em seguida, o código redireciona o usuário para a página de login com <code>header("location: login.php")</code>. Essa abordagem é importante para garantir que os dados do usuário não permaneçam acessíveis após o logout.</p>
    <hr>
    <h4>conta.php</h4>
    <p>O <strong>conta.php</strong> busca exibir informações sobre o usuário logado. Ele inclui <code>conexao.php</code> para ter acesso ao banco de dados e realiza uma consulta SQL que seleciona os campos <code>usuario</code>, <code>cpf</code>, <code>email</code> e <code>numero</code> da tabela <code>usuarios</code>. O resultado da consulta é armazenado em <code>$result</code>.</p>
    <p>Se houver registros, o código itera através dos resultados usando <code>fetch_assoc()</code> para transformar cada linha de resultado em um array associativo. Para cada campo, um bloco HTML é gerado, apresentando as informações do usuário em um formato amigável. O uso de estilos CSS garante que a apresentação das informações seja visualmente atraente. Ao final do script, a conexão com o banco de dados é fechada com <code>$MYSQLI->close()</code>.</p>
    <hr>
    <h4>login.php</h4>
    <p>No arquivo <strong>login.php</strong>, o código gerencia o processo de autenticação do usuário. Quando o formulário de login é enviado, ele verifica se os campos de e-mail e senha estão preenchidos. Se algum campo estiver vazio, uma mensagem de erro é gerada.</p>
    <p>Para prevenir injeções SQL, o método <code>real_escape_string</code> é utilizado para limpar a entrada do usuário. Em seguida, o código executa uma consulta SQL que busca um registro correspondente no banco de dados onde o e-mail e a senha correspondem aos fornecidos.</p>
    <p>Se um registro for encontrado (<code>num_rows</code> igual a 1), a sessão é iniciada, e as variáveis de sessão <code>id</code> e <code>nome</code> são configuradas com os dados do usuário. O redirecionamento para <code>index.php</code> acontece após uma autenticação bem-sucedida. Se as credenciais estiverem incorretas, uma mensagem de erro é exibida.</p>
    <hr>
    <h4>registro.php</h4>
    <p>O arquivo <strong>registro.php</strong> gerencia o registro de novos usuários. Quando o formulário é enviado, o código verifica se o método de requisição é <code>POST</code>, assegurando que a operação é válida. A comparação das senhas digitadas é feita para garantir que ambas sejam iguais.</p>
    <p>Se as senhas não coincidirem, uma mensagem de erro é criada. O código então usa prepared statements para evitar injeções SQL ao verificar a existência de CPF, e-mail ou número de telefone já cadastrados. Essa verificação é feita através de uma consulta que busca registros na tabela <code>usuarios</code>.</p>
    <p>Se não houver duplicatas, um novo registro é inserido no banco de dados utilizando outra consulta <code>INSERT</code>. O uso de <code>bind_param</code> assegura que os dados sejam tratados de forma segura antes da inserção. Ao final, o usuário recebe uma mensagem confirmando o sucesso do cadastro ou um erro se a operação falhar.</p>
    <hr>
    <h4>verifica-login.php</h4>
    <p>O arquivo <strong>verifica_login.php</strong> serve como um mecanismo de proteção para páginas que exigem autenticação. Ele verifica se a sessão foi iniciada e se o usuário está logado, conferindo se a variável de sessão <code>id</code> está definida.</p>
    <p>Se o usuário não estiver logado, uma mensagem de erro é exibida, e um link para a página de login é fornecido. Essa verificação garante que apenas usuários autenticados possam acessar determinadas áreas do sistema, protegendo informações sensíveis.</p>

</div>';
    }

}
?>



</body>
</html>