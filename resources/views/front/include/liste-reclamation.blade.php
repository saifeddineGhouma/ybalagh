<div class="col-md-12">
                            <div class="panel">
                                <div class="panel-head">
                                    <h5 class="panel-title">Bordered Table</h5>
                                </div>
                                <div class="panel-body">
                                    <p class="text-muted mb-4">Add Class <code>.table-bordered</code></p>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>adresse</th>
                                                <th>description</th>
                                                <th>statu</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reclamations as $reclamation)


                                        @php  
                                 $statu="";
                                        if($reclamation->statu=="0")
                                         {
                                            $statu="Encours";

                                         }elseif($reclamation->statu=="1"){
                                            $statu="Termine";
                                         }else{
                                             $statu="refus";

                                         }

                                        @endphp
                                            <tr>
                                                <td>{{$reclamation->id}}</td>

                                                <td>{{$reclamation->description}}</td>
                                                <td>{{$reclamation->adresse}}</td>
                                                <td>{{$statu}}</td>

                                                <td>
                                                    <a href="#"data-toggle="modal" data-target="#show{{$reclamation->id}}" title="show"><i class="fa fa-pencil text-secondary p-1 m-1"></i>show</a>
                                                    <a href="{{route('edit.reclame',$reclamation->id)}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close text-danger text-danger p-1 m-1"></i>Edit</a>
                                                </td>
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