<?php

?>

<h1 id="MODULE_FSXDIC">FSx-Connector <span class="color_h1">Diccionario</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxconf">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxcat">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Este componente de FSx-Connector se encarga de establecer el Diccionario de equivalencias entre FactuSOL y PrestaShop.</p>
<hr>

<h2>Requerimientos previos</h2>
<p>Antes de usar el componente <b>FSx-Connector Diccionario</b> es necesario:</p>
<ul>
	<li>Actualizar la Base de Datos de FactuSOLWeb (componente FSx-Configuración).<br>Este paso es obligatorio.</li>
</ul>
<hr>

<h2 id="MODULE_FSXDIC_TAXES">Impuestos en FactuSOL</h2>

<p>Esta sección contiene los Parámetros para
establecer Equivalencias (Diccionario
o Tabla de Equivalencias) para los
Tipos de Impuesto, entre FactuSol y
PrestaShop.</p>

<img src="images/fsxdic_impuestos.png" alt="fsxdic_impuestos">

<p id="FSOL_IMPUESTO_DIRECTO_TIPO_1"><b>FactuSOL Impuesto Directo Tipo 1</b></p>
<p>Corresponde a IVA Normal en la configuración por defecto de FactuSOL (FactuSOL -&gt; Utilidades -&gt; IVA / IRPF).</p>
<ul>
	<li>Valor: desplegable con las Reglas de Impuestos definidas en la Tienda PrestaShop.</li>
	<li>Por defecto: vacío.</li>
</ul>
<hr>

<p id="FSOL_IMPUESTO_DIRECTO_TIPO_2"><b>FactuSOL Impuesto Directo Tipo 2</b></p>
<p>Corresponde a IVA Reducido en la configuración por defecto de FactuSOL (FactuSOL -&gt; Utilidades -&gt; IVA / IRPF).</p>
<ul>
	<li>Valor: desplegable con las Reglas de Impuestos definidas en la Tienda PrestaShop.</li>
	<li>Por defecto: vacío.</li>
</ul>
<hr>

<p id="FSOL_IMPUESTO_DIRECTO_TIPO_3"><b>FactuSOL Impuesto Directo Tipo 3</b></p>
<p>Corresponde a IVA Super-Reducido en la configuración por defecto de FactuSOL (FactuSOL -&gt; Utilidades -&gt; IVA / IRPF).</p>
<ul>
	<li>Valor: desplegable con las Reglas de Impuestos definidas en la Tienda PrestaShop.</li>
	<li>Por defecto: vacío.</li>
</ul>
<hr>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>Sólo es necesario asignar una Regla de Impuestos de PrestaShop equivalente a los Tipos de Impuesto de FactuSOL que 
		realmente utilizan los Productos que se utilizan en la Tienda. 
		Por ejemplo, si sólo venderá Productos grabados con IVA Normal, podrá dejar &quot;FactuSOL Impuesto Directo Tipo 2&quot; y &quot;FactuSOL 
		Impuesto Directo Tipo 3&quot; sin asignar una Regla de Impuesto. 
		</td>
	</tr>
</table>
<p>Si no configura completamente esta sección, es posible que se produzcan errores
cuando ejecuta la actualización del Catálogo (no se creará un Producto en la Tienda si no se halla la correspondencia del impuesto) 
y la descarga de Pedidos (no se descargará un Pedido a FactuSOL si no se halla la correspondencia del impuesto).</p>
<hr>


<h2 id="MODULE_FSXDIC_PPG">Tarifas de FactuSOL y Grupos de Clientes en PrestaShop </h2>

<p>Esta funcionalidad es opcional, y no forma parte del núcleo de FSx-Connector. Si no dispone de ella en su instalación, verá algo como:</p>

<img src="images/fsxdic_tarifas_inactive.png" alt="fsxdic_tarifas">

<hr>

<p>La sección "<b>Tarifas de FactuSOL y Grupos de Clientes en PrestaShop</b>" de FSx-Diccionario contiene los Parámetros para
establecer Asignacioness (Diccionario o
Tabla de Equivalencias) de las Tarifas de FactuSol a los Grupos de Clientes de PrestaShop.</p>

