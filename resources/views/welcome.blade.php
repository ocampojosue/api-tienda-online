<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Api Tienda-Online</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color:javascript:void(0)dfdfdf;
            }
        </style>
    </head>
    <body style="background-color:dfdfdf;" class="bg-dark">
        <div class="mx-4">
            <div class="row mt-2 border-top border-left border-right">
                <div class="col-lg-12">
                    <div class="card shadow rounded my-2 mx-auto w-100">
                        <div class="mt-3">
                            <h2 class="font-weight-bold text-center">Api Tienda Online</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xl-3 border">
                <div class="card shadow rounded my-2 mx-auto">
                    <div class="mt-3">
                        <h2 class="font-weight-bold text-center">Api Tienda Online</h2>
                    </div>
                    <div class="card-body">
                        API REST para la materia de Tecnología Móviles. La Api Rest consta de los siguientes recursos:
                        {{-- <li class="ml-3">
                            CRUD para <a href="https://api-tienda-online.herokuapp.com/api/categories" target="_blank">Categorías</a>
                        </li>
                        <li class="ml-3">
                            CRUD para <a href="https://api-tienda-online.herokuapp.com/api/tags" target="_blank">Etiquetas</a>
                        </li>
                        <li class="ml-3">
                            CRUD para <a href="https://api-tienda-online.herokuapp.com/api/products" target="_blank">Productos</a>
                        </li>
                        <li class="ml-3">
                            CRUD para <a href="https://api-tienda-online.herokuapp.com/api/users" target="_blank">Usuarios</a>
                        </li> --}}
                        {{-- Empiezan la estructura en local --}}
                        <li class="ml-3">
                            CRUD para <a href="http://apitienda.test/api/categories" target="_blank">Categorías</a>
                        </li>
                        <li class="ml-3">
                            CRUD para <a href="http://apitienda.test/api/tags" target="_blank">Etiquetas</a>
                        </li>
                        <li class="ml-3">
                            CRUD para <a href="http://apitienda.test/api/products" target="_blank">Productos</a>
                        </li>
                        <li class="ml-3">
                            CRUD para <a href="http://apitienda.test/api/users" target="_blank">Usuarios</a>
                        </li>

                    </div>
                </div>
              </div>
              
              <div class="col-xl-9 ">
                <div class="row">
                    <div class="col-xl-6 border-right border-top border-left">
                        <div class="card shadow-lg rounded pb-1 my-2">
                            <div class="border-bottom font-weight-bold text-center h4 ">
                                Categorías
                            </div>
                            <div class="px-2">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="border-bottom font-weight-bold">
                                            Petición
                                        </div>
                                        <div class="">
                                            GET <br>
                                            GET <br>
                                            POST <br>
                                            PUT <br>
                                            DELETE <br>
                                        </div>
                                    </div>
                                    <div class="col-3 border-left border-right">
                                        <div class="border-bottom font-weight-bold">
                                            Método
                                        </div>
                                        Index <br>
                                        Show <br>
                                        Store <br>
                                        Update <br>
                                        Delete <br>
                                    </div>
                                    <div class="col-6">
                                        <div class="border-bottom font-weight-bold">
                                            URL
                                        </div>
                                        <a href="https://api-tienda-online.herokuapp.com/api/categories" target="_blank">/api/categories</a><br>
                                        <a href="https://api-tienda-online.herokuapp.com/api/categories/1" target="_blank">/api/categories/{id}</a><br>
                                        <a href="javascript:void(0)">/api/categories</a><br>
                                        <a href="javascript:void(0)">/api/categories/{id}</a><br>
                                        <a href="javascript:void(0)">/api/categories/{id}</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 border-top border-left border-right">
                        <div class="card shadow-lg rounded pb-1 my-2">
                            <div class="border-bottom font-weight-bold text-center h4 ">
                                Etiquetas
                            </div>
                            <div class="px-2">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="border-bottom font-weight-bold">
                                            Petición
                                        </div>
                                        <div class="">
                                            GET <br>
                                            GET <br>
                                            POST <br>
                                            PUT <br>
                                            DELETE <br>
                                        </div>
                                    </div>
                                    <div class="col-3 border-left border-right">
                                        <div class="border-bottom font-weight-bold">
                                            Método
                                        </div>
                                        Index <br>
                                        Show <br>
                                        Store <br>
                                        Update <br>
                                        Delete <br>
                                    </div>
                                    <div class="col-6">
                                        <div class="border-bottom font-weight-bold">
                                            URL
                                        </div>
                                        <a href="https://api-tienda-online.herokuapp.com/api/tags" target="_blank">/api/tags</a><br>
                                        <a href="https://api-tienda-online.herokuapp.com/api/tags/1" target="_blank">/api/tags/{id}</a><br>
                                        <a href="javascript:void(0)">/api/tags</a><br>
                                        <a href="javascript:void(0)">/api/tags/{id}</a><br>
                                        <a href="javascript:void(0)">/api/tags/{id}</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 border">
                        <div class="card shadow-lg rounded pb-1 my-2">
                            <div class="border-bottom font-weight-bold text-center h4 ">
                                Productos
                            </div>
                            <div class="px-2">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="border-bottom font-weight-bold">
                                            Petición
                                        </div>
                                        <div class="">
                                            GET <br>
                                            GET <br>
                                            POST <br>
                                            PUT <br>
                                            DELETE <br>
                                        </div>
                                    </div>
                                    <div class="col-3 border-left border-right">
                                        <div class="border-bottom font-weight-bold">
                                            Método
                                        </div>
                                        Index <br>
                                        Show <br>
                                        Store <br>
                                        Update <br>
                                        Delete <br>
                                    </div>
                                    <div class="col-6">
                                        <div class="border-bottom font-weight-bold">
                                            URL
                                        </div>
                                        <a href="https://api-tienda-online.herokuapp.com/api/products" target="_blank">/api/products</a><br>
                                        <a href="https://api-tienda-online.herokuapp.com/api/products/1" target="_blank">/api/products/{id}</a><br>
                                        <a href="javascript:void(0)">/api/products</a><br>
                                        <a href="javascript:void(0)">/api/products/{id}</a><br>
                                        <a href="javascript:void(0)">/api/products/{id}</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 border">
                        <div class="card shadow-lg rounded pb-1 my-2">
                            <div class="border-bottom font-weight-bold text-center h4 ">
                                Usuarios
                            </div>
                            <div class="px-2">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="border-bottom font-weight-bold">
                                            Petición
                                        </div>
                                        <div class="">
                                            GET <br>
                                            GET <br>
                                            POST <br>
                                            PUT <br>
                                            DELETE <br>
                                        </div>
                                    </div>
                                    <div class="col-3 border-left border-right">
                                        <div class="border-bottom font-weight-bold">
                                            Método
                                        </div>
                                        Index <br>
                                        Show <br>
                                        Store <br>
                                        Update <br>
                                        Delete <br>
                                    </div>
                                    <div class="col-6">
                                        <div class="border-bottom font-weight-bold">
                                            URL
                                        </div>
                                        <a href="https://api-tienda-online.herokuapp.com/api/users" target="_blank">/api/users</a><br>
                                        <a href="https://api-tienda-online.herokuapp.com/api/users/1" target="_blank">/api/users/{id}</a><br>
                                        <a href="javascript:void(0)">/api/users</a><br>
                                        <a href="javascript:void(0)">/api/users/{id}</a><br>
                                        <a href="javascript:void(0)">/api/users/{id}</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Footer -->
    {{-- <footer class="page-footer font-small indigo pt-4">
        <div class="footer-copyright text-center py-3 bg-danger">
            © 2021 Copyright: Ocampo Josué
            {{-- <br>© 2021 Copyright Designed By Ocampo Josué --}}
        {{-- </div>
    </footer> --}}
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
            © 2021 Copyright: Ocampo Josué
            {{-- <br>© 2021 Copyright Designed By Ocampo Josué --}}
        </div>
      </footer>
  <!-- Footer -->
        {{-- <footer class="page-footer font-small blue fixed-bottom d-none d-md-none d-lg-block">
            <div class="text-center ">
                © 2021 Copyright Designed By Ocampo Josue
            </div>
        </footer> --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>
