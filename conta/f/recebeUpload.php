	
<?php
/******
 * Upload de imagens
 ******/

// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {


    ?>
    
    <?php

    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
    $tamanho = $_FILES[ 'arquivo' ][ 'size' ];


    if ($tamanho<=1000000) {
    // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

    // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );

    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid ( time () ) .'.'. $extensao;

        // Concatena a pasta com o nome
            $destino = 'avatar/' .$novoNome;


        // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {




                require_once '../php/class/freelancer.class.php';

                $freelancer= new freelancer();
                $idfreelancer=$_POST['idfreelancer'];
                $freelancer->setId($idfreelancer);
                $freelancer->setUrlAvatar($destino);
                $freelancer->alterarAvatar();

                echo "
                <script>
                alert('Seu avatar foi atualizado!');
                window.location='avatar.php'; 
                </script>

                ";



            }
        }

        else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.';
    }
    else
     echo "
 <script>
 alert('Você pode enviar apenas arquivos jpg; jpeg; gif; png ou o a imagem é maior que 1MB');
 window.location='avatar.php'; 
 </script>

 ";


}
else
    echo "
<script>
alert('Você não enviou nenhum arquivo!');
window.location='avatar.php'; 
</script>

";