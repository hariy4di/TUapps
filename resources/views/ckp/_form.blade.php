@if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
  </div><br />
@endif

<div class="card">
    <div class="body">
             <div class="row clearfix">
                <div class="col-lg-6 col-md-12 left-box">
                    <div class="form-group">
                        <label>Bulan:</label>

                        <div class="input-group">
                          <select class="form-control  form-control-sm"  v-model="month" name="month">
                                @foreach ( config('app.months') as $key=>$value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 right-box">
                    <div class="form-group">
                        <label>Tahun:</label>

                        <div class="input-group">
                          <select class="form-control  form-control-sm"  v-model="year" name="year">
                              @for ($i=2019;$i<=date('Y');$i++)
                                  <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                          </select>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="total_tambahan" v-model="total_tambahan">
            <input type="hidden" name="total_utama" v-model="total_utama">
    <hr/>

    <button type="submit" class="btn btn-primary float-right">Simpan</button>
    
    <br/><br/>
    <section class="datas">

        
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#utama">UTAMA</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#penilaian">PENILAIAN</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="utama">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered m-b-0">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td class="text-center" style="width: 60%" rowspan="2">{{ $model->attributes()['uraian'] }}</td>
                                <td class="text-center" rowspan="2">{{ $model->attributes()['satuan'] }}</td>
                                
                                <td class="text-center" colspan="3">Kuantitas</td>
                                <td class="text-center" rowspan="2">Tingkat Kualitas</td>

                                <td class="text-center" rowspan="2">{{ $model->attributes()['kode_butir'] }}</td>
                                <td class="text-center" rowspan="2">{{ $model->attributes()['angka_kredit'] }}</td>
                                <td class="text-center" rowspan="2">{{ $model->attributes()['keterangan'] }}</td>
                            </tr>

                            <tr>
                                <td class="text-center">Target</td>
                                <td class="text-center">Realisasi</td>
                                <td class="text-center">%</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr><td colspan="10">UTAMA &nbsp &nbsp<a id="add-utama" v-on:click="addData"><i class="icon-plus text-info"></i></a></td></tr>
                            <tr v-for="(data, index) in kegiatan_utama" :key="data.id">
                                <td>
                                    <template v-if="is_delete(data.id)">
                                        <a id="del-utama" data-jenis="utama" :data-id="data.id" v-on:click="delData(data.id)"><i class="fa fa-trash text-danger"></i>&nbsp </a>
                                    </template>
                                    @{{ index+1 }}
                                </td>
                                <td><div style="width:300px"></div><input class="form-control  form-control-sm" type="text" :name="'u_uraian'+data.id" v-model="data.uraian"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'u_satuan'+data.id" v-model="data.satuan"></td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_target_kuantitas'+data.id" v-model="data.target_kuantitas"></td>
                                
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_realisasi_kuantitas'+data.id" v-model="data.realisasi_kuantitas"></td>
                                <td>@{{ (typeof data.target_kuantitas == 'undefined') ? 0 : (data.realisasi_kuantitas/data.target_kuantitas*100) }}%</td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_kualitas'+data.id" v-model="data.kualitas"></td>

                                <td><input class="form-control  form-control-sm" type="text" :name="'u_kode_butir'+data.id" v-model="data.kode_butir"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'u_angka_kredit'+data.id" v-model="data.angka_kredit"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'u_keterangan'+data.id" v-model="data.keterangan"></td>
                            </tr>
                            
                            <tr><td :colspan="10">TAMBAHAN &nbsp &nbsp<a id="add-tambahan" v-on:click="addData"><i class="icon-plus text-info"></i></a></td></tr>
                            <tr v-for="(data, index) in kegiatan_tambahan" :key="data.id" >
                                <td class="freeze">
                                    <template v-if="is_delete(data.id)">
                                        <a id="del-tambahan" data-jenis="tambahan" :data-id="data.id"  v-on:click="delData(data.id)"><i class="fa fa-trash text-danger"></i>&nbsp </a>
                                    </template>
                                    @{{ index+1 }}
                                </td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'t_uraian'+data.id" v-model="data.uraian"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'t_satuan'+data.id" v-model="data.satuan"></td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_target_kuantitas'+data.id" v-model="data.target_kuantitas"></td>
                                
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_realisasi_kuantitas'+data.id" v-model="data.realisasi_kuantitas"></td>
                                <td>@{{ (typeof data.target_kuantitas == 'undefined') ? 0 : (data.realisasi_kuantitas/data.target_kuantitas*100) }}%</td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_kualitas'+data.id" v-model="data.kualitas"></td>

                                <td><input class="form-control  form-control-sm" type="text" :name="'t_kode_butir'+data.id" v-model="data.kode_butir"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'t_angka_kredit'+data.id" v-model="data.angka_kredit"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'t_keterangan'+data.id" v-model="data.keterangan"></td>
                            </tr>


                            <template>
                                <tr>
                                    <td colspan="5"><h4>JUMLAH</h4></td>
                                    <td class="text-center">@{{ total_kuantitas }} %</td>
                                    <td class="text-center">@{{ total_kualitas }} %</td>
                                    <td colspan="3"></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="tab-pane" id="penilaian">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered m-b-0">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td class="text-center" style="width: 60%" rowspan="2">{{ $model->attributes()['uraian'] }}</td>
                                <td class="text-center" colspan="5">Pengukuran</td>
                                <td class="text-center" rowspan="2">Catatan Koreksi</td>
                                <td class="text-center" rowspan="2">IKI</td>
                            </tr>

                            <tr>
                                <td class="text-center">Kecepatan</td>
                                <td class="text-center">Ketuntasan</td>
                                <td class="text-center">Ketepatan</td>
                                <td class="text-center">rata2</td>
                                <td class="text-center">Penilaian Pimpinan</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr><td colspan="9">UTAMA &nbsp &nbsp<a id="add-utama" v-on:click="addData"><i class="icon-plus text-info"></i></a></td></tr>
                            <tr v-for="(data, index) in kegiatan_utama" :key="data.id">
                                <td>@{{ index+1 }}</td>
                                <td><div style="width:300px"></div>@{{ data.uraian }}</td>
                                
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_kecepatan'+data.id" v-model="data.kecepatan"></td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_ketepatan'+data.id" v-model="data.ketepatan"></td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_ketuntasan'+data.id" v-model="data.ketuntasan"></td>
                                <td>@{{ (data.kecepatan+data.ketepatan+data.ketuntasan)/3 }}</td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'u_penilaian_pimpinan'+data.id" v-model="data.penilaian_pimpinan"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'u_catatan_koreksi'+data.id" v-model="data.catatan_koreksi"></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-primary btn-sm" type="button" v-on:click="showIki" :data-idu="'u_iki'+index">...</button>
                                    <input type="hidden" :name="'u_iki'+data.id" v-model="data.iki">
                                    <br/>@{{ data.iki_label }}
                                </td>
                            </tr>
                            
                            <tr><td colspan="9">TAMBAHAN &nbsp &nbsp<a id="add-tambahan" v-on:click="addData"><i class="icon-plus text-info"></i></a></td></tr>
                            <tr v-for="(data, index) in kegiatan_tambahan" :key="data.id" >
                                <td>@{{ index+1 }}</td>
                                <td>@{{ data.uraian }}</td>
                                
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_kecepatan'+data.id" v-model="data.kecepatan"></td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_ketepatan'+data.id" v-model="data.ketepatan"></td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_ketuntasan'+data.id" v-model="data.ketuntasan"></td>
                                <td>@{{ (data.kecepatan+data.ketepatan+data.ketuntasan)/3 }}</td>
                                <td><input class="form-control  form-control-sm" type="number" :name="'t_penilaian_pimpinan'+data.id" v-model="data.penilaian_pimpinan"></td>
                                <td><input class="form-control  form-control-sm" type="text" :name="'t_catatan_koreksi'+data.id" v-model="data.catatan_koreksi"></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-primary btn-sm" type="button" v-on:click="showIki" :data-idu="'t_iki'+index">...</button>
                                    <input type="hidden" :name="'t_iki'+data.id" v-model="data.iki">
                                    <br/>@{{ data.iki_label }}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </section>
  </div>
</div>

@include('ckp.modal_iki')

<div class="modal hide" id="wait_progres" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center"><img src="{!! asset('lucid/assets/images/loading.gif') !!}" width="200" height="200" alt="Loading..."></div>
                <h4 class="text-center">Please wait...</h4>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script>
var vm = new Vue({  
    el: "#app_vue",
    data:  {
      kegiatan_utama: [],
      kegiatan_tambahan: [],
      type: 1,
      month: parseInt({!! json_encode($month) !!}),
      year: {!! json_encode($year) !!},
      total_utama: 10,
      total_tambahan: 2,
      pathname : (window.location.pathname).replace("/create", ""),
      list_iki: {!! json_encode($list_iki) !!},
      cur_index: 0, cur_jenis: 't',
    },
    computed: {
        ckp_label: function() {
            if(this.type==1) return 'CKP-R';
            else return 'CKP-T';
        },
        total_kuantitas: function(){
            var result = 0;

            for(i=0;i<this.kegiatan_utama.length;++i){
                if(typeof this.kegiatan_utama[i].target_kuantitas !== 'undefined') 
                    result+= (this.kegiatan_utama[i].realisasi_kuantitas/this.kegiatan_utama[i].target_kuantitas*100)
            }
            
            for(i=0;i<this.kegiatan_tambahan.length;++i){
                if(typeof this.kegiatan_tambahan[i].target_kuantitas !== 'undefined')
                    result+= (this.kegiatan_tambahan[i].realisasi_kuantitas/this.kegiatan_tambahan[i].target_kuantitas*100)
            }

            return parseFloat(result/(this.kegiatan_utama.length+this.kegiatan_tambahan.length-2)).toFixed(2);
        },
        total_kualitas: function(){
            var result = 0;

            for(i=0;i<this.kegiatan_utama.length;++i){
                if(typeof this.kegiatan_utama[i].kualitas !== 'undefined') 
                    result+= parseInt(this.kegiatan_utama[i].kualitas);
            }
            
            for(i=0;i<this.kegiatan_tambahan.length;++i){
                if(typeof this.kegiatan_tambahan[i].kualitas !== 'undefined')
                    result+= parseInt(this.kegiatan_tambahan[i].kualitas);
            }

            return parseFloat(result/(this.kegiatan_utama.length+this.kegiatan_tambahan.length-2)).toFixed(2);
        }
    },
    watch: {
        type: function (val) {
            this.setDatas();
        },
        month: function (val) {
            this.setDatas();
        },
        year: function (val) {
            this.setDatas();
        },
    },
    methods: {
        is_delete: function(params){
            if(isNaN(params)) return false;
            else return true;
        },
        pilihIki: function(event){
            var self = this;
            if (event) {
                let index_data = parseInt(event.currentTarget.getAttribute('data-index'));
                let cur_iki = self.list_iki[index_data];
                console.log(self.cur_index);
                console.log(self.cur_jenis);
                if(self.cur_jenis=='t'){
                    self.kegiatan_tambahan[self.cur_index].iki = cur_iki.id;
                    self.kegiatan_tambahan[self.cur_index].iki_label = cur_iki.iki_label;
                    console.log(self.kegiatan_tambahan);
                }
                else{
                    self.kegiatan_utama[self.cur_index].iki = cur_iki.id;
                    self.kegiatan_utama[self.cur_index].iki_label = cur_iki.iki_label;
                    console.log(self.kegiatan_utama);
                }
                $('#select_iki').modal('hide');
            }
        },
        showIki: function(event){
            var self = this;
            if(event){
                let idu = event.currentTarget.getAttribute('data-idu');
                self.cur_jenis = idu.substr(0,1);
                self.cur_index = parseInt(idu.substr(5));
                

                $('#select_iki').modal('show');
            }
        },
        setDatas: function(){
            var self = this;
            $('#wait_progres').modal('show');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                url : self.pathname+"/data_ckp",
                method : 'post',
                dataType: 'json',
                data:{
                    month: self.month, 
                    year: self.year, 
                    type: self.type,
                },
            }).done(function (data) {
                self.kegiatan_utama = data.datas.utama;
                self.kegiatan_tambahan = data.datas.tambahan;

                var selisih_utama = self.total_utama - self.kegiatan_utama.length;
                var selisih_tambahan = self.total_tambahan - self.kegiatan_tambahan.length;

                for(i=1;i<=selisih_utama;++i){
                    self.kegiatan_utama.push({
                        'id': 'au'+(i),
                    });
                }

                for(i=1;i<=selisih_tambahan;++i){
                    self.kegiatan_tambahan.push({
                        'id': 'at'+(i),
                    });
                }

                $('#wait_progres').modal('hide');
            }).fail(function (msg) {
                console.log(JSON.stringify(msg));
                $('#wait_progres').modal('hide');
            });
        },
        salinDatas: function(){
            var self = this;

            if(self.kegiatan_utama.length==1){
            var anti_type = 1;
            if(self.type==1)
                anti_type = 2;

            $('#wait_progres').modal('show');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                url : self.pathname+"/data_ckp",
                method : 'post',
                dataType: 'json',
                data:{
                    month: self.month, 
                    year: self.year, 
                    type: anti_type,
                },
                }).done(function (data) {
                    self.kegiatan_utama.splice(-1,1);
                    self.kegiatan_tambahan.splice(-1,1);

                    for(i=0;i<data.datas.utama.length;++i){
                        var current_utama = data.datas.utama[i];
                        self.total_utama++;
                        self.kegiatan_utama.push({
                            'id': 'au'+(self.kegiatan_utama.length+1),
                            'uraian' : current_utama.uraian,
                            'angka_kredit': current_utama.angka_kredit,
                            'keterangan': current_utama.keterangan,
                            'kode_butir': current_utama.kode_butir,
                            'kualitas': current_utama.kualitas,
                            'realisasi_kuantitas': current_utama.realisasi_kuantitas,
                            'satuan': current_utama.satuan,
                            'target_kuantitas': current_utama.target_kuantitas,
                            'type': current_utama.type,
                            
                            'kecepatan': current_utama.kecepatan,
                            'ketepatan': current_utama.ketepatan,
                            'ketuntasan': current_utama.ketuntasa,
                            'penilaian_pimpinan': current_utama.penilaian_pimpinan,
                            'catatan_koreksi': current_utama.catatan_koreksi,
                        });
                    }

                    for(i=0;i<data.datas.tambahan.length;++i){
                        var current_tambahan = data.datas.tambahan[i];
                        self.total_utama++;
                        self.kegiatan_tambahan.push({
                            'id': 'at'+(self.kegiatan_tambahan.length+1),
                            'uraian' : current_utama.uraian,
                            'angka_kredit': current_tambahan.angka_kredit,
                            'keterangan': current_tambahan.keterangan,
                            'kode_butir': current_tambahan.kode_butir,
                            'kualitas': current_tambahan.kualitas,
                            'realisasi_kuantitas': current_tambahan.realisasi_kuantitas,
                            'satuan': current_tambahan.satuan,
                            'target_kuantitas': current_tambahan.target_kuantitas,
                            'type': current_tambahan.type,
                            
                            'kecepatan': current_tambahan.kecepatan,
                            'ketepatan': current_tambahan.ketepatan,
                            'ketuntasan': current_tambahan.ketuntasa,
                            'penilaian_pimpinan': current_tambahan.penilaian_pimpinan,
                            'catatan_koreksi': current_tambahan.catatan_koreksi,
                        });
                    }

                    
                    self.kegiatan_utama.push({
                        'id': 'au'+(self.kegiatan_utama.length+1),
                    });
                    
                    self.kegiatan_tambahan.push({
                        'id': 'at'+(self.kegiatan_tambahan.length+1),
                    });

                    $('#wait_progres').modal('hide');
                }).fail(function (msg) {
                    console.log(JSON.stringify(msg));
                    $('#wait_progres').modal('hide');
                });
            }
            else{
                alert("CKP sudah memiliki rincian, penyalinan data gagal!");
            }
        },
        addData: function (event) {
            var self = this;
            if (event) {
                if(event.currentTarget.id=='add-utama')
                {
                    self.total_utama++;
                    self.kegiatan_utama.push({
                        'id': 'au'+(self.total_utama),
                    });
                }
                else{
                    self.total_tambahan++;
                    self.kegiatan_tambahan.push({
                        'id': 'at'+(self.total_tambahan),
                    });
                }
            }
        },
        delData: function (idnya) {
            var self = this;
            
            $('#wait_progres').modal('show');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                url : self.pathname+"/"+idnya,
                method : 'delete',
                dataType: 'json',
            }).done(function (data) {
                window.location.reload(true);

                $('#wait_progres').modal('hide');
            }).fail(function (msg) {
                console.log(JSON.stringify(msg));
                $('#wait_progres').modal('hide');
            });
        },
        cetakDatas: function(){
            var self = this;
            $('#wait_progres').modal('show');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                url : self.pathname+"/print",
                method : 'post',
                dataType: 'json',
                data:{
                    p_month: self.month, 
                    p_year: self.year, 
                    p_type: self.type,
                },
            }).done(function (data) {
                // window.location = self.pathname+"/print";
                // $('#cetak').html(data);

                $('#wait_progres').modal('hide');
            }).fail(function (msg) {
                console.log(JSON.stringify(msg));
                $('#wait_progres').modal('hide');
            });
        },
    }
});

    $(document).ready(function() {
        vm.setDatas();
    });


    $('#month').change(function() {
        vm.setDatas();
    });
    
    $('#salin').click(function(e) {
        e.preventDefault();
        vm.salinDatas();
    });
    
    $('#cetak').click(function(e) {
        e.preventDefault();
        vm.cetakDatas();
    });

    $('#year').change(function() {
        vm.setDatas();
    });
  
    $('#type').change(function() {
        vm.setDatas();
    });
    
    $('#month').change(function() {
        vm.setDatas();
    });
</script>
@endsection

@section('css')
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="csrf-token" content="@csrf">
    <style type="text/css">
        * {
            font-family: Segoe UI, Arial, sans-serif;
        }
        table{
            font-size: small;
            border-collapse: collapse;
        }

        tfoot tr td{
            font-weight: bold;
            font-size: small;
        }
    </style>
@endsection