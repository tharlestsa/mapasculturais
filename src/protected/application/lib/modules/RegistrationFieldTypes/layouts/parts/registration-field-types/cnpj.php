<div ng-if="field.fieldType === 'cnpj'" id="registration-field-{{field.id}}">
    <div class="label"> {{field.title}} {{field.required ? '*' : ''}}</div>

    <div ng-if="field.description" class="attachment-description">{{field.description}}</div>

    <p>
        <span class='js-editablemask js-editable js-editable-field js-include-editable' data-placeholder="__.___.___/____-__" data-mask="99.999.999/9999-99" id="{{field.fieldName}}" data-name="{{field.fieldName}}" data-type="text" data-original-title="{{field.title}}" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Informe"); ?>" data-value="{{entity[field.fieldName]}}">{{entity[field.fieldName]}}</span>
    </p>
</div>