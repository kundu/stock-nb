<div class="row">
    @foreach ($formFeilds as $item)
        @if ($item->formField->type == "text" || $item->formField->type == "number" || $item->formField->type == "date")
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label">{{ $item->formField->name }}:
                        <span class="tx-danger">*</span></label>
                    <input
                        class="form-control"
                        type="{{ $item->formField->type }}"
                        name="fields[{{ $item->formField->id }}]"
                        required="required"
                        placeholder="Enter {{ $item->formField->name }}">
                </div>
            </div>
        @endif

        @if ($item->formField->type == "textarea")
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label">{{ $item->formField->name }}:
                        <span class="tx-danger">*</span></label>
                        <textarea class="form-control" name="fields[{{ $item->formField->id }}]" placeholder="Enter {{ $item->formField->name }}" cols="10" rows="10"></textarea>
                </div>
            </div>
        @endif

        @if ($item->formField->type == "select")
            @php
                $value = json_decode($item->formField->value);
                $value = explode(',', $value);
            @endphp
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label">{{ $item->formField->name }}:
                        <span class="tx-danger">*</span></label>
                        <select class="js-example-basic-multiple form-control" required name="fields[{{ $item->formField->id }}]">
                            <option value="" disabled selected>{{ $item->formField->name }}</option>
                            @foreach ($value as $item2)
                                <option value="{{ $item2 }}">{{ $item2 }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
        @endif
    @endforeach
</div>