<img src="images/fsxdic_tarifas.png" alt="fsxdic_tarifas">

<p>A los Grupos de Clientes que PrestaShop establece por defecto (Visitante / Visitor, Invitado / Guest, Cliente / Customer) 
les corresponde la "Tarifa de precios a mostrar a los clientes sin autenticar", que se definine en FactuSOL en la solapa "Internet"
(FactuSOL -> Internet -> Configuración -> Consulta de Artículos). Por tanto esta asignación no puede modificarse aquí.</p>
<p>A los otros Grupos de Clientes de PrestaShop (los definidos por el dueño de la tienda PrestaShop) se puede asignar 
cualquier Tarifa de FactuSOL, incluyendo la "Tarifa de precios a mostrar a los clientes sin autenticar".</p>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>Cuande se crea un Producto o cuando de actualizan Precios en PrestaShop mediante el componente FSx-Catálogo, 
		se tiene en cuenta el Diccionario de Tarifas y Grupos de Clientes para crear las reglas de precio necesarias y 
		que cada Grupo tenga su Precio Específico. Se pueden visualizar en <i>PrestaShop -> Back-Office -> Producto -> Precios específicos</i>. 
		</td>
	</tr>
</table>
<hr>

<img src="images/fsxdic_tarifas_ppg.png" alt="fsxdic_tarifas_ppg">

<p>Los "Precios específicos" creados por FSx-Connector se indican con un visé verde. Cuando actualice los Precios con FSx-Catálogo, estas líneas podrán cambiar según la Tarifa de FactuSOL y el Grupo de Clientes de PrestaShop. Si añade un precio específico manualmente, 
aparecerá con una cruz roja. Esto indica a FSx-Connector que ese precio específico debe respetarlo cuando actualice los Precios con FSx-Catálogo.</p>
<hr>

<p><img width="15" height="15" src="images/lamp.gif" alt="lamp"><b>Modificación del formato de "Precios específicos"</b></p>

<p>Para visualizar el formato de "Precios específicos" como se indica más arriba, es necesario hacer unos sencillos cambios en PrestaShop.</p>

<img src="images/fsxdic_tarifas_ppg_mod.png" alt="fsxdic_tarifas_ppg_mod">
<br>

<p>Las modificaciones deben realizarse como sigue, ya que la plantilla de "Precios específicos" no está totalmente separada del 
controlador <i>AdminProductsController.php</i>.</p>

<p>1.- Fichero <i>&lt;su_tienda&gt;/&lt;su_back-office&gt;/themes/default/template/controllers/products/prices.tpl</i></p>
<p>Sobre la línea 395, localizar (encabezado de la tabla "Precios específicos"):</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
&lt;td class="cell border" style="width: 13%;"&gt;{l s='Impact'}&lt;/td&gt;
<br>
&lt;td class="cell border" style="width: 15%;"&gt;{l s='Period'}&lt;/td&gt;
<br>
&lt;td class="cell border" style="width: 13%;"&gt;{l s='From (quantity)'}&lt;/td&gt;
<br>
&lt;td class="cell border" style="width: 2%;"&gt;{l s='Action'}&lt;/td&gt;
<br>
&lt;/tr&gt;';
<br>
</div>
</div>

<p>Y reemplazar por:</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
&lt;td class="cell border" style="width: 13%;"&gt;{l s='Impact'}&lt;/td&gt;
<br>
&lt;td class="cell border" style="width: 15%;"&gt;{l s='Period'}&lt;/td&gt;
<br>
&lt;td class="cell border" style="width: 13%;"&gt;{l s='From (quantity)'}&lt;/td&gt;
<br>
<span class="color_h1">&lt;td class="cell border" style="width: 1%;"&gt;{l s='FSx'}&lt;/td&gt;</span>
<br>
&lt;td class="cell border" style="width: 2%;"&gt;{l s='Action'}&lt;/td&gt;
<br>
&lt;/tr&gt;';
<br>
</div>
</div>
<p>En rojo se muestra lo que se debe añadir.</p>
<br>

