@extends('layout.main')

@section('title','Cadastrar Produto')

@section('content')

<div class="container">
    <div class="row">
        <div class="offset-1"></div>
        <div class="col-md-10">

                                                    <!-- Card de cadastro de produtos -->
            <div class="card mt-5">
                <div class="card-header mb-0">
                    <span class="gray-text teko-font font-weight-bold nav-link-text d-block text-center">Cadastrar
                        Produto</span>
                </div>
                <div class="card-body pt-2">
                        {{--  @component('components.testalert', ["autor"=>"Pedro Henrique"])
                            <p>O presente texto tem o intuito de auxiliar o usuário no manuseio do sistema legado</p>
                        @endcomponent  --}}
                    @if(isset($success))
                        @component('components.success')
                            Produto Cadastrado com sucesso
                        @endcomponent
                    @endif

                    {{--  @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $message)
                                {{$message}}<br>
                            @endforeach
                        </div>
                    @endif  --}}

                    <form action="{{route('produtos.store')}}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cproduto" class="form-label"><i class="fa fa-shopping-basket"
                                                aria-hidden="true"></i> Nome do produto:</label>
                                        <input type="text" name="produto" id="cproduto" maxlength="20"
                                            class="form-control form-control-sm {{ $errors->has('produto') ?'is-invalid':'' }}" value="{{old('produto')}}" autofocus>
                                            @error('produto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-between">

                                    <div class="form-group mr-1">
                                        <label for="cquantidade" class="form-label">Qnt de entrada: </label>
                                        <input type="number" min="1" id="cquantidade" class="form-control form-control-sm {{ $errors->has('quantidade')?'is-invalid':'' }}"
                                            name="quantidade" placeholder="Total em unidades" value="{{old('quantidade')}}">
                                            @error('quantidade')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="cpreco" class="form-label">Valor unidade: </label>
                                        <input type="text" placeholder="R$" id="cpreco" name="preco"
                                            class="form-control form-control-sm w-100 {{ $errors->has('preco')?'is-invalid':'' }}" value="{{old('preco')}}">
                                            @if($errors->has('preco'))
                                               <div class="invalid-feedback">
                                                    {{ $errors->first('preco') }}
                                               </div>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cBarras" class="form-label"><i class="fa fa-barcode"
                                                aria-hidden="true"></i> Cod. Barras:</label>
                                        <input type="text" name="cod_barras" id="cBarras" maxlength="1000"
                                            class="form-control form-control-sm {{ $errors->has('cod_barras')?'is-invalid':'' }}" value="{{old('cod_barras')}}">
                                        @error('cod_barras')
                                           <div class="invalid-feedback">
                                                {{ $message }}
                                           </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cfornecedor" class="form-label"><i class="fa fa-truck"
                                                aria-hidden="true"></i> Fornecedor:</label>
                                        <select name="fornecedor" id="cfornecedor" class="form-control form-control-sm ">
                                            <option value="Kernel Imports">Kernel Imports</option>
                                            <option value="Apple Nation Brasil">Apple Nation Brasil</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cdataentrada" class="form-label"><i class="fa fa-calendar"
                                                aria-hidden="true"></i> Data entrada:</label>
                                        <input class="form-control form-control-sm {{ $errors->has('dataEntrada')?'is-invalid':'' }}" type="date" name="dataEntrada"
                                            id="cdataentrada" value="{{old('dataEntrada')}}">
                                            @error('dataEntrada')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cNfce" class="form-label"><i class="fa fa-qrcode"
                                                aria-hidden="true"></i> Cód. NFC-e</label>
                                        <input type="text" name="nfce" id="cNfce" class="form-control form-control-sm {{ $errors->has('nfce')?'is-invalid':'' }}"
                                            placeholder="XXXXXX-XX" maxlength="9" value="{{old('nfce')}}">
                                            @error('nfce')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cdescricao" class="form-label">Descrição:</label>
                                    <textarea class="form-control form-control-sm" name="descricao" id="cdescricao"
                                        cols="5" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3 d-flex justify-content-between">
                                    <button class="btn btn-sm btn-success font-weight-bold"><i class="fa fa-check"
                                            aria-hidden="true"></i> Cadastrar</button>
                                            <a class="btn btn-sm btn-light font-weight-bold" href="{{route('produtos.index')}}"><i class="fa fa-arrow-left"></i> Voltar</a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
    <div class="offset-1"></div>
    </div>
    </div>
    <script src="{{asset('js/validation.js')}}"></script>
    @endsection
