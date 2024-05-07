@extends('ujian.components.layouts.main-layout')
@section('container')
    <main class="flex mt-10">
        <div class="grow flex flex-col gap-10 items-center">
            <h1>Tambahkan Data Mahasiswa</h1>
            @if()
            <form action="" method="POST" class="w-full px-[100px]">
                @csrf
                <div class="flex justify-center mb-5">
                    <input type="text" placeholder="Nama Lengkap" class="input input-bordered w-full max-w-full"
                        name="nama_lengkap" id="nama_lengkap" autocomplete="off" />
                </div>
                <div class="flex justify-center mb-5">
                    <input type="text" placeholder="NIM" class="input input-bordered w-full max-w-full" name="nim"
                        id="nim" autocomplete="off" />
                </div>
                <div class="flex justify-center mb-5">
                    <input type="text" placeholder="Jurusan" class="input input-bordered w-full max-w-full"
                        name="jurusan" id="jurusan" autocomplete="off" />
                </div>
                <div class="flex justify-center mb-5">
                    <select class="select select-bordered w-full max-w-full" name="semester">
                        <option disabled selected>Semester</option>
                        @for ($i = 1; $i < 9; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="flex justify-end mb-5">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="grow flex flex-col gap-10 items-center">
            <h1>Data Mahasiswa</h1>
            <div class="flex gap-2 flex-wrap flex-col">
                @foreach ($mahasiswa as $key => $value)
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Mahasiswa {{ $key + 1 }}</h2>
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{ $value->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>: {{ $value->nim }}</td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td>: {{ $value->jurusan }}</td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td>: {{ $value->semester }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
