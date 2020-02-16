 
 @extends('layouts.front')

@section('content')

        <div class="page-ttl">
            <div class="layer-stretch">
                <div class="page-ttl-container">
                    <h1>Reclamation <span class="text-primary"></span></h1>
                    <p><a href="#">Home</a> &#8594; <span>Reclamation</span></p>
                </div>
            </div>
        </div><!--
 
 
  <!-- Start Login Section -->
  <form method="POST" action="{{route('reclamtion.update',$reclame->id)}}" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="login">
            <div class="layer-stretch">
                <div class="layer-wrapper">
                    <div class="row pt-4">
                        <div class="col-md-8">
                           
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" name="description"value="{{$reclame->description}}">
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" name="adresse" value="{{$reclame->adresse}}"id="adresse">
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                            <img src="{{ asset('storage/'.$reclame->photo) }}">
                                <input class="mdl-textfield__input" type="file" name="photo"id="password">
                                
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <select class="mdl-textfield__input" name="categorie_id">
                                <option>choisir categorie</option>
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}"  {{ $reclame->categorie_id == $categorie->id ? 'selected' : '' }}>{{$categorie->title}} </option>


                                @endforeach

                                </select>                                
                            </div>
                            <div class="pt-4 text-center">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button button-dark" type="submit">Create Reclamation</button>
                            </div>
                           
                            
                           
                        </div>
                        <div class="col-md-4">
                            <div class="sub-ttl"><div class="sub-ttl-text">Benefits of Creating Account</div></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-icon pl-5">
                                        <li><i class="ti-angle-double-right"></i>Fully Responsive or Mobile Friendly</li>
                                        <li><i class="ti-angle-double-right"></i>SEO Friendly</li>
                                        <li><i class="ti-angle-double-right"></i>Clean Code &#38; Fully Documented</li>
                                        <li><i class="ti-angle-double-right"></i>Fast Load</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-icon">
                                        <li><i class="fa fa-hand-o-right"></i>Content Marketing</li>
                                        <li><i class="fa fa-hand-o-right"></i>Easy to Customize, SEO Friendly</li>
                                        <li><i class="fa fa-hand-o-right"></i>Google Web Fonts</li>
                                        <li><i class="fa fa-hand-o-right"></i>Font Icons and More +</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-light p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vel veniam delectus debitis fugit non labore iste perferendis minus cumque dolor architecto, sapiente, dolores numquam incidunt quos et fuga laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End of Login Section -->


        </form>
        <!-- Start Action Section -->


     


@endsection
