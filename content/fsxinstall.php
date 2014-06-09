<?php

?>

<h1 id="MODULE_FSXINSTALL">FSx-Connector <span class="color_h1">Instalación</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxintro">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxdaily">Siguiente &raquo;</a></div>
</div>
<hr>
<p class="intro">FSx-Connector consta de varios módulos o componentes, cada uno de los cuales realiza tareas específicas.</p>
<hr>
<p>En la Zona de Administración de su Tienda PrestaShop (o Back Office), pulse la pestaña &quot;Módulos&quot;.
En la Categoría &quot;Otros Módulos&quot;, encontrará un Grupo de Módulos similar a:</p>

<img src="images/fsxinstall_modules.png" alt="fsxinstall_modules">

<p>FSx-Connector consta de varios módulos o componentes, que deberán instalarse teniendo en
cuenta las dependencias entre ellos:</p>

<ul>
	<li><b>FSx-Connector Configuración</b><br>
Configuración básica de FSx-Connector<br><br></li>
	<li><b>FSx-Connector Diccionario</b><br>
Diccionario de equivalencias entre FactuSOL y PrestaShop<br><br></li>
	<li><b>FSx-Connector Catálogo</b><br>
Carga el Catálogo (Categorías y Productos)<br><br></li>
	<li><b>FSx-Connector Pedidos</b><br>
Descarga de Clientes y Pedidos<br><br></li>
	<li><b>FSx-Connector Log</b><br>
Log de eventos de FSx-Connector<br><br></li>
</ul>

<p>Se recomienda instalar los módulos en la secuencia que se indica arriba, ya que
aparecerán en el mismo orden en las pestañas de selección. No obstante, este
orden puede modificarse a posteriori en &quot;Back Office -&gt; Administración -&gt; Pestañas&quot;.</p>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/lamp.jpg" width="32" height="32" alt="lamp"></th>
		<td>Los componentes <b>FSx-Catálogo</b> y <b>FSx-Pedidos</b> sólo
funcionará correctamente si se han instalado (y configurado correctamente)
previamente los componentes básicos: <b>FSx-Configuración</b>, <b>FSx-Diccionario</b> y <b>FSx-LOG</b>.
		</td>
	</tr>
</table>
<br><br>
<table class="lamp" id="table1">
	<tr>
		<th width="34"><img src="images/tip.png" width="32" height="32" alt="tip" title=" Sugerencia! "></th>
		<td>Cuando se instala FSx-Connector, <b>¿qué clases se sobrecargan (override)?<br></b><br>
		Las clases que se sobrecargan son:<br><br>
<ul>
	<li><i>/override/classes/controller/Controller.php</i><br><br></li>
	<li><i>/override/classes/controller/ModuleAdminController.php</i><br><br></li>
	<li><i>/override/classes/FileUploader.php</i><br><br></li>
	<li><i>/override/classes/SpecificPrice.php</i><br><br></li>
	<li><i>/override/controllers/admin/AdminCategoriesController.php</i><br><br></li>
	<li><i>/override/controllers/admin/AdminProductsController.php</i><br><br></li>
</ul>
		</td>
	</tr>
</table>

<hr>
<br>

<h2>La Pantalla de FSx-Connector</h2>

<p>FSx-Connector se integra perfectamente en la Zona de Administración (Back Office) de
PrestaShop, donde aparece una nueva pestaña con los Componentes del Conector:</p>

<img src="images/fsxinstall_menu.png" alt="fsxinstall_menu">

<p>Cuando selecciona uno de los Componentes de FSx-Connector, verá algo similar a:</p>

<img src="images/fsxinstall_moduleview.png" alt="fsxinstall_moduleview">

