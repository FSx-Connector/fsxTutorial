<?php

?>

<h1 id="MODULE_FSXFAQ">FSx-Connector <span class="color_h1">Preguntas Frecuentes (FAQ)</span></h1>
<div class="chapter">
<div class="prev"><a class="chapter" href="index.php?tab=fsxpcron">&laquo; Anterior</a></div>
<!-- div class="next"><a class="chapter" href="index.php?tab=fsxsvn">Siguiente &raquo;</a></div -->
</div>
<hr>
<p class="intro">Preguntas y respuestas sobre cuestiones que se plantean frecuentemente relativas a FSx-Connector.</p>
<hr>

<!-- FactuSOL -->
<h2 id="FAQ_GEN">General</h2>

<h3 id="FAQ_GEN_10"><b>¿Puedo obtener FSx-Tutorial en formato PDF?</b></h3>
<p>Sí. Utilice los enlaces "IMPRIMIR" en la cabecera y pié de página. Si no dispone en su ordenador de un conversor a PDF, puede <a href="http://www.dopdf.com/es/" target="_blank"><b>descargar uno aquí</b></a>.</p>
<hr>

<!-- FactuSOL -->
<h2 id="FAQ_FSOL">Sobre FactuSOL</h2>

<h3 id="FAQ_FSOL_10"><b>En FactuSOL se pueden definir Artículos con Tallas y Colores. ¿Se pueden pasar a PrestaShop con FSx-Connector?</b></h3>

<p>En FactuSOL se pueden definir únicamente dos características: Talla y Color, aunque se les puede poner nombres diferentes. Estas dos características se aplicarán a todos los Productos. Por tanto, si un Producto en PrestaShop tiene más de dos atributos, no será posible representarlo exactamente en FactuSOL. Tampoco será posible representar el Catálogo de PrestaShop si se manejan más de dos atributos, aunque un Producto tenga dos atributos como máximo. </p>

<p>Además FactuSOL no contempla en la exportación a la web (pestaña "Internet" -> "Subida Genérica de Datos"), ni en la importación de la Tienda online (pestaña "Internet" -> "Descarga de Pedidos"), los datos relativos a Talla y Color. Por ello no se puede establecer una correspondencia exacta entre productos, ni tampoco controlar el stock por Talla y Color en las ventas online. </p>

<p>En general, la integración de FactuSOL con una Tienda PrestaShop en sectores en que todo el Catálogo está formado exclusivamente por Productos que tienen Atributos no es viable en la práctica. Sin embargo, cuando sólo una pequeña parte del Catálogo tienen atributos, FSx-Connector puede modificarse para relacionar de forma unívoca el Catálogo en PrestaShop y el de FactuSOL, con un trabajo manual adicional en PrestaShop. </p>

<p>Puede obtener <a href="http://fsxtutorial.factusol-prestashop.es/index.php?tab=fsxcat#MODULE_FSXCAT_PCC"><b>más información aquí</b></a>.</p>

<hr>

<h3 id="FAQ_FSOL_20"><b>¿Se pueden pasar los Fabricantes en FactuSOL a la Tienda PrestaShop?</b></h3>
<p>FactuSOL no exporta los Fabricantes a la web, y por ello no se pueden pasar los Fabricantes en FactuSOL a la Tienda PrestaShop mediante FSx-Connector.  </p>
<hr>

<h3 id="FAQ_FSOL_40"><b>Si un Cliente que ya existe en FactuSOL, se registra y realiza una compra en PrestaShop, al importar el pedido a FactuSOL ¿se generará un Cliente diferente?</b></h3>
<p>En el proceso normal de descarga de un Cliente, FSx-Connector crea un fichero con los datos del Cliente y le asigna un Código de Cliente para FactuSOL. Este procedimiento garantiza que los códigos de Cliente
serán únicos en FactuSOL. Adicionalmente, FSx-Connector crea una entrada en el Diccionario de Clientes que relaciona la ficha del Cliente en la Tienda Web con su ficha en FactuSOL. 
En adelante si se producen nuevos pedidos del Cliente que ya existe en FactuSOL, no volverá a descargarlo.

<p>Sin embargo la entrada en el Diccionario de Clientes puede realizarse manualmente, y surte el mismo efecto. Puede ser necesario hacerlo así en el caso en cuestión, para un Cliente de FactuSOL que se registró posteriormente en la Tienda: 
se realiza manualmente la entrada en el Diccionario de Clientes, asignando a la Ficha del Cliente de PrestaShop el código de ese mismo Cliente que ya existe en FactuSOL. A continuación se descarga el Pedido, y FSx-Connector lo vinculará al Código de Cliente correcto de FactuSOL.	</p>
<hr>


