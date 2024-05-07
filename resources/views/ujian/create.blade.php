@extends('ujian.components.layouts.main-layout')
@section('container')
    <main class="flex mt-10">

        <div class="grow flex flex-col gap-10 items-center">
            <h1 class="text-2xl font-bold">Tambahkan Data Mahasiswa</h1>

            <form action="" method="POST" class="w-full px-[100px]">
                @if (Session::has('kunci'))
                    <div role="alert" class="alert alert-success mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ Session::get('kunci') }}</span>
                    </div>
                @endif
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
            <h1 class="text-2xl font-bold">Data Mahasiswa</h1>
            <div class="flex gap-2 flex-wrap flex-col">
                @if (count($mahasiswa) > 0)
                    @foreach ($mahasiswa as $key => $value)
                        {{-- Aziz --}}
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
                @else
                <div role="alert" class="alert alert-info">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Data Mahasiswa Kosong</span>
                  </div>
                @endif
            </div>
        </div>
    </main>
@endsection
