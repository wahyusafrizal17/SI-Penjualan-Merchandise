<div class="card-body">

    <div class="form-group">
        <label>Nama Materi</label>
        {{ Form::text('nama_materi',null,['class'=>'form-control'])}}
        @if ($errors->has('nama_materi')) <span class="help-block" style="color:red">{{ $errors->first('nama_materi') }}</span> @endif
    </div>

    <div class="form-group mt-2">
      <label>Banner</label>
      {{ Form::file('banner',['class'=>'form-control'])}}
      @if ($errors->has('banner')) <span class="help-block" style="color:red">{{ $errors->first('banner') }}</span> @endif
    </div>

    <div class="form-group mt-1">
        <label>Materi</label>
        {{ Form::textarea('materi', null, ['class' => 'form-control']) }}
        @if ($errors->has('materi')) <span class="help-block" style="color:red">{{ $errors->first('materi') }}</span> @endif
    </div>
  
  </div>
  
  <div class="card-footer">
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('materi.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>

  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('materi');
</script>