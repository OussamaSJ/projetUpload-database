@extends('admin_panel.adminLayout') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table de produit<a class="btn btn-lg btn-warning" style="float:right;color:white" href="{{route('admin.products.create')}}">+ Ajouter un produit</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Images
                                    </th>
                                    <th>
                                        Nom
                                    </th>
                                   
                                    <th>
                                        Prix
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Categorie
                                    </th>
                                     <th>
                                        Supprimer
                                    </th>
                                    <th>
                                        Modifier
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($prdlist as $prd)
                                <tr>
                                    <td>
                                        <img src="../uploads/products/{{$prd->id}}/{{$prd->image_name}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">{{$prd->name}}</a>
                                    </td>
                                    <td>
                                        {{$prd->price}}
                                    </td>
                                    <td>
                                        {{$prd->description}}
                                    </td>
                                    <td>
                                        {{$prd->category->name}}
                                    </td>
                                                                        <td><a href="{{route('admin.products.delete', ['id' => $prd->id])}}"class="btn btn-danger">Supprimer</a></td>

                                    <td><a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">Modifier</a> </td>
                                     
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

