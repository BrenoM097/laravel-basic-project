<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar Empresa') }}
        </h2>   
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <p class="mb-4">Olá <strong>{{ Auth::user()->name }}</strong></p>

                    <p class="mb-4 p-6">    
                        <a href="{{ route('meus.clientes', Auth::user()->id) }}" class="bg-blue-500 text-white rounded p-2">Listar Empresas</a>
                    </p>

                    @if(session('msg')) 
                    <p class="bg-blue-500 p-2 rounded text-center text-white mb-4">{{ session('msg') }}</p>
                    @endif
                    

                    <form action="{{ route('cliente.store') }}" method="post">
                        @csrf
                        
                        <fieldset class="border-2 rounded p-6">
                            <legend>Preencha todos os campos</legend>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">  

                            <div class="bg-gray-100 p-4 rounded -overflow-hidden mb-4"  >
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-100 p-4 rounded -overflow-hidden mb-4" >
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-100 p-4 rounded -overflow-hidden mb-4" >
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="w-full rounded">
                            </div>

                            <div class="bg-gray-100 p-4 rounded -overflow-hidden mb-4" >
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa" id="empresa" class="w-full rounded">
                            </div>

                            <div class="bg-gray-100 p-4 rounded -overflow-hidden mb-4" >
                                <label for="tel_comecial">Telefone Comercial</label>
                                <input type="text" name="tel_comecial" id="tel_comecial" class="w-full rounded">
                            </div>

                            <div class="bg-gray-100 p-4 rounded -overflow-hidden">
                                <input type="submit" value="Cadastrar" class="bg-blue-500 text-white rounded p-2">
                                <input type="reset" value="Limpar" class="bg-red-500 text-white rounded p-2">
                            </div>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
