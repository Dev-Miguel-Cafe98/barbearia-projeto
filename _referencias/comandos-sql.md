# Operaçoes CRUD usando SQL

## Resumo

- C: Criar/inserir dados   -> INSERT
- R: (R) ler dados         -> SELECT
- U: (U) Atualizar dados   -> UPDATE
- D: (D) Excluir           -> DELETE

## Exemplos para tabela "usuarios"

### Inserindo usuarios


INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Adriano','teste123@gmail.com','123senac','admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Chapolin','teste456@gmail.com','456senac','editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Florinda','florinda123@gmail.com','florindasenac','editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Kiko','kiko123@gmail.com','kikosenac','editor');

### Inserindo noticias

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Meu pai ganhou na mega-sena',
    'To rico,tchau pra voces',
    'Jogou e ganhou',
    'premio.jpg',
    1

);

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Ultimas noticias agricolas, sobre clima e Previsao do tempo',
    'Moagem de cana de acucar atinge 27 milhoes de toneladas na 2 quinzena de outubro',
    'Qualidade da Materia Prima teve variaçao positiva',
    'tempo.jpg',
    4

);

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Safra 24/25 de milho exige atençao ao manejo e tratos culturais',
    'Apesar do cenário promissor, os agricultores devem estar atentos aos desafios que podem impactar a produtividade',
    'Impactar a qualidade e a produtividade',
    'tratosCulturais.jpg',
    2

);

INSERT INTO noticias (titulo, texto,resumo, imagem, usuario_id)
VALUES (
    'Area tratada com defensivos agricolas cresce 10.9% no Brasil',
    'Pesquisa mostra que, entre janeiro e setembro de 2024 foram tratados mais de 1 Bilhao de hectares',
    'Defensivos agricolas em area produtiva',
    'defensivos.jpg',
    3

);

### Leitura de dados

SELECT data, titulo FROM noticias;

SELECT * FROM noticias;

### Leitura de dados da tabela "usuarios"

SELECT nome, email, tipo FROM usuarios;

SELECT nome, email, tipo FROM usuarios WHERE tipo= 'editor';

### Atualizaçao de dados dos usuários

UPDATE usuarios SET email = 'chapolin456@gmail.com'
WHERE id= 2;

### Excluindo dados da tabela "noticias"

DELETE FROM noticias WHERE id= 1;



<!-- </div>
    <div id="comp-k5cws23b" class="bkIuWA comp-k5cws23b">
        <div data-mesh-id="comp-k5cws23binlineContent" data-testid="inline-content" class="">
            <div data-mesh-id="comp-k5cws23binlineContent-gridContainer" data-testid="mesh-container-content">
                <form id="comp-kegqxf57" class="JVi7i2 comp-kegqxf57 wixui-form">
                    <div data-mesh-id="comp-kegqxf57inlineContent" data-testid="inline-content" class="">
                        <div data-mesh-id="comp-kegqxf57inlineContent-gridContainer" data-testid="mesh-container-content">
                            <div id="comp-kegqxf5b" class="MpKiNN comp-kegqxf5b wixui-text-input lPl_oN LyB02C">
                                <div class="pUnTVX"><input name="nome-*" id="input_comp-kegqxf5b" class="KvoMHf has-custom-focus wixui-text-input__input" type="text" placeholder="Nome *" required="" aria-required="true" aria-invalid="true" maxlength="100" autocomplete="off" aria-label="Nome *" value=""></div>
                            </div>
                            <div id="comp-kegqxf5e" class="MpKiNN comp-kegqxf5e wixui-text-input LyB02C">
                                <div class="pUnTVX"><input name="phone" id="input_comp-kegqxf5e" class="KvoMHf has-custom-focus wixui-text-input__input" type="tel" placeholder="Celular" aria-required="false" aria-invalid="false" maxlength="50" autocomplete="off" aria-label="Celular" value=""></div>
                            </div>
                            <div id="comp-kegqxf5h" class="MpKiNN comp-kegqxf5h wixui-text-input lPl_oN LyB02C">
                                <div class="pUnTVX"><input name="email" id="input_comp-kegqxf5h" class="KvoMHf has-custom-focus wixui-text-input__input" type="email" placeholder="Email *" required="" aria-required="true" aria-invalid="true" pattern="^.+@.+\.[a-zA-Z]{2,63}$" maxlength="250" autocomplete="off" aria-label="Email *" value=""></div>
                            </div>
                            <div id="comp-kegqxf5j2" class="MpKiNN comp-kegqxf5j2 wixui-text-input LyB02C">
                                <div class="pUnTVX"><input name="assunto" id="input_comp-kegqxf5j2" class="KvoMHf has-custom-focus wixui-text-input__input" type="text" placeholder="Assunto" aria-required="false" aria-invalid="false" autocomplete="off" aria-label="Assunto" value=""></div>
                            </div>
                            <div id="comp-kegqxf5m1" class="snt4Te comp-kegqxf5m1 wixui-text-box pOExcs"><label for="textarea_comp-kegqxf5m1" class="PSkPrR wixui-text-box__label"></label><textarea id="textarea_comp-kegqxf5m1" class="rEindN has-custom-focus wixui-text-box__input" placeholder="Mensagem" aria-required="false" aria-invalid="false"></textarea></div>
                            <div class="comp-kegqxf5p1 FubTgk" id="comp-kegqxf5p1" aria-disabled="false"><button aria-disabled="false" data-testid="buttonElement" class="uDW_Qe wixui-button PlZyDq"><span class="l7_2fn wixui-button__label">ENVIAR</span></button></div>
                            <div id="comp-kegqxf5s1" class="HcOXKn SxM0TO QxJLC3 lq2cno comp-kegqxf5s1 wixui-rich-text" data-testid="richTextElement">
                                <p dir="ltr" style="font-size:14px; text-align:center;" class="wixui-rich-text__text"><span style="color:#68B04D;" class="wixui-rich-text__text"><span style="font-family:helvetica-w01-roman,helvetica-w02-roman,helvetica-lt-w10-roman,sans-serif;" class="wixui-rich-text__text"><span style="font-size:14px;" class="wixui-rich-text__text">Sua mensagem foi enviada com sucesso!</span></span></span></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->