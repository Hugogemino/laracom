@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <h3>{{env('APP_NAME')}} - {{$fair->name}}</h3>
                    <br />
                    <div class="box-tools">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Pedido</td>
                                <td>Cliente</td>
                                <td>Telefone</td>
                                <td>e-mail</td>
                                <td>Tipo de Pagamento</td>
                                <td>Produtos</td>
                                <td>Entrega</td>
                                <td>Total</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $order)
                            <tr @if($order->orderStatus->name == 'Cancelado')class="danger"@endif >
                                <td>
                                    #{{$order->id}}
                                </td>
                                <td>
                                    {{$order->customer->name}}
                                </td>
                                <td>
                                    {{$order->address->phone}}
                                </td>
                                <td>
                                    {{$order->customer->email}}
                                </td>
                                <td>
                                    {{$order->payment}}
                                </td>
                                <td>
                                    R$ {{$order->total_products}}
                                </td>
                                <td>
                                    R$ {{$order->total_shipping}}
                                </td>
                                <td>
                                    R$ {{$order->total}}
                                </td>
                                <td>
                                    {{$order->orderStatus->name}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <hr>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    {{--{{ $orders->links() }}--}}
                </div>
            </div>
            <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection