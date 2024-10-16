### Proceso de instalación del servidor y del PHP.
1. Instalamos XAMPP: XAMPP es un entorno de desarrollo web que incluye
Apache, MySQL, PHP y Perl, entre otros, permitiendo a los desarrolladores
crear y probar aplicaciones web localmente en sus computadoras antes de
desplegarlas en un servidor en línea.
2. Una vez instalado XAMPP, debemos iniciar el servidor local, dando en el botón
“start” (en caso de que se inicie bien el servidor en la consola dira la palabra
“running” en la sección de apache(en este caso como se hará el uso de tablas
se inicia también el “MySQL”) para que así nuestro código pueda acceder al
servidor local:
3. Después en netbeans se crea un nuevo proyecto de tipo PHP, al crear el
proyecto se creará en la carpeta de xampp automáticamente por parte de
netbeans:
4. Y ya tendríamos acceso a nuestro servidor local por medio de XAMPP:
5. PHPMyAdmind: Ahora necesitamos conectarlo a la base de datos que
funciona con MySQL y para eso, primero debemos acceder a phpmyadmin,
esto sirve para gestionar las bases de datos de forma visual a través de una
interfaz web, puedes crear, eliminar y modificar bases de datos, así como
ejecutar consultas SQL, importar y exportar datos, entre otras funciones.
6. Ahora en PHPMyAdmind debemos crear una base de datos con las tablas que
ocuparemos y editaremos por medio de php usando el método POST y GET,
en este caso se hicieron 2, una para buscar productos(GET) y otra para
registrar a un usuario para recibir ofertas(POST).
7. Tabla clientes: La estructura de la tabla es la siguiente: solo guardará
clientes.
8. Tabla productos: La estructura de la tabla es la siguiente, solo contiene los
productos en la tienda.
