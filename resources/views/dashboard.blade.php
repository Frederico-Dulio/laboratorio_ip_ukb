<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <h1 style="color: snow;">Lista dos Livros</h1>

                <!-- Cadastrar Livros -->
                    <x-nav-link href="" data-bs-toggle="modal" data-bs-target="#staticAutor" style="color: snow;">
                        <i class="bi bi-plus-circle-fill" style="color: snow" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Cadastrar Livros"></i>
                    </x-nav-link>
            </div>
            <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="table table-hover table-bordered overflow-hidden sm:rounded-lg" >
                        <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">Titulo</th>
                            <th scope="col" style="text-align: center;">Autor</th>
                            <th scope="col" style="text-align: center;">Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>{{Auth::user()->name}}</td>
                            <td style="text-align: center;">
                                <i class="bi bi-pencil-square btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar Livro"></i>
                                <i class="bi bi-eye-fill btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Visualizar Livro"></i>
                                <i class="bi bi-trash-fill btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Deletar Livro"></i>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        "use strict";
        var o = "rtl" === $("html").attr("data-textdirection");
        @if (session('success'))
        toastr.success("{{ session('success') }}",
            "",
            {
                closeButton: !0,
                tapToDismiss: !0,
                progressBar: !0,
                rtl: o
            }
        );
        @endif
    </script>
</x-app-layout>
