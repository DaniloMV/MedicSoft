<div class="form-group">
	{!! Form::label('titular','Titular') !!}
	<select name="id_paciente" id="id_paciente" class="form-control select2" title="Seleccione el Paciente Titular">
		@foreach($pacientes as $paciente)
			<option value="{{$paciente->id}}" @if($paciente_nt->id_paciente==$paciente->id) selected="selected" @endif >{{$paciente->nacionalidad}}-{{$paciente->cedula}} {{$paciente->apellidos}}, {{$paciente->nombres}}</option>
		@endforeach
	</select>
</div>

<div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
	{!! Form::label('nombres','* Nombres') !!}
	{!! Form::text('nombres',$paciente_nt->nombres,['class' => 'form-control','required' => 'required','placeholder' => 'Ej: Martin José', 'title' => 'Ingrese el/los Nombre(s) del Paciente', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase()', 'style'=>$errors->has('nombres') ? 'border-color: red; border: 1px solid red;': '']) !!}
</div>

<div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
	{!! Form::label('apellidos','* Apellidos') !!}
	{!! Form::text('apellidos',$paciente_nt->apellidos,['class' => 'form-control','required' => 'required','placeholder' => 'Ej: Campos Ribas', 'title' => 'Ingrese el/los Apellido(s) del Paciente', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase()', 'style'=>$errors->has('apellidos') ? 'border-color: red; border: 1px solid red;': '']) !!}
</div>

<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
	{!! Form::label('cedula','* Cédula') !!}
	
	<select class="form-control select2" style="width: 70px;" name="nacionalidad" id="nacionalidad" title="Seleccione la nacionalidad del paciente" >
		<option value="V" @if($paciente_nt->nacionalidad=="V") selected="selected" @endif >V</option>
		<option value="E" @if($paciente_nt->nacionalidad=="E") selected="selected" @endif>E</option>
	</select>
	{!! Form::text('cedula', $paciente_nt->cedula, ['class' => 'form-control','placeholder' => 'Ej: 1234567','required' => 'required', 'title' => 'Ingrese la cédula del paciente sin separación por punto(.) o espacios','maxlength' => '8', 'style'=>$errors->has('cedula') ? 'border-color: red; border: 1px solid red;': '']) !!}
</div>
<div class="form-group">
	{!! Form::label('genero','* Género') !!}
</div>
<div class="form-group">
	{!! Form::label('','M') !!}
	@if($paciente_nt->genero=="M")
		{!! Form::radio('genero','M',true,[ 'title' => 'Seleccione si es de género Masculino']) !!}
	@else
		{!! Form::radio('genero','M',false,[ 'title' => 'Seleccione si es de género Masculino']) !!}
	@endif


	{!! Form::label('F','F') !!}
	@if($paciente_nt->genero=="F")
		{!! Form::radio('genero','F',true,[ 'title' => 'Seleccione si es de género Femenino']) !!}
	@else
		{!! Form::radio('genero','F',false,[ 'title' => 'Seleccione si es de género Femenino']) !!}
	@endif
</div>
<div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
	{!! Form::label('edad','* Edad') !!}
	{!! Form::number('edad',$paciente_nt->edad,['class' => 'form-control','required' => 'required','placeholder' => '18','min' => '0', 'title' => 'Ingrese la Edad del Paciente','maxLength' => '2','oninput' => 'javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);', 'style'=>$errors->has('edad') ? 'border-color: red; border: 1px solid red;': '']) !!}
</div>
<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
	{!! Form::label('telefono','* Teléfono') !!}
	<select name="codigo_telf" id="codigo_telf" style="width: 80px;" class="form-control select2" title="Seleccione el código del número telefónico">
		<option value="0244" @if($paciente_nt->codigo_telf=="0244") selected="selected" @endif >0244</option>
		<option value="0412" @if($paciente_nt->codigo_telf=="0412") selected="selected" @endif >0412</option>
		<option value="0414" @if($paciente_nt->codigo_telf=="0414") selected="selected" @endif >0414</option>
		<option value="0424" @if($paciente_nt->codigo_telf=="0424") selected="selected" @endif >0424</option>
		<option value="0416" @if($paciente_nt->codigo_telf=="0416") selected="selected" @endif>0416</option>
		<option value="0426" @if($paciente_nt->codigo_telf=="0426") selected="selected" @endif >0426</option>
	</select>
	{!! Form::text('telefono', $paciente_nt->telefono, ['class' => 'form-control','required' => 'required', 'maxlength' => '7','placeholder' => 'Ej: 1234567', 'style'=>$errors->has('telefono') ? 'border-color: red; border: 1px solid red;': '']) !!}
</div>

<div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
	{!! Form::label('direccion','* Dirección') !!}
	{!! Form::textarea('direccion', $paciente_nt->direccion, ['class' => 'textarea','required' => 'required', 'placeholder' => 'Ej: Calle Manhattan, casa nro. 4', 'title' => 'Ingrese la dirección del paciente','cols' => '100', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase()', 'style'=>$errors->has('direccion') ? 'border-color: red; border: 1px solid red;': '']) !!}
</div>