<h3 id="FAQ_FSOL_50"><b>Hago una Subida Genérica de Datos y FactuSOL me devuelve un error. ¿A qué se debe?</b></h3>
<p>Siga los siguientes pasos:
	<ul>
		<li>Revise las configuraciones técnicas, que se han escrito correctamente, sin espacios en blanco u otros caracteres ocultos.<br><br></li>
		<li>Compruebe que su firewall (o router) y su antivirus permiten conectarse a FactuSOL vía FTP (puerto 21).<br><br></li>
	</ul></p>
<hr>


<h3 id="FAQ_FSOL_60"><b>En FactuSOL, descargo los Clientes y los Pedidos y el proceso termina normalmente, sin errores, pero no encuentro Clientes nuevos ni Pedidos nuevos. ¿A qué se debe?</b></h3>
<p>Siga los siguientes pasos:</p>
	<ul>
		<li>Revise el Log de FSx-Connector (componente FSx-LOG). Es posible que se hayan producido errores (normalmente datos incompletos) y no haya Pedidos que descargar. El Log le indicará el origen del problema, y eventualemnte la vía de solución.<br><br></li>
		<li>En el componente FSx-Pedidos, compruebe que hay ficheros de Clientes y Pedidos pendientes para descargar. Si no es así, el proceso de descarga en FactuSOL no ha producido ningún resultado. Revise los filtros que ha aplicado para la descarga: puede que sean demasiado estrictos y no produzcan resultados.<br><br></li>
		<li>Revise las configuraciones técnicas, que se han escrito correctamente, sin espacios en blanco u otros caracteres ocultos; concretamente compruebe que 
		el campo <i>&quot;Carpeta de ejecución del Proyecto&quot;</i> tenga el mismo valor que el campo <i>&quot;Carpeta de subida para fichero de texto ASCII&quot;</i> y que esa carpeta existe en su servidor.<br><br></li>
	</ul>
</p>
<hr>

<h3 id="FAQ_FSOL_70"><b>¿Se pueden pasar los Clientes dados de alta en FactuSOL a la Tienda PrestaShop?</b></h3>
<p>Técnicamente es posible pero plantea ciertos problemas de gestión. </p>
	<ul>
		<li>En primer lugar porque el identificador primario de FactuSOL es el Código de Cliente o el NIF, y en PrestaShop es la dirección de correo electrónico. En FactuSOL el correo electrónico no es obligatorio, y no hay garantía de que esté disponible para todos los Clientes en FactuSOL.<br><br></li>
		<li>En segundo lugar, deberá generar una contraseña para la Cuenta del Cliente en PrestaShop, y deberá hacérsela llegar al Cliente. Pero para evitar problemas relacionados con la privacidad de datos (usted posee la contraseña de acceso de su Cliente) el Cliente deberá cambiar explícitamente la contraseña.<br><br></li>
	</ul>
<p>Por tanto, si se quiere subir a PrestaShop los Clientes de FactuSOL, debe preparar cuidadosamente el proceso y coordinarlo con informar a sus Clientes; no es tan simple como hacer una descarga automática. </p>
<p>Una posibilidad es organizar un comunicado con instrucciones precisas para que determinados Clientes se registren en la Tienda PrestaShop por ellos mismos, y luego utilizar las herramientas del componente FSx-Diccionario para enlazar los Clientes creados en la Tienda PrestaShop con los que ya existían en FactuSOL.</p>
<hr>
<!-- FSx-C -->

<h2 id="FAQ_FSXC">Sobre FSx-Connector</h2>

<h3 id="FAQ_FSXC_10"><b>¿Puedo usar la multitienda con FSx-Connector?</b></h3>
<p>Actualmente no, ya que FactuSol está concebido para que una Empresa esté enlazada con sólo una Tienda Web. Actualmente FSx-Connector para PrestaShop 1.5.x requiere que la opción multi-tienda esté deshabilitada en PrestaShop.</p>
<hr>

<h3 id="FAQ_FSXC_20"><b>Tengo mi Catálogo en PrestaShop y acabo de instalar FactuSOL. ¿Tengo que empezar de nuevo?</b></h3>
<p>El trabajo realizado para cargar el Catálogo en PrestaShop es perfectamente válido. Lo más recomendable es exportar los datos de Categorías y Productos de PrestaShop en formato CSV. El fichero generado puede ser tratado en Excel para posteriormente importarlo a FactuSOL y hacer las configuraciones necesarias como si empezara desde cero. </p>
<p>Un proceso similar se puede seguir para exportar los Clientes registrados en PrestaShop, e importarlos posteriormente en FactuSOL. </p>
<hr>

<h3 id="FAQ_FSXC_30"><b>Tengo muchos pedidos, ¿se puede automatizar la descarga?</b></h3>
<p>Sí, con el componente FSx-pCron adicional a FSx-Connector. 
	
	El componente FSx-pCron permite configurar una Tarea para descargar automáticamente los Clientes y Pedidos de la Tienda PrestaShop. Esta tarea se puede agregar al Sistema de Tareas Programadas del Servidor donde está la Tienda (cron del Servidor) para que se realice en los momentos que se decidan al configurarlo. 
