# Instrucoes
Utilizar o o materialize para criar as paginas, nao pode ser editado direto os arquivos do materialize somente 
pode ser extendido a funcionalidade por exemplo editando os arquivos 'app-assets/js/custom/custom-scritps.js' e 
'app-assets/css/custom/custom.css', versionar o processo de resolucao das tarefas com commits explicativos sobre oque esta sendo feito

# Tarefas
1) Implementar a funcao \Nerdweb\Database->updatePrepared(), utilizando o prototipo definido na classe procuranto manter o 
codigo similar as funcoes jah definidas nessa mesma classe

2) Criar um CRUD para Noticias no namespace Nerdweb, os campos necessarios pra uma noticia sao [id, data, url_noticia, titulo, conteudo]

3) Utilizar o materialize para criar uma pagina com uma tabela utilizando o datatables e com os seguintes campos [id, titulo, data, url_noticia]

4) Criar uma pagina interna pra exibir as noticias

5) Alterar a pagina de listagem de noticias para adicionar um botao "Adicionar noticia", a insercao de noticias deve ser feito por meio de uma modal
com os campos [data, url_noticia, titulo, conteudo]

# Bonus
1) Implementar os blocos ( head, header, footer, conteudo ) como templates utilizando a classe \Nerdweb\Template extendendo a classe se necessario

2) Alterar a classe \Nerdweb\Database para utilizar sqlite porem mantendo compatibilidade com codigos existentes 
( dica: eh necessario somente alterar o parametro args no construtor e a funcao connect() )

3) Sugerir um modo de simplificar as chamadas de selectPrepared()  insertPrepared() e updatePrepared(), sem quebrar
compatibilidade com codigos existentes ( pode ser definido funcoes novas caso necessario), soh precisa ser discutido a ideia
nao eh necessario uma implementacao dessas novas funcoes.
