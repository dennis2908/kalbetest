Hai <i>{{ $BarangLunas->receiver }}</i>,
<p>Terima kasih sudah belanja di {{$BarangLunas->sender}}.</p>
<p>Kode Transaksi Anda <h3>{{ $BarangLunas->id_trans }}</h3></p>
 
<p><u>Barang anda menunggu konfirmasi pembayaran.</u></p>
 
                <div class="section-title text-center">
                    <h3 class="title">Pesanan Anda : </h3>
                </div>
                <div id="order_summary" class="order-summary">
                   
                   
                   
                    @if($BarangLunas->all != null)
                    <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableHead"><strong>PRODUCT</strong></div>
                            <div class="rTableHead"><strong>QUANTITY</strong></div>
                            <div class="rTableHead"><strong>PRICE</strong></div>

                        </div>
					@foreach($BarangLunas->all as $c)
					@foreach($BarangLunas->prod as $p)
					@if($c[0]==$p->id)
                        <div  class="rTableRow" id="deleteItem_{{$c[3]}}">
							<div class="rTableCell">{{$p->name}}</div>
                            
                            <!--quantity-->
                                                                <!--c[1] is pid and c[3] is order serial-->
                            <div class="rTableCell">
                          <label id="quantity" class="text-right" name={{$p->id}}> {{$c[1]}} </label>
                            </div>
                            
<!--                            -->
							
							<div class="rTableCell text-right"><div id="individualPrice_{{$c[3]}}">
                                @php
                                $tot = $p->discount* $c[1];
                                echo number_format($tot,0,'.',',');
                                @endphp
                                
                                Rp.</div></div>
                                
						</div>
                        
						@break
					@endif
					@endforeach 
					@endforeach 
                    
                    </div>
                    <div class="order-col">
                        <div>Ongkos Kirim</div>
                        <div><strong>Rp. {{number_format(Session::get('ongkir'),0,'.',',')}}</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div ><strong class="order-total" id="totalCost">Rp. {{number_format(Session::get('price'),0,'.',',')}}</strong></div>
                    </div>
                    @endif
                    
                </div>
 
Terima Kasih,
<br/>
<i>{{ $BarangLunas->sender }}</i>