Luego se deben importar los ficheros generados desde FactuSOL, tarea que también se puede programar en FactuSOL para que se ejecute automáticamente en los intervalos de
tiempo que necesite.
		
<hr>

<h3 id="FAQ_FSXC_40"><b>Una vez subido un Artículo de FactuSOL a PrestaShop, ¿se guardan las modificaciones que se hagan posteriormente en PrestaShop? ¿y en FactuSOL?</b></h3>
<p>Los principios de funcionamiento son:</p>
<ol>
	<li>Una vez creado un Producto en PrestaShop mediante FSx-Connector se puede cambiar cualquier dato, excepto el campo "Referencia" (ya que a través de este campo se vinculan los Productos de PrestaShop con los Artículos de FactuSOL), y los cambios se conservarán (por ejemplo se pueden añadir más fotos, modificar la descripción, etc.). <br><br></li>
 
	<li>De los cambios que se hagan en FactuSOL solo se podrán actualizar el Precio y el Stock. Tenga en cuenta que FactuSOL es un programa para la gestion interna de la Empresa por lo que no es necesario dar descripciones extensas e incluso fotos para los productos. Lo habitual es tener descripciones diferentes en FactuSOL y PrestaShop: sencilla en FactuSOL y más amplia en la web, donde además es necesario añadir más información como fotos adicionales, archivos de instrucciones o manuales, etc.<br><br></li>
</ol>
<hr>


<!-- PSHOP -->
<h2 id="FAQ_PSHOP">Sobre PrestaShop</h2>

<h3 id="FAQ_PSHOP_10"><b>Tengo el Catálogo en PrestaShop, pero también lo tengo en FactuSOL. Los Pedidos que recibo en la Tienda lo grabo otra vez "a mano" en FactuSOL. ¿Qué tengo que hacer?</b></h3>
<p>El trabajo realizado tanto en FactuSOL como en PrestaShop es perfectamente válido. 
Sólo se necesita de establecer correctamente las equivalencias entre los datos en PrestaShop (Categorías, Productos, etc.) 
con sus correspondientes de FactuSOL (Secciones, Familias, Artículos, etc.).</p>
<ul>
	<li>Secciones / Familias y Categorías, en el componente FSx-Diccionario.<br><br></li>
	<li>Artículos y Productos, rellenando el campo "Referencia" del Producto (PrestaShop) con el "Código del Artículo" (FactuSOL).<br><br></li>
	<li>Impuestos y Formas de Pago, las equivalencias se establecen en el componente FSx-Diccionario.<br><br></li>
</ul>
<hr>

<h3 id="FAQ_PSHOP_20"><b>¿Puedo usar la Gestión Avanzada de Stock en PrestaShop?</b></h3>
<p>FactuSOL está concebido para utilizar en la web una sola Tienda y el stock correspondiente a un único Almacén definido en FactuSOL. Si necesita utilizar esta característica de PrestaShop, podrá utilizar FSx-Connector, pero no podrá actualizar el stock de los productos con este Módulo.</p>
<hr>

<h3 id="FAQ_PSHOP_30"><b>Quiero actualizar la versión de mi Tienda PrestaShop. ¿Cómo afecta a FSx-Connector?</b></h3>
<p>Pueden darse dos situaciones:</p>
<ul>
	<li>Actualizar la Versión Menor de PrestaShop (Por ejemplo: de 1.6.0.2 hasta 1.6.0.9)<br>
		Recuerde hacer primero una copia completa de su tienda y base de datos. Siga el procedimiento estándar recomendado por PrestaShop, excepto que NO debe desactivar los Módulos (Componentes) de FSx-Connector. El Conector deberá funcionar correctamente con la nueva versión de PrestaShop. Si no es así, contacte con el Servicio de Soporte.<br><br></li>
	<li>Actualizar la Versión Mayor de PrestaShop (Por ejemplo: de 1.5.3.1 hasta 1.6.0.9)<br>
		Recuerde hacer primero una copia completa de su tienda y base de datos. Siga el procedimiento estándar recomendado por PrestaShop, excepto que NO debe desactivar los Módulos (Componentes) de FSx-Connector. Es muy probable que FSx-Connector no funcione correctamente, debido a los cambios introducidos en la nueva versión de PrestaShop. Deberá adquirir el 
		<a target="_blank" href="http://fsxmart.factusol-prestashop.es/fsx-actualizaciones/14-fsx-actualizacion.html"><b>componente de actualización</b></a> 
		adecuado a su instalación.<br><br></li>
</ul>
<hr>

<!--
-->

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
<div class="prev"><a class="chapter" href="index.php?tab=fsxpcron">&laquo; Anterior</a></div>
<!-- div class="next"><a class="chapter" href="index.php?tab=fsxsvn">Siguiente &raquo;</a></div -->
</div>

