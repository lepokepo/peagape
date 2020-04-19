<html>

<head>
    <title>Cadastro</title>
</head>

<body>
    <form method="post">
        <!-- NOME -->
        <p>Nome: <input type="text" maxlength="40" name="nomeTx" /></p>
        <?php
        if (isset($_POST['nomeTx']) && !empty($_POST['nomeTx'])) {
            $nomi = explode(" ", $_POST['nomeTx']);
            if (sizeof($nomi) == 2) {
                echo "certo nome";
            } else {
                echo "Nome precisa ter 2 palavras";
            }
        } else if (isset($_POST['emailTx']) && empty($_POST['emailTx'])) {
            echo "Nome não pode ser nulo!";
        }
        ?>
        <!-- EMAIL -->
        <p>Email: <input type="text" maxlength="50" name="emailTx" /></p>
        <?php
        if (isset($_POST['emailTx']) && !empty($_POST['emailTx'])) {

            if (strlen($_POST['emailTx']) > 12) {
                if (substr_count($_POST['emailTx'], '@') == 1 && substr_count($_POST['emailTx'], '.') >= 1) {
                    echo 'certo email';
                } else {
                    echo 'Caracteres do Email inválidos';
                }
            } else {
                echo "Email precisa ter mais de 12 caracteres!";
            }
        } else if (isset($_POST['emailTx']) && empty($_POST['emailTx'])) {
            echo "Email não pode ser nulo!";
        }
        ?>
        <!-- SENHA -->
        <p>Senha: <input type="password" name="senhaTx" /></p>
        <p>Confirmar Senha: <input type="password" name="cSenhaTx" /></p>
        <?php

        if (isset($_POST['senhaTx']) && !empty($_POST['senhaTx']) && isset($_POST['cSenhaTx']) && !empty($_POST['cSenhaTx'])) {
            if ($_POST['senhaTx'] == $_POST['cSenhaTx']) {
                if (strlen($_POST['senhaTx']) > 3) {
                    echo "certo senhas";
                } else {
                    echo "Senhas precisam ter mais de 3 caracteres!";
                }
            } else {
                echo "Senhas precisam ser iguais!";
            }
        } else if (isset($_POST['senhaTx']) && empty($_POST['senhaTx'])) {
            echo "Senha não pode ser nula!";
        }
        ?>
        <!-- DATA NASCIMENTO -->
        <p>Data Nascimento: <input type="date" name="dataTx" /></p>
        <?php

        if (isset($_POST['dataTx']) && !empty($_POST['dataTx'])) {
            echo "certo data";
        } else if (isset($_POST['dataTx']) && empty($_POST['dataTx'])) {
            echo "Data inválida!";
        }
        ?>

        <p><input type="submit"></p>
    </form>
</body>

</html>