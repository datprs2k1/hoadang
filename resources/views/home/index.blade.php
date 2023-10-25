<!DOCTYPE html>
<html lang="vi">

<head>
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image" content="{{ asset('assets/images/favicon.png') }}">
    <title>Quản lý</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/app.css') }}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cropperjs/dist/cropper.min.css">
    <script type="text/javascript" src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cropperjs/dist/cropper.min.js"></script>
    <script src={{ asset('assets/js/app.js') }}></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100">

    <div class="relative mb-20 md:mb-40">
        <div class="flex justify-center h-[100px]">
            <img src="{{ asset('assets/covers/default.jpg') }}" class="w-full md:w-2/3 rounded-b-xl object-cover"
                style="object-position: 50%" id="preview-cover" />
        </div>
        <div class="absolute left-[5%] md:left-[20%] bottom-[-4.5rem] md:bottom-[-8rem] w-[95%] md:w-[80%]">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('assets/avatars/default.jpg') }}"
                    class="bg-white rounded-full min-w-[110px] h-[110px] md:w-1/6 md:h-[215px] p-1 object-cover object-center"
                    id="preview-avatar" />

                <div class="w-full mt-10">
                    <span class="text-sm md:text-lg font-bold">{{ auth()->user()->name }}</span>
                    <div class="text-lg text-rose-700">
                        <i class="fas fa-server"> {{ request()->ip() }}</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="bg-white mx-4 p-3 space-y-2 text-md text-slate-700 rounded-md w-full md:w-2/3">
            <h1 class="text-2xl text-center">Danh sách License</h1>
            <button
                class="btn-add inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">Thêm
                license</button>
            <div class="relative overflow-x-auto">
                <table class="mt-3 w-full text-sm text-left text-gray-500">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                STT
                            </th>
                            <th scope="col" class="px-6 py-3">
                                IP
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Note
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Trạng thái
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ngày hết hạn
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hành động
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($licenses as $license)
                            <tr class="bg-white border-b text-lg">
                                <td class="px-6 py-4">
                                    {{ $loop->index + 1 }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $license->ip }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $license->note }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($license->status)
                                        <span
                                            class="bg-green-100 text-green-800 text-lg font-medium mr-2 px-2.5 py-0.5 rounded border border-green-400">Hoạt
                                            động</span>
                                    @else
                                        <span
                                            class="bg-red-100 text-red-800 text-lg font-medium mr-2 px-2.5 py-0.5 rounded border border-red-400">Hết
                                            hạn</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $license->expired_at->format('Y-m-d H:i:s') }}
                                </td>
                                <td>
                                    <button type="button" data-id="{{ $license->id }}" data-ip="{{ $license->ip }}"
                                        data-note="{{ $license->note }}"
                                        class="btn-edit inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">Sửa
                                        IP</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Sửa IP
                                </h3>
                                <div class="mt-2">
                                    <form action="{{ route('edit') }}" method="POST" id="form-edit">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" id="license">
                                        <div class="my-2">
                                            <label for="ip">IP</label>
                                            <input type="text" id="ip" name="ip"
                                                class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                                        </div>
                                        <div class="my-2">
                                            <label for="note">Note</label>
                                            <input type="text" id="note" name="note"
                                                class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button id="edit" type="button"
                            class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Sửa</button>
                        <button type="button"
                            class="cancel mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Huỷ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        id="modal-add">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Thêm
                                    license
                                </h3>
                                <div class="mt-2">
                                    <form action="{{ route('add') }}" method="POST" id="form-add">
                                        @csrf
                                        <input type="hidden" name="id" id="license">
                                        <div class="my-2">
                                            <label for="ip-add">IP</label>
                                            <input type="text" id="ip-add" name="ip-add"
                                                class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                                        </div>
                                        <div class="my-2">
                                            <label for="note-add">Note</label>
                                            <input type="text" id="note-add" name="note-add"
                                                class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                                        </div>
                                        <div class="my-2">
                                            <label for="type">Loại</label>
                                            <select id="type" name="type"
                                                class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2">
                                                <option value="1">1 ngày</option>
                                                <option value="2">1 tuần</option>
                                                <option value="3">1 tháng</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button id="add" type="button"
                            class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Thêm</button>
                        <button type="button"
                            class="cancel mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Huỷ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".cancel").on("click", function() {
                $("#modal").addClass("hidden");
                $("#modal-add").addClass("hidden");
            });

            $(".btn-add").on("click", function() {
                $("#license-add").val();
                $("#ip-add").val();
                $("#note-add").val();

                $("#modal-add").removeClass("hidden");
            });

            $("#add").on("click", function() {
                $("#form-add").submit();
            });
        });

        $(".btn-edit").on("click", function() {
            status = 'edit';
            var id = $(this).data("id");
            var ip = $(this).data("ip");
            var note = $(this).data("note");

            $("#license").val(id);
            $("#ip").val(ip);
            $("#note").val(note);

            $("#modal").removeClass("hidden");
        });

        $("#edit").on("click", function() {
            $("#form-edit").submit();
        });
    </script>


</body>

</html>