<p>2.- Fichero <i>&lt;su_tienda&gt;/controllers/admin/AdminProductsController.php</i></p>
<p>En la función <i>_displaySpecificPriceModificationForm</i>, sobre la línea 3190, localizar (cuerpo de la tabla "Precios específicos"):</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
&lt;td class="cell border"&gt;'.$impact.'&lt;/td&gt;
<br>
&lt;td class="cell border"&gt;'.$period.'&lt;/td&gt;
<br>
&lt;td class="cell border"&gt;'.$specific_price['from_quantity'].'&lt;/th&gt;
<br>
&lt;td class="cell border"&gt;'.((!$rule-&gt;id && $can_delete_specific_prices) ? '&lt;a name="delete_link" href="'.self::$currentIndex.'&id_product='.(int)Tools::getValue('id_product').'&action=deleteSpecificPrice&id_specific_price='.(int)($specific_price['id_specific_price']).'&token='.Tools::getValue('token').'"&gt;&lt;img src="../img/admin/delete.gif" alt="'.$this-&gt;l('Delete').'" /&gt;&lt;/a&gt;': '').'&lt;/td&gt;
<br>
&lt;/tr&gt;';
<br>
</div>
</div>

<p>Y reemplazar por:</p>

<div class="code notranslate" style="width: 98%;">
<div>
<br>
&lt;td class="cell border"&gt;'.$impact.'&lt;/td&gt;
<br>
&lt;td class="cell border"&gt;'.$period.'&lt;/td&gt;
<br>
&lt;td class="cell border"&gt;'.$specific_price['from_quantity'].'&lt;/th&gt;
<br>
<span class="color_h1">&lt;td class="cell border"&gt;&lt;img title="'.($specific_price['fsx_ppg']?$this->l('Creado por FSx-Connector').'" src="../img/admin/enabled':'" src="../img/admin/disabled').'.gif"&gt;&lt;/th&gt;</span>
<br>
&lt;td class="cell border"&gt;'.((!$rule-&gt;id && $can_delete_specific_prices) ? '&lt;a name="delete_link" href="'.self::$currentIndex.'&id_product='.(int)Tools::getValue('id_product').'&action=deleteSpecificPrice&id_specific_price='.(int)($specific_price['id_specific_price']).'&token='.Tools::getValue('token').'"&gt;&lt;img src="../img/admin/delete.gif" alt="'.$this-&gt;l('Delete').'" /&gt;&lt;/a&gt;': '').'&lt;/td&gt;
<br>
&lt;/tr&gt;';
<br>
</div>
</div>

<p>En rojo se muestra lo que se debe añadir.</p>
<br>
<hr>




<h2 id="MODULE_FSXDIC_PAYMENT">Formas de Pago en PrestaShop</h2>

<p>Esta sección contiene los Parámetros para
establecer Equivalencias (Diccionario o
Tabla de Equivalencias) para las Formas de
Pago, entre FactuSol y PrestaShop.</p>

<img src="images/fsxdic_formaspago.png" alt="fsxdic_formaspago">

<p>Para cada Forma de Pago disponible en la
Tienda aparece un desplegable con las
Formas de Pago definidas en FactuSOL.
Tenga en cuenta que deberá haber rellenado en FactuSOL el campo &quot;Descripción en la web de la forma de pago&quot;:</p>

<img src="images/fsxdic_formaspago_1.png" alt="fsxdic_formaspago_1">

<p>Puede asociar varias formas de pago de su Tienda a una única Forma de Pago en
FactuSOL. Pero no podrá asociar una Forma de Pago de su Tienda a varias formas
de pago de FactuSOL.</p>

<p>Si no configura completamente esta sección, no se producirán errores cuando
ejecuta la descarga de Pedidos, pero obtendrá información en el LOG sobre los
problemas encontrados (componente FSx-LOG). Los Pedidos se
descargarán, pero el campo &quot;Forma de Pago&quot; del Pedido en FactuSOL, estará vacío.</p>
<hr>



<h2 id="FSXDIC_BOX_CATALOGO">Caja de Catálogo</h2>

<p>La Caja de Catálogo permite realizar dos tareas sobre la estructura del Catálogo: 
<b>Comprobar el Diccionario de Categorías</b> y mostrar el <b>Mapa de Secciones, Familias y Categorías</b>.</p>

