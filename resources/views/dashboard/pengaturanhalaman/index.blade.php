@extends('dashboard.layout')

@section('konten')

<form action="{{ route('pengaturanhalaman.update') }}" method="POST">
    @csrf

    <div class="form-grup row">
        <label class="col-sm-2">About</label>
        <div class="col-sm-6">
            <select class="form-control form-control-sm" name="_halamanabout">
                <option value="">-pilih-</option>
                @foreach ($datahalaman as $item)
                    <option value="{{ $item->id }}" 
                        {{ get_meta_value('_halamanabout') ==$item->id ? 'selected' : '' }} >

                         {{ $item->judul }} </option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="form-grup row">
        <label class="col-sm-2">Interest</label>
        <div class="col-sm-6">
            <select class="form-control form-control-sm" name="_halamaninterest">
                <option value="">-pilih-</option>
                @foreach ($datahalaman as $item)
                    <option value="{{ $item->id }}" 
                        {{ get_meta_value('_halamaninterest') ==$item->id ? 'selected' : '' }} >
                        
                         {{ $item->judul }} </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-grup row">
        <label class="col-sm-2">Awards</label>
        <div class="col-sm-6">
            <select class="form-control form-control-sm" name="_halamanawards">
                <option value="">-pilih-</option>
                @foreach ($datahalaman as $item)
                    <option value="{{ $item->id }}" 
                        {{ get_meta_value('_halamanawards') ==$item->id ? 'selected' : '' }} >
                        
                         {{ $item->judul }} </option>
                @endforeach
            </select>
        </div>
    </div>

<button class="btn btn-primary" name="simpan" type="submit">Simpan</button>

</form> 
@endsection


