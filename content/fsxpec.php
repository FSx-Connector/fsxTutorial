<?php

?>

<h1 id="MODULE_FSXPEC">FSx-Connector <span class="color_h1">Pedidos</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxcat">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxcli">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">Este Componente de FSx-Connector se encarga de descargar los Clientes y Pedidos. Sólo se descargarán los Clientes que realizaron un Pedido.</p>
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
	<li>Valor: selector  <br><br>
	  <ul>
		<li>&apos;No&apos;<br>
		Si alguna línea del Pedido contiene un Producto que no tiene correspondencia en FactuSOL, el Pedido NO se descargará, y se registrará el Error correspondiente en el Componente FSx-LOG.<br><br></li>
		<li>&apos;Si&apos;<br>
		Si alguna línea del Pedido contiene un Producto que no tiene correspondencia en FactuSOL, el Pedido se descargará, pero en la línea del Pedido en FactuSOL el campo <i>Código de artículo</i> aparecerá vacío (la línea corresponde a un 'Concepto no Codificado'). Se registrará el Aviso correspondiente en el Componente FSx-LOG.<br><br></li>
	  </ul></li>
	<li>Por defecto: &apos;No&apos;.</li>
</ul>
<p><br>Normalmente este parámetro debe fijarse a 'No', para evitar
inconsistencias entre FactuSOL y la Tienda PrestaShop. Un caso en el que interesa ponerlo en
'Si' es en el caso de un negocio de distribución, cuando en la Tienda se ofrecen
productos que no se tienen en stock (y que por tanto no están dados de alta en FactuSOL), que sólo se comprarán (y se darán de alta en FactuSOL) si se materializa una
venta en la Tienda PrestaShop.<br><br></p>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>¿Cómo sabe FSx-Connector si <b>un Producto de la Tienda tiene correspondencia en FactuSOL?<br></b><br>
		Sencillo: un Producto de la Tienda tiene correspondencia en FactuSOL si está en la Base de Datos de FactuSOLWeb.<br><br>
		Para que esto suceda, el Artículo se marcó en FactuSOL para usar en Internet, se exportó cuando se hizo una "Subida de Datos Genérica" en FactuSOL, 
		y se incorporó a la Base de Datos de FactuSOLWeb cuando se hizo "Actualizar la Base de Datos de FactuSOLWeb" en el Componente FSx-Configuración.<br><br>
		</td>
	</tr>
</table>
<br>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td><b>Si subió el Catálogo por partes...</b><br><br>
		...es posible que la Base de Datos de FactuSOLWeb no contenga todos los Productos de su Catálogo, y le impida descargar ciertos Pedidos. Para solucionar esta situación:

<ul>
	<li>En FactuSOL:<br> Asegúrese de marcar todos los Artículos, Secciones y Familias (y Formas de Pago) que se usarán en Internet.<br><br></li>
	<li>En FactuSOL:<br> Hacer una "Subida de Datos Genérica".<br><br></li>
	<li>En FSx-Connector:<br> Hacer "Actualizar la Base de Datos de FactuSOLWeb" en el Componente FSx-Configuración. Ahora tendrá en la base de datos de FactuSOLWeb todos los Artículos que está usando en su Tienda PrestaShop.<br><br></li>
</ul>
<p>NOTA: si subió los Artículos en diferentes cargas, no es necesario "Actualizar el Catálogo" en el Componente FSx-Catálogo, ya que los Artículos ya se crearon en su Tienda PrestaShop.</p>

		</td>
	</tr>
</table>
<br>

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

<p id="FSXPEC_FILTERS"><b>Cómo funcionan los filtros de Descarga de Pedidos</b></p>

<ul>
	<li>Campo "desde fecha" vacío: es equivalente a tomar una fecha anterior al Pedido más antiguo de la Tienda.<br><br></li>
	<li>Campo "hasta fecha" vacío: es equivalente a tomar una fecha posterior al Pedido más reciente de la Tienda.<br><br></li>
	<li>Campo "desde número" vacío: es equivalente a tomar los Pedidos a partir del último descargado. Tenga en cuenta que el Número de Pedido más bajo (más antiguo) es el '1'.<br><br></li>
	<li>Campo "hasta número" vacío: es equivalente a tomar los Pedidos hasta el último registrado (inclusive).<br><br></li>
</ul>
<hr>

<p id="FSXPEC_BOX_DESCARGAS"><b>Cajas de Descargas</b></p>

