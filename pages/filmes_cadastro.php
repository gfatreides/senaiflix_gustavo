<body>
    <header>
        <h1>Cadastrar filmes</h1>
    </header>

<div id="conteudo">
    <form method="post" action="pages/filmes_cadastro_salvar.php" class="row">  
        <!--TITULO-->
        <div class="col-md-12">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <br>

        <!--IMAGEM-->
        <div class="form-group">
        <label for="foto">Imagem</label>
        <input type="file" class="form-control-film" id="foto" name="foto" >
        </div>
        <br>

        <!--DESCRIÇÃO-->
        <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
        </div>
        <br>
        <!--ANO LANÇAMENTO-->
        <div class="col-12">
        <label for="ano_lancamento" class="form-label">Ano Lançamento</label>
        <input type="text" class="form-control" name="ano_lancamento" id="ano_lancamento">
        </div>
        <br>
        <!--GENERO-->
        <div class="col-12">
        <label for="genero" class="form-label">Genero</label>
        <input type="text" class="form-control" id="genero" name="genero">
        </div>
        <br>
        <!--CLASSIFICAÇÃO-->
        <div class="col-12">
        <label for="classificacao" class="form-label">Classificacao</label>
        <input type="text" class="form-control" id="classificacao" name="classificacao">
        </div>
        <br>
        <!--DATA CADASTRO-->
        <div class="col-12">
        <label for="data_cadastro" class="form-label">Data Cadastro</label>
        <input type="text" class="form-control" id="data_cadastro" name="data_cadastro">
        </div>
        <br>
        <!--DATA ATUALIZAÇÃO-->
        <div class="col-12">
        <label for="data_atualizacao" class="form-label">Data Atualização</label>
        <input type="text" class="form-control" id="data_atualizacao" name="data_atualizacao">
        </div>
        <br>
        <!--STATUS-->
        <div class="col-12">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status">
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
        <br>
        <br>
        
        <button type="reset"  class="btn btn-primary">Limpar</a></button>
        </div>
    </form>
    <br>

    <a class="nav-link" href="index.php?pagina=filmes_listar">Listar Filmes Cadastrados</a>    
</div>
    