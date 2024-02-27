@extends('dashboard.layout.base')
@section('content')
    <main>
        <div class="container-fluid">
            @if(session('message'))
                @include('alerts.success-messages')
            @endif
            <form class="row" action="{{ route('contact.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="w-100 my-3">
                        <div class="bg-mattBlackLight enrolments px-3 py-3">
                            <h5 class="mb-2">Adicionar novo contacto</h5>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <input type="text" name="name"
                                           placeholder="Nome" class="form-control py-4 mt-3" >
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input type="text" name="contact"
                                           placeholder="Digite o Contacto"
                                           class="form-control py-4 mt-3" >
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <input type="email" name="email"
                                           placeholder="Digite o Email"
                                           class="form-control py-4 mt-3" >
                                </div>

                            </div>

                            <div class="mt-3 d-flex justify-content-end">
                                <input type="submit" value="Guardar" class="mx-0 btn-confirm">
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </main>
@endsection
