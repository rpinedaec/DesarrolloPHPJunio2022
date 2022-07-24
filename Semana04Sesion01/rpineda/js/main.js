(function($) {
    "use strict";

    // Dropdown on mouse hover
    $(document).ready(function() {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function() {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function() {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    });


    // Related carousel
    $('.related-carousel').owlCarousel({
        loop: true,
        margin: 29,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });


    // Product Quantity
    $('.quantity button').on('click', function() {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

    $('#singin').on('click', function() {
        console.log(this);
        let valor = this.textContent;
        if (!valor.includes("Cerrar Sesi")) {
            console.log(valor);
            $('#myModal').modal('show');
        } else {
            cerrarSesion();
        }

    });



    function cerrarSesion() {
        let http = new XMLHttpRequest();
        let url = window.location.origin + "/Semana04Sesion01/rpineda/mad/";
        let funcion = "LOGOUT"
        let txtArgumentos = '{}';
        let argumentos = eval("(" + txtArgumentos + ")");
        let jsonArgumentos = {};
        console.log(txtArgumentos);
        jsonArgumentos.funcion = funcion;
        jsonArgumentos.args = argumentos;
        var strparams = "PARAM=" + JSON.stringify(jsonArgumentos);
        http.onreadystatechange = handle_json;
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(strparams);

        function handle_json() {
            if (http.readyState == 4) {
                if (http.status == 200) {
                    let json_data = JSON.parse(http.responseText);
                    console.log(json_data);
                    sessionStorage.clear();
                    location.reload();
                } else {
                    console.error("Error");
                }
            }
        }
    }

    $('#btnClose').on('click', function() {
        console.log("hizo click");
        $('#myModal').modal('hide');
    });
    // Login inicio de sesion
    $('#btnLogin').on('click', function(ev) {
        console.log("hizo click en login");
        let http = new XMLHttpRequest();
        let url = window.location.origin + "/Semana04Sesion01/rpineda/mad/";
        let funcion = "LOGIN"
        let txtArgumentos = '{"usuario":"' + $("#usuario").val() + '", "password": "' + $("#password").val() + '"}';
        let argumentos = eval("(" + txtArgumentos + ")");
        let jsonArgumentos = {};
        console.log(txtArgumentos);
        jsonArgumentos.funcion = funcion;
        jsonArgumentos.args = argumentos;
        var strparams = "PARAM=" + JSON.stringify(jsonArgumentos);
        http.onreadystatechange = handle_json;
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(strparams);

        function handle_json() {
            if (http.readyState == 4) {
                if (http.status == 200) {
                    console.log(http.responseText)
                    let json_data = JSON.parse(http.responseText);
                    console.log(json_data);
                    sessionStorage.setItem("USUARIO", http.responseText);
                    $('#myModal').modal('hide');
                    $('#singin').html("Cerrar Sesión :" + json_data.answer.Nombre + " " + json_data.answer.apellido)
                    location.reload();
                } else {
                    console.log("Error");
                }
            }
        }
        ev.preventDefault();
    });

    function cargardatos() {
        let USUARIO = JSON.parse(sessionStorage.getItem("USUARIO"));
        if (USUARIO != null) {

            $('#singin').html("Cerrar Sesión :" + USUARIO.answer.Nombre)
        }
    }
    // funcion cargar categorias
    function cargarCategorias() {
        let http = new XMLHttpRequest();
        let url = window.location.origin + "/Semana04Sesion01/rpineda/mad/";
        let funcion = "GET_CATEGORIAS"
        let txtArgumentos = '{}';
        let argumentos = eval("(" + txtArgumentos + ")");
        let jsonArgumentos = {};
        console.log(txtArgumentos);
        jsonArgumentos.funcion = funcion;
        jsonArgumentos.args = argumentos;
        var strparams = "PARAM=" + JSON.stringify(jsonArgumentos);
        http.onreadystatechange = handle_json;
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(strparams);

        function handle_json() {
            if (http.readyState == 4) {
                if (http.status == 200) {
                    let json_data = JSON.parse(http.responseText);
                    console.log(json_data);
                    let categorias = json_data.answer;
                    $("#categorias").empty();
                    $("#categoriasPagina").empty();

                    categorias.forEach(function(valor, indice, array) {
                        console.log("En el índice " + indice + " hay este valor: " + valor.descripcion);
                        $("#categorias").append('<a href="" class="nav-item nav-link">' + valor.descripcion + '</a>');
                        $("#categoriasPagina").append('<div class="col-lg-3 col-md-4 col-sm-6 pb-1"> <a class="text-decoration-none" href=""> <div class="cat-item d-flex align-items-center mb-4"> <div class="overflow-hidden" style="width: 100px; height: 100px;"> <img class="img-fluid" src="' + valor.imagen + '" alt=""> </div><div class="flex-fill pl-3"> <h6>' + valor.descripcion + '</h6> <small class="text-body">100 Products</small> </div></div></a> </div>');
                    });
                    /*
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
                    
                    */
                } else {
                    console.error("Error");
                }
            }
        }
    }

    function cargarProductos() {
        let http = new XMLHttpRequest();
        let url = window.location.origin + "/Semana04Sesion01/rpineda/mad/";
        let funcion = "GET_PRODUCTOS"
        let txtArgumentos = '{}';
        let argumentos = eval("(" + txtArgumentos + ")");
        let jsonArgumentos = {};
        console.log(txtArgumentos);
        jsonArgumentos.funcion = funcion;
        jsonArgumentos.args = argumentos;
        var strparams = "PARAM=" + JSON.stringify(jsonArgumentos);
        http.onreadystatechange = handle_json;
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(strparams);

        function handle_json() {
            if (http.readyState == 4) {
                if (http.status == 200) {
                    let json_data = JSON.parse(http.responseText);
                    console.log(json_data);
                    productos = json_data.answer;
                    $("#productosPagina").empty();


                    productos.forEach(function(valor, indice, array) {
                        console.log("En el índice " + indice + " hay este valor: " + valor.descripcion);
                        let html = `
                                            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="${valor.imagen}" alt="" />
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" onclick=" return agregarCarrito(${valor.id_producto});">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a class="btn btn-outline-dark btn-square" onclick=" return likeAdd(${valor.id_producto});"><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="">
                                        ${valor.nombre} </a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>"S/."${valor.precio}</h5>
                                        <h6 class="text-muted ml-2"><del> "S/."${valor.precio} </del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
`;
                        $("#productosPagina").append(html);
                    });

                    /*
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/product-'+valor.idproductos+'.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">'+valor.nombre+'</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>'+valor.valor+'</h5><h6 class="text-muted ml-2"><del>'+valor.valor+'</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
                    
                    */
                } else {
                    console.error("Error");
                }
            }
        }
    }

    cargardatos();
    cargarCategorias();
    cargarProductos();
})(jQuery);