<img src="images/fsxdic_box_catalogo.png" alt="fsxdic_box_catalogo">

<hr>

<p id="FSXDIC_BOX_CATALOGO_CATEGORIES_CHECK"><b>Comprobar Diccionario de Categorías</b></p>
<p>Esta opción se utiliza para comprobar la correspondencia entre Secciones / Familias y
Categorías.</p>
<ul>
	<li>Valor: desplegable con los valores: <br><br>
		<ul>
			<li>&apos;Comprobar e informar&apos;<br />
				Comprueba el Diccionario de
Categorías e informa (en el LOG) si encuentra una
Sección / Familia sin correspondencia en PrestaShop, o si
encuentra una Categoría sin correspondencia en
FactuSOL. Esta opción no realiza ninguna reparación.<br><br></li>
			<li>&apos;Reparar&apos;<br />
			Comprueba el Diccionario de Categorías y
elimina las entradas &quot;huérfanas&quot; (sin correspondencia) del
Diccionario.<br><br></li>
		</ul></li>
	<li>Por defecto: &apos;Comprobar e informar&apos;.<br><br></li>
</ul>
<hr>

<p id="FSXDIC_BOX_CATALOGO_MAPA"><b>Mapa de Secciones, Familias y Categorías</b></p>
<p>Pulsando sobre el botón "Ver Mapa" se accede a otra pantalla donde aparece el Mapa de
relaciones entre las Secciones y Familias de FactuSOL y las Categorías de PrestaShop.</p>

<img src="images/fsxdic_mapa.png" alt="fsxdic_mapa">

<p>En la parte izquierda se muestra el árbol de Secciones y Familias tal como se ha
cargado desde FactuSOL. En la parte derecha aparecen las Categorías de
PrestaShop correspondientes en un desplegable.</p>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cómo funciona el Mapa de Secciones, Familias y Categorías?<br></b><br>
		Cuando se realiza "Actualizar Categorías y Productos" con el componente FSx-Catálogo, 
		y FSx-Connector encuentra una <b>Sección</b> en la Base de Datos de FactuSOLWeb, sigue los pasos:
<ul>
	<li>Toma el Código de la Sección, y busca una correspondencia en el Mapa de Secciones, Familias y Categorías.<br><br></li>
	<li>Si encuentra una correspondencia de una Categoría, no hace nada.<br><br></li>
	<li>Si no encuentra una correspondencia de una Categoría, hace dos cosas:<br><br>
<ul>
	<li>Crea una nueva Categoría en PrestaShop. Como proviene de una Sección, se creará en la raíz del Catálogo de la Tienda PrestaShop.<br><br></li>
	<li>Actualiza el Mapa de Secciones, Familias y Categorías con la nueva correspondencia entre la Sección y la nueva Categoría.<br><br></li>
</ul>
	
	</li>
</ul>
		Cuando se realiza "Actualizar Categorías y Productos" con el componente FSx-Catálogo, 
		y FSx-Connector encuentra una <b>Familia</b> en la Base de Datos de FactuSOLWeb, sigue los pasos:
<ul>
	<li>Toma el Código de la Familia, y busca una correspondencia en el Mapa de Secciones, Familias y Categorías.<br><br></li>
	<li>Si encuentra una correspondencia de una Categoría, no hace nada.<br><br></li>
	<li>Si no encuentra una correspondencia de una Categoría, hace dos cosas:<br><br>
<ul>
	<li>Crear una nueva Categoría en PrestaShop. Como proviene de una Familia, se utiliza el Mapa de Secciones, Familias y Categorías 
	para obtener la correspondencia de la Sección a la que pertenece la Familia, que será la "Categoría Padre" de la nueva Categoría. <br><br>
<ul>
	<li>
	Si no encuentra una correspondencia válida para la "Categoría Padre", se produce un mensaje de error en el componente FSx-Log, y no se creará la Categoría.<br><br></li>
</ul>
	<li>Si pudo crear la Categoría, actualiza el Mapa de Secciones, Familias y Categorías con la nueva correspondencia entre la Familia y la nueva Categoría.<br><br></li>
</ul>
	
	</li>
