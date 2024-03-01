<?php
    require_once("../../config/dataBase.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(isset($_POST["acao"])){
        $tipo = $_POST["type"];

        switch($tipo){
            case 1:
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $telefone = $_POST["telefone"];
                $cpf = $_POST["cpf"];

                $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
                
                $sql = $pdo->prepare("SELECT * FROM usuario WHERE email=?");
                $sql->execute(array($email));

                $emailResult = $sql->fetchAll();

                if(count($emailResult) > 0){
                    $status = 2;
                    header("Location: ../../cadastro.php?status=".urldecode($status)); 
                }
                else{
                    $sql = $pdo->prepare("SELECT * FROM usuario WHERE cpf=?");
                    $sql->execute(array($cpf));

                    $cpfResult = $sql->fetchAll();

                    if(count($cpfResult) > 0){
                        $status = 3;
                        header("Location: ../../cadastro.php?status=".urldecode($status)); 
                    }
                    else{
                        $sql = $pdo->prepare("INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?)");
                        $sql->execute(array($nome, $email, $senhaSegura, $telefone, $cpf));
        
                        $status = 1;
                        header("Location: ../../cadastro.php?status=".urldecode($status)); 
                    }
                }

            break;
            case 2:
                $cargo = $_POST["cargo"];
                $departamento = $_POST["departamento"];
                $primeiro_nome = $_POST["primeiro_nome"];
                $sobrenome = $_POST["sobrenome"];
                $nome_pai = $_POST["nome_pai"];
                $nome_mae = $_POST["nome_mae"];
                $email = $_POST["email"];
                $genero = $_POST["genero"];
                $data_nascimento = $_POST["data_nascimento"];
                $data_admissao = $_POST["data_admissao"];
                $celular = $_POST["celular"];
                $estado_civil = $_POST["estado_civil"];
                $telefone_emergencia = $_POST["telefone_emergencia"];
                $carteira_motorista = $_POST["carteira_motorista"];
                $endereco_atual = $_POST["endereco_atual"];
                $foto_funcionario = $_POST["foto_funcionario"];
                $endereco_permanente = $_POST["endereco_permanente"];
                $numero_epf = $_POST["numero_epf"];
                $salario_basico = $_POST["salario_basico"];
                $tipo_contrato = $_POST["tipo_contrato"];
                $localizacao = $_POST["localizacao"];
                $numero_conta_bancaria = $_POST["numero_conta_bancaria"];
                $sem_conta = isset($_POST["sem_conta"]) ? 1 : 0;
                $nome_banco = $_POST["nome_banco"];
                $nome_filial = $_POST["nome_filial"];
                $url_facebook = $_POST["url_facebook"];
                $url_twitter = $_POST["url_twitter"];
                $url_linkedin = $_POST["url_linkedin"];
                $url_instagram = $_POST["url_instagram"];
                $curriculo_path = $_POST["curriculo"];
                $carta_admissao_path = $_POST["carta_admissao"];
                $outros_documentos_path = $_POST["outros_documentos"];
                $cpf = $_POST["cpf"];
                $rg = $_POST["rg"];
                $senha = $_POST["senha"];
                $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);


                $sql = $pdo->prepare("INSERT INTO funcionario VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $sql->execute(array(
                $cargo,
                $departamento,
                $primeiro_nome,
                $sobrenome,
                $nome_pai,
                $nome_mae,
                $email,
                $genero,
                $data_nascimento,
                $data_admissao,
                $celular,
                $estado_civil,
                $telefone_emergencia,
                $carteira_motorista,
                $foto_funcionario,
                $endereco_atual,
                $endereco_permanente,
                $numero_epf,
                $salario_basico,
                $tipo_contrato,
                $localizacao,
                $numero_conta_bancaria,
                $nome_banco,
                $nome_filial,
                $url_facebook,
                $url_twitter,
                $url_linkedin,
                $url_instagram,
                $curriculo_path,
                $carta_admissao_path,
                $outros_documentos_path,
                $cpf,
                $rg,
                $senhaSegura
                ));

                $status = 1;
                header("Location: ../../adicionarFuncionario.php?status=".urldecode($status));
            break;

            case 3:
                $turma = $_POST["turma"];
                $sala = $_POST["sala"];
                $materia = $_POST["materia"];
                $funcionario = $_POST["funcionario"];

                $sql = $pdo->prepare("INSERT INTO turma VALUES (null, ?, ?, ?, ?)");
                $sql->execute(array($turma,$sala,$materia,$funcionario));

                $status = 1;
                header("Location: ../../novaturma.php?status=".urldecode($status)); 
            break;

            case 4:
                $departamento = $_POST["departamento"];

                $sql = $pdo->prepare("SELECT * FROM departamentos WHERE departamento = ?");
                $sql->execute(array($departamento));

                $departamentoResult = $sql->fetchAll();
                
                if(count($departamentoResult) > 0){
                    $status = 1;
                    header("Location: ../../addDepartamento.php?status=".urldecode($status)); 
                }
                else{
                    $sql = $pdo->prepare("INSERT INTO departamentos VALUES (null, ?)");
                    $sql->execute(array($departamento));

                    $status = 2;
                    header("Location: ../../addDepartamento.php?status=".urldecode($status)); 
                }
            break;

            case 5:
                $anotacao = $_POST["anotacao"];
                $turma = $_POST["turma"];
                $id_professor = $_POST["id_prof"];

                $sql = $pdo->prepare("INSERT INTO anotacaoTuma VALUES (null, ?, ?, ?)");
                $sql->execute(array($id_professor, $anotacao, $turma));

                $status = 2;
                header("Location: ../../anotacaoTuma.php?status=".urldecode($status)); 

            break;
            case 6:
                $anotacao = $_POST["anotacao"];
                $turma = $_POST["turma"];
                $id_professor = $_POST["id_prof"];

                $sql = $pdo->prepare("INSERT INTO atividadeTurma VALUES (null, ?, ?, ?)");
                $sql->execute(array($id_professor, $anotacao, $turma));

                $status = 2;
                header("Location: ../../atividadeTuma.php?status=".urldecode($status)); 

            break;
            case 7:
                $matricula = $_POST["matricula"];
                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $genero = $_POST["genero"];
                $dataNascimento = $_POST["data_nascimento"];
                $tipoSanguineo = $_POST["tipo_sanguineo"];
                $email = $_POST["endereco_email"];
                $telefone = $_POST["telefone"];
                $dataAdmissao = $_POST["data_admissao"];
                $altura = $_POST["altura"];
                $peso = $_POST["peso"];
                $fotoEstudante = $_POST["foto_estudante"];
                
                $nomePai = $_POST["nome_pai"];
                $ocupacaoPai = $_POST["ocupacao_pai"];
                $telefonePai = $_POST["telefone_pai"];
                $fotoPai = $_POST["foto_pai"];
            
                $nomeMae = $_POST["nome_mae"];
                $ocupacaoMae = $_POST["ocupacao_mae"];
                $telefoneMae = $_POST["telefone_mae"];
                $fotoMae = $_POST["foto_mae"];
            
                $endereco = $_POST["endereco"];
            
                $certidaoNascimento = $_POST["certidao_nascimento"];
                $cpf = $_POST["cpf"];
                $rg = $_POST["rg"];
                $turma = $_POST["turma"];

                        
                $sql = $pdo->prepare("INSERT INTO Aluno VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $sql->execute(array($matricula,
                $nome,
                $sobrenome,
                $genero,
                $dataNascimento,
                $tipoSanguineo,
                $email,
                $telefone,
                $dataAdmissao,
                $altura,
                $peso,
                $fotoEstudante,
                $nomePai,
                $ocupacaoPai,
                $telefonePai,
                $fotoPai,
                $nomeMae,
                $ocupacaoMae,
                $telefoneMae,
                $fotoMae,
                $endereco,
                $certidaoNascimento,
                $cpf,
                $turma,
                $rg));

                $status = 2;
                header("Location: ../../atividadeTuma.php?status=".urldecode($status)); 

            break;

            case 8:
                $nome = $_POST["nome"];
                $autor = $_POST["autor"];
                $pdf = $_POST["pdf"];
                $capa = $_POST["capa"];

                if(isset($_FILES["pdf"]) && !empty($_FILES["pdf"])){
                    $pdf = "../../uploads/".$_FILES["pdf"]["name"];
                    move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdf);
                }

                        if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
            $imagem = "./uploads/".$_FILES["imagem"]["name"];
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
        }

                $sql = $pdo->prepare("INSERT INTO biblioteca VALUES (null, ?, ?, ?, ?)");
                $sql->execute(array($nome, $autor, $pdf, $capa));

                $status = 2;
                header("Location: ../../addLivro.php?status=".urldecode($status)); 

            break;
        }
    }
?>
