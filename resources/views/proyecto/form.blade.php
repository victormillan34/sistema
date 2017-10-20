@extends('proyecto.index')
@section('cabezal')



@section('archivo')
<center>

 

        <fieldset>
          <legend><span class="number">1</span>Supervision</legend>
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="user_name">
<br>
          <label for="mail">Correo:</label>
          <input type="email" id="mail" name="user_email">
<br>
          <label for="password">telefono</label>
          <input type="password" id="password" name="user_password">
<br>
          <!--<label>sexo:</label>
            <br>
          <input type="radio" id="hombre" value="hombre" name="user_age"><label for="hombre" class="light">hombre</label><br>
             <input type="radio" id="mujer" value="hombre" name="user_age"><label for="mujer" class="light">mujer</label>
        </fieldset>-->


        <label for="job">ocupacion:</label>
        <select id="job" name="user_job">
          <optgroup label="Ingeniero">
            <option value="frontend_developer">Gerente</option>

          </optgroup>
          <optgroup label="licenciado">
            <option value="Android_developer">Jefe de Area</option>

          </optgroup>
          <optgroup label="Empresario">
            <option value="business_owner">Empresario</option>

          </optgroup>
          <optgroup label="Otro">
            <option value="secretary">Inversionista</option>

          </optgroup>
        </select>
<br>
          <label>Horario:</label>
    <br>
          <input type="checkbox" id="dia" value="dia" name="interes">
          <label class="light" for="development">dia</label>
    <br>
            <input type="checkbox" id="noche" value="noche" name="interes">
            <label class="light" for="design">noche</label>
    <br>
            <input type="checkbox" id="tiempocompleto" value="tiempo completo" name="interes">
            <label class="light" for="design">Tiempocompleto</label>
    <br>
<br>

       
        <button type="submit">Sign Up</button>
      



</center>




@stop