<div class="contenedor_padding">
	<h3 class='titulo usuario_titulo titulo_cuat modal-title' id='modaltitle'></h3>
    <form method="POST">
        <div class="contenedor-flex cont-just-sbet form_uno">
            <input class="caja caja_diez" type="text" required placeholder="Nombre del servicio" name="serv_nom" id="edi-serv_serv_nom">
            <textarea class="caja caja_diez" type="text" required placeholder="Descripción" name="serv_des" id="edi-serv_serv_des"></textarea>
            <input type="hidden" name="serv_id" id="edi-serv_serv_id">
            <input type="hidden" name="crud" value="edi-serv">
            <input class="boton boton_prin usuario_boton_uno" type="submit" name="modificar" value="Modificar">
        </div>
    </form>
</div>