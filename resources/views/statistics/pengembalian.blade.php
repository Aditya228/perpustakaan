@extends('layouts.master')

@section('content')

<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-th-list"></i> Rekap Peminjaman</h1>
          
          </div>
          <div>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li class="active">Rekap Peminjaman</li>
            </ul>
          </div>
        </div>
         
        <div class="row">

          <div class="col-md-12">
            <div class="card">
               
              <div class="card-body">

                <form action="{{url('/statistics')}}" method="post">
      {{csrf_field()}}
      <label>Dari Tanggal</label>
      <input type="date" name="a" value="{{$a}}" readonly="">
      <label>Sampai Tanggal</label>
      <input type="date" name="b" value="{{$b}}" readonly="">
      <input type="submit" name="submit" class="btn btn-info" value="Cetak PDF">
      </form>
              <a href="{{ URL::to('laporanpembelian/downloadExcel/xls') }}"><button class="btn btn-success">Cetak Excel</button></a>
              <center><h3>Laporan Peminjaman</h3><br>
                <h6>Dari tanggal {{$a}} sampai tanggal {{$b}}</h6></center>
                  

                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                    
                      <th>Judul</th>
                        <th>Peminjam</th>
                         <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                    <th >Aksi</th>
@endrole
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($pengembalian as $data)
                        <tr>
                          
                            <td>{{$data->tgl}}</td>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->siswa->nama}}</td>
                            <td>{{ Auth::user()->name }}</td>
                             <td>Rp.{{number_format($data->jumlahbayar)}}</td>
                          
                      
                        </tr>
                        </tbody>
                         @endforeach
                         <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td><b>Total : </b></td>
                           <td><b>Rp.{{number_format($sum)}}</b></td>
                         </tr>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
                  
       
@endsection