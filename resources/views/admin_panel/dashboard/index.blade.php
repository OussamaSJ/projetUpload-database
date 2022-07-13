@extends('admin_panel.adminLayout')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <div class="table-responsive">
                        <!-- <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                       T
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sales as $s)
                                <tr>
                                    <td class="font-weight-medium">
                                        {{$s->created_at}}
                                    </td>
                                    <td class="font-weight-medium">
                                        {{$s->order_status}}
                                    </td>
                                    <td class="font-weight-medium">
                                        {{$s->price}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> --> 
                        <div >
                                                <button type="button"  class= "{{Route::is('admin.products') ? 'active' : ''}} btn btn-primary mr-2" ><a  href="{{route('admin.categories')}}" style="padding-right:42px;padding-left:42px;color:#000">Produits</a></button>

                        </div>
                        <div style="margin-top:10px">
                                                <button type="button"  class= "{{Route::is('admin.products') ? 'active' : ''}} btn btn-primary mr-2" ><a  href="{{route('admin.products')}}" style="padding-right:42px;padding-left:42px;color:#000">Produits</a></button>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection