@extends('layouts.site_template')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/customcss.css') }}">
    <div class="container mt-2 bg-color navigation_bar_width">
    <table>
        <thead>
        <td>Broj fakture</td> <td>Kupac</td> <td>Iznos fakture</td> <td>Datum izdavanja</td>
        </thead>
        <tbody>
            @foreach ($all_invoices as $invoice)
              <tr> <td>{{$invoice->broj_fakture}}</td> <td>{{$invoice->customer_id}}</td> <td>{{$invoice->ukupni_iznos_s_pdv_om}}</td> <td>{{$invoice->datum_izdavanja}}</td> </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection