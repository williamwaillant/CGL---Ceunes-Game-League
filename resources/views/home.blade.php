@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo {{auth()->guard('web')->user()->name}}</div>

                <div class="panel-body">
                 <table width="100%">
                        <tr>
                            <td style="text-align: center;"><strong>Time</strong></td>
                            <td style="text-align: center;"><strong>Jogo</strong></td>
                            <td style="text-align: center;"><strong>Capitão</strong></td>
                            <td style="text-align: center;"><strong>Status</strong></td>
                            <td style="text-align: center;"><strong>Ações</strong></td>
                        </tr>
                         @foreach($formus as $formu)
                        <tr>
                            <td style="text-align: center;"> {{$formu->time}}</td>
                            <td style="text-align: center;">  
                            @if ($formu->categoria == 1)
                                    Counter-Strike GO
                                @endif
                                @if ($formu->categoria == 2)
                                    Clash Royale
                                @endif
                                @if ($formu->categoria == 3)
                                    Dota 2  
                                @endif
                                @if ($formu->categoria == 4)
                                    Fifa 17  
                                @endif</td>
                            <td style="text-align: center;"> <a data-toggle="modal" data-target="#my{{$formu->id}}">{{$formu->namec}}</a></td>

                            <div class="modal fade" id="my{{$formu->id}}" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                 
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 style="color:black;text-align: center;" class="modal-title">Editar</h4>
                                        </div>
                                        
                                           
                                           <div class="modal-body">
                                              {!!Form::open(['class'=>'form-horizontal','route'=>'admin.update'])!!}
                                                {{ csrf_field() }}  
                                              @include('edit')
                                                                   <button type="submit" class="btn btn-default">Sign in</button>
                                          </div>

                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
                                        </div>
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div> 

                            <td style="text-align: center;color:red;"> Em debito</td>
                            <td style="text-align: center;"> fazer</td>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
