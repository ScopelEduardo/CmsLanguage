# ScopelEduardo_CmsLanguage

## Informações ##

- Módulo para Magento que adiciona a tag de linguagem quando a página existe em várias visões de loja
- Versão do Magento 2.4.4
- Versão do PHP 8.0

## Instalação ##

Para instalar o módulo devem ser realizados os seguintes passos:
- Fazer download dos arquivos do repositorio
- Descompactar os arquivos
- Renomear o diretório resultante para `CmsLanguage`
- Adicioná-los a um diretório ScopelEduardo que deve estar localizada dentro do diretório code (app/code/ScopelEduardo/CmsLanguage)
- Executar os seguintes comandos no terminal:
    - bin/magento setup:upgrade
    - bin/magento setup:di:compile
    - bin/magento cache:clean

## Desenvolvimento ##
- Foi criado um block que consegue identificar a página Cms em questão e retornar informações sobre esta, como seu identificador, se ela existe em mais de 1 (uma) visão de loja, a URL base e o local/linguagem da loja em que a página está atualmente<br>
- Foi adicionado esse block ao block header no layout e associado ao template phtml<br>
- O template phtml, utilizando a informação disponibilizada pelo block verifica se página se encontra em mais de uma visão de loja e caso estiver adiciona a tag de linguagem: `<link rel="alternate" hreflang="{storeLanguage}" href="{baseUrl}{cmsPageUrl}">`