<p>La pantalla se divide en tres zonas bien definidas:</p>
<ol>
	<li><b>Columna Izquierda</b><br>
		Contiene un menú de acceso rápido a los Componentes de FSx-Connector. Los enlaces pueden variar en función de los Componentes instalados.<br><br></li>
	<li><b>Bloque Central</b><br>
		Contiene los parámetros de configuración del Componente. El valor de estos determinará cómo se realizan las acciones o tareas propias del Componente.<br><br></li>
	<li><b>Columna Derecha</b><br>
		Contiene una o varias cajas o bloques para realizar las acciones o tareas propias del Componente. A veces pueden aparecer otros bloques con información sobre el estado del Conector o del Componente.<br><br></li>
</ol>

<p>FSx-Connector se integra perfectamente con PrestaShop, y sigue los mismos principios operativos de los Módulos PrestaShop.</p>

<hr>

<h2 id="MODULE_FSXINSTALL_CLEFT">La Columna Izquierda</h2>

<p>Contiene un menú de acceso rápido a los Componentes de FSx-Connector que tenga instalados con su Tienda PrestaShop. Además hay dos enlaces adicionales: <b>Ayuda</b> y <b>Reportar un Error</b>.</p>

<img src="images/fsxinstall_navegacion.png" alt="fsxinstall_navegacion">

<p id=""><b>Ayuda</b></p>
<p>Este enlace abre el Sitio de Ayuda de FSx-Connector en otra ventana.</p>

<img src="images/fsxinstall_help.png" alt="fsxinstall_help">

<p id=""><b>Reportar un Error</b></p>
<p>Este enlace abre un formulario para enviar correo, informando de un error o proponiendo una mejora. Los datos que envíe serán utilizados exclusivamente para mejorar FSx-Connector, y en ningún caso serán almacenados o cedidos a terceros.</p>

<img src="images/fsxinstall_reportar.png" alt="fsxinstall_reportar">

<hr>

<h2>Inicializando FSx-Connector</h2>

<p>Es posible que cuando intente utilizar algún Componente de FSx-Connector, sobre todo la primera vez, que encuentre una pantalla como:</p>

<img src="images/fsxdic_errores.png" alt="fsxdic_errores">

<p>En ella aparecen distintos tipos de mensajes indicando el estado del Componente y las acciones a realizar. 
También se ocultan los botones de acción cuando no se pueden realizar ciertas tareas debido a que es necesario completar pasos previos. 
Por ejemplo, si desea</p>

<i>Actualizar Categorías y Productos (componente FSx-Catálogo)</i>, antes debe:
<ul style="list-style: none; padding-left:28px; margin-left: -15px;">
	<li style="margin-left: 0px;"><img src="images/arrow-left-up.png" alt="arrow-left-up"> Establecer el Diccionario de Impuestos (componente FSx-Diccionario); pero antes debe:<br><br>
<ul style="list-style: none; xpadding:0; margin-left: -15px;">
	<li><img src="images/arrow-left-up.png" alt="arrow-left-up"> Actualizar la Base de Datos de FactuSOLWeb (componente FSx-Configuración); pero antes debe:<br><br>
<ul style="list-style: none; xpadding:0; margin-left: -15px;">
	<li><img src="images/arrow-left-up.png" alt="arrow-left-up"> Hacer una Subida Genérica de Datos en FactuSOL<br><br>
	</li>
</ul>
	</li>
</ul>
	</li>
</ul>

<p>Hay determinados procesos que deben realizarse en una secuencia determinada. 
En este caso FSx-Connector le impedirá seguir si no se han completado los pasos obligarios anteriores, 
y le informará de qué debe hacer a continuación. De esta forma FSx-Connector le guiará en todo momento.</p>

<p>También aparece un mensaje informativo si una función no está disponible en su instalación de FSx-Connector porque no está incluida en su licencia.</p>
<hr>

<!--


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
<div class="prev"><a class="chapter" href="index.php?tab=fsxintro">&laquo; Anterior</a></div>
<div class="next"><a class="chapter" href="index.php?tab=fsxdaily">Siguiente &raquo;</a></div>
</div>