</ul>
		Cuando se realiza "Actualizar Categorías y Productos" con el componente FSx-Catálogo, 
		y FSx-Connector encuentra un <b>Artículo</b> en la Base de Datos de FactuSOLWeb, sigue los pasos:
<ul>
	<li>Toma el Código de la Familia a la que pertenece el Artículo, y busca una correspondencia en el Mapa de Secciones, Familias y Categorías.<br><br></li>
	<li>Si encuentra una correspondencia de una Categoría, creará un Producto en esa Categoría.<br><br></li>
	<li>Si no encuentra una correspondencia de una Categoría, busca el valor de "Categoría por defecto"<br><br></li>
	<li>Si "Categoría por defecto" tiene corresponcia con una Categoría válida, creará un Producto en esa Categoría.<br><br></li>
	<li>Si "Categoría por defecto" no tiene corresponcia con una Categoría válida o es nulo (no tiene asignado ningún valor), se produce un mensaje de error en el componente FSx-Log, y no se creará el Producto.<br><br></li>
</ul>


		</td>
	</tr>
</table>
<br>

<p>Cuando las Categorías de la Tienda se crean mediante FSx-Connector (con el componente 
FSx-Catálogo), las relaciones se establecen automáticamente.
En caso de que el árbol de Categorías en la Tienda deba ser diferente al de
FactuSOL (o si ha creado ya las Categorías en la Tienda), deberá modificar
manualmente las relaciones entre Secciones y Categorías o entre Familias y
Categorías.</p>

<img src="images/fsxdic_mapa_opt.png" alt="fsxdic_mapa_opt">

<br><br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td>Cómo <b>Asignar una categoría diferente a una Sección o familia<br></b><br>
		Siga los pasos:
<ul>
	<li>Seleccione la nueva categoría de PrestaShop en el desplegable.<br><br></li>
	<li>Pulse el Icono 'Actualizar' (marcado con (1) en la figura). 
	El Diccionario de Categorías se actualizará sin necesidad de recargar la página (se realiza una petición Ajax).<br><br></li>
	<li>Si la actualización se hizo correctamente, aparecerá el Icono marcado con (2) en la figura.<br><br></li>
	<li>Si falló la actualización, aparecerá el Icono marcado con (3) en la figura.<br><br></li>
</ul>
		
		</td>
	</tr>
</table>
<br>

<p>Tenga en cuenta que una asociación acertada entre Secciones y Categorías, y entre
Familias y Categorías, hará posible que FSx-Connector pueda ubicar correctamente
los Artículos nuevos que carga en la Tienda (dentro de la Categoría apropiada).
También evitará Categorías duplicadas cuando FSx-Connector actualiza el Catálogo
(con el componente FSx-Catálogo).</p>

<p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> Puede asociar varias Familias de FactuSOL a la misma Categoría de PrestaShop. Los Artículos de todas esas Familias se crearán en la categoría especificada.</p>

<p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> <b>NOTA:</b> No se recomienda dejar ninguna Familia sin una Categoría asignada, a menos que en el componente FSx-Catálogo seleccione &quot;Cargar Familias&quot; igual a &apos;No&apos;, y ponga algún valor no nulo para "Categoría por defecto".</p>
<hr>



<h2 id="FSXDIC_BOX_CLIENTES">Caja de Clientes</h2>

<p>En la Caja de Clientes hay dos utilidades para manejar las equivalencias entre
Clientes de la Tienda PrestaShop y de FactuSOL.</p>

