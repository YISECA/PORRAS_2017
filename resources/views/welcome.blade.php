@extends('master') @section('content')
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<script src="public/Js/form.js"></script>
<<<<<<< HEAD
<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong><font size="5">INFORMACIÓN IMPORTANTE!</font></strong>  <font size="4">Después de registrar el equipo copia el codigo en la secciona mi equipo podras usarlo para ingresar a tu equipo</font>
=======

<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><font size="5">INFORMACIÓN IMPORTANTE!</font></strong> <font size="4">Después de registrar el equipo copia el codigo en la secciona mi equipo podras usarlo para ingresar a tu equipo</font>
>>>>>>> master
</div>
<section id="page1">
<<<<<<< HEAD
	<div class="panel panel-default">
		<div class="panel-heading">Inicio</div>
		<div class="panel-body">

					<h1>Inscripciones cerradas</h1>
				</div>
			</div>
		</div>
</section>@stop
=======

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"><font size="5" face="Comic Sans MS,arial,verdana">INSCRIPCIONES TORNEO DISTRITAL</font></div>

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 


                                        <div class="wrap"><img src="public/Img/porras.jpg"  height="400">


                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/porras1.jpg"  height="400">
                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/porras2.jpg"  height="400">
                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>
<br>

<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">  

            <div class="panel-body">


             <div class="row">
             <br>
               <div class="col-md-6">
            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Tipo de Torneo<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label></div>
           <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo Evento <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label></div>


            <div class="col-md-6"><select  required name="torneo" id="torneo" class="form-control" >
                <option value="" selected="selected">Seleccione</option>
                @foreach ($torneos as $torneo)
                    <option value="{{ $torneo->id }}">{{ $torneo->torneo}}</option>
                @endforeach
            </select></div>
             <div class="col-md-6"><select required name="evento" id="evento" class="form-control" >
                <option value="" selected="selected">Seleccione</option>

            </select><br></div>


               <div class="col-md-6">
            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nivel <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            
           </div>
           <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Categoría <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            </div>


              <div class="col-md-6"><select required name="nivel" id="nivel" class="form-control" >
                  <option value="" selected="selected" >Seleccione</option>

            </select></div>


              <div class="col-md-6"><select  required name="categoria" id="categoria" class="form-control" >
              <option value="">Seleccione</option>

            </select><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Modalidad <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            </div>


         <div class="col-md-6"><select required name="modalidad" id="modalidad" class="form-control" >
             <option value="">Seleccione</option>
         </select></div>

          <div class="col-md-6"><select required name="edad" id="edad" class="form-control" >
           <option value="">Seleccione</option>
         </select><br></div>


            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de Institución académica o Equipo <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>
         <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nombre Institución o Equipo <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            
          </div>


          <div class="col-md-6"><select  required name="tipo" id="tipo" class="form-control" data-readonly="tipo_colegio" data-readonly-value="1"  >

                <option value="">Seleccione</option>

                <option value="1">Institución Educativa</option>


                <option value="2">Equipo</option>

            </select></div>
            <div class="col-md-6"><input required type="text" class="form-control" id="nombre_institucion" name="nombre_institucion"><br></div>



             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Tipo Institución   <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Cuidad  <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            
            </div>


           <div class="col-md-6"><select  required name="tipo_colegio" id="tipo_colegio" class="form-control">

                <option value="0">Seleccione</option>

                <option value="1">Pública</option>

                <option value="2">Privada</option>

            </select></div>
             <div class="col-md-6"><input required type="text" class="form-control" id="ciudad" name="ciudad"><br></div>


            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Localidad   <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Dirección  <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>


            </label>

            </div>


           <div class="col-md-6"><select  required name="localidad" id="localidad" class="form-control" >

                <option value="">Seleccione</option>
                 @foreach ($localidades as $localidad)
                    <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                @endforeach

            </select></div>
             <div class="col-md-6"><input required type="text" class="form-control" id="direccion" name="direccion"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
            Teléfono   <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>


            </label>

           </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Correo Electrónico<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>


           <div class="col-md-6"><input required type="number" class="form-control" id="telefono" name="telefono" ></div>
             <div class="col-md-6"><input required type="mail" class="form-control" id="mail" name="mail"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Representante Legal<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Cédula Representante <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

           </div>


           <div class="col-md-6"><input required type="text" class="form-control" id="representante" name="representante" ></div>
             <div class="col-md-6"><input required type="number" class="form-control" id="cedula_representante" name="cedula_representante"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">


            Nombre Completo del entrenador <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Cédula del entrenador <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>


           <div class="col-md-6"><input required type="text" class="form-control" id="entrenador" name="entrenador" ></div>
             <div class="col-md-6"><input required type="number" class="form-control" id="cedula_entrenador" name="cedula_entrenador"><br></div>

            
            
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Número de Celular del entrenador<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>



             <div class="col-md-6"><input required type="number" class="form-control" id="telefono_entrenador" name="telefono_entrenador"></div>



             </div>
</div>
         </fieldset>


         <div class="freebirdFormviewerViewFormContent "><div class="freebirdFormviewerViewHeaderHeader"><div class="freebirdFormviewerViewHeaderTitleRow"><div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div></div><div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div></div><div class="freebirdFormviewerViewItemList" role="list"><div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading"><div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner"><div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div></div></div><div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div><div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881"><div class="freebirdFormviewerViewItemsItemItemheader"><div class="freebirdFormviewerViewItemsItemItemTitleContainer"><div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span><br><br><br><br><br><br></div><div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto" align="justify"> RIESGOS ASOCIADOS: El porrismo envuelve actividades atléticas que incluyen maniobras de fuerza, pirámides, gimnasia y baile; debido a la naturaleza de estas actividades, deseamos informarles que la posibilidad de lesiones existe como en cualquier actividad atlética.  Firmar este documento indica que usted,  o el participante a su cargo está suficientemente apto(a) para participar en esta actividad y no presenta en la actualidad alguna condición médica que pueda atentar contra la seguridad y bienestar del participante o de las otras personas.  Por lo tanto exonero al Instituto Distrital de Recreación y Deporte - IDRD, a sus directivos, asesores, técnicos y personal relacionado directa o indirectamente en la participación del evento en general o a los patrocinadores, por cualquier daño o lesión que pudiera surgir como consecuencia directa o indirecta de su participación en dicho certamen.  Además, autorizo al <strong>Instituto Distrital de Recreación y Deporte – IDRD, </strong>o a cualquiera de sus representantes, a transportar al integrante de su equipo, o a usted mismo a un hospital o clínica y/o tomar decisiones en caso de lesiones serias que ameriten la pronta intervención médica. </div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;


          margin: 0px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons">



        <input class="enviar" type="submit" value="Enviar" href="registro"> 



           </div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div>  


                            </font>

            </form>

                      <!--  </ul> <a class="btn btn-info" href="registro">Registrarse</a>--></div>

                </div>

            </div>

        </div>

       </section>

@stop
>>>>>>> master
