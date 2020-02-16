<div class="col-md-12">
                            <div class="panel">
                                <div class="panel-head">
                                    <h5 class="panel-title">Hoverable Table</h5>
                                </div>
                                <div class="panel-body">
                                    <p class="text-muted mb-4">Add Class <code>.table-hover</code></p>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>adresse</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reclamations as $reclame)


   @php  
                                 $statu="";
                                        if($reclame->statu=="0")
                                         {
                                            $statu="Encours";
                                            $badge="badge-info";
                                            $x=0;

                                         }elseif($reclame->statu=="1"){
                                            $statu="Termine";
                                            $badge="badge-success";
                                            $x=1;
                                         }else{
                                             $statu="refus";
                                             $badge="badge-danger";
                                             $x=2;

                                         }

                                        @endphp









                                            <tr>
                                                <td>{{$reclame->user->name}}</td>
                                                <td>{{$reclame->description}}</td>
                                                <td><i class="fa fa-clock-o mr-2 text-muted"></i>{{$reclame->adresse}}</td>
                                                <td><span class="badge {{$badge}} badge-sm badge-pill">{{$statu}}  </span></td>
                                                <td><a href="{{route('reclame.edit',$reclame->id)}}">EDIT</a></td>
                                          
                                                <td><a href="#"data-toggle="modal" data-target="#show{{$reclame->id}}">show</a></td>
                                            </tr>
                                         @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @foreach($reclamations as $reclame)
                        
                          <div class="modal fade" id="show{{$reclame->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
  <div class="col-md-12">
    <div class="thumbnail">
      
        <img src="{{ asset('storage/'.$reclame->photo) }}" alt="Lights" style="width:100%">
        <div class="caption">
          <p>{{$reclame->adresse}}</p>
          <hr>
          <p>{{$reclame->description}}</p>

        </div>
      </a>
    </div>
  </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach