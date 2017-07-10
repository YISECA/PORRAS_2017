<page backtop="40mm" backbottom="10mm" backleft="20mm" backright="10mm">
    <page_header>
        <div style="widht:100%"></div>
        <div style="widht:100%;float:left; padding:20px;font-weight:bold;text-align: center;"></div>
    </page_header>

    <page_footer> <!-- Define el footer de la hoja -->
          </page_footer>

    <table width="100%" border="1">

        <tbody><tr><td colspan="5"><font style="font-family: monospace" size="6" color="#FF0000"> <center> <strong>INSCRIPCIÓN FESTIVAL DE PORRAS IDRD, BOGOTÁ {{date('Y')}}</strong></center></font></td></tr>
        <tr><td colspan="5">&nbsp; </td></tr>
        <tr><td colspan="5">&nbsp; </td></tr>

        <tr><td colspan="5"><div align="right"> <font size="3" color="#000000"> </font> </div></td></tr>

        <tr><td colspan="5">&nbsp; </td></tr>
        <tr><td colspan="5"><div align="left"> <font style="font-style:italic" size="4" color="#1e4268">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATOS GENERALES DE PARTICIPACIÓN</font> </div> </td></tr>


        <tr> <td colspan="5">&nbsp;</td></tr>
        <tr><td colspan="6"></td></tr>

        <tr>
            <td colspan="2"> <div align="left"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo de Torneo:</font></label>  </div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">DISTRITAL</font></div></td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Tipo Evento:</font></label> </font></div></td>
            <td width="24%"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->evento}}</font></td>


        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nivel:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->nivel}}</font></div></td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Categoría:</font></label> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->categoria}}</font></div></td>


        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modalidad:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->modalidad}}</font></div></td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Edad:</font></label> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->edad}}

        <tr><td colspan="5"></td></tr>
        <tr> <td colspan="5">&nbsp;</td></tr>

        <tr><td colspan="5"><div align="left"> <font style="font-style:italic" size="4" color="#1e4268">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATOS INSTITUCIÓN ACADÉMICA O EQUIPO</font> </div> </td> </tr>
        <tr> <td colspan="5"></td></tr>
        <tr> <td colspan="5">&nbsp;</td></tr>



        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo :</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">EQUIPO</font> </div></td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Nombre:</font></label> </font></div></td>
            <td width="24%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->nombre_institucion}}</font> </div>  </td>
        </tr>

        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo Institución :</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000"></font></div></td>

            <td width="24%"></td>
            <td width="24%">


            </td>

        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuidad:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->ciudad}}</font> </div></td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Localidad:</font></label> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000"></font> </div> </td>

        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dirección:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->direccion}}</font></div></td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Teléfono:</font></label> </font></div></td>
            <td width="24%">
                <div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->telefono}}</font></div>  </td>

        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo Electrónico:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->mail}}</font> </div> </td>

            <td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Representante:</font></label> </font></div></td>
            <td width="24%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->representante}}</font>
                </div> </td>

        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cédula &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Representante:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->cedula_representante}}</font></div></td>
            <td width="24%"></td>
            <td width="24%"></td>
        </tr>
        <tr> <td colspan="5">&nbsp;</td></tr>

        <tr> <td colspan="5"><div align="left"> <font style="font-style:italic" size="4" color="#1e4268">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATOS DEL ENTRENADOR</font> </div> </td></tr>

        <tr> <td colspan="5">&nbsp;</td></tr>

        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre Completo:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->entrenador}}</font></div></td><td width="24%"><div align="left"> <font size="3" color="#000000"><label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Cédula:</font></label> </font></div></td>
            <td width="24%"><div align="left"><font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->cedula_entrenador}}</font></div></td>

        </tr>
        <tr>
            <td colspan="2"> <div align="left"> <font size="3" color="#000000"> <label><font style="font-family: monospace" size="5" color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número de Celular:</font></label><font style="font-family: monospace" size="5" color="#000000"> </font> </font></div></td>
            <td width="24%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="5" color="#000000">{{$equipo->telefono_entrenador}}</font></div></td>

        </tr>
        <tr> <td colspan="5">&nbsp;</td></tr>

        <tr><td colspan="5"><div align="left"> <font style="font-style:italic" size="4" color="#1e4268">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATOS PARTICIPANTES</font> </div> </td></tr>
        <tr> <td colspan="5">&nbsp;</td></tr>

        </tbody></table>


    <!-- tabla prueba  -->
    <table width="100%" border="1">
        <tbody><tr>
            <td align="center" width="3%"><label><font style="font-family: monospace" size="5" color="#000000">No</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="11%"><label><font style="font-family: monospace" size="5" color="#000000">Documento</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="11%"><label><font style="font-family: monospace" size="5" color="#000000">Nombres</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="14%"><label><font style="font-family: monospace" size="5" color="#000000">Apellidos</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="11%"><label><font style="font-family: monospace" size="5" color="#000000">F.Nacimiento</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="12%"><label><font style="font-family: monospace" size="5" color="#000000">Edad</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="11%"><label><font style="font-family: monospace" size="5" color="#000000">Teléfono</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>
            <td align="center" width="13%"><label><font style="font-family: monospace" size="5" color="#000000">EPS</font></label><font style="font-family: monospace" size="5" color="#000000"> </font></td>

        </tr>
        <?php $i=0;?>
        @foreach($inscritos as $participante)
        <tr>
            <td width="3%"><div align="center"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#FF0000">{{$i++}}</font></div></td>
            <td width="11%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->cedula}}</font></div></td>
            <td width="11%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->primer_nombre}}</font></div></td>
            <td width="14%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->segundo_nombre}}</font></div></td>
            <td width="11%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->fecha_nacimiento}}</font></div></td>
            <td width="12%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->TX_Ed}}</font></div></td>
            <td width="11%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->telefono}}</font></div></td>
            <td width="13%"><div align="left"> <font style="font-family: monospace" face="Comic Sans MS, cursive" size="4" color="#000000">{{$participante->eps}}</font></div></td>



        </tr>
        @endforeach
        <tr><td colspan="10"> <center><input class="btn btn-info" onclick="window.print();" value="Imprimir Registro" type="button"> </center></td></tr>
        </tbody></table>
        </tbody>
    </table>

    <br>

    <center><table width="970" border="0">


            <tbody><tr><td colspan="5"> </td></tr>
            </tbody></table> </center>











</page>