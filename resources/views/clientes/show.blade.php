<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 text-gray-900 dark:text-gray-100">
                <p class="">Olá <strong>{{ Auth::user()->name }}</strong></p>

                <p class="p-2 mb-4">Exibindo dados do cliente {{ $cliente->nome }}</p>

                <p><a href="{{ route('meus.clientes', Auth::user()->id) }}" class="bg-blue-500 text-white rounded p-2">Voltar</a>
    
                <a href="{{ route('cliente.edit', $cliente->id) }}" class="bg-purple-500 text-white rounded p-2">Editar dados</a>

                <a href="{{ route('confirma.delete', $cliente->id) }}" class="bg-red-500 text-white rounded p-2">Excluir</a>
                </p>    

                </div>
                
                <div class="p-6 text-gray-900">
                    <p><strong>Nome: </strong>{{ $cliente->nome }}</p>
                    <p><strong>Email: </strong>{{ $cliente->email }} | <strong>Telefone</strong> {{ $cliente->telefone }}</p>
                    <p><strong>Empresa: </strong>{{ $cliente->empresa }}</p>
                    <p><strong>Telefone Comercial: </strong>{{ $cliente->tel_comecial }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
