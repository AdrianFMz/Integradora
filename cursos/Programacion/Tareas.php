            <div class="album py-5" id="Si">
                <div class="container">

                    <div class="row">
                       <!------------------------------------------------------Renglon 1-------------------------------------------->
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="../../imagenes/pro2.jpg">
                                <div class="card-body">
                                    <p class="card-text">HTML se compone de etiquetas. Las etiquetas son palabras clave que se colocan 
                                                        entre corchetes angulares (< >). Las etiquetas se utilizan para definir 
                                                        diferentes elementos de una página web, como el título, la cabecera, 
                                                        los párrafos, las imágenes, etc.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        
                                        <a  id="Prueba" class="btn btn-sm btn-outline-secondary">Acceder</a>
                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------------------------Ejemplo de Video--------------------------------------------------------->
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                           <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/67Sb3M8GQwQ" style="height: 225px; width: 100%; display: block;" frameborder="0" allowfullscreen></iframe> -->
                            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="../../imagenes/pro1.png">


                                <div class="card-body">
                                    <p class="card-text">CSS significa Cascading Style Sheets (Hojas de Estilo en Cascada).
                                                        Es un lenguaje de diseño web que se utiliza para dar estilo a las páginas web.
                                                        CSS define cómo se muestran los elementos de una página web, como el color,
                                                        la fuente, el tamaño, el diseño y la posición.</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <a id="Prueba2" class="btn btn-sm btn-outline-secondary">Acceder</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="../../imagenes/pro3.png">
                                <div class="card-body">
                                    <p class="card-text">PHP significa Hypertext Preprocessor (Preprocesador de Hipertexto). 
                                                        Es un lenguaje de scripting del lado del servidor que se utiliza
                                                        para crear páginas web dinámicas. PHP se puede incrustar en código 
                                                        HTML y se ejecuta en el servidor antes de que la página web
                                                        se envíe al navegador del cliente.</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <a id="Prueba3" class="btn btn-sm btn-outline-secondary">Acceder</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!------------------------------------------------------Renglon 2-------------------------------------------->

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="../../imagenes/pro4.jpg">
                                <div class="card-body">
                                    <p class="card-text">JavaScript es un lenguaje de programación de alto nivel, dinámico e
                                                        interpretado. Se utiliza principalmente para crear páginas web
                                                        interactivas, aunque también se puede usar para desarrollar aplicaciones 
                                                        del lado del servidor, aplicaciones móviles y juegos.</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <a id="Prueba4" class="btn btn-sm btn-outline-secondary">Acceder</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="../../imagenes/pro5.png">
                                <div class="card-body">
                                    <p class="card-text">C++ es un lenguaje de programación de alto rendimiento, versátil 
                                                        y ampliamente utilizado para desarrollar aplicaciones de alto 
                                                        rendimiento, software de sistema y desarrollo de juegos.</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <a id="Prueba5" class="btn btn-sm btn-outline-secondary">Acceder</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="../../imagenes/pro6.png">
                                <div class="card-body">
                                    <p class="card-text">Java es un lenguaje de programación de propósito general, orientado 
                                                        a objetos, robusto y seguro. Se utiliza para desarrollar una amplia 
                                                        gama de aplicaciones, desde aplicaciones web y móviles hasta
                                                        aplicaciones empresariales y juegos.</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <a id="Prueba6" class="btn btn-sm btn-outline-secondary">Acceder</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                            <script>
                            $(document).ready(function(){
                                $("#Prueba").click(function(){
                                    $("#Cambiador").load('Actividades/Act1.php');
                                });

                            });

                            $(document).ready(function(){
                                $("#Prueba2").click(function(){
                                    $("#Cambiador").load('Actividades/Act2.php');
                                });

                            });

                            $(document).ready(function(){
                                $("#Prueba3").click(function(){
                                    $("#Cambiador").load('Actividades/Act3.php');
                                });

                            });

                            $(document).ready(function(){
                                $("#Prueba4").click(function(){
                                    $("#Cambiador").load('Actividades/Act4.php');
                                });

                            });

                            $(document).ready(function(){
                                $("#Prueba5").click(function(){
                                    $("#Cambiador").load('Actividades/Act5.php');
                                });

                            });

                            $(document).ready(function(){
                                $("#Prueba6").click(function(){
                                    $("#Cambiador").load('Actividades/Act6.php');
                                });

                            });

                            </script>