<img src="images/fsxdic_box_clientes.png" alt="fsxdic_box_clientes">
<br><br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cómo funciona el Diccionario de Clientes?<br></b><br>
		Cuando se importan Clientes a FactuSOL, el Código de Cliente en FactuSOL se calcula sumando el ID (identificador) 
		del Cliente en PrestaShop al Código Base. El resultado es único para cada Cliente de PrestaShop, 
		y si el Código Base es suficientemente alto, no existirá en FactuSOL un Cliente con ese código. De esta forma se establece 
		una correspondencia entre el Código del Cliente en PrestaShop y el que tiene en FactuSOL, 
		que forma una entrada del Diccionario de Clientes. Esta relación es indispensable para realizar correctamente la 
		Descarga de Pedidos desde PrestaShop a FactuSOL.
		<br><br>
		Ejemplo: supongamos que en FactuSOL los Clientes del mundo real se numeran secuencialmente, empezando desde 1. 
		Un Cliente de PrestaShop cuyo ID es 4 se descargará a FactuSOL y su Código en FactuSOL será 50004. 
		<br><br>
		Las utilidades de la Caja de Clientes permiten alterar las entradas del Diccionario de Clientes, 
		modificando así las correspondencias entre PrestaShop y FactuSOL.
		<br><br>
		Ejemplo: siguiendo con el ejemplo anterior, supongamos que descubrimos que el Cliente de PrestaShop cuyo ID es 4 
		ya existía en FactuSOL, y su Código en FactuSOL es 257. Entonces, con "Actualizar Código de Cliente en FactuSOL", 
		haríamos: 'ID en PrestaShop' = 4 , 'ID en FactuSol' = 257 y pulsar "Guardar". La entrada correspondiente del Diccionario 
		de Clientes se actualiza teniendo en cuenta esta relación. 
		</td>
	</tr>
</table>
<br>
<hr>

<p id="FSXDIC_BOX_CLIENTES_SEARCH"><b>Buscar Código de Cliente en FactuSOL</b></p>

<p>Si introduce un Código de Cliente de PrestaShop, obtendrá, si existe la correspondencia en el Diccionario 
		de Clientes, el Código para este Cliente en FactuSOL.</p>
<hr>

<p id="FSXDIC_BOX_CLIENTES_UPDATE"><b>Actualizar Código de Cliente en FactuSOL</b></p>

<p>Esta utilidad permite asignar manualmente un Código de FactuSOL a un Cliente de la Tienda
PrestaShop (actualizar una correspondencia del Diccionario de Clientes). Se utiliza, por ejemplo, 
cuando se registra en la Tienda PrestaShop un Cliente que ya existe en FactuSOL.</p>

<p>Si fuera necesario eliminar una correspondencia del Diccionario de Clientes, indique el 'ID en PrestaShop' del Cliente, 
y haga 'ID en FactuSol' = 0.</p>
<hr>







<!--
<hr>

<h2>Configuración General</h2>

<img src="images/fsxconf_configuracion.png" alt="fsxconf_configuracion">

<p id="FSOL_LANGUAGE_ISO"><b>Idioma destino</b></p>
<p>Idioma de la Tienda que corresponde al idioma de FactuSOL (código ISO). Ponga &apos;es&apos; para español, &apos;ca&apos; para catalán o &apos;gl&apos; para gallego.</p>
<ul>
	<li>Valor: desplegable con los idiomas de la Tienda.</li>
	<li>Por defecto: &apos;es&apos;.</li>
</ul>
<hr>

<p id="FSX_COPY_TO_ALL_LANGUAGES"><b>Copiar textos a todos los Idiomas</b></p>
<p>Los textos de FactuSOL (descripciones de Secciones, Familias, Categorías, etc.) se copian a todos los idiomas o sólo al definido en &quot;Idioma destino&quot;.</p>
<ul>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSOL_CUSTOMER_CODE_BASE"><b>Código base para Clientes en FactuSOL</b></p>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cuál será el Código de Cliente en FactuSOL?<br></b><br>
		El Código de Cliente en FactuSOL se calcula sumando el ID (identificador) del Cliente en PrestaShop al Código Base. El resultado es único para cada Cliente de PrestaShop, y si el Código Base es suficientemente alto, no existirá en FactuSOL un Cliente con ese código.<br /><br />
		Ejemplo: supongamos que en FactuSOL los Clientes del mundo real se numeran secuencialmente, empezando desde 1. Un Cliente de PrestaShop cuyo ID es 4 se descargará a FactuSOL y su Código en FactuSOL será 50004 (muy probablemente ¡ya existía en FactuSOL el Cliente 4!). 
		</td>
	</tr>
</table>
<hr>

