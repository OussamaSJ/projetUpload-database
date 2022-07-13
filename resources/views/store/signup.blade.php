@extends('store.storeLayout')
@section('content')
<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/dist/jquery.validate.js')}}"></script>


<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}


</style>
<div class="section">
    <div class="container">
        <div class="row">

        <form id="signupForm" method="post" >
            {{csrf_field()}}
            <div class="col-md-12">
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Inscription</h3>
                    </div>
                    
                    <div class="form-group ">
                        <label for="">Votre nom et prénom</label>
                        <input class="input" type="text" name="name" id="name" placeholder="Nom complet">
                    </div>
                   {!! $errors->first('name', '<label class="error">:message</label>') !!}
                    
                    <div class="form-group">
                    <label for="">Email</label>
                        <input class="input" type="email" name="email" id="email" placeholder="Email" onkeyup="myFunction()">
                    </div>
                    <div id="for_duplicate-email"></div>
                     {!! $errors->first('email', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                    <label for="">Adresse</label>
                        <input class="input" type="text" name="address" id="address" placeholder="Adresse">
                    </div>
                     {!! $errors->first('address', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                    <label for="">Ville</label>
                        <input class="input" type="text" name="city" id="city" placeholder="Ville">
                    </div>
                     {!! $errors->first('city', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                    <label for="">Code postal</label>
                        <input class="input" type="text" name="zip" id="zip" placeholder="Code postal">
                    </div>
                     {!! $errors->first('zip', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                    <label for="">Telephone</label>
                        <input class="input" type="tel" name="tel" id="tel" placeholder="Telephone">
                    </div>
                     {!! $errors->first('tel', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                    <label for="">Mot de passe</label>
                        <input class="input" type="password" name="pass" id="pass" placeholder="Entrer votre mot de passe">
                    </div>
                     {!! $errors->first('pass', '<label class="error">:message</label>') !!}
                    <div class="form-group">
                    <label for="">Confirmer votre mot de passe</label>
                        <input class="input" type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer le mot de passe">
                    </div>
                    {!! $errors->first('confirm_password', '<label class="error">:message</label>') !!}


                    <br>
                        
                        <input type="submit"  name="signup" class="primary-btn order-submit" value="S'inscrire">
                </form>
                
                
                    
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    
    
   
    
    
    
	$(document).ready(function() {
		$("#signupForm").validate({
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
                address: "required",
                city: "required",
                zip: {
					required: true,
					number: true
				},
                tel: "required",
				pass: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#pass"
				}
				
				
				
			},
			messages: {
				name: "Votre nom et prenom svp!!",
				email: "Votre mail svp !!",
                address: "votre  Adresse",
                city: "Votre ville",
                address: "Votre adresse",
				zip: {
					required: "votre Code postal",
					number: "Invalide Code postal"
				},
                tel: "Votre telephone portable svp!!",
				pass: {
					required: "Veuillez fournir un mot de passe",
					minlength: "Votre mot de passe doit contenir au moins 8 caractères."
				},
				confirm_password: {
					required: "Veuillez fournir un mot de passe",
					minlength: "Votre mot de passe doit contenir au moins 8 caractères.",
					equalTo: "Veuillez saisir le même mot de passe que ci-dessus"
				}
				
				
			}
            
            
        
		});

		
	});
	</script>



<script>
function myFunction() {
    var email=$("#email").val();
    var token=$("input[name=_token]").val();
    var url="{{route('user.signup.check_email')}}";
    

            $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{email: email, _token: token},
                success:function(msg){
                        
                         
                        if(msg == "1")
                            {
                                document.getElementById("for_duplicate-email").innerHTML = "<label class='error'>This Email Address is Already taken</label>";
                                                    

                            }
                    else
                        {
                                                document.getElementById("for_duplicate-email").innerHTML = "";

                        }
                    }
             });
    
}
</script>
@endsection

