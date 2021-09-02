
@extends('layout')

@section('content')
<div class="container putovanjeBoja">
    <div class="container " >
        <div class="row">
            <div class="col"><h5>Cena participacije: {{$putovanje->cena}}</h5></div>    
            <div class="col"><h5>Datum početka: {{$putovanje->datum_pocetka}}</h5></div>    
        </div>    
        <div class="row">
            <div class="col"><h5>Domacin: {{$putovanje->domacinLG}}</h5></div>    
            <div class="col"><h5>Hotel: {{$putovanje->hotel}}</h5></div>    
        </div>    
        <div class="row">
            <div class="col"><h5>Dogadjaj: {{$dogadjaj->naziv}}</h5></div>    
            <div class="col"><h5>Tip: {{$dogadjaj->tip}}</h5></div>    
        </div>    
        <hr>
<h5>Popunjena mesta:</h5>
     <div class="row">
         @foreach ($studenti as $s)
             <div class="col-2">{{$s->broj_sobe}}</div>
         @endforeach
     </div>
</div>


<a type="button" style="position: absolute; bottom:400px; left:300px; "  class="btn btn-success btn-lg" data-toggle="modal"
data-target="#prijaviSe">
Prijavi se
</a>

<!-- Modal HTML Markup -->
<div id="prijaviSe" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-12">
                    <h5 class = "crno">Prijavite se i odaberite broj sobe:</h5>
                </div>
            </div>
            <div class="modal-body">
                <form id="prijaviSeForma">
                    <div class="row">
                        <div class="col">
                            <label for="ime_prezime" class="crno">Ime i prezime:</label>
                            <input id="ime_prezime" class="form-control" type="text" >
                        </div>
                        <input id="putovanje_id" value="{{$putovanje->id}}" class="form-control" hidden type="text" >
                        <div class="col">
                            <label for="broj_sobe" class="crno">Soba koju biste zeleli:</label>
                            <input list="slobodna_mesta" id="broj_sobe" min="1" max="{{$dogadjaj->broj_mesta}}" placeholder="1-{{$dogadjaj->broj_mesta}}" class="form-control" type="number">
                                <datalist id="slobodna_mesta">
                                    @foreach ($slobodna_mesta as $mesto)
                                        <option value="{{$mesto}}" />
                                    @endforeach
                                </datalist>
                        </div>
                        <input class="form-control btn btn-success"  type="submit"> 
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection