<?php

?>

<h1 id="MODULE_FSXPEC">FSx-Connector <span class="color_h1">Pedidos</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxcat">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxlog">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Este componente de FSx-Connector se encarga de descargar los Clientes y Pedidos. Sólo se descargarán los Clientes que realizaron un Pedido.</p>
<hr>
<p>Los Parámetros de Configuración de este Componente determinan la forma en que se
descargarán los Pedidos desde PrestaShop. Observe que se deberían descargar
todos los Pedidos, y el filtro principal es el Estado del Pedido. Tenga en cuenta que
cuando un Cliente hace un Pedido en PrestaShop, el Pedido se creará con un
estado determinado (según se haya configurado en la Tienda), y éste debería ser el
estado de referencia para descargar Pedidos. Es recomendable que el estado del
Pedido cambie cuando se descarga (esto lo puede hacer FSx-Connector), para que
pueda controlar más fácilmente la situación de gestión de cada Pedido.</p>
<hr>

<h2>Configuración Descarga de Pedidos</h2>

<img src="images/fsxpec_configuracion.png" alt="fsxpec_configuracion">

<p id="PSH_ORDER_FROM_COUNTRY_ID"><b>Descargar Pedidos por País</b></p>
<p>Descargar sólo los Pedidos del País seleccionado.</p>
<ul>
	<li>Valor: desplegable con los Países definidos en la Tienda. Si no se
selecciona un País, se descargan los Pedidos de todos los Países
que coincidan con el resto de filtros seleccionados.</li>
	<li>Por defecto: España.</li>
</ul>
<hr>

<p id="PSH_ORDER_TO_DOWNLOAD_STATUS_ID"><b>Descargar Pedidos por Estado</b></p>
<p>Descargar sólo los Pedidos con el Estado seleccionado.</p>
<ul>
	<li>Valor: desplegable con los Estados de Pedido definidos en la
Tienda. Si no se selecciona un Estado, se descargan todos los
Pedidos que coincidan con los filtros de Fecha y Número de
Pedido (Caja de tareas), independientemente de su Estado.</li>
	<li>Por defecto: vacío.</li>
</ul>
<hr>

<p id="PSH_ORDER_DOWNLOADED_STATUS_ID"><b>Cambiar el Estado de los Pedidos</b></p>
<p>El Estado de los Pedidos descargados se cambiará al Estado seleccionado.</p>
<ul>
	<li>Valor: desplegable con los Estados de Pedido definidos en la
Tienda. Si no se selecciona un Estado, no se cambiará el Estado
de los Pedidos que se descarguen.</li>
	<li>Por defecto: vacío.</li>
</ul>
<hr>


<p id="PSH_DOWNLOAD_ALL_CUSTOMERS_WO"><b>Descargar todos los Clientes</b></p>
<p>Descargar los Clientes de los Pedidos, aunque se hayan
descargado a FactuSOL anteriormente. En cualquier caso, los
Clientes registrados que no han realizado al menos un Pedido, no
se descargarán.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<hr>

<p id="PSH_DLOAD_ORDER_SHIPPING_ADDRESS"><b>Descargar Pedidos con Dirección de Entrega</b></p>
<p>Descargar Pedidos que la Dirección de Entrega es diferente de
la Dirección Principal del Cliente.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<p>Normalmente este parámetro puede fijarse a 'Si'. Pero bajo ciertas
circunstancias puede interesarle ponerlo a 'No', descargar el resto de Pedidos 
(aquellos en que las direcciones de facturación y entrega coinciden), y
luego gestionar cada uno de los Pedidos con dirección de entrega diferente.</p>
<hr>

<p id="PSH_USE_WEB_DESC"><b>Usar el nombre web para los Artículos</b></p>
<p>Si: Usa el nombre web de los Artículos en los Pedidos
descargados; No: Usa el nombre original de FactuSOL.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;Si&apos;.</li>
</ul>
<hr>

<p id="PSH_DLOAD_ALL_LINES"><b>Descargar Pedidos aunque alguna Línea no coincida con FactuSOL</b></p>
<p>Descargar los Pedidos aunque algún Producto no tenga correspondencia en FactuSOL.</p>
<ul>
	<li>Valor: selector Si, No.</li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<p>Normalmente este parámetro puede fijarse a 'No', ya que puede crear
inconsistencias entre FactuSOL y la Tienda PrestaShop. Un caso en el que interesa ponerlo en
'Si' es en el caso de un negocio de distribución, cuando en la Tienda se ofrecen
productos que no se tienen en stock, y que sólo se comprarán si se materializa una
venta.</p>
<hr>

<h2 id="FSXPEC_BOX_TAREAS">Caja de Tareas</h2>

<p>La Caja de Tareas le proporciona
información sobre procesos pasados, y
le permite definir filtros adicionales
para la descarga de Pedidos. Si no
establece ningún filtro aquí, se
empezarán a descargar pedidos a
partir del último indicado.
</p>
<p>Los Pedidos se descargan pulsando
"Comenzar". También se descargan
los Clientes cuando realizan su primer
pedido. Cuando se descarga un
Pedido, éste se marca internamente
como "Descargado", para que no se
vuelva a descargar.</p>
<p>Para seleccionar una fecha, se despliega un calendario.</p>

<img src="images/fsxpec_box_tareas.png" alt="fsxpec_box_tareas">

<!--

<p class="intro">Los Parámetros de Configuración que se establecen en este componente de FSx-Connector se utilizan, en general, por todos los componentes de FSx-Connector.</p>
<p>Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot;, se crea en el Servidor el fichero <i>factusolweb.sql</i> que contiene los datos exportados. Con Fsx-Configuración podrá incorporar estos datos a la base de Datos de FactuSOLWeb, que está dentro de a la Base de Datos de PrestaShop. La Tienda PrestaShop todavía no conoce estos datos, pero es el primer paso, antes de procesarlos con otros componentes de FSx-Connector.</p>
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
<p>Los Clientes que se importan a FactuSOL se numeran a partir de este valor. Un valor suficientemente alto permite separar los Clientes de la Tienda Web de los Clientes del mundo real.</p>
<ul>
	<li>Valor: número entero positivo.</li>
	<li>Por defecto: 50000.</li>
</ul>
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
<div class="prev"><a class="chapter" href="index.php?tab=fsxcat">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxlog">Siguiente &raquo;</a></div>
</div>

