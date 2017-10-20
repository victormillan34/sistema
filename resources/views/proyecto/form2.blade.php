@extends('proyecto.index')
@section('cabezal')



@section('archivo')
<center>

 

        <fieldset>
          <legend><span class="number">1</span>Empleados</legend>
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="user_name">
<br>
          <label for="mail">Correo:</label>
          <input type="email" id="mail" name="user_email">
<br>
            <label for="puesto">puesto:</label>
          <input type="puesto" id="puesto" name="user_puesto">
<br>
          <label for="password">telefono</label>
          <input type="password" id="password" name="user_password">
<br>
<!--
          <label>sexo:</label>
            <br>
          <input type="radio" id="hombre" value="hombre" name="user_age"><label for="hombre" class="light">hombre</label><br>
             <input type="radio" id="mujer" value="hombre" name="user_age"><label for="mujer" class="light">mujer</label>
        </fieldset>
-->


        <label for="job">ocupacion:</label>
        <select id="job" name="user_job">
          <optgroup label="Ingenieros">
            <option value="frontend_developer">soporte</option>

          </optgroup>
          <optgroup label="intendencia">
            <option value="Android_developer">limpieza</option>

          </optgroup>
          <optgroup label="Empresario">
            <option value="business_owner">gerente</option>

          </optgroup>
          <optgroup label="licenciad@s">
            <option value="secretary">Secretaria</option>

          </optgroup>
        </select>
<br>
          <label>Horario:</label>
    <br>
          <input type="checkbox" id="dia" value="dia" name="interes">
          <label class="light" for="development">dia</label>
    <br>
            <input type="checkbox" id="noche" value="Noche" name="interes">
            <label class="light" for="design">noche</label>
    <br>
<br>

       
        <button type="submit">Sign Up</button>
      



</center>




@stop