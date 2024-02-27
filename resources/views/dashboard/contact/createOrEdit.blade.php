@extends('dashboard.layout.base')
@section('content')
    <main>
        <div class="container-fluid">

            <form
                 method="POST"
                  @if(isset($contact)) action="{{ route('contact.update',$contact->id) }}" @else action="{{ route('contact.store') }}" @endif
                  enctype="multipart/form-data"
                >
                @csrf
                @if(isset($contact))
                    @method('PUT')
                @endif
                <div class="col-12">
                    <div class="w-100 my-3">
                        <div class="bg-mattBlackLight enrolments px-3 py-3">
                            <h5 class="mb-2">Adicionar novo contacto</h5>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <input type="text" name="name" required
                                           placeholder="Nome"
                                           value="{{ old('name') ? old('name') : (isset($contact->name) ? $contact->name : '') }}"
                                           class="form-control py-4 mt-3" >

                                    @error('name')
                                    <div class="alert alert-danger pt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <input type="tel" name="contact" required
                                           placeholder="Digite o Contacto"
                                           value="{{ old('contact') ? old('contact') : (isset($contact->contact) ? $contact->contact : '') }}"
                                           class="form-control py-4 mt-3" >

                                    @error('contact')
                                    <div class="alert alert-danger pt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <input type="email" name="email" required
                                           placeholder="Digite o Email"
                                           value="{{ old('email') ? old('email') : (isset($contact->email) ? $contact->email : '') }}"
                                           class="form-control py-4 mt-3" >
                                    @error('email')
                                    <div class="alert alert-danger pt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
