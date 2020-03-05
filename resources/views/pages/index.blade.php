@extends('layouts.site_template')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/customcss.css') }}">
    <script src="{{ asset('js/customjs.js') }}"></script>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Certificate Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fakture">Unos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vidi_fakturu">Pregled</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Kreiranje</a>
                </li>
            </ul>
            <a href="/fakture">fakture</a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- input container -->
    <div class="container mt-2 bg-color ">

        <!-- Nav tabs -->
        <ul class="nav nav-pills mb-2 mx-auto navigation_bar_width">
            <li class="nav-item mx-auto">
                <a class="nav-link active bg-dark pt-2 pb-2 pl-2 pr-2 display-4 font-weight-bold" data-toggle="pill"
                   href="#home">Račun</a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link bg-dark pt-2 pb-2 pl-2 pr-2 display-4 font-weight-bold" data-toggle="pill"
                   href="#sve_fakture">Fakture</a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link bg-dark pt-2 pb-2 pl-2 pr-2 display-4 font-weight-bold" data-toggle="pill"
                   href="#menu1">Predračun</a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link bg-dark pt-2 pb-2 pl-2 pr-2 display-4 font-weight-bold" data-toggle="pill"
                   href="#menu1">Dopis</a>
            </li>
            <li class="nav-item mx-auto">
                <a class="nav-link bg-dark pt-2 pb-2 pl-2 pr-2 display-4 font-weight-bold" data-toggle="pill"
                   href="#menu1">Popis</a>
            </li>
        </ul>


        <!-- Tab panes -->
        <div class="navigation_bar_width tab-content">
            <div class="tab-pane container active" id="home">

                <div class="na">
                    <div class="gumb_div mx-auto float-left text-center">

                    </div>
                    <form action="/spremi_fakturu" method="post">
                        @csrf
                    <div class="page float-left " id="faktura">

                        <div class="gornji_dio_fakture">
                            <div class="float-left gore_lijevo">
                                <div class="naziv_tvrtka_postanska_adresa">
                                    <div>naziv tvrtke</div>
                                    <div>Ulica i broj</div>
                                    <div>Grad</div>
                                </div>
                            </div>
                            <div class="float-left gore_desno_buffer"></div>
                            <div class="float-left gore_desno"><img class="logo_filgo" src="filgo_logo.jpg"/>
                                <br/>
                                <br/>
                                Filgo d.o.o Proizvodnja I Trgovina<br/>
                                Slavka Čora 1<br/>
                                10020 Zagreb, Republika Hrvatska<br/>
                                OIB:33945778823<br/>
                                IBAN HR8723400091100162769<br/>
                                Žiro Račun Broj 2340009-1100162769<br/>
                                Tel/Fax 01/6262-170, GSM: 091/514-28-67<br/>
                                www.filgo.hr<br/>
                            </div>
                        </div>
                        <div class="donji_dio_fakture">
                            <div class="float-left text-center  racun_broj mb-4">
                                Račun br:<input type="text" lang="en-150" class="input_kratki text-center"/>
                            </div>
                            <div>
                                <div class="float-left">
                                    <table class="tablica_layout">
                                        <tbody>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Kupac:</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Adresa:</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Oib</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="float-left tablica_kupac_i_podatci_odstojanje_drugi">
                                    <table class="tablica_layout">
                                        <tbody>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Br. Otpremnice:</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Datum otpreme:</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Narudžba br.</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Dospijeće:</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        <tr>
                                            <td class="tablice_kupac_i_podatci_td">Način Plaćanja</td>
                                            <td class="tablice_kupac_i_podatci_td"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tablica float-left mt-4">
                                <table>
                                    <th>
                                        <tr class="text-center">
                                            <td class="kratki_td">Količina</td>
                                            <td class="dugi_td">Naziv</td>
                                            <td class="kratki_td">Cijena</td>
                                            <td class="kratki_td">Osnovica</td>
                                            <td class="dugi_td">PDV 25%</td>
                                            <td class="dugi_td">Iznos</td>
                                        </tr>
                                    </th>
                                    <tbody>
                                    <tr>
                                        <td class="kratki_td"><input  name="input1" type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"><select class="select_dugi">
                                                <option> - Odaberi -</option>
                                            </select></td>
                                        <td class="kratki_td"><input name="input2" type="text" class="input_kratki"/></td>
                                        <td class="kratki_td"><input name="input3" type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"><span></span></td>
                                        <td class="dugi_td"><span></span></td>
                                    </tr>
                                    <tr>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"><select class="select_dugi">
                                                <option> - Odaberi -</option>
                                            </select></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"></td>
                                        <td class="dugi_td"></td>
                                    </tr>
                                    <tr>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"><select class="select_dugi">
                                                <option> - Odaberi -</option>
                                            </select></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"></td>
                                        <td class="dugi_td"></td>
                                    </tr>
                                    <tr>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td">
                                            <select class="select_dugi">
                                                <option> - Odaberi -</option>
                                            </select>
                                        </td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"></td>
                                        <td class="dugi_td"></td>
                                    </tr>
                                    <tr>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"><select class="select_dugi">
                                                <option> - Odaberi -</option>
                                            </select></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="kratki_td"><input type="text" class="input_kratki"/></td>
                                        <td class="dugi_td"></td>
                                        <td class="dugi_td"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="text-right">Ukupno:</td>
                                        <td class="kratki_td"></td>
                                        <td class="dugi_td"></td>
                                        <td class="dugi_td"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-left">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="iznos_slovima_prvi_red">&nbsp; Iznos slovima:</td>
                                        <td class="iznos_slovima_drugi_red"></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="donji_dio float-left">
                                <div class="display-block mb-5">
                                    <br/>
                                    Napomena: OBRAČUN PREMA NAPLAĆENIM NAKNADAMA<br/>
                                    Zatezne kamate: po zakonu<br/>
                                    Račun izdao: Velimir Ivanko<br/>
                                </div>
                                <div class="float-left">21/05/2018 10:00 Sati</div>
                                <div class="ovlastena_osoba float-left">Ovlaštena Osoba</div>
                            </div>
                        </div>
                    </div>


                    <div class="gumb_div mx-auto float-left text-center">
                        <button action onclick="printElem('faktura')">Isprintaj</button>
                        <button type="submit" class="btn btn-primary">Spremi</button>
                    </div>
                    </form>
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="tab-pane" id="sve_fakture">
                <div class="container mt-2 bg-color navigation_bar_width">
                    <div class="na">
                        <div class="gumb_div mx-auto float-left text-center">

                        </div>
                        <div class="page .postavi_scroll float-left">
                            <table>
                                <thead>
                                <td>Broj fakture</td>
                                <td>Kupac</td>
                                <td>Iznos fakture</td>
                                <td>Datum izdavanja</td>
                                </thead>
                                <tbody>
                                @foreach ($all_invoices as $invoice)
                                    <tr>
                                        <td>{{$invoice->broj_fakture}}</td>
                                        <td>{{$invoice->customer_id}}</td>
                                        <td>{{$invoice->ukupni_iznos_s_pdv_om}}</td>
                                        <td>{{$invoice->datum_izdavanja}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection