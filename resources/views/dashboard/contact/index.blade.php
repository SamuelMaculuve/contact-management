@extends('dashboard.layout.base')

@section('content')
    <main>
        <div class="container-fluid ">
            <!--GRID 2-->
            <div class="row">
                @if(session('success'))
                    @include('alerts.success-message')
                @endif

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

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Contacto</th>
                                    <th>Email</th>
                                    <th>Acção</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->contact }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>
                                            <a href="{{ route('contact.show', $contact->id) }}">Ver</a> |
                                            <a href="{{ route('contact.edit', $contact->id) }}">Edit</a> |
                                            <a href="{{ route('contact.edit', $contact->id) }}" data-toggle="modal" data-target="#delete-{{$contact->id}}">Apagar</a>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="delete-{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Tem certeza que deseja apagar o contacto de <b>{{ $contact->name }}</b>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="DELETE">
                                                       @csrf
                                                        <button type="submit" class="btn btn-danger">Apagar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $contacts->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
