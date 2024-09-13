@extends('layout.app')

@section('title', 'Dashboard - Listado de Usuario')

@section('contenido-admin')
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-semibold">Lista de Usuario</h2>
        <a href="{{ route('user.create') }}"
            class="border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 rounded flex items-center">
            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Nuevo Usuario
        </a>
    </div>
    <div class="lg:col-span-3 bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-2xl font-semibold">Ultimos registros en el sistema</h3>
        </div>
        <ul class="space-y-2">
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nuevo usuario administrador registrado: Admin. Juan Pérez</span>
            </li>
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nuevo usuario veterinario registrado: Dr. Juan Pérez</span>
            </li>
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nuevo usuario test registrado: Test. Juan Pérez</span>
            </li>
        </ul>
        <br><br>
    </div>
    <br><br>
    <div class="overflow-x-auto p-4 bg-white rounded-lg">
        <div class="flex space-x-2">
            <button
                class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>

                <span>Exportar PDF</span>
            </button>

            <button
                class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                </svg>

                <span>Exportar Excel</span>
            </button>

            <button
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                </svg>

                <span>Importar Excel</span>
            </button>

            <button
                class="border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-white hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 py-2 px-4 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                </svg>

                <span>Imprimir</span>
            </button>
        </div>
        <br>
        <table id="users-table" class="min-w-full bg-black border border-gray-200 shadow-md rounded-lg">
            <thead class="bg-black text-white">
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Nombre</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Correo</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Teléfono</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Rol</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Estado</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Última Conexión</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold">Acciones</th>
                </tr>
                <tr class="bg-gray-50">
                    <th class="px-6 py-2">
                        <input type="text" placeholder="Buscar Nombre"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black text-black">
                    </th>
                    <th class="px-6 py-2">
                        <input type="text" placeholder="Buscar Correo"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black text-black">
                    </th>
                    <th class="px-6 py-2">
                        <input type="text" placeholder="Buscar Teléfono"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black text-black">
                    </th>
                    <th class="px-6 py-2">
                        <select
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black text-black">
                            <option value="">Buscar Rol</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Veterinario">Veterinario</option>
                            <option value="Test">Test</option>
                        </select>
                    </th>
                    <th class="px-6 py-2">
                        <select
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black text-black">
                            <option value="">Buscar Estado</option>
                            <option value="OPERATIVO">Activo</option>
                            <option value="NO HABILITADO">Inactivo</option>
                        </select>
                    </th>
                    <th class="px-6 py-2"></th>
                    <th class="px-6 py-2"></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

@endsection

@section('css')
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var datatable = $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('user.list_user') }}',
                    type: 'GET',
                },
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'rol',
                        name: 'rol',
                        render: function(data, type, row) {
                            if (row.rol === 'Administrador') {
                                return `<span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-sm font-semibold">Administrador</span>`;
                            } else if (row.rol === 'Veterinario') {
                                return `<span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm font-semibold">Veterinario</span>`;
                            } else if (row.rol === 'Test') {
                                return `<span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-sm font-semibold">Test</span>`;
                            } else {
                                return `<span class="text-gray-500">Desconocido</span>`;
                            }
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            if (row.status === 'OPERATIVO') {
                                return `
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" />
                            </svg>
                            Activo
                        </span>`;
                            } else if (row.status === 'NO HABILITADO') {
                                return `
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-1 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" />
                            </svg>
                            Inactivo
                        </span>`;
                            } else {
                                return `<span class="text-gray-500">Desconocido</span>`;
                            }
                        }
                    },
                    {
                        data: 'last_login',
                        name: 'last_login'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            let deleteUrl = `{{ url('administrador/user/${row.id}') }}`;
                            let editUrl = `{{ url('administrador/user/${row.id}/editar') }}`;
                            let viewUrl = `{{ url('administrador/user/${row.id}/ver') }}`;
                            return `
        <div class="flex items-center space-x-4">
            <a href="${editUrl}" class="text-blue-500 hover:text-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487 19.5 7.125M2.25 21l5.25-1.125 11.25-11.25-3.75-3.75-11.25 11.25L2.25 21z" />
                </svg>
            </a>

            <a href="javascript:void(0)" class="text-red-500 hover:text-red-700 delete-button" data-url="${deleteUrl}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.75h15m-1.5 0v12a2.25 2.25 0 0 1-2.25 2.25H9.75A2.25 2.25 0 0 1 7.5 18.75v-12M10.5 6.75V5.25a2.25 2.25 0 0 1 2.25-2.25h3a2.25 2.25 0 0 1 2.25 2.25v1.5" />
                </svg>
            </a>
                        <a href="${viewUrl}" class="text-indigo-500 hover:text-indigo-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>
        </div>
        `;
                        }
                    }

                ],
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        $('input, select', this.header()).on('keyup change', function() {
                            if (column.search() !== this.value) {
                                column.search(this.value).draw();
                            }
                        });
                    });
                },
                language: {
                    processing: "Tramitación en curso",
                    search: "Buscar",
                    lengthMenu: "Mostrar _MENU_ Registros",
                    info: "Mostrar desde _START_ hasta _END_ de _TOTAL_ registros",
                    infoEmpty: "Opción no disponible",
                    zeroRecords: "No hay datos disponibles en la tabla",
                    emptyTable: "No hay datos disponibles en la tabla",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Último",
                    }
                },
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const successType = urlParams.get('success');

            if (successType === 'created') {
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario creado',
                    text: 'El usuario ha sido creado exitosamente.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar',
                });
            } else if (successType === 'edited') {
                Swal.fire({
                    icon: 'success',
                    title: 'Usuario editado',
                    text: 'El usuario ha sido editado exitosamente.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar',
                });
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).on('click', '.delete-button', function(e) {
                e.preventDefault();
                var url = $(this).data('url');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esta acción",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire(
                                        'Eliminado',
                                        'El usuario ha sido eliminado exitosamente.',
                                        'success'
                                    );

                                    $('#users-table').DataTable().ajax.reload();
                                } else {
                                    Swal.fire(
                                        'Error',
                                        'Hubo un problema al eliminar el usuario.',
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr) {
                                Swal.fire(
                                    'Error',
                                    'Hubo un problema al eliminar el usuario.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>

@stop