<p id="FSX_LOG_EMPTY_BEFORE_RUN"><b>Vaciar el LOG</b></p>
<p>El LOG (FSx-LOG) se vacía automáticamente antes de iniciar un proceso de Carga del Catálogo, o de descarga de Clientes y Pedidos.</p>
<ul>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="FSX_SHOW_CONTEXT_HELP"><b>Mostrar Ayuda</b></p>
<p>Muestra enlaces para obtener ayuda sensible al contexto.</p>
<ul>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>

<img src="images/fsxconf_help_1.png" alt="fsxconf_help_1">

<img src="images/fsxconf_help_2.png" alt="fsxconf_help_2">

<hr>

<p id="FSX_DISPLAY_ERRORS"><b>Modo Depuración</b></p>
<p>Muestra errores PHP si aparecen. Desactivar en el Entorno de Producción.</p>
<ul>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<h2>Configuraciones Técnicas del Enlace con FactuSOL</h2>

<img src="images/fsxconf_configuraciones.png" alt="fsxconf_configuraciones">

<p>Las configuraciones que siguen deben coincidir con las &quot;Configuraciones Técnicas&quot; de FactuSOL, si su Tienda PrestaShop está instalada en la raíz de su acceso FTP. Las carpetas indicadas DEBEN existir en el Servidor y tener permisos suficientes de escritura.</p>

<p>Si su Tienda PrestaShop NO está instalada en la raíz de su acceso FTP, siga leyendo para configurar correctamente los valores de &quot;Carpeta de Ejecución del Proyecto&quot; en FactuSOL y en su Tienda PrestaShop, ya que serán valores diferentes.</p>

<p id="FSOL_CBDCFG"><b>Carpeta de Ejecución del Proyecto</b></p>
<p>Poner la ruta relativa respecto a la carpeta donde está instalado PrestaShop, por ejemplo: <i>/modules/fsxconf/fsweb/BBDD/</i>. Debe empezar y acabar con &apos;<i>/</i>&bnsp;&apos;. 
Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot;, en esta carpeta se crea el fichero <i>factusolweb.sql</i> que contiene los datos exportados.</p>
<ul>
	<li>Valor: ruta a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;/modules/fsxconf/fsweb/BBDD/&apos;.</li>
</ul>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td><b>¿Cuál es la &quot;Carpeta de Ejecución del Proyecto&quot; en FactuSOL?<br></b><br>
		Si su Tienda PrestaShop está instalada en la raíz de su acceso FTP, la Carpeta de Ejecución del Proyecto tiene el mismo valor en PrestaShop y en FactuSOL. Si no es así:
		<ol>
			<li>Acceda a su Servidor mediante su programa FTP favorito. El directorio que está viendo es la carpeta raíz de su FTP (carpeta &apos;<i>/</i>&bnsp;&apos;).</li>
			<li>Navegue a la carpeta donde está instalada la Tienda. El directorio que está viendo es una carpeta como &apos;<i>/public_html/</i>&apos; (este dato se lo indicará su programa FTP).</li>
			<li>Si la Carpeta de Ejecución del Proyecto en PrestaShop es &apos;/modules/fsxconf/fsweb/BBDD/&apos;, en FactuSOL deberá poner:</li>
				<ul><li>Carpeta de Ejecución del Proyecto: &apos;/public_html/modules/fsxconf/fsweb/BBDD/&apos;</li></ul>
		</ol>
		</td>
	</tr>
</table>
<hr>

<p id="FSOL_CIACFG"><b>Subcarpeta de Imágenes de Artículos</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&bnsp;&apos;. 
Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot;, en esta carpeta se suben las imágenes de los Artículos.</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;imagenes/&apos;.</li>
</ul>
<hr>

<p id="FSOL_CPVCFG"><b>Subcarpeta de Pedidos de Clientes</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&bnsp;&apos;.
Cuando se realiza en FSx-Connector una &quot;Descarga de pedidos&quot; (FSx-Pedidos), en esta carpeta del Servidor se crean ficheros, uno por cada Pedido descargado. Por tanto esta carpeta deberá tener los permisos necesarios de escritura (en UNIX: 755, 775 ó 777).</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;npedidos/&apos;.</li>
</ul>
<hr>

