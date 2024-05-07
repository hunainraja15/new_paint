@extends('layouts.app')
@section('body')
<style>
    .top-btn {
        margin: auto;
        display: flex;
        margin-top: 18px;
    }
    
    .form-capsule .form-group {
        
        position: relative;
    }
    
    
    .form-capsule .form-group label {
        
        position: absolute;
        font-size: 0.8em;
        top: 0px;
        width: 100%;
        padding: 0 10px;
        margin: 5px 0 10px 0;
        opacity: 0;
        transition: opacity 0.2s ease-out;
        
        -webkit-backface-visibility: hidden;
        pointer-events: none;
    }
    
    .form-capsule .show-label label {
        
        opacity: 1;
    }
    
    
    
    .form-capsule .form-control {
        
        height: 50px;
        padding: 15px 10px;
        box-shadow: 0 0 0 2px transparent;
        transition: all 0.2s ease-out;
    }
    
    .form-capsule .form-control:focus {
        
        box-shadow: 0 0 0 2px #206bc4;
        outline: transparent;
        border-color: transparent;
    }
    
    .form-capsule .show-label .form-control {
        
        padding-top: 25px;
        padding-bottom: 5px;
    }
    
    
    
    .form-capsule .form-group-textarea label {
        
        background-color: white;
        width: auto;
        right: 0;
        left: 0;
        margin: 1px 18px 1px 1px;
        border-radius: 3px 3px 0 0;
        padding-top: 4px;
    }
    
    .form-capsule .form-group-textarea .form-control {
        
        min-height: 100px;
        height: auto;
        max-width: 100%;
        min-width: 100%;
    }
    
    
    .form-capsule .form-group-markdown label {
        
        background-color: white;
        width: auto;
        right: 0;
        left: 0;
        margin: 1px 18px 1px 1px;
        border-radius: 3px 3px 0 0;
        padding-top: 4px;
    }
    
    
    .form-capsule .form-group-markdown .form-control {
        
        margin-top: 10px;
        min-height: 200px;
        height: auto;
        max-width: 100%;
        min-width: 100%;
    }
    
    .form-capsule .markdown-upload-button {
        
        cursor: pointer;
        color: blue;
    }
    
    .form-capsule .markdown-preview {
        
        margin-top: 10px;
        margin-bottom: 10px;
        height: 230px;
        width: 100%;
        border: 1px solid #CCC;
        border-radius: 4px;
    }
    
    .form-capsule .form-group-select label {
        
        opacity: 1;
        z-index: 1;
    }
    
    .form-capsule .form-group-select .form-control {
        
        padding-top: 25px;
        padding-bottom: 5px;
        -webkit-appearance: none;
        -moz-appearance: none;
    }
    
    .select-wrapper {
        
        position: relative;
        z-index: 0;
    }
    
    .select-wrapper:before {
        
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 50px;
        background-position: center center;
        background-repeat: no-repeat;
        pointer-events: none;
        background-image: url(https://tlc-web.qcode.co.uk/Graphics/dropdown-arrow-down-dark.svg);
    }
    
    
    
    .help-block-inline {
        
        position: absolute;
        top: 0;
        right: 25px;
        line-height: 50px;
        margin: 0;
        font-size: 90%;
        color: #CCC;
    }
    
    .help-block-floating {
        color: #555;
    }
    
    .help-block-background {
        right: 0;
        background-color: #eee;
        color: #555;
        border-radius: 0 3px 3px 0;
        height: 48px;
        margin: 1px;
        padding: 0 12px;
    }
    
    .tooltip-icon {
        
        position: absolute;
        top: 15px;
        right: 30px;
    }
    
    .radio-group {
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    .radio,
    .radio+.radio {
        border-bottom: 1px solid #ccc;
        margin: 0;
    }
    
    .radio:last-child {
        border-bottom: 0;
    }
    
    .radio-option {
        display: none;
    }
    
    .radio-option:checked+.radio-option-label:before {
        border-color: #000666;
        border-width: 5px;
    }
    
    .radio-option-label {
        display: table
    }
    
    .radio-option-label:before {
        content: "";
        display: block;
        width: 16px;
        height: 16px;
        border: 1px solid #ccc;
        margin: 17px;
        border-radius: 50%;
        background-color: white;
        transition: border-width 0.3s ease;
    }
    
    .radio-option-label-text {
        display: table-cell;
        vertical-align: middle;
        padding: 10px 10px 10px 0;
        width: 100%;
        margin: 0;
    }
    
    .form-control {
        margin-top: 4px;
    }
    
    .label-form {
        opacity: 1 !important;
        z-index: 1;
    }
</style>
<div class="page-header d-print-none">
    
    <div class="page-body">
        <div class="container-xl">
            <div class="card mt-5">
                <div class="card-header">
                    Add New Paint
                </div>
                <div class="card-body">
                    
                    <div class="container">
                        <form class="form-capsule" role="form">
                            <div class="row">
                                <div class="form-group form-group-select col-3">
                                    <label for="sel1">Stok Paint</label>
                                    <div class="select-wrapper">
                                        <select class="form-control stock_paint" id="sel1">
                                            <option value=""></option>
                                            <option value="IMRON FP WHITE">IMRON FP WHITE</option>
                                            <option value="IMRON FP BLACK">IMRON FP BLACK</option>
                                            <option value="IMRON 4:1 GRAY">IMRON 4:1 GRAY</option>
                                            <option value="PROTHANE BLACK">PROTHANE BLACK</option>
                                            <option value="PROTHANE OXFORD WHITE">PROTHANE OXFORD WHITE</option>
                                            <option value="PROTHANE SEMI-GLOSS BLACK">PROTHANE SEMI-GLOSS BLACK
                                            </option>
                                            <option value="IMRON JLG ORANGE">IMRON JLG ORANGE</option>
                                            <option value="MOTHANE SAFETY RED">MOTHANE SAFETY RED</option>
                                            <option value="RIVAL SOUTHWEST BLUE">RIVAL SOUTHWEST BLUE</option>
                                            <option value="IMRON PHOENIX YELLOW">IMRON PHOENIX YELLOW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form">Name & Code</label>
                                    <input type="text" class="form-control name_and_code_input" id="email">
                                </div>
                                <div class="form-group col-3">
                                    <label for="email" class="label-form">Cost</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group col-3 ">
                                    <button type="submit" class="btn btn-primary top-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg>
                                    Add Paint
                                </button>
                            </div>
                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function() {
        $('body').on('keyup keydown cut paste change focus drop', ".form-control", function() {
            if ($(this).val().length != 0) {
                $(this).closest('.form-group').addClass('show-label');
            } else {
                $(this).closest('.form-group').removeClass('show-label');
            }
        });
        
        $('.form-control').each(function() {
            if ($(this).val().length != 0) {
                $(this).closest('.form-group').addClass('show-label');
            }
        });
        
        $('[data-toggle="tooltip"]').tooltip({
            container: '.container',
            viewport: {
                selector: '.container',
                padding: 15
            }
        });
        
    });
</script>
@endsection
