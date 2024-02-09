<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Empresas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</p>
                </div>

                <div class="p-6 text-gray-900">

                    <div class="bg-gray-100 rounded p-2 mb-4">
                        {{ $clientes->links() }}
                    </div>

                    <table class="table-auto w-full">
                        <thead class="text-left bg-gray-100">
                            <tr>
                                <th class="p-4">Nome</th>
                                <th class="">Email</th>
                                <th class="">Telefone</th>
                                <th class="">Empresa</th>
                                <th class="">Usuário</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr class="hover:bg-gray-100">
                                <td class="">{{ $cliente->nome }}</td>
                                <td class="p-2">{{ $cliente->email }}</td>
                                <td class="">{{ $cliente->telefone }}</td>
                                <td class="">{{ $cliente->empresa }}</td>
                                <td class="">{{ $cliente->user_id }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
                        
</x-app-layout>
