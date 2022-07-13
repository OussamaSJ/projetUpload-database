@extends('admin_panel.adminLayout') @section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>
<style>label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}</style>



<div class="content-wrapper">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card" style="border:1px solid black;box-shadow: 10px -3px 11px grey;">
                <div class="card-body">
                    <h4 class="card-title">Ajouter une catégorie</h4>
                    <form class="forms-sample" method="post" id="cat_form">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="Name" id="Name" placeholder="Entrer le nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="Type" id="Type" placeholder="Entrer le type">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Ajouter</button>
                    </form>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $err)
                        <tr>
                            <td>
                                <li>{{$err}}</li>
                            </td>
                        </tr>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Les Catégories</h4> -->
                    <div class="table-responsive">
                        <table class="table table-dark" style="border-radius:4px" >
                            <thead>
                                <tr>
                                    <th>
                                        Nom
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($catlist as $cat)
                                <tr>
                                    <td>
                                        {{$cat->name}}
                                    </td>
                                    <td>
                                        {{$cat->type}}
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('admin.categories.edit', ['id' => $cat->id])}}" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.categories.delete', ['id' => $cat->id])}}" onclick="delete()" class="btn btn-danger">Supprimer</a>
                                    </td>
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


<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		
		$("#cat_form").validate({
			rules: {
				Name: "required",
				Type: "required",
				
				
				
			},
			messages: {
				Name: "Category Name is Required",
				Type: "Category Type is Required",
                	
			}
		});

		
	});
	</script>


@endsection