<p>Una vez descargados los pedidos, deberá
importarlos a FactuSOL utilizando las
opciones que tiene FactuSOL para ello, o
borrar los ficheros generados. Si no lo
hace, FSx-Connector le avisará la próxima vez
que intente descargar Pedidos.</p>

<img src="images/fsxpec_box_descargas.png" alt="fsxpec_box_descargas">

<p>NOTA: FactuSOL puede importar Clientes con su Dirección Principal y (sólo) una
Dirección de Entrega. Si un Cliente utiliza varias direcciones de entrega, puede ser
necesario usar adecuadamente los filtros de Pedidos para aislar los Pedidos de un
Cliente que suceden simultáneamente con diferentes direcciones de entrega. Una
vez identificados, podrán tratarse manualmente a continuación.</p>
<hr>

<h2 id="FSXPEC_BOX_PEDIDOS">Pedidos Pendientes</h2>

<p>En esta caja puede
comprobar los Pedidos pendientes de
descargar, empezando por los más
recientes. Llevando el ratón sobre el
Número de Cliente, podrá ver el nombre del
Cliente.
</p>

<img src="images/fsxpec_box_pedidos.png" alt="fsxpec_box_pedidos">

<p>Adicionalmente, puede marcar un Pedido
como descargado pulsando sobre el icono a
la derecha. Esto es de utilidad en el caso de
que quiera gestionar un Pedido
manualmente (por ejemplo un Pedido realizado desde fuera de España), para
eliminarlo de la lista de Pedidos pendientes.</p>

<p>También se destaca en color azul el "ID" del Pedido cuando es el priemero que confirma un 
Cliente. Además, si pone el cursor del ratón sobre los campos del Pedido, obtendrá información adicional.</p>

<img src="images/fsxpec_box_pedidos_1.png" alt="fsxpec_box_pedidos_1">
<hr>

<h2 id="FSXPEC_BOX_HERRAMIENTAS">Herramientas</h2>

<p>Cuando se descarga un Pedido, éste se
marca internamente como "Descargado", y
ya no se puede volver a descargar. Sin
embargo, puede ser necesario volver a
descargar un Pedido. Mediante esta Caja,
se marca el Pedido internamente como
"Pendiente de descarga", y podrá descargarse de nuevo, estableciendo los filtros
adecuados.
</p>

<img src="images/fsxpec_box_herramientas.png" alt="fsxpec_box_herramientas">

<hr>

<h2 id="FSXPEC_CLIENTES">Qué sucede entre bastidores cuando se Descargan los Clientes</h2>

<ul>
	<li>FSx-Connector crea un fichero con los datos del Cliente. Le asigna un Código
de Cliente para FactuSOL resultante de sumar el valor del "Código base para
FactuSol" con el "id" del Cliente en la Tienda (ver apartado FSx-Connector
Configuración). Este procedimiento garantiza códigos de cliente únicos.<br><br></li>
	<li>FSx-Connector crea una entrada en el Diccionario de Clientes que relaciona
la ficha del Cliente en la Tienda Web con su ficha en FactuSol. Esta entrada
tiene dos finalidades:<br><br></li>
		<ul>
			<li>Dice a FSx-Connector que el Cliente ya existe en FactuSOL, y por tanto
no hay que volver a descargarlo si realiza más Pedidos.<br><br></li>
			<li>Cuando se descargan los Pedidos, indica a FSx-Connector el Cliente
de FactuSOL que ha realizado el Pedido.<br><br></li>
		</ul>
	</li>
</ul>


<p>NOTA: La entrada en el Diccionario de Clientes puede realizarse manualmente y
surte el mismo efecto. Puede ser necesario hacerlo así con un Cliente en
FactuSOL que se registró posteriormente en la Tienda (ver apartado FSx-Connector
Diccionario).</p>
<hr>

<h2 id="FSXPEC_FACTUSOL">Importación a FactuSOL</h2>
<p><img width="15" height="15" alt="lamp" src="images/lamp.gif"> Para evitar errores, se debe descargar primero los Clientes y luego los Pedidos.</p>
<p>Una ver realizada la descarga, las <b>Cajas de Descargas</b> ya no aparecen, puesto que si la descarga es correcta, los ficheros que genera FSx-Connector se borran del Servidor.</p>
<hr>

<p id=""><b>Descargar Clientes a FactuSOL</b></p>

<img src="images/fsxpec_factusol_1.png" alt="fsxpec_factusol_1">

