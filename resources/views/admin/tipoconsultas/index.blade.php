@extends('layouts.app')

@section('content')
<div class="col-xs-12">
@include('alerts.requests')
@include('flash::message')
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tipo de Consultas</h3>
              <div class="btn-group pull-right" style="margin: 15px 0px 15px 15px;">
            <a href="{{ url('admin/tipoconsultas/create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                <i class="fa fa-pencil"></i> Registrar Tipo de Consulta
            </a>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nro</th>
                  <th>Tipo de Consulta</th>
                  <th>Especialidad</th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tipoconsultas as $tipoconsulta)
                <tr>
                    <td>{{$num=$num+1}}</td>
                    <td>{{$tipoconsulta->consulta}} </td>
                    <td>{{$tipoconsulta->especialidades->especialidad}}</td> 
                    <td>
                        <div class="btn-group">
                          <a href="{{ route('tipoconsultas.edit', [$tipoconsulta->id]) }}">
                            <button class="btn btn-default btn-flat" title="Presionando este botón puede editar el registro">
                              <i class="fa fa-pencil"></i>
                            </button></a>

                          <a href="#" >
                            <button onclick="tipoconsulta({{ $tipoconsulta->id }})" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#myModal" title="Presionando este botón puede eliminar el registro" >
                              <i class="fa fa-trash"></i>
                            </button>
                          </a>
                        <br><br>
                        </div>
                      </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nro</th>
                  <th>Tipo de Consulta</th>
                  <th>Especialidad</th>
                  <th>Opciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
    </div>
</div>  
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Eliminar Tipo de Consulta</h4>
                </div>
                <div class="modal-body">
                    ¿Esta seguro que desea eliminar este tipo de consulta en específico?...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>

                    {!! Form::open(['route' => ['tipoconsultas.destroy',0133], 'method' => 'DELETE']) !!}
                        <input type="hidden" id="tipoconsulta" name="id">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

   <script type="text/javascript">

        function tipoconsulta(tipoconsulta){

            $('#tipoconsulta').val(tipoconsulta);
        }

    </script>

@endsection

