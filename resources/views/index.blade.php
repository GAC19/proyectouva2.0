<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/carrusel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/whatsapp.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/popup.css') }}">

        <title>Document</title>
    </head>
    <body> 
        <header>
        <section class="centro">
        <img src="./static/imagen/logo.png" alt="logo" width="300" height="70">
        <nav>
            <ul>
                <li><a href="#quienessomos">Quienes Somos</a></li>
                <li><a href="#quehacemos">Que Hacemos</a></li>
                <li><a href="#mv">Mision y Vision</a></li>
                <li><a href="#">Nuestro Producto</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#equipo">Nuestro Equipo</a></li>
            </ul>  
        </nav>
        <div>
            <button onclick="document.location='login'" style="height: 30px; width: 110px">LOGIN</button>
            <button onclick="document.location='register'" style="height: 30px; width: 110px">REGISTRARSE</button>
            </div>
        </section>

        </header>

        {{-- <button id="btn-abrir-popup" class="btn-abrir-popup">Abrir Ventana Emergente</button> --}}


        <section class="content">
        <h1>Expotacion de Uvas</h1><br>
        <p>Nos dedica a la exportación de uvas de mesa, 
            a distintos países. Donde seleccionamos y entregamos los mejores productos a nuestro 
            cliente y puedan disgustar los productos agrícola de Chile.</p><br><br>
        </section>      
        <section id="quienessomos" class="content">

            {{-- <h1>MODIFICACION DEL NOTEBOOK</h1> --}}

            <h2>¿QUIENES SOMOS?</h2>
            <p>
                <br> 
                Exportacion ltda., somos una empresa dedicada a la venta de exportación de frutas de mesa 
                tanto en todo el territorio nacional como en el extranjero. <br>
                La cual cumplimos y damos eficacia en nuestro producto, donde se realiza todo tipo de control 
                de calidad en nuestro producto. <br>
                Además, orientada a la exportaciones en general y su objetivo era "Velar por los intereses generales
                del comercio de exportación; defender principios básicos, económicos y sociales que, junto con 
                robustecer el comercio de exportación, beneficiarán al país en general; promover entre sus asociados 
                la sujeción de todas sus actividades comerciales e industriales no sólo a las normas legales vigentes, 
                sino además a normas éticas que contribuyan a prestigiar la actividad del comercio de exportación; 
                preocuparse de la preparación, aplicación, abolición o modificación de leyes, decretos y reglamentos, etc."
            </p> <br>
        </section>
        <section id="quehacemos" class="content">
            <h2>QUE HACEMOS: </h2>
            <p><br>
                Una Empresa que nos dedicamos a la su cocsecha, proceso y distribucion de los producto al nuestro cliente, las que mantenemos 
                una diciplina y medidas extricta en los procesos: <br> <br>
                1.- Ingresa el producto por parte del proveedor (subcontratista). <br>
                2.- Producción: donde pasan por las tres áreas (selección y pesaje, embalaje y palletizaje) <br>
                3.- Control de calidad: verifica si el producto a ofrecer cumple con los estándares dependiendo de su 
                        tipo para ser aprobado o rechazado para su exportación <br>
                4.- Todo tipo de registro debe ser ingresado en planilla para posteriormente ser entregado a la sede principal y el proveedor. <br>
                5.- Preparacion para su despacho, dependiendo de su destino de origen via terreste, marina o aérea. <br>
            </p> <br><br>
        </section>
        <section id="mv" class="content">
            <h2>MISIÓN<h2><p>
                <br> Facilitar los procesos asociados a la producción y exportación de la actividad frutícola chilena, 
                de una manera genérica, no discriminatoria, estimulando la libre competencia de los actores internos 
                y externos, sin involucración alguna en temas de carácter comercial. <br>
                <br></p>
            <h2>VISIÓN</h2> <br><p>
                <br> Contribuir al pleno desarrollo de la actividad frutícola chilena, a través de la apertura y defensa 
                de mercados y el desarrollo de actividades de promoción, investigación y capacitación, complementadas
                 por una estrategia de sustentabilidad cuyos pilares fundamentales están constituidos por la inocuidad 
                 alimentaria, la protección del medioambiente y la responsabilidad social empresarial, manteniendo siempre 
                 a las personas en el centro de la actividad.</p><br>
        </section>
        <section id="galeria" class="content">
        <br><h2>GALERIA</h2>
        <div class="carrusel">
                    <ul class="carrusel-fotos">
                        <li id="foto1"><img src="./static/imagen/galeria/foto1.jpg" alt=""></li>
                        <li id="foto2"><img src="./static/imagen/galeria/foto2.jpg" alt=""></li>
                        <li id="foto3"><img src="./static/imagen/galeria/foto3.jpg" alt=""></li>
                        <li id="foto4"><img src="./static/imagen/galeria/foto4.jpg" alt=""></li>
              <li id="foto5"><img src="./static/imagen/galeria/foto5.jpg" alt=""></li>
              <li id="foto6"><img src="./static/imagen/galeria/foto6.jpg" alt=""></li>
            </ul>
            <ul class="carrusel-menu">
              <li><a href="#foto1"><img src="./static/imagen/galeria/foto1.jpg" alt=""></a></li>
              <li><a href="#foto2"><img src="./static/imagen/galeria/foto2.jpg" alt=""></a></li>
              <li><a href="#foto3"><img src="./static/imagen/galeria/foto3.jpg" alt=""></a></li>
              <li><a href="#foto4"><img src="./static/imagen/galeria/foto4.jpg" alt=""></a></li>
              <li><a href="#foto5"><img src="./static/imagen/galeria/foto5.jpg" alt=""></a></li>
              <li><a href="#foto6"><img src="./static/imagen/galeria/foto6.jpg" alt=""></a></li>
            </ul><br><br><br>
        </div>
        </section>
        {{-- <section id="equipo" class="content">
            <br><br><h2>NUESTRO EQUIPO</h2>
            <table>
                <tr >
                    <td>INTEGRANTE 1</td>
                    <td>INTEGRANTE 2</td>
                    <td>INTEGRANTE 3</td>
                </tr>
            </table>
 
        </section> --}}


        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=56912345678" target="_blank">
            <img src={{ asset('./static/imagen/btn_whatsapp.png') }} alt="">
            </a>
        </div>
        <footer>
            <div>
                <div>
                    <img src="./static/imagen/logo2.png" alt="piedepaguina" width="200" height="50">
                </div>
                <div>
                <span> Exportacion de Uva  - Todos los derechos reservado</span><br>
                <span>Curso Analista Programador 2020 - 2021</span>
                </div>
            </div>
        </footer>
{{-- 
        <div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>SUSCRIBETE</h3>
				<h4>y recibe un cupon de descuento.</h4>
				<form action="">
					<div class="contenedor-inputs">
						<input type="text" placeholder="Nombre">
						<input type="email" placeholder="Correo">
					</div>
					<input type="submit" class="btn-submit" value="Suscribirse">
                    <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odio neque nobis magni culpa quaerat asperiores nemo sint aut, cumque error harum, corrupti veritatis deleniti dicta iusto, vero unde ab.</label>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos doloribus dolores nobis fuga quidem a natus vitae corrupti corporis voluptates, earum nihil dolore in voluptate sint velit distinctio sed adipisci!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur quibusdam veritatis iure, voluptas reprehenderit commodi. Illum voluptates fugit dolore consequuntur, nostrum dicta repudiandae aperiam cum rerum id at exercitationem?
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam non corrupti dolores recusandae fuga ut dignissimos sint, voluptatum laborum quo consequatur totam eum repudiandae deserunt veniam quisquam magnam enim facere.</p>
            
				</form>
			</div>
		</div>

        <script src="./static/popup.js"></script> --}}
        
    </body>
    </html>