<p>Este proceso descarga e introduce en FactuSOL los clientes que se hayan dado de alta desde la web.</p>

<p>Con el objetivo de automatizar este proceso y no obligar al usuario a la ejecución periódica de esta opción, 
es posible, desde la opción de Configuración de la pestaña Internet indicar al programa la descarga automática del fichero de clientes 
cada cierto intervalo de tiempo.</p>

<p>El Cliente se crea en FactuSOL con los datos obtenidos de la Tienda Web. El Código
de Cliente lo calculó FSx-Connector, sumando el valor del "Código base para
FactuSol" con el "id" del Cliente en la Tienda (ver apartado FSx-Connector Configuración).</p>
<hr>

<p id=""><b>Descargar Pedidos a FactuSOL</b></p>

<img src="images/fsxpec_factusol_2.png" alt="fsxpec_factusol_2">

<p>Este proceso descarga e introduce en FactuSOL los pedidos de clientes que se hayan realizado desde la web.</p>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img width="32" height="32" title=" Sugerencia! " alt="tip" src="images/tip.png"></th>
		<td>Es recomendable no importar más de 100 Pedidos y/o Clientes de una sola vez, ya
que, para cantidades mayores, FactuSOL puede producir errores en tiempo de ejecución (Runtime Error). Si tiene muchos Pedidos que importar, hágalo en
grupos de unos 100, usando para ello los filtros de Descarga de Pedidos que se explican más arriba.
		</td>
	</tr>
</table>
<br>

<p>Con el objetivo de automatizar este proceso y no obligar al usuario a la ejecución periódica de esta opción, 
es posible, desde la opción de Configuración de la pestaña Internet indicar al programa la descarga automática del fichero de pedidos 
de clientes cada cierto intervalo de tiempo.</p>

<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>Tenga en cuenta que FactuSOL sólo admite cuatro Tipos de Impuesto, que se diferencian por el tipo impositivo: 
		tres corrresponden con los Tipos de IVA (en España, 2013: IVA Normal 21%, IVA Reducido 10%, IVA Super-reducido 4%), y el cuarto es "Exento" 
		(tipo 0%). Si un Pedido tiene un porcentaje de impuesto diferente de los que hay en FactuSOL, ese Pedido no se descargará.
		</td>
	</tr>
</table>
<br>

<p>El Pedido se crea en la Serie que se definió en las "Configuraciones Técnicas" de FactuSOL, Solapa "Pedidos de Cliente". 
Dentro de esta Serie, FactuSOL asigna el primer número disponible. El Número del Pedido en la Tienda Web aparecerá en FactuSOL 
en el campo 'Su Ref.'. También se recuperan las Observaciones del Cliente en el campo 'Comentarios' de FactuSOL, la Forma de Pago 
(si se definió la correspondencia en el Componente FSx-Diccionario) y otros datos relevantes.</p>
<p>Las Líneas del Pedido representan los conceptos:</p>

<ul>
	<li>Artículos Codificados<br>
	El campo <i>Código de artículo</i> aparece relleno. Son Productos que tienen su correspondencia en FactuSOL.<br><br></li>
	
	<li>Artículos no Codificados<br>
	El campo <i>Código de artículo</i> aparece vacío. Son Productos que no tienen su correspondencia en FactuSOL (se descargaron los Pedidos con 
	'Descargar Pedidos aunque alguna Línea no coincida con FactuSOL' = 'Si').<br><br></li>
	
	<li>Conceptos no Codificados<br>
	El campo <i>Código de artículo</i> aparece vacío. Estas líneas corresponden a otros conceptos del Pedido, como los Gastos de Envío o Descuentos al Pedido.<br><br></li>
</ul>
<hr>

<!--

<p class="intro">Los Parámetros de Configuración que se establecen en este Componente de FSx-Connector se utilizan, en general, por todos los Componentes de FSx-Connector.</p>
<p>Cuando se realiza en FactuSOL una &quot;Subida de Datos Genérica&quot;, se crea en el Servidor el fichero <i>factusolweb.sql</i> que contiene los datos exportados. Con Fsx-Configuración podrá incorporar estos datos a la base de Datos de FactuSOLWeb, que está dentro de a la Base de Datos de PrestaShop. La Tienda PrestaShop todavía no conoce estos datos, pero es el primer paso, antes de procesarlos con otros Componentes de FSx-Connector.</p>
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
<div class="next"><a class="chapter" href="index.php?tab=fsxcli">Siguiente &raquo;</a></div>
</div>

