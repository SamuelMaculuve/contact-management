@extends('dashboard.layout.base')

@section('content')
    <main>
        <div class="container-fluid ">
            <!--GRID 2-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="w-100 my-3">
                        <div class="bg-mattBlackLight enrolments px-3 py-3">
                            <div class="d-flex justify-content-between pb-5">
                                <h5 class="mb-2">Lista de Contactos</h5>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ route("contact.create") }}" class=" btn-confirm btn-confirm-color">
                                        + Novo contacto
                                    </a>
                                </div>
                            </div>
                            <div class="my-4">

                            </div>
                            <table class="table schools-datatable">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>

                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
