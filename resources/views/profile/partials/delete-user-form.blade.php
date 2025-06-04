<section class="mb-4">
    <header>
        <h2 class="fs-5 fw-medium text-light">
            {{ __('Deletar Conta') }}
        </h2>

        <p class="mt-2 small text-muted">
            {{ __('Uma vez que sua conta for excluída, todos os seus recursos e dados serão permanentemente apagados. Antes de excluir sua conta, por favor, faça o download de quaisquer dados ou informações que deseja manter."') }}
        </p>
    </header>

    <!-- Botão para abrir modal -->
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        {{ __('Deletar Conta') }}
    </button>

    <!-- Modal -->
    <div class="modal fade @if($errors->userDeletion->isNotEmpty()) show d-block @endif" 
         id="confirmUserDeletionModal" 
         tabindex="-1" 
         aria-labelledby="confirmUserDeletionModalLabel" 
         aria-hidden="true"
         @if($errors->userDeletion->isNotEmpty()) style="background: rgba(0,0,0,0.5);" @endif>
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmUserDeletionModalLabel">
                            {{ __('Tem certeza que deseja deletar sua conta?') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Fechar') }}"></button>
                    </div>

                    <div class="modal-body">
                        <p class="small text-muted">
                            {{ __('Uma vez que sua conta for excluída, todos os seus recursos e dados serão permanentemente apagados. Por favor, insira sua senha para confirmar que deseja excluir sua conta de forma permanente.') }}
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label sr-only">{{ __('Senha') }}</label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-control @error('password', 'userDeletion') is-invalid @enderror" 
                                placeholder="{{ __('Senha') }}">
                            
                            @error('password', 'userDeletion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{ __('Cancelar') }}
                        </button>

                        <button type="submit" class="btn btn-danger ms-2">
                            {{ __('Deletar Conta') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
