Hai, {{ $BarangLunas->receiver }},
Terima kasih sudah belanja di {{ $BarangLunas->sender }}.

Kode Transaksi Anda {{ $BarangLunas->id_trans }}
 
Barang anda menunggu konfirmasi pembayaran.
 
Pesanan Anda :
                         
                   
                    @if($BarangLunas->all != null)     
                    PRODUCT   QUANTITY   PRICE 

					@foreach($BarangLunas->all as $c)
					@foreach($BarangLunas->prod as $p)
					@if($c[0]==$p->id)
                        {{$p->name}} {{$c[1]}} @php
                                $tot = $p->discount* $c[1];
                                echo number_format($tot,0,'.',',');
                                @endphp Rp.
                        
						@break
					@endif
					@endforeach 
					@endforeach 
                    Ongkos Kirim Rp. {{number_format(Session::get('ongkir'),0,'.',',')}}
                    TOTAL Rp. {{number_format(Session::get('price'),0,'.',',')}}
                    @endif
 
Terima Kasih,
{{ $BarangLunas->sender }}