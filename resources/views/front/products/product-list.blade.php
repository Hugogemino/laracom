@if(!empty($products) && !collect($products)->isEmpty())
    @if(session()->has('message'))
        <div class="box no-border">
            <div class="box-tools">
                <p class="alert alert-success alert-dismissible">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </p>
            </div>
        </div>
    @endif
    <ul class="row text-center list-unstyled">
        @foreach($products as $product)
            <div class="col-md-3 col-sm-6 col-xs-12 product-list">
                <div class="single-product">
                    <div class="product">
                        <div class="product-overlay">
                            <div class="vcenter">
                                <div class="centrize">
                                    <ul class="list-unstyled list-group">
                                        <li>
                                            <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="quantity" value="1" />
                                                <input type="hidden" name="product" value="{{ $product->id }}">
                                                <button id="add-to-cart-btn" type="submit" class="btn btn-warning"
                                                        @if($product->quantity < 1)
                                                            disabled
                                                        @endif
                                                        data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i>
                                                    @if($product->quantity < 1)
                                                        ESGOTADO
                                                    @else
                                                        Adicionar ao carrinho
                                                    @endif
                                                </button>
                                            </form>
                                        </li>
                                        <li>  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal_{{ $product->id }}"> <i class="fa fa-eye"></i> Visualizar</button>
                                        <li>  <a class="btn btn-default product-btn" href="{{ route('front.get.product', str_slug($product->slug)) }}"> <i class="fa fa-link"></i> Ir ao Produto</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if(isset($product->cover))
                            <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                        @else
                            <img src="https://placehold.it/263x330" alt="{{ $product->name }}" class="img-bordered img-responsive" />
                        @endif
                    </div>

                    <div class="product-text">
                        <h4>{{ $product->name }}</h4>
                        <p>
                            {{ config('cart.currency') }}
                            @if(!is_null($product->attributes->where('default', 1)->first()))
                                @if(!is_null($product->attributes->where('default', 1)->first()->sale_price))
                                    {{ number_format($product->attributes->where('default', 1)->first()->sale_price, 2) }}
                                    <p class="text text-danger">Sale!</p>
                                @else
                                    {{ number_format($product->attributes->where('default', 1)->first()->price, 2) }}
                                @endif
                            @else
                                {{ number_format($product->price, 2) }}
                            @endif
                        </p>
                                <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="quantity" value="1" />
                                    <input type="hidden" name="product" value="{{ $product->id }}">
                                    <button id="add-to-cart-btn" type="submit" class="btn btn-warning"
                                            @if($product->quantity < 1)
                                            disabled
                                            @endif
                                            data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i>
                                        @if($product->quantity < 1)
                                            ESGOTADO
                                        @else
                                            Comprar
                                        @endif
                                    </button>
                                </form>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                @include('layouts.front.product')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if($products instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">{{ $products->links() }}</div>
                </div>
            </div>
        @endif
    </ul>
@else
    <p class="alert alert-warning">No products yet.</p>
@endif