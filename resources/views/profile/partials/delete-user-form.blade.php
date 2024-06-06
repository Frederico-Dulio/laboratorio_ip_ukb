<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Excluir conta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Assim que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, faça o download de quaisquer dados ou informações que você deseja reter.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Deletar Conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Tem certeza de que deseja excluir sua conta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Assim que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Introduza a sua palavra-passe para confirmar que pretende eliminar permanentemente a sua conta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Deletar Conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
