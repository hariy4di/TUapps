<div id="load">
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Barang</th>
                <th colspan="2">Saldo {{ config('app.months')[$month-1] }}</th>
                <th colspan="2">Tambah {{ config('app.months')[$month] }}</th>
                <th>Kurang {{ config('app.months')[$month] }}</th>
                <th colspan="2">Saldo {{ config('app.months')[$month] }}</th>
                <th>Harga Satuan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(data, index) in datas" :key="data.id">
                <td>@{{ index+1 }}</td>
                <td>@{{ data.nama_barang }}</td>
                
                <td>@{{ data[label_op_awal] }}</td>
                <td>@{{ data.satuan }}</td>
                
                <td>@{{ data[label_op_tambah] }}</td>
                <td>@{{ data.satuan }}</td>
                
                <td class="text-center">
                    <u>@{{ data.pengeluaran }} @{{ data.satuan }}</u>
                    
                    <ul v-if="parseInt(data.pengeluaran)>0">
                        <li v-for="item in data.list_keluar">
                            <a href="#" v-on:click="updateBarangKeluar" :data-id="item.id" 
                                :data-idbarang="item.id_barang" :data-jumlah="item.jumlah_kurang" 
                                :data-unitkerja="item.unit_kerja" :data-tanggal="item.tanggal"
                                data-toggle="modal" data-target="#add_pengurangan"> (@{{ item.jumlah_kurang }}) @{{ item.unit_kerja.nama }}</a>
                        </li>
                    </ul>
                </td>
                
                <td>@{{ parseInt(data[label_op_awal])+parseInt(data[label_op_tambah])-parseInt(data.pengeluaran) }}</td>
                <td>@{{ data.satuan }}</td>

                <td>@{{ data.harga_satuan }}</td>
            </tr>
        </tbody>
    </table>
</div>