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
                                <h5 class="mb-2">Detalhes do Contacto</h5>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{ route("contact.create") }}" class=" btn-confirm btn-confirm-color">
                                        Editar
                                    </a>
                                    <a href="{{ route("contact.create") }}" class=" btn-confirm btn-confirm-color">
                                        Apagar
                                    </a>
                                </div>

                            </div>
                            <div class="col-8 mt-5">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Nome</td>
                                        <td>{{ $contact->name ?? "N/A" }}</td>
                                    </tr>
                                    <tr>
                                        <td>Contacto</td>
                                        <td>{{ $contact->contact ?? "N/A" }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $contact->email ?? "N/A" }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
