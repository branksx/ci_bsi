<!-- <div class="modal fade" id="modal_logout" tabindex="-1" aria-labelledby="modal_logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
      </div>
      <div class="modal-body">
        <p>Deseja realmente sair do sistema?.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="<?php echo site_url();?>public/login/logout" class="btn btn-success"> Sair</a>
      </div>
    </div>
  </div>
</div> -->

<!-- MODAL ALTERAÇÃO DE SENHA -->
<div class="modal fade" id="modal_logout" tabindex="-1" aria-labelledby="modal_logout" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja efetuar o Logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="<?php echo site_url(); ?>public/login/logout" class='btn btn-success'>OK</a>
      </div>
    </div>
  </div>
</div>

<!-- MODAL ALTERAÇÃO DE SENHA -->
<div class="modal fade" id="modal_alterar_senha" tabindex="-1" aria-labelledby="modal_change_password" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Senha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method='post' action='<?php echo site_url(); ?>public/login/alterarSenha'>
        <div class="modal-body">
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <label class='form-label'>Senha Anterior</label>
                        <input type='password' name='txt_senha_antiga' class='form-control' />    
                        <label class='form-label'>Nova Senha</label>
                        <input type='password' name='txt_senha_nova' class='form-control' />    
                        <label class='form-label'>Redigite nova Senha</label>
                        <input type='password' name='txt_senha_nova2' class='form-control' />
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
    </div>
  </div>
</div>