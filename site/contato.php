<?php require "include/cabecalho.php" ?>

    <h2>Contato</h2>
    <hr>

    <p>Fale conosco</p>
    <hr>

        <article >

                <form id="my-form" action="https://formspree.io/f/meqnrdyl" method="post">

                    <div>
                        <label for="">Nome:</label>
                        <input placeholder="Escreva seu nome completo"  type="text" name="nome" id="nome">
                    </div>

                    <div>
                        <label for="">E-mail:</label>
                        <input placeholder="Escreva seu email"  type="text" name="email" id="email">
                    </div>

                    <div>
                        <label for="">Data de Nascimento:</label>
                        <input placeholder="Escreva sua data de nascimento"  type="date" name="data" id="data">
                    </div>

                    <div>
                        <label for="">Telefone fixo:</label>
                        <input placeholder="(00) 0000-0000"  type="tel" name="telefone" id="telefone">
                    </div>

                    <div>
                        <label for="">Telefone cel:</label>
                        <input placeholder="(00) 9 0000-0000"  type="tel1" name="telefone1" id="telefone1">
                    </div>

                    <div>
                        <label for="">Idade:</label>
                        <input placeholder=""  type="number" name="idade" id="idade" min="18" max="110">
                    </div>

                    <div>
                        <!-- tag radio representa uma seleção única -->
                        <p>
                            <input type="radio" name="sexo" id="mas">
                            <label for="masculino">Masculino</label>

                            <input type="radio" name="sexo" id="mas">
                            <label for="feminino">Feminino</label>
                        </p>
                    </div>

                    <div>
                        <!-- tag radio representa uma multipla seleção
                        é possível habilitar uma caixa fixa e disable (pesquisar sobre)
                        -->

                        <!-- o atributo "required" coloca que seja completado a informação como obrigatório -->
                        <p>
                            <input type="checkbox" name="interesses" id="design" required>
                            <label for="">Design</label>

                            <input type="checkbox" name="interesses" id="marketing" required>
                            <label for="">Marketing</label>

                            <input type="checkbox" name="interesses" id="programacao">
                            <label for="">Programação</label>
                        </p>
                    </div>
                    <!-- campo obrigatório verificar -->

                    <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                    <div>
                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" maxlength="9" required>
                        <button id="localizar-cep">Localizar</button>
                        <b id="status"></b>
                    </div>
                    <div>
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" size="30">
                    </div>
                    <div>
                        <label for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro">
                    </div>
                    <div>
                        <label for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div>
                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <!-- /FIM HTML PARA CEP/ENDEREÇO -->

<!-- ********************     -->
                    <div>
                        <label for="assunto">Assunto</label>
                        <select name="" id="">
                            <option></option> 
                            <option>Dúvidas</option>
                            <option>Elogios</option>
                            <option>Reclamações</option>
                            <option>Sugestões</option>
                            <option>Outros</option>
                        </select>
                    </div>
            </form>
        </article>  
    
    
<?php require "include/rodape.php" ?>