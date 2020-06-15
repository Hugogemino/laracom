@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.percentages.store') }}" method="post" class="form">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Nome <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Nome" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="input-group">
                            <table class="table table-bordered">
                                <tr>
                                    <th>
                                        Produtor
                                    </th>
                                    <th>
                                        Plataforma
                                    </th>
                                    <th>
                                        Separação
                                    </th>
                                    <th>
                                        Caixinha
                                    </th>
                                    <th>
                                        Sacolas e Embalagens
                                    </th>
                                    <th>
                                        Pagamento online
                                    </th>
                                    <th>
                                        Fechamento do Caixa
                                    </th>
                                    <th>
                                        Marketing / Divulgação
                                    </th>
                                    <th>
                                        Administração
                                    </th>
                                    <th>
                                        Venda
                                    </th>
                                    <th>
                                        Ponto de Retirada
                                    </th>
                                    <th>
                                        Logística
                                    </th>
                                    <th>
                                        Sac - Contato Cliente
                                    </th>

                                </tr>

                                <tr>
                                    <td>
                                        <input type="text" name="farmer"  id="farmer" class="form-control"/>
                                    </td>
                                    <td>

                                        <input type="text" name="plataform"  id="plataform" class="form-control"/>

                                    </td>
                                    <td>
                                        <input type="text" name="separation"  id="separation" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="fund"  id="fund" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="bags"  id="bags" class="form-control"/>

                                    </td>
                                    <td>
                                        <input type="text" name="payment_online"  id="payment_online" class="form-control"/>

                                    </td>
                                    <td>
                                        <input type="text" name="accounting_close"  id="accounting_close" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="marketing"  id="marketing" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="administration"  id="administration" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="seeller"  id="seeller" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="pickup_location"  id="pickup_location" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="logistic"  id="logistic" class="form-control"/>
                                    </td>
                                    <td>
                                        <input type="text" name="client_contact"  id="client_contact" class="form-control"/>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Voltar</a>
                        <button type="submit" class="btn btn-primary">Criar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
