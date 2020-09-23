<div class="form-qroup">
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>
        <div class="col-md-6">
            <input name='name' type="text" class="form-control" required value="{{ old ('name') ?? $firms->name ?? ''}}">
        </div>
    </div>  
</div>
    