<p id="FSOL_CCLCFG"><b>Subcarpeta de Clientes Creados On Line</b></p>
<p>Poner la ruta relativa a la <i>Carpeta de Ejecución del Proyecto</i>. Debe acabar con &apos;<i>/</i>&bnsp;&apos;. 
Cuando se realiza en FSx-Connector una &quot;Descarga de pedidos&quot; (FSx-Pedidos), en esta carpeta del Servidor se crean ficheros, uno por cada Cliente correspondiente a un Pedido descargado. Por tanto esta carpeta deberá tener los permisos necesarios de escritura (en UNIX: 755, 775 ó 777).</p>
<ul>
	<li>Valor: ruta relativa a una carpeta del Servidor.</li>
	<li>Por defecto: &apos;nclientes/&apos;.</li>
</ul>
<hr>

<h2 id="FSXCONF_BOX_TAREAS">Caja de Tareas</h2>

<p>La Caja de Tareas le informa sobre el Estado General del Conector. Le indica cuando se realizó por última vez la importación de datos desde FactuSOL, y contiene un botón de acción para actualizar la Base de Datos de FactuSOLWeb.</p>

<img src="images/fsxconf_box_tareas.png" alt="fsxconf_box_tareas">

<p>Si el Conector detecta un fichero <i>factusolweb.sql</i> más reciente que la &quot;Ultima actualización la Base de Datos de FactuSOLWeb (importar factusolweb.sql)&quot;, obtendrá un aviso &quot;<span style="color: red; font-weight: bold">DEBE</span>
Actualizar la Base de Datos de FactuSOLWeb&quot; en la Caja de Tareas. 

</p><p>Al pulsar &quot;Comenzar&quot;, se cargarán los datos obtenidos de FactuSOL en la Base de Datos de FactuSOLWeb (normalmente una parte de la Base de Datos de PrestaShop). Tenga en cuenta que los datos se cargan en la Base de Datos, pero aún no están disponibles para PrestaShop (Vea la sección FSx-Connector Catálogo).

</p><p>Al finalizar el proceso correctamente obtendrá un mensaje de confirmación, indicando el número de instrucciones procesadas, y también el número de Secciones, Familias y Artículos listos para cargarse en el Catálogo de PrestaShop.

</p><p>Si se produjera algún error, se indicará la instrucción que lo causó. En este caso, deberá corregir el error y empezar de nuevo (aunque se hayan procesado correctamente un cierto número de instrucciones). Un error aquí se debe normalmente a que introdujo en los campos de FactuSOL algún carácter que origina una sentencia SQL mal formada en el fichero <i>factusolweb.sql</i>. Generalmente se trata de la comilla sencilla ( &apos; ), que debe evitarse; si necesita utilizar este carácter, puede sustituirlo por la entidad html <b>&amp;apos;</b> o por su código <b>&amp;#39;</b> .

</p><p>El &quot;Ultimo procesado de FSx-Connector (Carga del Catálogo)&quot; se refiere a la última vez que se actualizó el Catálogo de Productos en la Tienda Web. Vea también la sección FSx-Connector Catálogo. 

</p><p>El &quot;Ultimo procesado de FSx-Connector (Descarga de Pedidos)&quot; se refiere a la última vez que se descargaron Clientes y Pedidos. Vea también la sección FSx-Connector Pedidos.

</p>
<hr>

<h2 id="FSXCONF_BOX_INFORMACIONES">Caja de Informaciones</h2>

<p>La Caja de Informaciones contiene enlaces de Recursos de Ayuda. Además ofrece un botón para comprobar si la versión de FSx-Connector que hay instalada es la última o existen actualizaciones.</p>
<img src="images/fsxconf_box_informaciones.png" alt="fsxconf_box_tareas">
<hr>

<h2 id="FSXCONF_BOX_INFORMACIONES_FACTUSOL">Caja de Informaciones FactuSOL</h2>

<p>La Caja de Informaciones FactuSOL le informa sobre algunos parámetros relevantes de las &quot;Configuraciones Técnicas&quot; de FactuSOL, una vez que se ha actualizado la Base de Datos de FactuSOLWeb. </p>
<img src="images/fsxconf_box_informacionesfactusol.png" alt="fsxconf_box_tareas">
<hr>

-->

<br>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxconf">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxcat">Siguiente &raquo;</a></div>
</div>

