<?php ?>

    <div class="col-6 offset-3 my-3">
        <form action="cadastrarCandidato.php" method="post">
            <h2 class="text-center">Cadastro do candidato</h2>       
            <div class="form-group">
                <input type="text" class="form-control" name="txtNome" placeholder="Nome" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="txtEmail" placeholder="E-mail" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtRg" placeholder="RG" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtCpf" placeholder="CPF" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtCurso" placeholder="Curso Pretendido" required="required">
            </div>
            <div class="form-group">
                <div class="form-check">
                <input type="radio" class="form-check-input" name="txtSexo" id="sexoInput1" value="M" required="required">Masculino
                </div>
                <div class="form-check">
                <input type="radio" class="form-check-input" name="txtSexo" id="sexoInput2" value="F"  required="required">Feminino
                </div>
            </div>
            <hr>
            <h5 class="my-3">Filiação</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="txtPai" placeholder="Nome do pai" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtMae" placeholder="Nome da mãe" required="required">
            </div>
            <hr>
            <h5 class="my-3">Telefone</h5>
            <div class="form-group">
                <input type="tel" class="form-control" name="txtTelefone" placeholder="Telefone" required="required">
            </div>
            <h5 class="my-3">Área de interesse</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="txtArea" placeholder="Área de interesse" required="required">
            </div>
            <h5 class="my-3">Endereço</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="txtLogradouro" placeholder="Logradouro" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtBairro" placeholder="Bairro" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtCidade" placeholder="Cidade" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark btn-block">Gravar</button>
            </div>       
        </form>
    </div>
