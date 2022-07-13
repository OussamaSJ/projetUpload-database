@extends('admin_panel.adminLayout') @section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-10 d-flex align-items-stretch grid-margin" style="margin-left:100px;background-color:grey">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <a href="{{route('admin.categories')}}"> < Retour</a>
                    <br><br>
                      <h4 class="card-title" style="margin-left:70px;text-align:center;position:relative;">Supprimer</h4>
                      <br>
                      <form class="forms-sample" method="post">
                      {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1"> Nom</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="Name" value="{{$category->name}}" disabled>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Type</label>
                          <textarea type="textarea" class="form-control" name="Type" disabled>{{$category->type}}</textarea>
                        </div>
                        <input  type="submit" name="updateButton"  class="btn btn-danger mr-2" id="updateButton" value="SUPPRIMER" style="position:relative;left:45%" />
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
@endsection