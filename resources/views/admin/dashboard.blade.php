@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Cestas AAT</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <div class="card" style="width: 36rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-info">{{$fair->name}}</li>
                        <li class="list-group-item">
                            @if($fair->status == 1)
                                {{--<span class="label label-sucess">--}}
                                    Aberta
                                {{--</span>--}}
                            @else
                                <span class="label label-danger">Fechada</span>
                            @endif
                        </li>
                        <li class="list-group-item">Inicio: {{$fair->start_at}}</li>
                        <li class="list-group-item">Fim: {{$fair->end_at}}</li>
                        <li class="list-group-item">Arrecadado: R$ {{$amount}}</li>
                        <li class="list-group-item">Cestas: {{$totalOrders}}</li>
                        <li class="list-group-item">
                            <a href="{{ route('admin.fair.orders-list', $fair->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-money"></i> Pedidos
                            </a>
                            <a href="{{ route('admin.fair.harvest', $fair->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-leaf" aria-hidden="true"></i> Colheita
                            </a>

                            <a href="{{ route('admin.fair.harvest', $fair->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-tag" aria-hidden="true"></i> Etiquetas
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
