<div class="form-qroup">
    <div class="form-group row">
        <label for="name_event" class="col-md-4 col-form-label text-md-right">Название события</label>
        <div class="col-md-6">
            <input name='name_event' type="text" class="form-control" required value="{{ old ('name_event') ?? $event->name_event ?? ''}}">
        </div>
    </div>   
    <div class="form-group row">
        <label for="price" class="col-md-4 col-form-label text-md-right">Цена</label>
        <div class="col-md-6">
            <input name='price' type="text" class="form-control" required value="{{ old ('price') ?? $event->price ?? ''}}">
        </div>
    </div> 
    <div class="form-group row">
        <label for="type_work" class="col-md-4 col-form-label text-md-right">Тип работ</label>
        <div class="col-md-6">
            <input name='type_work' type="text" class="form-control" required value="{{ old ('type_work') ?? $event->type_work ?? ''}}">
        </div>
    </div>  
    <div class="form-group row">
        <label for="firm_id" class="col-md-4 col-form-label text-md-right">Выбрать компанию</label>
        <select name='firm_id' class="custom-select"> 
            <option active value={{ $event->firm->id }}>
                {{ $event->firm->name }}</option>     
            @foreach ($firms as $firm)
                @if ($event->firm->name == $firm->name) 
                    @continue; 
                @else
                <option value={{ $firm->id }}>
                    {{ $firm->name }}</option>
                @endif                                                     
            @endforeach
        </select> 
    </div>
    <div class="form-group row">
        <label for="employee_id" class="col-md-4 col-form-label text-md-right">Выбрать компанию</label>
        <select name='employee_id' class="custom-select">  
            <option active value={{ $event->employee->id }}>
                {{ $event->employee->name_employee }}</option> 
            @foreach ($employees as $employee) 
                @if ($event->employee->name_employee == $employee->name_employee) 
                    @continue; 
                @else                   
                    <option  class="text-center" value={{ $employee->id_employee }}>
                            {{ $employee->name_employee }}</option> 
                @endif                    
            @endforeach
        </select> 
    </div> 
    <div class="form-group row">
        <label for="date" class="col-md-4 col-form-label text-md-right" >Выбрать дату</label>
        <input type="date" name="date" value="{{ old ('date') ?? $event->date ?? ''}}">
    </div> 
    <div class="form-group row">
        <label for="firms" class="col-md-4 col-form-label text-md-right">Выбрать компанию</label>
        <select name='change_id' class="custom-select">   
            @foreach ($changes as $change)                    
            <option  class="text-center" value={{ $change->id }}>
                    {{ $change->name_change }}</option>                     
            @endforeach
        </select> 
    </div>     
</div>
    
