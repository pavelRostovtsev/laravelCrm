<div class="form-qroup">
    <div class="form-group row">
        <label for="name_employee" class="col-md-4 col-form-label text-md-right">Имя</label>
        <div class="col-md-6">
            <input name='name_employee' type="text" class="form-control" required value="{{ old ('name_employee') ?? $employees->name_employee ?? ''}}">
        </div>
    </div>    
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
        <div class="col-md-6">
            <input name='email' type="text" class="form-control" required value="{{ old ('email') ?? $employees->email ?? ''}}">
        </div>
    </div>
</div>
    
